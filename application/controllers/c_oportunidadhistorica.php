<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_oportunidadhistorica extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_oportunidadhistorica');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_oportunidadhistorica($page = 'v_oportunidadhistorica') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
       
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get
        $idintegrante = $this->input->get('idintegrante');
        $cvariable = $this->input->get('variable');

        
        
        
        $cdatosgenerales = $this->m_oportunidadhistorica->fm_cargardatosgenerales($cfolio,$idintegrante);
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
       
        
         

        $listartabla = $this->m_oportunidadhistorica->fm_oportunidadhistorica($idintegrante);
         
        
        
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
        
       
        $datos .=  '<tr '.$colorfila.'>'
                    .'<td>'.$valor->idoportunidad.'</td>'
                    .'<td>'.$valor->nombre_oportunidad.'</td>'
                    .'<td>'.$valor->nombre_estado.'</td>'
                    .'<td>'.$valor->fecha_registro.'</td>'
                    .'<td>'.$valor->fecha_actualizacion.'</td>'
                    //.'<td><button class="btn btn-danger btn-sm" '.$desabilita.' onclick="eliminaroportunidadh('.$valor->idoportunidad.')" type="button" id="eliminarh" name="acercarh"><span class="glyphicon glyphicon-remove"></span> Eliminar </button></td>
                    .'</tr>';
        //INICIO MODAL AYUDA 
        
           
            
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'oportunidad'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD1, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'folio' => $cfolio,
                                                   'idintegrante' => $idintegrante,
                                                   'datos' => $datos,
                                                   'arraydatosgenerales' => $carraydatosgenerales,
                                                   'evariable' => $cvariable,
                                                  
                                                    ));
        //Fin levantar vista
         
    }
    
    

    
    
    //esta funcion es la encargada de cargar la tabla por medio de ajax , caundo se esta filtrando por id u oportunidad
    function fc_filtrartablaoportunidadhistorico()
    {
        $cvidintegrante= $this->input->get('vidintegrante');
        $cidbuscoph= $this->input->get('vidbuscoph');
        $cnombuscop= $this->input->get('vnombuscop');
        $cvestbuscopi = $this->input->get('vestbuscopi');
       
        $listartabla = $this->m_oportunidadhistorica->fm_buscaroportunidadhistorica($cvidintegrante,$cidbuscoph,$cnombuscop,$cvestbuscopi);
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
        
       
        $datos .=  '<tr '.$colorfila.'>'
                    .'<td>'.$valor->idoportunidad.'</td>'
                    .'<td>'.$valor->nombre_oportunidad.'</td>'
                    .'<td>'.$valor->nombre_estado.'</td>'
                    .'<td>'.$valor->fecha_registro.'</td>'
                    .'<td>'.$valor->fecha_actualizacion.'</td>'
                    //.'<td><button class="btn btn-danger btn-sm" '.$desabilita.' onclick="eliminaroportunidadh('.$valor->idoportunidad.')" type="button" id="eliminarh" name="acercarh"><span class="glyphicon glyphicon-remove"></span> Eliminar </button></td>
                    .'</tr>';
        //INICIO MODAL AYUDA 
        
           
            
        }
                
         echo ($datos);
        
    }
    
    //fin filtro de busqueda
    
  
}
