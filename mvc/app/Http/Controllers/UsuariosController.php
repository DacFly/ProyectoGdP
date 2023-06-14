<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['usuarios'] = Usuarios::paginate(5);
        return view('usuarios.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosUsuarios = request()->except('_token');
        Usuarios::insert($datosUsuarios);
        return redirect('usuarios')->with('mensaje','Registro Creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $usuarios = Usuarios::findOrFail($id);
        return view('usuarios.edit', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosUsuario = request()->except('_token', '_method');
        Usuarios::where('id','=',$id)->update($datosUsuario);
        return redirect('usuarios')->with('mensaje','Registro Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Usuarios::destroy($id);
        return  redirect('usuarios')->with('mensaje','Registro Eliminado');
    }
}
