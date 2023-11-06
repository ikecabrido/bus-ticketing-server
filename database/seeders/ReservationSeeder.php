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
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservation::factory(24)->create();
        
        // $busTypes = Bus::pluck('bus_type');
        // echo $busTypes;
        
     
    }
}
