<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bus;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Bus::factory(24)->create();
        $busTypes = ['Regular', 'Premium', 'P2P'];

        $busNumber = 101;

        $objectLength = 24;

        for ($i = 0; $i < $objectLength; $i++) {
            $busType = $busTypes[$i % count($busTypes)];

            Bus::factory()->create([
                'bus_number' => $busNumber++,
                'bus_type' => $busType,
            ]);
        
        };
    }
   
}