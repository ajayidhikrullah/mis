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
Route::group(['namespace' => 'Student'], function(){
    Route::get('/', 'StudentController@index')->middleware('auth')->name('students');
    Route::get('/viewstudents', 'StudentController@create')->name('viewstudents');
    Route::post('/storestudents', 'StudentController@store')->name('students.store');
    // Route::get('/student/courses/{id}', 'StudentController@view')->name('studentsrecord');
    Route::get('/student/courses/{id}', 'StudentController@view')->name('studentcourses');
    Route::get('/editstudent/student/{student}', 'StudentController@edit')->name('editstudent');
    Route::put('/editstudent/student/{student}', 'StudentController@update')->name('updatestudent');
    Route::get('/deletestudent/student/{student}', 'StudentController@delete')->name('deletestudent');

    //Student Registeration, Sign In, Login, Logout
    Route::get('/signup', 'RegisterController@create')->name('signup'); //if u are signed in, no need to register. If you are signedIn, then we need to redirect to somewhere else
    Route::post('/signup', 'RegisterController@store')->name('signup.store');
});

/***
 * login Route
 * 
 * */

Route::get('/login', 'LoginController@login')->name('login'); //guest needs to use this to get auth
Route::post('/logout', 'LoginController@destroy'); //u can only logout if you are authenticated or signedin
Route::post('/login', 'LoginController@store')->name('login.store');



// admin
Route::group(['prefix' =>'admin', 'namespace' => 'Admin'], function(){
    Route::get('/', 'AdminController@dashboard');
    
    //admincourse
    Route::get('/viewcourses', 'CourseController@index')->name('admin.viewcourses');
    Route::get('/addcourses', 'CourseController@create')->name('admin.addcourses');
    Route::post('/storecourse', 'CourseController@store')->name('course.store');
    Route::get('/editcourse/{course}', 'CourseController@edit')->name('course.edit');
    Route::put('/editcourse/{course}', 'CourseController@update')->name('course.update');
    Route::get('/deletecourse/{course}', 'CourseController@delete')->name('course.delete');
    

    //admintutors
    Route::get('/viewtutors', 'TutorController@index')->name('admin.viewtutors');
    Route::get('/addtutors', 'TutorController@create')->name('admin.addtutors');
    Route::post('/storetutors', 'TutorController@store')->name('tutors.store');
    Route::get('/tutor/course/{id}', 'TutorController@view')->name('admin.mycourse');
    Route::get('/edittutor/tutor/{tutor}', 'TutorController@edit')->name('edittutor');
    Route::put('/edittutor/tutor/{tutor}', 'TutorController@update')->name('updatetutor');
    Route::get('/deletetutor/tutor/{tutor}', 'TutorController@delete')->name('deletetutor');
});

