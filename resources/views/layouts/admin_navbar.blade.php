<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="/admin">Management Information System</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="admin" role="button" aria-haspopup="true" aria-expanded="false">Tutor</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{route('admin.addtutors')}}">Add Tutor</a>
                      <a class="dropdown-item" href="{{route('admin.viewtutors')}}">View Tutor</a>
                    </div>
                  </li>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="admin" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{route('admin.addcourses')}}">Add Courses</a>
                  <a class="dropdown-item" href="{{route('admin.viewcourses')}}">View Courses</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="admin" role="button" aria-haspopup="true" aria-expanded="false">Students</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{route('viewstudents')}}">View Students</a>
                  {{-- <a class="dropdown-item" href="tutors">Add Courses</a> --}}
                </div>
            </li>        
            </ul>

          </div>
        </div>
    </nav>


    <div class="container">
          {{-- globally display success or error message in the app --}}
          @if(Session::has('success'))
          <div class="alert alert-success">
              {{ Session::get('success') }}
              @php
                  Session::forget('success');
              @endphp
          </div>
      @endif
      @if(Session::has('info'))
          <div class="alert alert-info">
              {{ Session::get('info') }}
              @php
                  Session::forget('info');
              @endphp
          </div>
      @endif
      @if(Session::has('error'))
          <div class="alert alert-error">
              {{ Session::get('error') }}
              @php
                  Session::forget('error');
              @endphp
          </div>
      @endif
      
      @yield('contents')

      
    </div>
</body>
</html>
    