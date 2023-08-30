<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function mostrarFormulario()
    {
        return view('contacto');
    }

    public function enviarCorreo(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'mensaje' => 'required|string',
        ]);

        $nombre = $request->input('nombre');
        $correo = $request->input('correo');
        $telefono = $request->input('telefono');
        $mensaje = $request->input('mensaje');

        Mail::to('clickpet.oficial2023@gmail.com')->send(new ContactoMail($nombre, $correo, $telefono, $mensaje));

        return redirect()->back()->with('mensaje', 'Gracias por contactarnos. Hemos recibido tu mensaje y te responderemos lo antes posible.');

        return view('mascotas');
    }
}