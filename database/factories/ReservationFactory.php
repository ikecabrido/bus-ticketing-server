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
        // if ('bus_type' === 'Regular') {
        //     return $price = 600;
        // }
        // if ('bus_type' === 'Premium') {
        //     return $price = 700;
        // }
        // if ('bus_type' === 'P2P') {
        //     return $price = 900;
        // }
        return [
            // 'user_id' => fake()->randomElement(User::pluck('id')),
            // 'bus_id' => fake()->randomElement(Bus::pluck('id')),
            // 'transaction_id' => fake()->randomElement(Transaction::pluck('id')),
            // 'destination' => fake()->randomElement([
            //     'Cubao to Baguio',
            //     'Baguio to Cubao',
            //     'Cubao to Tuguegarao',
            //     'Tuguegarao to Cubao',
            //     'Baguio to Pasay',
            //     'Pasay to Baguio',
            //     'Tuguegarao to Pasay',
            //     'Pasay to Tuguegarao'
            // ]),
            // 'reservation_date' => fake()->dateTimeThisYear(),
            // 'departure_time' => fake()->time(),
            // 'price' => fake()->numberBetween(1500, 2500),
            // 'departure_date' => fake()->dateTimeThisYear(),          
        ];
    }
}