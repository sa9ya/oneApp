<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
	public $count = 0;

	public function increment()
	{
		$this->count++;
	}

    public function home()
    {
	    return view('site.home');
    }

	public function contacts()
	{
		return view('site.contacts');
	}
}
