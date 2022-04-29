
@extends('layouts.master')

  @section('contents')

    <div class="container">
        <form>
          {{ csrf_field() }}
            <legend>Login as a Tutor</legend>
            
            <p>Login with the defaults email and password given...</p>
                        
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your student email">
              <small id="emailHelp" class="form-text text-muted"><i>We'll never share your email with anyone else.</i></small>
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" aria-describedby="password" placeholder="Enter your default password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
  @endsection