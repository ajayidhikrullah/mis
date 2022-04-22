@extends('layouts.master')

    @section('contents')

      {{-- Admin can create courses --}}
      <br>
      <ul>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle btn-danger" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">View courses || Tutors || Admins</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="courses">Courses</a>
            <a class="dropdown-item" href="tutors">Tutors</a>
            <a class="dropdown-item" href="admin">Administrators</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <hr>
      <form>
        <legend>Create courses</legend>
        
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

        {{-- //admin can see list of registered student --}}
        {{-- admin can see list of registered courses and tutors --}}
        {{-- admin can take action on courses, students and tutors by assigning--}}


        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">S/N</th>
                <th scope="col">All users</th>
                {{--sort by roles--}}
                <th scope="col">Roles</th> 
              </tr>
            </thead>
            <tbody>
              <tr class="table-active">
                <th scope="row">1</th>
                <td>hayjay deen</td>
                <td>Students</td>
              </tr>
              <tr class="table-active">
                <th scope="row">2</th>
                <td>Dr Abdullah Hayjay</td>
                <td>Admin</td>
              </tr>
            </tbody>
          </table>

          {{-- list of courses --}}


        
    @endsection