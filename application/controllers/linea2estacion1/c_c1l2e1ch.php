<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_c1l2e1ch extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('linea2estacion1/m_c1l2e1ch');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_c1l2e1ch($page = 'v_c1l2e1ch') {

        if (!file_exists('application/views/pages/linea2estacion1/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
//        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del folio que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_c1l2e1ch->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_c1l2e1ch->fm_cargardatosgenerales($cfolio);
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
        $crespuestas = $this->m_c1l2e1ch->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('ecualidad1' => '','ecualidad2' => '','ecualidad3' => '','ecualidad4' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ecualidad1' => $crespuesta->cualidad1,'ecualidad2' => $crespuesta->cualidad2,'ecualidad3' => $crespuesta->cualidad3,'ecualidad4' => $crespuesta->cualidad4);
        }
        //fin traer datos generales        
        
        
        //incio traer listar cualidades
        $ccualidad = '';
        $cdatoscualidades = $this->m_c1l2e1ch->fm_listadecualidades($ccualidad);
        $carraydatoscualidades= ''; 
        foreach ($cdatoscualidades as $cdatoscualidad)
        {
            if($carrayrespuestas['ecualidad1'] == $cdatoscualidad->nombre || $carrayrespuestas['ecualidad2'] == $cdatoscualidad->nombre || $carrayrespuestas['ecualidad3'] == $cdatoscualidad->nombre || $carrayrespuestas['ecualidad4'] == $cdatoscualidad->nombre )
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
        $titulo = 'Paso 7 -1'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/linea2estacion1/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botoneragcapa' => BOTONERAGCAPA, 
                                                   'botoneraacapa' => BOTONERAACAPA,
                                                   'folio' => $cfolio,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas,'arraydatoscualidades' => $carraydatoscualidades));
        //Fin levantar vista

         
    }
    
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cvalorcualidad1= $this->input->get('vvalorcualidad1');  
        $cvalorcualidad2= $this->input->get('vvalorcualidad2'); 
        $cvalorcualidad3= $this->input->get('vvalorcualidad3');
        $cvalorcualidad4= $this->input->get('vvalorcualidad4');
        $this->m_c1l2e1ch->fm_actualizarpregunta($cfolio,$cvalorcualidad1,$cvalorcualidad2,$cvalorcualidad3,$cvalorcualidad4);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar

    public function filtrarcualidades() 
    {
        $cfolio = $this->input->get('vfolio');
        $ccualidad = $this->input->get('vcualidad');
       // $crespuestas = $this->m_c1l2e1ch->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('ecualidad1' => $this->input->get('vcualidad1'),
                                'ecualidad2' => $this->input->get('vcualidad2'),
                                'ecualidad3' => $this->input->get('vcualidad3'),
                                'ecualidad4' => $this->input->get('vcualidad4'));      
        
        
        //incio traer listar cualidades
        $cdatoscualidades = $this->m_c1l2e1ch->fm_listadecualidades($ccualidad);
        $carraydatoscualidades= ''; 
        foreach ($cdatoscualidades as $cdatoscualidad)
        {
            if($carrayrespuestas['ecualidad1'] == $cdatoscualidad->nombre || $carrayrespuestas['ecualidad2'] == $cdatoscualidad->nombre || $carrayrespuestas['ecualidad3'] == $cdatoscualidad->nombre || $carrayrespuestas['ecualidad4'] == $cdatoscualidad->nombre )
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
       $this->m_c1l2e1ch->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    
}
