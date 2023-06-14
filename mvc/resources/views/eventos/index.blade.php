@extends('layouts.app')
@if(Session::has('mensaje'))
{{ Session::get('mensaje')}}
@endif
@section('content')
<div class="container">
<div class="row justify-content-center">
<h1>Lista de Eventos</h1>
    <a href="{{ url('eventos/create') }}" class="btn btn-primary">
            Crear
    </a>
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nombre</th>
                <th scope="col">fecha de Publicacion</th>
                <th scope="col">fecha de Evento</th>
                <th scope="col">descripcion</th>
                <th scope="col">direccion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($eventos as $evento)
            <tr>
                <th>{{$evento->id}}</th>
                <th>{{$evento->nombre}}</th>
                <th>{{$evento->fechaP}}</th>
                <th>{{$evento->fechaE}}</th>
                <th>{{$evento->descripcion}}</th>
                <th>{{$evento->direccion}}</th>
                <th>
                    <a href="{{ url('eventos/'.$evento->id.'/edit' ) }}" class="btn btn-success">
                        Editar
                    </a>
                
                    <form action="{{ url('eventos/'.$evento->id ) }}" method="post" >
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