<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Student;



class AdminController extends Controller
{
    public function dashboard(){
        $students = Student::all();
        return view('admin.dashboard', compact('students'));
    }
}
