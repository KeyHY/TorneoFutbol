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
        Schema::create('grupotorneos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipo_id'); // Clave foránea para la tabla equipos

            // Foreign key para el torneo
            $table->unsignedBigInteger('id_torneo');
            $table->foreign('id_torneo')->references('id')->on('torneos')->onDelete('cascade');

            // Foreign key para el equipo
            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupotorneos');
    }
};
