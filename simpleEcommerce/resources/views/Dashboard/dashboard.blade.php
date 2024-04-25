@extends('Main.main')
@section('title')
    Dashboard
@endsection

@section('content')
<style>
    /* Custom styles for the slider */
    .carousel-inner img {
      width: 100%;
      height: 400px; /* Adjust the height as needed */
      object-fit: cover;
      margin-top: 20px;
    }

    .card-slider {
      overflow-x: auto;
      white-space: nowrap;
    }

    .card {
      display: inline-block;
      width: 200px; /* Adjust the width as needed */
      margin-right: 10px; /* Adjust the margin as needed */
    }

    
    /* Custom styles for the product card */
    .product-card {
        margin-bottom: 15px;
         width: 220px;
        height: 395px;
    }
    .product-card .card-img-top{
        object-fit: cover;
        width: 100%;
        height: 220px;
    }
    .bgMe{
        border-radius: 20px;
    }
  </style>


  {{-- Carousel --}}
    <div class="container mt-3">
        <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bgMe" src="{{ url('images/bg1.jpg') }}" class="d-block w-100" alt="Banner 1">
                    {{-- https://via.placeholder.com/1200x400 --}}
                </div>
                <div class="carousel-item">
                    <img class="bgMe" src="{{ url('images/bg2.jpg') }}" class="d-block w-100" alt="Banner 2">
                    {{-- https://via.placeholder.com/1200x400 --}}
                </div>
                <div class="carousel-item">
                    <img class="bgMe" src="{{ url('images/bg3.jpg') }}" class="d-block w-100" alt="Banner 3">
                    {{-- https://via.placeholder.com/1200x400 --}}
                </div>

                <!-- Add more carousel items here -->
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    {{-- Card Carousel --}}
    <div class="container p-5" >
        <div class="card-slider">
            @for ($i=1; $i<=10; $i++)
                <div class="card">
                    <a href="{{ url('/') }}" class="text-decoration-none">
                        <img src="{{ url('images/test.png') }}" class="card-img-top" alt="Card Image">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Card {{ $i }}</h5>
                        <p class="card-text">This is a sample card.</p>
                    </div>
                </div>
            @endfor
        <!-- Add more cards here -->
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($data as $item)
                <div class="col-6 col-md-3 col-lg-2 m-2">
                    <div class="card product-card">
                        <img src="{{ url('images', $item->photo) }}" class="card-img-top img-fluid" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">Harga: Rp{{ number_format($item->price) }}</p>
                            <a href="#" class="btn btn-sm btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Add more product cards here -->
        </div>
        <div class="row mb-3">
            <div class="col text-center">
                <a href="{{ url('/katalog') }}" class="btn btn-outline-secondary btn-sm">
                    Lihat semua Produk
                </a>
            </div>
        </div>
    </div>
@endsection