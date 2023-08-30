<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vacunacionController extends Controller
{
    public function vacunacion(){
        return view('articulos.vacunacion');
    }
}
