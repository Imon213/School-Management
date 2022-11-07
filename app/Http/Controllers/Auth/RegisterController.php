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
use App\Models\session;
 use App\Models\Class_model;
 use App\Models\Active_student;


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

        
            $admin = registration::where('email', $request->email)


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
        $session = Session::get();
        $class = Class_model::get();
        if($user->type=='student'){
        return view('Backend.student')
                                 ->with('session',$session)
                                 ->with('student', $user)
                                 ->with('class',$class);
    }
    elseif($user->type=='teacher'){
        return view('Backend.teacher')->with('teacher', $user);
    }
    else{
        return view('Backend.adminreg')->with('admin', $user);
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
                $user->session_id=$request->session;
                $user->class_model_id = $request->class;
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

    public function edituser(Request $request){

        $student = Registration::where('id', $request->id)->first();
        $class = Class_model::all();
        $session = session::all();
        if($student->type=='student'){
       return view('Backend.editStudent')->with('student',$student)
                                          ->with('session',$session)
                                          ->with('class', $class);
                                      }

          elseif($student->type=='teacher'){
        return view('Backend.editTeacher')->with('teacher', $student);
    }
    elseif($student->type=='admin'){
            // return $student->admin;
        return view('Backend.editAdmin')->with('admin', $student);
    }

        }
    
      
    

    public function editStudentSubmit(Request $request){

        $user = Student::where('id', $request->id)->first();
        $class = Class_model::all();
        $session = session::all();
                $user->name = $request->name;
                $user->fname = $request->fname;
                $user->mname = $request->mname;
                $user->phone = $request->phone;
                $user->dob = $request->dob;
                $user->gender = $request->gender;
                $user->address = $request->address;
                $user->roll = $request->roll;
                $user->registration_id = $request->registration_id;
                $user->session_id=$request->session;
                $user->class_model_id = $request->class;
                $user->save();
                return back();
      
    }

    public function editTeacherSubmit(Request $request){

        $user = Teacher::where('id', $request->id)->first();
        $class = Class_model::all();
        $session = session::all();
               $user->name = $request->name;
                $user->dob = $request->dob;
                $user->gender = $request->gender;
                $user->qualificattion = $request->qualification;
                $user->phone = $request->phone;
                $user->teach_id = $request->teach_id;
                $user->registration_id = $request->registration_id;
                $user->save();
                return back();
      
    }
        public function editAdminSubmit(Request $request){

        $user = Admin::where('id', $request->id)->first();
        $class = Class_model::all();
        $session = session::all();
                $user->name = $request->name;
                $user->dob = $request->dob;
                $user->gender = $request->gender;
                $user->phone = $request->phone;
                $user->registration_id = $request->registration_id;
                $user->save();
                return back();
      
    }
    public function ActiveStudent(){
       
        $student = Registration::where('type','student')->where('status','active')->get();
        $session = session::all();
        $class = Class_model::all();
        return view('Backend.active_student')
                                ->with('session',$session)
                                ->with('class',$class)
                                 ->with('student',$student);
    }
    public function SearchActiveStudent(Request $request){
       
      
      
        $user = Student::where('class_model_id',$request->c_id)
                        ->orwhere('session_id',$request->s_id)
                        ->get();
        if($user->count() > 0)
        {
          return view('Backend.active_student_pagination',compact('user'));
        }  
        else{
            return'
            <div class="text-center" style="height:200px; display:grid; place-items:center;">
            <i class="fa-thin fa-face-monocle"></i>
            <h3 style="font-size:30px; color:#183153;font-weight:500;" > Wrong Information Found. Try To Filter Again..........<i class="fa-solid fa-feather"></i></h3>
            </div>
            ';
        }                      
      
       
        
    }
    public function AddActiveStudent(Request $request)
    {
        $exist = Active_student::where('student_id',$request->st_id)
                                   ->where('session_id',$request->s_id)
                                   ->where('class_id',$request->c_id)
                                   ->first();
        if($exist->count()>0)
        {
           $exist->session_id=$request->s_id;
           $exist->class_id=$request->c_id;
           if($exist)
           {
            $exist->save();
            return "updated";
           }
        }
        else
        {
            $user = new Active_student();
        $user->student_id=$request->s_id;
        $user->class_model_id=$request->c_id;
        $user->session_id=$request->s_id;
        if($user)
        {
            $user->save();
            return "success";
        }
        }
    }

}