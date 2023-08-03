<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RepositorioMail; // Asegúrate de importar la clase de correo que crearás

class EmailController extends Controller
{
    public function enviarCorreo(Request $request)
    {
        $correo = $request->input('correo');
        $otrosDatos = [
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'observacion' => $request->input('observacion'),
            'estado' => $request->input('estado'),
            'nombre_proyecto' => $request->input('nombre_proyecto'),
        ]

        Mail::to($correo)->send(new TuCorreo($nombre, $otrosDatos));


        // Realizar otras acciones o redireccionar según tus necesidades
        return redirect()->back()->with('success', 'Correo enviado exitosamente.');
    }
}
