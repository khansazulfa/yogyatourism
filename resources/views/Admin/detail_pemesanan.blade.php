@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Detail Pemesanan</h1>
</div>
<table class="table table-bordered">
  <tr>
    <td class="bg-light" width="20%">Nama Member</td>
    <td>{{$detail->nama_member}}</td>
  </tr>
  <tr>
    <td class="bg-light" width="20%">Nama Tempat Wisata</td>
    <td>{{$detail->nama_wisata}}</td>
  </tr>
  <tr>
    <td class="bg-light" width="20%">Kode Pemesanan</td>
    <td>{{$detail->kode_pemesanan}}</td>
  </tr>
  <tr>
    <td class="bg-light" width="20%">Tanggal Pemesanan</td>
    <td>{{$detail->tanggal_pemesanan}}</td>
  </tr>
  <tr>
    <td class="bg-light" width="20%">Tanggal Kunjungan</td>
    <td>{{$detail->kunjungan_pemesanan}}</td>
  </tr>
  <tr>
    <td class="bg-light" width="20%">Jumlah Tiket</td>
    <td>{{$detail->jumlah_pemesanan}}</td>
  </tr>
  <tr>
    <td class="bg-light" width="20%">Harga Tiket Satuan</td>
    <td>{{$detail->total_harga_pemesanan / $detail->jumlah_pemesanan}}</td>
  </tr>
  <tr>
    <td class="bg-light" width="20%">Total Harga Pemesanan</td>
    <td>{{$detail->total_harga_pemesanan}}</td>
  </tr>
  <tr>
    <td class="bg-light" width="20%">Status Pemesanan</td>
    <td>{{$detail->status_pemesanan}}</td>
  </tr>
  
</table>
<a href="/admin/pemesanan/" class="btn btn-primary btn-sm">Kembali</a>
@endsection