{{--
    ==== QUÉ ES ====
    Esto es una "Vista Parcial" (Partial). Es simplemente un trozo de una vista de Blade que se ha extraído
    a su propio archivo para poder ser reutilizado. No tiene ninguna lógica especial por sí mismo.

    ==== CÓMO FUNCIONA ====
    Este archivo es "tonto". Simplemente contiene HTML. La magia ocurre cuando otra vista
    lo llama usando la directiva `@include('partials.navbar')`. Al hacerlo, Blade copia y pega
    todo el contenido de este archivo en el lugar donde se hizo el `@include`.

    ==== POR QUÉ SE USA ====
    Para reutilizar fragmentos de UI que aparecen en múltiples páginas, como la navegación, el pie de página,
    una barra lateral, etc. Si necesitas añadir un nuevo enlace al menú, solo editas este archivo
    y el cambio se aplica a todas las páginas que lo incluyan. Mantiene el código limpio y DRY (Don't Repeat Yourself).
--}}


{{--
    `<nav>` es una etiqueta semántica de HTML5 que se usa para definir un bloque de enlaces de navegación.
    `class` es un atributo HTML para aplicar estilos. Aquí usamos clases de Bootstrap para crear una barra de navegación.
        - `navbar`: Estilo base de la barra de navegación.
        - `navbar-expand-lg`: Hace que la barra se expanda (muestre los enlaces) en pantallas grandes (lg) y se colapse en un menú de hamburguesa en pantallas pequeñas.
        - `navbar-dark`: Define que el texto de la barra será de color claro (para fondos oscuros).
        - `bg-dark`: Define un color de fondo oscuro para la barra.
--}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    {{--
        `<a>` es una etiqueta de anclaje (un enlace).
        `class="navbar-brand"` se usa para el logo o nombre principal de tu sitio.
        `href` es el atributo que especifica la URL de destino del enlace.
        `{{ route('home') }}`:
            - `{{ ... }}`: Sintaxis de Blade para imprimir una variable de forma segura.
            - `route('home')`: Es una función "helper" de Laravel que genera una URL a partir del NOMBRE de una ruta.
            - En `web.php`, nombramos la ruta principal como `->name('home')`. Este helper busca esa ruta y genera la URL correcta (en este caso, "/").
            - POR QUÉ: Es mucho mejor que escribir `href="/"`. Si en el futuro cambias la URL de `/` a `/inicio`, no tienes que cambiar ningún `href` en tus vistas, solo cambias la definición en `web.php` y `route('home')` generará automáticamente la nueva URL.
    --}}
    <a class="navbar-brand" href="{{ route('home') }}">GogoDev</a>

    {{--
        Botón que aparece en pantallas pequeñas para mostrar/ocultar el menú (el menú de "hamburguesa").
        `data-bs-toggle="collapse"` y `data-bs-target="#navbarNav"` son atributos de JavaScript de Bootstrap
        que le dicen al botón qué elemento debe mostrar/ocultar cuando se le hace clic.
    --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>

    {{--
        `<div>` que contiene la lista de enlaces de navegación.
        `collapse navbar-collapse` son clases de Bootstrap que se encargan de la magia de mostrar/ocultar el menú.
        `id="navbarNav"` es el identificador al que apunta el botón de hamburguesa.
    --}}
    <div class="collapse navbar-collapse" id="navbarNav">
        {{--
            `<ul>` es una lista no ordenada.
            `class="navbar-nav"` es una clase de Bootstrap que estiliza la lista para que funcione dentro de la barra de navegación.
        --}}
        <ul class="navbar-nav">
            {{-- `<li>` es un elemento de la lista. `class="nav-item"` le da estilo. --}}
            <li class="nav-item">
                {{-- Generamos el enlace para la ruta nombrada "about" --}}
                <a class="nav-link" href="{{ route('about') }}">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
                {{-- Generamos el enlace para la ruta nombrada "service" --}}
                <a class="nav-link" href="{{ route('service') }}">Servicios</a>
            </li>
            <li class="nav-item">
                {{-- Generamos el enlace para la ruta nombrada "contact" --}}
                <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
            </li>
        </ul>
    </div>
</nav>
