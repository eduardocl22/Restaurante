<?php

namespace Database\Seeders;
use App\Models\customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Database\Factory\customerFactory;


class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers=[
            [
               'Nombre'=>'jhovanny',
               'Telefono'=>'838383',
               'Email'=>'jhovanny@gmail.com',
               'FechaRegistro'=> Carbon::parse('2002-09-07'),
            ],
            [
                'Nombre'=>'rio',
                'Telefono'=>'31323112133',
                'Email'=>'rio@gmail.com',
                'FechaRegistro'=> Carbon::parse('2002-12-09'),
            ]
            ];
            foreach($customers as $customer){
                customer::create($customer);
            }
            \Database\Factories\CustomerFactory::new()->count(100)->create();
    }
}
