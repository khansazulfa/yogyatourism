<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Yogyatourism</title>
  
  <link rel="stylesheet" href="{{ url ('/assets/frontend/libraries/bootstrap/css/bootstrap.css')}}" />
  <link rel="stylesheet" href="{{ url ('/assets/frontend/styles/main.css')}}" />
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,700,700i,900,900i&display=swap" />
</head>

<body>
  <!-- Semantic elements -->
  <!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->
  
  <!-- Bootstrap navbar example -->
  <!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->
  
  <!-- Navbar -->
  <div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="#">
        <img src="{{url ('/assets/frontend/images/logo.png')}}" alt="" />
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a class="nav-link active" href="/penjaga">Home</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link " href="/penjaga/wisata">Wisata</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="/penjaga/pemesanan">Pemesanan</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="/penjaga/pembayaran">Pembayaran</a>
          </li>
        </ul>
        
        <!-- Mobile button -->
        <form class="form-inline d-sm-block d-md-none">
          <button type="button" class="btn btn-sign-up ">Sign Out</button>
        </form>
        <!-- Desktop Button -->
        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
          <a href="/login">
            <button type="button" class="btn btn-sign-up ">Sign Out</button>
          </a>
        </form>
      </div>
    </nav>
  </div>
  
  @yield('content')
  
  <!-- Footer bagian akhir Website kita -->
  <footer class="section-footer mt-5 mb-4 border-top">
    <div class="container pt-5 pb-5">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="row">
            <div class="col-12 col-lg-3">
              <h5>FEATURES</h5>
              <!-- Unstyled list tp ga ada bulet2nya -->
              <ul class="list-unstyled">
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Social Media Kit</a></li>
                <li><a href="#">Affiliate</a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-3">
              <h5>ACCOUNT</h5>
              <!-- Unstyled list tp ga ada bulet2nya -->
              <ul class="list-unstyled">
                <li><a href="#">Refund</a></li>
                <li><a href="#">Security</a></li>
                <li><a href="#">Reward</a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-3">
              <h5>COMPANY</h5>
              <!-- Unstyled list tp ga ada bulet2nya -->
              <ul class="list-unstyled">
                <li><a href="#">Career</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Media</a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-3">
              <h5>GET CONNECTED</h5>
              <!-- Unstyled list tp ga ada bulet2nya -->
              <ul class="list-unstyled">
                <li><a href="#">Yogyakarta</a></li>
                <li><a href="#">Indonesia</a></li>
                <li><a href="#">0812-345-678</a></li>
                <li><a href="#">support@yogyatorism.id</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container fluid berfungsi untuk rata kanan kiri -->
    <div class="container-fluid">
      <div class="row border-top justify-content-center 
      align-items-center pt-4">
      <div class="col-auto text-gray-500 font-weight-light">
        2021 Copyright Yogyatorism . All right reserved . Made in Yogyakarta
      </div>
    </div>
  </div>
</footer>
<script src="{{ url ('/assets/frontend/libraries/retina/retina.min.js')}}"></script>
<script src="{{ url ('/assets/frontend/libraries/jquery/jquery-3.6.0.min.js')}}"></script>
<script src="{{ url ('/assets/frontend/libraries/bootstrap/js/bootstrap.js')}}"></script>
</body>

</html>