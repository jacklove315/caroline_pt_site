@extends('auth.auth_master')
@section('content')
    <main class="form-signin" style="background-color: white; border-radius: 10px; padding: 1%;">
        <form method="post" action="/register" autocomplete="off">
            @csrf
            <div class="text-center">
                <h1 class="h3 mb-3 fw-normal">Register</h1>
            </div>
            @if($errors->any())
                <div class="alert alert-warning d-flex align-items-center" role="alert">
                    Please check inputs
                </div>
            @endif

            <div class="form-floating">
                <label for="floatingInput">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                       id="floatingInput" value="{{old('name')}}">
                @error('name')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-floating">
                <label for="floatingInput">Email address</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                       id="floatingInput" value="{{old('email')}}">
                @error('email')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-floating">
                <label for="floatingPassword">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                       id="floatingPassword" value="{{old('password')}}">
                @error('password')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <small>Already have an account? <a href="/login">Login</a> </small>
            <br>
            <br>
            <div class="d-flex">
                <div>
                    <button class="w-100 btn btn-success" type="submit">Register</button>
                </div>
                <div class="ml-auto">
                    Home
                </div>
            </div>

        </form>
    </main>
@endsection
