@extends('Main.main')
@section('title')
    Product
@endsection
@section('content')
    <div class="container-fluid pt-3 mb-3">
        <h4 class="mb-0">Product</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
        </nav>    
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <div class="w-100 pt-1">
                        <strong>Data</strong> Product
                    </div>
                    <div class="w-100 text-end">
                        <a href="{{ url('/add/product') }}" class="btn btn-primary"> 
                            <i class="bi bi-plus-circle"></i> Add New Product
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (Session::has('message'))
                    <div class="alert alert-success" id="flash-message">
                        {{Session::get('message')}}
                    </div>
                    <script>
                        setTimeout(function (){
                            document.getElementById('flash-message').style.display='none';
                        }, {{ session('timeout', 5000) }});
                    </script>
                @endif
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="20">No</th>
                            <th width="100">PHOTO</th>
                            <th>NAME</th>
                            <th>CATEGORY</th>
                            <th>PRICE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$loop->iteration}} </td>
                                <td>
                                    <img src="{{url('images')}}/{{$item->photo}}" class="img-fluid">
                                </td>
                                <td>{{$item->name}} </td>
                                <td>{{$item->category->name}} </td>
                                <td>{{number_format($item->price)}} </td>
                                <td>
                                    <a href="{{ url('/edit/product') }}/{{ $item->id }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <a href="{{ url('/del/product') }}/{{ $item->id }}" class="btn btn-danger btn-sm" 
                                        onclick="return confirm('Are You Sure ???');">
                                        <i class="bi bi-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>   
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>      
    </div>
@endsection