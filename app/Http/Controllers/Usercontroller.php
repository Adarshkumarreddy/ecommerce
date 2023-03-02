<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function dash()
   {
    return view('dash');
   } 
  public function dash2()
  {
    return view('dash2');
  }
}
