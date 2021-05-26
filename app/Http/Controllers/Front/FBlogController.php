<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class FBlogController extends Controller
{
    function index()
    {
        $son=Blog::where('status','1')->orderBy('created_at','desc')->limit(5)->get();
        $blogs=Blog::where('status','1')->orderBy('must')->paginate(10);
        return view('front.blog',compact('blogs','son'));
    }

    function blogDetail($url)
    {
        $son=Blog::where('status','1')->orderBy('created_at','desc')->limit(5)->get();
        $blog=Blog::where('url','/blog/'.$url)->where('status','1')->first();
        if ($blog)
        {
            return view('front.blogDetail',compact('blog','son'));
        }
        else{
            return redirect()->route('front.blog');
        }

    }
}
