<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Noticia;

class NoticiasTableSeeder extends Seeder
{
    public function run()
    {
        Noticia::create([
            'titulo' => 'Gran final del torneo',
            'contenido' => 'La gran final del torneo se jugará este sábado...',
            'imagen_url' => 'ruta/imagen_noticia1.jpg',
        ]);

        Noticia::create([
            'titulo' => 'Nuevo récord de goles',
            'contenido' => 'El delantero estrella ha batido el récord de goles...',
            'imagen_url' => 'ruta/imagen_noticia2.jpg',
        ]);

        // Agrega más noticias según sea necesario
    }
}
