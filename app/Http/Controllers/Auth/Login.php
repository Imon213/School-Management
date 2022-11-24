<?php

namespace App\Http\Controllers\Auth;

use App\Models\Auth\Registration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function Login()
    {
        return view('Auth.login');
    }

    public function loginSubmitted(Request $request)
    {
        $validate = $request->validate([
            'email' => 'email',
            'password' => 'required'
        ]);
        $stu = Registration::where('email', $request->email)
            ->where('password', $request->password)
            ->first();
        if ($stu) {
            
            if($stu->type=="admin" && $stu->status=="active")
            {
               $request->session()->put('user', $stu->id);
            // return redirect()->route('vendorDashboard');
            $request->session()->put('email', $stu->email);
            //$request->session()->put('name', $stu->name);
                return redirect()->route('admin');
            }

            elseif($stu->type=="teacher" && $stu->status=="active"){
           $request->session()->put('name', $stu->teacher->name);
           $request->session()->put('email', $stu->email);
           $request->session()->put('gender', $stu->teacher->gender);
           $request->session()->put('phone', $stu->teacher->phone);
           $request->session()->put('picture', $stu->teacher->picture);
           $request->session()->put('registration_id', $stu->teacher->registration_id);
                return redirect()->route('teacher');
            }
           elseif($stu->type=="student" && $stu->status == 'active')
           {
            $request->session()->put('user', $stu->student->id);
            return redirect()->route('dashboard');
           }
           
          
        } 
        else {
            return redirect()->route('login');
        }
    }
    public function logout()
    {
        session()->flush();
         return redirect()->route('login');
    }
}
//ok