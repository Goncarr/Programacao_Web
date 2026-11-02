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
        Schema::create('equipamentos', function (Blueprint $table) {
            $table->id('idEquipamento');
            $table->string('nome');
            $table->string('codigo');
            $table->longText('descricao');
            $table->enum('estado', ['Bom','Razoavél','Usado']);
            $table->string('localizacao');
            $table->integer('idCategoria'); //Foreign Key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipamento');
    }
};
