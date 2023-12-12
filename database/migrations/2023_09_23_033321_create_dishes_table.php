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
        Schema::create('dishes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre',50)->notNull();;
            $table->string('Descripcion',200)->notNull();;
            $table->decimal('Precio',10,2)->notNull();
            $table->string('Imagen')->nullable();
            $table->boolean('Activo')->default(true);
            $table->timestamps();


            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
        $table->dropColumn('Imagen');
    }
};
