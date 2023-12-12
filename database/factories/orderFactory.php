<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\order;
use App\Models\customer;
use carbon\carbon;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\order>
 */
class orderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = order::class;

    public function definition()
    {
        // Obtén un cliente aleatorio existente de la base de datos
        $customer = customer::inRandomOrder()->first();

        return [
            'customers_id' => $customer->id,
            'NumeroPersonas' => $this->faker->randomNumber(),
            'FechaOrden' => Carbon::now()->subDays(rand(1, 365)), // Fecha de orden aleatoria en el último año
        ];
    }
}
