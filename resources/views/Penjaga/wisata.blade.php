@extends('penjaga.template')

@section('title')
Wisata Yogyatourism
@endsection

@section('content')


<!-- Main konten utama Website  -->
<main>
  <div class="container">
    <div class="container-fluid">
      <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
        <h5 class=" mb-0 text-gray-800 font-weight-bold">Wisata</h5>
      </div>
      <table class="table table-bordered">
        <tr>
          <td class="bg-light w-25">Nama Wisata</td>
          <td>{{$wisata->nama_wisata}}</td>
        </tr>
        <tr>
          <td class="bg-light w-25">Jenis Wisata</td>
          <td>{{$wisata->jenis_wisata}}</td>
        </tr>
        <tr>
          <td class="bg-light w-25">Alamat Wisata</td>
          <td>{{$wisata->alamat_wisata}}</td>
        </tr>
        <tr>
          <td class="bg-light w-25">Jumlah Pengunjung</td>
          <td>{{$wisata->jumlah_pengunjung}}</td>
        </tr>
        <tr>
          <td class="bg-light w-25">Harga Wisata</td>
          <td>Rp {{str_replace(',','.',number_format($wisata->harga_wisata))}}</td>
        </tr>
        <tr>
          <td class="bg-light w-25">Status Wisata</td>
          <td>{{$wisata->status_wisata}}</td>
        </tr>
      </table> 
    </div>
  </div>  
</main>
@endsection