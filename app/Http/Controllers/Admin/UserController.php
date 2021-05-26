<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function index(){
        $users = User::orderBy('created_at','desc')->get();
        return view('yonetim.user.index',compact('users'));
    }

    function create(){
        return view('yonetim.user.create');
    }


    function insert(Request $request){

        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|unique:users,email|max:255',
            'password' =>'required|min:5|max:255|same:password2',
        ]);

        $key = new User;
        $key->name=$request['name'];
        $key->email=$request['email'];
        $key->password=Hash::make($request['password']);
        $key->status=$request['status'];
        $key->save();

        if ($key)
        {
            return redirect()->route('yonetim.user')->with('success','Kullanıcı başarıyla kaydedildi');
        }
        else{
            return back()->with('error','bir hata oluştu');
        }
    }

    function delete($id)
    {
        $key=User::find($id);
        if (Auth::user()->id != $key->id)
        {
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
        else
        {
            return redirect()->back()->with('error','Kendinizi silemezsiniz');
        }


    }

    function edit($id)
    {
        $user= User::find($id);
        return view('yonetim.user.edit',compact('user'));
    }

    function update(Request $request,$id)
    {
        $user= User::find($id);
        $request->validate([
            'name' => 'required|min:2',
        ]);

        $email=$user->email;
        if ($email != $request->email)
        {
            $request->validate([
                'email' => 'required|unique:users,email|max:255',
            ]);
            $email=$request->email;
        }

        $password = $user->password;
        if (!empty($request->password))
        {
            $request->validate([
                'password' =>'required|min:5|max:255|same:password2',
            ]);
            $password = Hash::make($request['password']);
        }


        $key = User::find($id);
        $key->name=$request['name'];
        $key->email=$email;
        $key->password=$password;
        if (Auth::user()->id != $user->id)
        {
            $key->status=$request['status'];
        }
        $key->save();

        if ($key)
        {
            return redirect()->route('yonetim.user')->with('success','Kullanıcı başarıyla güncellendi');
        }
        else{
            return back()->with('error','bir hata oluştu');
        }



    }

}
