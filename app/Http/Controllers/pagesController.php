<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    
    function home(){
    return view('pages.home');

   }

   function about(){
    return view("pages.about");
   }
}
