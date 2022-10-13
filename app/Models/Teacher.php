<?php

namespace App\Models;



use App\Models\Auth\Registration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;


    public $timestamps = false;
     public function reg()
    {
        return $this->belongsTo(Registration::class);
    }

}
