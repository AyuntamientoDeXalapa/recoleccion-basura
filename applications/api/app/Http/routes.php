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
Route::group(['middleware' => ['web']], function () {
	Route::get('/', function () {
    	return view('index');
	});
	Route::group(['middleware' => ['cors']], function () {
	//API v1
		Route::group(['prefix' => 'v1'], function () {
			Route::get('group/', 'GruposVehiculoController@index');
			Route::get('gruposVehiculo/{grupoId}/ultimasPosicionesVehiculos', 
				'UltimasPosicionesVehiculosController@index')->where(array('grupoId' => '[a-zA-Z0-9\-]+'));
			Route::get('group/{id}/location', 
				'UltimasPosicionesVehiculosController@index')->where(array('id' => '[a-zA-Z0-9\-]+'));
			
			Route::get('group/{id}/bus',
				'VehiculosController@index')->where(array('id' => '[a-zA-Z0-9\-]+'));

			Route::get('bus/{id}/location',
				'UltimaPosicionVehiculoController@index')->where(array('id' => '[a-zA-Z0-9\-]+'));
			
			Route::get('bus/{id}/trip', 
				'ViajesController@index')->where(array('id' => '[a-zA-Z0-9\-]+'));

			Route::get('trip/{id}/location', 
				'PosicionesViajeController@index')->where(array('id' => '[0-9]+'));

			Route::get('bus/{id}/trip/summary', 
				'ResumenController@resumenVehiculo')->where(array('id' => '[a-zA-Z0-9\-]+'));

			Route::get('group/{id}/trip/summary',
				'ResumenController@index')->where(array('id' => '[a-zA-Z0-9\-]+'));

			Route::get('place', 'SitiosController@index');   
			});
	});
});
//Route::group(['prefix' => 'v2'], function () {
  //Para la versión 2 del API  
//});
