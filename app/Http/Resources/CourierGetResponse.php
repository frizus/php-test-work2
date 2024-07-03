<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourierGetResponse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'courier_type' => $this->courier_type,
            'regions' => $this->regions->pluck('id'),
            'working_hours' => [
                $this->working_hours_start,
                $this->working_hours_end,
            ]
        ];
    }
}
