<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    function index(){
        $brands=Brand::orderBy('created_at','desc')->get();
        return view('yonetim.brand.index',compact('brands'));
    }

    function create(){
        return view('yonetim.brand.create');
    }

    function insert(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
        ]);


        $kucuk=mb_strtolower($request['name']);
        $text = trim($kucuk);
        $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
        $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-');
        $new_text = str_replace($search,$replace,$text);

        $url_name='/b/'.$new_text;
        $url=$url_name;
        $sayi=1;
        while(Brand::where('url',$url_name)->count()>0)
        {
            $url_name=$url."-".$sayi;
            $sayi++;
        }

        $must = 1;
        if (!empty($request->must))
        {
            $must=$request->must;
        }

        $key = new Brand();
        $key->name=$request['name'];
        $key->must=$must;
        $key->meta=$request['name'];
        $key->keyword=$request['name'];
        $key->status=$request['status'];
        $key->url=$url_name;
        $key->save();

        if ($key)
        {
            return redirect()->route('yonetim.brand')->with('success','Kategori başarıyla kaydedildi');
        }
        else{
            return back()->with('error','bir hata oluştu');
        }
    }

    function delete($id)
    {
        $key = Brand::find($id);
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

    function edit($id){
        $brand = Brand::find($id);
        return view('yonetim.brand.edit',compact('brand'));
    }

    function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|min:2',
        ]);

        $brand=Brand::find($id);
        $url_name=$brand->url;
        if ($brand->name != $request->name)
        {
            $kucuk=mb_strtolower($request['name']);
            $text = trim($kucuk);
            $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
            $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-');
            $new_text = str_replace($search,$replace,$text);

            $url_name='/b/'.$new_text;
            $url=$url_name;
            $sayi=1;
            while(Brand::where('url',$url_name)->count()>0)
            {
                $url_name=$url."-".$sayi;
                $sayi++;
            }
        }

        $must = 1;
        if (!empty($request->must))
        {
            $must=$request->must;
        }

        $key = Brand::find($id);
        $key->name=$request['name'];
        $key->must=$must;
        $key->meta=$request['name'];
        $key->keyword=$request['name'];
        $key->status=$request['status'];
        $key->url=$url_name;
        $key->save();

        if ($key)
        {
            return redirect()->route('yonetim.brand')->with('success','Kategori başarıyla güncellendi');
        }
        else{
            return back()->with('error','bir hata oluştu');
        }


    }
}
