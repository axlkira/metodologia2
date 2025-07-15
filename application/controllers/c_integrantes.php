<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_integrantes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_integrantes');//carga el controlador modelo
        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }  
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_integrantes($page = 'v_integrantes') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        //INICIO TRAER DATOS DEL TITULAR
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
        $banderainsertar = $this->input->get('bandera');
        $variable = $this->input->get('variable');
        $datosintegrante = $this->m_integrantes->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
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
        $idinteexiste = $this->m_integrantes->fm_foloexiste($idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
        //ACA USTEDES SI TOCAN - COLOCAN EL NOMBRE DE LAS VARIABLES
           $foexiste= array('efolio' => '', 'eidint' =>'', 'etipodocumento' => '',
                          'edocumento' => '', 'enombre1' => '','enombre2' => '','eapellido1' => '','eapellido2' => '','efnacimiento'=>'', 'esexo' => '','eedad' => '','etelefono' => '', 
                          'ecelular' => '', 'ecorreo' => '', 'etwitter' => '', 'efacebook' => '','einstagram' => '','egoogle' => '','enacionalidad' => ''
                          ,'eIdentidad_genero' => '','eOrientacion_sexual' => '','eetnia' => ''
                          ,'eidetnia' => '','eidigenero' => '','eidosexual' => ''); 
        
        foreach ($idinteexiste as $fila)
        {
        //USTEDES SI TOCAN - LO VERDE LO COLCAN COMO ESTA EN LA TABLA DE LA BD
        $foexiste = array('efolio' => $fila->folio,'eidint' => $fila->idintegrante, 'etipodocumento' => $fila->tipodocumento,
            'edocumento' => $fila->documento, 'enombre1' => $fila->nombre1,'enombre2' => $fila->nombre2,'eapellido1' => $fila->apellido1, 'eapellido2' => $fila->apellido2,'efnacimiento' => $fila->fechanacimiento,'esexo' => $fila->sexo,
            'eedad' => $fila->edad,'etelefono' => $fila->telefono,'ecelular' => $fila->celular,'ecorreo' => $fila->correo,'etwitter' => $fila->twitter,'efacebook' => $fila->facebook,
            'einstagram' => $fila->instagram,'egoogle' => $fila->google,'enacionalidad' => $fila->nacionalidad
            ,'eIdentidad_genero' => $fila->Identidad_genero,'eOrientacion_sexual' => $fila->Orientacion_sexual,'eetnia' => $fila->etnia
            ,'eidetnia' => $fila->idetnia,'eidigenero' => $fila->idigenero,'eidosexual' => $fila->idosexual); //se guarda el resultado del ption value en la variable datos
 
        }
        //fin validar si el folio existe
        
        //Traer el id del titular
        $titular = $this->m_integrantes->fm_buscartitular($folio);//lo mandasmos a la funcion del modelo para verificar
        
        $dtitular= array('tidintegrantetitular'=> '');
        
        foreach ($titular as $filainte)
        {
        $dtitular = array('tidintegrantetitular' => $filainte->idintegrantetitular); 
        }
        //Fin traer el id del titular
        
        //traer una lista de valores
        $listatipodocumen = $this->m_integrantes->fm_listartipodocumento();
       
        $datos = '';
       
        foreach ($listatipodocumen as $documento)
        {
            
        $datos .= '<option value="'.$documento->tipodocumento.'">'.$documento->tipodocumento.'</option>'; //se guarda el resultado del ption value en la variable datos
            
        }
      
        $listasexo = $this->m_integrantes->fm_listarsexo();
        
        
        $datos2 = '';
        
       
        foreach ($listasexo as $sexo)
        {
            
        $datos2 .= '<option value="'.$sexo->sexo.'">'.$sexo->sexo.'</option>'; //se guarda el resultado del ption value en la variable datos
            
        }
           
        //fin traer una lista de valores
 
        $listarpaises = $this->m_integrantes->fm_listarpaises();
        
        $paises= '';
        
        foreach ($listarpaises as $valpaises)
        {
            //se guarda el resultado del ption value en la variable datos
            $paises .='<option value="'.$valpaises->nombrepais.'">'.$valpaises->nombrepais.'</option>'; 
        }
        

        //INICIO TRAER DATOS DE TODAS LAS VALIDACIONES EN EL INGRESO DE INTEGRANTES
       
        $datosintegrantemenores = $this->m_integrantes->fm_datosmenores($folio);//lo mandasmos a la funcion del modelo para verificar
        
        $tdatintemenores= array('tclasificacionHogar' => '', 
                          'tHayMenores' => '',
                          'ttotalmenores' => '',
                          'ttotalintegrantes' => '',
                          'ttotalmayores' => '');
        
        foreach ($datosintegrantemenores as $filaintem)
        {
        $tdatintemenores = array('tclasificacionHogar' => $filaintem->clasificacionHogar,
                          'tHayMenores' => $filaintem->HayMenores,
                          'ttotalmenores' => $filaintem->totalmenores,
                          'ttotalintegrantes' => $filaintem->totalintegrantes,
                          'ttotalmayores' => $filaintem->totalmayores); //se guarda el resultado del ption value en la variable datos
        }
        


        ///////////// inicio nuevas variables ////////
        $listaretnias = $this->m_integrantes->fm_listaretnia();
        
        $etnias= '';
        
        foreach ($listaretnias as $valetnias)
        {
            //se guarda el resultado del ption value en la variable datos
            $etnias .='<option value="'.$valetnias->id.'">'.$valetnias->etnia.'</option>'; 
        }
        $listarOsexual = $this->m_integrantes->fm_listarOsexual();
        
        $Osexual= '';
        
        foreach ($listarOsexual as $valOsexual)
        {
            //se guarda el resultado del ption value en la variable datos
            $Osexual .='<option value="'.$valOsexual->id.'">'.$valOsexual->Orientacion_sexual.'</option>'; 
        }
        $listarIgenero = $this->m_integrantes->fm_listarIgenero();
        
        $Igenero= '';
        
        foreach ($listarIgenero as $valIgenero)
        {
            //se guarda el resultado del ption value en la variable datos
            $Igenero .='<option value="'.$valIgenero->id.'">'.$valIgenero->Identidad_genero.'</option>'; 
        }
        ///////////// inicio nuevas variables ////////



       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_integrantes'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head44' => HEAD44, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA, 'datos'=> $datos, 'datos2' => $datos2, 'folio' => $folio,'idintegrante'=>$idintegrante, 'foexiste' =>$foexiste, 'tdatinte' => $tdatinte, 'dtitular'=> $dtitular, 'banderainsertar'=> $banderainsertar,'variable' => $variable,'paises' => $paises, 'tdatintemenores' => $tdatintemenores
        ,'etnias' => $etnias,'Osexual' => $Osexual,'Igenero' => $Igenero));
        //FIN LEVANTA LA VISTA
         
        
    }
    
    //funcion para insertar
    public function fc_insertar()
    {
        $cfolio = $this->input->get('vfolio');
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
        $cnacionalidadv = $this->input->get('vnacionalidadv');

        $cetnias = $this->input->get('vetnias');
        $cOsexual = $this->input->get('vOsexual');
        $cIgenero = $this->input->get('vIgenero');

        
        
        $this->m_integrantes->fm_insertar($cfolio,$ctdocumento,$cndocumento,$cpnombre,$csnombre,$cpapellido,$csapellido,$cfnacimiento,$csexo,$cedad,$ctelefono,$ccelular,$ccorreo,$ctwitter,$cfacebook,$cinstagram,$cgoogle,$cnacionalidadv
        ,$cetnias,$cOsexual,$cIgenero);
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
        $cnacionalidadv = $this->input->get('vnacionalidadv');

        $cetnias = $this->input->get('vetnias');
        $cOsexual = $this->input->get('vOsexual');
        $cIgenero = $this->input->get('vIgenero');

        $this->m_integrantes->fm_actualizar($cfolio,$cidintegrante,$ctdocumento,$cndocumento,$cpnombre,$csnombre,$cpapellido,$csapellido,$cfnacimiento,$csexo,$cedad,$ctelefono,$ccelular,$ccorreo,$ctwitter,$cfacebook,$cinstagram,$cgoogle,$cnacionalidadv
        ,$cetnias,$cOsexual,$cIgenero);
        //echo json_encode(array('result' => 'guardado'));
        
    }
    //fin funcion para actualizar
    
    
    public function fc_actualizarsincalculo()
    {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $ctdocumento = $this->input->get('vtdocumento');
        $cndocumento = $this->input->get('vndocumento');
        $cpnombre = $this->input->get('vpnombre');
        $csnombre = $this->input->get('vsnombre');
        $cpapellido = $this->input->get('vpapellido');
        $csapellido = $this->input->get('vsapellido');        
        $ctelefono = $this->input->get('vtelefono');
        $ccelular = $this->input->get('vcelular');
        $ccorreo = $this->input->get('vcorreo');
        $ctwitter = $this->input->get('vtwitter');
        $cfacebook = $this->input->get('vfacebook');
        $cinstagram = $this->input->get('vinstagram');
        $cgoogle = $this->input->get('vgoogle');
        $cnacionalidadv = $this->input->get('vnacionalidadv');

        $cetnias = $this->input->get('vetnias');
        $cOsexual = $this->input->get('vOsexual');
        $cIgenero = $this->input->get('vIgenero');

        $this->m_integrantes->fm_actualizarsincalculo($cfolio,$cidintegrante,$ctdocumento,$cndocumento,$cpnombre,$csnombre,$cpapellido,$csapellido,$ctelefono,$ccelular,$ccorreo,$ctwitter,$cfacebook,$cinstagram,$cgoogle,$cnacionalidadv
        ,$cetnias,$cOsexual,$cIgenero);
        //echo json_encode(array('result' => 'guardado'));
        
    }
    
    public function fc_eliminar()
   {
       $cfolio = $this->input->get('vfolio');
       $cidintegrante = $this->input->get('vidintegrante');
       
       $this->m_integrantes->fm_eliminar($cfolio,$cidintegrante);
       //echo json_encode(array('result' => 'guardado'));
       
   }

    
   ////// inicio nuevas variables /////////
    public function fc_listarnacionalidad()
    {
        //traer una lista de valores
        $cdocumento = $this->input->get('vdocumento');
        $listasino = $this->m_integrantes->fm_listarnacionalidad($cdocumento);
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
    
    
    
    
    

