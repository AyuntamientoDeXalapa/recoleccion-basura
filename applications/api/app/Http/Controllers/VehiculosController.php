<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Api;
class VehiculosController extends Controller
{
    //
    public function index($grupoId){
    	$response = Api::requestApi('https://us.mzoneweb.net/api/v2/vehiclegroups/'.$grupoId.'/vehicles.json');
    	return $response;
    }
}
