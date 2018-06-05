<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('M_datos');
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
	    $html 			  = '';
	    $cont 			  = 1;
	    $data['nombre']   = isset($_GET['nombre']) == true ? base64_decode($_GET['nombre']) : '-';
	    $canti 			  = isset($_GET['acumulado']) == true ? base64_decode($_GET['acumulado']) : 1;
	    $session    	  = array('nombre' => $_GET['nombre']);
        $this->session->set_userdata($session);
        $datos = $this->M_datos->getVersus();
        foreach ($datos as $key) {
        	$cont1 = $cont+1;
	    	$cont2 = $cont1+1;
        	$html .= '<div class="js-partidos" id="'.$cont.'" data-date="'.$key->fecha.'">
	                        <div class="js-partidos__fecha">
	                            <p>'.$key->fecha_juego.' Hora Local Grupo A</p>
	                        </div>
	                        <div class="js-partidos__versus">
	                            <div class="js-partido__versus--flag">
	                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-'.$cont.'">
	                                    <span class="mdl-radio__label">'.$key->pais1.'</span>
	                                    <input type="radio" id="option-'.$cont.'" class="mdl-radio__button" name="options'.$cont.'" value="1" onclick="guardarScore(&#39;'.$key->pais1.'&#39;, &#39; &#39;, '.$cont.')">
	                                </label>
	                                <img src="'.RUTA_IMG.'paises/'.$key->img1.'.png">
	                            </div>
	                            <p>VS</p>
	                            <div class="js-partido__versus--flag">
	                                <img src="'.RUTA_IMG.'paises/'.$key->img2.'.png">
	                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-'.$cont1.'">
	                                    <input type="radio" id="option-'.$cont1.'" class="mdl-radio__button" name="options'.$cont.'" value="1" onclick="guardarScore(&#39;'.$key->pais2.'&#39;, &#39; &#39;, '.$cont.')">
	                                    <span class="mdl-radio__label">'.$key->pais2.'</span>
	                                </label>
	                            </div>
	                        </div>
	                        <div class="js-partidos__empate">
	                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-'.$cont2.'">
	                                <input type="radio" id="option-'.$cont2.'" class="mdl-radio__button" name="options'.$cont.'" value="1" onclick="guardarScore(&#39;'.$key->pais2.', '.$key->pais2.'&#39;, &#39;Empate&#39;, '.$cont.')">
	                                <span class="mdl-radio__label">Empate</span>
	                            </label>
	                        </div>
	                        <div class="js-partidos__score">
	                            <small>0 - 0</small>
	                        </div>
	                        <div class="js-partidos__puntaje">
	                            <span>0 puntos</span>
	                        </div>
	                    </div>';
	            $cont = $cont2+1;
        }
        $data['html'] = $html;
	    $data['cantidad'] = $canti ;
	    $multi 			  = $canti/5000;
	    $data['puntos']   = '0';
	    $data['multi']    = $multi;
		$this->load->view('v_home', $data);
	}
	function guardarScore(){
		$data['error'] = EXIT_ERROR;
		$data['msj']   = null;
		try {
			$cont   = $this->input->post('cont');
			$pais   = $this->input->post('pais');
			$empate = $this->input->post('empate');
			$arrayInsert = array('marcador' 	   => $datos,
   			                     'name_user'  	   => $this->session->userdata('nombre'),
   			                 	 'fecha_marcacion' => $fecha_marcacion,
   			                 	 'puntos'          => $puntos,
   			                 	 'empate' 		   => $empate);
   			$datoInsert = $this->M_datos->insertarDatos($arrayInsert, 'anotaciones');
			$data['error'] = EXIT_SUCCESS;
		}catch(Exception $e){
			$data['msj'] = $e->getMessage();
		}
		echo json_encode($data);
	}
}