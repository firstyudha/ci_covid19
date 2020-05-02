<?php

use GuzzleHttp\Client;

class Covid_model extends CI_Model{

    private $_client;

	function __construct(){
		parent:: __construct();
		$this->_client = new Client([
            'base_uri' => 'https://api.kawalcorona.com/'
        ]);
    }
    
    function get_dunia(){
		$response = $this->_client->request('GET');

       return $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    
    function get_indonesia(){
		$response = $this->_client->request('GET','indonesia');

       return $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    
    function get_provinsi(){
		$response = $this->_client->request('GET','indonesia/provinsi');

       return $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    
    function get_positif(){
		$response = $this->_client->request('GET','positif');

       return $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    function get_sembuh(){
		$response = $this->_client->request('GET','sembuh');

       return $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    function get_meninggal(){
		$response = $this->_client->request('GET','meninggal');

       return $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

}

?>