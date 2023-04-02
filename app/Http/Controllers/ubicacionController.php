<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ubicacionController extends Controller
{
    //Desplegar view ubicacion
    public function index(){
        return view('menu.ubicacion');
    }
}
