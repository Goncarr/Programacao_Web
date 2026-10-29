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
        Schema::create('reserva', function (Blueprint $table) {
            $table->id('idReserva');
            $table->timestamps();
            $table->date('date_inicio');
            $table->date('data_fim');
            $table->foreignId('idUser')
                ->references('idUser')->on('users')->onDelete('cascade');
            $table->foreignId('idEmprestimo')
                ->references('idEmprestimo')->on('emprestimo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva');
    }
};
