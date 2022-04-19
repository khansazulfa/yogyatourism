<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Pemesanan;


class PemesananController extends Controller
{
  
    public function store (Request $request)
    {
        $id_wisata = $request->id_wisata;
        $tanggal_kunjungan = $request->tanggal_kunjungan;
        $jumlah_pemesanan = $request->jumlah_pemesanan;
        $request->session()->put('id_wisata', $id_wisata);    
        $request->session()->put('tanggal_kunjungan', $tanggal_kunjungan);        
        $request->session()->put('jumlah_kunjungan', $jumlah_pemesanan);
        return redirect('pemesanan/checkout');
    }
    public function checkout(Request $request)
    {
        date_default_timezone_set("Asia/Jakarta");
        //Memproses data dari session
        $id_wisata = $request->session()->get('id_wisata');
        $wisata =  Wisata::where('id_wisata',$id_wisata)->first();
        $data['pemesanan']['id_wisata'] = $id_wisata;
        $data['pemesanan']['jumlah_kunjungan'] = $request->session()->get('jumlah_kunjungan');
        $data['pemesanan']['nama_wisata'] = $wisata->nama_wisata;
        $data['pemesanan']['tanggal_pemesanan'] = date("Y-m-d");   
        $data['pemesanan']['tanggal_kunjungan'] = $request->session()->get('tanggal_kunjungan');
        $data['pemesanan']['harga_wisata'] = $wisata->harga_wisata;
        $data['pemesanan']['sub_total'] = $wisata->harga_wisata * $request->session()->get('jumlah_kunjungan');
        return view ('pemesanan',$data ) ;           
    }
    public function simpan()
    {
        date_default_timezone_set("Asia/Jakarta");
        $wisata = Wisata::where('id_wisata',session()->get('id_wisata'))->first();
        $input['id_member'] = session()->get('id_member');
        $input['id_wisata'] = session ()->get('id_wisata');
        $input['kode_pemesanan'] = date ('ymdhis');
        $input['tanggal_pemesanan'] = date ("Y-m-d");
        $input['kunjungan_pemesanan'] = session()->get('tanggal_kunjungan');
        $input['jumlah_pemesanan'] = session()->get('jumlah_kunjungan');
        $input['total_harga_pemesanan'] = $wisata->harga_wisata * session()->get('jumlah_kunjungan');
        $input['status_pemesanan'] = 'pending';
        $id = Pemesanan::insertGetId($input);
        session()->forget(['id_wisata','tanggal_kunjungan','jumlah_kunjungan']);
        return redirect('pembayaran/create/'.$id);
    }
}
