<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c1l2e1chintegrante extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('linea2estacion1/m_c1l2e1chintegrante');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c1l2e1chintegrante($page = 'v_c1l2e1chintegrante') {

        if (!file_exists('application/views/pages/linea2estacion1/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
//        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $cidintegrante = $this->input->get('idintegrante');//tomamos el valor del folio que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c1l2e1chintegrante->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
         //incio traer datos generales
        $cdatosgenerales = $this->m_c1l2e1chintegrante->fm_cargardatosgenerales($cfolio,$cidintegrante);
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
        $crespuestas = $this->m_c1l2e1chintegrante->fm_buscarpregunta($cfolio,$cidintegrante);
        $carrayrespuestas= array('ecualidad1int' => '','ecualidad2int' => '','ecualidad3int' => '','ecualidad4int' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ecualidad1int' => $crespuesta->cualidad1int,'ecualidad2int' => $crespuesta->cualidad2int,'ecualidad3int' => $crespuesta->cualidad3int,'ecualidad4int' => $crespuesta->cualidad4int);
        }
        //fin traer datos generales        
        
        
        //incio traer listar cualidades
        $ccualidad = '';
        $cdatoscualidades = $this->m_c1l2e1chintegrante->fm_listadecualidades($ccualidad);
        $carraydatoscualidades= ''; 
        foreach ($cdatoscualidades as $cdatoscualidad)
        {
            if($carrayrespuestas['ecualidad1int'] == $cdatoscualidad->nombre || $carrayrespuestas['ecualidad2int'] == $cdatoscualidad->nombre || $carrayrespuestas['ecualidad3int'] == $cdatoscualidad->nombre || $carrayrespuestas['ecualidad4int'] == $cdatoscualidad->nombre )
            {
                $varck = 'checked';
                
            }
            else
            {
                $varck = '';
            }
            
            $carraydatoscualidades .=  ' <div id="c1l2e1chdiv'.$cdatoscualidad->id.'" class="has-error" >
                                         <div class="checkbox">
                                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                                    <input type="checkbox" name="c1l2e1ch'.$cdatoscualidad->id.'"  id="c1l2e1ch'.$cdatoscualidad->id.'" onclick="validar(\'c1l2e1ch'.$cdatoscualidad->id.'\',\'c1l2e1chdiv'.$cdatoscualidad->id.'\',\''.$cdatoscualidad->nombre.'\');" value="'.$cdatoscualidad->nombre.'" '.$varck.' >
                                    '.$cdatoscualidad->id.' - '.$cdatoscualidad->nombre.' 
                                    </label>
                                  </div>
                                  </div>';
        }
        //fin traer datos generales        
        
       //Levantar vista     
        //Levantar vista     
        $titulo = 'Paso 7 - 2'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/linea2estacion1/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botoneragcapa' => BOTONERAGCAPA, 
                                                   'botoneraacapa' => BOTONERAACAPA,
                                                   'folio' => $cfolio,
                                                   'idintegrante' => $cidintegrante, 
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas,'arraydatoscualidades' => $carraydatoscualidades));
        //Fin levantar vista

         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $cvalorcualidad1int= $this->input->get('vvalorcualidad1int');  
        $cvalorcualidad2int= $this->input->get('vvalorcualidad2int'); 
        $cvalorcualidad3int= $this->input->get('vvalorcualidad3int');
        $cvalorcualidad4int= $this->input->get('vvalorcualidad4int');
        $this->m_c1l2e1chintegrante->fm_actualizarpregunta($cfolio,$cidintegrante,$cvalorcualidad1int,$cvalorcualidad2int,$cvalorcualidad3int,$cvalorcualidad4int);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar

    public function filtrarcualidades() 
    {
        $cfolio = $this->input->get('vfolio');
        $cintegrante = $this->input->get('vidintegrante');
        $ccualidad = $this->input->get('vcualidad');
        //$crespuestas = $this->m_c1l2e1chintegrante->fm_buscarpregunta($cfolio,$cintegrante);
        $carrayrespuestas= array('ecualidad1int' => $this->input->get('vcualidad1'),
                                'ecualidad2int' => $this->input->get('vcualidad2'),
                                'ecualidad3int' => $this->input->get('vcualidad3'),
                                'ecualidad4int' => $this->input->get('vcualidad4')); 
//        foreach ($crespuestas as $crespuesta)
//        {
//            $carrayrespuestas = array('ecualidad1int' => $crespuesta->cualidad1int,'ecualidad2int' => $crespuesta->cualidad2int,'ecualidad3int' => $crespuesta->cualidad3int,'ecualidad4int' => $crespuesta->cualidad4int);
//        }
        //fin traer datos generales        
        
        
        //incio traer listar cualidades
        $cdatoscualidades = $this->m_c1l2e1chintegrante->fm_listadecualidades($ccualidad);
        $carraydatoscualidades= ''; 
        foreach ($cdatoscualidades as $cdatoscualidad)
        {
            if($carrayrespuestas['ecualidad1int'] == $cdatoscualidad->nombre || $carrayrespuestas['ecualidad2int'] == $cdatoscualidad->nombre || $carrayrespuestas['ecualidad3int'] == $cdatoscualidad->nombre || $carrayrespuestas['ecualidad4int'] == $cdatoscualidad->nombre )
            {
                $varck = 'checked';
                $claseinput = 'class=""';
            }
            else
            {
                $varck = '';
                $claseinput = 'class="has-error"';
            }
            
            $carraydatoscualidades .=  ' <div id="c1l2e1chdiv'.$cdatoscualidad->id.'" '.$claseinput.' >
                                    <div class="checkbox">
                                    <label><!--en este caso se manda a la fincion javascript el valor del campo-->
                                    <input type="checkbox" name="c1l2e1ch'.$cdatoscualidad->id.'" id="c1l2e1ch'.$cdatoscualidad->id.'" onclick="validar(\'c1l2e1ch'.$cdatoscualidad->id.'\',\'c1l2e1chdiv'.$cdatoscualidad->id.'\',\''.$cdatoscualidad->nombre.'\');" value="'.$cdatoscualidad->nombre.'" '.$varck.' >
                                    '.$cdatoscualidad->id.' - '.$cdatoscualidad->nombre.' 
                                    </label>
                                  </div>
                                  </div>';
        }
        //fin traer datos generales           
        
        echo($carraydatoscualidades);
    }
    
    
    public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_c1l2e1chintegrante->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    
}
