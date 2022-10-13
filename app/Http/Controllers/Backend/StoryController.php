<?php

namespace App\Http\Controllers\Backend;
use App\Models\Auth\Story;
use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class StoryController extends Controller
{
    public function Story(){
        return view('Backend.story_upload');
    }
    public function UploadStory(Request $request){
        {
         $validate = $request->validate([
             "title"=>"required",
             'category'=>'required',
             'story'=>'required',
             'image'=>'required',
         ]);
         $request->file('image');
        $fileName="";
        if ( $request->has('image')){
            $image = $request->file('image');
           
            $fileName = $image->getClientOriginalName() . time() . "." . $image->getClientOriginalExtension();
            $image->move('./Story/', $fileName);    
        }

                     $admin = new  Story();
                     $admin->title = $request->title;
                     $admin->category = $request->category;
                     $admin->image = $fileName;
                     $admin->story = $request->story;
                     $admin->save();
                         
             }
     }

     public function Story_Crud(){
        $story = Story::paginate(10);
        return view('Backend.Story_Crud')->with('story',$story);
     }
     public function DeleteStory(Request $request){
        $story = Story::where('id',$request->id)->first();
        $story->delete();
        return redirect()->back()->with('msg', 'Story Deleted Sucessfuly');
     }

     public function EditStory(Request $request){
        $story = Story::where('id',$request->id)->first();
        return view('Backend.Story_Update')->with('story',$story);
     }

     public function EditStorySubmitted(Request $request){
        {
         $validate = $request->validate([
             "title"=>"required",
             'category'=>'required',
             'story'=>'required',
             
         ]);
         
         $admin = Story::where('id',$request->id)->first();

                     $admin->title = $request->title;
                     $admin->category = $request->category;
                     $admin->story = $request->story;
                    if($admin)
                    {
                        $admin->save();
                        return redirect()->back()->with("msg","Successfuly Story Updated");
                    }
                         
             }
     }

     public function Upload_Pdf()
     {
        return view('Backend.upload_pdf');
     }
     public function Submit_PDF(Request $request)
     {
        $validate = $request->validate([
            "title"=>"required",
            'category'=>'required',
            'desc'=>'required',
            'pdf'=>'required|mimes:pdf',
        ]);
        $request->file('pdf');
       $fileName="";
       if ( $request->has('pdf')){
           $pdf = $request->file('pdf');
          
           $fileName =  time() . "." . $pdf->getClientOriginalExtension();
           $pdf->move('Books', $fileName);    
       }

                    $admin = new  Book();
                    $admin->title = $request->title;
                    $admin->category = $request->category;
                    $admin->pdf = $fileName;
                    $admin->desc = $request->desc;
                    $admin->save();
                    return redirect()->route('viewpdf')->with("msg","Successfuly Books Uploaded");
                        
            }

            public function ViewPDF(){
                $pdf = Book::paginate(10);
                return view('Backend.viewpdf')->with('pdf',$pdf);
             }
             public function DownloadBook(Request $request, $file){
                
               
                $filepath = public_path('Books/'.$file);
                return Response()->download($filepath);
             }
    
 }