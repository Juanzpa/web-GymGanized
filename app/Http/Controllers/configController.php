<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Storage; 
use Illuminate\Http\UploadedFile;

class configController extends Controller
{
    public function userconfig() 
    {
        $user= Auth::user();
        return view('auth.config', compact('user'));
    }
    public function actualizar(Request $request)
    {
        $request->validate([
            'file'=>'image|max:1024'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $user = Auth::user();
            $user->url = $filename;
            $user->save();
            Storage::disk('public')->putFileAs('images', $file, $filename);
        }
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->save();

        return redirect('home')->with('mensaje', 'Perfil actualizado correctamente.');
    }

}
