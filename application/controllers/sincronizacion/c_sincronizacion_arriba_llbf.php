<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_sincronizacion_arriba_llbf extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/sincronizacion/m_sincronizacion_arriba_llbf');//carga el controlador modelo
    }
                                                                                                                                                                                                       
    public function t_historicoestacionestadoeditar_llbf() {
        $bd_verfiducia = $this->m_sincronizacion_arriba_llbf->t_historicoestacionestadoeditar_llbf();$payload = json_encode($bd_verfiducia);$url = 'https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_arriba_llbf/t_historicoestacionestadoeditar_llbf';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);
    }
   
}
