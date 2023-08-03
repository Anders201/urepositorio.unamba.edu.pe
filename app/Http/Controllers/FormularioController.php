<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formulario;

class FormularioController extends Controller
{
    public function index()
    {
        return view('/frontend/form');
    }

    public function store(Request $request)
    {
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

        //--------------------------------------------
        $name_autorizacion_pdf = $request->file('autorizacion_pdf')->getClientOriginalName();
        $autorizacion_path_pdf = $request->file('autorizacion_pdf')->store('public/autorizaciones');
        $autorizacion_array_pdf = explode('public', $autorizacion_path_pdf);
        
        $name_constancia_pdf = $request->file('constancia_pdf')->getClientOriginalName();
        $constancia_path_pdf = $request->file('constancia_pdf')->store('public/constancias');
        $constancia_array_pdf = explode('public', $constancia_path_pdf);

        $name_tesis_pdf = $request->file('tesis_pdf')->getClientOriginalName();
        $tesis_path_pdf = $request->file('tesis_pdf')->store('public/tesis_pdf');
        $tesis_array_pdf = explode('public', $tesis_path_pdf);

        $name_tesis_doc = $request->file('tesis_doc')->getClientOriginalName();
        $tesis_path_doc = $request->file('tesis_doc')->store('public/tesis_doc');
        $tesis_array_doc = explode('public', $tesis_path_doc);
        //--------------------------------------------

        

        $TyC01 = $request->input('TyC01');
        $TyC02 = $request->input('TyC02');
        $TyC03 = $request->input('TyC03');
        $TyC04 = $request->input('TyC04');

        $observacion = $request->input('observacion');


        $save = new Formulario;

        $save->email = $email;
        $save->apellido = $apellido;
        $save->nombre = $nombre;
        $save->dni = $dni;
        $save->telefono = $telefono;
        $save->escuela = $escuela;
        $save->asesor = $asesor;
        $save->asesor_dni = $asesor_dni;
        $save->asesor_orcit = $asesor_orcit;
        $save->asesor2_dni = $asesor2_dni;
        $save->asesor2_orcit = $asesor2_orcit;

        $save->nombre_proyecto = $nombre_proyecto;
        $save->TyC01 = $TyC01;
        $save->TyC02 = $TyC02;
        $save->TyC03 = $TyC03;
        $save->TyC04 = $TyC04;

        $save->observacion = $observacion;

        $save->name_autorizacion_pdf = $name_autorizacion_pdf;
        $save->autorizacion_path_pdf = 'storage' . $autorizacion_array_pdf[1];

        $save->name_constancia_pdf = $name_constancia_pdf;
        $save->constancia_path_pdf = 'storage' . $constancia_array_pdf[1];

        $save->name_tesis_pdf = $name_tesis_pdf;
        $save->tesis_path_pdf = 'storage' . $tesis_array_pdf[1];

        $save->name_tesis_doc = $name_tesis_doc;
        $save->tesis_path_doc = 'storage' . $tesis_array_doc[1];

        $save->save();

        return view('/frontend/form')->with('status', 'Datos correctamente cargados');
    }
}
