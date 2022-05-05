<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{    
    //show courses
    public function index(){
        $courses = Course::latest()->get();
        // dd($courses);
        return view('admin.courses.view', compact('courses'));
    }

    //add courses
    public function create(){
        return view('admin.courses.add');
    }

    public function store(Request $request){
        $course = new Course;
        $course->title = $request->course_title;
        $course->code = $request->course_code;
        $course->save();
        return redirect()->route('admin.addcourses');
    }
}
