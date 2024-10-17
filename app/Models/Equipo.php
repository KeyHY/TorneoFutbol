<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'ciudad', 'ruta_imagen',]; // Atributos que se pueden asignar en masa

    public function grupotorneos()
    {
        return $this->belongsToMany(GrupoTorneo::class, 'grupotorneos', 'id_equipo', 'id_grupotorneo');
    }

    public function torneos()
    {
        return $this->belongsToMany(Torneo::class, 'grupotorneos', 'equipo_id', 'id_torneo');
    }
}

