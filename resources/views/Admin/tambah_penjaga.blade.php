@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Penjaga</h1>
</div>
<form action="/admin/penjaga" method="post">
    @method ('post')
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">ID Wisata</label>
           <select name="wisata" id="" class="form-control">
            <option value="Pilih Wisara">Pilih</option>
            @foreach ($wisata as $key => $value)
                <option value="{{ $value->id_wisata }}">{{ $value->nama_wisata }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nama Penjaga</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="mb-3">            
        <label for="" class="form-label">Email Penjaga</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Password Penjaga</label>
        <input type="text" name="ps" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Status Penjaga</label>
        <select name="status" class="form-control">
            <option value="aktif">Aktif</option>
            <option value="tidak aktif">Tidak Aktif</option>
        </select>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>

@endsection