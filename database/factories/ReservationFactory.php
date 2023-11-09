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

        return [
            'bus_id' => fake()->unique()->randomElement(Bus::pluck('id')),
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'reservation_date' => now(),   
            'quantity' => 1  
        ];
        

      
    }
}
