<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Api;
class UltimaPosicionVehiculoController extends Controller
{
    //
    public function index($vehiculoId){
    	$response = Api::requestApi('https://us.mzoneweb.net/api/v2/vehicles/'.$vehiculoId.'/lastknownposition.json');
    	return $response;
    }
}
