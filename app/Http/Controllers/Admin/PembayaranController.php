<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Wisata;
use App\Models\Pemesanan;


class PembayaranController extends Controller
{
      public function index()
    {
        $data ['pembayaran'] = Pembayaran::join('pemesanan','pemesanan.id_pemesanan', 'pembayaran.id_pemesanan')->get();
        return view ('admin.tampil_pembayaran',$data);
    }

    public function edit($id)
    {
        $data ['detail'] = Pembayaran::join('pemesanan','pemesanan.id_pemesanan', 'pembayaran.id_pemesanan')->join('wisata','wisata.id_wisata', 'pemesanan.id_wisata')->where('id_pembayaran', $id)->first();
         return view ('admin.ubah_pembayaran',$data);
    }
    public function update (Request $request, $id)
    {
        $pembayaran = Pembayaran::join('pemesanan','pemesanan.id_pemesanan', 'pembayaran.id_pemesanan')->join('wisata','wisata.id_wisata', 'pemesanan.id_wisata')->where('id_pembayaran', $id)->first();
        $id_pemesanan = $pembayaran->id_pemesanan;
        $ubah_pemesanan['status_pemesanan'] = $request->status_pemesanan;
        Pemesanan::where('id_pemesanan',$id_pemesanan)->update($ubah_pemesanan);

        if($ubah_pemesanan['status_pemesanan']=='konfirmasi_bayar') {
            $id_wisata = $pembayaran->id_wisata;
            $ubah_wisata['jumlah_pengunjung'] = $pembayaran->jumlah_pengunjung + $pembayaran->jumlah_pemesanan;
            Wisata::where('id_wisata', $id_wisata)->update($ubah_wisata);
        }
        return redirect('/admin/pembayaran');
    }
}
