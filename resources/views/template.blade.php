<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Yogyatourism</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/assets/frontend/libraries/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="/assets/frontend/styles/main.css" />
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,700,700i,900,900i&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <script src="/assets/frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
</head>

<body>
  <!-- Semantic elements -->
  <!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->
  
  <!-- Bootstrap navbar example -->
  <!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->
  
  <!-- Navbar -->
  <div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="/">
        <img src="/assets/frontend/images/logo.png" alt="" />
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="/wisata">Wisata</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/wisata/kategori" id="navbardrop" data-toggle="dropdown">
              Kategori Wisata
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/wisata/kategori/pegunungan">Pegunungan</a>
              <a class="dropdown-item " href="/wisata/kategori/bahari">Bahari</a>
              <a class="dropdown-item" href="/wisata/kategori/budaya">Budaya</a>
              <a class="dropdown-item " href="/wisata/kategori/edukasi">Edukasi</a>
            </div>
          </li>
         
        
        @if (session()->has('id_member'))
        <!-- Mobile button -->
        <form class="form-inline d-sm-block my-2 mx-md-4 d-md-none">
           <a href="/member">
            <button type="button" class="btn btn-login ">Akun</button>
          </a>
        </form>
        <form class="form-inline d-sm-block d-md-none">
           <a href="/logout">
            <button type="button" class="btn btn-sign-up ">Log Out</button>
          </a>
        </form>
        <!-- Desktop Button -->
        <form class="form-inline my-2 my-lg-0 mx-md-2 d-none d-md-block">
          <a href="/member">
            <button type="button" class="btn btn-login ">Akun</button>
          </a>
        </form>
        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
          <a href="/logout">
            <button type="button" class="btn btn-sign-up ">Log Out</button>
          </a>
        </form> 
        @else
        <!-- Mobile button -->
        <form class="form-inline d-sm-block my-2 mx-md-4 d-md-none">
          <a href="/login">
          <button type="button" class="btn btn-login ">Log in</button>
          </a>
        </form>
        <form class="form-inline d-sm-block d-md-none">
          <a href="/daftar">
          <button type="button" class="btn btn-sign-up ">Sign Up</button>
          </a>
        </form>
        <!-- Desktop Button -->
        <form class="form-inline my-2 my-lg-0 mx-md-2 d-none d-md-block">
          <a href="/login">
            <button type="button" class="btn btn-login ">Log in</button>
          </a>
        </form>
        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
          <a href="/daftar">
            <button type="button" class="btn btn-sign-up ">Sign Up</button>
          </a>
        </form>
        @endif   
      </div>
    </nav>
  </div>
  
  @yield('konten')
  
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
<script src="/assets/frontend/libraries/retina/retina.min.js"></script>
<script src="/assets/frontend/libraries/bootstrap/js/bootstrap.js"></script>
<script src="/assets/frontend/libraries/xzoom/xzoom.min.js"></script>
<!--Memanggil Jquery dan xzoom-->
<script>
  $(document).ready(function (){
    $('.xzoom, .xzoom-gallery').xzoom({
      zoomwidth: 500,
      title: false,
      tint: '#333',
      Xoffset: 15
    });
  });
</script>
</body>

</html>