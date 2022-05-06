<form method="POST" action="{{route('course.store')}}">
    <legend>Create courses</legend>
    {{ csrf_field() }}    
    <p>Kindly create courses as an Admin</p>
    
    <div class="form-group">
      <label for="title">Course Title</label>
      <input type="text" name="course_title" class="form-control" id="title" placeholder="Type in the course title">
    </div>
    
    <div class="form-group">
      <label for="code">Course Code</label>
      <input type="text" class="form-control" name="course_code" id="code" aria-describedby="code" placeholder="Type course code here...">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>