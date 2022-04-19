@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Penjaga</h1>
</div>

<div class="table-responsif">
    <table class="table table-bordered" id="dttables">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Wisata</th>
                <th>Nama Penjaga</th>
                <th>Email Penjaga</th>
                <th>Password Penjaga</th>
                <th>Status Penjaga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjaga as $key => $value)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$value->nama_wisata}}</td>
                <td>{{$value->nama_penjaga}}</td>
                <td>{{$value->email_penjaga}}</td>
                <td>{{$value->password_penjaga}}</td>
                <td>{{$value->status_penjaga}}</td>
                <td>
                    <a href="/admin/penjaga/{{$value->id_penjaga}}" class="btn btn-warning btn-sm">Ubah</a>
                    <form action="/admin/penjaga/{{$value->id_penjaga}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<a href="/admin/penjaga/create" class="btn btn-primary">Tambah</a>

@endsection