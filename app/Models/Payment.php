<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marksheet;
class Payment extends Model
{
    use HasFactory;
    public $timestamps = false;
    // public function marksheet (){
    //     // return $this->(Marksheet::class);
    // }
}
