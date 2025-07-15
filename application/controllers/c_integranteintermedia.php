<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_integranteintermedia extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_integranteintermedia');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_integranteintermedia($page = 'v_integranteintermedia') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cvariable = $this->input->get('variable');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get
        $doccogestor = $this->session->userdata('documento');
        //para traer la informacion de ayudas
        $cayudas = $this->m_integranteintermedia->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_integranteintermedia->fm_cargardatosgenerales($cfolio,$idintegrante);
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
                                          'eedadintegrante' => $cdatgen->edadintegrante,
                                          'efechanacimiento' =>$cdatgen-> fechanacimiento);
        }
        //fin traer datos generales
        
        //incio traer respuestas
//        $crespuestas = $this->m_integranteintermedia->fm_buscarpregunta($idintegrante);
//        $carrayrespuestas= array('eacercaroportunidad' => ''); 
//        foreach ($crespuestas as $crespuesta)
//        {
//            $carrayrespuestas = array('eacercaroportunidad' => $crespuesta->acercaroportunidad);
//        }
//        
//        
$listartabla = $this->m_integranteintermedia->fm_buscarintegrantesop($cfolio);
                
        $datos = '';
        $a = 0;//para saber el numero de l registro
        $b = 0;//el resultado del modulo para saber si es verde o blanco  
        foreach ($listartabla as $valor)
        {
        $cont= 0;
        ++$cont;
        ++$a;
        $b = $a % 2;
        //para colocar el color de la fila
        if($b === 1)
        {
            $colorfila = 'class="success text-uppercase"';
        }
        else
        {
            $colorfila = 'class="text-uppercase"';
        }
        
        //estaado de la encuesta
       
        
        //fin estado de la encuensta
            
        $datos .=  '<tr '.$colorfila.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                    .'<td><button type="button" id="irform" onclick="iraformintegrante('.$valor->folio.','.$valor->idintegrante.');insertarcapintegrantesintermedia('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-primary btn-sm" ><span class="glyphicon glyphicon-check"></span> Ir a formulario </button></td>'
                
                    
                    .'<td></td>
                    </tr>';
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'integranteintermedia'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD1, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'folio' => $cfolio,
                                                   'evariable' => $cvariable,
                                                   'idtitular' => $idintegrante,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'datos' => $datos,
                                                    'doccogestor' => $doccogestor));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    
    public function fc_sincoportunidad(){
        
        $this->m_integranteintermedia->fm_sincoportunidad();
       
        //echo('SIncronizacion OK');

    }
    
    public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_integranteintermedia->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    
    
      public function fc_insertarcapintegrantesintermedia()
    {
       $cfolio = $this->input->get('vfolio');
       $cvidintegrante = $this->input->get('vidintegrante');
       $this->m_integranteintermedia->fm_insertarcapintegrantesintermedia($cfolio,$cvidintegrante);
    }
    
    
    
}
