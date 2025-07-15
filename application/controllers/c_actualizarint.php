<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_actualizarint extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_totalintegrantes');//carga el controlador modelo
        $this->load->model('/actualizar/m_actualizarint');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_actualizarint($page = 'v_actualizarint') {

        if (!file_exists('application/views/pages/actualizar/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        //INICIO TRAER DATOS DEL TITULAR
        $doccogestor = $this->input->get('doccogestor');
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
       
        $datosintegrante = $this->m_actualizarint->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
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
        $idinteexiste = $this->m_actualizarint->fm_foloexiste($idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
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
        
        
        //traer una lista de valores
        $listartabla = $this->m_actualizarint->fm_listartabla($folio);
        
        
        $datos = '';
        
       
        foreach ($listartabla as $valor)
        {
            
        $datos .=  '<tr>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.'</td>'
                    .'<td>'.$valor->nombre2.'</td>'
                    .'<td>'.$valor->apellido1.'</td>'
                    .'<td>'.$valor->apellido2.'</td>'
                //.'<td><button type="button" id="edicion" class="btn btn-success btn-sm">Editar</button></td>
                   .'<td><button type="button" id="edicion'.$valor->idintegrante.'" onclick="edicioninte('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-success btn-sm">Editar</button></td>
                     
                   
                        </tr>';
                       
        
        }
        
       
        
        
        
        
      
        
       
            
        //fin traer una lista de valores
        
        
     
       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_actualizarint'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/actualizar/' . $page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head' => HEAD, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA, 'datos'=> $datos,  'folio' => $folio,'doccogestor' => $doccogestor, 'foexiste' =>$foexiste, 'tdatinte' => $tdatinte));
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
        
        
        $this->m_actualizarint->fm_insertar($cfolio,$cidintegrante,$ctdocumento,$cndocumento,$cpnombre,$csnombre,$cpapellido,$csapellido,$cfnacimiento,$csexo,$cedad,$ctelefono,$ccelular,$ccorreo,$ctwitter,$cfacebook,$cinstagram,$cgoogle);
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
        $this->m_actualizarint->fm_actualizar($cfolio,$cidintegrante,$ctdocumento,$cndocumento,$cpnombre,$csnombre,$cpapellido,$csapellido,$cfnacimiento,$csexo,$cedad,$ctelefono,$ccelular,$ccorreo,$ctwitter,$cfacebook,$cinstagram,$cgoogle);
        //echo json_encode(array('result' => 'guardado'));
        
    }
    //fin funcion para actualizar
    

    
    
    
    }
    
    
    
    
    

