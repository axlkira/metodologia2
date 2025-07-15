<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/////////////// NUEVO LOGIN ///////////////////////////
class C_dimensionespseleccion extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('/privaciones/m_dimensionespseleccion');
    }

     //funcion encargada de llamar a la vista de la pagina 
    public function fc_dimensionespseleccion($page = 'v_dimensionespseleccion') {

        if (!file_exists('application/views/pages/privaciones/'. $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        //INICIO TRAER DATOS DEL TITULAR
        $cidestacion = $this->input->get('idestacion');
        $doccogestor = $this->input->get('doccogestor');
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
        $datosintegrante = $this->m_dimensionespseleccion->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
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
        //INICIO TRAER ULTIMA VISITA
        $ipmintermedia = $this->m_dimensionespseleccion->fm_ipmintermedia($folio);//lo mandasmos a la funcion del modelo para verificar
        
        $tipmintermedia= array('eipmintermedia' => '');
        
        foreach ($ipmintermedia as $filaipmintermedia)
        {
        $tipmintermedia = array('eipmintermedia' => $filaipmintermedia->ipmintermedia); //se guarda el resultado del ption value en la variable datos
        }
        //FIN TRAER ULTIMA VISITA
        
        
        
        
        //validar si el folio existe
        $folioexiste = $this->m_dimensionespseleccion->fm_folioexiste($folio);//lo mandasmos a la funcion del modelo para verificar
        
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
        $matrizgrados = $this->m_dimensionespseleccion->fm_matrizgraduacion($folio);//lo mandasmos a la funcion del modelo para verificar
               
        $matrizg= array('efolio' => '', 'eidintegrante' =>'', 'eestadointegrante' =>'','enombreintegrante' =>'', 'eedad' =>'', 'esexo' => '','efecharegistroIPM' => '', 'ebajologroeducativo' => '','eanalfabetismo' => '','einasistenciaescolar' => '','erezagoescolar' => '','ebarrerasdeaccesoprimerainfancia' => '','etrabajoinfantil' => '', 'edesempleodelargaduracion' => '','eempleoinformal' => '','esinaseguramientoensalud' => '','esinaccesoaserviciodesalud' => '','eSinaccesoafuentedeaguamejorada' => '','einadecuadaeliminaciondeexcretas' => '','episosinadecuados' => '','eparedesexterioresinadecuada' => '','ehacinamientocritico' => '','eindicetradicionalingreso' => '','etotalIPM' => '','ecasillamatriz' => '');
        foreach ($matrizgrados as $fila)
        {
        $matrizg = array('efolio'=>$fila->folio,'eidintegrante'=>$fila->idintegrante,'eestadointegrante'=>$fila->estadointegrante,'enombreintegrante'=>$fila->nombreintegrante,'eedad'=>$fila->edad,'esexo'=>$fila->sexo,'efecharegistroIPM'=>$fila->fecharegistroIPM,'ebajologroeducativo' => $fila->bajologroeducativo,'eanalfabetismo'=>$fila->analfabetismo,'einasistenciaescolar' => $fila->inasistenciaescolar,'erezagoescolar' => $fila->rezagoescolar,'ebarrerasdeaccesoprimerainfancia' => $fila->barrerasdeaccesoprimerainfancia, 'etrabajoinfantil' => $fila->trabajoinfantil,'edesempleodelargaduracion' => $fila->desempleodelargaduracion, 'eempleoinformal' => $fila->empleoinformal,'esinaseguramientoensalud' => $fila->sinaseguramientoensalud, 'esinaccesoaserviciodesalud' => $fila->sinaccesoaserviciodesalud,'eSinaccesoafuentedeaguamejorada' => $fila->Sinaccesoafuentedeaguamejorada, 'einadecuadaeliminaciondeexcretas' => $fila->inadecuadaeliminaciondeexcretas,'episosinadecuados' => $fila->pisosinadecuados, 'eparedesexterioresinadecuada' => $fila->paredesexterioresinadecuada,'ehacinamientocritico' => $fila->hacinamientocritico, 'eindicetradicionalingreso' => $fila->indicetradicionalingreso,'etotalIPM' => $fila->totalIPM,'ecasillamatriz' => $fila->casillamatriz); //se guarda el resultado del ption value en la variable datos
        }
//fin matriz graduacion
        $listarprivacion = $this->m_dimensionespseleccion->fm_listartablaprivaciones();
        
        $privacioningresos = '';      
        $privacioneduca = '';
        $privacionsalud = '';
        $privacionhabi = '';
        $dimension = '';
        
        $colordimension2 = '';
        $colordimension2fin = '';
        $colordimensionverde2 = '';
        $colordimensionverde2fin = '';
        $colordimensionrojo2 = '';
        $colordimensionrojo2fin = '';
        
        $colordimension3 = '';
        $colordimension3fin = '';
        $colordimensionverde3 = '';
        $colordimensionverde3fin = '';
        $colordimensionrojo3 = '';
        $colordimensionrojo3fin = '';
        
        $colordimension4 = '';
        $colordimension4fin = '';
        $colordimensionverde4 = '';
        $colordimensionverde4fin = '';
        $colordimensionrojo4 = '';
        $colordimensionrojo4fin = '';
                
        $colordimension6 = '';
        $colordimension6fin = '';
        $colordimensionverde6 = '';
        $colordimensionverde6fin = '';
        $colordimensionrojo6 = '';
        $colordimensionrojo6fin = '';
        $espaciosl = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        
        
        
        
        
        
        foreach ($listarprivacion as $privacion)
        {  
           $calcularprivacion = $this->m_dimensionespseleccion->fm_calcularprivacion($folio,$privacion->idprivacion); 
                     
           $colorprivacion = '';
           $colorprivacionfin = '';
          
           foreach ($calcularprivacion as $bolita){
               
                $calculoprivacion = $bolita->privacion1;
                $calculoprivacionfin = $bolita->privacion1fin;

               if ($calculoprivacion == 0){ //Rojo
                   
                   $colorprivacion = '#DF0101'; 
                   
               }else{
                   $colorprivacion = '#30E24E';
                   
               }
               
               if ($calculoprivacionfin == 0){ //Rojo
                   
                   $colorprivacionfin = '#DF0101'; 
                   
               }else{
                   $colorprivacionfin = '#30E24E';
                   
               }
               
               
               
               if ($tipmintermedia['eipmintermedia'] >= 1){ //Rojo
                   
                   $colorprivacionfinvar = '<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colorprivacionfin.'" >&nbsp;</span>'; 
                   
               }else{
                   $colorprivacionfinvar = '<span class="badge" style=" display:none" >&nbsp;</span>'; 
                   
               }
               
           }
        switch ($privacion->iddimension) 
                {   
                    case '2'://actual
                     $privacioningresos .= '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-4">
                     <h4 class="panel-title" >
                     <a onclick="no_activo('.$folio.','.$privacion->iddimension.','.$privacion->idprivacion.')">'.$privacion->privacion.'</a>
                     </h4>
                     </div>
                     <div class="col-lg-offset-8">
                     <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colorprivacion.'" >&nbsp;</span>'.$espaciosl.'
                     '.$colorprivacionfinvar.' 
                     </div>
                     </div>
                     </div>';
                      if ($calculoprivacion == 1){
                            $colordimensionverde2++;
                        }
                        if ($calculoprivacion == 0){
                            $colordimensionrojo2++;
                        }
                        if ($calculoprivacionfin == 1){
                            $colordimensionverde2fin++;
                        }
                        if ($calculoprivacionfin == 0){
                            $colordimensionrojo2fin++;
                        }
                        
                        
                        if ($colordimensionrojo2 > 0){ //Rojo
                            $colordimension2 = '#DF0101';
                        }
                        else
                        {
                             $colordimension2 = '#30E24E';
                        }
                        if ($colordimensionrojo2fin > 0){ //Rojo
                            $colordimension2fin = '#DF0101';
                        }
                        else
                        {
                             $colordimension2fin = '#30E24E';
                        }
                        
                        
                        
                        if ($tipmintermedia['eipmintermedia'] >= 1){ //Rojo
                        $colordimension2finvar = '<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension2fin.'" >&nbsp;</span>'; 
                        }else{
                        $colordimension2finvar = '<span class="badge" style=" display:none" >&nbsp;</span>'; 
                        }
                        
                        
                        
                        
                        
                    break;
                    case '3'://actual
                     $privacioneduca .= '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-4">
                     <h4 class="panel-title" >
                     <a onclick="no_activo('.$folio.','.$privacion->iddimension.','.$privacion->idprivacion.')">'.$privacion->privacion.'</a>
                     </h4>
                     </div>
                     <div class="col-lg-offset-8">
                     <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colorprivacion.'" >&nbsp;</span>'.$espaciosl.'
                     '.$colorprivacionfinvar.' 
                     </div>
                     </div>
                     </div>';
                        if ($calculoprivacion == 1){
                            $colordimensionverde3++;
                        }
                        if ($calculoprivacion == 0){
                            $colordimensionrojo3++;
                        }
                        if ($calculoprivacionfin == 1){
                            $colordimensionverde3fin++;
                        }
                        if ($calculoprivacionfin == 0){
                            $colordimensionrojo3fin++;
                        }
                        
                        
                        
                        
                        if ($colordimensionrojo3 > 0){ //Rojo
                            $colordimension3 = '#DF0101';
                        }
                        else
                        {
                             $colordimension3 = '#30E24E';
                        }
                        if ($colordimensionrojo3fin > 0){ //Rojo
                            $colordimension3fin = '#DF0101';
                        }
                        else
                        {
                             $colordimension3fin = '#30E24E';
                        }
                        
                        
                        if ($tipmintermedia['eipmintermedia'] >= 1){ //Rojo
                        $colordimension3finvar = '<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension3fin.'" >&nbsp;</span>'; 
                        }else{
                        $colordimension3finvar = '<span class="badge" style=" display:none" >&nbsp;</span>'; 
                        }
                        
                        
                    break;       
                    case '4'://por realizar o pendiente
                            $privacionsalud .= '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-4">
                     <h4 class="panel-title" >
                     <a onclick="no_activo('.$folio.','.$privacion->iddimension.','.$privacion->idprivacion.')">'.$privacion->privacion.'</a>
                     </h4>
                     </div>
                     <div class="col-lg-offset-8">
                     <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colorprivacion.'" >&nbsp;</span>'.$espaciosl.'
                     '.$colorprivacionfinvar.' 
                     </div>
                     </div>
                     </div>';
                        if ($calculoprivacion == 1){
                            $colordimensionverde4++;
                        }
                        if ($calculoprivacion == 0){
                            $colordimensionrojo4++;
                        }
                        if ($calculoprivacionfin == 1){
                            $colordimensionverde4fin++;
                        }
                        if ($calculoprivacionfin == 0){
                            $colordimensionrojo4fin++;
                        }
                        
                        
                        
                        
                        if ($colordimensionrojo4 > 0){ //Rojo
                            $colordimension4 = '#DF0101';
                        }
                        else
                        {
                            $colordimension4 = '#30E24E';
                        }
                        if ($colordimensionrojo4fin > 0){ //Rojo
                            $colordimension4fin = '#DF0101';
                        }
                        else
                        {
                            $colordimension4fin = '#30E24E';
                        }
                        
                        
                        if ($tipmintermedia['eipmintermedia'] >= 1){ //Rojo
                        $colordimension4finvar = '<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension4fin.'" >&nbsp;</span>'; 
                        }else{
                        $colordimension4finvar = '<span class="badge" style=" display:none" >&nbsp;</span>'; 
                        }
                        
                        
                        
                    break;
                    case '6'://por realizar o pendiente
                            $privacionhabi .= '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-4">
                     <h4 class="panel-title" >
                     <a onclick="no_activo('.$folio.','.$privacion->iddimension.','.$privacion->idprivacion.')">'.$privacion->privacion.'</a>
                     </h4>
                     </div>
                     <div class="col-lg-offset-8">
                     <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colorprivacion.'" >&nbsp;</span>'.$espaciosl.'
                     '.$colorprivacionfinvar.' 
                     </div>
                     </div>
                     </div>';
                        if ($calculoprivacion == 1){
                            $colordimensionverde6++;
                        }
                        if ($calculoprivacion == 0){
                            $colordimensionrojo6++;
                        }
                        if ($calculoprivacionfin == 1){
                            $colordimensionverde6fin++;
                        }
                        if ($calculoprivacionfin == 0){
                            $colordimensionrojo6fin++;
                        }
                        
                        
                        
                        
                        if ($colordimensionrojo6 > 0){ //Rojo
                            
                            $colordimension6 = '#DF0101';
                        }
                        else
                        {
                            $colordimension6 = '#30E24E';
                             
                        }
                        if ($colordimensionrojo6fin > 0){ //Rojo
                            
                            $colordimension6fin = '#DF0101';
                        }
                        else
                        {
                            $colordimension6fin = '#30E24E';
                             
                        }
                        
                        
                        if ($tipmintermedia['eipmintermedia'] >= 1){ //Rojo
                        $colordimension6finvar = '<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension6fin.'" >&nbsp;</span>'; 
                        }else{
                        $colordimension6finvar = '<span class="badge" style=" display:none" >&nbsp;</span>'; 
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
    <div class="col-lg-offset-8">
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension2.'" >&nbsp;</span>'.$espaciosl.'
    '.$colordimension2finvar.'
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
    <div class="col-lg-offset-8">
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension3.'" >&nbsp;</span>'.$espaciosl.'
    '.$colordimension3finvar.'
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
    <div class="col-lg-offset-8">
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension4.'" >&nbsp;</span>'.$espaciosl.'
    '.$colordimension4finvar.'
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
    <div class="col-lg-offset-8">
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension6.'" >&nbsp;</span>'.$espaciosl.'
    '.$colordimension6finvar.'
    </div>
    </div>
</div>
    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
      '.$privacionhabi.'
    </div>
  </div>
                
  </div>' ;
     
       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_dimensiones_privaciones_seleccion'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/privaciones/'.$page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head' => HEAD1, 'botoneral' => BOTONERALOGROS,'listarprivaciones' => $listarprivaciones,  'folio' => $folio, 'doccogestor' => $doccogestor, 'foexiste' =>$foexiste,'matrizg' =>$matrizg, 'tdatinte' => $tdatinte,'colordimension2' => $colordimension2,'colordimension2fin' => $colordimension2fin,'colordimension3' => $colordimension3,'colordimension3fin' => $colordimension3fin,'colordimension4' => $colordimension4,'colordimension4fin' => $colordimension4fin, 'colordimension6' => $colordimension6,'colordimension6fin' => $colordimension6fin,'tipmintermedia' => $tipmintermedia,'cidestacion' => $cidestacion));
        //FIN LEVANTA LA VISTA
     }
     
     
///////////////////////////////////////////////////////////////////////////////
    
}
