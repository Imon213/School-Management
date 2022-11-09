<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Mark;
use App\Models\Session;
use App\Models\Class_model;
use App\Models\Section;
use App\Models\Student;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function Attendance(Request $request){
        $var = Session::all();
       $v = Subject::all();
       $f=Class_model::all();
       $r=Subject::all();
     
    
         return view('Backend.Teacher.attendance')->with('ss', $var)->with('v', $v)->with('d',$f)->with('r',$r)->with('data','empty');
     
    }

      public function filter(Request $request){
         $admins = Attendance::where('date',$request->date)->
        where('class_model_id',$request->class)->where('subject_id',$request->subject)->get();
        if($admins->count()>0)
        {
            return view('Backend.Teacher.atten_table')->with('atten',$admins);
        }
        else
        {
           return'<h3 class="text-center">Wrong Information Found...</h3>';
        }
      
       
  }  

  public function takeatten(Request $request)
    { 
            $takeatten = Subject::where('class_model_id',$request->class)->where('id',$request->subject)->get();
           
  
            return view('Backend.Teacher.take_attendance',compact('takeatten'));
                
        
    }
    public function AttenSubmit(Request $request)
    { 
      $exist = Attendance::where('date',$request->date)
      ->where('student_id',$request->stu_id)->first();
      if($exist)
      {
        $exist->attendance = $request->atten;
        $exist->save();
        return 'success';
      }
      else
      {
        $atten = new Attendance();
      $stu = Student::where('id',$request->stu_id)->first();
      $atten->student_id = $stu->id;
      $atten->class_model_id = $stu->class_model_id;
      $atten->session_id = $stu->session_id;
      $atten->subject_id = $request->sub_id;
      $atten->date = $request->date;
      $atten->attendance = $request->atten;
      if($atten)
      {
        $atten->save();
        return 'success';
      }
      return 'failed';
      }

    }
    public function AttenRecord(Request $request)
    {
      $record = Attendance::where('student_id',$request->stu_id)->where('subject_id',$request->sub_id)->get();
      if($record)
      {
        return view('Backend.Teacher.atten_record',compact('record'));
      }
      else
      {
        return 'failed';
      }
    }

        
    
    
}
