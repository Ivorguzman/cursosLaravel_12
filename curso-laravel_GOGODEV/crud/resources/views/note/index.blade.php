@extends('layouts.note.layout-index')


@section('title', 'Página Index')


@section('main')
    <h1>Hola Mundo laravel Index</h1>
    <ul>
        <li>
            @forelse ($notes as $note)
        <li>{{ $note->title }}</li>
    @empty
        <p>No hay notas disponibles</p>
        @endforelse
        </li>
    </ul>
@endsection
