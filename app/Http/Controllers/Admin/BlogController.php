<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index()
    {
        $blogs = Blog::orderBy('created_at','desc')->get();
        return view('yonetim.blog.index', compact('blogs'));
    }

    function create()
    {
        return view('yonetim.blog.create');
    }

    function insert(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg|max:10000',
            'name' => 'required|min:2'
        ]);



        $kucuk=mb_strtolower($request['name']);
        $text = trim($kucuk);
        $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
        $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-');
        $new_text = str_replace($search,$replace,$text);

        $url_name='/blog/'.$new_text;
        $url=$url_name;
        $sayi=1;
        while(Blog::where('url',$url_name)->count()>0)
        {
            $url_name=$url."-".$sayi;
            $sayi++;
        }

        $image_name="/images/blog/default.jpg";
        if ($request->hasFile('image'))
        {
            $image_name=$url."-".uniqid().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images/blog'),$image_name);
            $image_name="/images/blog/".$image_name;
        }

        $must = 1;
        if (!empty($request->must))
        {
            $must=$request->must;
        }

        $key = new Blog;
        $key->image=$image_name;
        $key->name=$request['name'];
        $key->description=$request['description'];
        $key->must=$must;
        $key->status=$request['status'];
        $key->meta=$request['name'];
        $key->keyword=$request['name'];
        $key->url=$url_name;
        $key->save();

        if ($key)
        {
            return redirect()->route('yonetim.blog')->with('success','ürün başarıyla kaydedildi');
        }
        else{
            return back()->with('error','bir hata oluştu');
        }
    }

    function delete($id)
    {
        $key = Blog::find($id);
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
        $blog= Blog::find($id);
        return view('yonetim.blog.edit',compact('blog'));

    }

    function update(Request $request, $id)
    {
        $blog= Blog::find($id);

        $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg|max:10000',
            'name' => 'required|min:2'
        ]);

        $url_name=$blog->url;
        if($blog->name != $request->name)
        {
            $kucuk=mb_strtolower($request['name']);
            $text = trim($kucuk);
            $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
            $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-');
            $new_text = str_replace($search,$replace,$text);

            $url_name='/blog/'.$new_text;
            $url=$url_name;
            $sayi=1;
            while(Blog::where('url',$url_name)->count()>0)
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
            $request->file('image')->move(public_path('images/blog'),$image_name);
            $image_name="/images/blog/".$image_name;
        }


        $must = 1;
        if (!empty($request->must))
        {
            $must=$request->must;
        }

        $key =Blog::find($id);
        $key->image=$image_name;
        $key->name=$request['name'];
        $key->description=$request['description'];
        $key->must=$must;
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
