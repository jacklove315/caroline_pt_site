@extends('auth.auth_master')
@section('content')
    <body class="text-center">
    <main class="form-signin" style="background-color: white; border-radius: 10px; padding: 1%;">
        <form method="post" action="{{route('loginPost')}}" autocomplete="off">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Login</h1>
            @if($errors->any())
            <div class="alert alert-warning d-flex align-items-center" role="alert">
               Please check inputs
            </div>
            @endif
            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{old('email')}}">
                <label for="floatingInput">Email address</label>
                @error('email')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <small>Dont have an account? <a href="/register">Register</a></small>

            <button class="w-100 btn btn btn-success" type="submit">Login</button>

        </form>
    </main>
    </body>
@endsection
