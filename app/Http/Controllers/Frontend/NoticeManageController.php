<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Auth\CrudEvents;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
class NoticeManageController extends Controller
{
    public function ViewNotice(Request $request){
       // $story = Story::all();
        $notice = CrudEvents::paginate(5);
        $session_id =  $request->session()->get('user');
        $student = Student::where('id',$session_id)->first();
        return view('Frontend.noticeView')->with('notice',$notice)->with('student',$student);
     }

     public function NoticeDetails(Request $request){
      $notice = CrudEvents::find($request->id);
      return response()->json($notice);
     }
}
