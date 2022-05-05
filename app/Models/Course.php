<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'code'];
    protected $table = 'courses';


    public function student()
    {
        // return $this->belongsToMany('App\Models\Course', 'student_courses', 'course_id', 'student_id');
        return $this->belongsToMany(Student::class, 'course_students', 'student_id', 'course_id');
    }
}
