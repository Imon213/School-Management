<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Session;
use App\Models\Class_model;
class Active_student extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function student(){
        return $this->hasMany(Student::class);
    }
    public function session(){
        return $this->hasMany(Session::class);
    }
    public function class(){
        return $this->hasMany(Class_model::class);
    }
}
