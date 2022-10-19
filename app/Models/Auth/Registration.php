<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Admin;
class Registration extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function student(){
        return $this->hasOne(Student::class);
    }

    
    //  public function session()
    // {
    //     return $this->hasOne(session::class);

    // public function teacher(){
    //     return $this->hasMany(Teacher::class);
    // }
    // public function admin(){
    //     return $this->hasMany(Admin::class);

    // }
}
