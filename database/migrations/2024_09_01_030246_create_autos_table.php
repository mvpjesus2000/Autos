<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->string('color');
            $table->year('modelo');
            $table->string('tamano');
            $table->string('numero_placa')->unique();
            $table->decimal('precio', 10, 2);
            $table->enum('tipo', ['deportivo', 'formal', 'viaje', 'familiar']);
            $table->string('marca');
            $table->string('modelo_nombre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autos');
    }
}
