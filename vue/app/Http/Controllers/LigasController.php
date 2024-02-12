<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Liga;
use Inertia\Inertia;

class LigasController extends Controller
{
    public function index(){
        return Inertia::render('Ligas/Index', [
            'ligas' => Liga::all()
        ]);
    }

    public function create(){
        return Inertia::render('Ligas/Create');
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'pais' => 'required',
            'categoria' => 'required',
            'logo' => 'required'
        ]);

        Liga::create($request->all());

        return to_route('ligas.index');
    }

    public function edit($id){
        $liga = Liga::findorFail($id);
        return Inertia::render('Ligas/Edit', [
            'liga' => $liga
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'pais' => 'required',
            'categoria' => 'required',
            'logo' => 'required'
        ]);

        $liga = Liga::findorFail($id);
        $liga->update($request->all());

        return to_route('ligas.index');
    }

    public function destroy($id){
        $liga = Liga::findorFail($id);
        $liga->delete();

        return to_route('ligas.index');
    }
}
