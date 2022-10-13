<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Auth\Video;

class videoController extends Controller
{
     public function getVideoUploadForm()
    {
        return view('Backend.video_upload');
    }
     public function UploadVideo(Request $request){
        {
            $validate = $request->validate([
                "title"=>"required",
                'category'=>'required',
                'video'=>'required',
                'reference'=>'required',
            ]);
            $request->file('video');
           $fileName="";
           if ( $request->has('video')){
               $image = $request->file('video');
              
               $fileName = $image->getClientOriginalName() . time() . "." . $image->getClientOriginalExtension();
               $image->move('./Video/', $fileName);    
           }
   
                        $admin = new  Video();
                        $admin->title = $request->title;
                        $admin->category = $request->category;
                        $admin->video = $fileName;
                        $admin->reference = $request->reference;
                        $admin->save();
             }
     }

      public function Video_Crud(){
        $video = Video::paginate(10);
        return view('Backend.Video_Crud')->with('video',$video);
     }
      public function DeleteVideo(Request $request){
        $video = Video::where('id',$request->id)->first();
        $video->delete();
        return redirect()->back()->with('msg', 'Story Deleted Sucessfuly');
     }

}
