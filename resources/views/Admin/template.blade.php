<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Yogyatourism Admin</title>
  
  
  
  
  <!-- Bootstrap core CSS -->
  <link href="{{ url ('/assets/bootstrap/css/bootstrap.css') }}" rel="stylesheet" >
  
  <!-- Favicons -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  
  <!-- Custom styles for this template -->
  <link href="{{ url ('/assets/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url ('/assets/bootstrap/css/admin.css') }}" rel="stylesheet">
  <link
  href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
  rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
</head>
<body>
  
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-light" href="#">Yogyatourism Admin</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3 text-light" href="#">Akun</a>
      </div>
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3 text-light" href="/admin/logout">Sign out</a>
      </div>
    </div>
  </header>
  
  // Side bar 
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/admin">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/pemesanan">
                <span data-feather="shopping-cart"></span>
                Pemesanan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/wisata">
                <span data-feather="image" class="fas fa-caret-down"></span>
                Wisata
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/atribut">
                <span data-feather="clipboard"></span>
                Atribut
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/penjaga">
                <span data-feather="user"></span>
                Penjaga
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/member">
                <span data-feather="users"></span>
                Member
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/pembayaran">
                <span data-feather="file-text"></span>
                Pembayaran
              </a>
            </li>
          </ul>        
        </div>
      </nav>
      
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('isi')
      </main>
    </div>
  </div>
  
  <!-- Bootstrap core JavaScript-->
  <script src="{{url ('/assets/jquery/jquery.min.js')}}"></script>
  <script src="{{url ('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  
  
  <!-- Core plugin JavaScript-->
  <script src="{{url ('/assets/jquery-easing/jquery.easing.min.js') }}"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="{{url ('/assets/js/sb-admin-2.min.js') }}"></script>
  <script src="{{url ('/assets/bootstrap/js/admin.js') }}"></script>
  
  <!-- Page level custom scripts -->
  <script src="{{url ('/assets/js/demo/chart-area-demo.js') }}"></script>
  <script src="{{url ('/assets//demo/chart-pie-demo.js') }}"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#dttables').DataTable();
    } );
  </script>
</body>
</html>
