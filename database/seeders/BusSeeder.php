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
        $busTypes = ['Regular', 'Premium', 'P2P'];

        $busNumber = 101;

        $numberOfRecords = 24;

        for ($i = 0; $i < $numberOfRecords; $i++) {
            $busType = $busTypes[$i % count($busTypes)];

            Bus::factory()->create([
                'bus_number' => $busNumber++,
                'bus_type' => $busType,
            ]);
        // Bus::factory()->create([
        //     'bus_number' => 101,
        //     'bus_type' => 'Regular'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 102,
        //     'bus_type' => 'Premium'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 103,
        //     'bus_type' => 'P2P'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 104,
        //     'bus_type' => 'Regular'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 105,
        //     'bus_type' => 'Premium'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 106,
        //     'bus_type' => 'P2P'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 107,
        //     'bus_type' => 'Regular'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 108,
        //     'bus_type' => 'Premium'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 109,
        //     'bus_type' => 'P2P'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 110,
        //     'bus_type' => 'Regular'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 111,
        //     'bus_type' => 'Premium'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 112,
        //     'bus_type' => 'P2P'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 113,
        //     'bus_type' => 'Regular'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 114,
        //     'bus_type' => 'Premium'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 115,
        //     'bus_type' => 'P2P'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 116,
        //     'bus_type' => 'Regular'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 117,
        //     'bus_type' => 'Premium'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 118,
        //     'bus_type' => 'P2P'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 119,
        //     'bus_type' => 'Regular'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 120,
        //     'bus_type' => 'Premium'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 121,
        //     'bus_type' => 'P2P'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 122,
        //     'bus_type' => 'Regular'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 123,
        //     'bus_type' => 'Premium'
        // ]);
        // Bus::factory()->create([
        //     'bus_number' => 124,
        //     'bus_type' => 'P2P'
        // ]);
        }

    }
}