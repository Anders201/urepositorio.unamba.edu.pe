<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formulario;

class CompletarController extends Controller
{
    public function completar(Request $request)
    {
        $id = $request->input('id');
        $email = $request->input('email');
        $apellido = $request->input('apellido');
        $nombre = $request->input('nombre');
        $telefono = $request->input('telefono');
        $escuela = $request->input('escuela');
        $nombre_proyecto = $request->input('nombre_proyecto');
        $name_tesis_pdf = $request->input('name_tesis_pdf');
        $tesis_path_pdf = $request->input('tesis_path_pdf');
        $handle = $request->input('handle');
        $puntuacion = $request->input('puntuacion');
        $estado = $request->input('estado');
        $observacion = $request->input('observacion');
        
        $datos_actualizar = [
            'id' => $id,
            'email' => $email,
            'apellido' => $apellido,
            'nombre' => $nombre,
            'telefono' => $telefono,
            'escuela' => $escuela,
            'nombre_proyecto' => $nombre_proyecto,
            'name_tesis_pdf' => $name_tesis_pdf,
            'tesis_path_pdf' => $tesis_path_pdf,
            'handle' => $handle,
            'puntuacion' => $puntuacion,
            'estado' => $estado,
            'observacion' => $observacion
        ];
        

        // Puedes pasar los datos a la vista para mostrarlos
        return view('backend/pages/tramites/completar_datos', ['datos_actualizar' => $datos_actualizar]);
    }

    

    public function info_tramite(Request $request)
    {
        $id = $request->input('id');
        $email = $request->input('email');
        $apellido = $request->input('apellido');
        $nombre = $request->input('nombre');
        $dni = $request->input('dni');
        $telefono = $request->input('telefono');
        $escuela = $request->input('escuela');
        $asesor = $request->input('asesor');
        $asesor_dni = $request->input('asesor_dni');
        $asesor_orcit = $request->input('asesor_orcit');
        $asesor2_dni = $request->input('asesor2_dni');
        $asesor2_orcit = $request->input('asesor2_orcit');
        $nombre_proyecto = $request->input('nombre_proyecto');
        $name_autorizacion_pdf = $request->input('name_autorizacion_pdf');
        $name_constancia_pdf = $request->input('name_constancia_pdf');
        $name_tesis_pdf = $request->input('name_tesis_pdf');
        $name_tesis_doc = $request->input('name_tesis_doc');
        $handle = $request->input('handle');
        $puntuacion = $request->input('puntuacion');
        $TyC01 = $request->input('TyC01');
        $TyC02 = $request->input('TyC02');
        $TyC03 = $request->input('TyC03');
        $TyC04 = $request->input('TyC04');
        $estado = $request->input('estado');
        $observacion = $request->input('observacion');
        
        $tramite_detalle = [
            'id' => $id,
            'email' => $email,
            'apellido' => $apellido,
            'nombre' => $nombre,
            'dni' => $dni,
            'telefono' => $telefono,
            'escuela' => $escuela,
            'asesor' => $asesor,
            'asesor_dni' => $asesor_dni,
            'asesor_orcit' => $asesor_orcit,
            'asesor2_dni' => $asesor2_dni,
            'asesor2_orcit' => $asesor2_orcit,
            'nombre_proyecto' => $nombre_proyecto,
            'name_autorizacion_pdf' => $name_autorizacion_pdf,
            'name_constancia_pdf' => $name_constancia_pdf,
            'name_tesis_pdf' => $name_tesis_pdf,
            'name_tesis_doc' => $name_tesis_doc,
            'handle' => $handle,
            'puntuacion' => $puntuacion,
            'TyC01' => $TyC01,
            'TyC02' => $TyC02,
            'TyC03' => $TyC03,
            'TyC04' => $TyC04,
            'estado' => $estado,
            'observacion' => $observacion
        ];
        

        // Puedes pasar los datos a la vista para mostrarlos
        return view('backend/pages/tramites/detalles_tramite', ['tramite_detalle' => $tramite_detalle]);
    }

}

