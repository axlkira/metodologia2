<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/////////////// NUEVO LOGIN ///////////////////////////
class C_actualizar extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('/actualizar/m_actualizar');
    }

     //funcion encargada de llamar a la vista de la pagina 
    public function fc_actualizar($page = 'v_actualizar') {

        if (!file_exists('application/views/pages/actualizar/'. $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        //INICIO TRAER DATOS DEL TITULAR
        $doccogestor = $this->input->get('doccogestor');
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
        $datosintegrante = $this->m_actualizar->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
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
        $folioexiste = $this->m_actualizar->fm_folioexiste($folio);//lo mandasmos a la funcion del modelo para verificar
        
        //ACA USTEDES SI TOCAN - COLOCAN EL NOMBRE DE LAS VARIABLES idresc9mp1 - idresc9mp4a - idresc9mp4b - idresc9mp4c
           $foexiste= array('efolio' => '', 'eidintegrante' =>'', 'erephogar' =>'', 'edoccogestor' =>'', 'eestadof' =>'', 'emotivo' => '', 'eestadomotivo' => '', 'eestrato' => '', 'eestadoestrato' => '', 'ecomuna' => '', 'ebarrio' => '', 'eestadobarrio' => '', 'edireccion' => '',
                            'etelefono' => '', 'ecelular' => '','etelfcont' => '','ecelcont' => ''); 
        
        foreach ($folioexiste as $fila)
        {
        //USTEDES SI TOCAN - LO VERDE LO COLCAN COMO ESTA EN LA TABLA DE LA BD
        $foexiste = array('efolio' => $fila->folio, 'eidintegrante' => $fila->idintegrantetitular, 'erephogar' => $fila->erephogar, 'edoccogestor' => $fila->doccogestor, 'eestadof' => $fila->estadofolio, 'emotivo' => $fila->motivo,'eestadomotivo' => $fila->estadomotivo,  'eestrato' => $fila->estrato, 'eestadoestrato' => $fila->eestadoestrato, 'ecomuna' => $fila->comuna,
                          'ebarrio' => $fila->barrio,'eestadobarrio' => $fila->estadobarrio, 'edireccion' => $fila->direccion, 'etelefono' => $fila->telefono, 'ecelular' => $fila->celular, 'etelfcont' => $fila->telfcont,
                          'ecelcont' => $fila->celcont); //se guarda el resultado del ption value en la variable datos
 
        }
        //fin validar si el folio existe
        
        //traer una lista de valores
        $listasino = $this->m_actualizar->fm_listarrepresentante($folio);
        $representante = '';
        foreach ($listasino as $estado)
        {
        $representante .= '<option value="'.$estado->idintegrante.'">'.$estado->nombrecompleto.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
        //traer una lista de valores
        $listasino = $this->m_actualizar->fm_listarmotivo();
        $motivo = '';
        foreach ($listasino as $estado)
        {
        $motivo .= '<option value="'.$estado->id.'">'.$estado->motivo.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
        //traer una lista de valores
        $listasino = $this->m_actualizar->fm_listarestrato();
        $estratos = '';
        foreach ($listasino as $estado)
        {
        $estratos .= '<option value="'.$estado->idestrato.'">'.$estado->estadoestrato.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
        //traer una lista de valores
        $listasino = $this->m_actualizar->fm_listarrelcont();
        $relcont = '';
        foreach ($listasino as $estado)
        {
        $relcont .= '<option value="'.$estado->id.'">'.$estado->descripcion.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
         //traer una lista de valores
        $listacomunas = $this->m_actualizar->fm_listarcomunas();
        $comunas = '';
        foreach ($listacomunas as $estado)
        {
        $comunas .= '<option value="'.$estado->comuna.'">'.$estado->comuna.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
        //traer una lista de valores

        $barrios = '';
          
     
       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_actualizar'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/actualizar/'.$page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head44' => HEAD44, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA, 'botonerac' => BOTONERAC,'motivo' => $motivo, 'estratos' => $estratos , 'representante' => $representante, 'relcont' => $relcont,'comunas' => $comunas,'barrios' => $barrios, 'folio' => $folio, 'doccogestor' => $doccogestor, 'foexiste' =>$foexiste, 'tdatinte' => $tdatinte));
        //FIN LEVANTA LA VISTA
     }
     
    //traer barrios
    public function fc_traerbarrios()
    {
        //traer una lista de valores
        $cidcomuna = $this->input->get('vidcomuna');
        $listasino = $this->m_actualizar->fm_listarbarrios($cidcomuna);
        $barrios = '';
        foreach ($listasino as $estado)
        {
        $barrios .= '<option value="'.$estado->codigo.'">'.$estado->barriovereda.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        
        echo ($barrios);
        //fin traer una lista de valores        
    }
    
    
     //funcion para actualizar
    public function fc_actualizarh()
    {
        $cfolio = $this->input->get('vfolio');
        $crephogar = $this->input->get('vrephogar');
        $cmotivo= $this->input->get('vmotivo');
        $cestrato = $this->input->get('vestrato');
        $ccomuna = $this->input->get('vcomuna');
        $cbarrio = $this->input->get('vbarrio');
        $cdireccion = $this->input->get('vdireccion');
        $ctelefono = $this->input->get('vtelefono');
        $ccelular = $this->input->get('vcelular');
        $ctelfcont = $this->input->get('vtelfcont');
        $ccelcont = $this->input->get('vcelcont');
        $this->m_actualizar->fm_actualizarh($cfolio,$crephogar,$cmotivo,$cestrato,$ccomuna,$cbarrio,$cdireccion,$ctelefono,$ccelular,$ctelfcont,$ccelcont);
        //echo json_encode(array('result' => 'guardado'));
        
    }
    //fin funcion para actualizar
    
    
   
}
