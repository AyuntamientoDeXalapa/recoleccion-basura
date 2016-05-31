<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Api;
class SitiosController extends Controller
{
     public function index(){
    	$response = Api::requestApi('https://us.mzoneweb.net/api/v2/places.json');
    	return $response;
    }
}
