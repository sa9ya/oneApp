<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
    public function home()
    {
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

	public function privacy()
	{
		return view('site.privacy');
	}
}
