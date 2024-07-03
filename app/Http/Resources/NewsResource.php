<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use Carbon\Carbon;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'targetId'     => $this->target_id,
            'headline'      => $this->headline,
            'description'   => $this->description,
            'image'         => $this->image,
            'video'         => $this->video,
            'document'      => $this->document,
            'createdBy'     => $this->createdBy,
            'createdAt'     => $this->created_at->format('d M Y'),
        ];
    }
}
