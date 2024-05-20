<?php

namespace App\Http\Controllers;

use App\Models\Botella;
use App\Models\Tecnica;
use Illuminate\Http\Request;

class BotellaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $botellas = Botella::all();
        return view('botellaIndex', compact('botellas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tecnicas =  Tecnica::all();
        return view('botellaCreate', compact('tecnicas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'marca' => 'required|string',
            'tipo' => 'required|string',
            'capacidad' => 'required|numeric',
            'precio' => 'required|numeric',
            'tecnicas' => 'required',
        ]);

        $botella = new Botella();
        $botella->nombre = $request->nombre;
        $botella->marca = $request->marca;
        $botella->tipo = $request->tipo;
        $botella->capacidad = $request->capacidad;
        $botella->precio = $request->precio;
        $botella->save();

        $botella->tecnicas()->attach($request->tecnicas);

        Session()->flash('success', 'Se ha guardado con éxito');
        return redirect('/botella');
    }

    /**
     * Display the specified resource.
     */
    public function show(Botella $botella)
    {
        return view('/botellaShow', compact('botella'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Botella $botella)
    {
        $tecnicas =  Tecnica::all();
        return view('botellaEdit', compact('tecnicas', 'botella'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Botella $botella)
    {
        $request->validate([
            'nombre' => 'required|string',
            'marca' => 'required|string',
            'tipo' => 'required|string',
            'capacidad' => 'required|numeric',
            'precio' => 'required|numeric',
            'tecnicas' => 'required',
        ]);
    
        $botella->nombre = $request->nombre;
        $botella->marca = $request->marca;
        $botella->tipo = $request->tipo;
        $botella->capacidad = $request->capacidad;
        $botella->precio = $request->precio;
        $botella->save();
        
        if ($request->has('tecnicas')) {
            $botella->tecnicas()->sync($request->tecnicas);
        } else {
            $botella->tecnica()->detach(); 
        }
        
        return redirect('/botella');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Botella $botella)
    {
        $botella->delete();
        return redirect('/botella');
    }
}
