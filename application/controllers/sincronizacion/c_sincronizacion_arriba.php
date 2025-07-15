<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_sincronizacion_arriba extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/sincronizacion/m_sincronizacion_arriba');//carga el controlador modelo
    }

    public function t11_madres_adolecentes() {$bd_verfiducia = $this->m_sincronizacion_arriba->t11_madres_adolecentes();$payload = json_encode($bd_verfiducia);$url = SINCRO.'c_sincronizacion_arriba/t11_madres_adolecentes';$ch = curl_init($url);curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);$result = curl_exec($ch);echo json_encode($result);curl_close($ch);}

    public function t11_madres_adolecentes_update()
    {
     $this->m_sincronizacion_arriba->t11_madres_adolecentes_update();
      echo json_encode ('ok');
    }
}
