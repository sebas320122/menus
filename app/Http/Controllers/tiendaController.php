<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tiendaController extends Controller
{
    //Desplegar view tienda
    public function index(){
        return view('menu.tienda');
    }
}
