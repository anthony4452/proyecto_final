<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('id_pago');

            $table->foreignId('id_reserva')
                ->constrained('reservas', 'id_reserva')
                ->onDelete('cascade');

            $table->decimal('monto', 8, 2);
            $table->string('metodo_pago'); // efectivo | transferencia
            $table->date('fecha_pago');
            $table->string('estado_pago'); // pagado | pendiente
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
