<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    function landing()
    {
        return view("frontend.landing");
    }
}
