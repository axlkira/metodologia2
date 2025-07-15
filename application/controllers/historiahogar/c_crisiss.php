<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_crisiss extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('historiahogar/m_crisiss');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_crisiss($page = 'v_crisiss') {

        if (!file_exists('application/views/pages/historiahogar/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get
        $doccogestor = $this->input->get('doccogestor');
        //para traer la informacion de ayudas
        $cayudas = $this->m_crisiss->fm_ayudas();
        
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_crisiss->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_crisiss->fm_buscarpregunta($cfolio);
        
        $carrayrespuestas = array('ecrisisso1' =>'','ecrisisso2' => '','ecrisisso3' => '','ecrisisso4' => '','ecrisisso5' => '',
                                  'efacttso1' =>'','efacttso2' => '','efacttso3' => '','efactiso1' =>'','efactiso2' => '','efactiso3' => '',
                                  'ecualcs' =>'','ecualts' =>'','ecualis' =>''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ecrisisso1'=>$crespuesta->crisisso1,'ecrisisso2'=>$crespuesta->crisisso2,'ecrisisso3'=>$crespuesta->crisisso3,
                                      'ecrisisso4'=>$crespuesta->crisisso4,'ecrisisso5'=>$crespuesta->crisisso5,
                                      'efacttso1'=>$crespuesta->facttso1,'efacttso2'=>$crespuesta->facttso2,'efacttso3'=>$crespuesta->facttso3,
                                      'efactiso1'=>$crespuesta->factiso1,'efactiso2'=>$crespuesta->factiso2,'efactiso3'=>$crespuesta->factiso3,
                                      'ecualcs'=>$crespuesta->cualcs,'ecualts'=>$crespuesta->cualts,'ecualis'=>$crespuesta->cualis);
        }
        //fin traer datos generales
        
        //traer estrategias
        $cdatoscrisisscual1 = $this->m_crisiss->fm_traercrisisscual1($cfolio);
        //traer los datos
        $carraytraercrisisscual1 = '';
        foreach ($cdatoscrisisscual1 as $valor)
        {
            $carraytraercrisisscual1 .= '<div class="panel-body">
                                       <p> <small><strong> '.$valor->fecha.' - '.$valor->estacion.' - '.$valor->nombreucogestor.' '.$valor->nombredcogestor.' '.$valor->apellidoucogestor.' '.$valor->apellidodcogestor.':</strong></small> '.$valor->crisisscual1.'</p>
                                    </div>';
        } 
        if($carraytraercrisisscual1 == '')
        {
            $carraytraercrisisscual1 = '<div class="panel-body">
                                       <p> <small><strong>Sin registro</strong></small></p>
                                    </div>';
         }
         // fin traer estrategias
        
         
       //Levantar vista     
        $titulo = 'Historia hogar - Vista 4'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/historiahogar/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'folio' => $cfolio,
                                                   'doccogestor' => $doccogestor,
                                                   'textoayuda' => $ctextoayuda,
                                                   'carraytraercrisisscual1' => $carraytraercrisisscual1,
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $ccrisisso1= $this->input->get('vcrisisso1');
        $ccrisisso2= $this->input->get('vcrisisso2');
        $ccrisisso3= $this->input->get('vcrisisso3');
        $ccrisisso4= $this->input->get('vcrisisso4');
        $ccrisisso5= $this->input->get('vcrisisso5');
        $cfacttso1= $this->input->get('vfacttso1');
        $cfacttso2= $this->input->get('vfacttso2');
        $cfacttso3= $this->input->get('vfacttso3');       
        $cfactiso1= $this->input->get('vfactiso1');
        $cfactiso2= $this->input->get('vfactiso2');
        $cfactiso3= $this->input->get('vfactiso3');
        $ccualcs= $this->input->get('vcualcs');
        $ccualts= $this->input->get('vcualts');
        $ccualis= $this->input->get('vcualis');

                
        $this->m_crisiss->fm_actualizarpregunta($cfolio,$ccrisisso1,$ccrisisso2,$ccrisisso3,$ccrisisso4,$ccrisisso5,$cfacttso1,$cfacttso2,$cfacttso3,$cfactiso1,$cfactiso2,$cfactiso3,$ccualcs,$ccualts,$ccualis);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
    //funcion para actualizar estrategias
    public function fc_crisisscual1()
    {
        $cfolio = $this->input->post('vfolio');
        $ccrisisscual1= $this->input->post('vcrisisscual1');   
        $cestacion= $this->input->post('vestacion');
        $cdatoscrisisscual1 = $this->m_crisiss->fm_insertarcrisisscual1($cfolio,$cestacion,$ccrisisscual1,$this->session->userdata('documento'));
    //traer los datos
        $carraydatoscrisisscual1 = '';
        foreach ($cdatoscrisisscual1 as $valor)
        {
            $carraydatoscrisisscual1 .= '<div class="panel-body">
                                       <p> <small><strong> '.$valor->fecha.' - '.$valor->estacion.' - '.$valor->nombreucogestor.' '.$valor->nombredcogestor.' '.$valor->apellidoucogestor.' '.$valor->apellidodcogestor.':</strong></small> '.$valor->crisisscual1.'</p>
                                    </div>';
        }        
        echo ($carraydatoscrisisscual1);
    //fin traer los datos
    }
    
}
