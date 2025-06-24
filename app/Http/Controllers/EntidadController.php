<?php

namespace App\Http\Controllers;

use App\Models\Entidad;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Ramsey\Uuid\Type\Integer;

class EntidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entidades = Entidad::all();
        return view('entidades.index', compact('entidades'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entidades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo'=> 'required|integer|unique:entidades,codigo',
            'subSector'=> 'required|string',
            'nivelGobierno'=> 'required|string',
            'estado'=> 'required|string',
            'fechaCreacion'=> 'required|date',
            'fechaActualizacion'=> 'nullable|date',
        ]);

        Entidad::create($request->all());

        return redirect()->route('entidades.index')->with('success', 'Entidad Creada Satisfactoriamente');


    }

   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $entidad = Entidad::findOrfail($id);
        return view('entidades.edit', compact('entidad')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'codigo'=> 'required|integer|unique:entidades,codigo', $id . 'idEntidad',
            'subSector'=> 'required|string',
            'nivelGobierno'=> 'required|string',
            'estado'=> 'required|string',
            'fechaCreacion'=> 'required|date',
            'fechaActualizacion'=> 'nullable|date',
        ]);

        $endidad = Entidad::findOrfail($id);
        Entidad::update($request->all());

        return redirect()->route('entidades.index')->with('success', 'Entidad Actualizada Satisfactoriamente');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $endidad = Entidad::findOrfail($id);
        $endidad->delete();

         return redirect()->route('entidades.index')->with('success', 'Entidad Eliminada Satisfactoriamente');

    }
}

