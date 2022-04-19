@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Detail Wisata</h1>
</div>
<table class="table table-bordered">
  <tr>
    <td class="bg-light" width="20%">Nama Wisata</td>
    <td>{{$detail->nama_wisata}}</td>
  </tr>
  <tr>
    <td class="bg-light" width="20%">Jenis Wisata</td>
    <td>{{$detail->jenis_wisata}}</td>
  </tr>
  <tr>
    <td class="bg-light" width="20%">Alamat Wisata</td>
    <td>{{$detail->alamat_wisata}}</td>
  </tr>
  <tr>
    <td class="bg-light" width="20%">Jumlah Pengunjung</td>
    <td>{{$detail->jumlah_pengunjung}}</td>
  </tr>
  <tr>
    <td class="bg-light" width="20%">Harga Wisata</td>
    <td>{{$detail->harga_wisata}}</td>
  </tr>
  <tr>
    <td class="bg-light" width="20%">Status Wisata</td>
    <td>{{$detail->status_wisata}}</td>
  </tr>
  
  
</table>
<a href="/admin/wisata/" class="btn btn-primary btn-sm">Kembali</a>
@endsection