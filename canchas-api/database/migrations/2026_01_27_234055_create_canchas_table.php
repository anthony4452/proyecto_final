<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('canchas', function (Blueprint $table) {
            $table->id('id_cancha');
            $table->string('tipo'); // futbol | basquet | voley
            $table->decimal('precio_hora', 8, 2);
            $table->string('estado'); // disponible | mantenimiento
            $table->string('ubicacion');
            $table->integer('capacidad');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('canchas');
    }
};

