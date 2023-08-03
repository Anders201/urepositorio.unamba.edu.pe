<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formulario;
use App\Mail\RepositorioMail;

class ActualizarController extends Controller
{
    public function index_tabla()
    {
        return view('/backend/pages/tramites/tramites_pendientes');
    }

    public function actualizar(Request $request)
    {
        $formulario = Formulario::find($request->id);

        $formulario->handle = $request->handle;
        $formulario->puntuacion = $request->puntuacion;
        $formulario->observacion = $request->observacion;
        $formulario->estado = $request->estado;
        
        
        $formulario->save();

     
        return redirect()->route('admin.tramites_pendientes');
        
    }
};
