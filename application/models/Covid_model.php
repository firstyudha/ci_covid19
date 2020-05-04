<?php

use GuzzleHttp\Client;

class Covid_model extends CI_Model{

    private $_client;
    private $_clientid;
    private $_clientidkl;
    private $_clientpikobar;

	function __construct(){
        parent:: __construct();
        set_time_limit(0);
		    $this->_client = new Client([
            'base_uri' => 'https://covid19.mathdro.id/api/'
        ]);

        $this->_clientid = new Client([
            'base_uri' => 'https://indonesia-covid-19-api.now.sh/api/'
        ]);

        $this->_clientidkl = new Client([
          'base_uri' => 'https://api.kawalcorona.com/'
        ]);

        $this->_clientpikobar = new Client([
          'base_uri' => 'https://covid19-public.digitalservice.id/api/v1/'
        ]);
        
    }

    

    function get_indonesia(){
      $response = $this->_client->request('GET','countries/indonesia');
  
         return $result = json_decode($response->getBody()->getContents(), true);
          return $result;
    }
    

    function get_global(){
		$response = $this->_client->request('GET');

       return $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    
    
    
    function get_provinsi(){
		$response = $this->_clientid->request('GET','provinsi');

       return $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    
    function get_countries(){
		$response = $this->_clientidkl->request('GET');

       return $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    function get_rekapitulasijabar(){
    $response = $this->_clientpikobar->request('GET','rekapitulasi/jabar');

        return $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

      function get_sebaranjabar(){
      $response = $this->_clientpikobar->request('GET','sebaran/jabar');
  
          return $result = json_decode($response->getBody()->getContents(), true);
          return $result;
      }

}

?>