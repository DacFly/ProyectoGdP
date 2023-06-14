@extends('layouts.app')
@if(Session::has('mensaje'))
{{ Session::get('mensaje')}}
@endif
@section('content')
<div class="container">
<div class="row justify-content-center">
<h1>Lista de Usuarios</h1>
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nombre</th>
                <th scope="col">cedula</th>
                <th scope="col">correo</th>
                <th scope="col">rol</th>
                <th scope="col">telefono</th>
                <th scope="col">direccion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <th>{{$usuario->id}}</th>
                <th>{{$usuario->nombre}}</th>
                <th>{{$usuario->cedula}}</th>
                <th>{{$usuario->correo}}</th>
                <th>{{$usuario->rol}}</th>
                <th>{{$usuario->telefono}}</th>
                <th>{{$usuario->direccion}}</th>
                <th>
                    <a href="{{ url('usuarios/'.$usuario->id.'/edit' ) }}" class="btn btn-success">
                        Editar
                    </a>
                
                    <form action="{{ url('usuarios/'.$usuario->id ) }}" method="post" >
                            @csrf
                            {{method_field('DELETE')}}
                            <input class="btn btn-danger" type="submit" value="Borrar" onclick="return confirm('Elimiar Registro?')">
                    </form>
                </th>   
            </tr> 
        @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
@endsection