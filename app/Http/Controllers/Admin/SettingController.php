<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    function edit()
    {
        $setting = Setting::find(1);
        return view('yonetim.setting.edit',compact('setting'));
    }

    function update(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:50',
            'title' => 'required|min:2|max:50',
            'siteUrl' => 'required|min:2|max:250',
        ]);

        $key =Setting::find(1);
        $key->name=$request['name'];
        $key->title=$request['title'];
        $key->gsm=$request['gsm'];
        $key->email=$request['email'];
        $key->address=$request['address'];
        $key->map=$request['map'];

        $key->siteUrl=$request['siteUrl'];
        $key->whatsapp=$request['whatsapp'];
        $key->instagram=$request['instagram'];
        $key->facebook=$request['facebook'];
        $key->twitter=$request['twitter'];
        $key->youtube=$request['youtube'];

        $key->about_name=$request['about_name'];
        $key->about_description=$request['about_description'];
        $key->about_status=$request['about_status'];

        $key->meta=$request['name'];
        $key->keyword=$request['name'];
        $key->save();

        if ($key)
        {
            return back()->with('success','Ayarlar başarıyla güncellendi');
        }
        else{
            return back()->with('error','bir hata oluştu');
        }
    }
}
