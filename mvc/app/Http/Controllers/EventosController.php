<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['eventos'] = Eventos::paginate(5);
        return view('eventos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosEventos = request()->except('_token');
        Eventos::insert($datosEventos);
        return redirect('eventos')->with('mensaje','Registro Creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Eventos $eventos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $eventos = Eventos::findOrFail($id);
        return view('eventos.edit', compact('eventos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosEventos = request()->except('_token', '_method');
        Eventos::where('id','=',$id)->update($datosEventos);
        return redirect('eventos')->with('mensaje','Registro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Eventos::destroy($id);
        return  redirect('eventos')->with('mensaje','Registro Eliminado');
    }
}
