<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Penjaga;
use App\Models\Member;

class LoginController extends Controller
{
    public function index ()
    {
        return view ('login');
    }

    public function login (Request $request)
    {
        // Mengambil data username dari form yang akan di cek ke database
        $cek_admin= Admin::where('username_admin', $request->username)->first();
        if (!empty($cek_admin)){
            //Jika username ada di database, maka Mengecek password yg ada di database dengan password yang dari form
            if (Hash::check($request->password, $cek_admin->password_admin)) {
                //Jika cek password benar, maka selanjutnya membuat session denfan nama sesuai kolom di database dan diisi data sesuai data yang login
                $request->session()->put('id_admin', $cek_admin->id_admin);
                $request->session()->put('nama_admin', $cek_admin->nama_admin);
                $request->session()->put('username_admin', $cek_admin->username_admin);
                $request->session()->put('password_admin', $cek_admin->password_admin);
                // terakhir arahkan url ke halaman dashbord admin
                return redirect('admin')->with('pesan', 'Login berhasil');
            } else {
                return redirect('login')->with('pesan', 'Login gagal');
            }
        } else {
                $cek_penjaga= Penjaga::where('email_penjaga', $request->username)->first();
                if(!empty($cek_penjaga)) {
                    if(Hash::check($request->password, $cek_penjaga->password_penjaga)){
                        $request->session()->put('id_penjaga', $cek_penjaga->id_penjaga);
                        $request->session()->put('id_wisata', $cek_penjaga->id_wisata);
                        $request->session()->put('nama_penjaga', $cek_penjaga->nama_penjaga);
                        $request->session()->put('email_penjaga', $cek_penjaga->email_penjaga);
                        $request->session()->put('password_penjaga', $cek_penjaga->password_penjaga);
                        $request->session()->put('status_penjaga', $cek_penjaga->status_penjaga);
                        return redirect('penjaga')->with('pesan',' Login Berhasil');
                } else {
                    return redirect('login')->with('pesan', 'Login Gagal');
                } 
            }  else {
                 $cek_member= Member::where('email_member', $request->username)->first();
                if(!empty($cek_member)) {
                    if(Hash::check($request->password, $cek_member->password_member)){
                        $request->session()->put('id_member', $cek_member->id_member);
                        $request->session()->put('nama_member', $cek_member->nama_member);
                        $request->session()->put('email_member', $cek_member->email_member);
                        $request->session()->put('password_member', $cek_member->password_member);
                        return redirect('member')->with('pesan',' Login Berhasil');
                    } else {
                        return redirect('login')->with('pesan', 'Login Gagal');
                    }
                }
            }
        }
    }
}