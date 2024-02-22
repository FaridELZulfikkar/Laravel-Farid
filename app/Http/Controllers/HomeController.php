<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
 {
 $data = array('8tle' => 'Home Page');
 return view ('home',$data);
 }
}
