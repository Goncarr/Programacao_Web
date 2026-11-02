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
            $table->integer('idReserva'); //Foreign Key
            $table->integer('idEquipamento'); //Foreign Key
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
