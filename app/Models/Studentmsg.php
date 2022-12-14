<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Studentmsg extends Model
{
    public $timestamps = false;
    use HasFactory;

        public function msg()
    {
        return $this->belongsTo(Student::class,'student_id');
    }
}
