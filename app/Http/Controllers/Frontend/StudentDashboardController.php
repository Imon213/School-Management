<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Routine;
use App\Models\Program;
class StudentDashboardController extends Controller
{
    public function Dashboard(){
        $routine = Routine::all();
        $program = Program::orderBy('created_at','DESC')->get();
         //return $routine->where('day','monday')->count();
       return view('Frontend.studentdashboard')
                                    ->with('program',$program)
                                    ->with('routine', $routine);
     }
 
}