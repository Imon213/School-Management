<?php

namespace App\Http\Controllers\Backend;
use App\Models\Subject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Routine;
class ClassRoutineController extends Controller
{
    public function GetSubject(){
        $subject= Subject::all();
        return view('Backend.upload_class_routine')->with('subject',$subject);
    }
    public function AddRoutine(Request $request){
        $validate = $request->validate([
            "subject_id"=>"required",
            'class_name'=>'required',
            'day'=>'required',
            'start'=>'required',
            'end'=>'required',
        ]);
        

                    $admin = new  Routine();
                    $admin->subject_id = $request->subject_id;
                    $admin->class_name = $request->class_name;
                    $admin->day = $request->day;
                    $admin->start = $request->start;
                    $admin->end = $request->end;
                    $admin->save();
                        
    }     
    
}