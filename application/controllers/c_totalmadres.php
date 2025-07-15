<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_totalmadres extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_totalmadres');//carga el controlador modelo
        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }  
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_totalmadres($page = 'v_totalmadres') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        //INICIO TRAER DATOS DEL TITULAR
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
       
       
        $datosintegrante = $this->m_totalmadres->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
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
        
        $listagestantesr = $this->m_totalmadres->fm_listagestantes();//lo mandasmos a la funcion del modelo para verificar
      
      //  $listagestantes = '<option value="">Seleccione una opción</option>';
      $listagestantes = '';
        if (!is_null($listagestantesr)) {
            foreach ($listagestantesr as $listamadres) {

                $listagestantes .= '<option value="'.$listamadres->id.'">'.$listamadres->nombre.'</option>';
            }
        }
        //FIN TRAER LISTA MADRES GESTANTES     
        

        //validar si el folio existe
        $idinteexiste = $this->m_totalmadres->fm_foloexiste($idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
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
        $listartabla = $this->m_totalmadres->fm_listartabla($folio);
        
        $ahora = date("Y-m-d");
        $datos = '';
        $a = 0;//para saber el numero de l registro
        $b = 0;//el resultado del modulo para saber si es verde o blanco 
        $CantidadHijos ='';       
        $fechaNacimiento ='';
        //$BotonSi = '';
        $selectmadres ='';
        $vector = array();
        foreach ($listartabla as $valor)
        {
        $cont= 0;
        ++$cont;
        ++$a;
        $b = $a % 2;

        array_push($vector,$valor->idintegrante);
        //para colocar el color de la fila
        if($b === 1)
        {
            $colorfila = 'class="success text-uppercase"';
        }
        else
        {
            $colorfila = 'class="text-uppercase"';
        }    
/*        
        if($valor->idintegrantema == $valor->idintegrante)
        {
            $BotonSi = '<center><button type="button" disabled id="Si'.$valor->idintegrante.'" onclick="MadreSi('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-success btn-sm">Si</button></center>';
        }
        else
        {
            $BotonSi = '<center><button type="button" id="Si'.$valor->idintegrante.'" onclick="MadreSi('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-success btn-sm">Si</button></center>';
        }    
*/
        if($valor->madre == '' || is_null($valor->madre))
        {
            $selectmadres = '<option value="0">Seleccione una opción</option>'.$listagestantes;
        }
        else
        {
            $selectmadres = '<option value="">'.$valor->madre.'</option>'.$listagestantes;
        } 


        if($valor->madre == '' || is_null($valor->madre))
        {
            $valuecontrol = '';
        }
        else
        {
            $valuecontrol = '1';
        } 


        $CantidadHijos ='<div id="c1p11div" name="c1p11div" >                                                                                                                               
        <input type="text" class="form-control col-md-1 input-sm" id="cantidadHijos'.$valor->idintegrante.'" disabled onchange="activarGuardar('.$valor->idintegrante.')" required onKeyPress="return soloNumerosE(event)" maxlength="2" value="'.$valor->cantidadehijos.'">
       </div>';

       $fechaNacimiento ='<div id="c1p11div" name="c1p11div" >   
        <input type="date" class="form-control col-md-1 input-sm" min="2000-01-01" max="'.$ahora.'" id="fechaNacimiento'.$valor->idintegrante.'" disabled onchange="activarGuardar('.$valor->idintegrante.')" value="'.$valor->fechanacimientoprimerhijo.'">
       </div>';
        
        $datos .=  '<tr '.$colorfila.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->documento.'</td>'
                    .'<td>'.$valor->nombre1.' '.$valor->nombre2.' '.$valor->apellido1.' '.$valor->apellido2.'</td>'
                    .'<td><select class="form-control col-md-4" onchange="MadreSi('.$valor->folio.','.$valor->idintegrante.')" id="madres'.$valor->idintegrante.'">'.$selectmadres.'</select></td>'
                   // .'<td><select class="form-control col-md-3" onchange="MadreSi('.$valor->folio.','.$valor->idintegrante.')" id="madres'.$valor->idintegrante.'">'.$listagestantes.'</select></td>'
                  //  .'<td>'.$BotonSi.'</td>'
                    .'<td>'.$CantidadHijos.'</td>'
                    .'<td>'.$fechaNacimiento.'</td>'
                    .'<td><center><button type="button" disabled id="GuardarInfo'.$valor->idintegrante.'" onclick="GuardarInfo('.$valor->folio.','.$valor->idintegrante.','.$valor->documento.')" class="btn btn-success btn-sm">Guardar</button></center></td>'
                     //.'<td><center><button type="button" id="CancelarInfo'.$valor->idintegrante.'" onclick="CancelarInfo('.$valor->folio.','.$valor->idintegrante.')" class="btn btn-danger btn-sm">Cancelar</button></center></td>
                    .'<td style="display: none"><input type="text" class="form-control input-sm" id="input'.$valor->idintegrante.'" name="input'.$valor->idintegrante.'" value="'.$valuecontrol.'"></td>
                   
                     
                   
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
         .'<td colspan="8" align="center" bgcolor="8E1C0A"><font color="#8E1C0A"><strong>No hay mujeres adolescentes</strong></font></td>
          </tr>';

         }
        
                 
        //fin traer una lista de valores
        
        
        $ahora = date("Y-m-d");

        
     
       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_totalmadres'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('vector'=>$vector,'titulo' => $titulo, 'ahora' => $ahora, 'foot' => FOOTS, 'head' => HEAD1, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA, 'datos'=> $datos, 'folio' => $folio, 'foexiste' =>$foexiste, 'tdatinte' => $tdatinte));
        //FIN LEVANTA LA VISTA
         
        
    }
    
    
    public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_totalmadres->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    

    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');
        $cmadre= $this->input->get('vmadre');
        $ccantidadHijos= $this->input->get('vcantidadHijos');
        $cfechaNacimiento= $this->input->get('vfechaNacimiento');
        $this->m_totalmadres->fm_actualizarpregunta($cfolio,$cidintegrante,$cmadre,$ccantidadHijos,$cfechaNacimiento);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar

    //funcion para elimina
    public function fc_CancelarInfo()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante= $this->input->get('vidintegrante');
        $this->m_totalmadres->fm_CancelarInfo($cfolio,$cidintegrante);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para eliminar
    
    }
   
 
    
    
    

