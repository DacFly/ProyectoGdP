@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
<H1>Formulario de Creacion de Evento</H1>

<form action="{{ url('/eventos') }}" method="post">
    @csrf
    @include('eventos.form');
</form>
</div>
</div>
@endsection