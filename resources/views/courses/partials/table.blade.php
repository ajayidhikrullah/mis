<h1>List of All courses available</h1>
<table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">S/N</th>
        <th scope="col">Course title</th>
        <th scope="col">Course Code</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
            <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$course->title}}</td>
                    <td>{{$course->code}}</td>
                    <td><a class="btn btn-primary" href="">Edit courses</a></td>
                    <td><a class="btn btn-danger" href="">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>