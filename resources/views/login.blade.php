<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Yogyatourism</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/frontend/libraries/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="/assets/frontend/styles/main.css" />
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,700,700i,900,900i&display=swap" />
</head>

<body class="pt-3 mt-3">
    <main class="login-container">
        <div class="container">
            <div class="row mt-3 ">
                <div class="col-md-5 col-sm-11 offset-sm-1 offset-lg-4">
                    @if(session()->has('pesan'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('pesan') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <br><br>
                    <form class=" shadow-lg p-5" method="post" action="{{url('login')}}">
                        @method('post')
                        @csrf
                        <a href="/">
                        <img class="logo" src="{{url ('/assets/frontend/images/Yogyatourism-big.png')}}" alt="" />
                        </a>
                        <br>
                        <label class="form-label">Email</label>
                        <input class="form-control mb-3" type="text" name="username">
                        
                        <label class="form-label">Password</label>
                        <input class="form-control mb-3" type="password" name="password">
                        
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" >
                            <label class="form-check-label" for="exampleCheck1">Tetap Masuk</label>
                        </div>
                        
                        <button type="submit" class="btn btn-login btn-block">Login</button>
                        <p class="text-center mt-4">
                            <a class="small" style="color: darkmagenta;" href="">Lupa Password?</a>
                        </p>
                        <p class="border">Belum memiliki akun?
                            <a href="/daftar" style=" color: #9D099D;">Daftar Sekarang</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="/assets/frontend/libraries/retina/retina.min.js"></script>
<script src="/assets/frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
<script src="/assets/frontend/libraries/bootstrap/js/bootstrap.js"></script>

</html>