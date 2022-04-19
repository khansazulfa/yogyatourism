@extends('template')

@section('konten')



<!-- Main konten utama Website  -->
<main>
 
  <section class="section-popular" id="popular">
    <div class="container">
      <div class="row">
        <div class="col text-center section-popular-heading">
          <h2 id="bagian1" class="text-capitalize"> Wisata {{$kategori}}</h2>
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
</main>


@endsection