<?php

// ==== QUÉ ES ====
// Este archivo (web.php) es el mapa de rutas de tu aplicación para la web.
// Aquí le dices a Laravel qué debe hacer cuando un usuario visita una URL específica (por ejemplo, www.misitio.com/contacto).
// Usa la clase `Route` para definir estas correspondencias entre URLs y acciones (como mostrar una vista).

// ==== CÓMO FUNCIONA ====
// Laravel lee este archivo para registrar todas las rutas web. Cuando llega una petición del navegador,
// busca la URL en este "mapa" y ejecuta el código asociado (la función o el controlador).

// ==== POR QUÉ SE USA ====
// Para centralizar y organizar todas las URLs de la aplicación en un solo lugar,
// haciendo el código más mantenible y legible. Separa la lógica de las URLs de la lógica de la presentación (vistas).

// `use` es una palabra clave de PHP para importar clases y poder usarlas sin escribir su nombre completo.
// `Illuminate\Support\Facades\Route` es la clase principal de Laravel para la gestión de rutas.
use Illuminate\Support\Facades\Route;

// ==== RUTA PRINCIPAL ("/") ====
// `Route` es la fachada (una forma simple de acceder a una clase compleja).
// `::get` es un método estático que define que esta ruta solo responderá a peticiones HTTP GET.
// `'/'` es la URL. El slash representa la raíz de tu sitio (la página de inicio).
// `function () { ... }` es una función anónima (o "closure") que contiene el código que se ejecutará.
// `name('home')` le da un nombre único a esta ruta. Es una buena práctica para poder referenciarla fácilmente en las vistas sin tener que escribir la URL completa.
Route::get('/', function () {

    // `return` es la instrucción que devuelve una respuesta al navegador.
    // `view('index')` es una función helper de Laravel que busca, renderiza (procesa) y devuelve una vista de Blade.
    // `'index'` se corresponde con el archivo `resources/views/index.blade.php`. Laravel añade el `.blade.php` automáticamente.
    return view('index');

})->name('home'); // El nombre de la ruta para la página de inicio.


// ==== RUTA "/about" ====
// Similar a la anterior, pero para la URL "/about".
Route::get('/about', function () {
    return view('about');
})->name('about'); // El nombre de la ruta para la página "Sobre Nosotros".


// ==== RUTA "/contact" ====
// Similar a la anterior, pero para la URL "/contact".
Route::get('/contact', function () {
    return view('contact');
})->name('contact'); // El nombre de la ruta para la página "Contacto".


// ==== RUTA "/service" ====
// Similar a la anterior, pero para la URL "/service".
Route::get('/service', function () {
    return view('service');
})->name('service'); // El nombre de la ruta para la página "Servicios".