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
        Schema::create('indisponibilidades', function (Blueprint $table) {
            $table->id('idIndisponibilidade');
            $table->date('dataInicio');
            $table->date('datafim');
            $table->string('motivo');
            $table->integer('idEquipamento'); //Foreign Key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indisponibilidade');
    }
};
