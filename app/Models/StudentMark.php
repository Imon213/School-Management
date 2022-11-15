<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use app\Models\Result;
use App\Models\Student;
use App\Models\subject;


class Studentmark extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function result()
   {
   	return $this->belongsTo(Result::class,'result_id');
   }
   // public function mark()
   // {
   // 	return $this->belongsTo(Mark::class,'mark_id');
   // }
   public function sub()
   {
    return $this->belongsTo(subject::class,'subject_id');
   }

    public function smStudent(){
        return $this->belongsTo(Student::class,'student_id');
    }
    public function smMark(){
        return $this->belongsTo(Mark::class,'mark_id');
    }

}
