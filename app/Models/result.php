<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

use App\Models\Student;
use App\Models\Session;

use App\Models\subject;
use App\Models\Studentmark;
use App\Models\Marksheet;
use App\Models\Studentmark;




class Result extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function studentmark()
   {
    return $this->hasmany(Studentmark::class);
   }
   public function sresult()
   {
    return $this->belongsTo(Student::class,'student_id');
   }

     public function rStudentResult()
    {
        return $this->hasMany(Studentmark::class);
    }
    // public function subject()
    // {
    //     return $this->belongsTo(subject::class);
    // }
    //  public function session()
    // {
    //     return $this->belongsTo(session::class);
    // }
   

    // public function student(){
    //     return $this->belongsTo(Student::class);
    // }
    // public function subject(){
    //     return $this->belongsTo(subject::class);
    // }
    // public function class_model(){
    //     return $this->belongsTo(Class_model::class);
    // }
    // public function session (){
    //     return $this->belongsTo(Session::class);
    // }
    // public function marksheet (){
    //     return $this->(Marksheet::class);
    // }

}
