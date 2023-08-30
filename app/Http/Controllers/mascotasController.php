<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class mascotasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function mascotas()
    {
        $mascotas = Pet::all();
        
        return view('macotas',['macotas'=>$mascotas]);
    }

}
