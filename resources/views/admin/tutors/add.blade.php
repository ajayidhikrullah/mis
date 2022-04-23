@extends('layouts.admin_navbar')

@section('contents')
<div class="row">
    <div class="col-6">    

        <form>
            <div class="form-group">
                <label for="title">Tutor name</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="type in course title">
            </div>
                
            <div class="form-group">
                <label for="code">Tutor Email</label>
                <input type="text" class="form-control" name="tutor email" id="code" aria-describedby="code" placeholder="Enter your tutor name">
                {{-- <small id="emailHelp" class="form-text text-muted"><i>We'll never share your email with anyone else.</i></small> --}}
            </div>  
            
            <div class="form-group">
                <label for="exampleSelect2">Courses</label>
                <select multiple="" class="form-control" id="exampleSelect2">
                <option>English</option>
                <option>Mathematics</option>
                <option>Chemistry</option>
                <option>Computer</option>
                {{-- <option>5</option> --}}
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>    
{{-- </div> --}}
</fieldset>
@endsection