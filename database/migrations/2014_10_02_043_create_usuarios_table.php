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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); // Columna para el ID del usuario
            $table->string('nombre'); // Nombre del usuario
            $table->string('rol')->default('usuario'); // Asignar 'usuario' como rol por defecto
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); // Para la verificación de email (opcional)
            $table->string('password'); // Contraseña del usuario
            $table->rememberToken(); // Token para "recordar sesión" en autenticación
            $table->timestamps(); // Timestamps para crear y actualizar
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
