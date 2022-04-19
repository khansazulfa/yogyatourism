@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Pembayaran</h1>
</div>
<form method="post" action="/admin/pembayaran/{{$detail->id_pembayaran}}">
    @method('patch')
    @csrf
    <table class="table table-bordered">
        <tr>
            <td class="bg-light" width="20%">Nama Bank</td>
            <td>{{$detail->bank_pembayaran}}</td>
        </tr>
        <tr>
            <td class="bg-light" width="20%">Atas Nama</td>
            <td>{{$detail->atas_nama_pembayaran}}</td>
        </tr>
        <tr>
            <td class="bg-light" width="20%">Total Pembayaran</td>
            <td>{{$detail->total_pembayaran}}</td>
        </tr>
        <tr>
            <td class="bg-light" width="20%">Tujuan Wisata</td>
            <td>{{$detail->nama_wisata}} sebanyak {{ $detail->jumlah_pemesanan }}</td>
        </tr>
        <tr>
            <td class="bg-light" width="20%">Bukti Pembayaran</td>
            <td>
                <img src="/assets/pembayaran/{{$detail->bukti_pembayaran}}" class="w-75" >
            </td>
        </tr>
        @if($detail->status_pemesanan=='bayar')
        <tr>
            <td class="bg-light" >Ubah Status Pembayaran</td>
            <td>
                <select class="form-control" name="status_pemesanan" >
                    <option value="bayar" @if($detail->status_pemesanan=='bayar') selected @endif>Bayar</option>
                    <option value="konfirmasi_bayar" @if($detail->status_pemesanan=='konfirmasi_bayar')selected @endif>Konfirmasi Bayar</option>
                    <option value="batal" @if($detail->status_pemesanan=='batal')selected @endif>Batal</option>
                </select>
            </td>
        </tr>
        @endif
    </table>
    @if($detail->status_pemesanan=='bayar')
    <button class="btn btn-primary btn-sm">Simpan</button>
    @endif
</form>
@endsection