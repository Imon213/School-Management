<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mark;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Class_model;
use App\Models\Active_student;
use App\Models\Result;
use App\Models\Studentmark;
class StudentResultManagementController extends Controller
{
    public function GetMarks(Request $request){
        $session_id =  $request->session()->get('user');
        $student = Student::where('id',$session_id)->first();
        $active =  Active_student::where('student_id',$session_id)->get();
        $no_sub= $active->where('status','valid')->first()->actclass->sSubject;
        $sub = Subject::where('id',$no_sub[$no_sub->count()-1]->id)->first();
        $result = Studentmark::where('student_id',$session_id)
        ->where('subject_id',$sub->id)->get();;
      
        return view('Frontend.result',compact('student','active','result','sub'));
    }
    public function SubjectMarks(Request $request)
    {
       
       $class = Class_model::where('id',$request->class_id)->first()->sSubject;
      return view('Frontend.partial_subject',compact('class'));
    }

    public function SubjectMarksDistribution(Request $request)
    {
        $session_id =  $request->session()->get('user');
       $sub = Subject::where('id',$request->sub_id)->first();
       $result = Studentmark::where('student_id',$session_id)
       ->where('subject_id',$request->sub_id)->get();
       $mid_total_score = 0;
       $final_total_score = 0;

       for($i = 0; $i<$result->count(); $i++)
       {
       if($result[$i]->smMark->exam == 'mid')
       {
        $mid_total_score = ($mid_total_score + ( ( $result[$i]->score * $result[$i]->smMark->contribution) / $result[$i]->smMark->marks));
       }
       else{
        $final_total_score = ($final_total_score + ( ( $result[$i]->score * $result[$i]->smMark->contribution) / $result[$i]->smMark->marks));
       }

       }
       $mid_grand_total = ($mid_total_score * 50) / 100;
       $final_grand_total = ($final_total_score * 50) / 100;
       $grand_total = $mid_grand_total + $final_grand_total;
       $grade ="";
       if($grand_total>=80)
       {
        $grade = "A+";
       }
       else if($grand_total>=70)
       {
        $grade = "A";
       }
       else if($grand_total>=60)
       {
        $grade = "B+";
       }
       else if($grand_total>=50)
       {
        $grade = "B";
       }
       else if($grand_total>=40)
       {
        $grade = "C";
       }
       else if($grand_total>=33)
       {
        $grade = "D";
       }
       else
       {
        $grade = "F";
       }

       return view('Frontend.all_result',compact('sub','result','mid_total_score','final_total_score','grand_total','grade'));
       
    }
}
