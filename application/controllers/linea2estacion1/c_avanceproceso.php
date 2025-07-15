<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_avanceproceso extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/linea2estacion1/m_avanceproceso');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_avanceproceso($page = 'v_avanceproceso') {

        if (!file_exists('application/views/pages/linea2estacion1/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $doccogestor = $this->input->get('doccogestor');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get
        $cdocumento =  $this->session->userdata('documento');

        $idestacion = $this->input->get('idestacion');
        
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_avanceproceso->fm_cargardatosavanceproceso($idestacion,$cfolio);
        $carraydatosgenerales= array('id' => '', 'folio' =>'', 'estacion' => '', 'dimerfam' => '','dimdllohum' => '','textoavance' => '','textoavance2' => '','doccogestor' => ''
    ,'accioneducativa' => '','accioneducativacual' => ''); 
        foreach ($cdatosgenerales as $cdatgen)
        {
            $carraydatosgenerales = array('id' => $cdatgen->id,
                                          'folio' => $cdatgen->folio, 
                                          'estacion' => $cdatgen->estacion,
                                          'dimerfam' => $cdatgen->dimerfam,
                                          'dimdllohum' => $cdatgen->dimdllohum,         
                                          'textoavance' => $cdatgen->textoavance,
                                          'textoavance2' => $cdatgen->textoavance2,
                                          'doccogestor' => $cdatgen->doccogestor,
                                          'accioneducativa' => $cdatgen->accioneducativa,
                                          'accioneducativacual' => $cdatgen->accioneducativacual);
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
        $this->load->view('pages/linea2estacion1/' . $page,  array(
                                                   'titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head1' => HEAD1, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'folio' => $cfolio,
                                                   'idestacion'=>$idestacion,
                                                   'idintegrante' => $idintegrante,
                                                   'cdocumento'=>$cdocumento,
                                                   'arraydatosgenerales' => $carraydatosgenerales,
                                                    'doccogestor'=>$doccogestor
                                                  // 'arrayrespuestas' => $carrayrespuestas
                ));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_guardaravanceproceso()
    {
        $cfolio = $this->input->post('vfolio');
        $cverfam= $this->input->post('verfam');  
        $cvdeshum= $this->input->post('vdeshum');  
        $cvtextoav= $this->input->post('vtextoav');
        $cvtextoav2= $this->input->post('vtextoav2');
        $ccdocumento =  $this->input->post('vdocumento');
        $cidestacion =  $this->input->post('videstacion');

        $cvalorp0Accion =  $this->input->post('vvalorp0Accion');
        $cvcualmotivoAccion =  $this->input->post('vvcualmotivoAccion');

        $cidavance = $this->m_avanceproceso->fm_guardaravanceproceso($cfolio,$cverfam,$cvdeshum,$cvtextoav,$cvtextoav2,$ccdocumento,$cidestacion,$cvalorp0Accion,$cvcualmotivoAccion);
       //echo json_encode(array('result' => 'guardado'));
        
          $carrayidavance= ''; 
        foreach ($cidavance as $cidavances)
        {
            $carrayidavance = $cidavances->id;
        }
        
        echo($carrayidavance);
        
   
    }
      // FUNCION QUE REGISTRA CADA PASO FINALIZADO
    public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_avanceproceso->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    
    
    public function fc_insertarfolioexitoso()
    {
       $cidestacion = $this->input->get('videstacion');       
       $cfolio = $this->input->get('vfolio');       
       $this->m_avanceproceso->fm_insertarfolioexitoso($cfolio,$cidestacion);
    }
    
}
