@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Wisata</h1>
</div>

<div class="table-responsif">
    <table class="table table-bordered" id="dttables">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Wisata</th>
                <th>Jenis Wisata</th>
                <th>Harga Wisata</th>
                <th>Status Wisata</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wisata as $key => $value)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$value->nama_wisata}}</td>
                <td>{{$value->jenis_wisata}}</td>
                <td>{{$value->harga_wisata}}</td>
                <td>{{$value->status_wisata}}</td>
                <td>
                    <a href="/admin/foto/{{$value->id_wisata}}/show" class="btn btn-primary btn-sm">Foto</a>
                    <a href="/admin/wisata/{{$value->id_wisata}}/show" class="btn btn-info btn-sm">Detail</a>
                    <a href="/admin/wisata/{{$value->id_wisata}}" class="btn btn-warning btn-sm">Ubah</a>
                    <form action="/admin/wisata/{{$value->id_wisata}}" method="post" class="d-inline">
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
<a href="/admin/wisata/create" class="btn btn-primary">Tambah</a>

@endsection