<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    
   
   
    public function Course(){
        
        return $this->hasOne(Course::class,'id','course_id');
    }
}
