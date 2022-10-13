<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Class_model;
use App\Models\subject;
class Program extends Model
{
    use HasFactory;

    // public function subject(){
    //     return $this->belongsTo(Subject::class);
    // }

     public function class_pro(){
        return $this->belongsTo(Class_model::class);
    }
    public function subject(){
        return $this->belongsTo(subject::class);
    }

}
