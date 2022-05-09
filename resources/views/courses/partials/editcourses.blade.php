<form method="POST" action="{{route('course.edit', $editCourse->id)}}">
    <legend>Create courses</legend>
    {{ csrf_field() }}    
    <p>Kindly Edit courses as an Admin</p>
    
    <div class="form-group">
      <label for="title">Edit Course title</label>
      <input type="text" name="course_title" class="form-control" value="{{old('title') ?? $editCourse->title}}" id="title" placeholder="edit course title">

      @if ($errors->has('course_title'))
          <span class="text-danger">{{ $errors->first('course_title') }}</span>
      @endif
    </div>
    
    <div class="form-group">
      <label for="code">Edit Course Code</label>
      <input type="text" value="{{old('code') ?? $editCourse->code}}" class="form-control" name="course_code" id="code" aria-describedby="code" placeholder="edit course code here">
          {{-- ERROR HANDLER --}}
      @if ($errors->has('course_code'))
          <span class="text-danger">{{ $errors->first('course_code') }}</span>
      @endif
    </div>
    {{method_field('PUT')}}
    <button type="submit" class="btn btn-primary">Edit</button>
</form>