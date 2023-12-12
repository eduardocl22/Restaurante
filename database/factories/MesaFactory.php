<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Mesa;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mesa>
 */
class MesaFactory extends Factory
{

    protected $model = Mesa::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'capacidad' => $this->faker->numberBetween(1, 20),
            'ubicacion' => $this->faker->randomElement(['vip', 'normal', 'exterior']),
        ];
    }
}
