<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FProductController extends Controller
{
    function index($url)
    {
        $product=Product::where('url','/p/'.$url)->with('category')->where('status','1')->first();
        if ($product)
        {
            return view('front.product',compact('product'));
        }
        else
        {
            return redirect()->route('front.home');
        }

    }
}
