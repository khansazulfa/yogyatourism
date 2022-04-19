<?php

namespace App\Http\Controllers\Penjaga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penjaga;

class ProfilController extends Controller
{
    public function update (Request $request, $id)
    {
    //untuk ubah profil agak beda dengan ubah data biasa. Karena di ubah profil setelah ubah ke database harus ubah ke session
    $inputan ['nama_penjaga']=$request->nama_penjaga;
    $inputan ['email_penjaga']=$request->email_penjaga;
    Penjaga::where('id_penjaga', $id)->update($inputan);

    $request->session()->put('nama_penjaga', $request->nama_penjaga);
    $request->session()->put('email_penjaga', $request->email_penjaga);
    return redirect('penjaga')->with('sukses_profil', 'Ubah Profil berhasil');
    }
}
