<h1>Registered Students</h1>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">S/N</th>
            <th scope="col">Student Name</th>
            <th scope="col">Student Email</th>
            <th scope="col">Students Courses</th>
            {{-- <th scope="col">Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$student->user->full_name}}</td>
                    <td>{{$student->user->email}}</td>
                    <td><a class="btn btn-success" href="/mycourses/{{$student->id}}">View courses</a></td>
                    <td><a class="btn btn-primary" href="">Edit</a></td>
                    <td><a class="btn btn-danger" href="">Delete</a></td>
                </tr>
            @endforeach
            
        </tbody>
    </table>