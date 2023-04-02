<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicioController extends Controller
{
    //Desplegar view inicio
    public function index(){
        return view('menu.inicio');
    }
}
