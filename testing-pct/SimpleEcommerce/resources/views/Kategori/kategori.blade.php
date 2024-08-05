@extends('main')
@section('title')
    Kategori
@endsection

@section('content')
    <div class="container-fluid pt-3 mb-3">
        <h4 class="mb-0">Kategori</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{url('/')}}">Beranda</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Kategori
                </li>
            </ol>
        </nav>
  
        <div class="row">
            <div class="col col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="w-100 pt-1">
                                <strong>Data</strong> Kategori
                            </div>
                            <div class="w-100 text-end">
                                <a href="{{ url('/kategori/add') }}" class="btn btn-primary btn-sm"> <i class="bi bi-plus-circle"></i> Kategori Baru </a>
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
                        @if (Session::has('message_delete'))
                            <div class="alert alert-warning" id="flash-message_delete">
                                {{Session::get('message_delete')}}
                            </div>
                            <script>
                                setTimeout(function (){
                                    document.getElementById('flash-message_delete').style.display='none';
                                }, {{ session('timeout', 5000) }});
                            </script>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="20">NO</th>
                                    <th>Nama Kategori</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->name}}</td>
                                        <td class="text-center">
                                            <a href="{{ url('/kategori/edit') }}/{{ $item->id }}" title="Edit" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            
                                            <a href="{{ url('/kategori') }}/{{ $item->id }}" title="Hapus" class="btn btn-danger btn-sm" 
                                                onclick="return confirm('Yakin hapus data? menghapus data mungkin dapat menyebabkan kesalahan dalam beberapa fitur!!!');">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection