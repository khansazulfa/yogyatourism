<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Member_atribut;

class MemberController extends Controller
{
    public function index()
    {
        $data ['member'] = Member::all();
        return view ('admin.tampil_member',$data);
    }
    public function show($id)
    {
        $data['member_atribut'] = Member_atribut::join('detail_atribut','detail_atribut.id_detail_atribut',
        'member_atribut.id_detail_atribut')->join('atribut','atribut.id_atribut','detail_atribut.id_atribut') 
        ->join('member','member.id_member','member_atribut.id_member')->where('member_atribut.id_member', $id)->get();
        return view ('admin.tampil_member_atribut', $data);
    }
}
