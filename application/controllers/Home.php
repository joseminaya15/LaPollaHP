<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
        //$this->load->model('M_datos');
        $this->load->helper("url");
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }

	public function index(){
		/*$url = 'http://www.marketinghp.net/microsite/La_Polla_HP/Controladores/Registros';
		$html  = '';
		$html1 = '';
		$json = file_get_contents($url);
	    $obj  = json_decode($json);*/
	    $data['nombre']   = isset($_GET['code']) == true ? base64_decode($_GET['code']) : '-';
	    $canti 			  = isset($_GET['cantidad']) == true ? base64_decode($_GET['cantidad']) : 1;
	    $data['cantidad'] = $canti ;
	    $multi = $canti/5000;
	    $data['puntos']   = '0';
	    $data['multi']    = $multi;
		$this->load->view('v_home', $data);
	}
	function guardarScore(){
		$data['error'] = EXIT_ERROR;
		$data['msj']   = null;
		try {

			$data['error'] = EXIT_SUCCESS;
		}catch(Exception $e){
			$data['msj'] = $e->getMessage();
		}
		echo json_encode($data);
	}
}