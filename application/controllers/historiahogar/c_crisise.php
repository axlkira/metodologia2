<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_crisise extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('historiahogar/m_crisise');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_crisise($page = 'v_crisise') {

        if (!file_exists('application/views/pages/historiahogar/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get
        $doccogestor = $this->input->get('doccogestor');
        //para traer la informacion de ayudas
        $cayudas = $this->m_crisise->fm_ayudas();
        
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_crisise->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_crisise->fm_buscarpregunta($cfolio);
        
        $carrayrespuestas = array('ecrisiseo1' =>'','ecrisiseo2' => '','ecrisiseo3' => '','ecrisiseo4' => '','ecrisiseo5' => '','ecrisiseo6' => '',
                                  'efactteo1' =>'','efactteo2' => '','efactteo3' => '','efactteo4' => '','efactteo5' => '','efactteo6' => '',
                                  'efactieo1' =>'','efactieo2' => '','efactieo3' => '','efactieo4' => '','efactieo5' => '','efactieo6' => '',
                                    'ecualce' =>'','ecualte' =>'','ecualie' =>''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ecrisiseo1'=>$crespuesta->crisiseo1,'ecrisiseo2'=>$crespuesta->crisiseo2,'ecrisiseo3'=>$crespuesta->crisiseo3,
                                      'ecrisiseo4'=>$crespuesta->crisiseo4,'ecrisiseo5'=>$crespuesta->crisiseo5,'ecrisiseo6'=>$crespuesta->crisiseo6,
                                      'efactteo1'=>$crespuesta->factteo1,'efactteo2'=>$crespuesta->factteo2,'efactteo3'=>$crespuesta->factteo3,
                                      'efactteo4'=>$crespuesta->factteo4,'efactteo5'=>$crespuesta->factteo5,'efactteo6'=>$crespuesta->factteo6,
                                      'efactieo1'=>$crespuesta->factieo1,'efactieo2'=>$crespuesta->factieo2,'efactieo3'=>$crespuesta->factieo3,
                                      'efactieo4'=>$crespuesta->factieo4,'efactieo5'=>$crespuesta->factieo5,'efactieo6'=>$crespuesta->factieo6,
                                      'ecualce'=>$crespuesta->cualce,'ecualte'=>$crespuesta->cualte,'ecualie'=>$crespuesta->cualie);
        }
        //fin traer datos generales
        
        //Traer estrategias
        $cdatoscrisisecual1 = $this->m_crisise->fm_traercrisisecual1($cfolio);
        //traer los datos
        $carraytraercrisisecual1 = '';
        foreach ($cdatoscrisisecual1 as $valor)
        {
            $carraytraercrisisecual1 .= '<div class="panel-body">
                                       <p> <small><strong> '.$valor->fecha.' - '.$valor->estacion.' - '.$valor->nombreucogestor.' '.$valor->nombredcogestor.' '.$valor->apellidoucogestor.' '.$valor->apellidodcogestor.':</strong></small> '.$valor->crisisecual1.'</p>
                                    </div>';
        } 
        if($carraytraercrisisecual1 == '')
        {
            $carraytraercrisisecual1 = '<div class="panel-body">
                                       <p> <small><strong>Sin registro</strong></small></p>
                                    </div>';
         }
         // fin traer estrategias
         
         
       //Levantar vista     
        $titulo = 'Historia hogar - Vista 2'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/historiahogar/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'folio' => $cfolio,
                                                   'doccogestor' => $doccogestor,
                                                   'textoayuda' => $ctextoayuda,
                                                   'carraytraercrisisecual1' => $carraytraercrisisecual1,
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $ccrisiseo1= $this->input->get('vcrisiseo1');
        $ccrisiseo2= $this->input->get('vcrisiseo2');
        $ccrisiseo3= $this->input->get('vcrisiseo3');
        $ccrisiseo4= $this->input->get('vcrisiseo4');
        $ccrisiseo5= $this->input->get('vcrisiseo5');
        $ccrisiseo6= $this->input->get('vcrisiseo6');
        $cfactteo1= $this->input->get('vfactteo1');
        $cfactteo2= $this->input->get('vfactteo2');
        $cfactteo3= $this->input->get('vfactteo3');
        $cfactteo4= $this->input->get('vfactteo4');
        $cfactteo5= $this->input->get('vfactteo5');
        $cfactteo6= $this->input->get('vfactteo6');
        $cfactieo1= $this->input->get('vfactieo1');
        $cfactieo2= $this->input->get('vfactieo2');
        $cfactieo3= $this->input->get('vfactieo3');
        $cfactieo4= $this->input->get('vfactieo4');
        $cfactieo5= $this->input->get('vfactieo5');
        $cfactieo6= $this->input->get('vfactieo6');
        $ccualce= $this->input->get('vcualce');
        $ccualte= $this->input->get('vcualte');
        $ccualie= $this->input->get('vcualie');
                
        $this->m_crisise->fm_actualizarpregunta($cfolio,$ccrisiseo1,$ccrisiseo2,$ccrisiseo3,$ccrisiseo4,$ccrisiseo5,$ccrisiseo6,$cfactteo1,$cfactteo2,$cfactteo3,$cfactteo4,$cfactteo5,$cfactteo6,$cfactieo1,$cfactieo2,$cfactieo3,$cfactieo4,$cfactieo5,$cfactieo6,$ccualce,$ccualte,$ccualie);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
    //funcion para actualizar Estrategias
    public function fc_crisisecual1()
    {
        $cfolio = $this->input->get('vfolio');
        $ccrisisecual1= $this->input->get('vcrisisecual1');   
        $cestacion= $this->input->get('vestacion');
        $cdatoscrisisecual1 = $this->m_crisise->fm_insertarcrisisecual1($cfolio,$cestacion,$ccrisisecual1,$this->session->userdata('documento'));
    //traer los datos
        $carraydatoscrisisecual1 = '';
        foreach ($cdatoscrisisecual1 as $valor)
        {
            $carraydatoscrisisecual1 .= '<div class="panel-body">
                                       <p> <small><strong> '.$valor->fecha.' - '.$valor->estacion.' - '.$valor->nombreucogestor.' '.$valor->nombredcogestor.' '.$valor->apellidoucogestor.' '.$valor->apellidodcogestor.':</strong></small> '.$valor->crisisecual1.'</p>
                                    </div>';
        }        
        echo ($carraydatoscrisisecual1);
    //fin traer los datos
    }
    
}
