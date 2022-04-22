@extends('layouts.master')

    @section('contents')
    <div class="row">
        <div class="col-6">    
            <form class="form-group">

                <p>Tutor</p>

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
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>    
    {{-- </div> --}}
</fieldset>
@endsection