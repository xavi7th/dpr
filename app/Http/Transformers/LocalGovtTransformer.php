<?php

namespace App\Http\Transformers;

use App\LocalGovt;

class LocalGovtTransformer
{
	public function collectionTransformer($collection, $transformerMethod)
	{
		try {
			return [
				'total' => $collection->count(),
				'current_page' => $collection->currentPage(),
				'path' => $collection->resolveCurrentPath(),
				'to' => $collection->lastItem(),
				'from' => $collection->firstItem(),
				'last_page' => $collection->lastPage(),
				'next_page_url' => $collection->nextPageUrl(),
				'per_page' => $collection->perPage(),
				'prev_page_url' => $collection->previousPageUrl(),
				'total' => $collection->total(),
				'first_page_url' => $collection->url($collection->firstItem()),
				'last_page_url' => $collection->url($collection->lastPage()),
				'data' => $collection->map(function ($v) use ($transformerMethod) {
					return $this->$transformerMethod($v);
				})
			];
		} catch (\Throwable $e) {
			return [
				'data' => $collection->map(function ($v) use ($transformerMethod) {
					return $this->$transformerMethod($v);
				})
			];
		}
	}

	public function transformForPenetrationReports(LocalGovt $lga)
	{
		// return $lga;
		$density = 0;
		$density = $lga->square_area > 0 ? $lga->population /  $lga->square_area : $density;
		return [
			'id' => $lga->id,
			'app_doc_reviews_count' => $lga->app_doc_reviews_count,
			'population' => $lga->population ?? 0,
			'area' => $lga->square_area ?? 0,
			'density' => $density,
			'name' => $lga->name
		];
	}
}
