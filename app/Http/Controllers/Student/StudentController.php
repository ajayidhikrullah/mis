<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeStudentForm;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use App\Models\CourseStudent;

class StudentController extends Controller
{

    public $courses;
    public $users;
    public $students;
    public $coursestudents;

    public function __construct(Course $courses, User $users, Student $students, CourseStudent $coursestudents){
        $this->courses = $courses;
        $this->users = $users;
        $this->students = $students;
        $this->coursestudents = $coursestudents;
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
     * Also checks for if student selected less than 1 or equal to 1 course, Student SHOULD select more than One.
     */
    public function view($id){
        $student = $this->students::latest()->where('id', $id)->with('courses')->first();
        // dd($student->user->full_name);
            if ($student->count() <= 1) {
                # code...
                return redirect()->back()->with('info', 'Sorry, please select more than 1 course');
            }
        return view('admin.students.eachstudentcourses', compact('student'));
    }

     /**
     * In the function below, admin can edit student
     * 
     */

    Public function edit($student){
        // $editStudent = $this->view($id);
        $editStudent = $this->students->latest()->where('id', $student)->with('courses')->first()->find();
        // dd($editStudent->user->full_name);
        // $editStudent = $this->students::find($student);
        $courses = $this->courses::all();
        // $users = $this->users::all();
        return view('admin.students.edit', compact('editStudent', 'courses'));
    }

    public function update(StoreStudentForm $request, $student){
        $students = $this->students->find($student);
        $user = $this->users($student);

        $user->full_name = $request->student_full_name;
        $user->email = $request->student_email;
        $user->phone = $request->student_phone;
        $user->address = $request->student_address;
        $user->password = hash::make($request->student_password);
        $user->save();

        //save to the corresponsiding user_id field in students tb
        $students->user_id = $user->id;
        $students->save();

        //get list of selected choice of courses from students to be saved to db
        $selectedStudentCourses = $request->course_id;
            foreach ( $selectedStudentCourses as $selectedStudentCourse) {
                $studentCourse = $this->coursestudents;
                $studentCourse->student_id = $students->id;
                $studentCourse->course_id = $selectedStudentCourse;            
                $studentCourse->save();
            }
        return redirect()->route('viewstudents')->with('success', 'Students Updated successfully!');
    }    
    
    //delete selected student record
    public function delete($student){
        $course = $this->students::where('id', $student)->delete();
        return redirect()->route('viewstudents')->with('success', '<i>Student record</i> deleted successfully!');;   
    }

     /**
     * Saves the student record alongside with the courses that has been uploaded by the admin,
     * System then, redirects the Student to same page if after successfull registeration and shows a success message or otherwise
     * Upon successful registration, the selected courses are saved to a pivot table for the Student.
     * 
     */
    public function store(StoreStudentForm $request){
        $students = $this->students;
        $user = $this->users;
        //take the data from user
        $user->full_name = $request->student_full_name;
        $user->email = $request->student_email;
        $user->phone = $request->student_phone;
        $user->address = $request->student_address;
        $user->password = hash::make($request->student_password);
        $user->save();

        //save to the corresponsiding user_id field in students tb
        $students->user_id = $user->id;
        $students->save();

        //get list of selected choice of courses from students to be saved to db
        $selectedStudentCourses = $request->course_id;
            foreach ( $selectedStudentCourses as $selectedStudentCourse) {
                $studentCourse = $this->coursestudents;
                $studentCourse->student_id = $students->id;
                $studentCourse->course_id = $selectedStudentCourse;            
                $studentCourse->save();
            }
        return redirect()->route('students')->with('success', 'Students created successfully!');
    }    
}
