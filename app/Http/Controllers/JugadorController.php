<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;
use App\Models\Equipo;
use Illuminate\Support\Facades\Storage;

class JugadorController extends Controller
{
    public function index()
    {
        $jugadores = Jugador::all();
        return view('jugadores.index', compact('jugadores'));
    }

    public function create()
    {
        $equipos = Equipo::all(); // Obtenemos todos los equipos para el selector
        return view('jugadores.create', compact('equipos'));
    }

    public function edit(Jugador $jugador)
    {
        $equipos = Equipo::all(); // Obtenemos todos los equipos para el selector
        return view('jugadores.edit', compact('jugador', 'equipos'));
    }




    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'posicion' => 'required|string',
            'equipo_id' => 'required|exists:equipos,id',
            'fecha_nacimiento' => 'required|date',
            'numero_camisa' => 'required|integer',
            'ruta_imagen' => 'nullable|image|max:2048', // Máximo 2 MB
        ]);

        $data = $request->only(['nombre', 'posicion', 'equipo_id', 'fecha_nacimiento', 'numero_camisa']);

        if ($request->hasFile('ruta_imagen')) {
            $data['ruta_imagen'] = $request->file('ruta_imagen')->store('jugadores', 'public');
        }

        Jugador::create($data);

        return redirect()->route('jugadores.index')->with('success', 'Jugador creado con éxito');
    }

    public function show(Jugador $jugador)
    {
        return view('jugadores.index', compact('jugador'));
    }



    public function update(Request $request, Jugador $jugador)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'posicion' => 'required|string',
            'equipo_id' => 'required|exists:equipos,id',
            'fecha_nacimiento' => 'required|date',
            'numero_camisa' => 'required|integer',
            'ruta_imagen' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['nombre', 'posicion', 'equipo_id', 'fecha_nacimiento', 'numero_camisa']);

        if ($request->hasFile('ruta_imagen')) {
            if ($jugador->ruta_imagen) {
                Storage::disk('public')->delete($jugador->ruta_imagen);
            }
            $data['ruta_imagen'] = $request->file('ruta_imagen')->store('jugadores', 'public');
        }

        $jugador->update($data);

        return redirect()->route('jugadores.index')->with('success', 'Jugador actualizado con éxito');
    }

    public function destroy(Jugador $jugador)
    {
        if ($jugador->ruta_imagen) {
            Storage::disk('public')->delete($jugador->ruta_imagen);
        }
        $jugador->delete();

        return redirect()->route('jugadores.index')->with('success', 'Jugador eliminado con éxito');
    }
}
