<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\Dishes;
use App\Models\InvoiceDetail;

class InvoiceDetailFactory extends Factory
{
    protected $model = InvoiceDetail::class;

    public function definition()
    {
        $order = Order::inRandomOrder()->first();
        $dishes = Dishes::inRandomOrder()->first();

        return [
            'OrdenID' => $order->id,
            'PlatoID' => $dishes->id,
            'Cantidad' => $this->faker->randomDigit,
            'PrecioUnitario' => $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
