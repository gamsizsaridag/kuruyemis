<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
//        if (!Session::has('loggedUser'))
//        {
//            return redirect()->route('yonetim.login')->with('fail','Lütfen Giriş Yapınız');
//        }
        if (!Auth::guest()) {
            if(Auth::user()->status == 1)
            {
                return $next($request);
            }
            else{
                Auth::logout();
                return redirect()->route('yonetim.login')->with('error','Giriş yapma yetkiniz bulunmamaktadır');
            }
        }
        else{
            return redirect()->route('yonetim.login')->with('error','Lütfen Giriş Yapınız');
        }


    }
}
