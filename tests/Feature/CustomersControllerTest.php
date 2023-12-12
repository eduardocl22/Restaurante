<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\customer; // Asegúrate de que esta sea la ubicación correcta de tu modelo Customer

class CustomerControllerTest extends TestCase
{
    use RefreshDatabase; // Esto restablecerá la base de datos después de cada prueba.

    /**
     * Prueba de crear un cliente.
     */
    public function test_create_customer(): void
    {
        // Datos del cliente a crear
        $data = [
            'Nombre' => 'John Doe',
            'Telefono' => '123-456-7890',
            'Email' => 'johndoe@example.com',
            'FechaRegistro' => now()->toDateString(), // Usando la fecha actual
        ];

        // Simula la solicitud de almacenamiento
        $response = $this->post(route('customers.store'), $data);

        // Verifica que se redirija a la página correcta después del almacenamiento
        $response->assertRedirect(route('customers.index'));

        // Verifica que los datos se hayan almacenado en la base de datos
        $this->assertDatabaseHas('customers', $data);
    }
}
