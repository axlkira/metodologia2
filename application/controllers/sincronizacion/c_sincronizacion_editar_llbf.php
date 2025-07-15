<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_sincronizacion_editar_llbf extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/sincronizacion/m_sincronizacion_editar_llbf');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 

	public function fc_sin_editar_llbf() {
		
		$arrContextOptions=array(
			"ssl"=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
			),
		);  

        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_editar_llbf/fc_sin_editar_llbf', false, stream_context_create($arrContextOptions));
        $listarfiducias = json_decode($listarbac);
        
        foreach ($listarfiducias as $fiducia)
        {  

        $this->m_sincronizacion_editar_llbf->fm_sin_editar_llbf($fiducia->folio,$fiducia->editar_llbf);

        } 

        echo json_encode('ok');
    }
    
}
