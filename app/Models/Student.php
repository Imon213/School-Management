<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Auth\Registration;
use App\Models\Active_student;
use App\Models\Result;
use App\Models\Marksheet;




class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function reg()
    {
        return $this->belongsTo(Registration::class);
    }
    public function Active_student()
    {
        return $this->belongsTo(Active_student::class);
    }
     public function result(){
        return $this->hasMany(Result::class);
    }
     public function marksheet(){
        return $this->hasOne(Marksheet::class);
    }


}
