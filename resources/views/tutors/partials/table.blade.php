<h3>Already registered Tutors</h3>

    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">S/N</th>
            <th scope="col">Tutor Name</th>
            <th scope="col">Tutors EMail</th>
            <th scope="col">Tutor Courses</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tutors as $tutor)
            {{-- {{dd($tutor->user)}} --}}
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$tutor->user->full_name}}</td>
                    <td>{{$tutor->user->email}}</td>
                    <td><a class="btn btn-success" href="">View courses</a></td>
                    <td><a class="btn btn-danger" href="">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>   