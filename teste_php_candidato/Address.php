<?php

class Address {

    /**
     * Busca o endereco completo pelo cep
     * @param string $cep
     * @return SimpleXMLElement
     */
    public function get_address($cep){
	
        $cep = preg_replace("/[^0-9]/", "", $cep);
        // url da api faltando '/' ws$cep, ws/$cep
        $url = "http://viacep.com.br/ws/$cep/xml/";
    
        return simplexml_load_file($url);
    }

}