<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cuidadosController extends Controller
{
    public function cuidados(){
        return view('articulos.cuidados');
    }
}
