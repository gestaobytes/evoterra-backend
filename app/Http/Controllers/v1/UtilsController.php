<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;

class UtilsController extends Controller {

    public function cep($cep)
    {
        $url =  "https://viacep.com.br/ws/$cep/json";
        $json = file_get_contents($url);
        $cep = json_decode($json, true);
        return $cep;
    }

    public function cnpj($cnpj)
    {
        $url =  "https://www.receitaws.com.br/v1/cnpj/$cnpj";
        $json = file_get_contents($url);
        $cnpj = json_decode($json, true);
        return $cnpj;
    }





}
