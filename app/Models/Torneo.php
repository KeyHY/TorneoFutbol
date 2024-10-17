<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    use HasFactory;

    /**
     * Los atributos que se pueden asignar en masa.
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'premio',
        'lugar',
        'formato',
        'fecha_inicio',
        'fecha_fin',
        'cantidad_equipos',
        'id_usuario',
        'ruta_imagen', // Asegúrate de que el modelo de usuario tenga esta relación
    ];

    /**
     * Los atributos que deben estar ocultos para los arrays.
     */
    protected $hidden = [
        // Aquí puedes agregar atributos a ocultar si es necesario
    ];

    /**
     * Los atributos que deben ser convertidos a tipos nativos.
     */
    protected $casts = [
        'fecha_inicio' => 'datetime',
        'fecha_fin' => 'datetime',
    ];

    /**
     * Relación con el modelo Usuario.
     */
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function equipos()
    {
        return $this->belongsToMany(Equipo::class, 'grupotorneos', 'id_torneo', 'equipo_id');
    }

    /**
     * Relación con el modelo GrupoTorneo.
     */
    public function grupotorneos()
    {
        return $this->hasMany(GrupoTorneo::class, 'id_torneo');
    }
}
