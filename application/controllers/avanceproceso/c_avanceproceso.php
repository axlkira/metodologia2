<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_avanceproceso extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/avanceproceso/m_avanceproceso');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_avanceproceso($page = 'v_avanceproceso') {

        if (!file_exists('application/views/pages/avanceproceso/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get
        $cdocumento =  $this->session->userdata('documento');

        $id = $this->input->get('id');
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_avanceproceso->fm_cargardatosavanceproceso($id,$cfolio);
        $carraydatosgenerales= array('id' => '', 'folio' =>'', 'estacion' => '', 'dimerfam' => '','dimdllohum' => '','textoavance' => '','doccogestor' => ''); 
        foreach ($cdatosgenerales as $cdatgen)
        {
            $carraydatosgenerales = array('id' => $cdatgen->id,
                                          'folio' => $cdatgen->folio, 
                                          'estacion' => $cdatgen->estacion,
                                          'dimerfam' => $cdatgen->dimerfam,
                                          'dimdllohum' => $cdatgen->dimdllohum,         
                                          'textoavance' => $cdatgen->textoavance,
                                          'doccogestor' => $cdatgen->doccogestor);
        }
//        //fin traer datos generales
//        
//        //incio traer respuestas
//        $crespuestas = $this->m_avanceproceso->fm_buscarpregunta($idintegrante);
//        $carrayrespuestas= array('eavanceproceso' => ''); 
//        foreach ($crespuestas as $crespuesta)
//        {
//            $carrayrespuestas = array('eavanceproceso' => $crespuesta->avanceproceso);
//        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Encuentro buen vivir en familia'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/avanceproceso/' . $page,  array(
                                                   'titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head1' => HEAD1, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'folio' => $cfolio,
                                                   'id'=>$id,
                                                   'idintegrante' => $idintegrante,
                                                   'cdocumento'=>$cdocumento,
                                                   'arraydatosgenerales' => $carraydatosgenerales
                                                  // 'arrayrespuestas' => $carrayrespuestas
                ));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_guardaravanceproceso()
    {
        $cfolio = $this->input->get('vfolio');
        $cverfam= $this->input->get('verfam');  
        $cvdeshum= $this->input->get('vdeshum');  
        $cvtextoav= $this->input->get('vtextoav');
        $ccdocumento =  $this->input->get('vdocumento');
        $cidavance = $this->m_avanceproceso->fm_guardaravanceproceso($cfolio,$cverfam,$cvdeshum,$cvtextoav,$ccdocumento);
       //echo json_encode(array('result' => 'guardado'));
        
          $carrayidavance= ''; 
        foreach ($cidavance as $cidavances)
        {
            $carrayidavance = $cidavances->id;
        }
        
        echo($carrayidavance);
        
   
    }
    //fin funcion para actualizar
    public function fc_insertarfolioexitoso()
    {
        $cfolio = $this->input->get('vfolio');
        $cidestacion= $this->input->get('videstacion');    
        $this->m_avanceproceso->fm_insertarfolioexitoso($cfolio,$cidestacion);
      
    }
    
    
}
