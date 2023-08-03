@extends('backend.layouts.master')

@section('title')
    Constancias PDF
@endsection

@section('admin-content')
    <h1>Constancias PDF</h1>
    
    <p>Esto es un ejemplo de constancia en formato PDF.</p>
    
    <p>Nombre del estudiante: {{ $data['nombre'] }}</p>
    <p>Carrera: {{ $data['carrera'] }}</p>
    <p>Fecha de emisión: {{ date('Y-m-d') }}</p>
    
    <p>... Aquí podrías agregar más detalles y contenido específico de la constancia ...</p>
    
    <p>Si tienes más información para agregar, modifica esta vista según tus necesidades.</p>
@endsection
