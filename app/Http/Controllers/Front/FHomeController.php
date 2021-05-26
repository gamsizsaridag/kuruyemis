<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FHomeController extends Controller
{
    function index()
    {
        $products=Product::where('status','1')->where('homeStatus','1')->orderBy('must')->paginate(52);
        return view('front.home',compact('products'));
    }
}
