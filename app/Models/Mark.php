<?php

namespace App\Models;
use app\Models\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded=[];
   public function msubject(){
    return $this->belongsTo(Subject::class,'subject_id');
   }
}