{{--
    ==== QUÉ ES ====
    Esta es otra "Vista Hija", como `index.blade.php`. Su único propósito es definir el contenido
    para la página "Sobre Nosotros".

    ==== CÓMO FUNCIONA ====
    Funciona exactamente igual que `index.blade.php`:
    1. `@extends('layouts.landing')` para heredar el esqueleto HTML.
    2. `@section(...)` para rellenar los huecos de la plantilla maestra con el título y el contenido de esta página.

    ==== POR QUÉ SE USA ====
    Para crear una nueva página (`/about`) en nuestro sitio de forma rápida y consistente,
    reutilizando toda la estructura ya creada (layout, navbar, etc).
--}}


{{-- 1. Heredamos de la plantilla maestra. Todo el HTML base vendrá de `layouts/landing.blade.php`. --}}
@extends('layouts.landing')


{{-- 2. Definimos el contenido para el `@yield('title')` de la plantilla. Esto aparecerá en la pestaña del navegador. --}}
@section('title', 'Sobre Nosotros')


{{-- 3. Definimos el bloque de contenido principal para el `@yield('content')`. --}}
@section('content')

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
