<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable; // Importar la clase Authenticatable
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Usuario extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable; // Asegúrate de usar el trait Authenticatable

    /**
     * Los atributos que se pueden asignar en masa.
     */
    protected $fillable = [
        'nombre',
        'email',
        'rol',
        'password',
    ];

    /**
     * Los atributos que deben estar ocultos para los arrays.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Los atributos que deben ser convertidos a tipos nativos.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Aquí puedes agregar relaciones si es necesario.
// App\Models\Usuario.php

public function torneos()
{
    return $this->hasMany(Torneo::class, 'id_usuario');
}

}
