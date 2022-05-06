<form method="POST" action="{{route('course.edit', $editCourse->id)}}">
    <legend>Create courses</legend>
    {{ csrf_field() }}    
    <p>Kindly Edit courses as an Admin</p>
    
    <div class="form-group">
      <label for="title">Edit Course title</label>
      <input type="text" name="course_title" class="form-control" value="{{old('title') ?? $editCourse->title}}" id="title" placeholder="edit course title">
    </div>
    
    <div class="form-group">
      <label for="code">Edit Course Code</label>
      <input type="text" value="{{old('code') ?? $editCourse->code}}" class="form-control" name="course_code" id="code" aria-describedby="code" placeholder="edit course code here">
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
</form>