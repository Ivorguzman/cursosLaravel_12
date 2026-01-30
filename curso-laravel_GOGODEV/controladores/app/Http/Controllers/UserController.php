<?php declare(strict_types=1); 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
       public function index()
        {
          dd('Hola mundo Dede el metodo index en UserController.php'); // Averiguar  el uso de dd()
        }
}
