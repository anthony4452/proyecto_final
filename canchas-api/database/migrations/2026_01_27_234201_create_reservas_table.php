<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('id_reserva');
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_fin');

            $table->foreignId('id_cliente')
                ->constrained('clientes', 'id_cliente')
                ->onDelete('cascade');

            $table->foreignId('id_cancha')
                ->constrained('canchas', 'id_cancha')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
