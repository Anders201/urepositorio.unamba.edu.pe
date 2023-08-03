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
        $data=1;
        $pdf = Pdf::loadView('backend.pages.procesos.generarpdf',compact('data'));
        return $pdf->stream('invoice.pdf');
    }
    public function ver()
    {
        $constancias = Formulario::where('estado', 'atendido')->get();
        return view('backend/pages/procesos/constancias_realizadas', compact('constancias'));
    }
}
