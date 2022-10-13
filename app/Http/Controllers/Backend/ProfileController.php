<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auth\Registration;
use App\Models\image;
use App\Models\session;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{

    public function profile(Request $request)
    {
        // $ss=session('user');
       

        $var = Registration::where('email', session('email'))->first();
        $v = image::where('registration_id', session('user'))->latest()->first();
        return view('Backend/profile')->with('ss', $var)->with('v', $v);
        //  return view('Backend/admin')->with('ss',$var)->with('v',$v);
        //return $var;


    }
    public function imageup(Request $req)
    {
        $f = $req->img;
        $exten = $f->getClientOriginalName();

        $f->storeAs('public/images/', $exten);
        $pro = new image();
        $pro->image = $exten;
        $pro->registration_id = session('user');
        $req->session()->put('img', $exten);
        $pro->save();
        //return view('Backend/profile')->with('pros',$pro);

        return redirect()->route('pro');
    }
    public function profileup(Request $req)
    {
        // $ss=session('user');

        //$id=$req->email;
        $pro = Registration::where('email', session('email'))->first();
        return view('Backend/profileup')->with('pros', $pro);
    }

    public function editdone(Request $req)
    {
        // $f=$req->image;
        // $exten=$f->getClientOriginalName();
        //     //$filename=time().'.'.$exten;
        // $f->storeAs('public/images/',$exten);
        $pros = Registration::where('email', $req->email)->first();

        $pros->name = $req->name;
        $pros->email = $req->email;
        $pros->phone = $req->phone;
        $pros->dob = $req->dob;
        $pros->address = $req->address;

        // //$pros->image=$exten;
        $pros->save();
        return "sub";
    }
    public function change(Request $req)
    {
           


    	 $pros=Registration::where('password',$req->pass)->first();
    	 if($pros)
    	 {
    	 	if($req->npass==$req->cpass)
    	 	{
                  ///$var=new Registration();
                  $pros->password=$req->npass;
                  $pros->save();

                 Alert::success('Password change.','You are welcome.');
                  return redirect()->route("pro");
              }
              else
              {
              	return "not match";
              }
    	 }
    	 
    	 // else{
    	 // 	return "wrong password";
    	 // }
    	
          return view('Backend/changep');
         
        
        
     

        $pros = Registration::where('password', $req->pass)->first();
        if ($pros) {
            if ($req->npass == $req->cpass) {
                ///$var=new Registration();
                $pros->password = $req->npass;
                $pros->save();

                Alert::success('Congrats', 'Youve Successfully update your password');

              //  Alert::success('Congrats', 'You\'ve Successfully update your password');

               Alert::success('Congrats', 'You\'ve Successfully update your password');

                return redirect()->route("pro");
            } else {
                Alert::success('Sorry', 'Error');
            }
        }


        return view('Backend/changep');

    }
    public function admin(Request $req)
    {
        $session=session::all();
        //$var=Registration::all();
        return view('Backend.admin');

        // return $var;

    }
     public function regi(Request $req)
     {
        return view('Frontend.example');
      }
}
