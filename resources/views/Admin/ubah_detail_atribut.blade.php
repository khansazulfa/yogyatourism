@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Ubah Detail Atribut</h1>
</div>      
<form action="/admin/detail_atribut/{{$detail_atribut->id_detail_atribut}}" method="post">
   @method ('patch')
   @csrf
   <div class="mb-3">
      <label for="" class="form-label">Nama Atribut </label>
      <select name="id" class="form-control">
         <option value="">Pilih Atribut</option>
         @foreach ($atribut as $key => $value)
         <option value="{{$value->id_atribut}}" @if ($value -> id_atribut==$detail_atribut->id_atribut) selected @endif> 
            {{$value->nama_atribut}}</option>
            @endforeach
         </select>
      </div>
      <div class="mb-3">
         <label for="" class="form-label">Nama Detail Atribut </label>
         <input type="text" class="form-control" name="nama" value="{{$detail_atribut->nama_detail_atribut}}">
      </div>
      <div class="mb-3">
         <label for="" class="form-label">Keterangan Detail Atribut </label>
         <input type="text" class="form-control" name="ket" value="{{$detail_atribut->keterangan_detail_atribut}}">
      </div>
      <div class="mb-3">
         <button class="btn btn-primary">Simpan</button>
      </div>
   </form>
   
   @endsection