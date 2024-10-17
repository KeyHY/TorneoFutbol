<?php

namespace App\Http\Controllers;

use App\Models\GrupoTorneo;
use App\Models\Torneo;
use App\Models\Equipo;
use Illuminate\Http\Request;

class GrupoTorneoController extends Controller
{
    public function index()
    {
        $grupotorneos = GrupoTorneo::with(['torneo', 'equipo'])->get();
        return view('grupotorneos.index', compact('grupotorneos'));
    }

    public function create()
    {
        $torneos = Torneo::all();
        $equipos = Equipo::all();
        return view('grupotorneos.create', compact('torneos', 'equipos'));
    }
    
    public function edit($id)
    {
        $grupoTorneo = GrupoTorneo::findOrFail($id);
        $torneos = Torneo::all();
        $equipos = Equipo::all();
    
        return view('grupotorneos.edit', compact('grupoTorneo', 'torneos', 'equipos'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'id_torneo' => 'required|exists:torneos,id',
            'equipos' => 'required|array', // 'equipos' ahora es un array
            'equipos.*' => 'exists:equipos,id', // Cada equipo debe existir en la tabla equipos
        ]);
    
        $torneo = Torneo::findOrFail($request->id_torneo);
        $equiposActuales = $torneo->equipos()->count();
        $totalEquipos = $equiposActuales + count($request->equipos);
    
        if ($totalEquipos > $torneo->cantidad_equipos) {
            return redirect()->back()->with('error', 'No se pueden agregar más equipos. Se ha alcanzado el límite máximo.');
        }
    
        // Agrega cada equipo al torneo en la tabla 'grupotorneos'
        foreach ($request->equipos as $equipoId) {
            GrupoTorneo::create([
                'id_torneo' => $request->id_torneo,
                'equipo_id' => $equipoId,
            ]);
        }
    
        return redirect()->route('grupotorneos.index')->with('success', 'Equipos agregados al torneo exitosamente.');
    }
    

    public function update(Request $request, GrupoTorneo $grupotorneo)
    {
        $request->validate([
            'id_torneo' => 'required|exists:torneos,id',
            'equipo_id' => 'required|exists:equipos,id',
        ]);

        $grupotorneo->update($request->only(['id_torneo', 'equipo_id']));
        return redirect()->route('grupotorneos.index')->with('success', 'Grupo actualizado correctamente.');
    }

    public function destroy(GrupoTorneo $grupotorneo)
    {
        $grupotorneo->delete();
        return redirect()->route('grupotorneos.index')->with('success', 'Grupo eliminado correctamente.');
    }
}
