<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Covid extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Covid_model','covid');
    }

    function index(){
        $dunia = $this->covid->get_dunia();
        $indonesia = $this->covid->get_indonesia();
        $provinsi = $this->covid->get_provinsi();
        $positif = $this->covid->get_positif();
        $sembuh = $this->covid->get_sembuh();
        $meninggal = $this->covid->get_meninggal();

        $data['positif'] = $positif;
        $data['sembuh'] = $sembuh;
        $data['meninggal'] = $meninggal;
        $data['indonesia'] = $indonesia;
        $data['provinsi'] = $provinsi;
        $data['countries'] = $dunia;

        $this->load->view('vhome', $data);
    }


}

?>