<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Album;

class ApiController extends Controller
{
	
	/**
	 * Get album details
	 *
	 * @param  Integer $id Album id
	 * @return string JSON response
	 */
	public function getAlbum($id)
	{
		if (Album::where('id', $id)->exists())
		{
			$album = Album::find($id)->first();
			$data = [
				'id' => $album->id,
				'title' => $album->title,
			];
			$photoData = [];
			foreach ($album->photos as $key => $photo)
			{
				$photoData[] = [
					'id' => $photo->id,
					'title' => $photo->title,
					'description' => $photo->description,
					'img' => $photo->img,
					'date' => $photo->photo_date,
					'featured' => $photo->featured == 1
				];
			}
			$data['photos'] = $photoData;
			$response = json_encode($data, JSON_PRETTY_PRINT);
			return response($response, 200);
		}
		else
		{
			return response()->json([
				"message" => "Album not found"
			], 404);
		}
	}

}