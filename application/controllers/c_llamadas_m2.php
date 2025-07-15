<?php
// Controlador para el módulo llamadas_m2
class C_llamadas_m2 extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_llamadas_m2');
    }

    public function index() {
        // Puedes cargar datos del modelo si lo necesitas
        $data = array();
        $this->load->view('pages/v_llamadas_m2', $data);
    }
}
