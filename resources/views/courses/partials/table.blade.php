<h1>List of All courses available</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">S/N</th>
            <th scope="col">Course title</th>
            <th scope="col">Course Code</th>
            <th scope="col">Take Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
            <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$course->title}}</td>
                    <td>{{$course->code}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('course.edit', $course->id)}}">Edit courses</a>
                        <a class="btn btn-danger" href="{{route('course.delete', $course->id)}}">Delete</a>
                    </td>
            </tr>
        @endforeach
    </tbody>
</table>