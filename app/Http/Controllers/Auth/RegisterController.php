<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use App\Models\Torneo;  // Importa tu modelo Usuario
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function indexprime()
    {
        $torneos = Torneo::with('grupotorneos')->get(); // Incluye los equipos
        return view('index', compact('torneos'));
    }
    

    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios', // Cambia a 'usuarios'
            'password' => 'required|string|min:8|confirmed',
        ]);

        Usuario::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registro exitoso. Puedes iniciar sesión.');
    }
}
