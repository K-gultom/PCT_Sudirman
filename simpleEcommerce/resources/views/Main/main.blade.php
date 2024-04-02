<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        
        {{-- This is Bootstrap CDN --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        {{-- This is Bootstrap Icon CDN --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
        <style>
            /* Style Footer */
            /* Custom styles for the footer */
            .footer {
              background-color: #454343;
              color: #fff;
              padding: 30px 0;
            }
            .footer a {
              color: #fff;
              text-decoration: none;
            }
            .footer a:hover {
              text-decoration: underline;
            }

            .text{
                color: #ffff;
            }
        </style>


        <nav class="fixed-top navbar navbar-expand-lg" style="background-color: #454343">
            <div class="container-fluid">
                <a class="text navbar-brand ms-3" href="{{ url('/') }}">Small E-Commerce</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="text nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="text nav-link" href="{{ url('/katalog') }}">Katalog</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="text nav-link mx-2" href="#">Profile</a>
                        </li>
                    </ul>
                    <a href="{{ url('/login') }}" class="text btn btn-outline-light btn-sm me-2"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    <a href="{{ url('/register') }}" class="text btn btn-outline-light btn-sm me-3"><i class="bi bi-pencil-square"></i> Register</a>
                </div>
            </div>
        </nav>


        <div class="mt-5">
            @yield('content')
        </div>


        {{-- Footer --}}
        <footer class="footer mt-auto py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Informasi Kontak</h5>
                        <p>Alamat: Jalan Raya No. 123, Kota Anda</p>
                        <p>Email: info@ecommers.com</p>
                        <p>Telepon: +1234567890</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Ikuti Kami</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Facebook <i class="bi bi-facebook"></i></a></li>
                            <li><a href="#">WhatsApp <i class="bi bi-whatsapp"></i></a></li>
                            <li><a href="#">Instagram <i class="bi bi-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; 2024 E-commerce. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-end">
                        <ul class="list-unstyled">
                            <li><a href="#">Kebijakan Privasi</a></li>
                            <li><a href="#">Syarat & Ketentuan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>