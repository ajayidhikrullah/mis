
  <h3>List of Courses Assigned to You @ {{$tutor->user->full_name}}</h3>

  <p><a href="javascript:history.back()">.../Back</a></p>
  
<table class="table table-striped table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">S/N</th>
        <th scope="col">Tutor Course Code</th>
        <th scope="col">Tutor Course Title</th>
      </tr>
    </thead>

    <tbody>
        @foreach($tutor->courses as $tutorCourse)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$tutorCourse->code}}</td>
                <td>{{$tutorCourse->title}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>