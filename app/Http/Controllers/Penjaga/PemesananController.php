<?php

namespace App\Http\Controllers\Penjaga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
      public function index()
    {
        $data ['pemesanan'] = Pemesanan::where('id_wisata', session()->get('id_wisata'))->get();
        return view('penjaga.pemesanan', $data);
    }
}
