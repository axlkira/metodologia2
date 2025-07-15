<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_ingresos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/condicionnec/m_ingresos');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_ingresos($page = 'v_ingresos') {

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
        $cayudas = $this->m_ingresos->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_ingresos->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_ingresos->fm_buscarpregunta($cfolio,$cidestacion);
        $carrayrespuestas= array('eactualizo' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('eactualizo' => $crespuesta->actualizo);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Actualizacion'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/condicionnec/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head3' => HEAD3, 
                                                   'botoneragcapa' => BOTONERAGCAPA, 
                                                   'botoneraacapa' => BOTONERAACAPA,
                                                   'folio' => $cfolio,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas,'doccogestor' => $cdoccogestor,'idestacion' =>$cidestacion ));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cestacion= $this->input->get('vestacion');
        $cactualizo= $this->input->get('vvalorppactualizo');
        $this->m_ingresos->fm_actualizarpregunta($cfolio,$cestacion,$cactualizo);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
    // FUNCION QUE REGISTRA CADA PASO FINALIZADO
    public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_ingresos->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    
}
