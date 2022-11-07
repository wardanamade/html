<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClassificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // id, name, description, created_at, updated_at, deleted_at, created_by, updated_by, deleted_by
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
            // 'deleted_at' => $this->deleted_at,
            // 'created_by' => $this->created_by,
            // 'updated_by' => $this->updated_by,
            // 'deleted_by' => $this->deleted_by,
        ];
    }
}
