<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_l2e1diligenciarintegrante extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/linea2estacion1/m_l2e1diligenciarintegrante');//carga el controlador modelo
        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }     
//
       // $this->load->controller('c_capitulosintegrante');
       // $this->load->view('pages/v_capitulosintegrante');
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_l2e1diligenciarintegrante ($page = 'v_l2e1diligenciarintegrante') {

        if (!file_exists('application/views/pages/linea2estacion1/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
       // $this->c_capitulosintegrante->fc_capitulosintegrante();
        //INICIO TRAER DATOS DEL TITULAR
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
       
        $datosintegrante = $this->m_l2e1diligenciarintegrante->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
        $tdatinte= array('tfolio' => '', 
                          'tidintegrante' => '',
                          'tdoc' => '',
                          'tnombre' => '');
        
        foreach ($datosintegrante as $filainte)
        {
        $tdatinte = array('tfolio' => $filainte->folio,
                          'tidintegrante' => $filainte->idintegrante,
                          'tdoc' => $filainte->documento, 
                          'tnombre' => $filainte->nombre1.' '.$filainte->nombre2.' '.$filainte->apellido1.' '.$filainte->apellido2); //se guarda el resultado del ption value en la variable datos
        }
        //FIN TRAER DATOS DEL TITULAR       
        



        //validar si el folio existe
        $idinteexiste = $this->m_l2e1diligenciarintegrante->fm_foloexiste($idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
        //ACA USTEDES SI TOCAN - COLOCAN EL NOMBRE DE LAS VARIABLES
           $foexiste= array('efolio' => '', 'eidint' =>'', 'etipodocumento' => '',
                          'edocumento' => '', 'enombre1' => '','enombre2' => '','eapellido1' => '','eapellido2' => '','efnacimiento'=>'', 'esexo' => '','eedad' => '','etelefono' => '', 
                          'ecelular' => '', 'ecorreo' => '', 'etwitter' => '', 'efacebook' => '','einstagram' => '','egoogle' => ''); 
        
        foreach ($idinteexiste as $fila)
        {
        //USTEDES SI TOCAN - LO VERDE LO COLCAN COMO ESTA EN LA TABLA DE LA BD
        $foexiste = array('efolio' => $fila->folio,'eidint' => $fila->idintegrante, 'etipodocumento' => $fila->tipodocumento,
            'edocumento' => $fila->documento, 'enombre1' => $fila->nombre1,'enombre2' => $fila->nombre2,'eapellido1' => $fila->apellido1, 'eapellido2' => $fila->apellido2,'efnacimiento' => $fila->fechanacimiento,'esexo' => $fila->sexo,
            'eedad' => $fila->edad,'etelefono' => $fila->telefono,'ecelular' => $fila->celular,'ecorreo' => $fila->correo,'etwitter' => $fila->twitter,'efacebook' => $fila->facebook,
            'einstagram' => $fila->instagram,'egoogle' => $fila->google); //se guarda el resultado del ption value en la variable datos
 
        }
        //fin validar si el folio existe
          //incio traer respuestas
        $crespuestas = $this->m_l2e1diligenciarintegrante->fm_buscarpregunta($folio);
        $carrayrespuestas= array('eppc1p1n5' => '','eppc1p1n51' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('eppc1p1n5' => $crespuesta->ppc1p1n5,'eppc1p1n51' => $crespuesta->ppc1p1n51);
        }
        //fin traer datos generales
        
        //traer una lista de valores
        $listartabla = $this->m_l2e1diligenciarintegrante->fm_listartabla($folio);
        
        
        $datos = '';
        
        
       
        
        $a = 0;//para saber el numero de l registro
        $b = 0;//el resultado del modulo para saber si es verde o blanco 
        $i = 0;//cantidad de integrantes
        $v = 0;//cantidad de verdes
        foreach ($listartabla as $valor)
        {
        $i++;    
        $cont= 0;
        ++$cont;
        ++$a;
        $b = $a % 2;
        
         
       
        
        if($valor->estadointe3 <> '1')
        {
          $btnrealizado = 'class="btn btn-danger btn-sm"'  ;
          $btncompleto = 'Elegir cualidades';
        }
        else 
        {
            $btnrealizado = 'class="btn btn-success btn-sm"';
            $btncompleto = 'Cualidades seleccionadas';
            $v++;
        }
        
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
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->edad.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                //.'<td><button type="button" id="edicion" class="btn btn-success btn-sm">Editar</button></td>
                   .'<td><button type="button" id="realizar'.$valor->idintegrante.'" onclick="realizarintegrante('.$valor->folio.','.$valor->idintegrante.')" '.$btnrealizado.'>'.$btncompleto.'</button></td>
                     
                   
                        </tr>';
                       
        
        }
        
        if ($i == $v){
           $estadofin = 1; 
        }else{
            $estadofin = 0;
        }
       
        
//        $resultado = $this->m_l2e1diligenciarintegrante->fm_estadofin($folio);
//            $estadofin = array ('eestadofin' => '');
//           foreach ($resultado as $fila)
//            {
//            $estadofin = array('eestadofin' => $fila->pfinform); 
//        }
//        
        
        
            
        //fin traer una lista de valores
        
        
     
       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_l2e1diligenciarintegrante'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/linea2estacion1/' . $page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head3' => HEAD3, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA, 'datos'=> $datos,  'folio' => $folio, 'foexiste' =>$foexiste, 'tdatinte' => $tdatinte,'estadofin' => $estadofin,'arrayrespuestas' => $carrayrespuestas));
        //FIN LEVANTA LA VISTA
         
        
    }
    
    //funcion para insertar
    public function fc_insertar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $ctdocumento = $this->input->get('vtdocumento');
        $cndocumento = $this->input->get('vndocumento');
        $cpnombre = $this->input->get('vpnombre');
        $csnombre = $this->input->get('vsnombre');
        $cpapellido = $this->input->get('vpapellido');
        $csapellido = $this->input->get('vsapellido');
        $cfnacimiento = $this->input->get('vfnacimiento');
        $csexo = $this->input->get('vsexo');
        $cedad = $this->input->get('vedad');
        $ctelefono = $this->input->get('vtelefono');
        $ccelular = $this->input->get('vcelular');
        $ccorreo = $this->input->get('vcorreo');
        $ctwitter = $this->input->get('vtwitter');
        $cfacebook = $this->input->get('vfacebook');
        $cinstagram = $this->input->get('vinstagram');
        $cgoogle = $this->input->get('vgoogle');
        
        
        $this->m_l2e1diligenciarintegrante->fm_insertar($cfolio,$cidintegrante,$ctdocumento,$cndocumento,$cpnombre,$csnombre,$cpapellido,$csapellido,$cfnacimiento,$csexo,$cedad,$ctelefono,$ccelular,$ccorreo,$ctwitter,$cfacebook,$cinstagram,$cgoogle);
        //echo json_encode(array('result' => 'guardado'));
        
    }
    //fin funcion para insertar
    
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $ctdocumento = $this->input->get('vtdocumento');
        $cndocumento = $this->input->get('vndocumento');
        $cpnombre = $this->input->get('vpnombre');
        $csnombre = $this->input->get('vsnombre');
        $cpapellido = $this->input->get('vpapellido');
        $csapellido = $this->input->get('vsapellido');
        $cfnacimiento = $this->input->get('vfnacimiento');
        $csexo = $this->input->get('vsexo');
        $cedad = $this->input->get('vedad');
        $ctelefono = $this->input->get('vtelefono');
        $ccelular = $this->input->get('vcelular');
        $ccorreo = $this->input->get('vcorreo');
        $ctwitter = $this->input->get('vtwitter');
        $cfacebook = $this->input->get('vfacebook');
        $cinstagram = $this->input->get('vinstagram');
        $cgoogle = $this->input->get('vgoogle');
        $this->m_l2e1diligenciarintegrante->fm_actualizar($cfolio,$cidintegrante,$ctdocumento,$cndocumento,$cpnombre,$csnombre,$cpapellido,$csapellido,$cfnacimiento,$csexo,$cedad,$ctelefono,$ccelular,$ccorreo,$ctwitter,$cfacebook,$cinstagram,$cgoogle);
        //echo json_encode(array('result' => 'guardado'));
        
    }
    //fin funcion para actualizar
    

    //función para cerrar cuestionario de cada vivienda completando el paso 06 de la estación 1 línea 1
    public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_l2e1diligenciarintegrante->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    
    
    public function fc_llenarcapitulosintegrantel2e1() {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $this->m_l2e1diligenciarintegrante->fm_llenarcapitulosintegrantel2e1($cfolio, $cidintegrante);
        //echo json_encode(array('result' => 'guardado'));
     }

    
    
    }
    
    
    
    
    

