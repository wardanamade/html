<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\ClassificationResource;
use App\Http\Resources\PriorityResource;
use App\Http\Resources\StatusResource;
use App\Http\Resources\SubcategoryResource;
use App\Http\Resources\UserResource;

class TicketCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // id, uuid, code, title, description, category, subcategory, clsasification, status, priority, user, created_at, updated_at, deleted_at, created_by, updated_by, deleted_by
        return [
            'data' => $this->collection->transform(function ($ticket) {
                return [
                    'id' => $ticket->id,
                    'uuid' => $ticket->uuid,
                    'code' => $ticket->code,
                    'title' => $ticket->title,
                    'description' => $ticket->description,
                    'category' => new CategoryResource($ticket->category),
                    'subcategory' => new SubcategoryResource($ticket->subcategory),
                    'classification' => new ClassificationResource($ticket->classification),
                    'status' => new StatusResource($ticket->status),
                    'priority' => new PriorityResource($ticket->priority),
                    'user' => new UserResource($ticket->user),
                    // 'created_at' => $ticket->created_at,
                    // 'updated_at' => $ticket->updated_at,
                    // 'deleted_at' => $ticket->deleted_at,
                    // 'created_by' => $ticket->created_by,
                    // 'updated_by' => $ticket->updated_by,
                    // 'deleted_by' => $ticket->deleted_by,
                ];
            }),
        ];
    }
}
