<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous">

        {{-- Link CDN --}}
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    </head>
    <body>

        <style>
            .nav-link.active {
                background-color: #0062FF;
                /* Adjust to your desired active background color */
                color: white !important;
                /* Ensure the text color is visible */
                border-radius: 10px;
            }
            .bi-shop{
                font-size: 30px;
            }
        </style>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand px-5" style="margin-left: 35px">
                    <i class="bi bi-shop"></i>
                    <strong>PCT E-Commerce</strong>
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="margin-right: 30px">
                        <li class="nav-item">
                            <a
                                class="nav-link {{ Request::is('/') ? 'active' : '' }}"
                                aria-current="page"
                                href="{{ url('/') }}">
                                Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link {{ Request::is('etalase') ? 'active' : '' }}"
                                aria-current="page"
                                href="{{ url('/etalase') }}">
                                Etalase</a>
                        </li>
                        
                        @if (Auth::user())
                            <li class="nav-item">
                                <a
                                    class="nav-link {{ Request::is('kategori') ? 'active' : '' }}"
                                    href="{{ url('/kategori') }}">
                                    Kategori
                                </a>
                            </li>

                            <li class="nav-item">
                                <a
                                    class="nav-link {{ Request::is('barang') ? 'active' : '' }}"
                                    href="{{ url('/barang') }}">
                                    Barang
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link {{ Request::is('logout') ? 'active' : '' }}"
                                    href="{{ url('/logout') }}">Logout</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ url('/login') }}">Login</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            @yield('content')
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </body>
</html>