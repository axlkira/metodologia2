<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_condicionnec extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/condicionnec/m_condicionnec');//carga el controlador modelo
       
        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }  
    }
    
    public function fc_condicionnec()
    {
       $cfolio = $this->input->get('vfolio'); // 0k
       $cidestacion= $this->input->get('videstacion'); //k      
       
       $this->m_condicionnec->fm_condicionnec($cfolio,$cidestacion);
    }  
    
    
}
