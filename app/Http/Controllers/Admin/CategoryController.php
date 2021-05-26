<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $categorys=Category::orderBy('created_at','desc')->get();
        return view('yonetim.category.index',compact('categorys'));
    }

    function create(){
        return view('yonetim.category.create');
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

        $url_name='/c/'.$new_text;
        $url=$url_name;
        $sayi=1;
        while(Category::where('url',$url_name)->count()>0)
        {
            $url_name=$url."-".$sayi;
            $sayi++;
        }

        $must = 1;
        if (!empty($request->must))
        {
            $must=$request->must;
        }

        $key = new Category();
        $key->name=$request['name'];
        $key->must=$must;
        $key->meta=$request['name'];
        $key->keyword=$request['name'];
        $key->status=$request['status'];
        $key->url=$url_name;
        $key->save();

        if ($key)
        {
            return redirect()->route('yonetim.category')->with('success','Kategori başarıyla kaydedildi');
        }
        else{
            return back()->with('error','bir hata oluştu');
        }
    }

    function delete($id)
    {
        $key = Category::find($id);
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
        $category = Category::find($id);
        return view('yonetim.category.edit',compact('category'));
    }

    function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|min:2',
        ]);

        $category=Category::find($id);
        $url_name=$category->url;
        if ($category->name != $request->name)
        {

            $kucuk=mb_strtolower($request['name']);
            $text = trim($kucuk);
            $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
            $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-');
            $new_text = str_replace($search,$replace,$text);

            $url_name='/c/'.$new_text;
            $url=$url_name;
            $sayi=1;
            while(Category::where('url',$url_name)->count()>0)
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

        $key = Category::find($id);
        $key->name=$request['name'];
        $key->must=$must;
        $key->meta=$request['name'];
        $key->keyword=$request['name'];
        $key->status=$request['status'];
        $key->url=$url_name;
        $key->save();

        if ($key)
        {
            return redirect()->route('yonetim.category')->with('success','Kategori başarıyla güncellendi');
        }
        else{
            return back()->with('error','bir hata oluştu');
        }


    }
}
