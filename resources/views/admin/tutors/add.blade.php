@extends('layouts.admin_navbar')

@section('contents')
<div class="row">
    <div class="col-6">    

        <form>
            <div class="form-group">
                <label for="full_name">Tutor name</label>
                <input type="text" name="tutor_full_name" class="form-control" id="full_name" placeholder="type in tutors full name">
            </div>
                {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Tutor Email</label>
                <input type="text" class="form-control" name="tutor_email" id="email" aria-describedby="email" placeholder="Enter tutors email">
                {{-- <small id="emailHelp" class="form-text text-muted"><i>We'll never share your email with anyone else.</i></small> --}}
            </div>

            <div class="form-group">
               <label for="phone">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone" aria-describedby="phone" placeholder="Enter tutors Phone">
            </div>

            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" class="form-control" name="address" id="address" aria-describedby="address" placeholder="Enter tutor address">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" aria-describedby="password" placeholder="Enter your default password">
            </div>
          
            <div class="form-group">
                <label for="exampleSelect2">Courses</label>
                                    
                    
                    <select multiple="" class="form-control" id="exampleSelect2">
                        @foreach ($courses as $course)
                            <option>{{$course->title}}</option>
                        @endforeach
                        {{-- <option>5</option> --}}
                    </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>    
{{-- </div> --}}
</fieldset>
@endsection