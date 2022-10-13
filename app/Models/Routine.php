<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\subject;
use App\Models\Class_Model;
class Routine extends Model
{
    use HasFactory;
    public $timestamps = false;

    // public function subject(){
    //     return $this->belongsTo(Subject::class);
    // }
    

    public function subject(){
        return $this->hasMany(subject::class);
    }
    public function classes(){
        return $this->hasOne(Class_model::class);
    }

}
