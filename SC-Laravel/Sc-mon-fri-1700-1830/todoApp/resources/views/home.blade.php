@extends('main')

@section('title')
Home
@endsection

@section('content') 
<div class="container-fluid">
    <h2>Home</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <strong>My</strong>
                    Todo</div>
                <div class="card-body">

                    @if (Session::has('message'))
                    <div class="alert alert-success" id="flash-message">
                        <strong>
                            {{Session::get('message')}}
                        </strong>
                    </div>
                    <script>
                        setTimeout(function () {
                            document
                                .getElementById('flash-message')
                                .style
                                .display = 'none';
                        }, {{ session('timeout', 5000) }});
                    </script>
                    @endif

                    <form class="d-flex p-5" role="search">
                        <input
                            class="form-control me-2"
                            type="search"
                            name="search"
                            placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>

                        <a href="{{ url('/home') }}" class="mx-1 btn btn-outline-success btn-md">Refresh</a>
                    </form>

                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Todo</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>
                                    {{ (($data->currentPage() - 1) * $data->perPage()) + $loop->iteration }}
                                </td>
                                <td>{{ $item->todo }}</td>
                                <td class="text-center">{{ Carbon\Carbon::parse( $item->date )->format('d/m/Y') }}</td>
                                <td class="text-center">
                                    <a
                                        href="{{ url('/todo') }}/{{ $item->id }}"
                                        class="btn btn-outline-success btn-sm"
                                        title="Lihat Data">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a
                                        href="{{ url('/edit/todo') }}/{{ $item->id }}"
                                        class="btn btn-outline-warning btn-sm"
                                        title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <a
                                        href="{{ url('/todo/del', ['id' => $item->id]) }}"
                                        class="btn btn-outline-danger btn-sm"
                                        title="Hapus"
                                        onclick="return confirm('Hapus Data {{ $item->nama_suplier }} ??');">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection