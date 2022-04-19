<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
       public function index()
    {
        $data ['pemesanan'] = Pemesanan::join('member','member.id_member', 'pemesanan.id_member')->join('wisata','wisata.id_wisata','pemesanan.id_wisata')->get();
        return view ('admin.tampil_pemesanan',$data);
    }
    public function show ($id)
    {
        $data['detail'] = Pemesanan::join('member','member.id_member','pemesanan.id_member')->join('wisata','wisata.id_wisata','pemesanan.id_wisata')->first();
         return view ('admin.detail_pemesanan',$data);
    }
     public function store (Request $request)
    {
    $inputan['id_wisata'] = $request->wisata;
    $inputan['nama_penjaga'] = $request->nama;
    $inputan['email_penjaga'] = $request->email;
    $inputan['password_penjaga'] = $request->ps;
    $inputan['status_penjaga'] = $request->status;
    Penjaga::insert($inputan);
    return redirect ('admin/pemesanan');
    }
    public function edit ($id)
    {
        $data['wisata'] = Wisata::all();
        $data['pemesanan'] = Pemesanan::where('id_penjaga','=',$id)->first();
        return view('admin.ubah_pemesanan', $data);
    }
   
}
