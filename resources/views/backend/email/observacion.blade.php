<!DOCTYPE html>
<html>
<head>
    <title>Repositorio - Notificación</title>
    <style>
        /* Estilos CSS para dar formato al correo */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h1 {
            text-align: center;
            color: #007bff;
        }
        .datos-personales {
            margin-bottom: 20px;
        }
        .datos-personales label {
            font-weight: bold;
        }
        .observaciones {
            margin-top: 30px;
        }
        .observaciones h2 {
            color: #007bff;
        }
        .estado {
            margin-top: 20px;
            text-align: center;
        }
        .estado label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡Hola, {{ $nombre }}!</h1>
        <p>Te saludamos cordialmente y desde Repositorio Institucional de la Unamba.</p>

        <div class="datos-personales">
            <h2>Datos del Tramitante</h2>
            <label>Nombre:</label>  {{ $nombre }}<br>
            <label>Apellido:</label>  $otrosDatos['apellido'] <br>
            <label>Nombre del Proyecto:</label>  $otrosDatos['nombre_proyecto'] 
        </div>

        <div class="observaciones">
            <h2>Al revisar su proyecto se realizaron las siguientes observaciones:</h2>
            <p> $otrosDatos['observaciones'] </p>
        </div>

        <div class="estado">
            <label>Estado del Trámite:</label>  $otrosDatos['estado'] 
        </div>

        <p>Si tienes alguna pregunta o necesitas más información, no dudes en contactarnos.</p>

        <p>¡Espemos corrija sus observaciones lo mas pronto posible!</p>
    </div>
</body>
</html>
