<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c11p11intermedia extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c11p11intermedia');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c11p11intermedia($page = 'v_c11p11intermedia') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c11p11intermedia->fm_ayudas();
        
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c11p11intermedia->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_c11p11intermedia->fm_buscarpregunta($cfolio);
        
        $carrayrespuestas = array('ec11p11intermediao1' =>'','ec11p11intermediao2' => '','ec11p11intermediao3' => '','ec11p11intermediao4' => '','ec11p11intermediao5' => '','ec11p11intermediao6' => '',
                                 'ec11p11intermediao7' => '','ec11p11intermediao8' => '','ec11p11intermediao9' => '','ec11p11intermediao10' => '','ec11p11intermediao11' => '',
                                 'ec11p11intermediao12' => '','ec11p11intermediao13' => '','ec11p11intermediao14' => '','ec11p11intermediao15' => '','ec11p11intermediacual' => '','ec11p11intermediaao1' =>''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec11p11intermediao1'=>$crespuesta->c11p11intermediao1,'ec11p11intermediao2'=>$crespuesta->c11p11intermediao2,'ec11p11intermediao3'=>$crespuesta->c11p11intermediao3,
                                      'ec11p11intermediao4'=>$crespuesta->c11p11intermediao4,'ec11p11intermediao5'=>$crespuesta->c11p11intermediao5,'ec11p11intermediao6'=>$crespuesta->c11p11intermediao6,
                                      'ec11p11intermediao7'=>$crespuesta->c11p11intermediao7,'ec11p11intermediao8'=>$crespuesta->c11p11intermediao8,'ec11p11intermediao9'=>$crespuesta->c11p11intermediao9,
                                      'ec11p11intermediao10'=>$crespuesta->c11p11intermediao10,'ec11p11intermediao11'=>$crespuesta->c11p11intermediao11,'ec11p11intermediao12'=>$crespuesta->c11p11intermediao12,
                                      'ec11p11intermediao13'=>$crespuesta->c11p11intermediao13,'ec11p11intermediao14'=>$crespuesta->c11p11intermediao14,'ec11p11intermediao15'=>$crespuesta->c11p11intermediao15,
                                      'ec11p11intermediacual'=>$crespuesta->c11p11intermediacual);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Cap XI - Pregunta 11'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                  'botoneraginterh' => BOTONERAGINTERH, 
                                                   'botoneraainterh' => BOTONERAAINTERH,
                                                   'folio' => $cfolio,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cvalorc11p11intermediao1= $this->input->get('vc11p11intermediao1');
        $cvalorc11p11intermediao2= $this->input->get('vc11p11intermediao2');
        $cvalorc11p11intermediao3= $this->input->get('vc11p11intermediao3');
        $cvalorc11p11intermediao4= $this->input->get('vc11p11intermediao4');
        $cvalorc11p11intermediao5= $this->input->get('vc11p11intermediao5');
        $cvalorc11p11intermediao6= $this->input->get('vc11p11intermediao6');
        $cvalorc11p11intermediao7= $this->input->get('vc11p11intermediao7');
        $cvalorc11p11intermediao8= $this->input->get('vc11p11intermediao8');
        $cvalorc11p11intermediao9= $this->input->get('vc11p11intermediao9');
        $cvalorc11p11intermediao10= $this->input->get('vc11p11intermediao10');
        $cvalorc11p11intermediao11= $this->input->get('vc11p11intermediao11');
        $cvalorc11p11intermediao12= $this->input->get('vc11p11intermediao12');
        $cvalorc11p11intermediao13= $this->input->get('vc11p11intermediao13');
        $cvalorc11p11intermediao14= $this->input->get('vc11p11intermediao14');
        $cvalorc11p11intermediao15= $this->input->get('vc11p11intermediao15');
        $cvalorc11p11intermediacual= $this->input->get('vc11p11intermediacual');
        
        $this->m_c11p11intermedia->fm_actualizarpregunta($cfolio,$cvalorc11p11intermediao1,$cvalorc11p11intermediao2,$cvalorc11p11intermediao3,$cvalorc11p11intermediao4,
                         $cvalorc11p11intermediao5,$cvalorc11p11intermediao6,$cvalorc11p11intermediao7,$cvalorc11p11intermediao8,$cvalorc11p11intermediao9,$cvalorc11p11intermediao10,
                $cvalorc11p11intermediao11,$cvalorc11p11intermediao12,$cvalorc11p11intermediao13,$cvalorc11p11intermediao14,$cvalorc11p11intermediao15,$cvalorc11p11intermediacual);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
    public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_c11p11intermedia->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    
}
