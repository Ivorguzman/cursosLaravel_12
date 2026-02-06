<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class InicioController extends Controller
{
   public  function index(Request $requesParam): \Illuminate\View\View
    {    
        $arreglo= ['nombre' => $requesParam->query('nombre', 'Sin nombre')];
        return view('vista1')->with($arreglo);
    }
}
