<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\session;
use App\Models\Class_model;
class Active_student extends Model
{
    use HasFactory;
    
    public function actStudent()
    {
        return $this->belongsTo(Student::class,'student_id');
    }
    public function actSession()
    {
        return $this->belongsTo(session::class,'session_id');
    }
    public function actClass()
    {
        return $this->belongsTo(Class_model::class,'class_model_id');
    }
   
    
}
