<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function create($id)
    {
        $data ['pemesanan'] = Pemesanan::where('id_pemesanan', $id)->first();
        return view ('pembayaran',$data);
    }
    public function store (Request $request)
    {
        $bukti = $request->file('bukti_pembayaran');
        $input ['bukti_pembayaran'] = date ('ymdhis') . "_" . $bukti->getClientOriginalName();
        $bukti->move(public_path('assets/pembayaran'), $input ['bukti_pembayaran']);
        $input['id_pemesanan'] = $request->id_pemesanan;
        $input['bank_pembayaran'] = $request->bank_pembayaran;
        $input['atas_nama_pembayaran'] = $request->atas_nama_pembayaran;
        $input['total_pembayaran'] = $request->total_pembayaran;
        Pembayaran::insert($input);

        $ubah['status_pemesanan']='bayar';
        Pemesanan::where('id_pemesanan', $request->id_pemesanan)->update($ubah);
        return redirect('member/pemesanan');
    }
    public function show($id)
    {
        $data['pembayaran'] = Pembayaran::join('pemesanan', 'pemesanan.id_pemesanan','pembayaran.id_pemesanan')->where('pembayaran.id_pemesanan', $id)->first();
        return view ('member.tampil_pembayaran', $data);
    }
}
