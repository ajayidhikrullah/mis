<h3>Already registered Tutors</h3>

<p><a href="javascript:history.back()">.../Back</a></p>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">S/N</th>
            <th scope="col">Tutor Name</th>
            <th scope="col">Tutors EMail</th>
            <th scope="col">Take Action</th>
            {{-- <th scope="col">Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($tutors as $tutor)
            {{-- {{dd($tutor)}} --}}
                @if ($tutor->user)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$tutor->user->full_name}}</td>
                        <td>{{$tutor->user->email}}</td>
                        <td>
                            <a class="btn btn-success" href="{{route('admin.mycourse', $tutor->id)}}">View courses</a>
                            <a class="btn btn-danger" href="{{route('updatetutor', $tutor->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{route('deletetutor', $tutor->id)}}">Delete</a>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>   
