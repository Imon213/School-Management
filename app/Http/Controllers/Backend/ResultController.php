<?php

namespace App\Http\Controllers\Backend;
use App\Models\result;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subject;
use App\Models\Mark;
use App\Models\Session;
use App\Models\Class_model;
use App\Models\Section;
use App\Models\Attendance;
class ResultController extends Controller
{
    public function GetResult(){
      $result = result::all();
     
      return view('Backend.uploadresult')->with('result',$result);
    }

    public function MarksDistribution(){
       $var = Session::all();
       $v = Subject::all();
       $f=Class_model::all();
      return view('Backend.marksdistribution')->with('ss', $var)->with('v', $v)->with('d',$f);
    }
    public function MarksDistributionSubmitted(Request $request){
      $title = $request->title;
      $con = $request->con;
      $marks = $request->marks;


      for($i=0;$i<count($title);$i++)
      {
        Mark::create([
          'session_id'=>$request->session,
          'subject_id'=>$request->subject,
          'class_model_id'=>$request->class_name,
          'exam'=>$request->exam,
          'title' => $title[$i],
          'contribution' => $con[$i],
          'marks' => $marks[$i],
        ]);
        
      }
      return redirect()->route('marksdisttibution');
     
    }


     
    public function marks()
    {
       $var = Session::all();
       $v = Subject::all();
       $f=Class_model::all();
      return view('Backend.marks')->with('ss', $var)->with('v', $v)->with('d',$f);
      
    }
    public function marksSubmitted(Request $req)
    {
       
         $v=Mark::where('session',$req->s)->where('class',$req->q)->where('subject',$req->r)->get();
      
         
     return view('Backend.marktable',compact('v'));
      
        
    }


}
