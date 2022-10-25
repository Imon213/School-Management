<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    public $timestamps = false;

        public function aStudent()
    {
        return $this->belongsTo(Student::class,'student_id');
    }
}
