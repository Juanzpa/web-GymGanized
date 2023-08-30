<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adaptarseController extends Controller
{
    public function adaptarse(){
        return view('articulos.adaptarse');
    }
}
