<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
	/**
	 * The table associated with the model
	 * 
	 * @var string
	 */
	protected $table = 'albums';

	/**
	 * Eager load relationships
	 */
	protected $with = ['photos'];

	/**
	 * Get the photos for the album
	 * 
	 * @return Relation
	 */
	public function photos()
	{
		return $this->hasMany('App\Photo');
	}
}
