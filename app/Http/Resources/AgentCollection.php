<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

use App\Http\Resources\LevelResource;
use App\Http\Resources\TeamResource;

class AgentCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function ($agent) {
                return [
                    'id' => $agent->id,
                    'name' => $agent->name,
                    'email' => $agent->email,
                    'phone' => $agent->phone,
                    'avatar' => $agent->avatar,
                    'nickname' => $agent->nickname,
                    'team' => new TeamResource($agent->team),
                    'level' => new LevelResource($agent->level),
                    // 'created_at' => $agent->created_at,
                    // 'updated_at' => $agent->updated_at,
                    // 'deleted_at' => $agent->deleted_at,
                    // 'created_by' => $agent->created_by,
                    // 'updated_by' => $agent->updated_by,
                    // 'deleted_by' => $agent->deleted_by,
                ];
            }),
        ];
    }
}
