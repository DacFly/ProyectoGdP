@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
<H1>Formulario de Creacion de Usuario</H1>

<form action="{{ url('/usuarios') }}" method="post">
    @csrf
    @include('usuarios.form');
</form>
</div>
</div>
@endsection