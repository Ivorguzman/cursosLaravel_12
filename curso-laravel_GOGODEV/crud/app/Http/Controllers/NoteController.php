<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Routing\Controller;
// Para controlar la entidad Note-php
class NoteController extends Controller
    {

    public function index()
        {
        $notes = Note::all();
        return view('note.index', compact('notes'));
        }

    public function create()
        {
        return view('note.create');
        }
    }
