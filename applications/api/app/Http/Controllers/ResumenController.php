<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag; //errors
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Api;
use App\Http\Requests\ValidateFechaAPIRequest;
class ResumenController extends Controller
{
	/**
 	* Devuelve el resumen de un grupo de vehículos.
 	*
 	* @param  ValidateAPIRequest $request $grupoVehiculoId
 	* @return Response
 	*/
    public function index(ValidateFechaAPIRequest $request, $grupoVehiculoId){
		if ($request->session()->has('errors'))
		{
			$value = $request->session()->get('errors')->all();
			return $value;
		}
		$response = Api::requestApi('https://us.mzoneweb.net/api/v2/vehiclegroups/'.$grupoVehiculoId.'/trips/'.$request->input('fechaini').'/'.$request->input('fechafin').'/summary.json');
        return $response;  	
    }
    
    public function resumenVehiculo(ValidateFechaAPIRequest $request, $vehiculoId){
    	if ($request->session()->has('errors'))
		{
			$value = $request->session()->get('errors')->all();
			return $value;
		}
		$response = Api::requestApi('https://us.mzoneweb.net/api/v2/vehicles/'.$vehiculoId.'/trips/'.$request->input('fechaini').'/'.$request->input('fechafin').'/summary.json');
        return $response;	
	}
}
