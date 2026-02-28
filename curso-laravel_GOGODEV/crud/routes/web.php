<?php declare(strict_types=1);
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', [NoteController::class, 'index'])->name('name_note.index');

Route::get('/note', [NoteController::class, 'index'])->name('name_note.index');

Route::get('/note/create', [NoteController::class, 'create'])->name('name_note.create');

Route::get('/note/edit/{note}', [NoteController::class, 'edit'])->name('name_note.edit');

Route::delete('/note/delete/{note}', [NoteController::class, 'destroy'])->name('name_note.destroy');

Route::post('/note/store', [NoteController::class, 'store'])->name('name_note.store');
