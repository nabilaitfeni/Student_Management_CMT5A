<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    function index(){
      $username="Mr.Korim";
      return view('cmt')->with('username',$username);
    }
}
