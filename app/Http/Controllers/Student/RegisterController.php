<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Role;

class RegisterController extends Controller
{
    //dependency injection
    public $role;
    public $user;

    public function __construct(Role $role, User $user){
        $this->role = $role;
        $this->user = $user;
    }

    public function create(){
        return view('students.signup');
    }

    public function login(){
        return view('students.login');
    }


    public function store(){
        $signUp = request()->validate([
            'student_full_name' => 'required|max:255|min:3',
            'student_email' => 'required|email|max:255',
            'password' => 'required|confirmed|min:5|max:255',
            'student_phone' => 'required|max:255|min:3',
            'student_address' => 'required|max:255|min:3',
        ]);
        //confirm the role of the student and submit
        $studentRole = $this->role->find(2);
        // dd($signUp);

        $this->user::create([
            'role_id' => $studentRole->id,
            'full_name' => $signUp['student_full_name'],
            'email' => $signUp['student_email'], 
            'password' => bcrypt($signUp['password']),
            'phone' => $signUp['student_phone'],
            'address' => $signUp['student_address'],
        ]);

        return redirect()->route('login')->with( 'success', 'Successfully Registered, Please login');
    }
}
