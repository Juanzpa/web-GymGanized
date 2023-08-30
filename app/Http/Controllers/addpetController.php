<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class addpetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('auth.formaddpet');
    }



    public function store(Request $request){

        
        $this->validate($request, [
            'nombre' => 'required|max:15',
            'tipo' => 'required',
            'raza' => 'required',
            'edad' => 'required',
            'genero' => 'required',
            'descripcion' => 'required',
            'foto' => 'image|max:1024'
        ]);
    
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoname = time() . '.' . $foto->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('mascotas', $foto, $fotoname);
            $pet = new Pet([
                'nombre' => $request->input('nombre'),
                'tipo' => $request->input('tipo'),
                'raza' => $request->input('raza'),
                'edad' => $request->input('edad'),
                'genero' => $request->input('genero'),
                'descripcion' => $request->input('descripcion'),
                'foto' => $fotoname
            ]);
            $pet->save();
        } else {
            Pet::create([
                'nombre' => $request->input('nombre'),
                'tipo' => $request->input('tipo'),
                'raza' => $request->input('raza'),
                'edad' => $request->input('edad'),
                'genero' => $request->input('genero'),
                'descripcion' => $request->input('descripcion')
            ]);
        }
        return redirect('muro');


    }


}
