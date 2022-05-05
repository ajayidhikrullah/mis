<div class="container">
    
<h3>
    Welcome
    <span class="badge rounded-pill bg-danger"><a href=""></a>{{$student->user->full_name}}</span>
    Your registered courses
</h3>


<table class="table table-striped table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">S/N</th>
        <th scope="col">Student Course Code</th>
        <th scope="col">Student Course Title</th>
      </tr>
    </thead>
    <tbody>
        @foreach($student->courses as $studentCourse)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$studentCourse->code}}</td>
                <td>{{$studentCourse->title}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>