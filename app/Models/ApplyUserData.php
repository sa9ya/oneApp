<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyUserData extends Model
{
	use HasFactory;

	protected $fillable = [
		'birth_date',
		'work_services',
		'phone_number',
		'first_name',
		'last_name',
		'email',
		'zip_code',
	];

	protected $casts = [
		'work_services' => 'array', // Автоматичне перетворення JSON у масив
		'birth_date' => 'date', // Автоматичне перетворення дати
	];
}
