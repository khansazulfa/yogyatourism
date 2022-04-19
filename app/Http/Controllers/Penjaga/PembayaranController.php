<?php

namespace App\Http\Controllers\Penjaga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
        public function index()
    {
        $data['pembayaran'] = Pembayaran::join('pemesanan','pemesanan.id_pemesanan','pembayaran.id_pemesanan')->where('id_wisata', session()->get('id_wisata'))->get();
        return view('penjaga.pembayaran', $data);
    }
}
