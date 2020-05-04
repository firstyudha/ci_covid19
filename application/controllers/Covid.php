<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Covid extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Covid_model','covid');
    }

    function index(){
        $indonesia = $this->covid->get_indonesia();
        $global = $this->covid->get_global();
        $provinsi = $this->covid->get_provinsi();
        $countries = $this->covid->get_countries();

        
        $data['indonesia'] = $indonesia;
        $data['global'] = $global;
        $fetchprovinsi = $provinsi['data'];
        $data['provinsi'] = $fetchprovinsi;
        $data['countries'] = $countries;

       $this->load->view('vhome', $data);
	}
	
	function covidMap() {
		$this->load->view('vmap');
    }
    
    function jabar(){
        $this->load->view('vjabar');
	}
	
	function mapJabar() {
		$this->load->view('vmap_jabar');
	}

}

?>