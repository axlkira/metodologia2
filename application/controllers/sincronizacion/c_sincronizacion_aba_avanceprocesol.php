<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_sincronizacion_aba_avanceprocesol extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/sincronizacion/m_sincronizacion_aba_avanceprocesol');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 

	public function fc_aba_avanceproceso() {
        
        		$arrContextOptions=array(
			"ssl"=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
			),
		);  
        
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_avanceproceso/fc_aba_avanceproceso?pdoccogestor='.$this->session->userdata('documento'), false, stream_context_create($arrContextOptions));
        $listarfiducias = json_decode($listarbac);
        
        foreach ($listarfiducias as $fiducia)
        {  

        $this->m_sincronizacion_aba_avanceprocesol->fm_aba_avanceproceso($fiducia->folio,$fiducia->estacion,$fiducia->dimerfam,$fiducia->dimdllohum,$fiducia->textoavance,$fiducia->textoavance2,$fiducia->doccogestor,$fiducia->fecharegistro);

        } 

        echo json_encode('ok');
    }
    
}
