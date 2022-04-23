<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' =>'admin', 'namespace' => 'Admin'], function(){
    Route::get('/', 'AdminController@dashboard');
    
    //admincourse
    Route::get('/viewcourses', 'CourseController@index')->name('admin.viewcourses');
    Route::get('/addcourses', 'CourseController@create')->name('admin.addcourses');

    //admintutors
    Route::get('/viewtutors', 'TutorController@index')->name('admin.viewtutors');
    Route::get('/addtutors', 'TutorController@create')->name('admin.addtutors');
    
    
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

