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
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Pemesanan Informasi</h1>
                        <table class="trip-informations">
                            <!--TR table row-->
                            <tr>
                                <!--Th Table Heading-->
                                <th width="50%" >Jumlah Tiket</th>
                                <td width="50%" class="text-right" >
                                    {{ $pemesanan['jumlah_kunjungan'] }} orang
                                </td>
                            </tr>
                            <tr>
                                <!--Th Table Heading-->
                                <th width="50%" >Wisata</th>
                                <td width="50%" class="text-right" >
                                    {{ $pemesanan['nama_wisata'] }}
                                </td>
                            </tr>
                            <tr>
                                <!--Th Table Heading-->
                                <th width="50%" >Tanggal Pemesanan</th>
                                <td width="50%" class="text-right" >
                                    {{ $pemesanan['tanggal_pemesanan'] }}
                                </td>
                            </tr>
                            <tr>
                                <!--Th Table Heading-->
                                <th width="50%" >Tanggal Berkunjung</th>
                                <td width="50%" class="text-right">
                                    {{ $pemesanan['tanggal_kunjungan'] }} 
                                </td>
                            </tr>
                            <tr>
                                <!--Th Table Heading-->
                                <th width="50%" >Harga </th>
                                <td width="50%" class="text-right" >
                                    Rp {{ str_replace(',','.' ,number_format($pemesanan['harga_wisata'])) }}
                                </td>
                            </tr>
                            <tr>
                                <!--Th Table Heading-->
                                <th width="50%" >Sub Total </th>
                                <td width="50%" class="text-right" >
                                    Rp {{ str_replace(',','.', number_format($pemesanan['sub_total'])) }}
                                </td>
                            </tr>
                            
                        </table>
                        <hr>
                        <h2>Instruksi Pembayaran</h2>
                        <p class="payment-instructions">
                            Harap selesaikan pembayaran Anda sebelum melanjutkan
                            perjalanan yang indah
                        </p>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="/assets/frontend/images/ic_bank.png" alt="" class="bank-image">
                                <div class="description">
                                    <h3> PT Yogyatourism ID</h3>
                                    <p>
                                        0811 2233 446677
                                        <br>
                                        Bank Central Asia
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4 ">
                    <div class="card card-details card-right">
                        <div class="join-container">
                            <a href="/pemesanan/simpan" class="btn btn-block btn-join-now mt-3 py-2">
                                Lanjutkan Pembayaran
                            </a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="details.html" class="text-muted">
                                Batalkan Pemesanan
                            </a>
                        </div>
                    </div>              
                </div>
            </div>
        </div>
    </div>
</section>
</main>
@endsection


