<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Course;
use App\Models\User;
use App\Models\TutorCourse;

class TutorController extends Controller
{
    //show tutors
    public function index(){
        $tutors = Tutor::latest()->get();
        return view('admin.tutors.view', compact('tutors'));
    }

    public function create(){
        $courses = Course::all();
        return view('admin.tutors.add', compact('courses'));
    }

    public function view($id){
            $tutor = Tutor::latest()->where('id', $id)->with('courses')->first();
            return view('admin.tutors.eachtutorcourses', compact('tutor'));
    }

    /**
     * Admin Saves the Tutor records alongside, assign some courses that has been uploaded by the admin in the course tb
     * System then, redirects the Admin to  page if after successfull registeration and shows a success message or otherwise
     * Upon successful registration, the selected courses are saved to a pivot table for the Student.
     * 
     */
    public function store(Request $request){

        $user = new User;
        $tutors = new Tutor;

        //save to users
        $user->full_name = $request->tutor_full_name;
        $user->email = $request->tutor_email;
        $user->phone = $request->tutor_phone;
        $user->address = $request->tutor_address;
        $user->password = hash::make($request->tutor_password);
        $user->save();
        
        $tutors->user_id = $user->id; //save to tutors user_id fKey field
        $tutors->save();        

        $selectedTutorCourses = $request->course_id;
            foreach ( $selectedTutorCourses as $selectedCourse) {
                $tutorCourse = new TutorCourse;
                $tutorCourse->tutor_id = $tutors->id;
                $tutorCourse->course_id = $selectedCourse;            
                $tutorCourse->save();
            }
        return redirect()->route('admin.addtutors')->with('success', 'Tutor created successfully!');;
    }
}
