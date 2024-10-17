<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TorneoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrupoTorneoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;

Route::get('jugador', [JugadorController::class, 'index'])->name('jugadores.index');
Route::get('jugadores/create', [JugadorController::class, 'create'])->name('jugadores.create');
Route::post('jugadores/store', [JugadorController::class, 'store'])->name('jugadores.store');
Route::get('jugadores1/{jugador}', [JugadorController::class, 'show'])->name('jugadores.show');
Route::get('jugadores/{jugador}/edit', [JugadorController::class, 'edit'])->name('jugadores.edit');
Route::put('jugadores/{jugador}', [JugadorController::class, 'update'])->name('jugadores.update');
Route::delete('jugadores/{jugador}', [JugadorController::class, 'destroy'])->name('jugadores.destroy');


Route::resource('equipos', EquipoController::class);
Route::resource('grupotorneos', GrupoTorneoController::class);


// Rutas de autenticación
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('/', [RegisterController::class, 'indexprime'])->name('indexprime');


// Rutas para el CRUD de Torneos
Route::middleware('auth')->group(function () {
    Route::get('/torneos', [TorneoController::class, 'index'])->name('torneos.index');
    Route::get('/torneos/create', [TorneoController::class, 'create'])->name('torneos.create');
    Route::post('/torneos', [TorneoController::class, 'store'])->name('torneos.store');
    Route::get('/torneos/{torneo}/edit', [TorneoController::class, 'edit'])->name('torneos.edit');
    Route::put('/torneos/{torneo}', [TorneoController::class, 'update'])->name('torneos.update');
    Route::delete('/torneos/{torneo}', [TorneoController::class, 'destroy'])->name('torneos.destroy');
});