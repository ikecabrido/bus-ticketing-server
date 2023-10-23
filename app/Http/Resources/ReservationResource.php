<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
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
            'user_id' => $this->user_id,
            'bus_id' => $this->bus_id,
            'destination' => $this->destination,
            'reservation_date' => $this->reservation_date,
            'departure_time' => $this->departure_time,
            'price' => $this->price,
            'departure_date' => $this->departure_date
        ];
    }
}
