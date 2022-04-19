<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penjaga;
use App\Models\Wisata;

class PenjagaController extends Controller
{
      public function index()
    {
        $data['penjaga'] = Penjaga::join('wisata','wisata.id_wisata','penjaga.id_wisata')->get();
        return view ('admin.tampil_penjaga',$data);
    }
     public function create()
    {
        $data['wisata']= Wisata::all();
        return view ('admin.tambah_penjaga',$data);
    }
     public function store (Request $request)
    {
    $inputan['id_wisata'] = $request->wisata;
    $inputan['nama_penjaga'] = $request->nama;
    $inputan['email_penjaga'] = $request->email;
    $inputan['password_penjaga'] = bcrypt($request->ps);
    $inputan['status_penjaga'] = $request->status;
    Penjaga::insert($inputan);
    return redirect ('admin/penjaga');
    }
    public function edit ($id)
    {
        $data['wisata'] = Wisata::all();
        $data['penjaga'] = Penjaga::where('id_penjaga','=',$id)->first();
        return view('admin.ubah_penjaga', $data);
    }
    public function update(Request $request, $id)
    {
    $inputan['id_wisata'] = $request->wisata;
    $inputan['nama_penjaga'] = $request->nama;
    $inputan['email_penjaga'] = $request->email;
    if(!empty($request->ps)){
            $inputan['password_penjaga'] = bcrypt($request->ps);
    }
    $inputan['status_penjaga'] = $request->status;
        Penjaga::where('id_penjaga','=', $id)->update($inputan);
        return redirect('admin/penjaga');
    }
    public function destroy($id)
    {
        $data['penjaga'] = Penjaga::where('id_penjaga','=', $id)->delete();
        return redirect('admin/penjaga');
    }
}
