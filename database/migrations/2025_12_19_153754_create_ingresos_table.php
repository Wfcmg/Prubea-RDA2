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
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 10)->unique();
            $table->string('marca', 50);
            $table->string('modelo', 50);
            $table->text('problema');
            $table->string('cliente_nombre', 80);
            $table->string('cliente_telefono', 20);
            $table->enum('estado', [
                'RECIEN_LLEGO',
                'REVISANDO',
                'REPARACION',
                'LISTO',
                'RETIRADO'
            ])->default('RECIEN_LLEGO');
            $table->timestamp('fecha_ingreso')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingresos');
    }
};
