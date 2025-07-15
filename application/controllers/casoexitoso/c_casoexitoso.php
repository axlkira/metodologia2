<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_casoexitoso extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/casoexitoso/m_casoexitoso');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_casoexitoso($page = 'v_casoexitoso') {

        if (!file_exists('application/views/pages/casoexitoso/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');
        $cdoccogestor = $this->input->get('doccogestor');
        $cidestacion = $this->input->get('idestacion');
        ////tomamos el valor del vivienda que viene por get
//        $idintegrante = $this->input->get('idintegrante');

        //para traer la informacion de ayudas
        $cayudas = $this->m_casoexitoso->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_casoexitoso->fm_cargardatosgenerales($cfolio);
        $carraydatosgenerales= array('enomcoges' => '', 'efolio' =>'', 'ecapitulo' => '', 'etitular' => '','edoctitular' => ''); 
        foreach ($cdatosgenerales as $cdatgen)
        {
            $carraydatosgenerales = array('enomcoges' => $cdatgen->nomcoges,
                                          'efolio' => $cdatgen->folio, 
                                          'ecapitulo' => $cdatgen->capitulo,
                                          'etitular' => $cdatgen->titular,
                                          'edoctitular' => $cdatgen->doctitular);
        }
        //fin traer datos generales
        $idintegrante = $this->input->get('idintegrante');
        //incio traer respuestas
        $crespuestas = $this->m_casoexitoso->fm_buscarexitoso($cfolio,$cidestacion);
        $carrayrespuestas= array('eexitoso' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('eexitoso' => $crespuesta->c1exitoso);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Caso exitoso'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/casoexitoso/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head3' => HEAD3, 
                                                   'botoneragcapa' => BOTONERAGCAPA, 
                                                   'botoneraacapa' => BOTONERAACAPA,
                                                   'folio' => $cfolio,
                                                   'idestacion' => $cidestacion,
                                                   'idintegrante'=> $idintegrante,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas,'doccogestor' => $cdoccogestor,'idestacion' =>$cidestacion ));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cvalorexitoso= $this->input->get('vvalorexitoso');
        $cestacion= $this->input->get('videstacion');        
        $this->m_casoexitoso->fm_actualizarpregunta($cfolio,$cvalorexitoso,$cestacion);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
    // FUNCION QUE REGISTRA CADA PASO FINALIZADO
//    public function fc_cerrarpaso()
//    {
//       $cfolio = $this->input->get('vfolio');
//       $cidpaso = $this->input->get('vidpaso');
//       $cestado = $this->input->get('vestado');
//       $this->m_casoexitoso->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
//    }
    
    
     public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_casoexitoso->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    
    public function fc_nocasoexitoso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidestacion = $this->input->get('videstacion'); 
       $this->m_casoexitoso->fm_nocasoexitoso($cfolio,$cidestacion);
    }
    
}
