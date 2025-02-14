<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
    public function home()
    {
	    $services = Services::with('description')->where('status', true)->get();

	    return view('site.home', compact('services'));
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

	public function cookies()
	{
		return view('site.cookies');
	}

	public function termsOfUse()
	{
		return view('site.termsofuse');
	}
}
