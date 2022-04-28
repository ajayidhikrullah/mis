<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //show student home page
    public function index(){
        return view('/index');
    }

    public function view(){
        return view('admin.students.view');
    }

    public function store(){
        
    }
}
