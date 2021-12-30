<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'task_name' => $this->name,
            'difficulty' => $this->difficulty,
            'estimated_hour' => number_format($this->difficulty / $this->developer->difficulty, 1),
        ];
    }
}
