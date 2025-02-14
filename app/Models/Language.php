<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Language extends Model
{
	public static function getLanguageId()
	{
		return LaravelLocalization::getLocalesOrder()[LaravelLocalization::getCurrentLocale()]['id'];
	}
}
