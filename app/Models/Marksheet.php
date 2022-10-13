<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Result;
use App\Models\Payment;

class Marksheet extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function student (){
        return $this->belongsTo(Student::class);
    }
public function result (){
        return $this->belongsTo(Result::class);
    }
    public function payment (){
        return $this->belongsTo(Payment::class);
    }
}
