<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use app\models\Equipo;

class EquiposController extends Controller
{
    public function index()
    {
        $equipos = Equipo::all();
        return Inertia::render('Equipos/Index', [
            'equipos' => $equipos
        ]);
    }

    public function create(){
        return Inertia::render('Equipos/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apodo' => 'required',
            'liga_id' => 'required',
            'fundacion' => 'required'
        ]);

        Equipo::create($request->all());

        return to_route('equipos.index');
    }

    public function edit($id)
    {
        $equipo = Equipo::findorFail($id);
        return Inertia::render('Equipos/Edit',[
            'equipo' => $equipo
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'apodo' => 'required',
            'liga_id' => 'required',
            'fundacion' => 'required'
        ]);

        $equipo = Equipo::findorFail($id);
        $equipo->update($request->all());

        return to_route('equipos.index');
    }

    public function destroy($id)
    {
        $equipo = Equipo::findorFail($id);
        $equipo->delete();

        return to_route('equipos.index');
    }
}
