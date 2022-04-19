@extends('penjaga.template')

@section('title')
    Pemesanan Yogyatourism
@endsection

@section('content')
<div class="container">
     <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
              <h5 class=" mb-0 text-gray-800 font-weight-bold">Pemesanan</h5>
            </div>
      
      <div class="table-responsif">
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>No.</th>
                      <th>Kode Pemesanan</th>
                      <th>Tanggal Pemesanan</th>
                      <th>Kunjungan Pemesanan</th>
                      <th>Jumlah Pemesanan</th>
                      <th>Total Harga Pemesanan</th>
                       <th>Status Pemesanan</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($pemesanan as $key => $value)
                  <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$value->kode_pemesanan}}</td>
                        <td>{{$value->tanggal_pemesanan}}</td>
                        <td>{{$value->kunjungan_pemesanan}}</td>
                        <td>{{$value->jumlah_pemesanan}}</td>
                        <td>Rp {{str_replace(',','.',number_format($value->total_harga_pemesanan))}}</td>        
                        <td>{{$value->status_pemesanan}}</td>                  
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
      </div>
      
@endsection