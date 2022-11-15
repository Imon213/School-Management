<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\studentmsg1;
use App\Models\Studentmsg;
use App\Models\Student;

class studentmsgController extends Controller
{
    public function message(Request $request){
        $value = $request->session()->get('user');
        $student = Student::where('id',$value)->first()->reg;
        return response()->json($student);
        // return view('Email.sendstudentmsg')->with('student',$student);
    }
    public function studentmsg(Request $request){

                    // return $request;
                    $details = [
                        'from' => $request->from,
                        'to' => $request->to,
                        'subject' => $request->subject,
                        'text' => $request->text,
                    ];
                   
                    Mail::to($request->to)->send(new studentmsg1($details));
                   
                    // echo "Mail send";
                    
                    $customer = new  Studentmsg();
                    $customer->from = $request->from;
                    $customer->to = $request->to;
                    $customer->subject = $request->subject;
                    $customer->text = $request->text;

                    $customer->save();

                    
                    return redirect()->route('dashboard');
                    
                    // echo "registration successful";
    }
}
