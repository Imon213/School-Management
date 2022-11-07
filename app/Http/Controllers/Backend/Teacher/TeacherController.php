<?php

namespace App\Http\Controllers\Backend\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Auth\Registration;

class teacherController extends Controller
{

    public function teacher(){
        return view('Backend.Teacher.teacherDashboard');
    }
        public function tprofile(){
        return view('Backend.Teacher.profile');
    }

        public function profileUpdate(Request $request){
    $pros = Registration::where('email', session('email'))->first();;

        return view('Backend.Teacher.profileUpdate')->with('pros', $pros);;
    }

    public function profileUpdateSubmitted(Request $request){
        $teacher = Teacher::where('registration_id', $request->registration_id)->first(); 
        $teacher->name = $request->name;
        $teacher->phone = $request->phone;
        $teacher->save();
        $request->session()->put('name',$teacher->name);
        $request->session()->put('phone',$teacher->phone);
        return redirect()->route('tprofile');

    }

       public function changePicture(){
        return view('Backend.Teacher.changePicture');
    }
    public function changePictureSubmit(Request $request){
        $file_name = $request->file('picture')->getClientOriginalName();
        //$f_name = $file_name.'.'.$req->file('pro_pic')->getClientOriginalExtension();
        $folder = $request->file('picture')->move(public_path('timage').'/',$file_name);
        
        $value = session()->get('registration_id');
        $admin = Teacher::where('registration_id', $value)
        ->first();
        $admin->picture = $file_name;
        $admin->save();
        $request->session()->put('picture', $file_name);




        //$request->session()->flash('change_picture', 'Profile picture uploaded successfully');

        return redirect()->route('profileUpdate');

    }
}
