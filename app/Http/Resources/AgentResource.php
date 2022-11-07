<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\LevelResource;
use App\Http\Resources\TeamResource;

class AgentResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'avatar' => $this->avatar,
            'nickname' => $this->nickname,
            'team' => new TeamResource($this->team),
            'level' => new LevelResource($this->level),
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
            // 'deleted_at' => $this->deleted_at,
            // 'created_by' => new UserResource($this->created_by),
            // 'updated_by' => is_null($this->updated_by) ? null : new UserResource($this->updated_by),
            // 'deleted_by' => is_null($this->deleted_by) ? null : new UserResource($this->deleted_by),
        ];
    }
}
