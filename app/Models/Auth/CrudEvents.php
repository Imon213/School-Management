<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrudEvents extends Model
{
    use HasFactory;
    
        protected $fillable = [
        'event_name',
        'description', 
        'event_start', 
        'event_end'
    ];  
}
