<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use App\Models\CourseStudent;

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

    /**
     * Displays list of student that are registered from the Users table + their courses,
     * Admin can take some action here, like to edit
     */
    public function create(){
        $students = Student::latest()->get();
        $courses = $this->courses::all();
        return view('admin.students.view', compact('students', 'courses'));
    }

    /**
     * Displays the selected student course registration,
     * System redirects to another page for each student or user with information of their courses by ID.
     * 
     */
    public function view($id){
        $student = Student::latest()->where('id', $id)->with('courses')->first();
        return view('admin.students.eachstudentcourses', compact('student'));
    }

     /**
     * Saves the student record alongside with the courses that has been uploaded by the admin,
     * System then, redirects the Student to same page if after successfull registeration and shows a success message or otherwise
     * Upon successful registration, the selected courses are saved to a pivot table for the Student.
     * 
     */
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

        //get list of selected courses from students to be saved to db
        $selectedStudentCourses = $request->course_id;
            foreach ( $selectedStudentCourses as $selectedStudentCourse) {
                $studentCourse = new CourseStudent;
                $studentCourse->student_id = $students->id;
                $studentCourse->course_id = $selectedStudentCourse;            
                $studentCourse->save();
            }
        return redirect()->route('students')->with('success', 'Students created successfully!');;
    }    
}
