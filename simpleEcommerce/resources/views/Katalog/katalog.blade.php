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
            width: 220px;
            height: 395px;
        }
    </style>

    <div class="container-fluid pt-3 mb-3">
       
        <h3>Katalog</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Katalog</li>
            </ol>
        </nav>

        <div class="row align-items-center">
            @for ($i = 0 ; $i < 10 ; $i++)
                <div class="col-md-2 col-lg-2">
                    <div class="card product-card">
                        <img src="{{ url('images/test.png') }}" class="card-img-top img-fluid" alt="Product Image">
                        <div class="card-body">
                        <h5 class="card-title">Nama Produk</h5>
                        <p class="card-text"><b>Harga:</b> Rp100.000</p>
                        <a href="https://api.whatsapp.com/send?phone=+6282179480009&text={{urlencode("Halo saya mau pesan")}}" target="_blank"
                            class="btn btn-sm btn-success">
                            <i class="bi bi-whatsapp"></i> Beli Sekarang
                        </a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    
@endsection