<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

use App\Models\Student;
use App\Models\Session;

use App\Models\subject;
use App\Models\Class_model;
use App\Models\Marksheet;





class Result extends Model
{
    use HasFactory;
    public $timestamps = false;

    //  public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
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
