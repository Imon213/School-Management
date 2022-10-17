<?php

namespace App\Http\Controllers\Auth;

use App\Models\Auth\Registration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Admin;


class RegisterController extends Controller
{
    public function Users(){
        $user = registration::paginate(10);
        return view('Backend.all_users',compact('user'));
    }
    public function GetRegisteredUser(Request $request)
    {
        $query = $request->get('query');
       if($query != '')
       {
        $user = registration::where('bcn','like', '%'.$query.'%')
                                  ->orWhere('email','like', '%'.$query.'%')
                                  ->orWhere('type','like', '%'.$query.'%')
                                  ->orWhere('status','like', '%'.$query.'%')
                                  ->paginate(10);
        if($user->count() > 0)
        {
            return view('Backend.pagination',compact('user'))->render();
        }
        else
        {
            return "<h3>No Data Found</h3>";
        }
       }
       else
       {
        $user = registration::paginate(10);
        return view('Backend.pagination',compact('user'))->render();
       }
    }

   
    public function Pagination(Request $request){
        $user = registration::paginate(10);
        return view('Backend.pagination',compact('user'))->render();
    }

    public function register(Request $request)
    { 
            //  $validate = $request->validate([
            //     'email' => 'email',
            //     'type' => 'required',
            //     'bcn' => 'required',
            //     'password' => 'required| min:8 | max:12'
            // ]);
            $admin = Registration::where('email', $request->email)
                ->first();



            if ($admin) {
               return "User already exist";
            } else {
                $admin = new  Registration();
                $admin->email = $request->email;
                $admin->type = $request->type;
                $admin->bcn = $request->bcn;
                $admin->password = $request->password;
                $admin->status = "incomplete";
                $admin->save();
                
                 return 'success';
            }
        
    }

        public function DeleteUser(Request $request)
    {
        $user = Registration::where('id', $request->id)->first();
        $user->delete();

        return redirect()->back()->with('msg', 'Event Deleted Sucessfuly');
    }
    public function DeleteReg(Request $request){
        return registration::where('id',$request->id)->first();

    }

    public function user(Request $request){
        $user = Registration::where('id',$request->id)->first();
        if($user->type=='student'){
        return view('Backend.student')->with('student', $request->id);
    }
    elseif($user->type=='teacher'){
        return view('Backend.teacher')->with('teacher', $request->id);
    }
    else{
        return view('Backend.adminreg')->with('admin', $request->id);
    }
    }
    public function userinfo(Request $request){
            $reg = Registration::where('id',$request->id)->first();
        
               if($reg->type=='student' ){
                $reg->status ="active";
                $reg->save();
                $user = new  Student(); 
                $user->name = $request->name;
                $user->fname = $request->fname;
                $user->mname = $request->mname;
                $user->phone = $request->phone;
                $user->dob = $request->dob;
                $user->gender = $request->gender;
                $user->address = $request->address;
                $user->roll = $request->roll;
                $user->registration_id = $reg->id;
                $user->save();
                return redirect()->route('user');
            }
                elseif($reg->type=='teacher'){
                $reg->status ="active";
                $reg->save();
                $user = new  Teacher();
                $user->name = $request->name;
                $user->dob = $request->dob;
                $user->gender = $request->gender;
                $user->qualificattion = $request->qualification;
                $user->phone = $request->phone;
                $user->teach_id = $request->teach_id;
                $user->registration_id = $reg->id;
                $user->save();
                return redirect()->route('user');
                }
                else{
                $reg->status ="active";
                $reg->save();
                $user = new  Admin();
                $user->name = $request->name;
                $user->dob = $request->dob;
                $user->gender = $request->gender;
               
                $user->phone = $request->phone;
               
                $user->registration_id = $reg->id;
                $user->save();
                return redirect()->route('user');
                }

        
    }
}