@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pemesanan</h1>
</div>

<div class="table-responsif">
    <table class="table table-bordered" id="dttables">
        <thead>
            <tr>
                <th>No.</th>
                <th>Member</th>
                <th>Wisata</th>
                <th>Status Pemesanan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemesanan as $key => $value)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$value->nama_member}}</td>
                <td>{{$value->nama_wisata}}</td>
                <td>{{$value->status_pemesanan}}</td>
                <td>
                    <a href="/admin/pemesanan/{{$value->id_pemesanan}}" class="btn btn-info btn-sm">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection