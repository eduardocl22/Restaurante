<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\order;
use App\Models\dishes;
use Database\Factories\InvoiceDetailFactory;

class InvoiceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear un detalle de factura utilizando datos reales
        $order = order::inRandomOrder()->first();
        $dishes = dishes::inRandomOrder()->first();

        $invoiceDetailData = [
            'OrdenID' => $order->id,
            'PlatoID' => $dishes->id,
            'Cantidad' => 34,
            'PrecioUnitario' => 23.9,
        ];

        // Crear el detalle de la factura
        \App\Models\InvoiceDetail::create($invoiceDetailData);

        // Utilizar factory para crear más detalles de facturas de forma aleatoria
        InvoiceDetailFactory::new()->count(100)->create();
    }
}
