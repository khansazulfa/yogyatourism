<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Foto;
use App\Models\Rating;
use App\Models\Member;
use App\Models\Atribut;
use App\Models\Member_atribut;
use App\Models\Pemesanan;


class UtamaController extends Controller
{
    public function index()
    {
        //Mengambil data wisata terpopuler berdasarkan jumlah pengunjung + fotonya
        if(session()->has('id_member')){
            // A. NN
             //Mengambil id yang login
            $id_member = session()->get('id_member');
            //Mengambil atribut
            $atribut = Atribut::get();
            //Mengambil data member selain yang login
            $member = Member::where('id_member','!=',$id_member)->get();
            //Memperulangkan data member yang tidak login gunannya untuk dibandingkan atributnya dengan member yg login
            foreach ($member as $key => $value) {
                $member_training =  $value->id_member;
                //inisiasi data pembilang
                $pembilang[$member_training] = 0;
                //Memperulangkan atribut
                foreach ($atribut as $key2 => $value2) {
                    //Mengambil atribut pilih yang login
                    $aml = Member_atribut::join('detail_atribut','member_atribut.id_detail_atribut','detail_atribut.id_detail_atribut')->where('id_member', $id_member)->where('id_atribut',$value2->id_atribut)->first();
                    
                    //Mengambil data atribut tiap member
                    $amt =  Member_atribut::join('detail_atribut','member_atribut.id_detail_atribut','detail_atribut.id_detail_atribut')->where('id_member', $member_training)->where('id_atribut',$value2->id_atribut)->first();
                    
                    //Membandingkan jika sama 1, jika beda 0,75
                    if($amt AND $aml->id_detail_atribut==$amt->id_detail_atribut){
                        $kedekatan[$member_training][$value2->id_atribut] = 1 * $value2->bobot_atribut;
                    } else {
                        $kedekatan[$member_training][$value2->id_atribut] = 0.75 * $value2->bobot_atribut;
                    }
                    //Menjumlahkan hasil perkalian nilai dengan bobot pada tiap member
                    $pembilang[$member_training] += $kedekatan[$member_training][$value2->id_atribut];
                }
            }
            
            //Mendapatkan data penyebut dengan cara menjumlahkan semua bobot atribut didatabase
             $penyebut = Atribut::sum('bobot_atribut');
            
            
            //Mencari kedekatan
            foreach ($pembilang as $idt => $value) {
                $kedekatan[$idt] = $value / $penyebut;
            }
            
            //Menggurutkan kedekatan dari yang tertinggi valuenya
            arsort ($kedekatan);
            
            //Ambil id yang tertinggi
            $terpilih = array_key_first($kedekatan);
            
            //B. CONTENT BASED
            //Cek apakah user terdekat suda pernah memesan wisata
            $cek  = Pemesanan::join('wisata', 'wisata.id_wisata','pemesanan.id_wisata')->where('id_member',$terpilih)->where('status_pemesanan','selesai')->count();
            
            // Jika sudah pernah maka lanjut
            if ($cek > 0 ){
                //Mendapatkan tempat wisata yang pernah dikunjungi oleh user terpilih
                //Sekalian diurutkan dari jumlah pengunjung terbanyak dan hanya diambil 4
                $pemesanan = Pemesanan::join('wisata', 'wisata.id_wisata','pemesanan.id_wisata')->where('id_member',$terpilih)->where('status_pemesanan'.'selesai')->orderBy('jumlah_pengunjung','desc')->groupBy('pemesanan.id_wisata')->skip(0)->take(4)->get();

                //C.COLLABORATIVE 
                foreach ($pemesanan as $key => $value) {
                    $idw = $value->id_wisata;
                    $avg = Rating::where('id_wisata', $idw)->avg('nilai_rating');
                    $gabung[$idw] = $value->jumlah_pengunjung + $avg;
                }
                arsort($gabung);
                foreach ($gabung as $idw => $value) {
                    $data['wisata'][$idw] = Wisata::where('id_wisata', $idw)->first();
                }
            } else {
                $data ['wisata'] = Wisata::orderBY('jumlah_pengunjung','desc')->skip(0)->take(4)->get();
            }
        } else {
            $data ['wisata'] = Wisata::orderBY('jumlah_pengunjung','desc')->skip(0)->take(4)->get();
        }
        
        foreach ($data['wisata'] as $key =>$value){
            //Mengambil foto pertama berdasarkan id_wisata
            $data_foto = Foto::where('id_wisata', $value->id_wisata)->first();
            if ($data_foto){
                $data['foto'][$value->id_wisata] = $data_foto->file_foto;
            } else {
                $data['foto'][$value->id_wisata] = '';
            }
        }
        $data ['rating'] = Rating::join('wisata','wisata.id_wisata','rating.id_wisata')->join('member','member.id_member','rating.id_member')->orderBY('jumlah_pengunjung','desc')->skip(0)->take(4)->get();
        return view ('index', $data);
    }
}
