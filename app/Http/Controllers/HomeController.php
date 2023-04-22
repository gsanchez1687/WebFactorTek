<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index(){

      $responseBanner = ApiResponse::getBanner();
      $responseChar = ApiResponse::getCharacteristics();
      $responseBenefits = ApiResponse::getBenefits();
      $responseNetworks = ApiResponse::getNetworks();
      $responseContacs = ApiResponse::getContacs();

        return view('index')->with([
            'responseBanner'=>$responseBanner,
            'responseChar'=>$responseChar,
            'responseBenefits'=>$responseBenefits,
            'responseNetworks'=>$responseNetworks,
            'responseContacs'=>$responseContacs,
        ]);
        
    }
}
