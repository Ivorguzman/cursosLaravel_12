<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use \Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class UserController extends Controller
    {
    public function index()
        {
        // Recuperar todos los datos de Usuarios
        // por medio de ORM Eloquent
        $users = User::all();
        print_r($users->toArray()); // Imprime los datos en formato de arreglo para depuración
        return view('user.index', compact('users'));
        } 
    }
