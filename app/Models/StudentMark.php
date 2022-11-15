<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Result;
use app\Models\Mark;
class Studentmark extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function result()
   {
   	return $this->belongsTo(Result::class,'result_id');
   }
   public function mark()
   {
   	return $this->belongsTo(Mark::class,'mark_id');
   }
}
