<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Auth\CrudEvents;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeManageController extends Controller
{
    public function ViewNotice(){
       // $story = Story::all();
        $notice = CrudEvents::paginate(5);
        return view('Frontend.noticeView')->with('notice',$notice);
     }

     public function NoticeDetails(Request $request){
      $notice = CrudEvents::find($request->id);
      return response()->json($notice);
     }
}
