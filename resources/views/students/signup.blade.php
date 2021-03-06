@extends('layouts.master')
    
    @section('contents')

    <div class="container bg-light">
        <div class="col-8">    
            <p><a href="javascript:history.back()">.../Back</a></p>
            <h1>Register here</h1>
                <form method="POST" action="{{route('signup.store')}}">
                    <div class="form-group">
                        <label for="full_name">Students name</label>
                        <input type="text" name="student_full_name" class="form-control" value="{{old('student_full_name')}}" id="full_name" placeholder="type in your full name">
                        @if ($errors->has('student_full_name'))
                        <span class="text-danger">{{ $errors->first('student_full_name') }}</span>
                        @endif
                    </div>
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">Students Email</label>
                        <input type="text" class="form-control" name="student_email" value="{{old('student_email')}}" id="email" aria-describedby="email" placeholder="Enter your email">
                        {{-- <small id="emailHelp" class="form-text text-muted"><i>We'll never share your email with anyone else.</i></small> --}}
                        @if ($errors->has('student_email'))
                        <span class="text-danger">{{ $errors->first('student_email') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                         <input type="text" class="form-control" name="student_phone" value="{{old('student_phone')}}" id="phone" aria-describedby="phone" placeholder="Enter your Phone number">
                         @if ($errors->has('student_phone'))
                           <span class="text-danger">{{ $errors->first('student_phone') }}</span>
                         @endif
                     </div>
         
                     <div class="form-group">
                         <label for="Address">Address</label>
                         <input type="text" class="form-control" value="{{old('student_address')}}" name="student_address" id="address" aria-describedby="address" placeholder="Enter your address">
                         @if ($errors->has('student_address'))
                           <span class="text-danger">{{ $errors->first('student_address') }}</span>
                         @endif
                     </div>
        
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" value="{{old('password')}}" id="password" aria-describedby="password" placeholder="Enter your default password">
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password">Re-Enter Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password" aria-describedby="password" placeholder="re-enter your password">
                        @if ($errors->has('password_confirmation'))
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
        </div>
    @endsection