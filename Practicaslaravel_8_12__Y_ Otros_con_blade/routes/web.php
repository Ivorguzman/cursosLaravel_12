<?php declare(strict_types=1); 

use App\Http\Controllers\InicioController;
use App\Http\Controllers\InicioController1;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;



//todo   === INICIO Practicas Ivor cl8 === 

//& cl8
Route::get(uri: '/array', action: function (): array {
    $array = array(
        'enero'     => 'mes 1',
        'diciembre' => 'mes 12',
    );
    return $array;
    });

 


//& cl8
Route::get(uri: '/arreglo', action: function (): array {
    $arreglo = array('enero', 'diciembre');
    return $arreglo;
    });




//^ cl8
Route::get(uri: '/arreglo_1', action: function (): array {
    $arreglo_1 = ['lunes', 'viernes'];
    return $arreglo_1;
    });




//^ cl8
Route::get(uri: '/arreglo_2', action: function (): array {
    $arreglo_2 = [
        'Clave'       => 'Valor',
        'descripción' => 'Producto 1',
    ];
    return $arreglo_2;
    });


//^ cl8
Route::get(uri: '/menu', action: function () {
    return view('vistaHija_menu');
    });


//^ cl8
Route::get(uri: '/card', action: function () {
    return view('vistaHija_card');
    });

//^ cl8
Route::get(uri: '/menu-tarjeta', action: function () {
    return view('menu-tarjeta');
    });





//? Ejemplo con paramertro cl8
Route::get(uri: '/parametro/{el_parametro}', action: function ($el_parametro): string {
    return "<h1> Este es el valor del parametro: $el_parametro </h1>"; // Templete String
    });




//? Ejemplo con parametro por default cl8
Route::get(uri: '/cliente/{elCliente?}', action: function ($cliente = 'Cliente Nuevo'): string {

    return "<h1> Nombre del cliente: $cliente </h1>";
    });




//? Redirecccion de ruta  cl8
Route::get('/ruta1', function (): string {
    return '<h1>Esta es la ruta Nº1</h1>';
    })->name(name: 'rutaNumero1');

//^  con arrow function (fn()=>...) cl8
Route::get('/ruta2', fn(): RedirectResponse => redirect()->route('rutaNumero1'));




//? Restrincion ingreso de datos cl8
//  Solo  Caractere comodin para numericos
//^  con arrow function (fn()=>...) cl8
Route::get('numero/{elIdUsuario}', fn($elIdUsuario): string => "<h1>el usuario es: $elIdUsuario</h1>")->where('elIdUsuario', '[0-9]+');



//? Solo  Caractere comodin para caracteres cl8
Route::get('caracter/{elcaracter}', function ($elcaracter): string {
    return "<h1>Nombre de usuario: $elcaracter</h1>";
    })->where('elcaracter', '[a-zA-Z]+');



//? Trabajo con las vistas de lavarel sin controlladores cl8
//& Referenciando una vista 
/* Route::get('/', function () {
    return view('vista1');
    })->name('home');
 */

// con arrow function
/* Route::get('/', fn() => view('vista1'))->name('home'); */



//? pasar datos  a una vista por medio de un array cl8
Route::get('vista3PasarDatos', function () {

    return view('vista3PasarDatos', [
        'nombre' => 'Alexander',
        'edad'   => 48,
    ]);

    })->name('vista3PasarDatos');



//? Pasar datos a una vista Creamos el array con funcion compact() de Php  cl8
Route::get(uri: '/vista2PasarDatos', action: function () {
    $nombre = 'Ivor';
    $edad = 58;
    return view('vista2PasarDatos', compact('nombre', 'edad'));// 
    })->name('vista2PasarDatos');



//? Verifica SI una vista existe o No en carpeta resouce/views cl8
// Invocar las vistas
if (View::exists('vista2PasarDatos')) {
    Route::get('/', function () {
        $nombre = 'Ivor';
        $edad = 58;
        return view('vista2PasarDatos', compact('nombre', 'edad'));
        })->name('vista2PasarDatos');
    } else {
    Route::get('/', function () {
        return '<h1> La vista no existe </h1>';
        })->name('vista1');
    }



//? Paso de vista  con controlador cl8
// Route::get('/', 'app\Http\Controllers\InicioController@index');//^ Forma antigua usada en laravel 8 No Recomendada

//Route::get('/', [InicioController1::class, 'index']);

Route::get('/EndPointNombre', [InicioController::class, 'index']);
//todo === Fin practica de Ivor cl8 ===

//^ ==================================================================================================



//todo   === INICIO Practicas Ivor cl12 ===

 
// ? Pasar paramtro en rutas con expresiones regulares cl12
//& paso de variables
Route::get('cursos/{curso} {version}', function ($curso, $version): string {
    return "<h1>Realizando curso De $curso de la $version</h1>";
    });




//? paso de variables con variable por defaul(?) cl12
Route::get('taller/{curso}-{version?}', function ($curso, $version = "ultima version"): string {
    return "<h1>Realizando taller De $curso de la $version</h1>";
    });

//^  con arrow function (fn()=>...)
Route::get('taller2/{curso}-{version?}', fn($curso, $version = 'ultima version') => "<h1>realizando CURSO de $curso de la VERSION $version </h1>");




//? PROTEGERRUTA CON EXPRESIONES REGULARES cl12
//& INGRESO  DE SOLO TEXTO O NUMEROS
Route::get('protegido/{curso}/{version?}', fn($curso, $version = 'version año 2026') => "<h1>realizando APRENDIZAJE de $curso la Ultima VERSION: $version  </h1>")->where(
    ["curso" => "[A-za-z]+", "version" => "[0-9]+"],
);




//? PROTEGERRUTA CON FUNCIONES DE LARAVEL  cl12
Route::get('protegido2/{curso}/{version?}', fn($curso, $version = 'version año 2026') => "<h1>realizando APRENDIZAJE de $curso la Ultima VERSION: $version  </h1>")
    ->whereAlpha('curso')
    ->whereNumber('version');




Route::get('protegido3/{curso}/{version?}', fn($curso, $version = 'version año 2026') => "<h1>realizando APRENDIZAJE de $curso la Ultima VERSION: $version  </h1>")
    ->whereAlphaNumeric('curso')
    ->whereNumber('version');

 
 
//? Utilizando  public function boot() de AppServiceProvider.php  para las validaciones de las rutas web cl12
//Route::pattern('curso', '[A-Za-z]+');
//Route::pattern('version', '[0-9]+');
Route::get('protegido4/{curso}/{version?}', fn($curso, $version = 'version año 2026') => "<h1>realizando APRENDIZAJE de $curso la Ultima VERSION: $version  </h1>");


 















//todo === Fin practica de Ivor cl12 ===













//^ === codigo Original temporalmnete inactiva para pruebas ===
/* Route::get('/', function () {
    return view('welcome');
    })->name('home'); 

Route::get('/', function () {
    return view('welcome');
    });*/

//^ === codigo Original temporalmnete inactiva para pruebas ===   





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
        })->name('dashboard');
    });

