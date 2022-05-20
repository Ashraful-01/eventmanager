<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
       return view('frontend.index');
    }

    public function cateringservice(){
        return view('frontend.cateringservice');
     }

     public function decoration(){
      return view('frontend.decoration');
   }

   public function photography(){
      return view('frontend.photography');
   }

    
}
