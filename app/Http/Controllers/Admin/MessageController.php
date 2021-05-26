<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    function index()
    {
        $messages = Message::orderBy('created_at','desc')->get();
        return view('yonetim.message.index', compact('messages'));
    }

    function create()
    {
        return view('yonetim.message.create');
    }

    function insert(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email|min:10',
            'gsm' => 'required'
        ]);

        $key = new Message;
        $key->name = $request['name'];
        $key->email = $request['email'];
        $key->gsm = $request['gsm'];
        $key->message = $request['message'];
        $key->status = $request['status'];
        $key->save();

        if ($key)
        {
            return redirect()->route('yonetim.message')->with('success','mesaj başarıyla kaydedildi');
        }
        else{
            return back()->with('error','bir hata oluştu');
        }
    }

    function delete($id)
    {
        $key = Message::find($id);
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
        $key=Message::find($id);
        $key->status='0';
        $key->save();
        $message=Message::find($id);
        return view('yonetim.message.edit',compact('message'));
    }

    function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email|min:10',
            'gsm' => 'required'
        ]);

        $key = Message::find($id);
        $key->name = $request['name'];
        $key->email = $request['email'];
        $key->gsm = $request['gsm'];
        $key->message = $request['message'];
        $key->status = $request['status'];
        $key->save();

        if ($key)
        {
            return redirect()->route('yonetim.message')->with('success','mesaj başarıyla güncellendi');
        }
        else{
            return back()->with('error','bir hata oluştu');
        }
    }
}
