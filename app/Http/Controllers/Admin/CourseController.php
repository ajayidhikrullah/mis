<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //show courses
    public function index(){
        return view('admin.courses.view');
    }

    //add courses
    public function create(){
        return view('admin.courses.add');
    }

    public function store(){
        
    }
}
