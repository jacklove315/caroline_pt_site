@extends('auth.auth_master')
@section('content')
            <main class="form-signin" style="background-color: white; border-radius: 10px; padding: 1%;">
                <form method="post" action="{{route('loginPost')}}" autocomplete="off">
                    @csrf
                    <div class="text-center">
                        <h1 class="h3 mb-3 fw-normal">Login</h1>
                    </div>
                    @if($errors->any())
                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                            Please check inputs
                        </div>
                    @endif
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
                        <input type="password" name="password"
                               class="form-control @error('password') is-invalid @enderror"
                               id="floatingPassword">
                        @error('password')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <small>Dont have an account? <a href="/register">Register</a></small>
                    <br>
                    <br>
                    <button class="w-100 btn btn btn-success pt-2" type="submit">Login</button>

                </form>
            </main>
@endsection
