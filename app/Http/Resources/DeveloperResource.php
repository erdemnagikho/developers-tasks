<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeveloperResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'dev' => $this->dev,
            'difficulty' => $this->difficulty,
            'estimated_hours' => $this->total_hour,
            'estimated_weeks' => number_format($this->total_hour / 45, 1),
            'estimated_months' => number_format($this->total_hour / 180, 1),
            'tasks' => TaskResource::collection($this->tasks),
        ];
    }
}
