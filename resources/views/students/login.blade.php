@extends('layouts.master')
    @section('contents')
        <h1>Kindly login here</p>
        <main class="form-signin w-100 m-auto">
            <form action="{{route('login')}}" method="POST">
                {{csrf_field()}}
                <h1 class="h3 mb-3 fw-normal">Welcome, Please login-in</h1>
                <div class="form-floating">
                    <label for="email">Students Email</label>
                    <input type="text" class="form-control" name="student_email" id="email" aria-describedby="email" placeholder="Enter your email">                    @if ($errors->has('student_email'))
                    <span class="text-danger">{{ $errors->first('student_email') }}</span>
                    @endif
                </div>
                <div class="form-floating">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="student_password" id="password" aria-describedby="password" placeholder="Enter your default password">
                    @if ($errors->has('student_password'))
                    <span class="text-danger">{{ $errors->first('student_password') }}</span>
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