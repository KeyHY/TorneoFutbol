<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GrupoTorneo extends Model
{
    use HasFactory;
    protected $table = 'grupotorneos';

    protected $fillable = [
        'equipo_id',
        'id_torneo',
    ];

    protected $hidden = [];

    /**
     * Relación con el modelo Torneo.
     */
    public function torneo(): BelongsTo
    {
        return $this->belongsTo(Torneo::class, 'id_torneo');
    }

    /**
     * Relación con el modelo Equipo (uno a muchos).
     */
    public function equipo(): BelongsTo
    {
        return $this->belongsTo(Equipo::class, 'equipo_id');
    }

    /**
     * Relación con el modelo Equipo (muchos a muchos).
     */
    public function equipos(): BelongsToMany
    {
        return $this->belongsToMany(Equipo::class, 'grupotorneos', 'id_torneo', 'equipo_id');
    }
}
