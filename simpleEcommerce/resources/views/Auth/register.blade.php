@extends('Main.main')
@section('title')
    Register
@endsection

@section('content')
{{-- <style>
    /* .container{
        background-color: #dddddd;
    } */
    .form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        max-width: 350px;
        background-color: #fff;
        padding: 20px;
        /* border-radius: 20px; */
        position: relative;
    }

    .title {
        font-size: 28px;
        color: royalblue;
        font-weight: 600;
        letter-spacing: -1px;
        position: relative;
        display: flex;
        align-items: center;
        padding-left: 30px;
    }

    .title::before,.title::after {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        border-radius: 50%;
        left: 0px;
        background-color: royalblue;
    }

    .title::before {
        width: 18px;
        height: 18px;
        background-color: royalblue;
    }

    .title::after {
        width: 18px;
        height: 18px;
        animation: pulse 1s linear infinite;
    }

    .message, .signin {
        color: rgba(88, 87, 87, 0.822);
        font-size: 14px;
    }

    .signin {
        text-align: center; 
    }

    .signin a {
        color: royalblue;
    }

    .signin a:hover {
        text-decoration: underline royalblue;
    }

    .flex {
        display: flex;
        width: 100%;
        gap: 6px;
    }

    .form label {
        position: relative;
    }

    .form label .input {
        width: 100%;
        padding: 10px 10px 20px 10px;
        outline: 0;
        border: 1px solid rgba(105, 105, 105, 0.397);
        border-radius: 10px;
    }

    .form label .input + span {
        position: absolute;
        left: 10px;
        top: 15px;
        color: grey;
        font-size: 0.9em;
        cursor: text;
        transition: 0.3s ease;
    }

    .form label .input:placeholder-shown + span {
        top: 15px;
        font-size: 0.9em;
    }

    .form label .input:focus + span,.form label .input:valid + span {
        top: 30px;
        font-size: 0.7em;
        font-weight: 600;
    }

    .form label .input:valid + span {
        color: green;
    }

    .submit {
        border: none;
        outline: none;
        background-color: royalblue;
        padding: 10px;
        border-radius: 10px;
        color: #fff;
        font-size: 16px;
        transform: .3s ease;
    }

    .submit:hover {
        background-color: rgb(56, 90, 194);
    }

    @keyframes pulse {
        from {
            transform: scale(0.9);
            opacity: 1;
        }
        to {
            transform: scale(1.8);
            opacity: 0;
        }
    }

    .abc{
        margin-top: 100px;
    }

</style>

    <div class="container abc mb-5">
        <center>
            <div class="card col-md-3">
                <center>
                    @if (session('message'))
                        <div id="flash-message" class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        <script>
                            setTimeout(function(){
                                document.querySelector('.alert').style.display = 'none';
                            }, 5000);
                        </script>
                    @endif
                    <form action="" class="form" method="POST" style="background-color: #dfdfdf">
                        @csrf
                        <p class="title">Register </p>
                        <p class="message">Sign Up now and get full access to our app. </p>
                        <label>
                            <input name="name" placeholder="" type="text" class="input">
                            <span>Your Name</span>
                        </label>
                        <label>
                            <input name="email" placeholder="" type="email" class="input">
                            <span>Email</span>
                        </label>
                        <label>
                            <input name="password" placeholder="" type="password" class="input">
                            <span>Password</span>
                        </label>
                        <label>
                            <input name="password_confirmation" placeholder="" type="password" class="input">
                            <span>Confirm password</span>
                        </label>
                        <button class="submit">Submit <i class="bi bi-check2"></i></button>
                        <p class="signin">Already have an acount ? <a href="{{ url('/login') }}">Sign In</a> </p>
                    </form>
                </center>
            </div>
        </center>
    </div> --}}

    <div class="container">
        <div class="row mb-3">
            <div class="col-md-4 offset-md-4">
                <div class="card mt-3">
                    <div class="card-header ">
                        <strong>Register</strong> Form
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <div id="flash-message" class="alert alert-success">
                                {{ session('message') }}
                            </div>
                            <script>
                                setTimeout(function(){
                                    document.querySelector('.alert').style.display = 'none';
                                }, 5000);
                            </script>
                        @endif
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Type full name ..." autocomplete="off">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @endif                            
                            </div>
    
                            <div class="mb-3">
                                <label for="email">E-mail</label>
                                <input value=" {{old('email')}}" type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Type email ..." autocomplete="off">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @endif
                            </div>
    
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Type password ...">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @endif
                            </div>
    
                            <div class="mb-3">
                                <label for="password_confirmation">Password Confirmation</label>
                                <input type="password" name="password_confirmation" id="password_confirm" class="form-control @error('password') is-invalid @enderror" placeholder="Type confirmation password ...">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @endif
                            </div>
    
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-box-arrow-in-right"></i> Register
                            </button>
                            <button type="reset" class="btn btn-light">
                                Reset
                            </button>
                            
                            <p>Let's Shop!!! <a href="{{ url('/login') }}" class="text-decoration-none mt-5">Login</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection