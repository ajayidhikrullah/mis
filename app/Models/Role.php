<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The model that correlates with users
     * 
     */

    public function user(){
        return $this->belongsTo(User::class, 'role_id');
    }

    
}
