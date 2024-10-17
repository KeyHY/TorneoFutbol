<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Mostrar una lista de los equipos.
     */
    public function index()
    {
        $equipos = Equipo::all(); // Obtener todos los equipos
        return view('equipos.index', compact('equipos'));
    }

    /**
     * Mostrar el formulario para crear un nuevo equipo.
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Almacenar un nuevo equipo en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
            'ruta_imagen' => 'nullable|image|max:2048', // Máximo 2 MB
        ]);

        $data = $request->only(['nombre', 'ciudad', 'ruta_imagen']);

        if ($request->hasFile('ruta_imagen')) {
            $data['ruta_imagen'] = $request->file('ruta_imagen')->store('Equipo', 'public');
        }

        Equipo::create($request->all()); // Crear el equipo

        return redirect()->route('equipos.index')->with('success', 'Equipo creado exitosamente.');
    }

    /**
     * Mostrar el formulario para editar un equipo existente.
     */
    public function edit(Equipo $equipo)
    {
        return view('equipos.edit', compact('equipo'));
    }

    /**
     * Actualizar un equipo existente en la base de datos.
     */
    public function update(Request $request, Equipo $equipo)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
        ]);

        $equipo->update($request->all()); // Actualizar el equipo

        return redirect()->route('equipos.index')->with('success', 'Equipo actualizado exitosamente.');
    }

    /**
     * Eliminar un equipo existente de la base de datos.
     */
    public function destroy(Equipo $equipo)
    {
        $equipo->delete(); // Eliminar el equipo

        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado exitosamente.');
    }
}
