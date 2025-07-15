<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_inicioestacion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/inicioestacion/m_inicioestacion');//carga el controlador modelo
       
        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }  
    }
    
    public function fc_inicioestacion()
    {
       $cfolio = $this->input->get('vfolio'); // 0k
       $cidpaso = $this->input->get('vidpaso'); //ok
       $cestado = $this->input->get('vestado');//ok
       $clongitud = $this->input->get('vlongitud');//ok
       $clatitud = $this->input->get('vlatitud');//ok
       $cmensajedonde = $this->input->get('vmensajedonde');//ok
       
       $this->m_inicioestacion->fm_inicioestacion($cfolio,$cidpaso,$cestado,$clongitud,$clatitud,$cmensajedonde,$this->session->userdata('documento'));
    }  
    
    
}
