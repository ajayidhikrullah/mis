<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// home route
Route::get('/', function () {
    return view('index');
});

//courses route
Route::get('courses', function(){
    return view('courses');
});

// admin
Route::group(['prefix' =>'admin'], function(){
    Route::get('/', 'Admin\\AdminController@dashboard');
    
    //admincourse
    Route::get('/viewcourses', function(){
        return view('admin.courses.view');
    })->name('admin.viewcourses');
    
    Route::get('/addcourses', function(){
        return view('admin.courses.add');
    })->name('admin.addcourses');
    //admintutors
    Route::get('/addtutors', function(){
        return view('admin.tutors.add');
    })->name('admin.addtutors');
    
    Route::get('/viewtutors', function(){
        return view('admin.tutors.view');
    })->name('admin.viewtutors');
    
    //adminstudents
    // admin students
    Route::get('admin/viewstudents', function(){
        return view('admin.students.view');
    })->name('admin.viewstudents');
});


// admin students
Route::get('student', function(){
    return view('students.index');
});

Route::get('student_add_course', function(){
    return view('students.create');
});

Route::get('tutor', function(){
    return view('tutors.index');
});

