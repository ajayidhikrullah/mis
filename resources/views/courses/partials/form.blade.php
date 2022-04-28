<form method="POST" action="{{route('course.store')}}">
    <legend>Create courses</legend>
    {{ csrf_field() }}    
    <p>Kindly create courses as an Admin</p>
    
    <div class="form-group">
      <label for="title">Course title</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="type in course title">
    </div>
    
    <div class="form-group">
      <label for="code">Course Code</label>
      <input type="text" class="form-control" name="code" id="code" aria-describedby="code" placeholder="Enter your course code">
      {{-- <small id="emailHelp" class="form-text text-muted"><i>We'll never share your email with anyone else.</i></small> --}}
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>