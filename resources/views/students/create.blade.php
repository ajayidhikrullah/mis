@extends('layouts.master')
    
@section('contents')

    <p><a href="javascript:history.back()">.../Back</a></p>

<fieldset>
    <div class="row">
        <div class="col-6">    
            <form class="form-group">
                
                <legend>Continue reg...</legend>

                <p>Please register for multiple preferred courses</p>

                    <div class="form-group">
                        <label for="staticEmail">Email</label>
                        <input type="text" readonly="" class="form-control" id="staticEmail" value="email@example.com">
                    </div>
                
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
                <button type="Register course" class="btn btn-primary">Submit</button>
            </form>
        </div>    
    </div>
</fieldset>
@endsection