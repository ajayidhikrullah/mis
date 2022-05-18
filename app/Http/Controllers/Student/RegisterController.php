<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Roles;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('students.signup');
    }

    public function store(){
        $signUp = request()->validate([
            'student_full_name' => 'required|max:255|min:3',
            'student_email' => 'required|email|max:255',
            'student_password' => 'required|min:7|max:255',
            'student_phone' => 'required|max:255|min:3',
            'student_address' => 'required|max:255|min:3',
        ]);

        // dd($signUp);

        User::create([
            'full_name' => $signUp['student_full_name'], 
            'email' => $signUp['student_email'], 
            'password' => $signUp['student_password'],
            'phone' => $signUp['student_phone'],
            'address' => $signUp['student_address']
        ]);
        return redirect()->route('students')->with( 'Success', 'Successfully Registered!');
    }
}
