<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	/**
	 * The table associated with the model
	 * 
	 * @var string
	 */
	protected $table = 'photos';

	/**
	 * Get the album that owns the photo
	 * 
	 * @return Relation
	 */
	public function album()
	{
			return $this->belongsTo('App\Album');
	}
}