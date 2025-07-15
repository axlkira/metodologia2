<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_login extends CI_Controller {

    public function __construct() {
        parent::__construct();



        $this->load->library('session');

        $this->load->helper('url');

        $this->load->model('m_login');
    }

    public function fc_login() 
    {
            $data = array(
                'documento' => $this->input->get('documento'),
                'contrasena' => $this->input->get('contrasena')
            );

            $valusuarios = $this->m_login->validarusuario($data);

            if ($valusuarios) 
            {
                $datossesion =array('id' => '',
                                    'documento' => '');

                foreach ($valusuarios as $valusuario)
                {
                    $datossesion =array('id' => $valusuario->idcogestor,
                                        'documento' => $valusuario->doccogestor);
                }        
                $this->session->set_userdata($datossesion);

                echo (1);
            } 
            else 
            {
                echo (0);
            }
    }

//    public function closeSession() {
//        $this->session->sess_destroy();
//        $this->session->session_destroy(id);
//        $this->session->unset_userdata('id');
//        redirect('');
//    }
        public function fc_vlogin($page = 'v_login') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }   
    
    $this->load->view('pages/' . $page,  array( 'foot' => FOOTS, 'head' => HEAD ));
}
}
