{{--
    ==== QUÉ ES ====
    La última "Vista Hija" de nuestro ejemplo, para la página de "Contacto".

    ==== CÓMO FUNCIONA ====
    Sigue exactamente el mismo patrón que las demás: hereda el layout y define el contenido.

    ==== POR QUÉ SE USA ====
    Para completar nuestro sitio con una página de contacto, demostrando una vez más lo fácil
    y rápido que es añadir páginas a un proyecto bien estructurado con Blade.
--}}


{{-- 1. Heredamos la estructura completa de nuestra plantilla maestra. --}}
@extends('layouts.landing')


{{-- 2. Asignamos el texto que aparecerá en la pestaña del navegador para esta página. --}}
@section('title', 'Contacto')


{{-- 3. Definimos el contenido principal y único que se inyectará en el @yield('content'). --}}
@section('content')

    {{-- Usamos el componente de encabezado con el título correspondiente a esta página. --}}
    <x-page-header title="Ponte en Contacto">
        {{-- Y un subtítulo que irá al `$slot` del componente. --}}
        Nos encantaría saber de ti.
    </x-page-header>


    {{-- Contenido específico para la página de contacto. --}}
    <div class="main-content">
        <p>
            Este es el final de nuestro ejemplo práctico. ¡Felicidades!
        </p>
        <p>
            Ahora tienes un mini-proyecto funcional que demuestra cómo las directivas de Blade (`extends`, `section`, `yield`, `include`) y los componentes (`x-component`) trabajan en armonía para crear un sitio web limpio, mantenible y escalable.
        </p>
        <div class="alert alert-success">
            {{-- `class="alert alert-success"` es una clase de Bootstrap para mostrar un mensaje destacado con fondo verde. --}}
            <strong>Siguiente paso:</strong> Revisa cada uno de los archivos que hemos creado, lee los comentarios y experimenta cambiando cosas para ver cómo afectan el resultado final.
        </div>
    </div>

{{-- Fin de la sección de contenido. --}}
@endsection
