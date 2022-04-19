<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member_atribut;

class Member_AtributController extends Controller
{
    public function index()
    {
        $data ['member_atribut'] = Member_atribut::all();
        return view ('admin.tampil_member_atribut',$data);
    }
    public function create ()
    {
        return view ('admin.tambah_member_atribut');
    }
     public function store (Request $request)
    {
    $inputan['id_member'] = $request->id;
    $inputan['id_detail_atribut'] = $request->detail;
    Member_atribut::insert($inputan);
    return redirect ('admin/member_atribut');
    }
     public function show ($id)
    {
        $data['member_atribut'] = Member_atribut::where('id_member_atribut','=',$id)->first();
        return view('admin.ubah_member_atribut', $data);
    }
    public function update(Request $request, $id)
    {
    $inputan['id_member'] = $request->id;
    $inputan['id_detail_atribut'] = $request->detail;
        Member_atribut::where('id_member_atribut','=', $id)->update($inputan);
        return redirect('admin/member_atribut');
    }
    public function destroy($id)
    {
        $data['member_atribut'] = Member_atribut::where('id_member_atribut','=', $id)->delete();
        return redirect('admin/member_atribut');
    }
}
