<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class enfermoController extends Controller
{
    public function enfermo(){
        return view('articulos.enfermo');
    }
}
