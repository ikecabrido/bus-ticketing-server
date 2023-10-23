<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Bus;
use App\Models\Transaction;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    // protected $busType;
    // protected $price = 0;
    
    // Reservation::factory(10)->create();
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $destinations = [
            'Cubao to Baguio',
            'Baguio to Cubao',
            'Cubao to Tuguegarao',
            'Tuguegarao to Cubao',
            'Baguio to Pasay',
            'Pasay to Baguio',
            'Tuguegarao to Pasay',
            'Pasay to Tuguegarao'
        ];

        $departureTime = [];

        $objectLength = 24;

        $id = 3;

       
        

        for ($i=0; $i < $objectLength  ; $i++) { 
            $destination = $destinations[$i % count($destinations)];

            $this->busType = Bus::pluck('bus_type')->first();
            $price = 0;
            // dd($this->busType);
            if ($this->busType === 'Regular') {
                $this->price = 600;
            } elseif ($this->busType === 'Premium') {
                $this->price = 700;
            } elseif ($this->busType === 'P2P') {
                $this->price = 900;
            }
    

           
        }
        Reservation::factory()->create([
            'user_id' => User::pluck('id')->first(),
            'bus_id' => Bus::pluck($id),
            'transaction_id' => Transaction::pluck('id'),
            'destination' => $destination,
            'reservation_date' => now(),
            'departure_time' => now(),
            'price' => $price,
            'departure_date' => now()
        ]);
     
    }
}
