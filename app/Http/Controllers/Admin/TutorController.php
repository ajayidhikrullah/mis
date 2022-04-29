<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Course;

class TutorController extends Controller
{
    //show tutors
    public function index(){
        
        return view('admin.tutors.view');
    }

    public function create(){
        $courses = Course::all();
        // dd($courses);
        return view('admin.tutors.add', compact('courses'));
    }

    public function store(Request $request){
        // $tutors = new Tutor;
        // $tutors->full_name = $request->tutor_full_name;
        // // $tutors->

        
        return redirect()->route('admin.addtutors');
    }
}
