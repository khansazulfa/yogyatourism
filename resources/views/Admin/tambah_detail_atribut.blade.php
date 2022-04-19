@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Tambah Detail Atribut</h1>
</div>
<form action="/admin/detail_atribut" method="post">
   @method ('post')
   @csrf
   <div class="mb-3">
      <label for="" class="form-label">ID Atribut </label>
      <select name="id" class="form-control">
         <option value="">Pilih</option>
         @foreach ($atr as $key => $value)
         <option value="{{$value->id_atribut}}">{{$value->nama_atribut}}</option>
         @endforeach
      </select>
   </div>
   <div class="mb-3">
      <label for="" class="form-label">Nama Detail Atribut </label>
      <input type="text" class="form-control" name="nama">
   </div>
   <div class="mb-3">
      <label for="" class="form-label">Keterangan Detail Atribut </label>
      <input type="text" class="form-control" name="ket">
   </div>
   <div class="mb-3">
      <button class="btn btn-primary">Simpan</button>
   </div>
</form>

@endsection