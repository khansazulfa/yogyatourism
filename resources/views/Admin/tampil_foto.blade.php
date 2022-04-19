@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Foto</h1>
</div>

<div class="table-responsif">
    <table class="table table-bordered" id="dttables">
        <thead>
            <tr>
                <th>No.</th>
                <th>Wisata</th>
                <th>Foto</th>
                <th>Caption Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($foto as $key => $value)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$value->nama_wisata}}</td>
                <td><img src="/assets/foto/{{$value->file_foto}}" alt="" class="w-25"></td>
                <td>{{$value->caption_foto}}</td>
                <td>
                    <a href="/admin/foto/{{$value->id_foto}}" class="btn btn-warning btn-sm">Ubah</a>
                    <form action="/admin/foto/{{$value->id_foto}}/{{$value->id_wisata}}" method="post" class="d-inline">
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

<a href="/admin/foto/{{$id_wisata}}/create" class="btn btn-primary">Tambah</a>

@endsection