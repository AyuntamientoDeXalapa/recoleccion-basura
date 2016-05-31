<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Api;
class PosicionesViajeController extends Controller
{
    //
    public function index(Request $request, $viajeId){
    	if ($request->has('tiempo')){
    		if ($request->input('tiempo') == 'true'){
				$response = Api::requestApi('https://us.mzoneweb.net/api/v2/trips/'.$viajeId.'/tripwithpositions.json?timestamps=true');
				return $response;  		
    		}		
    	}
    	$response = Api::requestApi('https://us.mzoneweb.net/api/v2/trips/'.$viajeId.'/tripwithpositions.json');
    	return $response;
    }
}
