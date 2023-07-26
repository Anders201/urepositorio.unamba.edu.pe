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
        <form method="POST" class="search-form">
            <input type="text" name="search_query" placeholder="Buscar">
            <button type="submit">Buscar</button>
        </form>

        <!-- Tabla para mostrar los estados de trámite -->
        <table class="status-table">
            <thead>
                <tr>
                    <th>Marca temporal</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>DNI</th>
                    <th>Observaciones</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se mostrarán los datos de los estados de trámite -->
                <!-- Puedes usar PHP para obtener estos datos desde una base de datos -->
                <tr>
                    <td>TRAM12345</td>
                    <td>En proceso</td>
                    <td>2023-07-19</td>
                    <td>2023-07-25</td>
                    <td>2023-07-25</td>
                    <td>Atendido acercarse a la oficiona</td>
                </tr>
                <tr>
                    <td>TRAM12345</td>
                    <td>En proceso</td>
                    <td>2023-07-19</td>
                    <td>2023-07-25</td>
                    <td>2023-07-25</td>
                    <td>Atendido acercarse a la oficiona</td>
                </tr>
                <tr>
                    <td>TRAM12345</td>
                    <td>En proceso</td>
                    <td>2023-07-19</td>
                    <td>2023-07-25</td>
                    <td>El informe de Tesis debe colocar en la columna correspondiente cuando realiza la solicitud, Ilegible la pág. del juarado e inclinado, las palabras claves deben ser palabras no oraciones, Objetivos especificos e hipótesis específicos no son las viñetas del formato.</td>
                    <td>Atendido acercarse a la oficiona</td>
                </tr>
                <tr>
                    <td>TRAM12345</td>
                    <td>En proceso</td>
                    <td>2023-07-19</td>
                    <td>2023-07-25</td>
                    <td>2023-07-25</td>
                    <td>Atendido acercarse a la oficiona</td>
                </tr>
                <tr>
                    <td>TRAM12345</td>
                    <td>En proceso</td>
                    <td>2023-07-19</td>
                    <td>2023-07-25</td>
                    <td>2023-07-25</td>
                    <td>Atendido acercarse a la oficiona</td>
                </tr>
                <tr>
                    <td>TRAM12345</td>
                    <td>En proceso</td>
                    <td>2023-07-19</td>
                    <td>2023-07-25</td>
                    <td>2023-07-25</td>
                    <td>Atendido acercarse a la oficiona</td>
                </tr>
                <tr>
                    <td>TRAM12345</td>
                    <td>En proceso</td>
                    <td>2023-07-19</td>
                    <td>2023-07-25</td>
                    <td>2023-07-25</td>
                    <td>Atendido acercarse a la oficiona</td>
                </tr>
                <tr>
                    <td>TRAM12345</td>
                    <td>En proceso</td>
                    <td>2023-07-19</td>
                    <td>2023-07-25</td>
                    <td>2023-07-25</td>
                    <td>Atendido acercarse a la oficiona</td>
                </tr>
                <tr>
                    <td>TRAM12345</td>
                    <td>En proceso</td>
                    <td>2023-07-19</td>
                    <td>2023-07-25</td>
                    <td>2023-07-25</td>
                    <td>Atendido acercarse a la oficiona</td>
                </tr>
                <tr>
                    <td>TRAM12345</td>
                    <td>En proceso</td>
                    <td>2023-07-19</td>
                    <td>2023-07-25</td>
                    <td>2023-07-25</td>
                    <td>Atendido acercarse a la oficiona</td>
                </tr>
                <!-- ... Agrega más filas según sea necesario ... -->
            </tbody>
        </table>
    </div>
</div>


@include('frontend.layout.footer')