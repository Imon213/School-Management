<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mark;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Class_model;
use App\Models\Active_student;
class StudentResultManagementController extends Controller
{
    public function GetMarks(Request $request){
        $session_id =  $request->session()->get('user');
        $student = Student::where('id',$session_id)->first();
        $active =  Active_student::where('student_id',$session_id)->get();
        $no_sub= $active->where('status','valid')->first()->actclass->sSubject;
        $sub = Subject::where('id',$no_sub[$no_sub->count()-1]->id)->first();
        $mark = Mark::where('subject_id',$sub->id)->get();

        return view('Frontend.result',compact('student','active','mark','sub'));
    }
    public function SubjectMarks(Request $request)
    {
       
       $class = Class_model::where('id',$request->class_id)->first()->sSubject;
      return view('Frontend.partial_subject',compact('class'));
    }

    public function SubjectMarksDistribution(Request $request)
    {
       
       $mark = Mark::where('subject_id',$request->sub_id)->get();
       $sub = Subject::where('id',$request->sub_id)->first();
       return view('Frontend.all_result',compact('mark','sub'));
       
    }
}
