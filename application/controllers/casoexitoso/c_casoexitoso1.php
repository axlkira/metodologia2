<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_casoexitoso1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/casoexitoso/m_casoexitoso1');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_casoexitoso1($page = 'v_casoexitoso1') {

         if (!file_exists('application/views/pages/casoexitoso/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        
        $cdoccogestor =  $this->session->userdata('documento');
        

        $cfolio = $this->input->get('folio');
        $cidestacion = $this->input->get('idestacion'); //tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_casoexitoso1->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_casoexitoso1->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_casoexitoso1->fm_buscarpregunta($cfolio,$cidestacion);
        $carrayrespuestas= array('ecexitosoo1' => '','ecexitosoo2' => '','ecexitosoo3' => '','ecexitosoo4' => '','ecexitosoo5' => '','ecexitosoo6' => '','ecexitosoo7' => '','ecexitosoo8' => '','ecexitosoo9' => '','ecexitosoo1cual' => '','ecexitosoo2cual' => '','ecexitosoo3cual' => '','ecexitosoo4cual' => '','ecexitosoo5cual' => '','ecexitosoo6cual' => '','ecexitosoo7cual' => '','ecexitosoo8cual' => '','ecexitosoo9cual' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ecexitosoo1' => $crespuesta->exitosoo1,'ecexitosoo2' => $crespuesta->exitosoo2,'ecexitosoo3' => $crespuesta->exitosoo3,'ecexitosoo4' => $crespuesta->exitosoo4,'ecexitosoo5' => $crespuesta->exitosoo5,'ecexitosoo6' => $crespuesta->exitosoo6,'ecexitosoo7' => $crespuesta->exitosoo7,'ecexitosoo8' => $crespuesta->exitosoo8,'ecexitosoo9' => $crespuesta->exitosoo9,'ecexitosoo1cual' => $crespuesta->exitosoo1cual,
                'ecexitosoo2cual' => $crespuesta->exitosoo2cual,'ecexitosoo3cual' => $crespuesta->exitosoo3cual,'ecexitosoo4cual' => $crespuesta->exitosoo4cual,'ecexitosoo5cual' => $crespuesta->exitosoo5cual,'ecexitosoo6cual' => $crespuesta->exitosoo6cual,'ecexitosoo7cual' => $crespuesta->exitosoo7cual,
                'ecexitosoo8cual' => $crespuesta->exitosoo8cual,'ecexitosoo9cual' => $crespuesta->exitosoo9cual);
        }
        //fin traer datos generales
        $idintegrante = $this->input->get('idintegrante');
       //Levantar vista     
        $titulo = 'caso exitoso'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/casoexitoso/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head3' => HEAD3, 
                                                   'botoneragcapa' => BOTONERAGCAPA, 
                                                   'botoneraacapa' => BOTONERAACAPA,
                                                   'folio' => $cfolio,
                                                   'doccogestor'=>$cdoccogestor,
                                                   'idintegrante'=> $idintegrante,
                                                   'idestacion' => $cidestacion,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $ccexitosoo1= $this->input->get('vcexitosoo1');   
        $ccexitosoo2= $this->input->get('vcexitosoo2');
        $ccexitosoo3= $this->input->get('vcexitosoo3');
        $ccexitosoo4= $this->input->get('vcexitosoo4');
        $ccexitosoo5= $this->input->get('vcexitosoo5');
        $ccexitosoo6= $this->input->get('vcexitosoo6');
        $ccexitosoo7= $this->input->get('vcexitosoo7');
        $ccexitosoo8= $this->input->get('vcexitosoo8');
        $ccexitosoo9= $this->input->get('vcexitosoo9');
        $ctextoavo1= $this->input->get('vtextoavo1');
        $ctextoavo2= $this->input->get('vtextoavo2');
        $ctextoavo3= $this->input->get('vtextoavo3');
        $ctextoavo4= $this->input->get('vtextoavo4');
        $ctextoavo5= $this->input->get('vtextoavo5');
        $ctextoavo6= $this->input->get('vtextoavo6');
        $ctextoavo7= $this->input->get('vtextoavo7');
        $ctextoavo8= $this->input->get('vtextoavo8');
        $ctextoavo9= $this->input->get('vtextoavo9');
        $cidestacion= $this->input->get('videstacion');
        $this->m_casoexitoso1->fm_actualizarpregunta($cfolio,$ccexitosoo1,$ccexitosoo2,$ccexitosoo3,$ccexitosoo4,$ccexitosoo5,$ccexitosoo6,$ccexitosoo7,$ccexitosoo8,$ccexitosoo9,$ctextoavo1,$ctextoavo2,$ctextoavo3,$ctextoavo4,$ctextoavo5,$ctextoavo6,$ctextoavo7,$ctextoavo8,$ctextoavo9,$cidestacion);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
     
     public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_casoexitoso1->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    
}
