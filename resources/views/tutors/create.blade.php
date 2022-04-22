@extends('layouts.master')

    @section('contents')
    <div class="row">
        <div class="col-6">    
            <form class="form-group">
                {{-- <legend>Continue reg...</legend> --}}

                <p>Tutor</p>

            <div class="form-group">
                <label for="staticEmail">Email</label>
                <input type="text" readonly="" class="form-control" id="staticEmail" value="email@example.com">
            </div>

            {{-- <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your student email">
                <small id="emailHelp" class="form-text text-muted"><i>We'll never share your email with anyone else.</i></small>
            </div> --}}

    
                
                <div class="form-group">
                    <label for="exampleSelect2">Courses</label>
                    <select multiple="" class="form-select" id="exampleSelect2">
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