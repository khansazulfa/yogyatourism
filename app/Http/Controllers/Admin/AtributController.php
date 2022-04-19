<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Atribut;

class AtributController extends Controller
{
    public function index()
    {
        $data ['atribut'] = Atribut::all();
        return view ('admin.tampil_atribut',$data);
    }
     
    public function create()
    {
        return view ('admin.tambah_atribut');
    }

    public function store(Request $request)
    {
        $inputan['nama_atribut'] = $request->nama;
        Atribut::insert($inputan);
        return redirect ('admin/atribut');
    }
    public function show ($id)
    {
        $data['atribut'] = Atribut::where('id_atribut','=',$id)->first();
        return view('admin.ubah_atribut', $data);
    }
    public function update(Request $request, $id)
    {
        $inputan['nama_atribut'] = $request->nama;
        Atribut::where('id_atribut','=', $id)->update($inputan);
        return redirect('admin/atribut');
    }
    public function destroy($id)
    {
        $data['atribut'] = Atribut::where('id_atribut','=', $id)->delete();
        return redirect('admin/atribut');
    }
}
