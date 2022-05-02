
@extends('layouts.master')

  @section('contents')

  <div class="container">
    <div class="col-6">    

        {{-- <form method="POST" action="{{route('tutors.store')}}"> --}}
            <div class="form-group">
                <label for="full_name">Students name</label>
                <input type="text" name="student_full_name" class="form-control" id="full_name" placeholder="type in tutors full name">
            </div>
                {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Tutor Email</label>
                <input type="text" class="form-control" name="student_email" id="email" aria-describedby="email" placeholder="Enter students email">
                {{-- <small id="emailHelp" class="form-text text-muted"><i>We'll never share your email with anyone else.</i></small> --}}
            </div>

            <div class="form-group">
               <label for="phone">Phone</label>
                <input type="text" class="form-control" name="student_phone" id="phone" aria-describedby="phone" placeholder="Enter tutors Phone">
            </div>

            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" class="form-control" name="student_address" id="address" aria-describedby="address" placeholder="Enter tutor address">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="student_password" id="password" aria-describedby="password" placeholder="Enter your default password">
            </div>
          
            <div class="form-group">
                <label for="exampleSelect2">Courses</label>
                    <select multiple="multiple" name="course_id" class="form-control" id="multiple exampleSelect2">
                        {{-- @foreach  --}}
                          {{-- ($courses as $course) --}}
                          {{-- <option value="{{$course->id}}">{{$course->title}}</option> --}}
                        {{-- @endforeach --}}
                    </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>   
  @endsection