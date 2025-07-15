<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_sincronizacion_actualizacion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/sincronizacion/m_sincronizacion_actualizacion');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 

	public function fc_sin_actualizacion() {
        
        
        $bd_verfiducia = $this->m_sincronizacion_actualizacion->fm_sin_actualizacion();
        // echo json_encode($bd_verfiducia);

        $payload = json_encode($bd_verfiducia);

        $url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_actualizacion/fc_sin_actualizacion';
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

	public function fc_sin_actualizacionok() {        
        
        $this->m_sincronizacion_actualizacion->fm_sin_actualizacionok();

    }    
    
}
