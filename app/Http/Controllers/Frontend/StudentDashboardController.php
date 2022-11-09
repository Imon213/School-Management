<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;

use App\Models\Routine;
use App\Models\Program;
use App\Models\Student;
class StudentDashboardController extends Controller
{
    public function Dashboard(Request $request){
        $session_id =  $request->session()->get('user');
        $student = Student::where('id',$session_id)->first();
        $routine = Routine::all();
        $program = Program::orderBy('created_at','DESC')->get();
         //return $routine->where('day','monday')->count();
       return view('Frontend.studentdashboard')
                                    ->with('program',$program)
                                    ->with('routine', $routine)
                                    ->with('student',$student);
     }
 
}