<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    protected $table = 'jugadores';
    protected $fillable = [
        'nombre',
        'posicion',
        'equipo_id',
        'fecha_nacimiento',
        'numero_camisa',
        'ruta_imagen',
    ];
}
