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
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id'); // Crea una columna "id" autoincremental como clave primaria
            $table->string('Nombre', 50);
            $table->string('Telefono', 20);
            $table->string('Email')->unique();
            $table->date('FechaRegistro');
            $table->timestamps(); // Crea columnas "created_at" y "updated_at"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
