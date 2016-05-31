<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bienvenido al API de camiones de basura de Xalapa</title>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
    <h1>Métodos del API de camiones de basura del H. Ayuntamiento de Xalapa</h1>
    
    <p>API diseñada para que cualquier aplicación pueda hacer uso de sus métodos; todas las respuestas son devueltas en formato JSON.
    <br>
    A continuación los métodos disponibles en la versión 1:</p>    
    
    <h3>Obtener los grupos de vehículos</h3>
    <p>GET Base URL/api/v1/gruposVehiculo</p>
    <p>Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/gruposVehiculo</p>

    <h3>Obtener la última ubicación conocida de un grupo de vehículos</h3>
    <p>GET Base URL/api/v1/gruposVehiculo/{gruposVehiculoId}/ultimasPosicionesVehiculos</p>
    <p>Donde:
    <br>
    {gruposVehiculoId} Representa el campo Id de un grupo de vehículos. 
    </p>
    <p>Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/gruposVehiculo/1bca1382-b20f-442b-8c68-be29d51ff0f7/ultimasPosicionesVehiculos</p>

    <h3>Obtener el id de todos los vehículos de un grupo de vehículos</h3>
    <p>GET Base URL/api/v1/gruposVehiculo/{gruposVehiculoId}/vehiculos</p>
    <p>Donde:
    <br>
    {gruposVehiculoId} Representa el campo Id de un grupo de vehículos. 
    </p>
    <p>Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/gruposVehiculo/1bca1382-b20f-442b-8c68-be29d51ff0f7/vehiculos</p>

    <h3>Obtener la última ubicación conocida de un vehículo</h3>
    <p>GET Base URL/api/v1/vehiculos/{vehiculoId}/ultimaPosicionVehiculo</p>
    <p>Donde:
    <br>
    {vehiculoId} Representa el campo Id de un vehículo. 
    </p>
    <p>Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/vehiculos/ae8442e2-82fe-4530-9c79-30ec39fcd15c/ultimaPosicionVehiculo</p>

    <h3>Obtener las rutas que ha realizado un vehículo en los últimos dos meses</h3>
    <p>GET Base URL/api/v1/vehiculos/{vehiculoId}/viajes</p>
    <p>Donde:
    <br>
    {vehiculoId} Representa el campo Id de un vehículo. 
    </p>
    <p>
    La respuesta contiene una colección de viajes envueltos en un objeto de paginación. Los viajes son regresados en orden cronológico inverso. 
    </p>
    <p>Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/vehiculos/ae8442e2-82fe-4530-9c79-30ec39fcd15c/viajes</p>

    <h3>Obtener la lista de posiciones por los que ha pasado una ruta en específico de un vehículo</h3>
    <p> GET Base URL/api/v1/viajes/{viajeId}/posicionesViaje?tiempo={tiempo} </p>
    <p>Donde:
    <br>
    {tripId} Representa el campo id del viaje.
    <br>
    {tiempo} Parámetro opcional de valor booleano; true para incluír las marcas de tiempo en que pasó por las posiciones (si está disponible). 
    </p>
    <p>Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/viajes/521650679/posicionesViaje?tiempo=true</p>

    <h3>Obtener el resumen de los viajes de un vehículo en un periodo de fecha dado</h3>
    <p> GET Base URL/api/v1/vehiculos/{vehiculoId}/viajes/resumen?fechaini={fechaInicial}&amp; fechafin={fechaFinal}</p>
    <p>Donde:
    <br>
    {vehiculoId} Representa el campo id de un vehículo.
    <br>
    {fechaInicial} y {fechaFinal} son valores de tiempo y fecha en formato de calendario ISO 8601:2004 (YYYYMMDDThhmmss);  
    </p>
    <p>Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/vehiculos/71727e8f-af2b-4ad9-ab3e-183ffe8470d5/viajes/resumen?fechaini=20150101T002059&amp;fechafin=20160101T002059</p>

    <h3>Obtener el resumen de los viajes de un grupo de vehículos en un periodo de fecha dado</h3>
    <p> GET Base URL/api/v1/gruposVehiculo/{gruposVehiculoId}/viajes/resumen?fechaini={fechaInicial}&amp; fechafin={fechaFinal}</p>
    <p>Donde:
    <br>
    {gruposVehiculoId} Representa el campo id de un grupo de vehículos.
    <br>
    {fechaInicial} y {fechaFinal} son valores de tiempo y fecha en formato de calendario ISO 8601:2004 (YYYYMMDDThhmmss);  
    </p>
    <p>Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/gruposVehiculo/1bca1382-b20f-442b-8c68-be29d51ff0f7/viajes/resumen?fechaini=20150101T002059&amp;fechafin=20160101T002059</p>

    <h3>Obtener los polígonos de los sitios de interés</h3>
    <p>GET Base URL/api/v1/sitios</p>
    <p>Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/sitios</p>
</body>
</body>
</html>