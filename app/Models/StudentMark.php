<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use app\Models\Result;
use app\Models\Mark;
=======
use App\Models\Student;
use App\Models\Mark;
>>>>>>> 23bc16f689e496448857f22cc598abbc30fe50ee
class Studentmark extends Model
{
    use HasFactory;
    public $timestamps = false;
<<<<<<< HEAD
    public function result()
   {
   	return $this->belongsTo(Result::class,'result_id');
   }
   public function mark()
   {
   	return $this->belongsTo(Mark::class,'mark_id');
   }
=======
    public function smStudent(){
        return $this->belongsTo(Student::class,'student_id');
    }
    public function smMark(){
        return $this->belongsTo(Mark::class,'mark_id');
    }
>>>>>>> 23bc16f689e496448857f22cc598abbc30fe50ee
}
