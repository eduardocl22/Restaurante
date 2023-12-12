<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\invoiceDetails;

class InvoiceDetailsControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $order = order::factory()->create();
        $dish = dishes::factory()->create();
        
        // Datos de detalle de factura
        $data = [
            'OrdenID' => $order->id,
            'PlatoID' => $dish->id,
            'Cantidad' => 2,
            'PrecioUnitario' => 10.99,
        ];

        // Simular la solicitud de almacenamiento
        $response = $this->post(route('invoiceDetails.store'), $data);

        // Verificar que se redirija a la página correcta después del almacenamiento
        $response->assertRedirect(route('invoiceDetails.index'));

        // Verificar que los datos se hayan almacenado en la base de datos
        $this->assertDatabaseHas('invoice_details', $data);
    }
    
}
