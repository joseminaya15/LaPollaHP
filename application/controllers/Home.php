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
	    /*if(isset($_GET['code']) == false){
			header("location: http://www.marketinghp.net/microsite/La_Polla/factura");
		}*/
	    $html 			  = '';
	    $dates 			  = '';
	    $fecha1			  = '';
	    $hora1 			  = '';
	    $fecha 			  = date("d/m/Y");
	    $hora 			  = date("h:i");
	    $cont 			  = 1;
	    $i 				  = 0;
	    $aciertos 		  = 0;
	    if($this->input->post('nombre')/*'a'*/ != null && $this->input->post('acumulado')/*'a'*/ != null){
	    	$nombre  =  $this->input->post('nombre')/*'QW5kcmVh'*/;
	    	$acum    =  $this->input->post('acumulado')/*'NjAwMA=='*/;
	    	$email   =  base64_decode($this->input->post('email'))/*'jhonatanibericom@gmail.com'*/;
	    	$canal   =  base64_decode($this->input->post('canal'))/*'HP'*/;
	    	$ciudad  =  base64_decode($this->input->post('ciudad'))/*'Lima'*/;
			$data['nombre']   = isset($nombre) == true ? base64_decode($nombre) : '-';
			$canti 			  = isset($acum) == true ? intval(base64_decode($acum)) : 1;
	    }else {
	    	$email    = $this->input->post('email');
	    	$nombre   = $this->session->userdata('nombre');
	    	$acum     = $this->session->userdata('acumulado');
	    	$ciudad   = $this->session->userdata('ciudad');
	    	$canal     = $this->session->userdata('canal');
			$data['nombre'] = $nombre;
			$canti 		    = $acum;
	    }
	    $session = array('nombre'    => $data['nombre'],
	 				     'acumulado' => $canti,
	 				 	 'email'     => $email,
	 				 	 'canal'     => $canal,
	 				 	 'ciudad'    => $ciudad);
        $this->session->set_userdata($session);
        $datos = $this->M_datos->getVersus();
        foreach ($datos as $key) {
        	$disabled = '';
        	$puntos   = 0;
        	$color = '';
        	$checked1 = '';
        	$checked2 = '';
        	$checked3 = '';
        	$cont1 = $cont+1;
	    	$cont2 = $cont1+1;
	    	$paises = $this->M_datos->getDatosAnotaciones($data['nombre']);
	    	foreach ($paises as $val) {
	    		if($val->id_contrin == $key->Id){
	    			$color 	  = 'style="background-color: #D0D0D0"';
	    			$disabled = 'disabled';
	    		}
	    		if($val->id_contrin == $key->Id && $key->res_pais == $val->marcador){
	    			$puntos = 10;
	    			$arrayUpdate = array('puntos' => $puntos);
	    			$this->M_datos->updateDatos($arrayUpdate, $val->Id, 'anotaciones');
	    			$aciertos++;
	    		}
	    		if($val->id_contrin == $key->Id && $key->pais1 == $val->marcador){
	    			$checked1  = 'checked';
	    		}else if($val->id_contrin == $key->Id && $key->pais2 == $val->marcador){
	    			$checked2  = 'checked';
	    		}else if($val->empate == '1' && $val->id_contrin == $key->Id){
	    			$checked3  = 'checked';
	    		}
	    	}
	    	$dates  = explode(" ", $key->fecha_verif);
	    	$fecha1 = $dates[0];
	    	$hora1  = $dates[1];
	    	if($fecha == $fecha1 && intval(substr($hora1, 0, 2)) - intval(substr($hora, 0, 2)) <= 6){
	    		$color 	  = 'style="background-color: #D0D0D0"';
    			$disabled = 'disabled';
	    	}
	    	if($fecha > $fecha1){
	    		$color 	  = 'style="background-color: #D0D0D0"';
    			$disabled = 'disabled';
	    	}
	    	if($cont == 142 && $puntos == 10){
             	$data['bloqueo'] = '';
            }else {
            	$data['bloqueo'] = 'class="js-partidos--disabled"';
            }
        	$html .= '<div class="js-partidos" id="'.$cont.'" data-Id="'.$key->Id.'" '.$color.'>
	                        <div class="js-partidos__fecha">
	                            <p>'.$key->fecha_juego.' Hora Local '.$key->grupo.'</p>
	                        </div>
	                        <div class="js-partidos__versus">
	                            <div class="js-partido__versus--flag">
	                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-'.$cont.'">
	                                    <span class="mdl-radio__label">'.$key->pais1.'</span>
	                                    <input type="radio" id="option-'.$cont.'" class="mdl-radio__button" '.$checked1.' name="options'.$cont.'" value="1" onchange="openModalConfirmar(this.id)" '.$disabled.'>
	                                </label>
	                                <img src="'.RUTA_IMG.'paises/'.$key->img1.'.png">
	                            </div>
	                            <p>VS</p>
	                            <div class="js-partido__versus--flag">
	                                <img src="'.RUTA_IMG.'paises/'.$key->img2.'.png">
	                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-'.$cont1.'">
	                                    <input type="radio" id="option-'.$cont1.'" class="mdl-radio__button" '.$checked2.' name="options'.$cont.'" value="1" onchange="openModalConfirmar(this.id)" '.$disabled.'>
	                                    <span class="mdl-radio__label">'.$key->pais2.'</span>
	                                </label>
	                            </div>
	                        </div>
	                        <div class="js-partidos__empate">
	                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-'.$cont2.'">
	                                <input type="radio" id="option-'.$cont2.'" class="mdl-radio__button" name="options'.$cont.'" '.$checked3.' value="1" onchange="openModalConfirmar(this.id)" '.$disabled.'>
	                                <span class="mdl-radio__label">Empate</span>
	                            </label>
	                        </div>
	                        <div class="js-partidos__score">
	                            <small>0 - 0</small>
	                        </div>
	                        <div class="js-partidos__puntaje">
	                            <span>'.$puntos.' puntos</span>
	                        </div>
	                    </div>';
	            $cont = $cont2+1;
	            $i++;
        }
        $puntos = $this->M_datos->getSumUser($data['nombre']);
        $existe = $this->M_datos->getExistentes($data['nombre'], $email);
        $data['html'] = $html;
	    $data['cantidad'] = round($canti);
	    $multi 			  = $canti/5000;
	    $data['puntos']   = isset($puntos[0]->puntos) == true ? $puntos[0]->puntos : '0';
	    $data['multi']    = intval($multi);
	    if($existe[0]->existe == 0) {
        	$arrayInsert = array('Nombre' 	   	  => $data['nombre'],
			                     'Correo'  	   	  => $email,
			                 	 'monto' 		  => round($canti),
			                 	 'puntos'         => $data['puntos'],
			                 	 'multiplicacion' => intval($multi),
			                 	 'ciudad' 	  	  => $ciudad,
			                 	 'canal' 		  => $canal,
			                 	 'aciertos'       => $aciertos,
			                 	 'total_puntos'   => intval($multi)*$data['puntos']);
			$datoInsert = $this->M_datos->insertarDatos($arrayInsert, 'personas');	
        }else {
        	$arrayUpdate = array('puntos' => $data['puntos'],
        						 'aciertos' => $aciertos,
        						 'monto' 	=> round($canti),
        						 'total_puntos' => intval($multi)*$data['puntos'],
        						 'multiplicacion' => intval($multi));
	    	$this->M_datos->updatePuntos($arrayUpdate, $data['nombre'], 'personas');
        }
		$this->load->view('v_home', $data);
	}
	function guardarScore(){
		$data['error'] = EXIT_ERROR;
		$data['msj']   = null;
		try {
			$cont   = $this->input->post('cont');
			$pais   = $this->input->post('pais');
			$empate = $this->input->post('empate');
			$Id 	= $this->input->post('Id');
			$arrayInsert = array('marcador' 	   => $pais,
   			                     'name_user'  	   => $this->session->userdata('nombre'),
   			                 	 'fecha_marcacion' => date("Y-m-d h:i:sa"),
   			                 	 'puntos'          => 0,
   			                 	 'empate' 		   => $empate,
   			                 	 'id_contrin' 	   => $Id);
   			$datoInsert = $this->M_datos->insertarDatos($arrayInsert, 'anotaciones');
			$data['error'] = EXIT_SUCCESS;
		}catch(Exception $e){
			$data['msj'] = $e->getMessage();
		}
		echo json_encode($data);
	}

	function agregarDatosElim(){
		$data['error'] = EXIT_ERROR;
		$data['msj']   = null;
		try {
			$html 			  = '';
		    $dates 			  = '';
		    $fecha1			  = '';
		    $hora1 			  = '';
		    $fecha 			  = date("d/m/Y");
		    $hora 			  = date("h:i");
		    $cont 			  = 150;
		    $i 				  = 0;
	        $datos = $this->M_datos->getEliminatorias();
	        foreach ($datos as $key) {
	        	$disabled = '';
	        	$puntos   = 0;
	        	$color = '';
	        	$checked1 = '';
	        	$checked2 = '';
	        	$checked3 = '';
	        	$cont1 = $cont+1;
		    	$cont2 = $cont1+1;
		    	$paises = $this->M_datos->getDatosAnotacionesElim($this->session->userdata('nombre'));
		    	foreach ($paises as $val) {
		    		if($val->id_contr == $key->Id){
		    			$color 	  = 'style="background-color: #D0D0D0"';
		    			$disabled = 'disabled';
		    		}
		    		if($val->id_contr == $key->Id && $key->res_e == $val->marcador_e){
		    			$puntos = 10;
		    		}
		    		if($val->id_contr == $key->Id && $key->e_pais1 == $val->marcador_e){
		    			$checked1  = 'checked';
		    		}else if($val->id_contr == $key->Id && $key->e_pais2 == $val->marcador_e){
		    			$checked2  = 'checked';
		    		}else if($val->empate_e == '1' && $val->id_contr == $key->Id){
		    			$checked2  = 'checked';
		    		}
		    	}

		    	$dates  = explode(" ", $key->fecha_verif);
		    	$fecha1 = $dates[0];
		    	$hora1  = $dates[1];
		    	if($fecha == $fecha1 && intval(substr($hora1, 0, 2)) - intval(substr($hora, 0, 2)) <= 6){
		    		$color 	  = 'style="background-color: #D0D0D0"';
	    			$disabled = 'disabled';
		    	}
		    	/*if($fecha > $fecha1){
		    		//print_r('entra3');
		    		$color 	  = 'style="background-color: #D0D0D0"';
	    			$disabled = 'disabled';
		    	}*/
                $html .= '<div class="js-partidos" id="'.$cont.'">
                                <div class="js-partidos__fecha">
                                    <p>'.$key->fecha_juego.' Hora '.$key->e_grupo.' '.$key->estadio.'</p>
                                </div>
                                <div class="js-partidos__versus">
                                    <div class="js-partido__versus--flag">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect js-radio--right js-right" for="option-'.$cont.'">
                                            <span class="mdl-radio__label">'.$key->pais1.'</span>
                                            <input type="radio" id="option-'.$cont.'" class="mdl-radio__button" '.$checked1.' name="options'.$cont.'" value="1" onclick="guardarScore(&#39;'.$key->pais1.'&#39;, &#39; &#39;, '.$cont.')" '.$disabled.'>
                                        </label>
                                        <img src="'.RUTA_IMG.'paises/'.$key->img1.'.png">
                                    </div>
                                    <p>VS</p>
                                    <div class="js-partido__versus--flag">
                                        <img src="'.RUTA_IMG.'paises/'.$key->img2.'.png">
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-'.$cont1.'">
                                            <input type="radio" id="option-'.$cont1.'" class="mdl-radio__button" name="options'.$cont.'" value="1" onclick="guardarScore(&#39;'.$key->pais2.'&#39;, &#39; &#39;, '.$cont.')" '.$disabled.'>
                                            <span class="mdl-radio__label">'.$key->pais2.'</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="js-partidos__empate">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-'.$cont2.'">
                                        <input type="radio" id="option-'.$cont2.'" class="mdl-radio__button" name="options'.$cont.'" value="1" onclick="guardarScore(&#39;'.$key->pais1.', '.$key->pais2.'&#39;, &#39;Empate&#39;, '.$cont.')" '.$disabled.'>
                                        <span class="mdl-radio__label">Empate</span>
                                    </label>
                                </div>
                                <div class="js-partidos__score">
                                    <small>0 - 0</small>
                                </div>
                                <div class="js-partidos__puntaje">
                                    <span>'.$puntos.' puntos</span>
                                </div>
                            </div>';
                     if($cont == 71){
                     	$html .= '<div class="title-fase">
	                                <p>Cuartos de final</p>
	                            </div>';
                     }
                     if($cont == 83){
                     	$html .= '<div class="title-fase">
	                                <p>Semifinales</p>
	                            </div>';
                     }
                     if($cont == 89){
                     	$html .= '<div class="title-fase">
	                                <p>Partido por el tercer puesto</p>
	                            </div>';
                     }
                     if($cont == 92){
                     	$html .= '<div class="title-fase">
	                                <p>Partido por el tercer puesto</p>
	                            </div>';
                     }
		            $cont = $cont2+1;
		            $i++;
	        }
	        $data['html'] = $html;
		$data['error'] = EXIT_SUCCESS;
		}catch(Exception $e){
			$data['msj'] = $e->getMessage();
		}
		echo json_encode($data);
	}
	function cerrarCesion(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            session_destroy();
            $data['error'] = EXIT_SUCCESS;
        } catch (Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}