<?php

namespace App\Http\Controllers;

use App\Models\ApplyUserData;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function index()
    {
		return view('apply.index');
    }

	public function submitForm(Request $request)
	{
		$validated = $request->validate([
			'first_name' => 'required|string|max:100',
			'last_name' => 'required|string|max:100',
			'email' => 'required|email|unique:users,email',
			'phone_number' => 'nullable|string|max:15',
			'zip_code' => 'nullable|string|max:10',
			'birth_date' => 'required|date',
			'work_services' => 'required|array',
			'work_services.*' => 'integer',
		]);

		ApplyUserData::create([
			'first_name' => $validated['first_name'],
			'last_name' => $validated['last_name'],
			'email' => $validated['email'],
			'phone_number' => $validated['phone_number'] ?? null,
			'zip_code' => $validated['zip_code'] ?? null,
			'birth_date' => $validated['birth_date'],
			'work_services' => $validated['work_services'],
		]);

		return back()->with('success', 'Дані успішно збережено!');
	}
}
