<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ranking extends CI_Controller {

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
        $html    = '';
        $puesto  = 1;
        $datos   = $this->M_datos->getRankingPuntos();
        if(count($datos) == 0){
            $html = '<tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>';
        }
        foreach ($datos as $key) {
            $html .= '<tr>
                        <td>'.$key->Nombre.'</td>
                        <td>'.$key->ciudad.'</td>
                        <td>'.$key->canal.'</td>
                        <td>'.$key->Correo.'</td>
                        <td>'.$key->monto.'</td>
                        <td>'.$key->aciertos.'</td>
                        <td>'.$key->puntos.'</td>
                        <td>x'.$key->multiplicacion.'</td>
                        <td>'.$key->total_puntos.'</td>
                        <td>'.$puesto.'</td>
                    </tr>';
            $puesto++;
        }
        $data['participantes'] = count($datos);
        $data['html']          = $html;
		$this->load->view('v_ranking', $data);
	}
}