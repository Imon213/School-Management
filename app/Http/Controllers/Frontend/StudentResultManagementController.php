<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Mark;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentResultManagementController extends Controller
{
    public function GetMarks(){
        $marks =  Mark::all();
        return view('Frontend.result')->with('marks',$marks);
    }
}
