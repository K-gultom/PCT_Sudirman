@extends('main')
@section('title')
    Edit Kategori
@endsection
@section('content')

    <div class="container-fluid pt-3 mb-3">
        <h4 class="mb-0">Edit Kategori</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="{{url('/')}}">Beranda</a> </li>
                <li class="breadcrumb-item active" aria-current="page"> <a href="{{url('/kategori')}}">Kategori</a> </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card mt-3">

                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <div class="w-100">
                                    <strong>Edit</strong> Kategori
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (Session::has('message'))
                                <div class="alert alert-success">
                                    {{Session::get('message')}}
                                </div>
                            @endif

                            <form action="" method="post">
                                @csrf
                              
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input value=" {{old('name')}}" type="name" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Type category name ..." autocomplete="off">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @endif
                                </div>

                                <!--Ini button untuk mengirim login-->
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-box-arrow-in-right"></i> Update
                                </button>
                                <a href="{{ url('/kategori') }}" class="btn btn-warning">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>

@endsection