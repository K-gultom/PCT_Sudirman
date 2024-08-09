@extends('main')
@section('title')
    Etalase
@endsection

@section('content')

    <style>
        /* Custom styles for the product card */
        .product-card {
            margin-bottom: 15px;
            width: auto;
            height: auto;
        }
        /* .product-card .card-img-top{
            object-fit: cover;
            width: 100%;
            height: 220px;
        } */
        .product-card img{
            /* object-fit: cover; */
            width: 100px;
            height: auto;
        }
        .container{
            padding: 10px;
        }
    </style>

    <div class="container-fluid pt-3 mb-3">
       
        <h3>Etalase</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">Etalase</li>
            </ol>
        </nav>

        <div class="row mb-5">
            <div class="col-6 offset-3">
                <div class="mt-3 mb-3">
                    <form action="{{url('/etalase')}}" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search Product ...">
                            <button class="btn  btn-primary" type="submit">
                                <i class="bi bi-search"></i> Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
           {{-- @foreach ($data as $item)
            <div class="col-md-2 col-lg-2">
                <div class="card product-card">
                    <div class="container text-center">
                        <img src="{{ url('assets/produkImages', $item->photo) }}" class="card-img-top img-fluid" alt="Product Image">
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text"><b>Harga:</b> Rp {{ number_format($item->price) }}</p>
                    <div class="text-secondary">
                        Seller: {{ $item->getSeller->name }}
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=+6282179480009&text={{urlencode("Halo saya mau pesan $item->name")}}" target="_blank"
                        class="btn btn-sm btn-success">
                        <i class="bi bi-whatsapp"></i> Beli Sekarang
                    </a>
                    </div>
                </div>
            </div>
           @endforeach --}}
        </div>
    </div>
    
@endsection