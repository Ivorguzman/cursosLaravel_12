{{--
    1. @extends: Le dice a Blade que esta vista "hereda" la estructura de nuestro layout principal.
    La ruta usa notación de puntos y no incluye la extensión .blade.php.
--}}
@extends('layouts.note.layout-index')

 
{{--
    2. @section('title', ...): Define el contenido para la sección 'title'.
    Como es una línea corta, podemos pasar el contenido como segundo argumento.
--}}
@section('title', 'Crear Nueva Nota')


{{--
    3. @push('styles'): "Empuja" este bloque de código a la pila (stack) 'styles' en el layout.
    Así es como añadimos CSS específico para esta página sin ensuciar el layout.
--}}
@push('styles')
    <style>
        .form-create {
            /* Estilos del formulario */
            max-width: 300px;
            margin: 0 auto;
            padding: 16px;
            border: 1px solid #2403fe;
            border-radius: 8px;
            background: #a8e4f4;
        }

        .label-form {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: rgb(13, 77, 106);
        }

        .color {
            color: #2403fe;
        }
    </style>
@endpush


{{--
    4. @section('main'): Define el bloque de contenido principal.
    Todo lo que esté aquí adentro se insertará donde este @yield('main') en el layout.
--}}
@section('mainContent')
    <h1 class="color">Formulario Crear</h1>
    <form class="form-create" method="POST">
        <label class="label-form" for="title">Título:</label>
        <input type="text" id="title" name="title">
        <br>
        <br>
        <label class="label-form " for="content">Contenido:</label>
        <textarea id="content" name="content"></textarea>
        <br>
        <br>
        <button class="color" type="submit">Crear Nota</button>
    @endsection
