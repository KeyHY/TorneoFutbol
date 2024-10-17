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
        Schema::create('torneos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('premio');
            $table->string('formato');
            $table->string('lugar');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('ruta_imagen')->nullable();
            $table->integer('cantidad_equipos');
            
            $table->unsignedBigInteger('id_usuario'); // Clave foránea
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneos');
    }
};
