<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCourseForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Course;

class CourseController extends Controller
{    
    /**
     * This method is the landing page for registered courses by Admin
     * it also populate records in descending order
     */
    public function index(){
        $courses = Course::latest()->get();
        return view('admin.courses.view', compact('courses'));
    }

    /**
     * This renders the course forms page
     */
    public function create(){
        return view('admin.courses.add');
    }

    /**
     * Renders course form for editing
     * 
     */
    Public function edit($course){
        $editCourse = Course::find($course);
        return view('admin.courses.edit', compact('editCourse'));
    }

    /**
     * renders the course form for updating purposes
     * returns success message if worked
     * validate the data
     */
    public function update(StoreCourseForm $request, $course){
        $course = Course::find($course);
        // dd($course);
        $course->title = $request->course_title;
        $course->code = $request->course_code;
        $course->save();

        return redirect()->route('admin.viewcourses')->with('success', 'Course updated successfully!');;
    }

    /**
     * to delete each selected courses of choice
     * return success message after delete
     */
    public function delete($course){
        $course = Course::where('id', $course)->delete();
        return redirect()->route('admin.viewcourses')->with('success', 'Course deleted successfully!');;   
    }

    /**
     * Validate Course forms
     * Insert course data in the model
     * return success message if true
     */
    public function store(StoreCourseForm $request){
        $course = new Course;
        $course->title = $request->course_title;
        $course->code = $request->course_code;
        $course->save();
        return redirect()->route('admin.addcourses')->with('success', 'Course created successfully!');;
    }
}
