<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use App\Models\StudentCourse;

class StudentController extends Controller
{

    public $courses;

    public function __construct(Course $courses){
        $this->courses = $courses;
    }

    //show student home page
    public function index(){
        $courses = $this->courses::all();
        return view('/index', compact('courses'));
    }

    public function create(){
        $students = Student::latest()->get();
        $courses = $this->courses::all();
        return view('admin.students.view', compact('students', 'courses'));
    }

    public function view($id){
        $students = Student::find($id);
        foreach($students->courses as $std){
            dd($std);
        }
        dd($students);


        // foreach ($students as $std){
        // }
        
        return view('admin.students.eachstudentcourses', compact('students'));
    }

    public function store(Request $request){
        $students = new Student;
        $user = new User;

        $user->full_name = $request->student_full_name;
        $user->email = $request->student_email;
        $user->phone = $request->student_phone;
        $user->address = $request->student_address;
        $user->password = hash::make($request->student_password);
        $user->save();

        //save to the corresponsiding user_id field in students tb
        $students->user_id = $user->id;
        $students->save();

        //get list of selected courses from students to be saved to database
        $selectedStudentCourses = $request->course_id;
            foreach ( $selectedStudentCourses as $selectedStudentCourse) {
                $studentCourse = new StudentCourse;
                $studentCourse->student_id = $students->id;
                $studentCourse->course_id = $selectedStudentCourse;            
                $studentCourse->save();
            }
        return redirect()->route('students');
    }    
}
