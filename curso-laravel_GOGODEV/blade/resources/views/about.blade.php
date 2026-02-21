{{--
    ==== QUÉ ES ====
    Esta es una "Vista Hija". Su propósito es definir el contenido único de una página específica (en este caso, la página de about).
    No contiene la estructura HTML completa (<html>, <head>, etc.) porque la "hereda" de una plantilla maestra.

    ==== CÓMO FUNCIONA ====
     1. `@extends('layouts.landing')` le dice a Blade: "Usa `resources/views/layouts/landing.blade.php` como mi esqueleto".
        OjO==> ESTA DEBE SER SIEMPRE LA PRIMERA LÍNEA DE UNA VISTA HIJA.
     2. `@section('name', 'value')` o `@section('name') ... @endsection` se usa para "rellenar" los "huecos" indicados con en la pagina maestra landig.blade.php (`@yield`) osea 
    que fueron definidos en la plantilla maestra descrita anteriormente.

    ==== POR QUÉ SE USA ====
    Para mantener el contenido de la página separado de la estructura del sitio. Esto hace que el desarrollo
    sea mucho más limpio y organizado. Solo te concentras en el contenido específico de esta página.
--}}


{{-- 1. Heredamos de la plantilla maestra. Todo el HTML base vendrá de `layouts/landing.blade.php`. --}}
@extends('layouts.landing')


{{-- 2. Definimos el contenido para el `@yield('title')` de la plantilla. Esto aparecerá en la pestaña del navegador. --}}
@section('title', 'Sobre Nosotros')


{{-- 3. Definimos el bloque de contenido principal para el `@yield('content')`. --}}
@section('main')

    {{--
        Reutilizamos nuestro componente de encabezado, pero le pasamos un título diferente.
        Así, mantenemos un estilo consistente en todos los encabezados de las páginas.
        `title="Sobre GogoDev"`: Este valor se pasará a la variable `$title` del componente.
    --}}
    <x-page-header title="Sobre GogoDev">
        {{-- Este texto se pasará a la variable `$slot` del componente. --}}
        Conoce más sobre nuestra historia y nuestra misión.
    </x-page-header>

    {{-- Contenido específico y único de la página "Sobre Nosotros". --}}
    <div class="main-content">
        <p>
            Somos una empresa ficticia creada con el único propósito de aprender a usar las directivas de Blade en Laravel.
        </p>
        <p>
            Como puedes ver, crear esta nueva página fue muy fácil. Solo tuvimos que:
        </p>
        <ol>
            {{-- `<li>` es un elemento de una lista ordenada (`<ol>`). --}}
            <li>Crear una ruta en `web.php`.</li>
            <li>Crear este archivo (`about.blade.php`).</li>
            <li>Usar `extends` y `section` para inyectar el contenido nuevo.</li>
        </ol>
    </div>

{{-- Final del bloque de la sección 'content'. --}}
@endsection
