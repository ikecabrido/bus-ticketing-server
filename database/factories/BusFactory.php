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
        // $busTypes = ['Regular', 'Premium', 'P2P'];
        // $prices = [600, 700, 900];

        // $busNumber = 101;

        // $objectLength = 24;

        // for ($i = 0; $i < $objectLength; $i++) {
        //     $busType = $busTypes[$i % count($busTypes)];
        //     $price = $prices[$i % count($prices)];

            return [
                // 'bus_number' => $busNumber++,
                // 'bus_type' => $busType,
                // 'price' => $price
            ];
        
    }
        
    
//   }
}
