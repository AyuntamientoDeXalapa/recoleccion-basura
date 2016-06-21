<!DOCTYPE html>
<html lang="es">
<head>
    <title>API de camiones de basura de Xalapa</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- jQuery library -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> -->
    <!-- Latest compiled JavaScript -->
    <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
    <style>

        @font-face {
          font-family: 'Gotham-book';
          src: url('static/fonts/gotham-book/Gotham Book.otf');
          src: url('static/fonts/gotham-book/Gotham Book.eot?#iefix') format('embedded-opentype'),
                 url('static/fonts/gotham-book/Gotham Book.woff') format('woff'),
                 url('static/fonts/gotham-book/Gotham Book.ttf') format('truetype'),
                 url('static/fonts/gotham-book/Gotham Book.svg#gothambook') format('svg');
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
          font-family: 'Gotham-black';
          src: url('static/fonts/gotham-black/gotham-black-webfont.otf');
          src: url('static/fonts/gotham-black/gotham-black-webfont.eot?#iefix') format('embedded-opentype'),
                 url('static/fonts/gotham-black/gotham-black-webfont.woff') format('woff'),
                 url('static/fonts/gotham-black/gotham-black-webfont.ttf') format('truetype'),
                 url('static/fonts/gotham-black/gotham-black-webfont.svg#gothamblack') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        html, body {
            -webkit-font-smoothing: antialiased;
            font-family: 'Gotham-book', sans-serif;
            color: #333;
        }
        h1, h3{
            font-family: 'Gotham-black', sans-serif;
        }
        .position-absolute{
            position: absolute;
        }
        .position-relative{
            position: relative;
        }
        .bg-xal{
            background-image: url(static/img/logoXalnegro.png);
            background-repeat: no-repeat;
            background-size: contain;
            left: 40px;
            top: 15px;
            height: 200px;
            width: 160px;
            display: block;
        }
        .bg-nuestra{
            background-image: url(static/img/logoncapital.png);
            background-position: right;
            background-repeat: no-repeat;
            background-size: contain;
            right: 40px;
            top: -55px;
            height: 200px;
            width: 160px;
            display: block;
        }
        .header{
            padding-bottom: 60px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <header class="position-relative header">
            <div class="bg-xal position-absolute"></div>
                <!--<img src="img/logoXalnegro.png" alt="Ayuntamiento de Xalapa" height="50" />-->
            <div class="bg-nuestra position-absolute"></div>                
                <!--<img src="img/logoncapital.png" alt="Ayuntamiento de Xalapa" height="50" />-->
        </header>

        <div class="container">
            <h1>API Limpia Pública</h1>
            
            <h3>Descrípción general</h3>
            <p>API diseñada para que cualquier aplicación pueda hacer uso de sus métodos; todas las respuestas son devueltas en formato JSON.
            <br>
            A continuación los métodos disponibles en la versión 1:</p>    
            
            <ul>
                <li>
                    <a href="#gruposVehiculos">Obtener los grupos de vehículos</a>
                </li>
                <li>
                    <a href="#ultimaUbicacionConocidaGrupoVehiculos">Obtener la última ubicación conocida de un grupo de vehículos</a>
                </li>
                <li>
                    <a href="#idVehiculosGrupoVehiculos">Obtener el id de todos los vehículos de un grupo de vehículos</a>
                </li>
                <li>
                    <a href="#ultimaUbicacionConocidaVehiculo">Obtener la última ubicación conocida de un vehículo</a>
                </li>
                <li>
                    <a href="#rutasRealizadoVehiculo2meses">Obtener las rutas que ha realizado un vehículo en los últimos dos meses</a>
                </li>
                <li>
                    <a href="#PosicionesRutaVehiculo">Obtener la lista de posiciones por los que ha pasado un vehículo en una ruta específica</a>
                </li>
                <li>
                    <a href="#resumenViajesVehiculoFecha">Obtener el resumen de los viajes de un vehículo en un periodo de fecha dado</a>
                </li>
                <li>
                    <a href="#resumenViajesGrupoVehiculoFecha">Obtener el resumen de los viajes de un grupo de vehículos en un periodo de fecha dado</a>
                </li>
                <li>
                    <a href="#poligonosSitiosDeInteres">Obtener los polígonos de los sitios de interés</a>
                </li>
            </ul>

            <h3 id="gruposVehiculos">Obtener los grupos de vehículos</h3>
            <p>GET Base URL/api/v1/gruposVehiculo</p>
            <p>Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/gruposVehiculo</p>

            <h3 id="ultimaUbicacionConocidaGrupoVehiculos">Obtener la última ubicación conocida de un grupo de vehículos</h3>
            <p>GET Base URL/api/v1/gruposVehiculo/{gruposVehiculoId}/ultimasPosicionesVehiculos</p>
            <p>Donde:
            <br>
            {gruposVehiculoId} Representa el campo Id de un grupo de vehículos. 
            </p>
            <p>Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/gruposVehiculo/1bca1382-b20f-442b-8c68-be29d51ff0f7/ultimasPosicionesVehiculos</p>

            <h3 id="idVehiculosGrupoVehiculos">Obtener el id de todos los vehículos de un grupo de vehículos</h3>
            <p>GET Base URL/api/v1/gruposVehiculo/{gruposVehiculoId}/vehiculos</p>
            <p>Donde:
            <br>
            {gruposVehiculoId} Representa el campo Id de un grupo de vehículos. 
            </p>
            <p>Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/gruposVehiculo/1bca1382-b20f-442b-8c68-be29d51ff0f7/vehiculos</p>

            <h3 id ="ultimaUbicacionConocidaVehiculo">Obtener la última ubicación conocida de un vehículo</h3>
            <p>GET Base URL/api/v1/vehiculos/{vehiculoId}/ultimaPosicionVehiculo</p>
            <p>Donde:
            <br>
            {vehiculoId} Representa el campo Id de un vehículo. 
            </p>
            <p>Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/vehiculos/ae8442e2-82fe-4530-9c79-30ec39fcd15c/ultimaPosicionVehiculo</p>

            <h3 id="rutasRealizadoVehiculo2meses">Obtener las rutas que ha realizado un vehículo en los últimos dos meses</h3>
            <p>GET Base URL/api/v1/vehiculos/{vehiculoId}/viajes</p>
            <p>Donde:
            <br>
            {vehiculoId} Representa el campo Id de un vehículo. 
            </p>
            <p>
            La respuesta contiene una colección de viajes envueltos en un objeto de paginación. Los viajes son regresados en orden cronológico inverso. 
            </p>
            <p>Ejemplo de petición: recoleccionbasura.xallistaapa.gob.mx/api/v1/vehiculos/ae8442e2-82fe-4530-9c79-30ec39fcd15c/viajes</p>

            <h3 id="PosicionesRutaVehiculo">Obtener la lista de posiciones por los que ha pasado un vehículo en una ruta específica</h3>
            <p> GET Base URL/api/v1/viajes/{viajeId}/posicionesViaje?tiempo={tiempo} </p>
            <p>Donde:
            <br>
            {tripId} Representa el campo id del viaje.
            <br>
            {tiempo} Parámetro opcional de valor booleano; true para incluír las marcas de tiempo en que pasó por las posiciones (si está disponible). 
            </p>
            <p>Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/viajes/521650679/posicionesViaje?tiempo=true</p>

            <h3 id="resumenViajesVehiculoFecha">Obtener el resumen de los viajes de un vehículo en un periodo de fecha dado</h3>
            <p> GET Base URL/api/v1/vehiculos/{vehiculoId}/viajes/resumen?fechaini={fechaInicial}&amp; fechafin={fechaFinal}</p>
            <p>Donde:
            <br>
            {vehiculoId} Representa el campo id de un vehículo.
            <br>
            {fechaInicial} y {fechaFinal} son valores de tiempo y fecha en formato de calendario ISO 8601:2004 (YYYYMMDDThhmmss);  
            </p>
            <p>Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/vehiculos/71727e8f-af2b-4ad9-ab3e-183ffe8470d5/viajes/resumen?fechaini=20150101T002059&amp;fechafin=20160101T002059</p>

            <h3 id="resumenViajesGrupoVehiculoFecha">Obtener el resumen de los viajes de un grupo de vehículos en un periodo de fecha dado</h3>
            <p> GET Base URL/api/v1/gruposVehiculo/{gruposVehiculoId}/viajes/resumen?fechaini={fechaInicial}&amp; fechafin={fechaFinal}</p>
            <p>Donde:
            <br>
            {gruposVehiculoId} Representa el campo id de un grupo de vehículos.
            <br>
            {fechaInicial} y {fechaFinal} son valores de tiempo y fecha en formato de calendario ISO 8601:2004 (YYYYMMDDThhmmss);  
            </p>
            <p>Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/gruposVehiculo/1bca1382-b20f-442b-8c68-be29d51ff0f7/viajes/resumen?fechaini=20150101T002059&amp;fechafin=20160101T002059</p>

            <h3 id="poligonosSitiosDeInteres">Obtener los polígonos de los sitios de interés</h3>
            <p>GET Base URL/api/v1/sitios</p>
            <p>Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/sitios</p>
        </div>
    </div>
</body>
</html>