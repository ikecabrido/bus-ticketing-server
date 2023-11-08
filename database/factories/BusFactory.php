<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bus>
 */
class BusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $from = [
        //     'Cubao', 'Cubao', 'Cubao',
        //     'Baguio', 'Baguio', 'Baguio',
        //     'Cubao', 'Cubao', 'Cubao',
        //     'Tuguegarao', 'Tuguegarao', 'Tuguegarao',
        //     'Pasay', 'Pasay', 'Pasay',
        //     'Baguio', 'Baguio', 'Baguio',
        //     'Tuguegarao', 'Tuguegarao', 'Tuguegarao',
        //     'Pasay', 'Pasay', 'Pasay',
        // ];

        // $to = [
        //     'Baguio', 'Baguio', 'Baguio',
        //     'Cubao', 'Cubao', 'Cubao',
        //     'Tuguegarao', 'Tuguegarao', 'Tuguegarao',
        //     'Cubao', 'Cubao', 'Cubao',
        //     'Baguio', 'Baguio', 'Baguio',
        //     'Pasay', 'Pasay', 'Pasay',
        //     'Pasay', 'Pasay', 'Pasay',
        //     'Tuguegarao', 'Tuguegarao', 'Tuguegarao',
        // ];

        // $departureTimes = [
        //     '2:00 am', '4:00 am', '6:00 am',
        //     '9:00 am', '11:00 am', '1:00 pm',
        //     '3:00 am', '5:00 am', '7:00 am',
        //     '10:00 am', '12:00 pm', '2:00 pm',
        //     '4:00 am', '6:00 am', '8:00am',
        //     '11:00 am', '1:00 pm', '3:00 pm',
        //     '12:00 pm', '1:00 pm', '4:00 pm',
        //     '5:00 am', '7:00 am', '9:00 am',
        //     '4:00 pm', '6:00 pm', '8:00 pm',
        //     '11:00 pm', '1:00 am', '3:00 am',
        //     '5:00 pm', '7:00 pm', '9:00 pm',
        //     '12:00 am', '2:00 am', '4:00 am',
        //     '6:00 pm', '8:00 pm', '10:00 pm',
        //     '1:00 am', '3:00 am', '5:00 am',
        //     '2:00 am', '4:00 am', '6:00 am',
        //     '7:00 pm', '9:00 pm', '11:00 pm'  
        // ];

        // $date = [
        //     'November-17-2023',
        //     'November-18-2023',
        //     'November-19-2023',
        //     'November-20-2023',
        //     'November-21-2023',
        //     'November-22-2023',
        //     'November-23-2023',
        //     'November-24-2023',
        //     'November-25-2023',
        //     'November-26-2023',
        // ];


        // $busTypes = ['Regular', 'Premium', 'P2P'];
        // $prices = [600, 700, 900];

        // $busNumber = 101;

        // $objectLength = 48;

        // $busData = [];

        // for ($i = 0; $i < $objectLength; $i++) {
        //     $busType = $busTypes[$i % count($busTypes)];
        //     $price = $prices[$i % count($prices)];
        //     $destinationFrom = $from[$i % count($from)];
        //     $destinationTo = $to[$i % count($to)];
        //     $departureTime = $departureTimes[$i % count($departureTimes)];
        //     $departureDate = $date[$i % count($date)];

            return [
                // 'bus_number' => $busNumber++,
                // 'bus_type' => $busType,
                // 'price' => $price,
                // 'destinationFrom' => $destinationFrom,
                // 'destinationTo' => $destinationTo,
                // 'departure_time' => $departureTime,
                // 'departure_date' => $departureDate
               
            ];
            // $busData = [
            //     'bus_number' => $busNumber++,
            //     'bus_type' => $busType,
            //     'price' => $price,
            //     'destinationFrom' => $destinationFrom,
            //     'destinationTo' => $destinationTo,
            //     'departure_time' => $departureTime,
            //     'departure_date' => $departureDate
            // ];
        
    }

    // return $busData;
        
    
//   }
}
