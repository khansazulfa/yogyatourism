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
                                Member
                            </li>
                            <li class="breadcrumb-item active">
                                Pembayaran
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                @include('member.menu_member')
                <div class="col-lg-9 pl-lg-0">
                    <div class="card card-details">
                        <h4>Pembayaran Pemesanan {{$pembayaran->kode_pemesanan }}</h4>
                        <table class="table table-bordered">
                          <tr class="mb-3">
                                <td>Bank</td>
                                <td>{{ $pembayaran->bank_pembayaran }}</td>
                          </tr>
                           <tr class="mb-3">
                                <td>Atas Nama</td>
                                <td>{{ $pembayaran->atas_nama_pembayaran }}</td>
                          </tr>
                           <tr class="mb-3">
                                <td>Total Bayar</td>
                                <td>{{ $pembayaran->total_pembayaran }}</td>
                          </tr>
                           <tr class="mb-3">
                                <td>Bukti Transfer</td>
                                <td><img src="/assets/pembayaran/{{ $pembayaran->bukti_pembayaran }}" class="w-100"></td>
                          </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
@endsection


