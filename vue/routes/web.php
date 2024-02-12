<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LigasController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\JugadoresController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::inertia('/about', 'About');

Route::get('/', [LigasController::class, 'index'])->name('ligas.index');
Route::get('/lcreate', [LigasController::class, 'create'])->name('ligas.create');
Route::post('/lstore', [LigasController::class, 'store'])->name('ligas.store');
Route::get('/ledit/{id}', [LigasController::class, 'edit'])->name('ligas.edit');
Route::put('/lupdate/{id}', [LigasController::class, 'update'])->name('ligas.update');
Route::delete('/ldestroy/{id}', [LigasController::class, 'destroy'])->name('ligas.destroy');

Route::get('/eindex', [EquiposController::class, 'index'])->name('equipos.index');
Route::get('/ecreate', [EquiposController::class, 'create'])->name('equipos.create');
Route::post('/estore', [EquiposController::class, 'store'])->name('equipos.store');
Route::get('/eedit/{id}', [EquiposController::class, 'edit'])->name('equipos.edit');
Route::put('/eupdate/{id}', [EquiposController::class, 'update'])->name('equipos.update');
Route::delete('/edestroy/{id}', [EquiposController::class, 'destroy'])->name('equipos.destroy');

Route::get('/jindex', [JugadoresController::class, 'index'])->name('jugadores.index');
Route::get('/jcreate', [JugadoresController::class, 'create'])->name('jugadores.create');
Route::post('/jstore', [JugadoresController::class, 'store'])->name('jugadores.store');
Route::get('/jedit/{id}', [JugadoresController::class, 'edit'])->name('jugadores.edit');
Route::put('/jupdate/{id}', [JugadoresController::class, 'update'])->name('jugadores.update');
Route::delete('/jdestroy/{id}', [JugadoresController::class, 'destroy'])->name('jugadores.destroy');


require __DIR__.'/auth.php';
