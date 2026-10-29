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
        Schema::create('reserva_has_equipamento', function (Blueprint $table) {
            $table->foreignId('idReserva')
                ->references('idReserva')->on('reserva')->onDelete('cascade');
            $table->foreignId('idEquipamento')
                ->references('idEquipamento')->on('equipamento')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva_has_equipamento');
    }
};
