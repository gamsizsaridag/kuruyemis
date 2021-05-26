<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FCategoryController extends Controller
{
    function index($url)
    {
        $category = Category::where('url', '/c/' . $url)->where('status', '1')->first();
        if ($category) {
            $products = Product::where('categoryId', $category->id)->where('status', '1')->with('category');

            if (\request('orderby') == 'artanfiyat') {
                $products->orderBy('price');
            } elseif (\request('orderby') == 'azalanfiyat') {
                $products->orderBy('price', 'desc');
            } elseif (\request('orderby') == 'enyeni') {
                $products->orderBy('created_at', 'desc');
            } elseif (\request('orderby') == 'adanzye') {
                $products->orderBy('name');
            } elseif (\request('orderby') == 'zdenaya') {
                $products->orderBy('name', 'desc');
            } else {
                $products->orderBy('must');
            }

            $products = $products->paginate(24);
            $category = $category->name;
            return view('front.category', compact('products', 'category'));
        } else {
            return redirect()->route('front.home');
        }
    }

    function search()
    {

        if (\request('search') != null) {
            $products = Product::where('status', '1')->where('name', 'like', '%' . \request('search') . '%');
            if ($products) {
                if (\request('orderby') == 'artanfiyat') {
                    $products->orderBy('price');
                } elseif (\request('orderby') == 'azalanfiyat') {
                    $products->orderBy('price', 'desc');
                } elseif (\request('orderby') == 'enyeni') {
                    $products->orderBy('created_at', 'desc');
                } elseif (\request('orderby') == 'adanzye') {
                    $products->orderBy('name');
                } elseif (\request('orderby') == 'zdenaya') {
                    $products->orderBy('name', 'desc');
                } else {
                    $products->orderBy('must');
                }
                $products = $products->paginate(24);
                $category = request('search');
                return view('front.category', compact('products', 'category'));
            } else {
                return redirect()->route('front.home');
            }
        } else {
            return redirect()->route('front.home');
        }

    }

//   function liste(Request $request){
//        $datas=Product::select('name')
//            ->orderBy('name', 'asc')
//            ->where('status','1')
//            ->where('user_name','LIKE','%'.$request->search.'%')
//            ->paginate(3);
//        return response()->json([
//            "response" => "ok",
//            "search" => $datas
//        ], 200);
//
//    }

}
