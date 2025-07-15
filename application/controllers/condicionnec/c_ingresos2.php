<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_ingresos2 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/condicionnec/m_ingresos2');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_ingresos2($page = 'v_ingresos2') {

        if (!file_exists('application/views/pages/condicionnec/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');
        $cdoccogestor = $this->input->get('doccogestor');
        $cidestacion = $this->input->get('idestacion');
        ////tomamos el valor del vivienda que viene por get
//        $idintegrante = $this->input->get('idintegrante');

        //para traer la informacion de ayudas
        $cayudas = $this->m_ingresos2->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_ingresos2->fm_cargardatosgenerales($cfolio);
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
        
        //incio traer respuestas
        $crespuestas = $this->m_ingresos2->fm_buscarpregunta($cfolio,$cidestacion);
        $carrayrespuestas= array('eingresos' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('eingresos' => $crespuesta->ingresos);
        }
        //fin traer datos generales
        
        //incio traer iti actual
        $cdatositi = $this->m_ingresos2->fm_traervaloriti();
        $carraydatositi= array('epobrezamoderada_iti' => ''); 
        foreach ($cdatositi as $cdatiti)
        {
            $numeroformateado = $cdatiti->pobrezamoderada_iti;
            $numeroformateadofinal = number_format($numeroformateado,0,".",".");

            $carraydatositi = array('epobrezamoderada_iti' => $cdatiti->pobrezamoderada_iti);
        }

        //fin traer iti actual

       //Levantar vista     
        $titulo = 'Ingresos'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/condicionnec/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head3' => HEAD3, 
                                                   'botoneragcapa' => BOTONERAGCAPA, 
                                                   'botoneraacapa' => BOTONERAACAPA,
                                                   'folio' => $cfolio,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arraydatositi' => $carraydatositi, 
                                                   'numeroformateado' => $numeroformateado,
                                                   'numeroformateadofinal' => $numeroformateadofinal,
                                                   'arrayrespuestas' => $carrayrespuestas,'doccogestor' => $cdoccogestor,'idestacion' =>$cidestacion ));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cestacion= $this->input->get('vestacion');
        $cactualizo= $this->input->get('vvalorppactualizo');
        $this->m_ingresos2->fm_actualizarpregunta($cfolio,$cestacion,$cactualizo);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
    // FUNCION QUE REGISTRA CADA PASO FINALIZADO
    public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_ingresos2->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    
}
