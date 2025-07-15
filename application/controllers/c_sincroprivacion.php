<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_sincroprivacion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_sincroprivacion');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_sincro($page = 'v_sincrologro') {

        
        
        $doccogestor = $this->session->userdata('documento');
        
              
        $resultado = $this->m_sincroprivacion->fm_sincroprivacion1($doccogestor);
        $resultado = $this->m_sincroprivacion->fm_sincrolocal1($doccogestor);
        
        $resultado = $this->m_sincroprivacion->fm_sincroprivacion2($doccogestor);
        $resultado = $this->m_sincroprivacion->fm_sincrolocal2($doccogestor);
        
        $resultado = $this->m_sincroprivacion->fm_sincroprivacion3($doccogestor);
        $resultado = $this->m_sincroprivacion->fm_sincrolocal3($doccogestor);
        
        $resultado = $this->m_sincroprivacion->fm_sincroprivacion4($doccogestor);
        $resultado = $this->m_sincroprivacion->fm_sincrolocal4($doccogestor);
        
        $resultado = $this->m_sincroprivacion->fm_sincroprivacion5($doccogestor);
        $resultado = $this->m_sincroprivacion->fm_sincrolocal5($doccogestor);
        
        $tdatinte = 'PRIVACIONES 1 - Sincronizacion exitosa!!!!!';
        $this->load->view('pages/' . $page,  array('tabla' => $tdatinte));

    }
        public function fc_sincro2($page = 'v_sincrologro') {

        
        
        $doccogestor = $this->session->userdata('documento');
    
        $resultado = $this->m_sincroprivacion->fm_sincroprivacion6($doccogestor);
        $resultado = $this->m_sincroprivacion->fm_sincrolocal6($doccogestor);
        
        $resultado = $this->m_sincroprivacion->fm_sincroprivacion7($doccogestor);
        $resultado = $this->m_sincroprivacion->fm_sincrolocal7($doccogestor);
        
        $resultado = $this->m_sincroprivacion->fm_sincroprivacion8($doccogestor);
        $resultado = $this->m_sincroprivacion->fm_sincrolocal8($doccogestor);
        
        $resultado = $this->m_sincroprivacion->fm_sincroprivacion9($doccogestor);
        $resultado = $this->m_sincroprivacion->fm_sincrolocal9($doccogestor);
        
        $resultado = $this->m_sincroprivacion->fm_sincroprivacion10($doccogestor);
        $resultado = $this->m_sincroprivacion->fm_sincrolocal10($doccogestor);
        
        $tdatinte = 'PRIVACIONES 2 - Sincronizacion exitosa!!!!!';
        $this->load->view('pages/' . $page,  array('tabla' => $tdatinte));

        
        }
        public function fc_sincro3($page = 'v_sincrologro') {

        
        
        $doccogestor = $this->session->userdata('documento');
    
        
        $resultado = $this->m_sincroprivacion->fm_sincroprivacion11($doccogestor);
        $resultado = $this->m_sincroprivacion->fm_sincrolocal11($doccogestor);
        
        $resultado = $this->m_sincroprivacion->fm_sincroprivacion12($doccogestor);
        $resultado = $this->m_sincroprivacion->fm_sincrolocal12($doccogestor);
        
        $resultado = $this->m_sincroprivacion->fm_sincroprivacion13($doccogestor);
        $resultado = $this->m_sincroprivacion->fm_sincrolocal13($doccogestor);
        
        $resultado = $this->m_sincroprivacion->fm_sincroprivacion14($doccogestor);
        $resultado = $this->m_sincroprivacion->fm_sincrolocal14($doccogestor);
        
        $resultado = $this->m_sincroprivacion->fm_sincroprivacion15($doccogestor);
        $resultado = $this->m_sincroprivacion->fm_sincrolocal15($doccogestor);
        
        $resultado = $this->m_sincroprivacion->fm_sincroprivacion16($doccogestor);
        $resultado = $this->m_sincroprivacion->fm_sincrolocal16($doccogestor);
        
        $resultado = $this->m_sincroprivacion->fm_sincroipm($doccogestor);
        $resultado = $this->m_sincroprivacion->fm_sincrolocalipm($doccogestor);
        
        $tdatinte = 'PRIVACIONES 3 - Sincronizacion exitosa!!!!!';
        $this->load->view('pages/' . $page,  array('tabla' => $tdatinte));

        
        }

    public function fc_sincroe($page = 'v_sincrologro') {

        
        
        $doccogestor = $this->session->userdata('documento');
        
        $resultado = $this->m_sincrologro->fm_sincroe($doccogestor);
        
        $tdatinte = 'Tablas borradas!!!!!';
        $this->load->view('pages/' . $page,  array('tabla' => $tdatinte));

    }
}
