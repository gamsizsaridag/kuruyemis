<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Setting;
use Illuminate\Http\Request;

class FAboutController extends Controller
{
   function index()
   {
       $about=Setting::where('id','1')->where('about_status','1')->first();
       $son=Blog::where('status','1')->orderBy('created_at','desc')->limit(5)->get();
       if ($about)
       {
           return view('front.about',compact('about','son'));
       }
       else
       {
           return redirect()->route('front.home');
       }
   }
}
