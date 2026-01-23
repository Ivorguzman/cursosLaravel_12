@extends('layouts.vistaPadre')


@section('contenidoPrincipal')
	<div class="card" style="width: 65rem;  margin: 50px  5px 50px 50px ;  background-color: rgb(197, 221, 226) ;">
    <img src="{{ asset('assets/img/logo.png') }}" width="50" alt="Logo">
    <div class="card-body">
        <h3> 'Título de la tarjeta en la variable $title'</h3>
        <p>'Un texto de ejemplo rápido para ampliar el título de la tarjeta y constituir la mayor parte del contenido de la tarjeta en la variable $content' 
        </p>
        <a href="#" class="btn btn-primary">Ir a algún lugar</a>
    </div>
</div>
@endsection
