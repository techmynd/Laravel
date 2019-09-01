<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function adminHome(){
        // this is home call that is loading home.blade.php view
        return view('admin.index');
    }
    public function dashbioard(){
        return view('admin.dashboard');
    }
}
