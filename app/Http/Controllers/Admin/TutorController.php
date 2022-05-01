<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Course;
use App\Models\User;
use App\Models\Tutorcourse;

class TutorController extends Controller
{
    //show tutors
    public function index(){
        $tutors = Tutor::get();
        // $tutors = App\Models\Tutor::first();
        // dd($tutors);
        return view('admin.tutors.view', compact('tutors'));
    }

    public function create(){
        $courses = Course::all();
        // dd($courses);
        return view('admin.tutors.add', compact('courses'));
    }

    public function store(Request $request){

        $user = new User;
        $course = new Course;
        $tutors = new Tutor;

        //save to users
        $user->full_name = $request->tutor_full_name;
        $user->email = $request->tutor_email;
        $user->phone = $request->tutor_phone;
        $user->address = $request->tutor_address;
        $user->password = $request->tutor_password;
        $user->save();
        
        // save to tutor relationship
        $tutors->user_id = $user->id;
        $tutors->save();        

        $selectedTutorCourses = $request->course_id;
            foreach ( $selectedTutorCourses as $selectedCourse) {
                $tutorCourse = new TutorCourse;
                $tutorCourse->tutor_id = $tutors->id;
                $tutorCourse->course_id = $selectedCourse;            
                $tutorCourse->save();
            }
        
        return redirect()->route('admin.addtutors');
    }
}
