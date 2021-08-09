<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- My CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <title>@yield('title')</title>

        @yield('style')
    </head>
    <body>

        <!-- Awal Navigasi -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary text-uppercase fixed-top shadow">
            <div class="container">
                <a class="navbar-brand fs-4" href="#">
                    koisan world
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/faq') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/store') }}">Store</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/collections') }}">Collections</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/rewards') }}">Rewards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Whitepaper</a>
                        </li>
                    </ul>

                    <a href="#" class="btn btn-button text-uppercase me-2"><i class="bi bi-box-arrow-in-right me-2"></i> connect wallet</a>
                    <a href="{{ url('/store') }}" class="btn btn-button text-uppercase"><i class="bi bi-cart3 me-2 buy"></i>buy now</a>
            </div>
        </nav>
        <!-- Akhir Navigasi -->

        @yield('content')

        <!-- Awal Footer -->
        <footer class="bg-primary">
            <div class="container text-center">
                <div class="row text-center">
                    <div class="col-lg-12 join text-white position-relative">
                        <h3 class="text-uppercase fw-bold mb-3 display-6"> KOISAN WORLD </h3>
                        <h2 class="text-uppercase mb-0 fw-bold mb-3"> join the movement ! </h2>
                        <p class="mb-1 fw-normal fs-6"> #WeAreKoisans</p>
                        <div class="row justify-content-center mt-5 mb-4">
                            <div class="col-lg-1 col-1 px-0 me-2"><i class="bi bi-facebook fs-2"></i></div>
                            <div class="col-lg-1 col-1 px-0 me-2"><i class="bi bi-twitter fs-2"></i></div>
                            <div class="col-lg-1 col-1 px-0"><i class="bi bi-discord fs-2"></i></div>
                        </div>
                        <p class="mt-5 fw-normal fs-6 mb-4 terms_condition"> Terms & Conditions / Privacy Policy </p>
                        
                        <div class="position-absolute top-0 start-0">
                            <img src="img/koisan_tancho.png" alt="koisan_tancho" width="180" class="tancho">
                        </div>
                        <div class="position-absolute top-0 end-0">
                            <img src="img/koisan_kohaku.png" alt="koisan_kohaku" width="180" class="kohaku">
                        </div>

                        <div class="position-absolute top-50 start-0 translate-middle-y">
                            <img src="img/koisan_sanke.png" alt="koisan_sanke" width="250" class="sanke">
                        </div>
                        <div class="position-absolute top-50 end-0 translate-middle-y">
                            <img src="img/koisan_shiro.png" alt="koisan_shiro" width="250" class="shiro">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Akhir Footer -->



        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>