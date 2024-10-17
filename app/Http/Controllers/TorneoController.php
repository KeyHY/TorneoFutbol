<?php

namespace App\Http\Controllers;

use App\Models\Torneo;
use App\Models\Usuario; // Asegúrate de usar el modelo correcto
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TorneoController extends Controller
{
    public function index()
    {
        $torneos = Torneo::paginate(10);
        return view('torneos.index', compact('torneos'));
    }

    public function create()
    {
        // Obtener todos los usuarios para el selector
        $usuarios = Usuario::all();
        return view('torneos.create', compact('usuarios'));
    }

    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'premio' => 'required|string|max:255',
            'lugar' => 'required|string|max:255',
            'formato' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio',
            'cantidad_equipos' => 'required|integer|min:1',
        ], [
            'fecha_fin.after' => 'La fecha de fin debe ser posterior a la fecha de inicio.',
        ]);

        // Crear un nuevo torneo asignando el id_usuario del usuario autenticado
        Torneo::create($request->only([
            'nombre', 'descripcion', 'premio', 'lugar', 'formato',
            'fecha_inicio', 'fecha_fin', 'cantidad_equipos'
        ]) + ['id_usuario' => Auth::id()]); // Aquí se obtiene el ID del usuario autenticado

        return redirect()->route('torneos.index')->with('success', 'Torneo creado exitosamente.');
    }


    public function edit(Torneo $torneo)
    {
        // Obtener los usuarios para el selector
        $usuarios = Usuario::all(); // Cambiar User a Usuario
        return view('torneos.edit', compact('torneo', 'usuarios'));
    }

    public function update(Request $request, Torneo $torneo)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'premio' => 'required|string|max:255',
            'lugar' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio',
            'cantidad_equipos' => 'required|integer|min:1',
        ], [
            'fecha_fin.after' => 'La fecha de fin debe ser posterior a la fecha de inicio.',
        ]);

        // Actualizar el torneo
        $torneo->update($request->only([
            'nombre', 'descripcion', 'premio', 'lugar', 
            'fecha_inicio', 'fecha_fin', 'cantidad_equipos'
        ]) + ['id_usuario' => Auth::id()]); // Aquí también se actualiza el ID del usuario autenticado

        return redirect()->route('torneos.index')->with('success', 'Torneo actualizado exitosamente.');
    }

    public function destroy(Torneo $torneo)
    {
        // Eliminar el torneo
        $torneo->delete();
        return redirect()->route('torneos.index')->with('success', 'Torneo eliminado exitosamente.');
    }
}
