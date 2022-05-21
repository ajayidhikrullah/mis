@extends('layouts.master')
    @section('contents')
        <h1>Kindly login here</p>
        <main class="form-signin w-100 m-auto">
            <form action="{{route('login.store')}}" method="POST">
                {{csrf_field()}}
                <h1 class="h3 mb-3 fw-normal">Welcome, Please login-in</h1>
                <div class="form-floating">
                    <label for="email">Your Email</label>
                    <input type="text" class="form-control" name="email" value="{{old('email')}}" id="email" aria-describedby="email" placeholder="Enter your email">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                </div>
                <div class="form-floating">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" aria-describedby="password" placeholder="Enter your default password">
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                <p class="mt-5 mb-3 text-muted">&copy; Hayjay</p>
            </form>
        </main>
    @endsection