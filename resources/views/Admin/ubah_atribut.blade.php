@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Ubah Atribut</h1>
</div>
<form action="/admin/atribut/{{$atribut->id_atribut}}" method="post">
   @method ('patch')
   @csrf
   <div class="mb-3">
      <label for="" class="form-label">Nama </label>
      <input type="text" class="form-control" name="nama" value="{{$atribut->nama_atribut}}">
   </div>
   <div class="mb-3">
      <button class="btn btn-primary">Simpan</button>
   </div>
</form>

@endsection