<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
    public function home()
    {
		\App::setLocale('en');
	    return view('site.home');
    }

	public function about()
	{
		return view('site.about');
	}

	public function contacts()
	{
		return view('site.contacts');
	}
}
