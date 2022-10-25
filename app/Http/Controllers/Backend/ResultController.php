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
          'session'=>$request->session,
          'subject'=>$request->subject,
          'class'=>$request->class_name,
          'exam'=>$request->exam,
          'title' => $title[$i],
          'contribution' => $con[$i],
          'marks' => $marks[$i],
        ]);
        
      }
      return redirect()->route('marksdisttibution');
     
    }



}
