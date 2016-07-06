<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Api;
use Illuminate\Http\Response;

class GruposVehiculoController extends Controller
{
    public function show(){
    	
    }

    public function index(){
    	$response = Api::requestApi('https://us.mzoneweb.net/api/v2/vehiclegroups.json');
    	return $response;
    }
}
