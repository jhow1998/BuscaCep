<?php

namespace App\WebService;

class ViaCEP{

    /**
     * Metodo responsavel por consulta um cep no viaCep
     * @param string
     * @return array
     */

    public static function consultaCEP($cep){
        //inicia o Curl

        $curl = curl_init();

        //config do curl
        curl_setopt_array($curl,[
            CURLOPT_URL =>'https://viacep.com.br/ws/'.$cep.'/json/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        //response

        $response = curl_exec($curl);
        
        //FECHA A CONEXÃO ABERTA
        curl_close($curl);

        //CONVERTE O JSON PARA ARRAY
        $array = json_decode($response,true);
        
        //RETORNA O CONTÉUDO EM ARRAY
         return isset($array['cep']) ? $array : null;


    }
}