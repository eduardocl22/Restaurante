<?php

namespace Database\Seeders;
use App\Models\order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\carbon;
use App\Models\customer;


class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = Customer::inRandomOrder()->first();
        $order=[
            [
                'customers_id'=>'1',
                'NumeroPersonas'=>'12',
                'FechaOrden'=>Carbon::parse('2001-07-05'),
            ]
        ];
        foreach($order as $order){
            order::create($order);
        }

        \Database\Factories\orderFactory::new()->count(100)->create();

    }
}
