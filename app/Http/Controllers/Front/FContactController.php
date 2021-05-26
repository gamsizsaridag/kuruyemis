<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FContactController extends Controller
{
    function index()
    {
        return view('front.contact');
    }
}
