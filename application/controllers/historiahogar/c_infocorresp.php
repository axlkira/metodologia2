<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_infocorresp extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('historiahogar/m_infocorresp');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_infocorresp($page = 'v_infocorresp') {

        if (!file_exists('application/views/pages/historiahogar/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $idestacion = $this->input->get('idestacion');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get
        $doccogestor = $this->input->get('doccogestor');
        //para traer la informacion de ayudas
        $cayudas = $this->m_infocorresp->fm_ayudas();
        
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_infocorresp->fm_cargardatosgenerales($cfolio);
        $carraydatosgenerales= array('enomcoges' => '', 'efolio' =>'', 'ecapitulo' => '', 'etitular' => '','edoctitular' => ''); 
        foreach ($cdatosgenerales as $cdatgen)
        {
            $carraydatosgenerales = array('enomcoges' => $cdatgen->nomcoges,'efolio' => $cdatgen->folio,'ecapitulo' => $cdatgen->capitulo,'etitular' => $cdatgen->titular,'edoctitular' => $cdatgen->doctitular);
        }
        //fin traer datos generales
        $crespuestasinfcoreesp = $this->m_infocorresp->fm_buscarinfocorresp($cfolio);
                                         
        $carrayrespuestasinfocorresp = array('efolio' =>'','einfocorresp1' => '','einfocorresp2' => '','einfocorresp3' => '','einfocorrespcual' => '','einfoautonomia1' => '','einfoautonomia2' => '','einfoautonomiacual' => ''); 
        foreach ($crespuestasinfcoreesp as $crespuestainfocorresp)
        {
            $carrayrespuestasinfocorresp = array('efolio'=>$crespuestainfocorresp->folio,'einfocorresp1'=>$crespuestainfocorresp->infocorresp1,'einfocorresp2'=>$crespuestainfocorresp->infocorresp2,'einfocorresp3'=>$crespuestainfocorresp->infocorresp3,'einfocorrespcual'=>$crespuestainfocorresp->infocorrespcual,'einfoautonomia1'=>$crespuestainfocorresp->infoautonomia1,'einfoautonomia2'=>$crespuestainfocorresp->infoautonomia2,'einfoautonomiacual'=>$crespuestainfocorresp->infoautonomiacual);
        }
        //fin traer datos generales
        //Levantar vista     
        $titulo = 'Historia hogar - Vista 5'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/historiahogar/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'folio' => $cfolio,
                                                   'doccogestor' => $doccogestor,
                                                   'idestacion'=>$idestacion,
                                                   'textoayuda' => $ctextoayuda,
                                                   'carrayrespuestasinfocorresp' =>$carrayrespuestasinfocorresp,
                                                   'arraydatosgenerales' => $carraydatosgenerales));
        //Fin levantar vista
    }
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->post('vfolio');
        $cvalorinfocorresp1= $this->input->post('vvalorinfocorresp1');
        $cvalorinfocorresp2= $this->input->post('vvalorinfocorresp2');
        $cvalorinfocorresp3= $this->input->post('vvalorinfocorresp3');
        $cinfocorrespcual= $this->input->post('vinfocorrespcual');
        $cvalorinfoautonomia1= $this->input->post('vvalorinfoautonomia1');
        $cvalorinfoautonomia2= $this->input->post('vvalorinfoautonomia2');
        $cinfoautonomiacual= $this->input->post('vinfoautonomiacual');
                
        $this->m_infocorresp->fm_actualizarpregunta($cfolio,$cvalorinfocorresp1,$cvalorinfocorresp2,$cvalorinfocorresp3,$cinfocorrespcual,$cvalorinfoautonomia1,$cvalorinfoautonomia2,$cinfoautonomiacual);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
    
      public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_infocorresp->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    public function fc_cerrarestacion()
    {
       $cfolio = $this->input->get('vfolio');
       $cidestacion = $this->input->get('videstacion');
       $cestado = $this->input->get('vestado');
       $clongitud = $this->input->get('vlongitud');
       $clatitud = $this->input->get('vlatitud');
       $cmensajedonde = $this->input->get('vmensajedonde');
       $this->m_infocorresp->fm_cerrarestacion($cfolio,$cidestacion,$cestado,$this->session->userdata('id'),$this->session->userdata('documento'),$clongitud,$clatitud,$cmensajedonde);
    }
}
