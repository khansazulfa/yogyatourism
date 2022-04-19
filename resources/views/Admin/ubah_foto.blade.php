@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Ubah Foto</h1>
</div>
<form action="/admin/foto/{{$foto->id_foto}}" method="post" enctype="multipart/form-data">
   @method ('patch')
   @csrf
   <div class="mb-3">
      <label for="" class="form-label">Wisata </label>
      <select name="id_wisata" id="" class="form-control">
         <option value="Pilih Wisata">Pilih</option>
         @foreach($wisata as $key => $value)
         <option value="{{$value->id_wisata}}" @if($value -> id_wisata == $foto->id_wisata) selected @endif > {{$value->nama_wisata}}</option> 
         @endforeach
      </select>
   </div>
   <div class="mb-3">
      <label for="" class="form-label">Foto </label>
      <input type="file" class="form-control" name="file_foto" value="{{$foto->file_foto}}">
   </div>
   <div class="mb-3">
      <label for="" class="form-label">Caption Foto </label>
      <input type="text" class="form-control" name="caption_foto" value="{{$foto->caption_foto}}">
   </div>
   <div class="mb-3">
      <button class="btn btn-primary">Simpan</button>
   </div>
</form>

@endsection