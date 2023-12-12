<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\dishes;

class dishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dish=[
            [
                'Nombre'=>'pizza', 
                'Descripcion'=>'extra grande', 
                'Precio'=>'20',
                
            ]
            ];
            foreach($dish as $dish){
                dishes::create($dish);
            }
            \Database\Factories\dishesFactory::new()->count(100)->create();
    }
   
}
