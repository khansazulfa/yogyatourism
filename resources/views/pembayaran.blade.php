@extends('template')
@section('konten')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <!-- breadcrumb pada bagiat "paket travel" -->
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Home
                            </li>
                            <li class="breadcrumb-item ">
                                Details Wisata
                            </li>
                            <li class="breadcrumb-item active">
                                Pemesanan
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                 @include('member.menu_member')
                <div class="col-lg-9 pl-lg-0">
                    <div class="card card-details">
                        <h1>Pembayaran Pemesanan {{$pemesanan->kode_pemesanan }}</h1>
                        <form action="/pembayaran" method="post" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <input type="hidden" name="id_pemesanan" value="{{$pemesanan->id_pemesanan }}">
                            <div class="mb-3">
                                <label class="form-label">Bank</label>
                                <input type="text" name="bank_pembayaran" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Atas Nama</label>
                                <input type="text" name="atas_nama_pembayaran" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Total Bayar</label>
                                <input type="number" name="total_pembayaran" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bukti Transfer</label>
                                <input type="file" name="bukti_pembayaran" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-login">Simpan</button>
                            </div>
                        </form>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</section>
</main>
@endsection


