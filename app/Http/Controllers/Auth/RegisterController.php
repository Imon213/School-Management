<?php

namespace App\Http\Controllers\Auth;

use App\Models\Auth\Registration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class RegisterController extends Controller
{
    public function Users(){
        $user = registration::paginate(5);
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
                                  ->paginate(5);
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
        $user = registration::paginate(5);
        return view('Backend.pagination',compact('user'))->render();
       }
    }

   
    public function Pagination(Request $request){
        $user = registration::paginate(5);
        return view('Backend.pagination',compact('user'))->render();
    }

    public function register(Request $request)
    { 
             $validate = $request->validate([
                'email' => 'email',
                'type' => 'required',
                'bcn' => 'required',
                'password' => 'required| min:8 | max:12'
            ]);
            $admin = Registration::where('email', $request->email)
                ->first();



            if ($admin) {
                $request->session()->flash('reg', 'This account already exists');
                return redirect()->route('registration');
            } else {
                $admin = new  Registration();
                $admin->email = $request->email;
                $admin->type = $request->type;
                $admin->bcn = $request->bcn;
                $admin->password = $request->password;
                $admin->status = "incomplete";

                $admin->save();
                // return redirect()->route('login');
                 return redirect('user');
            }
        
    }

        public function DeleteUser(Request $request)
    {
        $user = Registration::where('id', $request->id)->first();
        $user->delete();

        return redirect()->back()->with('msg', 'Event Deleted Sucessfuly');
    }
}