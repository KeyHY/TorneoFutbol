<?php

namespace App\Http\Controllers;

use App\Models\Torneo;
use App\Models\Equipo;
use App\Models\Noticia;

class HomeController extends Controller
{
    public function index()
    {
        $torneos = Torneo::all();
        $equipos = Equipo::all();
        $noticias = Noticia::latest()->take(3)->get();

        return view('index', compact('torneos', 'equipos', 'noticias'));
    }
}
