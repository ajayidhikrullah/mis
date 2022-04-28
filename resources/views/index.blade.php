
@extends('layouts.master')

  @section('contents')

    <div class="container">
        <form>
          {{ csrf_field() }}
            <legend>Students Registration</legend>
            
            <p>Kindly register as a Students</p>
            
            <div class="form-group">
              <label for="full_name">Full Name</label>
              <input type="text" name="full_name" class="form-control" id="full_name" placeholder="your Full name please...">
            </div>
            
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your student email">
              <small id="emailHelp" class="form-text text-muted"><i>We'll never share your email with anyone else.</i></small>
            </div>

            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" class="form-control" name="phone" id="phone" aria-describedby="phone" placeholder="Enter your Phone">
            </div>

            <div class="form-group">
              <label for="Address">Address</label>
              <input type="text" class="form-control" name="address" id="address" aria-describedby="address" placeholder="Enter your address">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
  @endsection