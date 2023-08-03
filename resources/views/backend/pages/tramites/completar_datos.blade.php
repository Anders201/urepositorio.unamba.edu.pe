@extends('backend.layouts.master')

@section('title')
    Completar Datos - Admin Panel
@endsection

@section('styles')
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/completar_datos.css') }}">
@endsection


@section('admin-content')
    <!-- page title area start -->
    <!-- page title area start -->

    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Tramites</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="{{ route('admin.dashboard') }}">Panel de Administrador</a></li>
                        <li><a href="{{ route('admin.tramites_pendientes') }}">Tramites</a></li>
                        <li><span>Completar Datos</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                @include('backend.layouts.partials.logout')
            </div>
        </div>
    </div>



    <!-- page title area end -->

    <div class="main-content-inner">
        <div class="row">
            <!-- data table start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Completar Datos - Formulario Tramite</h4>
                        <hr>
                        <p class="float-right mb-2">
                        </p>
                        <div class="clearfix"></div>
                        <div class="data-tables">
                            @include('backend.layouts.partials.messages')
                            <div class="left-container">
                                <div class="contenedortitle">
                                    <h5>{{ $datos_actualizar['nombre_proyecto'] }}</h5>
                                    <p>{{ $datos_actualizar['name_tesis_pdf'] }}</p>
                                </div>
                                <div class="iframe-container">
                                    <iframe src="{{ $datos_actualizar['tesis_path_pdf'] }}" height="880"></iframe>
                                </div>
                            </div>
                            <div class="right-container">
                                <h5>Informacion necesaria para la constancia</h5>
                                <br>
                                <p>Datos del tramitante: </p>
                                <hr>
                                <li><strong>Nombre y apellido: </strong> {{ $datos_actualizar['nombre'] }}
                                    {{ $datos_actualizar['apellido'] }}</li>
                                <li><strong>Email: </strong> {{ $datos_actualizar['email'] }}</li>
                                <li><strong>Telefono: </strong> {{ $datos_actualizar['telefono'] }}</li>
                                <li><strong>Escuela Profesional: </strong> {{ $datos_actualizar['escuela'] }}</li>
                                <br>
                                <form method="POST" enctype="multipart/form-data" class="form-container" id="data-form"
                                    action="{{ route('admin.actualizar_datos') }}">
                                    @csrf
                                    <p>Completar campos (si existen):</p>
                                    <hr>
                                    <input type="hidden" name="id" id="id"
                                        value="{{ $datos_actualizar['id'] }}">
                                    <label for="observacion">OBSERVACION</label>
                                    <textarea name="observacion" id="observacion" placeholder="Ingrese observaciones"> {{ $datos_actualizar['observacion'] }}</textarea>

                                    <label for="handle">HANDLE</label>
                                    <input type="text" id="handle" name="handle"
                                        value="{{ $datos_actualizar['handle'] }}" placeholder="Ingrese Handle">

                                    <label for="estado">ESTADO</label>
                                    <select name="estado" id="estado" class="form-select">
                                        <option value="{{ $datos_actualizar['estado'] }}">
                                            {{ $datos_actualizar['estado'] }}</option>
                                        <option value="pendiente">pendiente</option>
                                        <option value="observado">observado</option>
                                        <option value="en proceso">en proceso</option>
                                        <option value="atendido">atendido</option>
                                    </select>

                                    <label for="puntuacion">PUNTUACION</label>
                                    <input type="text" id="puntuacion" name="puntuacion"
                                        value="{{ $datos_actualizar['puntuacion'] }}" placeholder="Ingrese la puntuación">


                                    <hr>
                                    <input id="mi-boton" type="submit" value="Guardar">


                                    <input style="background-color:blueviolet; margin-right:10px;" type="button"
                                        value="Enviar observacion al Correo">

                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- data table end -->

        </div>
    </div>
@endsection


@section('scripts')
    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

    <script>
        /*================================
                                                                                            datatable active
                                                                                            ==================================*/
        if ($('#dataTable').length) {
            $('#dataTable').DataTable({
                responsive: true
            });
        }
    </script>
@endsection
