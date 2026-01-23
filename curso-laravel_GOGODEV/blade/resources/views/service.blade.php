{{--
    ==== QUÉ ES ====
    Otra "Vista Hija" para la página de "Servicios".

    ==== CÓMO FUNCIONA ====
    Idéntico a las vistas anteriores: hereda de `layouts.landing` y rellena las secciones `title` y `content`.

    ==== POR QUÉ SE USA ====
    Para añadir la sección de "Servicios" a nuestro sitio web manteniendo una estructura y diseño consistentes
    sin esfuerzo y sin duplicar código.
--}}


{{-- 1. Heredamos la plantilla. Toda la estructura HTML se carga desde aquí. --}}
@extends('layouts.landing')


{{-- 2. Establecemos el título único para esta página. --}}
@section('title', 'Nuestros Servicios')





{{-- 3. Abrimos el bloque para definir el contenido principal y único de esta página. --}}
@section('content')

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
                    @slot('title')
                        
                    @endslot
                    @slot('content')
                       
                    @endslot
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
