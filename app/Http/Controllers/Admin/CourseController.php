<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCourseForm;
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

    Public function edit($course){
        $editCourse = Course::find($course);
        return view('admin.courses.edit', compact('editCourse'));
    }

    public function update(Request $request, $course){
        $course = Course::find($course);
        // dd($course);
        $course->title = $request->course_title;
        $course->code = $request->course_code;
        $course->save();

        return redirect()->route('admin.viewcourses')->with('success', 'Course updated successfully!');;
    }

    public function store(StoreCourseForm $request){
        $course = new Course;
        $course->title = $request->course_title;
        $course->code = $request->course_code;
        $course->save();
        return redirect()->route('admin.addcourses')->with('success', 'Course created successfully!');;
    }
}
