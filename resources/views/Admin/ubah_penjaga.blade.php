@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah Penjaga</h1>
</div>
<form action="/admin/penjaga/{{$penjaga->id_penjaga}}" method="post">
    @method ('patch')
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nama Wisata</label>
        <select name="wisata"  class="form-control">
            <option value="Pilih Wisata">Pilih</option>
            @foreach ($wisata as $key => $value)
                <option value="{{ $value->id_wisata }}" @if($penjaga->id_wisata==$value->id_wisata) selected @endif>{{ $value->nama_wisata }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nama Penjaga</label>
        <input type="text" class="form-control" name="nama" value="{{$penjaga->nama_penjaga}}" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email Penjaga</label>
        <input type="email" class="form-control" name="email" value="{{$penjaga->email_penjaga}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Password Penjaga</label>
        <input type="text" class="form-control" name="ps" value="{{$penjaga->password_penjaga}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Status Penjaga</label>
        <select name="status" class="form-control" value="{{$penjaga->status_penjaga}}">
            <option value="aktif" @if($penjaga->status_penjaga=='aktif')selected @endif>Aktif</option>
            <option value="tidak aktif"@if($penjaga->status_penjaga=='tidak aktif')selected @endif>Tidak Aktif</option>
        </select>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>

@endsection