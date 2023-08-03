@extends('backend.layouts.master')

@section('title')
    Tramites Pendientes - Admin Panel
@endsection

@section('styles')
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
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
                        <li><span>Tramites</span></li>
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
                        <h4 class="header-title float-left">Lista de Tramites</h4>
                        <p class="float-right mb-2">
                        </p>
                        <div class="clearfix"></div>
                        <div class="data-tables">
                            @include('backend.layouts.partials.messages')
                            <table id="dataTable" class="text-center">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <th width="1%">N°</th>
                                        <th width="15%">Acciones</th>
                                        <th width="1%">Estado</th>
                                        <th width="10%">Nombre</th>
                                        <th width="10%">Apellido</th>
                                        <th width="10%">Autorizacion</th>
                                        <th width="10%">Constancia</th>
                                        <th width="10%">Tesis PDF</th>
                                        <th width="10%">Tesis Doc</th>
                                        <th width="20%">observacion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tramite as $formulario)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>
                                                <form action="{{ route('admin.completar_datos') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $formulario->id }}">
                                                    <input type="hidden" name="email"
                                                        value="{{ $formulario->email }}">
                                                    <input type="hidden" name="apellido"
                                                        value="{{ $formulario->apellido }}">
                                                    <input type="hidden" name="nombre"
                                                        value="{{ $formulario->nombre }}">
                                                    <input type="hidden" name="telefono"
                                                        value="{{ $formulario->telefono }}">
                                                    <input type="hidden" name="escuela"
                                                        value="{{ $formulario->escuela }}">
                                                    <input type="hidden" name="nombre_proyecto"
                                                        value="{{ $formulario->nombre_proyecto }}">
                                                    <input type="hidden" name="name_tesis_pdf"
                                                        value="{{ $formulario->name_tesis_pdf }}">
                                                    <input type="hidden" name="tesis_path_pdf"
                                                        value="{{ $formulario->tesis_path_pdf }}">
                                                    <input type="hidden" name="handle"
                                                        value="{{ $formulario->handle }}">
                                                    <input type="hidden" name="puntuacion"
                                                        value="{{ $formulario->puntuacion }}">
                                                    <input type="hidden" name="estado"
                                                        value="{{ $formulario->estado }}">
                                                    <input type="hidden" name="observacion"
                                                        value="{{ $formulario->observacion }}">
                                                    <button type="submit" class="btn btn-primary">Completar</button>
                                                </form>

                                                
                                                <form action="{{ route('admin.detalles_tramite') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $formulario->id }}">
                                                    <input type="hidden" name="email" value="{{ $formulario->email }}">
                                                    <input type="hidden" name="apellido"
                                                        value="{{ $formulario->apellido }}">
                                                    <input type="hidden" name="nombre" value="{{ $formulario->nombre }}">
                                                    <input type="hidden" name="dni" value="{{ $formulario->dni }}">
                                                    <input type="hidden" name="telefono"
                                                        value="{{ $formulario->telefono }}">
                                                    <input type="hidden" name="escuela" value="{{ $formulario->escuela }}">
                                                    <input type="hidden" name="asesor" value="{{ $formulario->asesor }}">
                                                    <input type="hidden" name="asesor_dni"
                                                        value="{{ $formulario->asesor_dni }}">
                                                    <input type="hidden" name="asesor_orcit"
                                                        value="{{ $formulario->asesor_orcit }}">
                                                    <input type="hidden" name="asesor2_dni"
                                                        value="{{ $formulario->asesor2_dni }}">
                                                    <input type="hidden" name="asesor2_orcit"
                                                        value="{{ $formulario->asesor2_orcit }}">
                                                    <input type="hidden" name="nombre_proyecto"
                                                        value="{{ $formulario->nombre_proyecto }}">
                                                    <input type="hidden" name="name_autorizacion_pdf"
                                                        value="{{ $formulario->name_autorizacion_pdf }}">
                                                    <input type="hidden" name="name_constancia_pdf"
                                                        value="{{ $formulario->name_constancia_pdf }}">
                                                    <input type="hidden" name="name_tesis_pdf"
                                                        value="{{ $formulario->name_tesis_pdf }}">
                                                    <input type="hidden" name="name_tesis_doc"
                                                        value="{{ $formulario->name_tesis_doc }}">
                                                    <input type="hidden" name="handle" value="{{ $formulario->handle }}">
                                                    <input type="hidden" name="puntuacion"
                                                        value="{{ $formulario->puntuacion }}">
                                                    <input type="hidden" name="TyC01" value="{{ $formulario->TyC01 }}">
                                                    <input type="hidden" name="TyC02"
                                                        value="{{ $formulario->TyC02 }}">
                                                    <input type="hidden" name="TyC03"
                                                        value="{{ $formulario->TyC03 }}">
                                                    <input type="hidden" name="TyC04"
                                                        value="{{ $formulario->TyC04 }}">
                                                    <input type="hidden" name="estado"
                                                        value="{{ $formulario->estado }}">
                                                    <input type="hidden" name="observacion"
                                                        value="{{ $formulario->observacion }}">
                                                    <button style="background-color: #7264f3; color: #fff;" type="submit" class="btn btn-primary">Detalles</button>
                                                </form>
                                            </td>
                                            <td>{{ $formulario->estado }}</td>
                                            <td>{{ $formulario->nombre }}</td>
                                            <td>{{ $formulario->apellido }}</td>
                                            <td><a href="{{ $formulario->autorizacion_path_pdf }}" target="_blank">ver
                                                    aut...</a></td>
                                            <td><a href="{{ $formulario->constancia_path_pdf }}" target="_blank">ver
                                                    cons..</a></td>
                                            <td><a href="{{ $formulario->tesis_path_pdf }}" target="_blank">ver tesis</a>
                                            </td>
                                            <td><a href="{{ $formulario->tesis_path_doc }}">descargar tesis</a></td>
                                            <td>{{ $formulario->observacion }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
