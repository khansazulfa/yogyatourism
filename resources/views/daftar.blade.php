<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign Up Yogyatourism</title>
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
                    <form class=" shadow-lg p-5" action="{{url('daftar')}}" method="post">
                        @method('post')
                        @csrf
                        <div class="row ">
                            <h1 id="h1">Create account</h1>
                            <br>
                            <div class="col-12 ">
                                <label class="form-label">Nama</label>
                                <input class="form-control mb-3" type="text" name="nama">
                            </div>
                           
                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input class="form-control mb-3" type="text" name="email">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input class="form-control mb-3" type="password" name="password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-login btn-block">Daftar</button>
                        <p class="border">Sudah memiliki akun?
                            <a href="/login" style=" color: #9D099D;">Login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="/assets/frontend/libraries/retina/retina.min.js"></script>
<script src="/assets/frontend/libraries/bootstrap/js/bootstrap.js"></script>
<script src="/assets/frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
</html>