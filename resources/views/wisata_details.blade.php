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
              <li class="breadcrumb-item active">
                Details
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 pl-lg-0">
          <div class="card card-details">
            <h1>{{$detail->nama_wisata}}</h1>
            <p>{{$detail->alamat_wisata}}</p>
            <div class="gallery">
              <div class="xzoom-container">
                <!--Thumbnail foto besar-->
                <!--xoriginal untuk tag bawaan dr xzoom menandakan gambar asli seperti apa-->
                <img src="/assets/foto/{{$foto_utama->file_foto}}" class="xzoom" id="xzoom-default"
                xoriginal="/assets/foto/{{$foto_utama->file_foto}}" alt="Detail Foto"/>
              </div>
              <!--Thumbnail foto kecil2-->
              <div class="xzoom-thumbs">
                @foreach ($foto as $key => $value)
                <a href="/assets/foto/{{$value->file_foto}}">
                  <img src="/assets/foto/{{$value->file_foto}}" class="xzoom-gallery" xpreview="/assets/foto/{{$value->file_foto}}" width="128" />
                </a>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-details card-right">
            <h2>Informasi Wisata</h2>
            <table class="trip-informations">
              <!--TR table row-->
              <tr>
                <!--Th Table Heading-->
                <th width="50%" >Jenis Wisata</th>
                <td width="50%" class="text-right" >
                  {{$detail->jenis_wisata}}
                </td>
              </tr>
              <tr>
                <!--Th Table Heading-->
                <th width="50%" >Pengunjung</th>
                <td width="50%" class="text-right" >
                  {{$detail->jumlah_pengunjung}}
                </td>
              </tr>
              <tr>
                <!--Th Table Heading-->
                <th width="50%" >Harga </th>
                <td width="50%" class="text-right" >
                  Rp {{str_replace(',','.', number_format($detail->harga_wisata))}} / orang
                </td>
              </tr>
            </table>
          </div>
          <div class="join-container">
            <button id="join_now" type="button" class="btn btn-block btn-join-now mt-3 py-2 @if(!session()->has('id_member')) disabled @endif">
              Bergabung Sekarang
            </button>
          </div>
          <form action="/pemesanan" method="post" style="display: none;" id="form-pemesanan" class="mt-3">
            @method('post')
            @csrf()
            <input type="hidden" name="id_wisata" value="{{ $detail->id_wisata }}">
            <div class="card card-details card-right">
              <div class="mb-3">
                <label class="form-label">Rencana Berkunjung</label>
                <input type="date" name="tanggal_kunjungan" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Jumlah Tiket</label>
                <input type="number" name="jumlah_pemesanan" class="form-control">
              </div>
              <div class="join-container">
                <button class="btn btn-block btn-join-now mt-3 py-2" >Pesan Sekarang</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col text-center">
            <h2>Testimoni</h2>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="section-popular-travel">
          <ul class="list-group">
            @foreach ($rating as $key => $value)  
            <li class="list-group-item">      
              <div class="row">
                <div class="col-1 float-end">
                <img src="/assets/frontend/images/avatar-1.png" alt="User" class="mb-4 rounded-circle w-100">
              </div>
              <div class="col-11 float-start">
                <p>
                  <b>{{ $value->nama_member }}</b>
                  <br>
                  <?php
                  for ($i=1; $i <= round($value->nilai_rating); $i++){?>
                    <i class="bi bi-star-fill" style="color: #ee4d2d;"></i>
                    <?php } ?>
                    <br>
                    <span class="testimonial">{{ $value->ulasan_rating }}</span>
                  </p>
                </div>
              </div>
            </li>
            @endforeach
          </div>
        </div>
      </ul>
    </div>
  </div>
</section>
</main>

<script>
  $(document).ready(function(){
    $('#join_now').on('click', function(e) {
      e.preventDefault();
      $('#form-pemesanan').show(1000);
    })
  })
</script>


@endsection