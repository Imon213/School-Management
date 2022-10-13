<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Program;
use App\Models\Auth\Registration;
use Illuminate\Support\Facades\Mail;
use App\Mail\programsEmail;
class UploadProgramController extends Controller
{
    public function GetSubject(){
        $subject= Subject::all();
        return view('Backend.upload_program')->with('subject',$subject);
    }
    public function AddProgram(Request $request){
        $validate = $request->validate([
            'program_name'=>'required',
             'class_name'=>'required',
            "subject_id"=>"required",
            'start'=>'required',
        ]);
          $admin = Registration::get();
                     foreach ($admin as $key => $details) {
            Mail::to($details->email)->send(new programsEmail($details));
            echo "success";
                    }
        

                    $admin = new  Program();
                    $admin->program_name = $request->program_name;
                    $admin->class_name = $request->class_name;
                    $admin->subject_id = $request->subject_id;
                    $admin->time = $request->start;

                    $admin->save();


                        
    } 
}
