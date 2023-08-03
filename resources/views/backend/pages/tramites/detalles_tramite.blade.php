@extends('backend.layouts.master')

@section('title')
    Detalles Tramite - Admin Panel
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
                        <li><a href="{{ route('admin.tramites_pendientes') }}">Tramites</a></li>
                        <li><span>Detalles Tramite</span></li>
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
                        <h4 class="header-title">Detalle Tramite - Formulario Tramite</h4>
                        <hr>
                        <p class="float-right mb-2">
                        </p>
                        <div class="clearfix"></div>
                        <div class="data-tables">
                            @include('backend.layouts.partials.messages')

                            <div class="container">
                                <div>
                                    <h3>Detalles del Trámite <button id="downloadButton" class="button">Descargar
                                            .txt</button>
                                </div>
                                </h3>
                                <hr>
                                <div style="margin-left: 40px;">
                                    <ul class="details-list">
                                        
                                        <li><strong>ID:</strong> {{ $tramite_detalle['id'] }}</li>
                                        <li><strong>Nombre:</strong> {{ $tramite_detalle['nombre'] }}</li>
                                        <li><strong>Apellido:</strong> {{ $tramite_detalle['apellido'] }}</li>
                                        <li><strong>Email:</strong> {{ $tramite_detalle['email'] }}</li>
                                        <li><strong>DNI:</strong> {{ $tramite_detalle['dni'] }}</li>
                                        <li><strong>Teléfono:</strong> {{ $tramite_detalle['telefono'] }}</li>
                                        <li><strong>Escuela:</strong> {{ $tramite_detalle['escuela'] }}</li>
                                        <li><strong>Asesor:</strong> {{ $tramite_detalle['asesor'] }}</li>
                                        <li><strong>Asesor DNI:</strong> {{ $tramite_detalle['asesor_dni'] }}</li>
                                        <li><strong>Asesor ORCIT:</strong> {{ $tramite_detalle['asesor_orcit'] }}</li>
                                        <li><strong>Asesor 2 DNI:</strong> {{ $tramite_detalle['asesor2_dni'] }}</li>
                                        <li><strong>Asesor 2 ORCIT:</strong> {{ $tramite_detalle['asesor2_orcit'] }}</li>
                                        <li><strong>Nombre Proyecto:</strong> {{ $tramite_detalle['nombre_proyecto'] }} </li>
                                        <li><strong>Nombre Autorización PDF:</strong> {{ $tramite_detalle['name_autorizacion_pdf'] }}</li>
                                        <li><strong>Nombre Constancia PDF:</strong> {{ $tramite_detalle['name_constancia_pdf'] }}</li>
                                        <li><strong>Nombre Tesis PDF:</strong> {{ $tramite_detalle['name_tesis_pdf'] }}</li>
                                        <li><strong>Nombre Tesis Doc:</strong> {{ $tramite_detalle['name_tesis_doc'] }} </li>
                                        <li><strong>Handle:</strong> {{ $tramite_detalle['handle'] }}</li>
                                        <li><strong>Puntuación:</strong> {{ $tramite_detalle['puntuacion'] }}</li>
                                        <li><strong>TyC01:</strong> {{ $tramite_detalle['TyC01'] }}</li>
                                        <li><strong>TyC02:</strong> {{ $tramite_detalle['TyC02'] }}</li>
                                        <li><strong>TyC03:</strong> {{ $tramite_detalle['TyC03'] }}</li>
                                        <li><strong>TyC04:</strong> {{ $tramite_detalle['TyC04'] }}</li>
                                        <li><strong>Estado:</strong> {{ $tramite_detalle['estado'] }}</li>
                                        <li><strong>Observación:</strong> {{ $tramite_detalle['observacion'] }}</li>
                                    </ul>
                                </div>
                            </div>

                            <style>
                                .details-list {
                                    list-style: none;
                                    padding: 0;
                                    margin: 0;
                                }

                                .details-list li {
                                    margin-bottom: 10px;
                                }

                                .details-list li strong {
                                    display: inline-block;
                                    width: 150px;
                                    /* Ajusta el ancho según tus preferencias */
                                }

                                .button {
                                    background-color: #7264f3;
                                    /* Green */
                                    border: none;
                                    color: white;
                                    padding: 15px 32px;
                                    text-align: center;
                                    text-decoration: none;
                                    display: inline-block;
                                    font-size: 16px;
                                    float: right;
                                    border-radius: 4px;

                                }
                            </style>

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
    <script>
        document.getElementById('downloadButton').addEventListener('click', function() {
            // Obtener la información de la lista
            const detailsList = document.getElementsByClassName('details-list')[0];
            const detailsText = detailsList.innerText;

            // Crear un enlace de descarga
            const downloadLink = document.createElement('a');
            downloadLink.href = 'data:text/plain;charset=utf-8,' + encodeURIComponent(detailsText);
            downloadLink.download = 'detalles_tramite_repositorio.txt';

            // Agregar el enlace a la página y hacer clic automáticamente en él
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
        });
    </script>
@endsection
