<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_sincronizacionl_aba_sincronizarprotocolopasosestadod extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/sincronizacion/m_sincronizacionl_aba_sincronizarprotocolopasosestadod');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 

	public function fc_sincronizacionl_aba_sincronizarprotocolopasosestadod() {
        
        		$arrContextOptions=array(
			"ssl"=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
			),
		);  
        
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincronizarprotocolopasosestadod/fc_aba_sincronizarprotocolopasosestadod?pdoccogestor='.$this->session->userdata('documento'), false, stream_context_create($arrContextOptions));
        $listarfiducias = json_decode($listarbac);
        
        foreach ($listarfiducias as $fiducia)
        {  

        $this->m_sincronizacionl_aba_sincronizarprotocolopasosestadod->fm_sincronizacionl_aba_sincronizarprotocolopasosestadod($fiducia->folio,$fiducia->idpaso,$fiducia->estado,$fiducia->fecharegistro,$fiducia->sincro,$fiducia->fechasincro);

        } 

        echo json_encode('ok');
    }

	public function fc_sincronizacionl_aba_sincronizarprotocolopasosestadod1() {
        
        		$arrContextOptions=array(
			"ssl"=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
			),
		);  
        
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincronizarprotocolopasosestadod/fc_aba_sincronizarprotocolopasosestadod1?pdoccogestor='.$this->session->userdata('documento'), false, stream_context_create($arrContextOptions));
        $listarfiducias = json_decode($listarbac);
        
        foreach ($listarfiducias as $fiducia)
        {  

        $this->m_sincronizacionl_aba_sincronizarprotocolopasosestadod->fm_sincronizacionl_aba_sincronizarprotocolopasosestadod1($fiducia->folio,$fiducia->idpaso,$fiducia->estado,$fiducia->fecharegistro,$fiducia->sincro,$fiducia->fechasincro);

        } 

        echo json_encode('ok');
    }    
    
    public function fc_sincronizacionl_aba_sincronizarprotocolopasosestadod2() {
        
        		$arrContextOptions=array(
			"ssl"=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
			),
		);  
        
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincronizarprotocolopasosestadod/fc_aba_sincronizarprotocolopasosestadod2?pdoccogestor='.$this->session->userdata('documento'), false, stream_context_create($arrContextOptions));
        $listarfiducias = json_decode($listarbac);
        
        foreach ($listarfiducias as $fiducia)
        {  

        $this->m_sincronizacionl_aba_sincronizarprotocolopasosestadod->fm_sincronizacionl_aba_sincronizarprotocolopasosestadod2($fiducia->folio,$fiducia->idpaso,$fiducia->estado,$fiducia->fecharegistro,$fiducia->sincro,$fiducia->fechasincro);

        } 

        echo json_encode('ok');
    }

    public function fc_sincronizacionl_aba_sincronizarprotocolopasosestadod3() {
        
        		$arrContextOptions=array(
			"ssl"=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
			),
		);  
        
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincronizarprotocolopasosestadod/fc_aba_sincronizarprotocolopasosestadod3?pdoccogestor='.$this->session->userdata('documento'), false, stream_context_create($arrContextOptions));
        $listarfiducias = json_decode($listarbac);
        
        foreach ($listarfiducias as $fiducia)
        {  

        $this->m_sincronizacionl_aba_sincronizarprotocolopasosestadod->fm_sincronizacionl_aba_sincronizarprotocolopasosestadod3($fiducia->folio,$fiducia->idpaso,$fiducia->estado,$fiducia->fecharegistro,$fiducia->sincro,$fiducia->fechasincro);

        } 

        echo json_encode('ok');
    }    

    public function fc_sincronizacionl_aba_sincronizarprotocolopasosestadod4() {
        
        		$arrContextOptions=array(
			"ssl"=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
			),
		);  
        
        $listarbac = file_get_contents('https://www.unidadfamiliamedellin.com.co/metodologia2servidor/index.php/sincronizacion/c_sincronizacion_aba_sincronizarprotocolopasosestadod/fc_aba_sincronizarprotocolopasosestadod4?pdoccogestor='.$this->session->userdata('documento'), false, stream_context_create($arrContextOptions));
        $listarfiducias = json_decode($listarbac);
        
        foreach ($listarfiducias as $fiducia)
        {  

        $this->m_sincronizacionl_aba_sincronizarprotocolopasosestadod->fm_sincronizacionl_aba_sincronizarprotocolopasosestadod4($fiducia->folio,$fiducia->idpaso,$fiducia->estado,$fiducia->fecharegistro,$fiducia->sincro,$fiducia->fechasincro);

        } 

        echo json_encode('ok');
    }
}
