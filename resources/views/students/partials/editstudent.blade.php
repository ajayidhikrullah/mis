<div class="container">
    <div class="col-6">
        <h1>Edit Students Records</h1>
        <p><a href="javascript:history.back()">.../Back</a></p>
            <form method="POST" action="{{route('editstudent', $editStudent->id)}}">
                {{method_field('PUT')}}
                {{-- {{dd($editStudent->user->full_name)}} --}}
            <div class="form-group">
                <label for="full_name">Students name</label>
                <input type="text" name="student_full_name" value="{{old('full_name') ?? $editStudent->user->full_name}}" class="form-control" id="full_name" placeholder="type in your full name">
                @if ($errors->has('student_full_name'))
                  <span class="text-danger">{{ $errors->first('student_full_name') }}</span>
                @endif
            </div>
                {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Students Email</label>
                <input type="text" class="form-control" value="{{old('email') ?? $editStudent->user->email}}" name="student_email" id="email" aria-describedby="email" placeholder="Enter your email">
                {{-- <small id="emailHelp" class="form-text text-muted"><i>We'll never share your email with anyone else.</i></small> --}}
                @if ($errors->has('student_email'))
                  <span class="text-danger">{{ $errors->first('student_email') }}</span>
                @endif
            </div>

            <div class="form-group">
               <label for="phone">Phone</label>
                <input type="text" class="form-control" name="student_phone" value="{{old('phone') ?? $editStudent->user->phone}}" id="phone" aria-describedby="phone" placeholder="Enter your Phone number">
                @if ($errors->has('student_phone'))
                  <span class="text-danger">{{ $errors->first('student_phone') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" class="form-control" name="student_address" value="{{old('address') ?? $editStudent->user->address}}" id="address" aria-describedby="address" placeholder="Enter your address">
                @if ($errors->has('student_address'))
                  <span class="text-danger">{{ $errors->first('student_address') }}</span>
                @endif
            </div>

            {{-- <div class="form-group">
                <label for="password">Update Password</label>
                <input type="password" class="form-control" name="student_password" id="password" aria-describedby="password" placeholder="Enter your default password">
                @if ($errors->has('student_password'))
                  <span class="text-danger">{{ $errors->first('student_password') }}</span>
                @endif
            </div> --}}
          
            <div class="form-group">
                <label for="exampleSelect2">Courses</label>
                    <select multiple="multiple" name="course_id[]" class="form-control" id="multiple exampleSelect2">
                        @foreach ($courses as $course)
                          <option value="{{$course->id}}">{{$course->title}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('course_id[]'))
                        <span class="text-danger">{{$errors->first('course_id[]')}}</span>
                    @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>   