<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_totalmadreshijos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_totalmadreshijos');//carga el controlador modelo
        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }  
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_totalmadreshijos($page = 'v_totalmadreshijos') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        //INICIO TRAER DATOS DEL TITULAR
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
       
        $datosintegrante = $this->m_totalmadreshijos->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
        $tdatinte= array('tfolio' => '', 
                          'tidintegrante' => '',
                          'tdoc' => '',
                          'tnombre' => '',
                          'tedad' => '');
        
        foreach ($datosintegrante as $filainte)
        {
        $tdatinte = array('tfolio' => $filainte->folio,
                          'tidintegrante' => $filainte->idintegrante,
                          'tdoc' => $filainte->documento, 
                          'tnombre' => $filainte->nombre1.' '.$filainte->nombre2.' '.$filainte->apellido1.' '.$filainte->apellido2,
                          'tedad' => $filainte->edad); //se guarda el resultado del ption value en la variable datos
        }
        //FIN TRAER DATOS DEL TITULAR       
        



        //validar si el folio existe
        $idinteexiste = $this->m_totalmadreshijos->fm_foloexiste($idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
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
        $listartabla = $this->m_totalmadreshijos->fm_listartabla($folio,$idintegrante);
        
        
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
                    .'<td style="display:none">'.$valor->folio.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                   
                   .'<td  width="150"><center><button type="button" id="hijosi'.$valor->folio.''.$valor->idintegrante.'" onclick="integranteshijos('.$valor->folio.','.$valor->idintegrante.','.$idintegrante.')" class="btn btn-success btn-sm">Si</button></center></td>'
                   .'<td  width="150"><center><button type="button" id="hijono'.$valor->folio.''.$valor->idintegrante.'" onclick="integranteshijosno('.$valor->folio.','.$valor->idintegrante.','.$idintegrante.')" class="btn btn-danger btn-sm">No</button></center></td>
                     
                   
                        </tr>';
                       
        
        }
        if($datos == '')
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
         .'<td colspan="8" align="center" bgcolor="8E1C0A"><font color="#8E1C0A"><strong>No hay mujeres adolecentes</strong></font></td>
          </tr>';

         }
        
                 
        //fin traer una lista de valores
        
        
     
       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_totalmadreshijos'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head3' => HEAD3, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA, 'datos'=> $datos, 'folio' => $folio, 'foexiste' =>$foexiste, 'tdatinte' => $tdatinte));
        //FIN LEVANTA LA VISTA
         
        
    }
    
    
    public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_totalmadreshijos->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    
    }
    
    
    
    
    

