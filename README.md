# Recoleccion-Basura
API para el servicio de Limpia Pública del Municipio de Xalapa, Veracruz.

Proyecto hospedado por Codeando Xalapa; realizado y administrado por el Municipio de Xalapa.

---
Comentarios, administración y solicitudes a: <br />
https://github.com/CarlosArturoFyuler/ <br />
carlosarturo.medina5@gmail.com

Accesos para el API de camiones de basura en el municipio de Xalapa
	
	// --------------------------------------------------------------------------------------------------------------------------
	
	Obtener los grupos de vehículos
	GET Base URL/api/v1/gruposVehiculo
	
	Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/gruposVehiculo
	
	// --------------------------------------------------------------------------------------------------------------------------

	// --------------------------------------------------------------------------------------------------------------------------
	
	Obtener la última ubicación conocida de un grupo de vehículos
	GET Base URL/api/v1/gruposVehiculo/{gruposVehiculoId}/ultimasPosicionesVehiculos
	
	Donde: 
	{gruposVehiculoId} Representa el campo Id de un grupo de vehículos.
	
	Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/gruposVehiculo/1bca1382-b20f-442b-8c68-be29d51ff0f7/ultimasPosicionesVehiculos
	
	// --------------------------------------------------------------------------------------------------------------------------

	// --------------------------------------------------------------------------------------------------------------------------
	
	Obtener el id de todos los vehículos de un grupo de vehículos
	GET Base URL/api/v1/gruposVehiculo/{gruposVehiculoId}/vehiculos
	
	Donde: 
	{gruposVehiculoId} Representa el campo Id de un grupo de vehículos.
	
	Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/gruposVehiculo/1bca1382-b20f-442b-8c68-be29d51ff0f7/vehiculos
	
	// --------------------------------------------------------------------------------------------------------------------------

	// --------------------------------------------------------------------------------------------------------------------------
	
	Obtener la última ubicación conocida de un vehículo
	GET Base URL/api/v1/vehiculos/{vehiculoId}/ultimaPosicionVehiculo
	
	Donde: 
	{vehiculoId} Representa el campo Id de un vehículo.
	
	Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/vehiculos/ae8442e2-82fe-4530-9c79-30ec39fcd15c/ultimaPosicionVehiculo
	
	// --------------------------------------------------------------------------------------------------------------------------

	// --------------------------------------------------------------------------------------------------------------------------
	
	Obtener las rutas que ha realizado un vehículo en los últimos dos meses
	GET Base URL/api/v1/vehiculos/{vehiculoId}/viajes
	
	Donde: 
	{vehiculoId} Representa el campo Id de un vehículo.
	
	La respuesta contiene una colección de viajes envueltos en un objeto de paginación. Los viajes son regresados en orden cronológico inverso.
	
	Ejemplo de petición: recoleccionbasura.xallistaapa.gob.mx/api/v1/vehiculos/ae8442e2-82fe-4530-9c79-30ec39fcd15c/viajes
	
	// --------------------------------------------------------------------------------------------------------------------------
	
	// --------------------------------------------------------------------------------------------------------------------------
	
	Obtener la lista de posiciones por los que ha pasado un vehículo en una ruta específica
	GET Base URL/api/v1/viajes/{viajeId}/posicionesViaje?tiempo={tiempo}
	
	Donde: 
	{tripId} Representa el campo id del viaje. 
	{tiempo} Parámetro opcional de valor booleano; true para incluír las marcas de tiempo en que pasó por las posiciones (si está disponible).
	
	Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/viajes/521650679/posicionesViaje?tiempo=true
	
	// --------------------------------------------------------------------------------------------------------------------------
	
	// --------------------------------------------------------------------------------------------------------------------------
	
	Obtener el resumen de los viajes de un vehículo en un periodo de fecha dado
	GET Base URL/api/v1/vehiculos/{vehiculoId}/viajes/resumen?fechaini={fechaInicial}& fechafin={fechaFinal}
	
	Donde: 
	{vehiculoId} Representa el campo id de un vehículo. 
	{fechaInicial} y {fechaFinal} son valores de tiempo y fecha en formato de calendario ISO 8601:2004 (YYYYMMDDThhmmss);
	
	Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/vehiculos/71727e8f-af2b-4ad9-ab3e-183ffe8470d5/viajes/resumen?fechaini=20150101T002059&fechafin=20160101T002059
	
	// --------------------------------------------------------------------------------------------------------------------------
	
	// --------------------------------------------------------------------------------------------------------------------------
	
	Obtener el resumen de los viajes de un grupo de vehículos en un periodo de fecha dado
	GET Base URL/api/v1/gruposVehiculo/{gruposVehiculoId}/viajes/resumen?fechaini={fechaInicial}& fechafin={fechaFinal}
	
	Donde: 
	{gruposVehiculoId} Representa el campo id de un grupo de vehículos. 
	{fechaInicial} y {fechaFinal} son valores de tiempo y fecha en formato de calendario ISO 8601:2004 (YYYYMMDDThhmmss);
	
	Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/gruposVehiculo/1bca1382-b20f-442b-8c68-be29d51ff0f7/viajes/resumen?fechaini=20150101T002059&fechafin=20160101T002059
	
	// --------------------------------------------------------------------------------------------------------------------------
	
	// --------------------------------------------------------------------------------------------------------------------------
	
	Obtener los polígonos de los sitios de interés
	GET Base URL/api/v1/sitios
	
	Ejemplo de petición: recoleccionbasura.xalapa.gob.mx/api/v1/sitios
	
	// --------------------------------------------------------------------------------------------------------------------------

---
