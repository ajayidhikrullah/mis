<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('students.signup');
    }

    public function store(){
        
    }
}
