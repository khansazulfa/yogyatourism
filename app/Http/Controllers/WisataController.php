<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Foto;
use App\Models\Rating;

class WisataController extends Controller
{
    public function index ()
    {
        $data['wisata'] = Wisata::get();
        foreach ($data['wisata'] as $key =>$value){
            //Mengambil foto pertama berdasarkan id_wisata
            $data_foto = Foto::where('id_wisata', $value->id_wisata)->first();
            if ($data_foto){
                $data['foto'][$value->id_wisata] = $data_foto->file_foto;
            } else {
                $data['foto'][$value->id_wisata] = '';
            }
        }
        return view ('wisata_tampil', $data);
    }

    public function show($id)
    {
        $data['detail'] =  Wisata::where('id_wisata', $id)->first();
        $data['foto_utama'] = Foto::where('id_wisata', $id)->first();
        $data['foto'] = Foto::where('id_wisata', $id)->get();
        $data['rating'] = Rating::join('member','member.id_member','=','rating.id_member')->join('wisata','wisata.id_wisata','rating.id_wisata')->where('rating.id_wisata', $id)->get();
        return view ('wisata_details' , $data);
    }
    public function cari (Request $request)
    {
        $cari = $request->cari;
        return redirect('wisata/hasil/' .$cari);
    }
    public function hasil ($cari)
    {
        $data['wisata'] = Wisata::where('nama_wisata','like',"%$cari%")->get();
        foreach ($data['wisata'] as $key =>$value){
            //Mengambil foto pertama berdasarkan id_wisata
            $data_foto = Foto::where('id_wisata', $value->id_wisata)->first();
            if ($data_foto){
                $data['foto'][$value->id_wisata] = $data_foto->file_foto;
            } else {
                $data['foto'][$value->id_wisata] = '';
            }
        }
        return view ('wisata_cari', $data);
    }
    public function kategori ($kategori)
    {
        $data['kategori']=$kategori;
        $data['wisata'] = Wisata::where('jenis_wisata','=',"$kategori")->get();
        foreach ($data['wisata'] as $key =>$value){
            //Mengambil foto pertama berdasarkan id_wisata
            $data_foto = Foto::where('id_wisata', $value->id_wisata)->first();
            if ($data_foto){
                $data['foto'][$value->id_wisata] = $data_foto->file_foto;
            } else {
                $data['foto'][$value->id_wisata] = '';
            }
        }
        return view ('wisata_kategori', $data);
    }
}
