<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_busquedahistorico extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_busquedahistorico'); //carga el controlador modelo

        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }         
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_busqueda($page = 'v_busquedahistorico') {
        
        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $mdoccogestor = $this->session->userdata('documento');
        $datos = "";
        $lisestado = '<option value="">Todos</option>';
        //listar los estado de la visitas para las bisquedas
        $listarest = $this->m_busquedahistorico->fm_listarestado();

        foreach ($listarest as $valorestado) {

            $lisestado .= '<option value="' . $valorestado->idestado . '">' . $valorestado->nombreestado . '</option>';
        }
        //fin
        $numerodefolios = '';
        //listar los estado de la visitas para las bisquedas
        $numfolios = $this->m_busquedahistorico->fm_numerodefolios();

        foreach ($numfolios as $numfolio) {

            $numerodefolios = $numfolio->numerofolios;
        }


        $titulo = 'Medellin Solidaria'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page, array('titulo' => $titulo, 'foot' => FOOTS, 'lisestado' => $lisestado, 'numerodefolios' => $numerodefolios, 'head1' => HEAD1, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA, 'datos' => $datos, 'doccogestor' => $mdoccogestor));
        //FIN LEVANTA LA VISTA
    }

    public function fc_buscar() {

        
        $midcobertura = $this->session->userdata('id');
        $cbuscarfo = $this->input->get('vbuscarfo');
        $cbuscares = $this->input->get('vbuscares');

        $listartabla = $this->m_busquedahistorico->fm_listartabla($midcobertura, $cbuscarfo, $cbuscares);

        $datos = '';
        $a = 0; //para saber el numero de l registro
        $b = 0; //el resultado del modulo para saber si es verde o blanco        
        foreach ($listartabla as $valor) {
            $cont = 0;
            ++$cont;
            ++$a;
            $b = $a % 2;
            //para colocar el color de la fila
            if ($b === 1) {
                $colorfila = 'class="success text-uppercase"';
            } else {
                $colorfila = 'class="text-uppercase"';
            }


            $datos .= '<tr ' . $colorfila . '>'
                    . '<td>' . $valor->folio . '</td>'
                    . '<td>' . $valor->nomestacion . '</td>'
                    . '<td>' . $valor->nombreestado . '</td>'
                    . '<td>' . $valor->fecharegistro . '</td>'
                    . '<td><textarea class="form-control" rows="1" disabled="disabled" id="observacion">'.$valor->observacion.'</textarea></td>'
                    . '</tr>';
        }

        //fin traer una lista de valores        


        echo ($datos);
    }
    
    public function fc_sincronizar() {

        //$mdoccogestor = $this->session->userdata('documento');
        $midcobertura = $this->session->userdata('id');
        $cbuscarfo = $this->input->get('vbuscarfo');
        $cbuscares = $this->input->get('vbuscares');

        $this->m_busquedahistorico->fm_sincronizar($midcobertura);
        
        $listartabla = $this->m_busquedahistorico->fm_listartabla($midcobertura, $cbuscarfo, $cbuscares);

        $datos = '';
        $a = 0; //para saber el numero de l registro
        $b = 0; //el resultado del modulo para saber si es verde o blanco        
        foreach ($listartabla as $valor) {
            $cont = 0;
            ++$cont;
            ++$a;
            $b = $a % 2;
            //para colocar el color de la fila
            if ($b === 1) {
                $colorfila = 'class="success text-uppercase"';
            } else {
                $colorfila = 'class="text-uppercase"';
            }


            $datos .= '<tr ' . $colorfila . '>'
                    . '<td>' . $valor->folio . '</td>'
                    . '<td>' . $valor->nomestacion . '</td>'
                    . '<td>' . $valor->nombreestado . '</td>'
                    . '<td>' . $valor->fecharegistro . '</td>'
                    . '<td><textarea class="form-control" rows="1" disabled="disabled" id="observacion">'.$valor->observacion.'</textarea></td>'
                    . '</tr>';
        }

        //fin traer una lista de valores        


        echo ($datos);
 
    }
    

    function fc_salir() {
        $this->session->sess_destroy();
    }

}
