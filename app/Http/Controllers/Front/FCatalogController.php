<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Catalog;
use Illuminate\Http\Request;

class FCatalogController extends Controller
{
   function index()
   {
       $catalogs=Catalog::where('status','1')->orderBy('must')->paginate(5);
       $son=Blog::where('status','1')->orderBy('created_at','desc')->limit(5)->get();
       return view('front.catalog',compact('catalogs','son'));
   }
}
