<?php

namespace App\Http\Controllers;

use App\Models\Tecnica;
use Illuminate\Http\Request;

class TecnicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tecnicas = Tecnica::all();
        return view('tecnicaIndex', compact('tecnicas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tecnicaCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tecnica::create($request->all());
        return redirect('/tecnica');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tecnica $tecnica)
    {
        return view('/tecnicaShow', compact('tecnica'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tecnica $tecnica)
    {
        return view('tecnicaEdit', compact('tecnica'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tecnica $tecnica)
    {
        Tecnica::where('id', $tecnica->id)->update($request->except('_token', '_method', 'action'));
        return redirect('/tecnica');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tecnica $tecnica)
    {
        $tecnica->delete();
        return redirect('/tecnica');
    }
}
