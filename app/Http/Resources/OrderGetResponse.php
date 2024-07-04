<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderGetResponse extends JsonResource
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
            'status' => $this->status,
            'region' => $this->region_id,
            'delivery_hours' => [
                $this->delivery_hours_start,
                $this->delivery_hours_end,
            ],
            'courier_id' => $this->courier_id,
            'complete_time' => $this->complete_time,
        ];
    }
}
