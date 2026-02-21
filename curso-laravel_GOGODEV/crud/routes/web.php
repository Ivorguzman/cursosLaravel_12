<?php declare(strict_types=1);
/* Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php' */;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;


Route::get('/note', [NoteController::class, 'index'])->name('name_note.index');


Route::get('/note/create', [NoteController::class, 'create'])->name('name_note.create');







Route::post('/note', [NoteController::class, 'store'])->name('name_note.store');

Route::get('/note/{note}', [NoteController::class, 'show'])->name('name_note.show');

Route::get('/note/{note}/edit', [NoteController::class, 'edit'])->name('name_note.edit');

Route::put('/note/{note}', [NoteController::class, 'update'])->name('name_note.update');

Route::delete('/note/{note}', [NoteController::class, 'destroy'])->name('name_note.destroy');
