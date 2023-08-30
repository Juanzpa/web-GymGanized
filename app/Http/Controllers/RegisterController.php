<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index() 
    {
        return view('auth.register');
    }

    public function store(Request $request){
        //dd($request);
        //dd($request->get('name'));

        //Validacion
        $this->validate($request, [
            'name' => 'required|min:10|max:40',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6',
        ]);

        //modificar request
        $request->request->add(['username'=>Str::slug($request->username)]);

        User::create([
            'name' => $request->name,
            'username'=> $request->username,
            'email' => $request->email,
            //esto sirve para poder inscriptar la contraseña
            'password' => Hash::make($request->password),
        ]);

        //Autenticar un usuario
        auth()->attempt([
            'name' => $request->name,
            'password' => $request->password

        ]);

        //redireccionar

        return redirect('login');
    }
}
