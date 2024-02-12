<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Jugador;
use Inertia\Inertia;

class JugadoresController extends Controller
{
    public function index(){
        $jugadores = Jugador::all();
        Inertia::render('Jugadores/Index', [
            'jugadores' => $jugadores
        ]);
    }

    public function create(){
        Inertia::render('Jugadores/Create');
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'equipo_id' => 'required',
            'posicion' => 'required'
        ]);

        Jugador::create($request->all());

        return to_route('jugadores.index');
    }

    public function edit($id){
        $jugador = Jugador::findorFail($id);
        Inertia::render('Jugadores/Edit', [
            'jugador' => $jugador
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'equipo_id' => 'required',
            'posicion' => 'required'
        ]);

        $jugador = Jugador::findorFail($id);
        $jugador->update($request->all());

        return to_route('jugadores.index');
    }

    public function destroy($id){
        $jugador = Jugador::findorFail($id);
        $jugador->delete();

        return to_route('jugadores.index');
    }
}
