@extends('template')

@section('konten')


<!-- Header -->
<!-- Header salah satu yg ada di html 5, sematic elemen -->
<header class="text-center mt-auto container" id="rcorners1">
  <h1>
    Explore The Beautiful Places
    <br />
    As Easy One Click
  </h1>
  <p class="mt-3">
    You will see beautiful
    <br />
    moments you never see before
  </p>
  <a href="#bagian1" class="btn btn-get-started px-4 mt-4">
    Get Started
  </a>
</header>

<!-- Main konten utama Website  -->
<main>
  <div class="container ">
    <section class="section-stats row justify-content-center" id="stats">
      <div class="col-10 col-md-8 stats-detail shadow">
        <form action="/wisata/cari" method="post"class="mt-2">
          @method('post')
          @csrf
          <div class="input-group mt-4 ">
            <input type="text" class="form-control form-control-lg " name="cari" placeholder="Search">
            <button class="btn btn-login">Cari Tempat Wisata</button>
          </div>
          <br>
          <br>
        </form>
      </div> 
    </section>
  </div>
  
  <section class="section-popular" id="popular">
    <div class="container">
      <div class="row">
        <div class="col text-center section-popular-heading">
          <h2 id="bagian1"> Wisata Popular Search</h2>
          <p>
            Something that you never try
            <br />
            before in this world
          </p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="section-popular-content" id="popularContet">
    <div class="container">
      <div class="section-popular-travel row justify-content-center">
        @foreach ($wisata as $key => $value)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel text-center d-flex flex-column rounded-bottom" id="rcorners2" style="background-image: url('/assets/foto/{{$foto[$value->id_wisata]}}')">
            <div class="travel-country text-capitalize">{{$value->jenis_wisata}}</div>
            <div class="travel-location">{{$value->nama_wisata}}</div>
            <div class="travel-button mt-auto">
              <a href="/wisata/{{$value->id_wisata}}" class="btn btn-travel-details px-4">
                View Details
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  
  <section class="section-networks" id="networks">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Our Networks</h2>
          <p>
            Companies are trusted us
            <br />
            more than just a trip
          </p>
        </div>
        <div class="col-md-8 text-center">
          <img src="/assets/frontend/images/logo-partner.png" alt="logo Partner" class="img-partner">
        </div>
      </div>
    </div>
  </section>
  
  <section class="section-testimonial-heading" id="testimonialHeading">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>There Are Loving Us</h2>
          <p>
            Moments were giving them
            <br />
            the best experience
          </p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="section section-testimonial-content" id="testimonialContent">
    <div class="container">
      <div class="section-popular-travel row justify-content-center">
        @foreach ($rating as $key => $value)        
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="/assets/member/anon.png" alt="User" class="mb-4 rounded-circle" />
              <!-- mb= margin bottom. rounded circle berfungsi untuk foto user otomatis menjadi circle -->
              <h3 class="mb-4">{{$value->nama_member}}</h3>
              <p class="testimonial">
                “ {{$value->ulasan_rating}}“
              </p>
            </div>
            <hr>
            <p class="trip-to mt-2">
              Trip to {{$value->nama_wisata}}
            </p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
</main>


@endsection