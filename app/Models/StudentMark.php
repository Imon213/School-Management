<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Mark;
class Studentmark extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function smStudent(){
        return $this->belongsTo(Student::class,'student_id');
    }
    public function smMark(){
        return $this->belongsTo(Mark::class,'mark_id');
    }
}
