<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_aintegrantes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/actualizar/m_aintegrantes');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_aintegrantes($page = 'v_aintegrantes') {

        if (!file_exists('application/views/pages/actualizar/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        //INICIO TRAER DATOS DEL TITULAR
        $doccogestor = $this->input->get('doccogestor');
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
        $datosintegrante = $this->m_aintegrantes->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
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
        $idinteexiste = $this->m_aintegrantes->fm_foloexiste($idintegrante);//lo mandasmos a la funcion del modelo para verificar
        //ACA USTEDES SI TOCAN - COLOCAN EL NOMBRE DE LAS VARIABLES
           $foexiste= array('efolio' => '', 'eidint' =>'', 'etipodocumento' => '',
                          'edocumento' => '', 'enombre1' => '','enombre2' => '','eapellido1' => '','eapellido2' => '','efnacimiento'=>'', 'esexo' => '','eedad' => '','etelefono' => '', 
                          'ecelular' => '', 'ecorreo' => '', 'etwitter' => '', 'efacebook' => '','einstagram' => '','egoogle' => '','eestadointegrante' => '','eintegranteactivomotivo' => '','eintegranteactivoobs' => '','enacionalidad' => ''
                          ,'eIdentidad_genero' => '','eOrientacion_sexual' => '','eetnia' => ''
                          ,'eidetnia' => '','eidigenero' => '','eidosexual' => ''); 
        
        foreach ($idinteexiste as $fila)
        {
        //USTEDES SI TOCAN - LO VERDE LO COLCAN COMO ESTA EN LA TABLA DE LA BD
        $foexiste = array('efolio' => $fila->folio,'eidint' => $fila->idintegrante, 'etipodocumento' => $fila->tipodocumento,
            'edocumento' => $fila->documento, 'enombre1' => $fila->nombre1,'enombre2' => $fila->nombre2,'eapellido1' => $fila->apellido1, 'eapellido2' => $fila->apellido2,'efnacimiento' => $fila->fechanacimiento,'esexo' => $fila->sexo,
            'eedad' => $fila->edad,'etelefono' => $fila->telefono,'ecelular' => $fila->celular,'ecorreo' => $fila->correo,'etwitter' => $fila->twitter,'efacebook' => $fila->facebook,
            'einstagram' => $fila->instagram,'egoogle' => $fila->google,'eestadointegrante' => $fila->estadointegrante,'eintegranteactivomotivo' => $fila->integranteactivomotivo,'eintegranteactivoobs' => $fila->integranteactivoobs,'enacionalidad' => $fila->nacionalidad
            ,'eIdentidad_genero' => $fila->Identidad_genero,'eOrientacion_sexual' => $fila->Orientacion_sexual,'eetnia' => $fila->etnia
            ,'eidetnia' => $fila->idetnia,'eidigenero' => $fila->idigenero,'eidosexual' => $fila->idosexual); //se guarda el resultado del ption value en la variable datos
 
        }
        //fin validar si el folio existe
        
        if($fila->estadointegrante == '5')
        {
            $disabled = 'disabled=""';
        }
        else
        {
            $disabled = '';
        }
        
        //Traer el id del titular
        $titular = $this->m_aintegrantes->fm_buscartitular($folio);//lo mandasmos a la funcion del modelo para verificar
        
        $dtitular= array('tidintegrantetitular'=> '');
        
        foreach ($titular as $filainte)
        {
        $dtitular = array('tidintegrantetitular' => $filainte->idintegrantetitular); 
        }
        //Fin traer el id del titular
        
        //traer una lista de valores
        $listatipodocumen = $this->m_aintegrantes->fm_listartipodocumento();
       
        $datos = '';
       
        foreach ($listatipodocumen as $documento)
        {
            
        $datos .= '<option value="'.$documento->tipodocumento.'">'.$documento->tipodocumento.'</option>'; //se guarda el resultado del ption value en la variable datos
            
        }
      
         $listasexo = $this->m_aintegrantes->fm_listarsexo();
        
        
        $datos2 = '';
        
       
        foreach ($listasexo as $sexo)
        {
            
        $datos2 .= '<option value="'.$sexo->sexo.'">'.$sexo->sexo.'</option>'; //se guarda el resultado del ption value en la variable datos
            
        }
        //fin traer una lista de valores

        $listarpaises = $this->m_aintegrantes->fm_listarpaises();
        
        $paises= '';
        
        foreach ($listarpaises as $valpaises)
        {
            //se guarda el resultado del ption value en la variable datos
            $paises .='<option value="'.$valpaises->nombrepais.'">'.$valpaises->nombrepais.'</option>'; 
        }

///////////// inicio nuevas variables ////////
        $listaretnias = $this->m_aintegrantes->fm_listaretnia();
        
        $etnias= '';
        
        foreach ($listaretnias as $valetnias)
        {
            //se guarda el resultado del ption value en la variable datos
            $etnias .='<option value="'.$valetnias->id.'">'.$valetnias->etnia.'</option>'; 
        }
        $listarOsexual = $this->m_aintegrantes->fm_listarOsexual();
        
        $Osexual= '';
        
        foreach ($listarOsexual as $valOsexual)
        {
            //se guarda el resultado del ption value en la variable datos
            $Osexual .='<option value="'.$valOsexual->id.'">'.$valOsexual->Orientacion_sexual.'</option>'; 
        }
        $listarIgenero = $this->m_aintegrantes->fm_listarIgenero();
        
        $Igenero= '';
        
        foreach ($listarIgenero as $valIgenero)
        {
            //se guarda el resultado del ption value en la variable datos
            $Igenero .='<option value="'.$valIgenero->id.'">'.$valIgenero->Identidad_genero.'</option>'; 
        }
///////////// inicio nuevas variables ////////
 $listarSino = $this->m_aintegrantes->fm_listarSino();
                $SiNo= '';
                foreach ($listarSino as $valSiNo)
                {
                $SiNo .='<option value="'.$valSiNo->idsino.'">'.$valSiNo->estadosino.'</option>'; 
                }

                $listarTipoE = $this->m_aintegrantes->fm_listarTipoE();
                $TipoE= '';
                foreach ($listarTipoE as $valTipoE)
                {
                $TipoE .='<option value="'.$valTipoE->id.'">'.$valTipoE->nombre.'</option>'; 
                }

                $listarBarreraA = $this->m_aintegrantes->fm_listarBarreraA();
                $BarreraA= '';
                foreach ($listarBarreraA as $valBarreraA)
                {
                $BarreraA .='<option value="'.$valBarreraA->id.'">'.$valBarreraA->nombre.'</option>'; 
                }

                $idinteexistepp = $this->m_aintegrantes->fm_integrantepp($idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
                $foexistepp = array('eidintegrante' => ''
                , 'eid_ea' =>'', 'eempleado_actualmente' =>''
                , 'eid_ce' => '', 'ecambiar_empleo' => '', 'etiempo_empleado' => ''
                , 'eid_te' => '', 'etipo_empleo' => '','etiempo_desempleado' => ''
                , 'eid_ba' => '','ebarrera_acceso' => ''
                , 'eid_aest' => '', 'eactualmente_estudiando' => ''
                , 'eid_ne'=>'', 'enivel_educativo'=>''); 
        
                foreach ($idinteexistepp as $filapp)
                {
                $foexistepp = array('eidintegrante' => $filapp->idintegrante
                , 'eid_ea' => $filapp->id_ea, 'eempleado_actualmente' => $filapp->empleado_actualmente
                , 'eid_ce' => $filapp->id_ce, 'ecambiar_empleo' => $filapp->cambiar_empleo,'etiempo_empleado' => $filapp->tiempo_empleado
                , 'eid_te' => $filapp->id_te, 'etipo_empleo' => $filapp->tipo_empleo,'etiempo_desempleado' => $filapp->tiempo_desempleado
                , 'eid_ba' => $filapp->id_ba, 'ebarrera_acceso' => $filapp->barrera_acceso
                , 'eid_aest' => $filapp->id_aest, 'eactualmente_estudiando' => $filapp->actualmente_estudiando
                , 'eid_ne' => $filapp->id_ne, 'enivel_educativo' => $filapp->nivel_educativo); //se guarda el resultado del ption value en la variable datos
        }
        //fin validar si el folio existe


       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_aintegrantes'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/actualizar/' . $page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head44' => HEAD44, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA, 'datos'=> $datos, 'datos2' => $datos2, 'folio' => $folio,'idintegrante'=>$idintegrante, 'foexiste' =>$foexiste, 'tdatinte' => $tdatinte, 'dtitular'=> $dtitular,'disabled'=>$disabled, 'doccogestor'=> $doccogestor,'paises' => $paises
        ,'etnias' => $etnias,'Osexual' => $Osexual,'Igenero' => $Igenero
        ,'SiNo' => $SiNo
        ,'TipoE' => $TipoE
        ,'BarreraA' => $BarreraA
        ,'foexistepp' =>$foexistepp
    ));
        //FIN LEVANTA LA VISTA
        
    }
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
        $cvalorestadoint = $this->input->get('vvalorestadoint');
        $cvalormotivoint = $this->input->get('vvalormotivoint');
        $cestadointob = $this->input->get('vestadointob');
        $cdoccogestor = $this->input->get('vdoccogestor');
        $cnacionalidadv = $this->input->get('vnacionalidadv');

        $cetnias = $this->input->get('vetnias');
        $cOsexual = $this->input->get('vOsexual');
        $cIgenero = $this->input->get('vIgenero');

        $cempleoact = $this->input->get('vempleoact');
        $cCambiaremp = $this->input->get('vCambiaremp');
        $cTiempoEmpleado = $this->input->get('vTiempoEmpleado');
        $cTipoE = $this->input->get('vTipoE');
        $cTiempoDesEmpleado = $this->input->get('vTiempoDesEmpleado');
        $cBarreraA = $this->input->get('vBarreraA');
        $cActualmenteEst = $this->input->get('vActualmenteEst');
        $cvalorppc1p3n2 = $this->input->get('vvalorppc1p3n2');

        $this->m_aintegrantes->fm_actualizar($cfolio,$cidintegrante,$ctdocumento,$cndocumento,$cpnombre,$csnombre,$cpapellido,$csapellido,$cfnacimiento,$csexo,$cedad,$ctelefono,$ccelular,$ccorreo,$ctwitter,$cfacebook,$cinstagram,$cgoogle,$cvalorestadoint,$cvalormotivoint,$cestadointob,$cdoccogestor,$cnacionalidadv
        ,$cetnias,$cOsexual,$cIgenero
    
        ,$cempleoact
        ,$cCambiaremp
        ,$cTiempoEmpleado
        ,$cTipoE
        ,$cTiempoDesEmpleado
        ,$cBarreraA
        ,$cActualmenteEst
        ,$cvalorppc1p3n2

      );
        //echo json_encode(array('result' => 'guardado'));
        
    }
    //fin funcion para actualizar
    
    public function fc_eliminar()
    {
       $cfolio = $this->input->get('vfolio');
       $cidintegrante = $this->input->get('vidintegrante');
       
       $this->m_aintegrantes->fm_eliminar($cfolio,$cidintegrante);
       //echo json_encode(array('result' => 'guardado'));
       
    }
      ////// inicio nuevas variables /////////
    public function fc_listarnacionalidad()
    {
          //traer una lista de valores
          $cdocumento = $this->input->get('vdocumento');
          $listasino = $this->m_aintegrantes->fm_listarnacionalidad($cdocumento);
          $barrios = '';
          $barrios = '<option value="">Seleccione una opción</option>';
          foreach ($listasino as $estado)
          {
          $barrios .= '<option value="'.$estado->nombrepais.'">'.$estado->nombrepais.'</option>'; //se guarda el resultado del ption value en la variable datos
          }
          
          echo ($barrios);
          //fin traer una lista de valores        
    }
      ////// fin nuevas variables /////////
    
    }
    
    
    
    
    

