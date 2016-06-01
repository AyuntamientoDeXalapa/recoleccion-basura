<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    //
    public static function requestApi($url)
    {
        $login 		= $_ENV['TELCEL_API_USERNAME'];
		$password 	= $_ENV['TELCEL_API_PASSWORD']; 
		$ch 		= curl_init();
		
		// Librería CURL para hacer el llamado de la url por el protocolo HTTP con usuario y contraseña
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");
		// Resultado de la petición
		$result 	= curl_exec($ch);
		// Cerrar petición
		curl_close($ch); 
		// Imprimir petición
		return $result;
		//var_dump(json_encode($result));
		// Apartir de aqui se puede meter a una base de datos o publicar este mismo archivo en una url

		
    }
}
