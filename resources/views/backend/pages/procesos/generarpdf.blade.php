<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>CONSTANCIA N° {{ $numeroConstancia }} - {{ $anio }}</title>

    <style type="text/css">
        @page {
            size: 21cm 29.7cm;
            margin: 0px;
        }

        body {
            margin: 0px;
        }

        * {
            font-family: Verdana, Arial, sans-serif;
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        .invoice {
            margin-top: -25px;
        }

        .information {
            color: #000;
        }

        .text-center{
            text-align: center;
            margin-top: 30px;
        }

        .content{
            margin: 0 30px 0 30px;
        }

        .text-one{
            text-align: center;
            margin-top: 30px;
            font-family: 14px;
        }

        .text-two{
            text-align: justify;
            margin-top: 30px;
            font-family: 14px;
        }

        .text-three{
            text-align: center;
            margin-top: 40px;
        }
        .text-a-color{
            color: #000;
            font-family: 14px;
        }
        .text-four{
            text-align: justify;
            margin-top: 50px;
        }
        .text-five{
            text-align: center;
            margin-top: 50px;
        }
        .date{
            text-align: center;
            margin-top: 50px;
        }
    </style>

</head>

<body>

    @php
    use Carbon\Carbon;
    @endphp

    <div class="information">
        <img src="{{ public_path() . $banner_header }}" width="100%">
    </div>

    <div class="invoice text-center">
        <h4 class="text-center">CONSTANCIA N° {{ $numeroConstancia }} - {{ $anio }}</h4>
        <div class="content">
            <p class="text-one">El Repositorio Institucional de la Universidad Nacional Micaela Bastidas de Apurímac, hace constar que:</p>
            <p class="text-one">{{ $nombre_egresado }}</p>
            <p class="text-two">Registró el archivo digital denominado: {{ $nombre_proyecto }}, conducente a obtener el Título Profesional, cumpliendo con los requisitos exigidos por esta oficina. La publicación se encuentra de acuerdo a la Ley N° 30035, RENARE (Red Nacional de Repositorios Digitales de Ciencia, Tecnología e Innovación de Acceso Abierto) de CONCYTEC y disponible en el siguiente link:</p>
            <div class="text-three">
                <a class="text-a-color" href="{{ $handle }}" target="_blank">{{ $handle }}</a>
            </div>
            <p class="text-four">La presente constancia otorga la conformidad del documento indicado, más no al contenido, siendo esta responsabilidad del ejecutor de la tesis, asesor y de sus jurados calificadores.</p>
            <p class="text-five">Se expide la presente para los fines convenientes por el interesado.</p>
            <p class="date">{{ $day }}, {{ $day_number }} de {{ $month }} del {{ $year }}</p>
        </div>
    </div>

    <div class="information mt-4">

    </div>

    <div class="information" style="position: absolute; bottom: 0;">
        <img src="{{ public_path() . $banner_footer }}" width="100%">
    </div>
</body>

</html>