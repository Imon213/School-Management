<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Subject;
use app\Models\Class_model;
use app\Models\Result;
use app\Models\Studentmark;
class Mark extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded=[];
    public function mClass(){
        return $this->belongsTo(Class_model::class,'class_model_id');
    }
    public function msubject(){
        return $this->belongsTo(Subject::class,'subject_id');
       }
   public function studentmark()
   {
   	return $this->hasmany(Studentmark::class);
   }
   
}