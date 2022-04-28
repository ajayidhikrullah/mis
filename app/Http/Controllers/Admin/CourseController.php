<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

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

    public function store(Request $request){
        $course = new Course;
        $course->title = $request->title;
        $course->code = $request->code;

        $course->save();

        return redirect()->route('admin.addcourses');
    }
}
