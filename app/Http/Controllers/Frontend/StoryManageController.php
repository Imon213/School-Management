<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Auth\Story;
use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
class StoryManageController extends Controller
{
    public function ViewStory(){
       // $story = Story::all();
        $story = Story::paginate(4);
       // $book = Book::paginate(5);
        return view('Frontend.ViewStory')
                           ->with('story',$story);
                        //    ->with('book',$book);
     }

     public function Story(Request $request ){
      $story = Story::where('id',$request->id)->first();
      
       return view('Frontend.Story')->with('story',$story);
    }

    public function PDFDownload(Request $request)
    {
      $story = Story::where('id',$request->id)->first();
      $pdf = PDF::loadView('pdf.storyPDF',[
         'story' => $story
     ]);
     return $pdf->stream($story->title.'.pdf');
    }
     
}