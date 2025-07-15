<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_ppc3p3b extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/perfilproductivo/m_ppc3p3b');//carga el controlador modelo
        
        
          if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_ppc3p3b($page = 'v_ppc3p3b') {

        if (!file_exists('application/views/pages/perfilproductivo/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get

        //para traer la informacion de ayudas
        $cayudas = $this->m_ppc3p3b->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_ppc3p3b->fm_cargardatosgenerales($cfolio,$idintegrante);
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
        }    //fin traer datos generales
        
        //incio traer respuestas
        $crespuestas = $this->m_ppc3p3b->fm_buscarpregunta($idintegrante);
        $carrayrespuestas= array('eppc3p3b1' => '', 'eppc3p3b2' => '','eppc3p3b3' => '','eppc3p3b4' => '',
                                 'eppc3p3b5' => '','eppc3p3b6' => '', 'eppc3p3d' => ''); 
        
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('eppc3p3b1' => $crespuesta->ppc3p3b1, 'eppc3p3b2' => $crespuesta->ppc3p3b2,'eppc3p3b3' => $crespuesta->ppc3p3b3,
                                      'eppc3p3b4' => $crespuesta->ppc3p3b4,'eppc3p3b5' => $crespuesta->ppc3p3b5,'eppc3p3b6' => $crespuesta->ppc3p3b6,
                                      'eppc3p3d' => $crespuesta->ppc3p3d);
        }
        //fin traer datos generales
        
        
        
        $listartabla = $this->m_ppc3p3b->fm_listartabla($idintegrante);
        
        
        $datos2='';
        
        
        
        $a = 0;//para saber el numero de l registro
        $b = 0;//el resultado del modulo para saber si es verde o blanco
        foreach ($listartabla as $valor)
        {
        $cont= 0;
        ++$cont;
        ++$a;
        $b = $a % 2;
        
        if($b === 1)
        {
            $colorfila = 'class="success"';
        }
        else
        {
            $colorfila = 'class=""';
        }
        
//        if ($cont >= $valor->idlabor)
//            {
//               $idlabor = $idlabor + 1 ;
//            }
            
        $datos2 .=  '<tr '.$colorfila.'>'
                    .'<td>'.$valor->idlabor.'</td>'
                    .'<td>'.$valor->ppc3p3b1.'</td>'
                    .'<td>'.$valor->ppc3p3b2.'</td>'
                    .'<td>'.$valor->ppc3p3b3.'</td>'
                    .'<td>'.$valor->ppc3p3b4.'</td>'
                    .'<td>'.$valor->ppc3p3b5.'</td>'
                    .'<td>'.$valor->ppc3p3b6.'</td>'
                    //.'<td><button type="button" id="edicion" class="btn btn-success btn-sm">Editar</button></td>
                   .'<td><button type="button" id="edicion'.$valor->idlabor.'" class="btn btn-success btn-sm" onclick="eliminarexplaboral('.$valor->idlabor.')">Eliminar</button></td>
                       
                   
                        </tr>';
        }
        
        
        
       //Levantar vista     
        $titulo = 'Cap III - Pregunta 3b'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/perfilproductivo/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'botonerac' => BOTONERAC,
                                                   'folio' => $cfolio,
                                                   'idintegrante' => $idintegrante,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'carrayrespuestas' => $carrayrespuestas,
                                                   'datos2'=>$datos2
                                                   ));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar
    public function fc_insertarempleo()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');
        $cvempresa = $this->input->get('vempresa');  
        $cvtelempresa = $this->input->get('vtelempresa'); 
        $cvcargo = $this->input->get('vcargo'); 
        $cvfechai = $this->input->get('vfechai'); 
        $cvfechaf = $this->input->get('vfechaf'); 
        $cvciudad = $this->input->get('vciudad');
        $cvvalorppc3p3d = $this->input->get('vvalorppc3p3d');
        $this->m_ppc3p3b->fm_insertarempleo($cfolio,$cidintegrante,$cvempresa,$cvtelempresa,$cvcargo,$cvfechai,$cvfechaf,$cvciudad,$cvvalorppc3p3d );
       //echo json_encode(array('result' => 'guardado'));
        
        
        
        $listartabla = $this->m_ppc3p3b->fm_listartabla($cidintegrante);
        
        
        $datos2='';
        
        
        
        $a = 0;//para saber el numero de l registro
        $b = 0;//el resultado del modulo para saber si es verde o blanco
        foreach ($listartabla as $valor)
        {
        $cont= 0;
        ++$cont;
        ++$a;
        $b = $a % 2;
        
        if($b === 1)
        {
            $colorfila = 'class="success"';
        }
        else
        {
            $colorfila = 'class=""';
        }
        
//        if ($cont >= $valor->idlabor)
//            {
//               $idlabor = $idlabor + 1 ;
//            }
            
        $datos2 .=  '<tr '.$colorfila.'>'
                    .'<td>'.$valor->idlabor.'</td>'
                    .'<td>'.$valor->ppc3p3b1.'</td>'
                    .'<td>'.$valor->ppc3p3b2.'</td>'
                    .'<td>'.$valor->ppc3p3b3.'</td>'
                    .'<td>'.$valor->ppc3p3b4.'</td>'
                    .'<td>'.$valor->ppc3p3b5.'</td>'
                    .'<td>'.$valor->ppc3p3b6.'</td>'
                    //.'<td><button type="button" id="edicion" class="btn btn-success btn-sm">Editar</button></td>
                   .'<td><button type="button" id="edicion'.$valor->idlabor.'" class="btn btn-success btn-sm" onclick="eliminarexplaboral('.$valor->idlabor.')">Eliminar</button></td>
                       
                   
                        </tr>';
        }
        
        echo $datos2;
    }
    //fin funcion para actualizar
    
    public function fc_eliminarexplaboral()
    {
       $cidintegrante= $this->input->get('vidintegrante'); 
       $cidlabor= $this->input->get('vidlabor');
       $this->m_ppc3p3b->fm_eliminarexplaboral($cidintegrante,$cidlabor );
        
       $listartabla = $this->m_ppc3p3b->fm_listartabla($cidintegrante);
       
       $datos2='';
        
        
        
        $a = 0;//para saber el numero de l registro
        $b = 0;//el resultado del modulo para saber si es verde o blanco
        foreach ($listartabla as $valor)
        {
        $cont= 0;
        ++$cont;
        ++$a;
        $b = $a % 2;
        
        if($b === 1)
        {
            $colorfila = 'class="success"';
        }
        else
        {
            $colorfila = 'class=""';
        }
        
//        if ($cont >= $valor->idlabor)
//            {
//               $idlabor = $idlabor + 1 ;
//            }
            
        $datos2 .=  '<tr '.$colorfila.'>'
                    .'<td>'.$valor->idlabor.'</td>'
                    .'<td>'.$valor->ppc3p3b1.'</td>'
                    .'<td>'.$valor->ppc3p3b2.'</td>'
                    .'<td>'.$valor->ppc3p3b3.'</td>'
                    .'<td>'.$valor->ppc3p3b4.'</td>'
                    .'<td>'.$valor->ppc3p3b5.'</td>'
                    .'<td>'.$valor->ppc3p3b6.'</td>'
                    //.'<td><button type="button" id="edicion" class="btn btn-success btn-sm">Editar</button></td>
                   .'<td><button type="button" id="edicion'.$valor->idlabor.'" class="btn btn-success btn-sm" onclick="eliminarexplaboral('.$valor->idlabor.')">Eliminar</button></td>
                       
                   
                        </tr>';
        }
        
        echo $datos2;
       
       
    }
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');
        $cvvalorppc3p3b= $this->input->get('vvalorppc3p3b');  
        $this->m_ppc3p3b->fm_actualizarpregunta($cfolio,$cidintegrante,$cvvalorppc3p3b);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
   
    
}
