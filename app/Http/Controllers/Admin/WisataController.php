<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataController extends Controller
{
    public function index ()
     {
        $data ['wisata'] = Wisata::all();
        return view ('admin.tampil_wisata',$data);
    }
    public function show ($id)
    {
        $data['detail'] = Wisata::where('id_wisata', '=', $id)->first();
         return view ('admin.detail_wisata',$data);
    }
    public function create ()
    {
        return view ('admin.tambah_wisata');
    }
    public function store (Request $request)
    {
    $inputan['nama_wisata'] = $request->nama;
    $inputan['harga_wisata'] = $request->harga;
    $inputan['jenis_wisata'] = $request->jenis;
    $inputan['alamat_wisata'] = $request->alamat;
    $inputan['jumlah_pengunjung'] = $request->jumlah;
    $inputan['status_wisata'] = $request->status;
    Wisata::insert($inputan);
    return redirect ('admin/wisata');
    }
     public function edit ($id)
    {
        $data['wisata'] = Wisata::where('id_wisata','=',$id)->first();
        return view('admin.ubah_wisata', $data);
    }
    public function update(Request $request, $id)
    {
    $inputan['nama_wisata'] = $request->nama;
    $inputan['harga_wisata'] = $request->harga;
    $inputan['jenis_wisata'] = $request->jenis;
    $inputan['alamat_wisata'] = $request->alamat;
    $inputan['jumlah_pengunjung'] = $request->jumlah;
    $inputan['status_wisata'] = $request->status;
        Wisata::where('id_wisata','=', $id)->update($inputan);
        return redirect('admin/wisata');
    }

    public function destroy($id)
    {
        $data['wisata'] = Wisata::where('id_wisata','=', $id)->delete();
        return redirect('admin/wisata');
    }
}



