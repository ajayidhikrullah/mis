<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    //show tutors
    public function index(){
        return view('admin.tutors.view');
    }

    public function create(){
        return view('admin.tutors.add');
    }
}
