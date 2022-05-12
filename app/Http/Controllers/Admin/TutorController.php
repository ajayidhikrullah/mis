<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTutorForm;
use App\Http\Requests\UpdateTutorForm;

use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Course;
use App\Models\User;
use App\Models\TutorCourse;
use Illuminate\Support\Facades\DB;
class TutorController extends Controller
{

    public $tutors;
    public $courses;
    public $users;
    public $tutorCourses;


    // independency injection
    public function __construct(User $users, Course $courses, Tutor $tutors, TutorCourse $tutorCourses){
        $this->users = $users;
        $this->courses = $courses;
        $this->tutors = $tutors;
        $this->tutorCourses = $tutorCourses;
    }

    //show tutors
    public function index(){
        $tutors = $this->tutors->with('user')->latest()->get();
        return view('admin.tutors.view', compact('tutors'));
    }

    public function create(){
        $courses = Course::all();
        return view('admin.tutors.add', compact('courses'));
    }

    public function view($tutor){
            $tutor = Tutor::latest()->where('id', $tutor)->with('courses')->first();
            return view('admin.tutors.eachtutorcourses', compact('tutor'));
    }

    /**
     * In the function below, admin can edit student
     * 
     */

    Public function edit($tutor){
        $editTutor = $this->tutors->latest()->where('id', $tutor)->with('courses')->find($tutor);
        // dd($editTutor->users->full_name);
        $course = $this->courses::all();
        return view('admin.tutors.edit', compact('editTutor', 'course'));
    }

    public function update(UpdateTutorForm $request, $tutor){
        $tutor = $this->tutors->find($tutor);
        $user = $this->users->where('id', $tutor->user_id)->first();
        $user->full_name = $request->tutor_full_name;
        $user->email = $request->tutor_email;
        $user->phone = $request->tutor_phone;
        $user->address = $request->tutor_address;
        $user->save();

        //get list of selected choice of courses from students to be saved to db
        $selectedTutorCourses = $request->course_id;
        if (isset($selectedTutorCourses)) {
            foreach ( $selectedTutorCourses as $selectedTutorCourse) {
                $tutorCourse = $this->tutorCourses;
                $tutorCourse->tutor_id = $tutor->id; //check tutorCourse tb WITH tutors TB, id column
                $tutorCourse->course_id = $selectedTutorCourse;            
                $tutorCourse->save();
            }
        }
            
        return redirect()->route('admin.viewtutors')->with('success', 'Tutor Updated successfully!');
    }    
    
    /**
     * Validate tutors records coming from admin
     * Insert course data in the model
     * return success message if no error
     */
        public function delete($id){
        $tutor = $this->tutors::where('id', $id)->with('courses')->first();
        DB::table('tutor_courses')->where('tutor_id', $tutor->id)->delete();
        $user = User::findOrFail($tutor->user_id);
        $tutor->delete();
        $user->delete();
        return redirect()->route('admin.viewtutors')->with('success', 'Tutor record deleted successfully!');;   
    }


    /**
     * Validate Course forms
     * Insert course data in the model
     * return success message if true
     */
    public function store(StoreTutorForm $request){

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
