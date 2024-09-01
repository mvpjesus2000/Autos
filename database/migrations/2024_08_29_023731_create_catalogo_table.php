<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogoTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('catalogo', function (Blueprint $table) {
            $table->id();
            $table->string('color');
            $table->year('modelo');
            $table->string('tamano'); // Puedes usar 'size' si prefieres en inglés
            $table->string('numero_placa')->unique(); // Considera 'unique' si no debe haber placas duplicadas
            $table->decimal('precio', 10, 2);
            $table->enum('tipo', ['deportivo', 'formal', 'viaje', 'familiar']);
            $table->string('marca');
            $table->string('modelo_nombre'); // Para el nombre del modelo de la marca
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogo');
    }
}

