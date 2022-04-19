@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Atribut</h1>
</div>

<div class="table-responsif">
    <table class="table table-bordered" id="dttables">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Atribut</th>
                <th>Nama Detail Atribut</th>
                <th>Keterangan Detail Atribut</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detail_atribut as $key => $value)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$value->nama_atribut}}</td>
                <td>{{$value->nama_detail_atribut}}</td>
                <td>{{$value->keterangan_detail_atribut}}</td>
                <td>
                    <a href="/admin/detail_atribut/{{$value->id_detail_atribut}}" class="btn btn-warning btn-sm">Ubah</a>
                    <form action="/admin/detail_atribut/{{$value->id_detail_atribut}}/{{$value->id_atribut}}" method="post" class="d-inline">
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

<a href="/admin/detail_atribut/create" class="btn btn-primary">Tambah</a>

@endsection