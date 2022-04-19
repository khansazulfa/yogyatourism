@extends('admin.template')
@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah Pemesanan</h1>
</div>
<form action="/admin/pemesanan/{{$pemesanan->id_pemesanan}}" method="post">
    @method ('patch')
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">NAma Member</label>
        <input type="text" class="form-control" name="member" value="{{$pemesanan->id_member}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nama Wisata</label>
        <input type="text" class="form-control" name="wisata" value="{{$pemesanan->id_wisata}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Kode Pemesanan</label>
        <input type="text" class="form-control" name="kode" value="{{$pemesanan->kode_pemesanan}}" >
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tanggal Pemesanan</label>
        <input type="date" class="form-control" name="tanggal" value="{{$pemesanan->tanggal_pemesanan}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Kunjungan Pemesanan</label>
        <input type="date" class="form-control" name="kunjung" value="{{$pemesanan->kunjungan_pemesanan}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Jumlah Pemesanan</label>
        <input type="text" class="form-control" name="jumlah" value="{{$pemesanan->jumlah_pemesanan}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Total Harga Pemesanan</label>
        <input type="text" class="form-control" name="total" value="{{$pemesanan->total_harga_pemesanan}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Status Pemesanan</label>
        <select name="status" class="form-control" value="{{$pemesanan->status_pemesanan}}">
            <option value="pending">Pending</option>
            <option value="bayar">Bayar</option>
            <option value="konfirmasi_bayar">Konfirmasi Bayar</option>
            <option value="batal">Batal</option>
            <option value="selesai">Selesai</option>
        </select>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>

@endsection