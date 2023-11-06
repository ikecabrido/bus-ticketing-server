<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Reservation;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reservation_id' =>fake()->randomElement(Reservation::pluck('id')),
            'ticket_number' => fake()->unique()->numberBetween(1000, 9999),
            'transaction_date' => now()
           
        ];
    }
   
}
