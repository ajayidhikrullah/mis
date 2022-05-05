<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

        // belongstomany relationship between tutor and course
    public function courses(){
        return $this->belongsToMany(Course::class, 'tutor_courses', 'tutor_id', 'course_id');
    }
}
