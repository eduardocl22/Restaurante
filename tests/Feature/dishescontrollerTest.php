<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\dishes; // Asegúrate de que esta sea la ubicación correcta de tu modelo Dish

class dishescontrollerTest extends TestCase
{
    use RefreshDatabase; // Esto restablecerá la base de datos después de cada prueba.

    /**
     * Prueba de crear un plato.
     */
    public function test_create_dish(): void
    {
        // Datos del plato a crear
        $data = [
            'Nombre' => 'Hamburguesa',
            'Descripcion' => 'Una deliciosa hamburguesa',
            'Precio' => 9.99,
            'Activo' => true, // Ejemplo de plato activo
        ];

        // Simula la solicitud de almacenamiento
        $response = $this->post(route('dishes.store'), $data);

        // Verifica que se redirija a la página correcta después del almacenamiento
        $response->assertRedirect(route('dishes.index'));

        // Verifica que los datos se hayan almacenado en la base de datos
        $this->assertDatabaseHas('dishes', $data);
    }
}
