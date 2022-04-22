@extends('layouts.master')

    @section('contents')
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