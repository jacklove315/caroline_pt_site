@extends('auth.auth_master')
@section('content')
    <body class="text-center">
    <main class="form-signin" style="background-color: white; border-radius: 10px; padding: 1%;">
        <form method="post" action="/register" autocomplete="off">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Register</h1>
            @if($errors->any())
            <div class="alert alert-warning d-flex align-items-center" role="alert">
                Please check inputs
            </div>
            @endif

            <div class="form-floating">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{old('name')}}">
                <label for="floatingInput">Name</label>
                @error('name')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{old('email')}}">
                <label for="floatingInput">Email address</label>
                @error('email')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{old('password')}}">
                <label for="floatingPassword">Password</label>
                @error('password')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <small>Already have an account? <a href="/login">Login</a> </small>

            <button class="w-100 btn btn-success" type="submit">Register</button>
        </form>
    </main>
    </body>
@endsection
