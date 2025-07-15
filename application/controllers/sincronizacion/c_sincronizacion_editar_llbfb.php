<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_sincronizacion_editar_llbfb extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/sincronizacion/m_sincronizacion_editar_llbfb');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 

	public function fc_sin_editar_llbf() {
        
        $bd_verfiducia = $this->m_sincronizacion_editar_llbfb->fm_sin_editar_llbf();
        // echo json_encode($bd_verfiducia);

        $payload = json_encode($bd_verfiducia);

        $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_editar_llbfb/fc_sin_editar_llbf';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_exec($ch);
        $result = curl_exec($ch);
        echo json_encode($result);
        curl_close($ch);
    }
    
}
