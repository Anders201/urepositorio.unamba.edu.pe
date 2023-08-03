<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Formulario;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;



class ConstanciasController extends Controller
{
    public function listaConstancias()
    {
        $constancias = Formulario::where('estado', 'atendido')->get();
        return view('backend/pages/procesos/generar_constancia', compact('constancias'));
    }
    public function generarpdf(Formulario $formulario)
    {
        // Contar el número de registros del formulario con el estado atendido
        $numeroConstancia = Formulario::where('estado', 'atendido')->count();
        // Sumarle 1 al número de registros
        $numeroConstancia = $numeroConstancia + 1;
        // Traer el año actual
        $anio = date('Y');

        // Traer al nombre de la persona que solicita la constancia
        $nombre_egresado = $formulario->nombre;
        // Traer el apellido de la persona que solicita la constancia
        $apellido_egresado = $formulario->apellido;

        // Juntar el nombre y el apellido
        $nombre_egresado = $nombre_egresado . ' ' . $apellido_egresado;

        // Poner en mayúsculas el nombre y el apellido incluido la letra ñ
        $nombre_egresado = mb_strtoupper($nombre_egresado, 'UTF-8');
        // $nombre_egresado = strtoupper($nombre_egresado);

        // traer el campo nombre tesis 
        $nombre_proyecto = $formulario->nombre_proyecto;

        // Traer el handle
        $handle = $formulario->handle;

        // Traer el día de la fecha actual en letras
        $days = array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');
        $day = $days[date('N')];

        // Traer el día en número
        $day_number = date('d');

        // Traer el mes en letras
        $months = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre', 'Noviembre','Diciembre');
        $month = $months[date('n')-1];

        // Traer el año actual
        $year = date('Y');

        
        $banner_header = '/backend/assets/images/certificado-banner/banner-header.png';
        $banner_footer = '/backend/assets/images/certificado-banner/banner-footer.png';

        $pdf = Pdf::loadView('backend.pages.procesos.generarpdf',compact('banner_header','numeroConstancia', 'anio', 'nombre_egresado', 'nombre_proyecto', 'handle', 'day', 'day_number', 'month', 'year', 'banner_footer'))->setPaper('a4', 'landscape');
        return $pdf->stream('constancia_'. $numeroConstancia . '.pdf');
    }

    public function ver()
    {
        $constancias = Formulario::where('estado', 'atendido')->get();
        return view('backend/pages/procesos/constancias_realizadas', compact('constancias'));
    }
}
