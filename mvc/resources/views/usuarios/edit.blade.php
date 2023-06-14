@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
<H1>Formulario de Edicion de Usuario</H1>

<form action="{{ url('/usuarios/'.$usuarios->id) }}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('usuarios.form');
</form>
</div>
</div>
@endsection