@extends('Main.main')
@section('title')
    Katalog
@endsection

@section('content')

    <style>
        /* Custom styles for the product card */
        .product-card {
            margin-bottom: 15px;
        }
        .product-card{
            width: 180px;
            height: 330px;
        }
    </style>

    <div class="container py-2 pt-3">
        <div class="row">
            <h6><strong>Kategori</strong></h6>
            @for ($a = 1 ; $a <= 12 ; $a++)
                @if ($a % 2 == 0)
                    <div class="col-4 col-md-2 text-center">
                        <div class="card mb-2 bg-emerald-300">Pakaian {{ $a }}</div>
                    </div>
                @else
                    <div class="col-4 col-md-2 text-center">
                        <div class="card mb-2 bg-warning">Pakaian {{ $a }}</div>
                    </div>
                @endif
            @endfor
        </div>
    </div>


    <div class="container-fluid">
        <h6><strong>Produk-Produk Untuk Anda</strong></h6>
        <div class="row align-items-center">
            @for ($i = 0 ; $i < 10 ; $i++)
                <div class="col-xs-0 col-md-2 col-lg-2">
                    <div class="card product-card">
                        <img src="{{ url('images/test.png') }}" class="card-img-top img-fluid" alt="Product Image">
                        <div class="card-body">
                        <h5 class="card-title">Nama Produk</h5>
                        <p class="card-text">Harga: Rp100.000</p>
                        <a href="#" class="btn btn-sm btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>


@endsection