<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formulario;

class TramiteController extends Controller
{
    public function index(){
        $tramite = Formulario::all();

        return view('backend/pages/tramites/tramites_pendientes', ['tramite'=>$tramite]);
    }
    public function estado_tramite(){
        $tramite = Formulario::all();

        return view('frontend/state', ['tramite'=>$tramite]);
    }
}

