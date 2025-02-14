<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $slug
 * @property ServicesDescription|null $description
 */
class Services extends Model
{
	use HasFactory;

	protected $fillable = ['slug'];

	public function description()
	{
		return $this->hasOne(ServicesDescription::class, 'service_id', 'id')
			->where('language_id', Language::getLanguageId());
	}
}
