<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){

        $products=Product::with("brand")->with("category")->orderBy('created_at','desc')->get();;
        return view('yonetim.product.index',compact('products'));

    }

    function create(){
        $category = Category::where('status','1')->get();
        $brand=Brand::where('status','1')->get();
        return view('yonetim.product.create',compact('category','brand'));
    }

    function insert(Request $request){

        $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg|max:10000',
            'name' => 'required|min:2'
        ]);


        $kucuk=mb_strtolower($request['name']);
        $text = trim($kucuk);
        $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
        $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-');
        $new_text = str_replace($search,$replace,$text);

        $url_name='/p/'.$new_text;
        $url=$url_name;
        $sayi=1;
        while(Product::where('url',$url_name)->count()>0)
        {
            $url_name=$url."-".$sayi;
            $sayi++;
        }

        $image_name="/images/urun/default.jpg";
        if ($request->hasFile('image'))
        {
            $image_name=$new_text."-".uniqid().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/urun'),$image_name);
            $image_name="/images/urun/".$image_name;
        }

        $must = 1;
        if (!empty($request->must))
        {
            $must=$request->must;
        }

        $key = new Product;
        $key->image=$image_name;
        $key->name=$request['name'];
        $key->description=$request['description'];
        $key->price=$request['price'];
        $key->discountedPrice=$request['discountedPrice'];
        $key->categoryId=$request['categoryId'];
        $key->brandId=$request['brandId'];
        $key->unit_id=$request['unit_id'];
        $key->must=$must;
        $key->homeStatus=$request['homeStatus'];
        $key->status=$request['status'];
        $key->meta=$request['name'];
        $key->keyword=$request['name'];
        $key->url=$url_name;
        $key->save();

        if ($key)
        {
            return redirect()->route('yonetim.product')->with('success','ürün başarıyla kaydedildi');
        }
        else{
            return back()->with('error','bir hata oluştu');
        }

    }

    function delete($id)
    {
        $key = Product::find($id);
        $key->delete();
        if($key)
        {
            return redirect()->back()->with('success','Silme işlemi başarılı bir şekilde yapıldı.');
        }

        else
        {
            return redirect()->back()->with('error','Silme işlemi yapılırken bir hata oldu.');
        }
    }

    function edit($id)
    {
        $product= Product::find($id);
        $category = Category::where('status','1')->get();
        $brand=Brand::where('status','1')->get();
        return view('yonetim.product.edit',compact('product','category','brand'));

    }

    function update(Request $request, $id)
    {
        $product= Product::find($id);

        $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg|max:10000',
            'name' => 'required|min:2'
        ]);

        $url_name=$product->url;
        if($product->name != $request->name)
        {
            $kucuk=mb_strtolower($request['name']);
            $text = trim($kucuk);
            $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
            $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-');
            $new_text = str_replace($search,$replace,$text);

            $url_name='/p/'.$new_text;
            $url=$url_name;
            $sayi=1;
            while(Product::where('url',$url_name)->count()>0)
            {
                $url_name=$url."-".$sayi;
                $sayi++;
            }
        }

        $image_name=$request->old_image;
        if ($request->hasFile('image'))
        {
            $kucuk=mb_strtolower($request['name']);
            $text = trim($kucuk);
            $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
            $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-');
            $new_text = str_replace($search,$replace,$text);

            $image_name=$new_text."-".uniqid().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/urun'),$image_name);
            $image_name="/images/urun/".$image_name;
        }


        $must = 1;
        if (!empty($request->must))
        {
            $must=$request->must;
        }

        $key =Product::find($id);
        $key->image=$image_name;
        $key->name=$request['name'];
        $key->description=$request['description'];
        $key->price=$request['price'];
        $key->discountedPrice=$request['discountedPrice'];
        $key->categoryId=$request['categoryId'];
        $key->brandId=$request['brandId'];
        $key->unit_id=$request['unit_id'];
        $key->must=$must;
        $key->homeStatus=$request['homeStatus'];
        $key->status=$request['status'];
        $key->meta=$request['name'];
        $key->keyword=$request['name'];
        $key->url=$url_name;
        $key->save();

        if ($key)
        {
            return back()->with('success','ürün başarıyla güncellendi');
        }
        else{
            return back()->with('error','bir hata oluştu');
        }

    }
}
