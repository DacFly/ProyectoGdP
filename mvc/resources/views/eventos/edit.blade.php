@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
<H1>Formulario de Edicion de Eventos</H1>

<form action="{{ url('/eventos/'.$eventos->id) }}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('eventos.form');
</form>
</div>
</div>
@endsection