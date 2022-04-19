@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Member Atribut</h1>
</div>
<form action="/admin/member_atribut" method="post">
    @method ('post')
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">ID Member</label>
        <input type="text" class="form-control" name="id">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">ID Detail Atribut</label>
        <input type="text" class="form-control" name="detail">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>

@endsection