<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $correo;
    public $telefono;
    public $mensaje;

    public function __construct($nombre, $correo, $telefono, $mensaje)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->mensaje = $mensaje;
    }

    public function build()
    {
        return $this->subject('Nuevo mensaje de contacto')
                    ->view('mail.contacto')
                    ->with([
                        'nombre' => $this->nombre,
                        'correo' => $this->correo,
                        'telefono' => $this->telefono,
                        'mensaje' => $this->mensaje,
                    ]);
    }
}