<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/////////////// NUEVO LOGIN ///////////////////////////
class C_dimensionesp extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('/privacionesintermedia/m_dimensionesp');
    }

     //funcion encargada de llamar a la vista de la pagina 
    public function fc_dimensionesp($page = 'v_dimensionesp') {

        if (!file_exists('application/views/pages/privacionesintermedia/'. $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        //INICIO TRAER DATOS DEL TITULAR
        $cidestacion = $this->input->get('idestacion');
        $doccogestor = $this->input->get('doccogestor');
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
        $datosintegrante = $this->m_dimensionesp->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
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
        $folioexiste = $this->m_dimensionesp->fm_folioexiste($folio);//lo mandasmos a la funcion del modelo para verificar
        
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
        //inicio matriz graduacion
        $matrizgrados = $this->m_dimensionesp->fm_matrizgraduacion($folio);//lo mandasmos a la funcion del modelo para verificar
               
        $matrizg= array('efolio' => '', 'eidintegrante' =>'', 'eestadointegrante' =>'','enombreintegrante' =>'', 'eedad' =>'', 'esexo' => '','efecharegistroIPM' => '', 'ebajologroeducativo' => '','eanalfabetismo' => '','einasistenciaescolar' => '','erezagoescolar' => '','ebarrerasdeaccesoprimerainfancia' => '','etrabajoinfantil' => '', 'edesempleodelargaduracion' => '','eempleoinformal' => '','esinaseguramientoensalud' => '','esinaccesoaserviciodesalud' => '','eSinaccesoafuentedeaguamejorada' => '','einadecuadaeliminaciondeexcretas' => '','episosinadecuados' => '','eparedesexterioresinadecuada' => '','ehacinamientocritico' => '','eindicetradicionalingreso' => '','etotalIPM' => '','ecasillamatriz' => '');
        foreach ($matrizgrados as $fila)
        {
        $matrizg = array('efolio'=>$fila->folio,'eidintegrante'=>$fila->idintegrante,'eestadointegrante'=>$fila->estadointegrante,'enombreintegrante'=>$fila->nombreintegrante,'eedad'=>$fila->edad,'esexo'=>$fila->sexo,'efecharegistroIPM'=>$fila->fecharegistroIPM,'ebajologroeducativo' => $fila->bajologroeducativo,'eanalfabetismo'=>$fila->analfabetismo,'einasistenciaescolar' => $fila->inasistenciaescolar,'erezagoescolar' => $fila->rezagoescolar,'ebarrerasdeaccesoprimerainfancia' => $fila->barrerasdeaccesoprimerainfancia, 'etrabajoinfantil' => $fila->trabajoinfantil,'edesempleodelargaduracion' => $fila->desempleodelargaduracion, 'eempleoinformal' => $fila->empleoinformal,'esinaseguramientoensalud' => $fila->sinaseguramientoensalud, 'esinaccesoaserviciodesalud' => $fila->sinaccesoaserviciodesalud,'esinaccesoafuentedeaguamejorada' => $fila->Sinaccesoafuentedeaguamejorada, 'einadecuadaeliminaciondeexcretas' => $fila->inadecuadaeliminaciondeexcretas,'episosinadecuados' => $fila->pisosinadecuados, 'eparedesexterioresinadecuada' => $fila->paredesexterioresinadecuada,'ehacinamientocritico' => $fila->hacinamientocritico, 'eindicetradicionalingreso' => $fila->indicetradicionalingreso,'etotalIPM' => $fila->totalIPM,'ecasillamatriz' => $fila->casillamatriz); //se guarda el resultado del ption value en la variable datos
        }
//fin matriz graduacion
        $listarprivacion = $this->m_dimensionesp->fm_listartablaprivaciones();
        
        $privacioningresos = '';      
        $privacioneduca = '';
        $privacionsalud = '';
        $privacionhabi = '';
        $dimension = '';
        
        $colordimension2 = '';
        $colordimensionverde2 = '';
        $colordimensionrojo2 = '';
        $colordimensiongris2 = '';
        $colordimensioncafe2 = '';
        $colordimensionrojo2 = '';
        $colordimensiongris2 = '';
        
        $colordimension3 = '';
        $colordimensionverde3 = '';
        $colordimensionrojo3 = '';
        $colordimensiongris3 = '';
        $colordimensioncafe3 = '';
        $colordimensionrojo3 = '';
        $colordimensiongris3 = '';
        
        $colordimension4 = '';
        $colordimensionverde4 = '';
        $colordimensionrojo4 = '';
        $colordimensiongris4 = '';
        $colordimensioncafe4 = '';
        $colordimensionrojo4 = '';
        $colordimensiongris4 = '';
                
        $colordimension6 = '';
        $colordimensionverde6 = '';
        $colordimensionrojo6 = '';
        $colordimensiongris6 = '';
        $colordimensioncafe6 = '';
        $colordimensionrojo6 = '';
        $colordimensiongris6 = '';
        
        foreach ($listarprivacion as $privacion)
        {  
           $calcularprivacion = $this->m_dimensionesp->fm_calcularprivacion($folio,$privacion->idprivacion); 
                     
           $colorprivacion = '';
          
           foreach ($calcularprivacion as $bolita){
               
                $calculoprivacion = $bolita->privacion1;

               if ($calculoprivacion == 0){ //Rojo
                   
                   $colorprivacion = '#DF0101'; 
                   
               }else{
                   $colorprivacion = '#30E24E';
                   
               }
           }
        switch ($privacion->iddimension) 
                {   
                    case '2'://actual
                     $privacioningresos .= '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-4">
                     <h4 class="panel-title" >
                     <a onclick="iravista('.$folio.','.$privacion->iddimension.','.$privacion->idprivacion.','.$cidestacion.')">'.$privacion->privacion.'</a>
                     </h4>
                     </div>
                     <div class="col-lg-offset-11">
                     <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colorprivacion.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
                      if ($calculoprivacion == 1){
                            $colordimensionverde2++;
                        }
                        if ($calculoprivacion == 0){
                            $colordimensionrojo2++;
                        }
                        if ($colordimensionrojo2 > 0){ //Rojo
                            $colordimension2 = '#DF0101';
                        }
                        else
                        {
                             $colordimension2 = '#30E24E';
                        }      
                    break;
                    case '3'://actual
                     $privacioneduca .= '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-4">
                     <h4 class="panel-title" >
                     <a onclick="iravista('.$folio.','.$privacion->iddimension.','.$privacion->idprivacion.','.$cidestacion.')">'.$privacion->privacion.'</a>
                     </h4>
                     </div>
                     <div class="col-lg-offset-11">
                     <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colorprivacion.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
                        if ($calculoprivacion == 1){
                            $colordimensionverde3++;
                        }
                        if ($calculoprivacion == 0){
                            $colordimensionrojo3++;
                        }
                        if ($colordimensionrojo3 > 0){ //Rojo
                            $colordimension3 = '#DF0101';
                        }
                        else
                        {
                             $colordimension3 = '#30E24E';
                        }   
                    break;       
                    case '4'://por realizar o pendiente
                            $privacionsalud .= '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-4">
                     <h4 class="panel-title" >
                     <a onclick="iravista('.$folio.','.$privacion->iddimension.','.$privacion->idprivacion.','.$cidestacion.')">'.$privacion->privacion.'</a>
                     </h4>
                     </div>
                     <div class="col-lg-offset-11">
                     <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colorprivacion.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
                     if ($calculoprivacion == 1){
                            $colordimensionverde4++;
                        }
                        if ($calculoprivacion == 0){
                            $colordimensionrojo4++;
                        }
                        if ($colordimensionrojo4 > 0){ //Rojo
                            $colordimension4 = '#DF0101';
                        }
                        else
                        {
                            $colordimension4 = '#30E24E';
                        }   
                    break;
                    case '6'://por realizar o pendiente
                            $privacionhabi .= '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-4">
                     <h4 class="panel-title" >
                     <a onclick="iravista('.$folio.','.$privacion->iddimension.','.$privacion->idprivacion.','.$cidestacion.')">'.$privacion->privacion.'</a>
                     </h4>
                     </div>
                     <div class="col-lg-offset-11">
                     <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colorprivacion.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
                        if ($calculoprivacion == 1){
                            $colordimensionverde6++;
                        }
                        if ($calculoprivacion == 0){
                            $colordimensionrojo6++;
                        }
                        
                        if ($colordimensionrojo6 > 0){ //Rojo
                            
                            $colordimension6 = '#DF0101';
                        }
                        else
                        {
                            $colordimension6 = '#30E24E';
                             
                        }   
                    break;
                    default:
                    }              
        }        

$listarprivaciones = '<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
   
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="headingOne">
  <div class="row" style="vertical-align: ">  
  <div class="col-md-4">
 <h4 class="panel-title" >
  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
  INGRESOS Y TRABAJO
  </a>
 </h4>
    </div>
    <div class="col-lg-offset-11">
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension2.'" >&nbsp;</span>
    </div>
</div>
</div>
<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
    '.$privacioningresos.'
</div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
    <div class="row" style="vertical-align: ">  
    <div class="col-md-4">     
  <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          EDUCACION
        </a>
      </h4>
    </div>
    <div class="col-lg-offset-11">
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension3.'" >&nbsp;</span>
    </div>
    </div>
</div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
    '.$privacioneduca.'
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
    <div class="row" style="vertical-align: ">  
    <div class="col-md-4">     
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          SALUD
        </a>
      </h4>
    </div>
    <div class="col-lg-offset-11">
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension4.'" >&nbsp;</span>
    </div>
    </div>
</div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
    '.$privacionsalud.'
    </div>
  </div>

<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingfour">
    <div class="row" style="vertical-align: ">  
    <div class="col-md-4">     
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
         HABITABILIDAD
        </a>
      </h4>
    </div>
    <div class="col-lg-offset-11">
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension6.'" >&nbsp;</span>
    </div>
    </div>
</div>
    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
      '.$privacionhabi.'
    </div>
  </div>
                
  </div>' ;
     
       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_dimensiones_privaciones'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/privacionesintermedia/'.$page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head' => HEAD1, 'botoneral' => BOTONERALOGROS,'listarprivaciones' => $listarprivaciones,  'folio' => $folio, 'doccogestor' => $doccogestor, 'foexiste' =>$foexiste,'matrizg' =>$matrizg, 'tdatinte' => $tdatinte,'colordimension2' => $colordimension2,'colordimension3' => $colordimension3,'colordimension4' => $colordimension4, 'colordimension6' => $colordimension6,'cidestacion' => $cidestacion));
        //FIN LEVANTA LA VISTA
     }
     
     
///////////////////////////////////////////////////////////////////////////////
    
}
