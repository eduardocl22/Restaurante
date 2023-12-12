<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\dishes; 


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dishes>
 */
class dishesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nombre'=>$this->faker->name, 
            'Descripcion'=>$this->faker->text(200), 
            'Precio' => $this->faker->randomFloat(2, 10, 1000)
        ];
    }
}
