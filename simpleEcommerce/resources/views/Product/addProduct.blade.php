@extends('Main.main')
@section('title')
    Add Product
@endsection
@section('content')
    <div class="container-fluid mt-2">
        <h4>Add Product</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('/product')}}">Product</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add</li>
            </ol>
        </nav>
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-header">
                    <strong>Add</strong> Product
                </div>
                <div class="card-body">
                    @if(Session::has('msg'))
                        <div class="card alert alert-success">
                            {{Session::get('msg')}}
                        </div>
                    @endif
                        <form action="" method="post" enctype="multipart/form-data">
                            {{--
                                berfungsi untuk membuat form kita dapat menerima data berupa gambar pada saat proses input data gambar 
                                enctype="multipart/form-data" 
                            --}}
                            @csrf
                            <div class="mb-3">                                
                                <label for="category">Choose Category</label>
                                <select name="category" id="category" class="form-control
                                @error('category') is-invalid @enderror">
                                    <option value="">Choose</option>
                                    @foreach ($category as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>

                                @error ('category')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Type product name ..." autocomplete="off">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price">Price</label>
                                <input value="{{old('price')}}" type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Type product Price ..." autocomplete="off">
                                @error('price')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="photo">Photo</label>
                                <input value="{{old('photo')}}" type="file" name="photo" id="photo" class="form-control @error('photo') is-invalid @enderror" placeholder="Type product Photo ...">
                                @error('photo')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Process
                            </button>
                            <button type="reset" class="btn btn-light">
                                Reset
                            </button>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection