@extends('template')

@section('konten')
<main>
    <section class="section-details-header" id="header-profile"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <!-- breadcrumb pada bagiat "paket travel" -->
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item ">
                                Home
                            </li>
                            <li class="breadcrumb-item">
                                Member
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
                
                <div class="col-9">
                    <div class="card card-details">
                        <h4>Riwayat Pemesanan</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Pemesanan</th>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Tanggal Kunjungan</th>
                                        <th>Wisata</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Status Pemesanan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pemesanan as $key => $value)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $value->kode_pemesanan }}</td>
                                        <td>{{ $value->tanggal_pemesanan }}</td>
                                        <td>{{ $value->kunjungan_pemesanan }}</td>
                                        <td>{{ $value->nama_wisata }}</td>
                                        <td>{{ $value->jumlah_pemesanan }}</td>
                                        <td>{{ $value->total_harga_pemesanan }}</td>
                                        <td>{{ $value->status_pemesanan }}</td>
                                        <td>
                                        @if($value->status_pemesanan=='pending')
                                            <a href="/pembayaran/create/{{ $value->id_pemesanan }}" class="btn btn-sign-up">Pembayaran</a>
                                        @else
                                            <a href="/pembayaran/show/{{ $value->id_pemesanan }}" class="btn btn-login">Pembayaran</a>
                                        @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>
    </section>
</main>
@endsection


