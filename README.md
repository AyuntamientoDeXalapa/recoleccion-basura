# Recoleccion-Basura
API para el servicio de Limpia Pública del Municipio de Xalapa, Veracruz.

Proyecto hospedado por Codeando Xalapa; realizado y administrado por el Municipio de Xalapa.

---
Comentarios, administración y solicitudes a: <br />
https://github.com/CarlosArturoFyuler/ <br />
carlosarturo.medina5@gmail.com

Accesos para el API de camiones de basura en el municipio de Xalapa

**Obtener la lista de grupos**

	GET /api/v1/group

**Obtener la última ubicación conocida de un grupo de vehículos**

	GET /api/v1/group/{id}/location

Donde: 
`{id}` Representa el campo Id de un grupo de vehículos.

**Obtener el id de todos los vehículos de un grupo de vehículos**

	GET /api/v1/group/{id}/bus

Donde:
`{id}` Representa el campo Id de un grupo de vehículos.

**Obtener la última ubicación conocida de un vehículo**

	GET /api/v1/bus/{id}/location

Donde:
`{id}` Representa el campo Id de un vehículo.

**Obtener las rutas que ha realizado un vehículo en los últimos dos meses**

	GET /api/v1/bus/{id}/trip

Donde:
`{id}` Representa el campo Id de un vehículo.

La respuesta contiene una colección de viajes envueltos en un objeto de paginación. Los viajes son regresados en orden cronológico inverso.

**Obtener la lista de posiciones por los que ha pasado un vehículo en una ruta específica**

	GET /api/v1/trip/{id}/location?time={time}

Donde:
`{id}` Representa el campo id del viaje.
`{time}` Parámetro opcional de valor booleano; true para incluír las marcas de tiempo en que pasó por las posiciones (si está disponible).

**Obtener el resumen de los viajes de un vehículo en un periodo de fecha dado**

	GET /api/v1/bus/{id}/trip/summary?from={from}&to={to}

Donde:
`{id}` Representa el campo id de un vehículo.
`{from}` y `{to}` son valores de tiempo y fecha en formato de calendario ISO 8601:2004 (YYYYMMDDThhmmss);

**Obtener el resumen de los viajes de un grupo de vehículos en un periodo de fecha dado**

	GET /api/v1/group/{id}/trip/summary?from={from}&to={to}

Donde:
`{id}` Representa el campo id de un grupo de vehículos.
`{from}` y `{to}` son valores de tiempo y fecha en formato de calendario ISO 8601:2004 (YYYYMMDDThhmmss);

**Obtener los polígonos de los sitios de interés**

	GET /api/v1/place


---
**PD. Agradecemos a @categulario por ayudarnos a mejorar el diseño del API =)**	
