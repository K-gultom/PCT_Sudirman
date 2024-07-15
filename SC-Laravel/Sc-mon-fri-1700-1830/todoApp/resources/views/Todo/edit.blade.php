@extends('main')

@section('title')
    Edit 
@endsection

@section('content') 

    <div class="container-fluid">
        <h2>Edit</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><a href="{{ url('/home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-header"><strong>Form</strong> Add</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf

                            <div class="form-outline mb-2">
                                <label class="form-label" for="todo">What's You will do?</label>
                                <input type="todo" value="{{ old('todo', $getData->todo) }}" name="todo" id="todo" class="form-control @error('todo') is-invalid @enderror" placeholder="Type here!!!"/>
                                @error('todo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-outline mb-2">
                                <label class="form-label" for="description">Describe Your day?</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="" cols="30" rows="10">{{ $getData->description }}</textarea>
                                @error('todo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-outline mb-5">
                                <label class="form-label" for="date">When You will do?</label>
                                <input type="date" value="{{ old('date', $getData->date) }}" name="date" id="date" class="form-control @error('date') is-invalid @enderror" placeholder="Type here!!!"/>
                                @error('date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="container-fluid text-end">
                                <button type="submit" class="btn btn-primary btn-sm">Update <i class="bi bi-check"></i></button>
                                <a href="{{ url('/home') }}" class="btn btn-success btn-sm">Cancel <i class="bi bi-x"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection