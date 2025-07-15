<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_crisisf extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('historiahogar/m_crisisf');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_crisisf($page = 'v_crisisf') {

        if (!file_exists('application/views/pages/historiahogar/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get
        $doccogestor = $this->input->get('doccogestor');
        //para traer la informacion de ayudas
        $cayudas = $this->m_crisisf->fm_ayudas();
        
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_crisisf->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_crisisf->fm_buscarpregunta($cfolio);
        
        $carrayrespuestas = array('ecrisisfo1' =>'','ecrisisfo2' => '','ecrisisfo3' => '','ecrisisfo4' => '','ecrisisfo5' => '',
                                  'efacttfo1' =>'','efacttfo2' => '','efacttfo3' => '','efacttfo4' => '','efacttfo5' => '','efacttfo6' => '',
                                  'efactifo1' =>'','efactifo2' => '','efactifo3' => '','ecualcf' =>'','ecualtf' =>'','ecualif' =>''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ecrisisfo1'=>$crespuesta->crisisfo1,'ecrisisfo2'=>$crespuesta->crisisfo2,'ecrisisfo3'=>$crespuesta->crisisfo3,
                                      'ecrisisfo4'=>$crespuesta->crisisfo4,'ecrisisfo5'=>$crespuesta->crisisfo5,
                                      'efacttfo1'=>$crespuesta->facttfo1,'efacttfo2'=>$crespuesta->facttfo2,'efacttfo3'=>$crespuesta->facttfo3,
                                      'efacttfo4'=>$crespuesta->facttfo4,'efacttfo5'=>$crespuesta->facttfo5,'efacttfo6'=>$crespuesta->facttfo6,
                                      'efactifo1'=>$crespuesta->factifo1,'efactifo2'=>$crespuesta->factifo2,'efactifo3'=>$crespuesta->factifo3,
                                      'ecualcf'=>$crespuesta->cualcf,'ecualtf'=>$crespuesta->cualtf,'ecualif'=>$crespuesta->cualif);
        }
        //fin traer datos generales
        
        //traer Desempleo
        $cdatoscrisisfcual1 = $this->m_crisisf->fm_traercrisisfcual1($cfolio);
        //traer los datos
        $carraytraercrisisfcual1 = '';
        foreach ($cdatoscrisisfcual1 as $valor)
        {
            $carraytraercrisisfcual1 .= '<div class="panel-body">
                                       <p> <small><strong> '.$valor->fecha.' - '.$valor->estacion.' - '.$valor->nombreucogestor.' '.$valor->nombredcogestor.' '.$valor->apellidoucogestor.' '.$valor->apellidodcogestor.':</strong></small> '.$valor->crisisfcual1.'</p>
                                    </div>';
        } 
        if($carraytraercrisisfcual1 == '')
        {
            $carraytraercrisisfcual1 = '<div class="panel-body">
                                       <p> <small><strong>Sin registro</strong></small></p>
                                    </div>';
         }
        
         
       //Levantar vista     
        $titulo = 'Historia hogar - Vista 3'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/historiahogar/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'folio' => $cfolio,
                                                   'doccogestor' => $doccogestor,
                                                   'textoayuda' => $ctextoayuda,
                                                   'carraytraercrisisfcual1' => $carraytraercrisisfcual1,
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $ccrisisfo1= $this->input->get('vcrisisfo1');
        $ccrisisfo2= $this->input->get('vcrisisfo2');
        $ccrisisfo3= $this->input->get('vcrisisfo3');
        $ccrisisfo4= $this->input->get('vcrisisfo4');
        $ccrisisfo5= $this->input->get('vcrisisfo5');
        $cfacttfo1= $this->input->get('vfacttfo1');
        $cfacttfo2= $this->input->get('vfacttfo2');
        $cfacttfo3= $this->input->get('vfacttfo3');
        $cfacttfo4= $this->input->get('vfacttfo4');
        $cfacttfo5= $this->input->get('vfacttfo5');
        $cfacttfo6= $this->input->get('vfacttfo6');
        $cfactifo1= $this->input->get('vfactifo1');
        $cfactifo2= $this->input->get('vfactifo2');
        $cfactifo3= $this->input->get('vfactifo3');
        $ccualcf= $this->input->get('vcualcf');
        $ccualtf= $this->input->get('vcualtf');
        $ccualif= $this->input->get('vcualif');
                
        $this->m_crisisf->fm_actualizarpregunta($cfolio,$ccrisisfo1,$ccrisisfo2,$ccrisisfo3,$ccrisisfo4,$ccrisisfo5,$cfacttfo1,$cfacttfo2,$cfacttfo3,$cfacttfo4,$cfacttfo5,$cfacttfo6,$cfactifo1,$cfactifo2,$cfactifo3,$ccualcf,$ccualtf,$ccualif);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
    //funcion para actualizar Desempleo
    public function fc_crisisfcual1()
    {
        $cfolio = $this->input->post('vfolio');
        $ccrisisfcual1= $this->input->post('vcrisisfcual1');   
        $cestacion= $this->input->post('vestacion');
        $cdatoscrisisfcual1 = $this->m_crisisf->fm_insertarcrisisfcual1($cfolio,$cestacion,$ccrisisfcual1,$this->session->userdata('documento'));
    //traer los datos
        $carraydatoscrisisfcual1 = '';
        foreach ($cdatoscrisisfcual1 as $valor)
        {
            $carraydatoscrisisfcual1 .= '<div class="panel-body">
                                       <p> <small><strong> '.$valor->fecha.' - '.$valor->estacion.' - '.$valor->nombreucogestor.' '.$valor->nombredcogestor.' '.$valor->apellidoucogestor.' '.$valor->apellidodcogestor.':</strong></small> '.$valor->crisisfcual1.'</p>
                                    </div>';
        }        
        echo ($carraydatoscrisisfcual1);
    //fin traer los datos
    }
    
}
