<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c11p12b extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_c11p12b');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c11p12b($page = 'v_c11p12b') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c11p12b->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c11p12b->fm_cargardatosgenerales($cfolio,$idintegrante);
        $carraydatosgenerales= array('enomcoges' => '', 'efolio' =>'', 'ecapitulo' => '', 'etitular' => '','edoctitular' => '','enombreintegrante' => '','edocintegrante' => '','esexointegrante'=> '','eedadintegrante'=> ''); 
        foreach ($cdatosgenerales as $cdatgen)
        {
            $carraydatosgenerales = array('enomcoges' => $cdatgen->nomcoges,
                                          'efolio' => $cdatgen->folio, 
                                          'ecapitulo' => $cdatgen->capitulo,
                                          'etitular' => $cdatgen->titular,
                                          'edoctitular' => $cdatgen->doctitular,
                                          'enombreintegrante' => $cdatgen->nombreintegrante,
                                          'edocintegrante' => $cdatgen->docintegrante,
                                          'esexointegrante' => $cdatgen->sexointegrante,
                                          'eedadintegrante' => $cdatgen->edadintegrante);
        }
        //fin traer datos generales

        //incio traer respuestas
        $crespuestas = $this->m_c11p12b->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec11p12b' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec11p12b' => $crespuesta->c11p12b);
        }
        //fin traer datos generales        
        
        //incio traer listar diagnosticos
        $ccategoria ='';
        $cdatosdignosticos = $this->m_c11p12b->fm_listadediagnosticos($ccategoria);
        $carraygianostico= ''; 
        foreach ($cdatosdignosticos as $cdatosdignostico)
        {
            if($carrayrespuestas['ec11p12b'] == $cdatosdignostico->idcategoria)
            {
                $varck = 'checked';
            }
            else
            {
                $varck = '';
            }
            
            $carraygianostico .=  '<div class="radio">
                                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                                    <input type="radio" name="c11p12b" id="c11p12b" onclick="colocaropcion(\''.$cdatosdignostico->idcategoria.'\',\'valorc11p12b\',\'c11p12bdiv\');" value="'.$cdatosdignostico->idcategoria.'" '.$varck.'>
                                    '.$cdatosdignostico->idcategoria.' - '.$cdatosdignostico->descripcion.' 
                                    </label>
                                  </div>';
        }
        //fin traer datos generales        
        
       //Levantar vista     
        $titulo = 'Cap XI - Pregunta 12b'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'folio' => $cfolio,
                                                   'idintegrante' => $idintegrante,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arraygianostico' => $carraygianostico,
                                                   'arrayrespuestas' => $carrayrespuestas));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');  
        $cvalorc11p12b= $this->input->get('vvalorc11p12b');        
        $this->m_c11p12b->fm_actualizarpregunta($cfolio,$cidintegrante,$cvalorc11p12b);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar

    public function filtrarcategoria() 
    {
        $idintegrante = $this->input->get('vidintegrante');
        $ccategoria = $this->input->get('vcategoria');//tomamos el valor del vivienda que viene por get        
        //incio traer respuestas
        $crespuestas = $this->m_c11p12b->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('ec11p12b' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec11p12b' => $crespuesta->c11p12b);
        }
        //fin traer datos generales        
        
        //incio traer listar diagnosticos
        
        $cdatosdignosticos = $this->m_c11p12b->fm_listadediagnosticos($ccategoria);
        $carraygianostico= ''; 
        foreach ($cdatosdignosticos as $cdatosdignostico)
        {
            if($carrayrespuestas['ec11p12b'] == $cdatosdignostico->idcategoria)
            {
                $varck = 'checked';
                $sele = '';
            }
            else
            {
                $varck = '';
                $sele = '';
            }
            
            $carraygianostico .=  '<div class="radio">
                                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                                    <input type="radio" name="c11p12b" id="c11p12b" onclick="colocaropcion(\''.$cdatosdignostico->idcategoria.'\',\'valorc11p12b\',\'c11p12bdiv\');" value="'.$cdatosdignostico->idcategoria.'" '.$varck.'>
                                    '.$cdatosdignostico->idcategoria.' - '.$cdatosdignostico->descripcion.' 
                                    </label>
                                  </div>';
        }
        //fin traer datos generales        
        
        echo($carraygianostico);
    }
}
