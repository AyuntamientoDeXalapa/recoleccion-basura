<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Api;
class ViajesController extends Controller
{
    public function index($vehiculoId){
    	$response = Api::requestApi('https://us.mzoneweb.net/api/v2/vehicles/'.$vehiculoId.'/trips.json');
    	return $response;
    }
}
