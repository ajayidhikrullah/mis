<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'code'];
    protected $table = 'courses'; //use courses as the naming convention all through


    public function student()
    {
        return $this->belongsToMany(Student::class, 'course_students', 'student_id', 'course_id');
    }

        //relationship between tutor and course
    public function tutor(){
        return $this->belongsToMany(Tutor::class, 'tutor_courses', 'course_id', 'tutor_id');
    }
}
