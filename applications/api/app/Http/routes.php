<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web','cors']], function () {
	Route::get('/', function () {
    return view('index');
	});
//API v1
Route::group(['prefix' => 'v1'], function () {
	Route::get('gruposVehiculo/', 'GruposVehiculoController@index');
	
	Route::get('gruposVehiculo/{grupoId}/ultimasPosicionesVehiculos', 
		'UltimasPosicionesVehiculosController@index')->where(array('grupoId' => '[a-zA-Z0-9\-]+'));
	
	Route::get('gruposVehiculo/{grupoId}/vehiculos',
		'VehiculosController@index')->where(array('grupoId' => '[a-zA-Z0-9\-]+'));

	Route::get('vehiculos/{vehiculoId}/ultimaPosicionVehiculo',
		'UltimaPosicionVehiculoController@index')->where(array('vehiculoId' => '[a-zA-Z0-9\-]+'));
	
	Route::get('vehiculos/{vehiculoId}/viajes', 
		'ViajesController@index')->where(array('vehiculoId' => '[a-zA-Z0-9\-]+'));

	Route::get('viajes/{viajeId}/posicionesViaje', 
		'PosicionesViajeController@index')->where(array('viajeId' => '[0-9]+'));

	Route::get('vehiculos/{vehiculoId}/viajes/resumen', 
		'ResumenController@resumenVehiculo')->where(array('vehiculoId' => '[a-zA-Z0-9\-]+'));

	Route::get('gruposVehiculo/{grupoId}/viajes/resumen',
		'ResumenController@index')->where(array('grupoId' => '[a-zA-Z0-9\-]+'));

	Route::get('sitios', 'SitiosController@index');   
	});
});

//Route::group(['prefix' => 'v2'], function () {
  //Para la versión 2 del API  
//});
