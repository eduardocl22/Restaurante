<?php

namespace Database\Factories;

use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customer>
 */
class customerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = customer::class;




    public function definition(): array
    {

       
        return [
            'Nombre' => $this->faker->name,
            'Telefono' => $this->faker->phoneNumber(),
            'Email' => $this->faker->unique()->safeEmail(),
            'FechaRegistro' => $this->faker->date(),
        ];
    }
}
