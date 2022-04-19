@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah Member Atribut</h1>
</div>
<form action="/admin/member_atribut/{{$member_atribut->id_member_atribut}}" method="post">
    @method ('patch')
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nama Member</label>
        <input type="text" class="form-control" name="id" value="{{$member_atribut->id_member}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nama Detail Atribut</label>
        <input type="text" class="form-control" name="detail" value="{{$member_atribut->id_detail_atribut}}" >
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>

@endsection