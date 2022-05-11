@extends('layouts.admin_navbar')

@section('contents')
<h1>Edit Tutor Records Including Courses</h1>

    <div class="row">
        <div class="col-6">    

            <form method="POST" action="{{route('edittutor', $editTutor->id)}}">
                {{-- {{dd($editTutor->user->full_name)}} --}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="full_name">Tutor name</label>
                    <input type="text" name="tutor_full_name" value="{{old('full_name')  ?? $editTutor->user->full_name}}" class="form-control" id="full_name" placeholder="type in tutors full name">
                    @if ($errors->has('tutor_full_name'))
                        <span class="text-danger">{{ $errors->first('tutor_full_name') }}</span>
                    @endif
                </div>
                    {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Tutor Email</label>
                    <input type="text" class="form-control" value="{{old('email')  ?? $editTutor->user->email }}" name="tutor_email" id="email" aria-describedby="email" placeholder="Enter tutors email">
                    @if ($errors->has('tutor_email'))
                        <span class="text-danger">{{ $errors->first('tutor_email') }}</span>
                    @endif
                </div>

                <div class="form-group">
                <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="tutor_phone" value="{{old('phone')  ?? $editTutor->user->phone}}" id="phone" aria-describedby="phone" placeholder="Enter tutors Phone">
                    @if ($errors->has('tutor_phone'))
                        <span class="text-danger">{{ $errors->first('tutor_phone') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" class="form-control" name="tutor_address" value="{{old('address')  ?? $editTutor->user->address}}" id="address" aria-describedby="address" placeholder="Enter tutor address">
                    @if ($errors->has('tutor_address'))
                        <span class="text-danger">{{ $errors->first('tutor_address') }}</span>
                    @endif
                </div>

                {{-- <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="tutor_password" id="password" aria-describedby="password" placeholder="Enter your default password">
                    @if ($errors->has('tutor_password'))
                        <span class="text-danger">{{ $errors->first('tutor_password') }}</span>
                    @endif
                </div> --}}
            
                <div class="form-group">
                    <label for="exampleSelect2">Courses</label>
                        <select multiple="multiple" name="course_id[]" class="form-control" id="multiple exampleSelect2">
                            @foreach ($course as $courses)
                                <option value="{{$courses->id}}">{{$courses->title}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('course_id[]'))
                        <span class="text-danger">{{ $errors->first('course_id[]') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>    
@endsection


