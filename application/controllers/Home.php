<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$datos = file_get_contents('http://www.marketinghp.net/microsite/La_Polla_HP/Controladores/Registros');
		/*echo $datos;
		exit;*/
		$this->load->view('v_home');
	}
}