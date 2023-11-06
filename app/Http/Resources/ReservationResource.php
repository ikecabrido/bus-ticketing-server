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
            'bus' => [
                'id' => $this->bus->id,
                'bus_number' => $this->bus->bus_number,
                'bus_type' => $this->bus->bus_type,
                'destinationFrom' => $this->bus->destinationFrom,
                'destinationTo' => $this->bus->destinationTo,
                'departure_time' => $this->bus->departure_time,
                'departure_date' => $this->bus->departure_date,
                'price' => $this->bus->price
            ],
            'reservation_date' => $this->reservation_date,
            'quantity' => $this->quantity
        ];
    }
}
