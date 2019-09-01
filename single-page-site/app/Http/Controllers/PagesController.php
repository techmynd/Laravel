<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function home(){
        // this is home call that is loading home.blade.php view
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}
