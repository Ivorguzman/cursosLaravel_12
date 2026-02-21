{{--
    ==== QUÉ ES ====
    Esta es una "Vista Hija". Su propósito es definir el contenido único de una página específica (en este caso, la página de Servicios === landig.blade.php ===).
    No contiene la estructura HTML completa (<html>, <head>, etc.) porque la "hereda" de una plantilla maestra.

    ==== CÓMO FUNCIONA ====
    1. `@extends('layouts.landing')` le dice a Blade: "Usa `resources/views/layouts/landing.blade.php` como mi esqueleto, plantilla, layouts, etc.".
        OjO==> ESTA DEBE SER SIEMPRE LA PRIMERA LÍNEA DE UNA VISTA HIJA.
    2. `@section('name', 'value')` o `@section('name') ... @endsection` se usa para "rellenar" los "huecos" indicados con en la pagina maestra landig.blade.php (`@yield`) osea 
       que fueron definidos en la plantilla maestra descrita anteriormente.

    ==== POR QUÉ SE USA ====
    Para mantener el contenido de la página separado de la estructura del sitio. Esto hace que el desarrollo
    sea mucho más limpio y organizado. Solo te concentras en el contenido específico de esta página.
--}}

{{-- 1. Heredamos la plantilla. Toda la estructura HTML se carga desde aquí. --}}
@extends('layouts.landing')


{{-- 2. Establecemos el título único para esta página. --}}
@section('title', 'Nuestros Servicios')





{{-- 3. Abrimos el bloque para definir el contenido principal y único de esta página. --}}
@section('main')

    {{--
        Usamos una vez más nuestro componente, demostrando su reusabilidad.
        Le pasamos el título específico para esta página.
    --}}
    <x-page-header title="Nuestros Servicios">
        {{-- El subtítulo que se inyectará en el `$slot` del componente. --}}
        Ofrecemos soluciones de aprendizaje de alta calidad.
    </x-page-header>



    {{-- Contenido específico de la página de servicios. --}}
    <div class="main-content">
        <p>
            Nuestro principal servicio es la enseñanza de Laravel y su motor de plantillas Blade.
        </p>

        {{--
            `<ul>` es una lista no ordenada.
            `class="list-group"` es una clase de Bootstrap que convierte una lista normal en una lista con un diseño más bonito.
            `class="list-group-item"` se aplica a cada elemento de la lista.
        --}}
        <ul class="list-group">
            <li class="list-group-item">Explicaciones detalladas de directivas Blade.</li>
            <li class="list-group-item">Creación de ejemplos prácticos y comentados.</li>
            <li class="list-group-item">Demostración de herencia de plantillas.</li>
            <li class="list-group-item">Uso de componentes reutilizables.</li>
            <li class="list-group-item">
                @component('components.card')
                   {{--  @slot('titulo')
                    @endslot --}}
                @endcomponent
            </li>
        </ul>
    </div>
    {{-- Fin de la sección 'content'. --}}
@endsection
{{--
        También podríamos usar nuestro componente `card` aquí para destacar algún servicio especial.
        Por ejemplo, un servicio premium.
    --}}
