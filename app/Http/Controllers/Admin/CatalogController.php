<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    function index(){
        $catalogs=Catalog::orderBy('created_at','desc')->get();
        return view('yonetim.catalog.index',compact('catalogs'));
    }

    function create()
    {
        return view('yonetim.catalog.create');
    }

    function insert(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:10000',
            'name' => 'required|min:2|max:50'
        ]);

        $kucuk=mb_strtolower($request['name']);
        $text = trim($kucuk);
        $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
        $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-');
        $new_text = str_replace($search,$replace,$text);

        $file_name='/catalogs/'.$new_text;
        $file=$file_name;
        $sayi=1;
        while(Catalog::where('file',$file_name)->count()>0)
        {
            $file_name=$file."-".$sayi;
            $sayi++;
        }

        $file_name = $file_name.".pdf";

        if ($request->hasFile('file'))
        {
            $request->file('file')->move(public_path('catalogs'),$file_name);

        }

        $must = 1;
        if (!empty($request->must))
        {
            $must=$request->must;
        }

        $key = new Catalog;
        $key->name=$request['name'];
        $key->description=$request['description'];
        $key->file=$file_name;
        $key->must=$must;
        $key->status=$request['status'];
        $key->save();

        if ($key)
        {
            return redirect()->route('yonetim.catalog')->with('success','ürün başarıyla kaydedildi');
        }
        else{
            return back()->with('error','bir hata oluştu');
        }

    }

    function delete($id)
    {
        $key = Catalog::find($id);
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
        $catalog = Catalog::find($id);
        return view('yonetim.catalog.edit',compact('catalog'));
    }
    function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:2|max:50'
        ]);


        $file_name=Catalog::find($id)->file;
        if ($request->hasFile('file'))
        {
            $request->validate([
                'file' => 'required|mimes:pdf|max:10000',
            ]);

            $kucuk=mb_strtolower($request['name']);
            $text = trim($kucuk);
            $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
            $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-');
            $new_text = str_replace($search,$replace,$text);

            $file_name='/catalogs/'.$new_text;
            $file=$file_name;
            $sayi=1;
            while(Catalog::where('file',$file_name)->count()>0)
            {
                $file_name=$file."-".$sayi;
                $sayi++;
            }

            $file_name =$new_text.".pdf";

            if ($request->hasFile('file'))
            {
                $request->file('file')->move(public_path('catalogs'),$file_name);
            }
        }

        $must = 1;
        if (!empty($request->must))
        {
            $must=$request->must;
        }

        $key = Catalog::find($id);
        $key->name=$request['name'];
        $key->description=$request['description'];
        $key->file=$file_name;
        $key->must=$must;
        $key->status=$request['status'];
        $key->save();

        if ($key)
        {
            return redirect()->route('yonetim.catalog')->with('success','ürün başarıyla güncellendi');
        }
        else{
            return back()->with('error','bir hata oluştu');
        }



    }
}
