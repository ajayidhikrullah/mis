<form method="POST" action="{{route('course.store')}}">
    <legend>Create courses</legend>
    {{ csrf_field() }}    
    <p>Kindly create courses as an Admin</p>
    
    <div class="form-group">
      <label for="title">Course Title</label>
      <input type="text" name="course_title" class="form-control" id="title" placeholder="Type in the course title">
      {{-- ERROR HANDLER --}}
      @if ($errors->has('course_title'))
          <span class="text-danger">{{ $errors->first('course_title') }}</span>
      @endif
    </div>
    
    <div class="form-group">
      <label for="code">Course Code</label>
      <input type="text" class="form-control" name="course_code" id="code" aria-describedby="code" placeholder="Type course code here...">
          {{-- ERROR HANDLER --}}
      @if ($errors->has('course_code'))
          <span class="text-danger">{{ $errors->first('course_code') }}</span>
      @endif
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>