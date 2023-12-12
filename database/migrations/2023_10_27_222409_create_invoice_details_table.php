<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('OrdenID');
            $table->unsignedBigInteger('PlatoID');
            $table->integer('Cantidad');
            $table->decimal('PrecioUnitario', 10, 2); // Cambiado a 10, 2 para 10 dígitos y 2 decimales
            $table->timestamps();
            // Restricción de clave foránea para OrdenID
            $table->foreign('OrdenID')->references('id')->on('orders');

            // Restricción de clave foránea para PlatoID
            $table->foreign('PlatoID')->references('id')->on('dishes');
        
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_details');
    }
};
