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

        $rekapitulasijabar = $this->covid->get_rekapitulasijabar();

        //positif,sembuh,meninggal
        $fetchpositif = $rekapitulasijabar['data']['content']['positif'];
        $fetchpositifL = $rekapitulasijabar['data']['content']['positif_per_gender']['laki_laki'];
        $fetchpositifP = $rekapitulasijabar['data']['content']['positif_per_gender']['perempuan'];

        $fetchsembuh = $rekapitulasijabar['data']['content']['sembuh'];
        $fetchsembuhL = $rekapitulasijabar['data']['content']['sembuh_per_gender']['laki_laki'];
        $fetchsembuhP = $rekapitulasijabar['data']['content']['sembuh_per_gender']['perempuan'];

        $fetchmeninggal = $rekapitulasijabar['data']['content']['meninggal'];
        $fetchmeninggalL = $rekapitulasijabar['data']['content']['meninggal_per_gender']['laki_laki'];
        $fetchmeninggalP = $rekapitulasijabar['data']['content']['meninggal_per_gender']['perempuan'];

        //ODP
        $fetchodpproses = $rekapitulasijabar['data']['content']['odp_proses'];
        $fetchodpselesai = $rekapitulasijabar['data']['content']['odp_selesai'];
        $fetchodptotal = $rekapitulasijabar['data']['content']['odp_total'];
        $fetchodpgenderL = $rekapitulasijabar['data']['content']['odp_total_per_gender']['laki_laki'];
        $fetchodpgenderP = $rekapitulasijabar['data']['content']['odp_total_per_gender']['perempuan'];

        //PDP
        $fetchpdpproses = $rekapitulasijabar['data']['content']['pdp_proses'];
        $fetchpdpselesai = $rekapitulasijabar['data']['content']['pdp_selesai'];
        $fetchpdptotal = $rekapitulasijabar['data']['content']['pdp_total'];
        $fetchpdpgenderL = $rekapitulasijabar['data']['content']['pdp_total_per_gender']['laki_laki'];
        $fetchpdpgenderP = $rekapitulasijabar['data']['content']['pdp_total_per_gender']['perempuan'];

        //RDT
        $fetchrdttotal = $rekapitulasijabar['data']['content']['rdt']['total'];
        $fetchrdtpositif = $rekapitulasijabar['data']['content']['rdt']['positif'];
        $fetchrdtnegatif = $rekapitulasijabar['data']['content']['rdt']['negatif'];
        $fetchrdtinvalid = $rekapitulasijabar['data']['content']['rdt']['invalid'];
        $fetchrdtbelumdiketahui = $rekapitulasijabar['data']['content']['rdt']['belum_diketahui'];

        //PCR
        $fetchpcrtanggal = $rekapitulasijabar['data']['content']['pcr']['tanggal'];
        $fetchpcrjumlahsampling = $rekapitulasijabar['data']['content']['pcr']['jumlah_sampling'];
        $fetchpcrpositif = $rekapitulasijabar['data']['content']['pcr']['positif'];
        $fetchpcrnegatif = $rekapitulasijabar['data']['content']['pcr']['negatif'];


        $data = [
            'positif' => $fetchpositif,
            'positifL' => $fetchpositifL,
            'positifP' => $fetchpositifP,
            'sembuh' => $fetchsembuh,
            'sembuhL' => $fetchsembuhL,
            'sembuhP' => $fetchsembuhP,
            'meninggal' => $fetchmeninggal,
            'meninggalL' => $fetchmeninggalL,
            'meninggalP' => $fetchmeninggalP,
            'odpProses' => $fetchodpproses,
            'odpSelesai' => $fetchodpselesai,
            'odpTotal' => $fetchodptotal,
            'pdpProses' => $fetchpdpproses,
            'pdpSelesai' => $fetchpdpselesai,
            'pdpTotal' => $fetchpdptotal,
            'rdtTotal' => $fetchrdttotal,
            'rdtPositif' => $fetchrdtpositif,
            'rdtNegatif' => $fetchrdtnegatif,
            'rdtInvalid' => $fetchrdtinvalid,
            'rdtBL' => $fetchrdtbelumdiketahui,
            'pcrPositif' => $fetchpcrpositif,
            'pcrNegatif' => $fetchpcrnegatif,
            'pcrTanggal' => $fetchpcrtanggal,
            'pcsJmlSampling' => $fetchpcrjumlahsampling
        ];

        $this->load->view('vjabar',$data);
    }

    function sebaran(){
        $sebaranjabar = $this->covid->get_sebaranjabar();

        $fetchlastupdate = $sebaranjabar['data']['metadata']['last_update'];
        $fetchcontent = $sebaranjabar['data']['content'];
        $data['updated'] = $fetchlastupdate;
        $data['sebaran'] = $fetchcontent;

        $this->load->view('vjabar_sebaran',$data);
    }

}

?>