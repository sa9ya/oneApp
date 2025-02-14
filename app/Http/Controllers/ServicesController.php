<?php

namespace App\Http\Controllers;

use App\Models\Services;

class ServicesController extends Controller
{
    public function services() {
		$services = Services::with('description')->where('status', true)->get();

		return view('services.services', compact('services'));
    }

	public function service($slug)
	{
		$service = Services::with('description')->where('slug', $slug)->firstOrFail();

		return view('services.service', compact('service'));
	}
}