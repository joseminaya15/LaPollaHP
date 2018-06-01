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
	    $data['nombre'] = 'jhonatan'/*$obj[1]->nombre*/;
	    /*$datos = $this->M_datos->getVersus();
	    foreach ($datos as $key) {
	    	$paises = $this->M_datos->getDatosPaises($key->Id);
	    	foreach ($paises as $val) {
	    		$html1 .= '<div class="js-partido__versus--flag">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-1">
                                        <span class="mdl-radio__label">'.$val->Nombres.'</span>
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked onclick="guardarScore('', '')">
                                    </label>
                                    <img src="<?php echo RUTA_IMG?>paises/'.$val->img.'.png">
                                </div>';
	    	}
	    	$html .= '<div class="js-partidos__fecha">
                                    <p>14 jun. 2018 - 10:00 Hora Local Grupo A</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-1">
                                            <span class="mdl-radio__label">Rusia</span>
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked onclick="guardarScore('Rusia', '')">
                                        </label>
                                        <img src="<?php echo RUTA_IMG?>paises/rusia.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="<?php echo RUTA_IMG?>paises/arabia_saudita.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                            <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="1" checked onclick="guardarScore('Arabia Saudi', '')">
                                            <span class="mdl-radio__label">Arabia Saudi</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                                        <input type="radio" id="option-3" class="mdl-radio__button" name="options" value="1" checked onclick="guardarScore('Rusia, Arabia Saudi', 'Empate')">
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>10 puntos</span>
                                </div>';
	    }*/
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