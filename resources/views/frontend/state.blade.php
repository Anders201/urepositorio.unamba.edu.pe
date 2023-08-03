@include('frontend.layout.header')


<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2>Estado Tramite</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Top Popular Courses Area Start ##### -->
<div class="top-popular-courses-area mt-50 section-padding-100-70">
    <div class="container">

        <!-- Formulario de búsqueda -->
    

        <!-- Tabla para mostrar los estados de trámite -->



        <table id="dataTable" class="text-center">
            <thead class="bg-light text-capitalize">
                <tr>
                    <th width="1%">N°</th>
                    <th width="10%">Fecha de envio</th>
                    <th width="1%">Nombre</th>
                    <th width="10%">Apellido</th>
                    <th width="10%">Nombre de Proyecto</th>
                    <th width="10%">Observacion</th>
                    <th width="10%">Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tramite as $formulario)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $formulario->created_at }}</td>
                        <td>{{ $formulario->nombre }}</td>
                        <td>{{ $formulario->apellido }}</td>
                        <td>{{ $formulario->nombre_proyecto}}</td>
                        <td>{{ $formulario->observacion }}</td>
                        <td>{{ $formulario->estado }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@include('frontend.layout.footer')