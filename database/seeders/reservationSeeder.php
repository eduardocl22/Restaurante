<?php

namespace Database\Seeders;
use App\Models\reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\carbon;
use App\Models\customer;
use App\Models\Mesa;

class reservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = customer::inRandomOrder()->first();
        $mesas = Mesa::inRandomOrder()->first();
        $reservation=[
            [
                'customers_id' => $customer->id,
                'FechaReserva' => Carbon::parse('2001-07-01'),
                'NumeroPersonas' => 23,
                'mesa_id' => $mesas->id,
            ]

            ];
            foreach($reservation as $reservation){
                reservation::create($reservation);
            }
            \Database\Factories\reservationFactory::new()->count(100)->create();    
    }
}
