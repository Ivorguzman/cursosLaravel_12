<?php declare(strict_types=1);

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/* Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php'; */



// Vinculando la ruta raíz con el método index del UserController
Route::get('/', [UserController::class, 'index'])->name('user_index');
Route::get('/create', [UserController::class, 'create'])->name('user_create');

