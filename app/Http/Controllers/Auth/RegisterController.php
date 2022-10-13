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
        return view('Backend.all_users');
    }
    public function GetRegisteredUser(Request $request)
    {
        if($request->ajax()){
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                $user = Registration::where('bcn','like', '%'.$query.'%')
                ->orWhere('type','like', '%'.$query.'%')
                ->orWhere('status','like', '%'.$query.'%')
                ->orWhere('email','like', '%'.$query.'%')
                ->get();
            }
            else
            {
             $user = Registration::get();
            }
            $total_row = $user->count();
      if($total_row > 0)
      {
        $count =0;
       foreach($user as $row)
       {
        $count ++;
       if($row->status ==='incomplete')
       {
        $output .= '
        <tr>
        <td>'.$count.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->bcn.'</td>
         <td>'.$row->type.'</td>
         <td><a href="#">Update Info</a></td>
        </tr>
        ';
       }
       }
      }
      $data = array(
        'table_data'  => $output,
        'total_data'  => $total_row
       );
       return $data;

    }
      
        
 }

    // public function registration()
    // {
    //     return view('Backend.all_users');
    // }

    public function register(Request $request)
    { {
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
                // $admin->save();
                // $code = rand(1000, 9000);
                // $details = [
                //     'title' => 'Registration Confirmation',
                //     'code' => $code
                // ];
                // $admin->otp = $code;

                $admin->save();
                // return redirect()->route('login');
                 return redirect('user');
            }
        }
    }
}