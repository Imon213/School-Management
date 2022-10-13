<?php

namespace App\Http\Controllers\Backend;
use App\Models\result;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subject;
use App\Models\Mark;

class ResultController extends Controller
{
    public function GetResult(){
      $result = result::all();
     
      return view('Backend.uploadresult')->with('result',$result);
    }

    public function MarksDistribution(){
      return view('Backend.marksdistribution');
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
      
     
    }
}
