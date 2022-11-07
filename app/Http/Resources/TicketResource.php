<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\ClassificationResource;
use App\Http\Resources\PriorityResource;
use App\Http\Resources\StatusResource;
use App\Http\Resources\SubcategoryResource;
use App\Http\Resources\UserResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // id, uuid, code, title, description, category, subcategory, clsasification, status, priority, user, created_at, updated_at, deleted_at, created_by, updated_by, deleted_by
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'code' => $this->code,
            'title' => $this->title,
            'description' => $this->description,
            'category' => new CategoryResource($this->category),
            'subcategory' => new SubcategoryResource($this->subcategory),
            'classification' => new ClassificationResource($this->classification),
            'status' => new StatusResource($this->status),
            'priority' => new PriorityResource($this->priority),
            'user' => new UserResource($this->user),
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
            // 'deleted_at' => $this->deleted_at,
            // 'created_by' => $this->created_by,
            // 'updated_by' => $this->updated_by,
            // 'deleted_by' => $this->deleted_by,
        ];
    }
}
