<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $service_id
 * @property int $language_id
 * @property string $title
 * @property string|null $description
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 */
class ServicesDescription extends Model
{
	use HasFactory;

	protected $table = 'services_description';

	protected $fillable = [
		'service_id',
		'language_id',
		'title',
		'description',
		'meta_title',
		'meta_description',
		'meta_keywords'
	];

	public function service()
	{
		return $this->belongsTo(Services::class, 'service_id', 'id');
	}
}
