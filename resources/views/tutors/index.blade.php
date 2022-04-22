@extends('layouts.master')

@section('contents')

<ul>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle btn-danger" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tutor Dash</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="tutor_add_course">Register courses</a>
        <a class="dropdown-item" href="tutor">View registered courses</a>
      </div>
    </li>
  </ul>

<h3>Already Registered Courses</h3>
<p>Tutor Name: Ade Hayjay</p>

    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">S/N</th>
            <th scope="col">Course title</th>
            <th scope="col">Course Code</th>
            {{-- <th scope="col">School</th> --}}
            {{-- <th scope="col">Action</th> --}}
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>English</td>
                <td>Eng-100</td>
                <td><a class="btn btn-danger" href="">Delete</a></td>
            </tr>
        </tbody>
    </table>   
@endsection