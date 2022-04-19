<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;

class MemberController extends Controller
{
    public function daftar ()
    {
        return view ('daftar');
    }
    public function store (Request $request)
    {
        $inputan['email_member'] = $request->email;
        $inputan['password_member'] = bcrypt($request->password);
        $inputan['nama_member'] = $request->nama;
        Member::insert($inputan);
        return redirect('login')->with('pesan','Pendaftaran berhasil. Silahkan login sesuai akun anda');
    }
    public function logout (Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerateToken();
        $request->session()->invalidate();
        return redirect ('/login');
    }
}
