<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Bus;
use App\Models\Transaction;
use App\Models\Reservation;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{



    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    
        // $from = [
        //     'Cubao',
        //     'Baguio',
        //     'Tuguegarao',
        //     'Pasay',
            
            
        // ];

        // $to = [
        //     'Baguio',
        //     'Cubao',
        //     'Pasay',
        //     'Tuguegarao'
        // ];

        // $departureTimes = [
        //     '2:00 am',
        //     '11:00 am',
        //     '9:00 pm',
        //     '12:00 am',
        //     '3:00 am',
        //     '8:00 am',
        //     '5:00 am',
        //     '2:00 pm',
        //     '8:00 pm',
        //     '9:00 am',
        //     '5:00 am',
        //     '2:00 pm',
        //     '11:00 am',
        //     '6:00 am',
        //     '9:00 am',
        //     '12:00 pm',
        //     '4:00 am',
        //     '1:00 pm',
        //     '5:00 pm',
        //     '12:00 pm',
        //     '3:00 pm',
        //     '4:00 am',
        //     '7:00 am',
        //     '4:00 pm',
        //     '4:00 pm',
        //     '1:00 am',
        //     '7:00 am',
        //     '10:00 am',
        //     '2:00 pm',
        //     '10:00 pm',
        //     '7:00 pm',
        //     '4:00 am',
        //     '6:00 am',
        //     '11:00 pm',
        //     '7:00 pm',
        //     '4:00 am',
        //     '1:00 am',
        //     '8:00 pm',
        //     '11:00 pm',
        //     '2:00 am',
        //     '6:00 pm',
        //     '3:00 am',
        //     '3:00 am',
        //     '2:00 am',
        //     '5:00 am',
        //     '6:00 pm',
        //     '9:00 pm',
        //     '6:00 am'
        // ];
        // $date = [
        //     'November-03-2023',
        //     'November-04-2023',
        //     'November-05-2023',
        //     'November-06-2023',
        //     'November-07-2023',
        //     'November-08-2023',
        //     'November-09-2023',
        //     'November-10-2023',
        //     'November-11-2023',
        // ];

        // $objectLength = 24;

        // for ($i=0; $i < $objectLength  ; $i++) { 
        //     $destinationFrom = $from[$i % count($from)];
        //     $destinationTo = $to[$i % count($to)];
        //     $departureTime = $departureTimes[$i % count($departureTimes)];
        //     $departureDate = $date[$i % count($date)];


            // $busType = Bus::pluck('bus_type');
            // // $id = Bus::pluck('id')->first();
            // $price = 0;

            // if ($busType === 'Regular') {
            //     $price = 600;
            // } elseif ($busType === 'Premium') {
            //     $price = 700;
            // } elseif ($busType === 'P2P') {
            //     $price = 900;
            // }


        return [
            'bus_id' => fake()->unique()->randomElement(Bus::pluck('id')),
            // 'destinationFrom' => $destinationFrom,
            // 'destinationTo' => $destinationTo,
            'reservation_date' => now(),
            // 'departure_time' => $departureTime,
            // 'departure_date' => $departureDate,    
            'quantity' => 1  
        ];
        
        
    //    }

      
    }
}
