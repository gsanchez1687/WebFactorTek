<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

class ApiResponse{

    public static function getBanner(){
		$url_api = "http://127.0.0.1:8000/header";
        $response = Http::get($url_api);
       if( !empty($response) ){
			if($response['code'] == "200" ){
				$json = $response->json();
				return $json;
			}
	   }
    }

    public static function getCharacteristics(){
		$url_api = "http://127.0.0.1:8000/characteristics";
        $response = Http::get($url_api);
       if( !empty($response) ){
			if($response['code'] == "200" ){
				$json = $response->json();
				return $json;
			}
	   }
    }

    public static function getBenefits(){
		$url_api = "http://127.0.0.1:8000/benefits";
        $response = Http::get($url_api);
       if( !empty($response) ){
			if($response['code'] == "200" ){
				$json = $response->json();
				return $json;
			}
	   }
    }

    public static function getNetworks(){
		$url_api = "http://127.0.0.1:8000/networks";
        $response = Http::get($url_api);
       if( !empty($response) ){
			if($response['code'] == "200" ){
				$json = $response->json();
				return $json;
			}
	   }
    }
	public static function getContacs(){
		$url_api = "http://127.0.0.1:8000/contacts";
        $response = Http::get($url_api);
       if( !empty($response) ){
			if($response['code'] == "200" ){
				$json = $response->json();
				return $json;
			}
	   }
    }
}