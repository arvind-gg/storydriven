<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Album;

class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	/**
	 * Home page
	 * 
	 * @return void
	 */
	public function welcome()
	{
		$albums = Album::all();

		return view('welcome', compact('albums'));
	}

	/**
	 * Display individual album
	 *
	 * @param  Integer $id Album id
	 * @return string JSON response
	 */
	public function viewAlbum($id)
	{
		$album = Album::find($id);

		return view('albums.show', compact('album'));
	}

}