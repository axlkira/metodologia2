<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_oportunidad_integrantehistoricocifd extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/sincronizacion/m_oportunidad_integrantehistoricocifd');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 

	public function fc_oportunidad_integrantehistoricocifd() {
        
        		$arrContextOptions=array(
			"ssl"=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
			),
		);  
        
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_oportunidad_integrantehistoricocifd/fc_oportunidad_integrantehistoricocifd?pdoccogestor='.$this->session->userdata('documento'), false, stream_context_create($arrContextOptions));
        $listarfiducias = json_decode($listarbac);
        
        foreach ($listarfiducias as $fiducia)
        {  

        $this->m_oportunidad_integrantehistoricocifd->fm_oportunidad_integrantehistoricocifd($fiducia);

        } 

        echo json_encode('ok');
    }

	
}
