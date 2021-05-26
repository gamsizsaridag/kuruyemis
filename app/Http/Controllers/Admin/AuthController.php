<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(){
        return view('yonetim.auth.login');
    }

    function check(Request $request){
//        return $request->input();
        $request->validate([
           'email' =>'required|email',
            'password' =>'required|min:5|max:12'
        ]);

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('yonetim.dashboard');
        } else{
            return back()->with('error','Mail adresiniz veya Şifreniz hatalıdır');
        }

//        $user = User::where('email',$request->email)->first();
//        if ($user)
//        {
//            if(Hash::check($request->password,$user->password)){
//
//                $request->session()->put('loggedUser',$user->id);
//                return redirect()->route('yonetim.dashboard');
//            }else{
//                return back()->with('fail','Hatalı şifre girdiniz');
//            }
//        }else{
//            return back()->with('fail','Böyle bir email adresi bulunamadı');
//        }
    }

    function logout(){
//        if (session()->has('loggedUser'))
//        {
//            session()->pull('loggedUser');
//            return redirect()->route('yonetim.login');
//        }
        Auth::logout();

        return redirect()->guest(route('yonetim.login'));
    }
}
