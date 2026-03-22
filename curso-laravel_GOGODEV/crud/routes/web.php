<?php declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', [NoteController::class, 'index'])->name('name_note.index');

Route::get('/note/create', [NoteController::class, 'create'])->name('name_note.create');

Route::post('/note/store', [NoteController::class, 'store'])->name('name_note.store');

// Muestra el formulario de edición. Debe ser GET.
Route::PATCH('/note/edit/{note}', [NoteController::class, 'edit'])->name('name_note.edit');

// Procesa la actualización. El formulario enviará aquí la petición PATCH.
Route::POST('/note/update/{note}', [NoteController::class, 'update'])->name('name_note.update');

Route::get('/note/show/{note}', [NoteController::class, 'show'])->name('name_note.show');

Route::delete('/note/delete/{note}', [NoteController::class, 'destroy'])->name('name_note.destroy');
