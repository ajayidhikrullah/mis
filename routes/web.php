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
    Route::get('/', 'StudentController@index')->name('students');
    Route::get('/viewstudents', 'StudentController@create')->name('viewstudents');
    Route::post('/storestudents', 'StudentController@store')->name('students.store');
    Route::get('/mycourses/{id}', 'StudentController@view')->name('mycourses');
});

// admin
Route::group(['prefix' =>'admin', 'namespace' => 'Admin'], function(){
    Route::get('/', 'AdminController@dashboard');
    
    //admincourse
    Route::get('/viewcourses', 'CourseController@index')->name('admin.viewcourses');
    Route::get('/addcourses', 'CourseController@create')->name('admin.addcourses');
    Route::post('/storecourse', 'CourseController@store')->name('course.store');
    
    //admintutors
    Route::get('/viewtutors', 'TutorController@index')->name('admin.viewtutors');
    Route::get('/addtutors', 'TutorController@create')->name('admin.addtutors');
    Route::post('/storetutors', 'TutorController@store')->name('tutors.store');
});

