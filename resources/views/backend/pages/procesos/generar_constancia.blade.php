@extends('backend.layouts.master')

@section('title')
    Tramites
@endsection


@section('admin-content')
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Panel de Tramites</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href=#>Panel de Adiministracion</a></li>
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
            <div class="col-lg-8">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title float-left">Generar Constancias</h4>
                                <p class="float-right mb-2">
                                </p>
                                <div class="clearfix"></div>
                                <div class="data-tables">
                                    @include('backend.layouts.partials.messages')
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th width="1%">N°</th>
                                                <th width="15%">Nombres</th>
                                                <th width="1%">Apellidos</th>
                                                <th width="10%">Nombre_proyecto</th>
                                                <th width="10%">HANDLE</th>
                                                <th width="10%">Generar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($constancias as $constancia)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>{{ $constancia->nombre }}</td>
                                                    <td>{{ $constancia->apellido }}</td>
                                                    <td>{{ $constancia->nombre_proyecto }}</td>
                                                    <td>{{ $constancia->handle }}</td>
                                                    <td><a href="{{route('admin.generar_constancia_pdf',['formulario'=>$constancia->id])}}" target="_blank">Generar</a></td>
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
        </div>
    </div>
@endsection
