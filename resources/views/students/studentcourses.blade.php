<h3>List of Courses by each students</h3>


<table class="table table-striped table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">S/N</th>
        <th scope="col">Student Course Code</th>
        <th scope="col">Student Course Title</th>
        {{-- <th scope="col">Handle</th> --}}
      </tr>
    </thead>
    <tbody>
        @foreach($students as $std)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td></td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        @endforeach
    </tbody>
  </table>