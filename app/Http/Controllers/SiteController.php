<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
	    return view('site.home');
    }

	public function contacts()
	{
		return view('site.contacts');
	}
}
