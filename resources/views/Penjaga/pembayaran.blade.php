@extends('penjaga.template')

@section('title')
Pembayaran Yogyatourism
@endsection


@section('content')


<!-- Main konten utama Website  -->
<main>
    <div class="container">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
                <h5 class=" mb-0 text-gray-800 font-weight-bold">Wisata</h5>
            </div>
            <div class="table-responsif">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>ID Pemesanan</th>
                            <th>Bank Pembayaran</th>
                            <th>Atas Nama Pembayaran</th>
                            <th>Total Pembayaran</th>
                            <th>Bukti Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembayaran as $key => $value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value->id_pemesanan}}</td>
                            <td>{{$value->bank_pembayaran}}</td>
                            <td>{{$value->atas_nama_pembayaran}}</td>
                            <td>Rp {{str_replace(',','.',number_format($value->total_pembayaran))}}</td>
                            <td>
                                <a href="/assets/pembayaran/{{$value->bukti_pembayaran}}" target="_blank">Download Bukti</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection