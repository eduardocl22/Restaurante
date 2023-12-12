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
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customers_id')->nullable(); // Permitir valores nulos
            $table->date('FechaReserva');
            $table->bigInteger('NumeroPersonas');
            $table->unsignedBigInteger('mesa_id')->nullable(); // Permitir valores nulos
            $table->boolean('Activo')->default(true);
            $table->timestamps();
        
            // Definición de claves foráneas
            $table->foreign('customers_id')->references('id')->on('customers')->onDelete('set null');
            $table->foreign('mesa_id')->references('id')->on('mesas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
