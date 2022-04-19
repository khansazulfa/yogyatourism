@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah Wisata</h1>
</div>
<form action="/admin/wisata/{{$wisata->id_wisata}}" method="post">
    @method ('patch')
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nama Wisata</label>
        <input type="text" class="form-control" name="nama" value="{{$wisata->nama_wisata}}" >
    </div>
    <div class="mb-3">            
        <label for="" class="form-label">Jenis Wisata</label>
        
        <select name="jenis" class="form-control" value="{{$wisata->jenis_wisata}}">
            <option value="bahari">Bahari</option>
            <option value="pegunungan">Pegunungan</option>
            <option value="budaya">Budaya</option>
            <option value="edukasi">Edukasi</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Alamat Wisata</label>
        <textarea class="form-control" name="alamat" value="{{$wisata->alamat_wisata}}"></textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Jumlah Pengunjung</label>
        <input type="number" class="form-control" name="jumlah" value="{{$wisata->jumlah_pengunjung}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Harga Wisata</label>
        <input type="number" class="form-control" name="harga" value="{{$wisata->harga_wisata}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Status Wisata</label>
        <select name="status" class="form-control" value="{{$wisata->status_wisata}}">
            <option value="aktif">Aktif</option>
            <option value="tidak aktif">Tidak Aktif</option>
        </select>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>

@endsection