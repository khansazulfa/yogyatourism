<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Detail_atribut;
use App\Models\Atribut;

class Detail_AtributController extends Controller
{
     public function show($id)
    {
        $data ['detail_atribut'] = Detail_atribut::join('atribut','atribut.id_atribut',
        'detail_atribut.id_atribut')->where('detail_atribut.id_atribut', $id)->get();
        return view ('admin.tampil_detail_atribut',$data);
    }
     public function create()
    {
        $data['atr'] = Atribut::all();
        return view ('admin.tambah_detail_atribut', $data);
    }
    public function store (Request $request)
    {
    $inputan['id_atribut'] = $request->id;
    $inputan['nama_detail_atribut'] = $request->nama;
    $inputan['keterangan_detail_atribut'] = $request->ket;
    Detail_atribut::insert($inputan);
    return redirect ('admin/detail_atribut/' . $inputan['id_atribut'] . '/show');
    }
      public function edit ($id)
    {
        $data['atribut'] = Atribut::all();
        $data['detail_atribut'] = Detail_atribut::where('id_detail_atribut','=',$id)->first();
        return view('admin.ubah_detail_atribut', $data);
    }
    public function update(Request $request, $id)
    {
    $inputan['id_atribut'] = $request->id;
    $inputan['nama_detail_atribut'] = $request->nama;
    $inputan['keterangan_detail_atribut'] = $request->ket;
        Detail_atribut::where('id_detail_atribut','=', $id)->update($inputan);
        return redirect('admin/detail_atribut/' . $inputan['id_atribut'].'/show');
    } 
    public function destroy($id, $id_atr)
    {
        $data['detail_atribut'] = Detail_atribut::where('id_detail_atribut','=', $id)->delete();
        return redirect('admin/detail_atribut/' . $id_atr . '/show');
    }

}
