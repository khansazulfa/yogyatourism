@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pembayaran</h1>
</div>

<div class="table-responsif">
    <table class="table table-bordered" id="dttables">
        <thead>
            <tr>
                <th>No.</th>
                <th>ID Pemesanan</th>
                <th>Bank Pembayaran</th>
                <th>Atas Nama Pembayaran</th>
                <th>Total Pembayaran</th>
                <th>Bukti Pembayaran</th>
                <th>Status Pemesanan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembayaran as $key => $value)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$value->id_pemesanan}}</td>
                <td>{{$value->bank_pembayaran}}</td>
                <td>{{$value->atas_nama_pembayaran}}</td>
                <td>{{$value->total_pembayaran}}</td>
                <td>{{$value->bukti_pembayaran}}</td>
                <td>{{$value->status_pemesanan}}</td>
                <td>
                    <a href="/admin/pembayaran/{{ $value->id_pembayaran }}" class="btn btn-primary">
                    Konfirmasi Pembayaran</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection