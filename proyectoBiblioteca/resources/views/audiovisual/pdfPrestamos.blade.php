<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Prestamos</title>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/animate.min.css">
    </head>
    <body>
<div class="table-responsive container">
                <br>
                <br>
                <h1>Audiovisuales</h1>
                <br>
                    <table class="table table-condensed table-hover table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Nombre del solicitante</th>
                                <th>Equipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Serie</th>
                                <th>Fecha de préstamo</th>
                            </tr>
                        </thead>
                        @foreach($prestamosAudiovisual as $prestamoAudiovisual)
                        <tbody>
                            <tr>
                                <td>{{$prestamoAudiovisual->nombreSolicitante}}</td>
                                <td>{{$prestamoAudiovisual->equipo}}</td>
                                <td>{{$prestamoAudiovisual->marca}}</td>
                                <td>{{$prestamoAudiovisual->modelo}}</td>
                                <td>{{$prestamoAudiovisual->numeroSerie}}</td>
                                <td>{{$prestamoAudiovisual->fecha}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                <br>
                <br>
              </div>
              </body>

</html>
