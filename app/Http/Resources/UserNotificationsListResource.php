<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserNotificationsListResource extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function toArray($request)
	{
		return [
			'id' => $this->id,
			'sender_name' => $this->sender_name,
			'notification' => str_limit($this->notification, 20),
			'created_at' => $this->created_at->diffForHumans(),
			'is_read' => (bool)$this->is_read,
			'app_doc_review' => $this->app_doc_review
		];
	}
}
