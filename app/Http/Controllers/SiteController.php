<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function contact()
    {
    	return view('contact');
    }
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    // public function signup()
    // {
    //     return view('auth/register')
    // }
}
