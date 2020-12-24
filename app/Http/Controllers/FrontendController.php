<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
 function about(){
    return view('about');
    }
 function hello(){
    return view('hello');
    }
 function contact(){
    return view('contact');
    }
}
