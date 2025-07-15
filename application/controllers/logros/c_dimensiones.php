<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/////////////// NUEVO LOGIN ///////////////////////////
class C_dimensiones extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('/logros/m_dimensiones');
    }
     //funcion encargada de llamar a la vista de la pagina 
    public function fc_dimensiones($page = 'v_dimensiones') {

        if (!file_exists('application/views/pages/logros/'. $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        //INICIO TRAER DATOS DEL TITULAR
        $doccogestor = $this->input->get('doccogestor');
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
        $datosintegrante = $this->m_dimensiones->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
        if($this->input->get('idestacion')){

            $idestacion = array('idestacion'=>$this->input->get('idestacion'));

            $this->session->set_userdata($idestacion);
            
        }else{
            
            $idestacion = array('idestacion'=>0);
        
            $this->session->set_userdata($idestacion);

            }
        
        $tdatinte= array('tfolio' => '','tidintegrante' => '','tdoc' => '','tnombre' => '');
        
        foreach ($datosintegrante as $filainte)
        {
        $tdatinte = array('tfolio' => $filainte->folio,'tidintegrante' => $filainte->idintegrante,'tdoc' => $filainte->documento,'tnombre' => $filainte->nombre1.' '.$filainte->nombre2.' '.$filainte->apellido1.' '.$filainte->apellido2); //se guarda el resultado del ption value en la variable datos
        }
        //FIN TRAER DATOS DEL TITULAR
        //validar si el folio existe
        $folioexiste = $this->m_dimensiones->fm_folioexiste($folio);//lo mandasmos a la funcion del modelo para verificar
        
        //ACA USTEDES SI TOCAN - COLOCAN EL NOMBRE DE LAS VARIABLES idresc9mp1 - idresc9mp4a - idresc9mp4b - idresc9mp4c
        $foexiste= array('efolio' => '', 'eidintegrante' =>'', 'erephogar' =>'', 'edoccogestor' =>'', 'eestadof' =>'', 'emotivo' => '', 'eestadomotivo' => '', 'eestrato' => '', 'eestadoestrato' => '', 'ecomuna' => '', 'ebarrio' => '', 'eestadobarrio' => '', 'edireccion' => '','etelefono' => '', 'ecelular' => '','etelfcont' => '','ecelcont' => ''); 
     
        foreach ($folioexiste as $fila)
        {
        //USTEDES SI TOCAN - LO VERDE LO COLCAN COMO ESTA EN LA TABLA DE LA BD
        $foexiste = array('efolio' => $fila->folio, 'eidintegrante' => $fila->idintegrantetitular, 'erephogar' => $fila->erephogar, 'edoccogestor' => $fila->doccogestor, 'eestadof' => $fila->estadofolio, 'emotivo' => $fila->motivo,'eestadomotivo' => $fila->estadomotivo,  'eestrato' => $fila->estrato, 'eestadoestrato' => $fila->eestadoestrato, 'ecomuna' => $fila->comuna,'ebarrio' => $fila->barrio,'eestadobarrio' => $fila->estadobarrio, 'edireccion' => $fila->direccion, 'etelefono' => $fila->telefono, 'ecelular' => $fila->celular, 'etelfcont' => $fila->telfcont,'ecelcont' => $fila->celcont); //se guarda el resultado del ption value en la variable datos
        }
        //fin validar si el folio existe






//traer valores porcentaje de logros
        $folioexisteporcen = $this->m_dimensiones->fm_totalporcentajelogros($folio);        
        $foexisteporcen= array('etotal' => '', 'etotalrojo' =>'', 'etotalverd' =>'', 'etotalgris' =>'', 'etotalazul' =>'', 'etotalcafe' => '', 'etotalblan' => '',
         'eporcerojo' => '', 'eporceverd' => '', 'eporcegris' => '', 'eporceazul' => '', 'eporcecafe' => '', 'eporceblan' => ''); 
        foreach ($folioexisteporcen as $fila)
        {
        $foexisteporcen = array('etotal' => $fila->total, 'etotalrojo' => $fila->totalrojo, 'etotalverd' => $fila->totalverd, 'etotalgris' => $fila->totalgris, 'etotalazul' => $fila->totalazul, 
        'etotalcafe' => $fila->totalcafe,'etotalblan' => $fila->totalblan,  'eporcerojo' => $fila->porcerojo, 'eporceverd' => $fila->porceverd, 'eporcegris' => $fila->porcegris,
        'eporceazul' => $fila->porceazul,'eporcecafe' => $fila->porcecafe, 'eporceblan' => $fila->porceblan);
        }
//fin traer valores porcentaje de logros
//traer valores porcentaje de logros que aplican cn
        $folioexisteporcenaplicacn = $this->m_dimensiones->fm_totalporcentajelogrosaplicancn($folio);        
        $foexisteporcenaplicacn= array('elogro7' => '', 'elogro8' =>'', 'elogro9' =>'', 'elogro10' =>'', 'elogro11' =>'', 'elogro12' => '', 'elogro13' => '',
         'elogro15' => '', 'elogro16' => '', 'elogro17' => '', 'elogro24' => '', 'elogro25' => '', 'elogro26' => '', 'elogro28' => '', 'elogro29' => '', 'elogro30' => '', 'elogro31' => '',
         'egeneralrojo' => '','egeneralcafe' => '','egeneralverd' => '','egeneralazul' => '','egeneralgris' => '','egeneralblan' => '','eporcentajeactual' => ''); 
        foreach ($folioexisteporcenaplicacn as $fila)
        {
        $foexisteporcenaplicacn = array('elogro7' => $fila->logro7, 'elogro8' => $fila->logro8, 'elogro9' => $fila->logro9, 'elogro10' => $fila->logro10, 'elogro11' => $fila->logro11, 
        'elogro12' => $fila->logro12,'elogro13' => $fila->logro13,  'elogro15' => $fila->logro15, 'elogro16' => $fila->logro16, 'elogro17' => $fila->logro17,
        'elogro24' => $fila->logro24,'elogro25' => $fila->logro25, 'elogro26' => $fila->logro26, 'elogro28' => $fila->logro28, 'elogro29' => $fila->logro29, 'elogro30' => $fila->logro30,
        'elogro31' => $fila->logro31, 'egeneralrojo' => $fila->generalrojo, 'egeneralcafe' => $fila->generalcafe, 'egeneralverd' => $fila->generalverd, 'egeneralazul' => $fila->generalazul,
        'egeneralgris' => $fila->generalgris,'egeneralblan' => $fila->generalblan,'eporcentajeactual' => $fila->porcentajeactual);
        }
//fin traer valores porcentaje de logros que aplican cn



        //traer una lista de valores
        $listarlogro = $this->m_dimensiones->fm_listartablalogro();
        // variables del color de los logros            
        $logrosident = '';$logrosingresos = '';$logroeduca = '';$logrossalud = '';$logrosnutri = '';$logroshabi = '';$logrosentorno = '';$logrosbanca = '';$logrosacceso = '';$dimension = '';
        
        $colordimension1 = '';$colordimensionverde1 = '';$colordimensionrojo1 = '';$colordimensiongris1 = '';$colordimensioncafe1 = '';$colordimensionrojo1 = '';$colordimensiongris1 = '';
        $colordimension2 = '';$colordimensionverde2 = '';$colordimensionrojo2 = '';$colordimensiongris2 = '';$colordimensioncafe2 = '';$colordimensionrojo2 = '';$colordimensiongris2 = '';
        $colordimension3 = '';$colordimensionverde3 = '';$colordimensionrojo3 = '';$colordimensiongris3 = '';$colordimensioncafe3 = '';$colordimensionrojo3 = '';$colordimensiongris3 = '';
        $colordimension4 = '';$colordimensionverde4 = '';$colordimensionrojo4 = '';$colordimensiongris4 = '';$colordimensioncafe4 = '';$colordimensionrojo4 = '';$colordimensiongris4 = '';
        $colordimension5 = '';$colordimensionverde5 = '';$colordimensionrojo5 = '';$colordimensiongris5 = '';$colordimensioncafe5 = '';$colordimensionrojo5 = '';$colordimensiongris5 = '';
        $colordimension6 = '';$colordimensionverde6 = '';$colordimensionrojo6 = '';$colordimensiongris6 = '';$colordimensioncafe6 = '';$colordimensionrojo6 = '';$colordimensiongris6 = '';
        $colordimension7 = '';$colordimensionverde7 = '';$colordimensionrojo7 = '';$colordimensiongris7 = '';$colordimensioncafe7 = '';$colordimensionrojo7 = '';$colordimensiongris7 = '';
        $colordimension8 = '';$colordimensionverde8 = '';$colordimensionrojo8 = '';$colordimensiongris8 = '';$colordimensioncafe8 = '';$colordimensionrojo8 = '';$colordimensiongris8 = '';
        $colordimension9 = '';$colordimensionverde9 = '';$colordimensionrojo9 = '';$colordimensiongris9 = '';$colordimensioncafe9 = '';$colordimensionrojo9 = '';$colordimensiongris9 = '';
        //// chacha
        $colordimension1PF = '';$colordimensionverde1PF = '';$colordimensionrojo1PF = '';$colordimensiongris1PF = '';$colordimensioncafe1PF = '';$colordimensionrojo1PF = '';$colordimensiongris1PF = '';$colordimensionazul1PF = '';$colordimensionnaranja1PF = '';
        $colordimension2PF = '';$colordimensionverde2PF = '';$colordimensionrojo2PF = '';$colordimensiongris2PF = '';$colordimensioncafe2PF = '';$colordimensionrojo2PF = '';$colordimensiongris2PF = '';$colordimensionazul2PF = '';$colordimensionnaranja2PF = '';
        $colordimension3PF = '';$colordimensionverde3PF = '';$colordimensionrojo3PF = '';$colordimensiongris3PF = '';$colordimensioncafe3PF = '';$colordimensionrojo3PF = '';$colordimensiongris3PF = '';$colordimensionazul3PF = '';$colordimensionnaranja3PF = '';
        $colordimension4PF = '';$colordimensionverde4PF = '';$colordimensionrojo4PF = '';$colordimensiongris4PF = '';$colordimensioncafe4PF = '';$colordimensionrojo4PF = '';$colordimensiongris4PF = '';$colordimensionazul4PF = '';$colordimensionnaranja4PF = '';
        $colordimension5PF = '';$colordimensionverde5PF = '';$colordimensionrojo5PF = '';$colordimensiongris5PF = '';$colordimensioncafe5PF = '';$colordimensionrojo5PF = '';$colordimensiongris5PF = '';$colordimensionazul5PF = '';
        $colordimension6PF = '';$colordimensionverde6PF = '';$colordimensionrojo6PF = '';$colordimensiongris6PF = '';$colordimensioncafe6PF = '';$colordimensionrojo6PF = '';$colordimensiongris6PF = '';$colordimensionazul6PF = '';
        $colordimension7PF = '';$colordimensionverde7PF = '';$colordimensionrojo7PF = '';$colordimensiongris7PF = '';$colordimensioncafe7PF = '';$colordimensionrojo7PF = '';$colordimensiongris7PF = '';$colordimensionazul7PF = '';
        $colordimension8PF = '';$colordimensionverde8PF = '';$colordimensionrojo8PF = '';$colordimensiongris8PF = '';$colordimensioncafe8PF = '';$colordimensionrojo8PF = '';$colordimensiongris8PF = '';$colordimensionazul8PF = '';
        $colordimension9PF = '';$colordimensionverde9PF = '';$colordimensionrojo9PF = '';$colordimensiongris9PF = '';$colordimensioncafe9PF = '';$colordimensionrojo9PF = '';$colordimensiongris9PF = '';$colordimensionazul9PF = '';
        $espacios = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp';
        $espaciosl = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        $vblebordedim = '';
        //// fin chacha
        
        foreach ($listarlogro as $logro)
        {  
        $calcularlogro = $this->m_dimensiones->fm_calcularlogro($folio,$logro->idlogro); 
        $colorlogro = '';
        $colorlogroPF = '';
        $vbleborde = '';
        
  
        foreach ($calcularlogro as $bolita){
               $calculologro = $bolita->logro1;
               $calculologroPF = $bolita->logro1PF;
               if ($calculologro == 0)
                   { //Rojo
                   $colorlogro = '#DF0101'; 
                   }
                   else
                   {
                   if($calculologro == 2)
                   { //Gris
                   $colorlogro = '#D1DFD3';
                   }    
                   if($calculologro == 1)
                   { //Verde
                   $colorlogro = '#30E24E';
                   }
                   }
               ///// chacha
                   if($calculologroPF == 5)
                   { //blanco
                   $colorlogroPF = '#FFFFFF';
                   $vbleborde = 'border: 1px solid #555;';
                   }
                   else
                   {
                   if($calculologroPF == 2)
                   { //Gris
                   $colorlogroPF = '#D1DFD3';
                   }
                   if($calculologroPF == 1)
                   { //Verde
                   $colorlogroPF = '#30E24E';
                   }
                   if($calculologroPF == 3)
                   { //Azul
                   $colorlogroPF = '#428BCA';
                   }    
                   if($calculologroPF == 4)
                   { //Cafe
                   $colorlogroPF = '#8B4513';
                   }
                   if ($calculologroPF == 0)
                   { //Rojo
                   $colorlogroPF = '#DF0101'; 
                   }
                   }
               /// fin chacha
           }
        switch ($logro->iddimension) 
                {                
                case '1': //Para salto
                        
                     $logrosident .='<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-4">
                     <h4 class="panel-title" >
                     <a style="cursor:pointer" onclick="iravista('.$folio.','.$logro->iddimension.','.$logro->idlogro.')">'.$logro->logro.'</a>
                     </h4>
                     </div>
                     <div class="col-lg-offset-8">
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%;background: '.$colorlogro.'" >&nbsp;</span>'.$espaciosl.'
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%; '.$vbleborde.' background: '.$colorlogroPF.'" >&nbsp;</span>    
                     </div>
                     </div>
                     </div>';
                     if ($calculologro == 2)
                        {
                        $colordimensiongris1++;
                        }
                        if ($calculologro == 1)
                        {
                        $colordimensionverde1++;
                        }
                        if ($calculologro == 0)
                        {
                        $colordimensionrojo1++;
                        }
                        if ($colordimensionrojo1 > 0)
                        { //Rojo
                        $colordimension1 = '#DF0101';
                        }
                        else
                        {
                        if($colordimensiongris1 > 0)
                        { //Gris
                        $colordimension1 = '#D1DFD3';
                        }
                        if($colordimensionverde1 > 0)
                        { //Verde
                        $colordimension1 = '#30E24E';
                        }                      
                        }
                        ///////////// chacha
                        if ($calculologroPF == 3)
                        {
                        $colordimensionazul1PF++;
                        }
                        if ($calculologroPF == 2)
                        {
                        $colordimensiongris1PF++;
                        }
                        if ($calculologroPF == 1)
                        {
                        $colordimensionverde1PF++;
                        }
                        if ($calculologroPF == 4)
                        {
                        $colordimensioncafe1PF++;
                        }
                        if ($calculologroPF == 0)
                        {
                        $colordimensionrojo1PF++;
                        }
                        if ($calculologroPF == 5)
                        {
                        $colordimensionnaranja1PF++;
                        }
                        if ($colordimensionnaranja1PF > 0)
                        { //blanco
                        $colordimension1PF = '#FFFFFF';
                        }
                        else
                        {
                        if($colordimensiongris1PF > 0)
                        { //Gris
                        $colordimension1PF = '#D1DFD3';
                        }
                        if($colordimensionverde1PF > 0)
                        { //Verde
                        $colordimension1PF = '#30E24E';
                        }
                        if($colordimensionazul1PF > 0) 
                        { //Azul
                        $colordimension1PF = '#428BCA';
                        } 
                        if($colordimensioncafe1PF > 0) 
                        { //Cafe
                        $colordimension1PF = '#8B4513';
                        }
                        if ($colordimensionrojo1PF > 0)
                        { //Rojo
                        $colordimension1PF = '#DF0101';
                        }
                        }
                        //////// fin chacha
                    break;       
                    case '2'://actual
                            $logrosingresos .= '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-4">
                     <h4 class="panel-title" >
                     <a style="cursor:pointer" onclick="iravista('.$folio.','.$logro->iddimension.','.$logro->idlogro.')">'.$logro->logro.'</a>
                     </h4>
                     </div>
                     <div class="col-lg-offset-8">
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%;background: '.$colorlogro.'" >&nbsp;</span>'.$espaciosl.'
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%; '.$vbleborde.' background: '.$colorlogroPF.'" >&nbsp;</span>    
                     </div>
                     </div>
                     </div>';
                     if ($calculologro == 2)
                        {
                        $colordimensiongris2++;
                        }
                        if ($calculologro == 1)
                        {
                        $colordimensionverde2++;
                        }
                        if ($calculologro == 0)
                        {
                        $colordimensionrojo2++;
                        }
                        if ($colordimensionrojo2 > 0)
                        { //Rojo
                        $colordimension2 = '#DF0101';
                        }
                        else
                        {
                        if($colordimensiongris2 > 0)
                        { //Gris
                        $colordimension2 = '#D1DFD3';
                        }
                        if($colordimensionverde2 > 0)
                        { //Verde
                        $colordimension2 = '#30E24E';
                        }                      
                        }
                        ////chacha
                        if ($calculologroPF == 2)
                        {
                        $colordimensiongris2PF++;
                        }
                        if ($calculologroPF == 1)
                        {
                        $colordimensionverde2PF++;
                        }
                        if ($calculologroPF == 4)
                        {
                        $colordimensioncafe2PF++;
                        }
                        if ($calculologroPF == 3)
                        {
                        $colordimensionazul2PF++;
                        }
                        if ($calculologroPF == 0)
                        {
                        $colordimensionrojo2PF++;
                        }
                        if ($calculologroPF == 5)
                        {
                        $colordimensionnaranja2PF++;
                        }
                        if ($colordimensionnaranja2PF > 0)
                        { //blanco
                        $colordimension2PF = '#FFFFFF';
                        }
                        else
                        {
                        if($colordimensiongris2PF > 0)
                        { //Gris
                        $colordimension2PF = '#D1DFD3';
                        }
                        if($colordimensionverde2PF > 0)
                        { //Verde
                        $colordimension2PF = '#30E24E';
                        }
                        if($colordimensionazul2PF > 0) 
                        { //Azul
                        $colordimension2PF = '#428BCA';
                        }    
                        if($colordimensioncafe2PF > 0)
                        { //Cafe
                        $colordimension2PF = '#8B4513';
                        } 
                        if ($colordimensionrojo2PF > 0)
                        { //Rojo
                        $colordimension2PF = '#DF0101';
                        }
                        }
                        /// fin chacha
                    break;       
                    case '3'://por realizar o pendiente
                            $logroeduca .= '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-4">
                     <h4 class="panel-title" >
                     <a style="cursor:pointer" onclick="iravista('.$folio.','.$logro->iddimension.','.$logro->idlogro.')">'.$logro->logro.'</a>
                     </h4>
                     </div>
                     <div class="col-lg-offset-8">
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%;background: '.$colorlogro.'" >&nbsp;</span>'.$espaciosl.'
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%; '.$vbleborde.' background: '.$colorlogroPF.'" >&nbsp;</span>    
                     </div>
                     </div>
                     </div>';
                     if ($calculologro == 2)
                        {
                        $colordimensiongris3++;
                        }
                        if ($calculologro == 1)
                        {
                        $colordimensionverde3++;
                        }
                        if ($calculologro == 0)
                        {
                        $colordimensionrojo3++;
                        }
                        if ($colordimensionrojo3 > 0)
                        { //Rojo
                        $colordimension3 = '#DF0101';
                        }
                        else
                        {
                        if($colordimensiongris3 > 0)
                        { //Gris
                        $colordimension3 = '#D1DFD3';
                        }
                        if($colordimensionverde3 > 0)
                        { //Verde
                        $colordimension3 = '#30E24E';
                        }                      
                        }   
                        ///chacha
                        if ($calculologroPF == 2)
                        {
                        $colordimensiongris3PF++;
                        }
                        if ($calculologroPF == 1)
                        {
                        $colordimensionverde3PF++;
                        }
                        if ($calculologroPF == 4)
                        {
                        $colordimensioncafe3PF++;
                        }
                        if ($calculologroPF == 3)
                        {
                        $colordimensionazul3PF++;
                        }
                        if ($calculologroPF == 0)
                        {
                        $colordimensionrojo3PF++;
                        }
                        if ($calculologroPF == 5)
                        {
                        $colordimensionnaranja3PF++;
                        }
                        if ($colordimensionnaranja3PF > 0)
                        { //blanco
                        $colordimension3PF = '#FFFFFF';
                        }
                        else
                        {
                        if($colordimensiongris3PF > 0)
                        { //Gris
                        $colordimension3PF = '#D1DFD3';
                        }
                        if($colordimensionverde3PF > 0)
                        { //Verde
                        $colordimension3PF = '#30E24E';
                        }
                        if($colordimensionazul3PF > 0) 
                        { //Azul
                        $colordimension3PF = '#428BCA';
                        }    
                        if($colordimensioncafe3PF > 0)
                        { //Cafe
                        $colordimension3PF = '#8B4513';
                        }
                        if ($colordimensionrojo3PF > 0)
                        { //Rojo
                        $colordimension3PF = '#DF0101';
                        }
                        }
                        ///fin chacha
                    break;
                    case '4'://por realizar o pendiente
                            $logrossalud .= '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-4">
                     <h4 class="panel-title" >
                     <a style="cursor:pointer" onclick="iravista('.$folio.','.$logro->iddimension.','.$logro->idlogro.')">'.$logro->logro.'</a>
                     </h4>
                     </div>
                     <div class="col-lg-offset-8">
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%;background: '.$colorlogro.'" >&nbsp;</span>'.$espaciosl.'
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%; '.$vbleborde.' background: '.$colorlogroPF.'" >&nbsp;</span>    
                     </div>
                     </div>
                     </div>';
                     if ($calculologro == 2)
                        {
                        $colordimensiongris4++;
                        }
                        if ($calculologro == 1)
                        {
                        $colordimensionverde4++;
                        }
                        if ($calculologro == 0)
                        {
                        $colordimensionrojo4++;
                        }
                        if ($colordimensionrojo4 > 0)
                        { //Rojo
                        $colordimension4 = '#DF0101';
                        }
                        else
                        {
                        if($colordimensiongris4 > 0)
                        { //Gris
                        $colordimension4 = '#D1DFD3';
                        }
                        if($colordimensionverde4 > 0)
                        { //Verde
                        $colordimension4 = '#30E24E';
                        }                      
                        }   
                        // chacha
                        if ($calculologroPF == 2)
                        {
                        $colordimensiongris4PF++;
                        }
                        if ($calculologroPF == 1)
                        {
                        $colordimensionverde4PF++;
                        }
                        if ($calculologroPF == 4)
                        {
                        $colordimensioncafe4PF++;
                        }
                        if ($calculologroPF == 3)
                        {
                        $colordimensionazul4PF++;
                        }
                        if ($calculologroPF == 0)
                        {
                        $colordimensionrojo4PF++;
                        }
                        if ($calculologroPF == 5)
                        {
                        $colordimensionnaranja4PF++;
                        }
                        if ($colordimensionnaranja4PF > 0)
                        { //banco
                        $colordimension4PF = '#FFFFFF';
                        }
                        else
                        {
                        if($colordimensiongris4PF > 0)
                        { //Gris
                        $colordimension4PF = '#D1DFD3';
                        }
                        if($colordimensionverde4PF > 0)
                        { //Verde
                        $colordimension4PF = '#30E24E';
                        }
                        if($colordimensionazul4PF > 0) 
                        { //Azul
                        $colordimension4PF = '#428BCA';
                        }    
                        if($colordimensioncafe4PF > 0)
                        { //Cafe
                        $colordimension4PF = '#8B4513';
                        }
                        if ($colordimensionrojo4PF > 0)
                        { //Rojo
                        $colordimension4PF = '#DF0101';
                        }
                        }
                        // fin chacha
                    break;
                    case '5'://por realizar o pendiente
                            $logrosnutri .= '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-4">
                     <h4 class="panel-title" >
                     <a style="cursor:pointer" onclick="iravista('.$folio.','.$logro->iddimension.','.$logro->idlogro.')">'.$logro->logro.'</a>
                     </h4>
                     </div>
                     <div class="col-lg-offset-8">
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%;background: '.$colorlogro.'" >&nbsp;</span>'.$espaciosl.'
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%;background: '.$colorlogroPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
                     if ($calculologro == 2)
                        {
                        $colordimensiongris5++;
                        }
                        if ($calculologro == 1)
                        {
                        $colordimensionverde5++;
                        }
                        if ($calculologro == 0)
                        {
                        $colordimensionrojo5++;
                        }
                        if ($colordimensionrojo5 > 0)
                        { //Rojo
                        $colordimension5 = '#DF0101';
                        }
                        else
                        {
                        if($colordimensiongris5 > 0)
                        { //Gris
                        $colordimension5 = '#D1DFD3';
                        }
                        if($colordimensionverde5 > 0) 
                        { //Verde
                        $colordimension5 = '#30E24E';
                        }                      
                        }   
                        // chacha
                        if ($calculologroPF == 2)
                        {
                        $colordimensiongris5PF++;
                        }
                        if ($calculologroPF == 1)
                        {
                        $colordimensionverde5PF++;
                        }
                        if ($calculologroPF == 4)
                        {
                        $colordimensioncafe5PF++;
                        }
                        if ($calculologroPF == 3)
                        {
                        $colordimensionazul5PF++;
                        }
                        if ($calculologroPF == 0)
                        {
                        $colordimensionrojo5PF++;
                        }
                        if ($colordimensionrojo5PF > 0)
                        { //Rojo
                        $colordimension5PF = '#DF0101';
                        }
                        else
                        {
                        if($colordimensiongris5PF > 0)
                        { //Gris
                        $colordimension5PF = '#D1DFD3';
                        }
                        if($colordimensionverde5PF > 0) 
                        { //Verde
                        $colordimension5PF = '#30E24E';
                        }
                        if($colordimensionazul5PF > 0)
                        { //Azul
                        $colordimension5PF = '#428BCA';
                        }
                        if($colordimensioncafe5PF > 0)
                        { //Cafe
                        $colordimension5PF = '#8B4513';
                        }
                        }
                        // fin chacha
                    break;
                    case '6'://por realizar o pendiente
                            $logroshabi .= '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-4">
                     <h4 class="panel-title" >
                     <a style="cursor:pointer" onclick="iravista('.$folio.','.$logro->iddimension.','.$logro->idlogro.')">'.$logro->logro.'</a>
                     </h4>
                     </div>
                     <div class="col-lg-offset-8">
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%;background: '.$colorlogro.'" >&nbsp;</span>'.$espaciosl.'
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%;background: '.$colorlogroPF.'" >&nbsp;</span>    
                     </div>
                     </div>
                     </div>';
                     if ($calculologro == 2)
                        {
                        $colordimensiongris6++;
                        }
                        if ($calculologro == 1)
                        {
                        $colordimensionverde6++;
                        }
                        if ($calculologro == 0)
                        {
                        $colordimensionrojo6++;
                        }
                        if ($colordimensionrojo6 > 0)
                        { //Rojo
                        $colordimension6 = '#DF0101';
                        }
                        else
                        {
                        if($colordimensiongris6 > 0)
                        { //Gris
                        $colordimension6 = '#D1DFD3';
                        }
                        if($colordimensionverde6 > 0)
                        { //Verde
                        $colordimension6 = '#30E24E';
                        }                      
                        }
                        // chacha
                        if ($calculologroPF == 2)
                        {
                        $colordimensiongris6PF++;
                        }
                        if ($calculologroPF == 1)
                        {
                        $colordimensionverde6PF++;
                        }
                        if ($calculologroPF == 4)
                        {
                        $colordimensioncafe6PF++;
                        }
                        if ($calculologroPF == 3)
                        {
                        $colordimensionazul6PF++;
                        }
                        if ($calculologroPF == 0)
                        {
                        $colordimensionrojo6PF++;
                        }
                        if ($colordimensionrojo6PF > 0)
                        { //Rojo
                        $colordimension6PF = '#DF0101';
                        }
                        else
                        {
                        if($colordimensiongris6PF > 0)
                        { //Gris
                        $colordimension6PF = '#D1DFD3';
                        }
                        if($colordimensionverde6PF > 0)
                        { //Verde
                        $colordimension6PF = '#30E24E';
                        }
                        if($colordimensionazul6PF > 0) 
                        { //Azul
                        $colordimension6PF = '#428BCA';
                        }
                        if($colordimensioncafe6PF > 0)
                        { //Cafe
                        $colordimension6PF = '#8B4513';
                        }
                        }
                        // fin chacha
                    break;
                    case '7'://por realizar o pendiente
                            $logrosentorno .= '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-4">
                     <h4 class="panel-title" >
                     <a style="cursor:pointer" onclick="iravista('.$folio.','.$logro->iddimension.','.$logro->idlogro.')">'.$logro->logro.'</a>
                     </h4>
                     </div>
                     <div class="col-lg-offset-8">
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%;background: '.$colorlogro.'" >&nbsp;</span>'.$espaciosl.'
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%;background: '.$colorlogroPF.'" >&nbsp;</span>                    
                     </div>
                     </div>
                     </div>';
                     if ($calculologro == 2)
                        {
                        $colordimensiongris7++;
                        }
                        if ($calculologro == 1)
                        {
                        $colordimensionverde7++;
                        }
                        if ($calculologro == 0)
                        {
                        $colordimensionrojo7++;
                        }
                        if ($colordimensionrojo7 > 0)
                        { //Rojo
                        $colordimension7 = '#DF0101';
                        }
                        else
                        {
                        if($colordimensiongris7 > 0)
                        { //Gris
                        $colordimension7 = '#D1DFD3';
                        }
                        if($colordimensionverde7 > 0) 
                        { //Verde
                        $colordimension7 = '#30E24E';
                        }                      
                        }   
                        // chacha
                        if ($calculologroPF == 2)
                        {
                        $colordimensiongris7PF++;
                        }
                        if ($calculologroPF == 1)
                        {
                        $colordimensionverde7PF++;
                        }
                        if ($calculologroPF == 4)
                        {
                        $colordimensioncafe7PF++;
                        }
                        if ($calculologroPF == 3)
                        {
                        $colordimensionazul7PF++;
                        }
                        if ($calculologroPF == 0)
                        {
                        $colordimensionrojo7PF++;
                        }
                        if ($colordimensionrojo7PF > 0)
                        { //Rojo
                        $colordimension7PF = '#DF0101';
                        }
                        else
                        {
                        if($colordimensiongris7PF > 0)
                        { //Gris
                        $colordimension7PF = '#D1DFD3';
                        }
                        if($colordimensionverde7PF > 0) 
                        { //Verde
                        $colordimension7PF = '#30E24E';
                        }
                        if($colordimensionazul7PF > 0) 
                        { //Azul
                        $colordimension7PF = '#428BCA';
                        }
                        if($colordimensioncafe7PF > 0)
                        { //Cafe
                        $colordimension7PF = '#8B4513';
                        }
                        }
                        // fin chacha
                    break;
                    case '8'://por realizar o pendiente
                            $logrosbanca .= '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-4">
                     <h4 class="panel-title" >
                     <a style="cursor:pointer" onclick="iravista('.$folio.','.$logro->iddimension.','.$logro->idlogro.')">'.$logro->logro.'</a>
                     </h4>
                     </div>
                     <div class="col-lg-offset-8">
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%;background: '.$colorlogro.'" >&nbsp;</span>'.$espaciosl.'
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%;background: '.$colorlogroPF.'" >&nbsp;</span>    
                     </div>
                     </div>
                     </div>';
                     if ($calculologro == 2)
                        {
                        $colordimensiongris8++;
                        }
                        if ($calculologro == 1)
                        {
                        $colordimensionverde8++;
                        }
                        if ($calculologro == 0)
                        {
                        $colordimensionrojo8++;
                        }
                        if ($colordimensionrojo8 > 0)
                        { //Rojo
                        $colordimension8 = '#DF0101';
                        }
                        else
                        {
                        if($colordimensiongris8 > 0)
                        { //Gris
                        $colordimension8 = '#D1DFD3';
                        }
                        if($colordimensionverde8 > 0)
                        { //Verde
                        $colordimension8 = '#30E24E';
                        }                      
                        }   
                        // chacha
                        if ($calculologroPF == 2)
                        {
                        $colordimensiongris8PF++;
                        }
                        if ($calculologroPF == 1)
                        {
                        $colordimensionverde8PF++;
                        }
                        if ($calculologroPF == 4)
                        {
                        $colordimensioncafe8PF++;
                        }
                        if ($calculologroPF == 3)
                        {
                        $colordimensionazul8PF++;
                        }
                        if ($calculologroPF == 0)
                        {
                        $colordimensionrojo8PF++;
                        }
                        if ($colordimensionrojo8PF > 0)
                        { //Rojo
                        $colordimension8PF = '#DF0101';
                        }
                        else
                        {
                        if($colordimensiongris8PF > 0)
                        { //Gris
                        $colordimension8PF = '#D1DFD3';
                        }
                        if($colordimensionverde8PF > 0)
                        { //Verde
                        $colordimension8PF = '#30E24E';
                        }
                        if($colordimensionazul8PF > 0)
                        { //Azul
                        $colordimension8PF = '#428BCA';
                        }
                        if($colordimensioncafe8PF > 0)
                        { //Cafe
                        $colordimension8PF = '#8B4513';
                        }
                        }
                        // fin chacha
                    break;
                    case '9'://por realizar o pendiente
                            $logrosacceso .= '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-4">
                     <h4 class="panel-title" >
                     <a style="cursor:pointer" onclick="iravista('.$folio.','.$logro->iddimension.','.$logro->idlogro.')">'.$logro->logro.'</a>
                     </h4>
                     </div>
                     <div class="col-lg-offset-8">
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%;background: '.$colorlogro.'" >&nbsp;</span>'.$espaciosl.'
                     <span class="badge" style="width: 25px;height: 25px;-moz-border-radius: 40%;-webkit-border-radius: 40%;border-radius: 40%;background: '.$colorlogroPF.'" >&nbsp;</span>                    
                     </div>
                     </div>
                     </div>';
                     if ($calculologro == 2)
                        {
                        $colordimensiongris9++;
                        }
                        if ($calculologro == 1)
                        {
                        $colordimensionverde9++;
                        }
                        if ($calculologro == 0)
                        {
                        $colordimensionrojo9++;
                        }
                        if ($colordimensionrojo9 > 0)
                        { //Rojo
                        $colordimension9 = '#DF0101';
                        }
                        else
                        {
                        if($colordimensiongris9 > 0)
                        { //Gris
                        $colordimension9 = '#D1DFD3';
                        }
                        if($colordimensionverde9 > 0)
                        { //Verde
                        $colordimension9 = '#30E24E';
                        }                      
                        }   
                        // chacha
                        if ($calculologroPF == 2)
                        {
                        $colordimensiongris9PF++;
                        }
                        if ($calculologroPF == 1)
                        {
                        $colordimensionverde9PF++;
                        }
                        if ($calculologroPF == 4)
                        {
                        $colordimensioncafe9PF++;
                        }
                        if ($calculologroPF == 3)
                        {
                        $colordimensionazul9PF++;
                        }
                        if ($calculologroPF == 0)
                        {
                        $colordimensionrojo9PF++;
                        }
                        if ($colordimensionrojo9PF > 0)
                        { //Rojo
                        $colordimension9PF = '#DF0101';
                        }
                        else
                        {
                        if($colordimensiongris9PF > 0)
                        { //Gris
                        $colordimension9PF = '#D1DFD3';
                        }
                        if($colordimensionverde9PF > 0)
                        { //Verde
                        $colordimension9PF = '#30E24E';
                        }
                        if($colordimensionazul9PF > 0)
                        { //Azul
                        $colordimension9PF = '#428BCA';
                        }
                        if($colordimensioncafe9PF > 0)
                        { //Cafe
                        $colordimension9PF = '#8B4513';
                        }
                        }
                        // fin chacha
                    break;
                    default:
                    //esta listo
                }              
        }        
$listarlogros = '<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="headingOne">
  <div class="row" style="vertical-align:">
  <div class="col-md-4">
  <h4 class="panel-title" >
  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">IDENTIFICACION</a>
  </h4>
  </div>
  
    <div class="col-lg-offset-8">
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 30%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension1.'">&nbsp;</span>'.$espacios.' 
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 30%;-webkit-border-radius: 50%;border-radius: 50%;'.$vblebordedim.' background: '.$colordimension1PF.'" >&nbsp;</span>    
    </div>
    
</div>
</div>
<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
'.$logrosident.'
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="headingTwo">
<div class="row" style="vertical-align: ">  
  <div class="col-md-4">     
  <h4 class="panel-title">
 <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">INGRESOS Y TRABAJO</a>
    </h4>
    </div>
    <div class="col-lg-offset-8">
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 30%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension2.'" >&nbsp;</span></span>'.$espacios.'
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 30%;-webkit-border-radius: 50%;border-radius: 50%; '.$vblebordedim.' background: '.$colordimension2PF.'" >&nbsp;</span>
    </div>
   </div>
</div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
    '.$logrosingresos.'
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
    <div class="row" style="vertical-align: ">  
    <div class="col-md-4">     
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          EDUCACION
        </a>
      </h4>
    </div>
    <div class="col-lg-offset-8">
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 30%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension3.'" >&nbsp;</span>'.$espacios.'
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 30%;-webkit-border-radius: 50%;border-radius: 50%; '.$vblebordedim.' background: '.$colordimension3PF.'" >&nbsp;</span>    
    </div>
    </div>
</div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
    '.$logroeduca.'
    </div>
  </div>

<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingfour">
    <div class="row" style="vertical-align: ">  
    <div class="col-md-4">     
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
         SALUD
        </a>
      </h4>
    </div>
    <div class="col-lg-offset-8">
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension4.'" >&nbsp;</span>'.$espacios.'
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%; '.$vblebordedim.' background: '.$colordimension4PF.'" >&nbsp;</span>
    </div>
    </div>
</div>
    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
      '.$logrossalud.'
    </div>
  </div>

<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingfive">
    <div class="row" style="vertical-align: ">  
    <div class="col-md-4">     
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
         NUTRICION
        </a>
      </h4>
    </div>
    <div class="col-lg-offset-8">
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension5.'" >&nbsp;</span>'.$espacios.'
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension5PF.'" >&nbsp;</span>    
    </div>
    </div>
</div>
    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
  '.$logrosnutri.'
   </div>
  </div>

<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingsix">
    <div class="row" style="vertical-align: ">  
    <div class="col-md-4">     
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
         HABITABILIDAD
        </a>
      </h4>
    </div>
    <div class="col-lg-offset-8">
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension6.'" >&nbsp;</span>'.$espacios.'
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension6PF.'" >&nbsp;</span>    
    </div>
    </div>
</div>
    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
    '.$logroshabi.'
    </div>
  </div>

<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingseven">
    <div class="row" style="vertical-align: ">  
    <div class="col-md-4">     
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
         DINAMICA FAMILIAR
        </a>
      </h4>
    </div>
    <div class="col-lg-offset-8">
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension7.'" >&nbsp;</span>'.$espacios.'
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension7PF.'" >&nbsp;</span>
    </div>
    </div>
</div>
    <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven">
    '.$logrosentorno.'
    </div>
  </div>

<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingeight">
    <div class="row" style="vertical-align: ">  
    <div class="col-md-4">     
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
         BANCARIZACION Y AHORRO
        </a>
      </h4>
    </div>
    <div class="col-lg-offset-8">
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension8.'" >&nbsp;</span>'.$espacios.'
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension8PF.'" >&nbsp;</span> 
    </div>
    </div>
</div>
    <div id="collapseeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight">
     '.$logrosbanca.'
     </div>
  </div>

<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingnine">
    <div class="row" style="vertical-align: ">  
    <div class="col-md-4">     
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
         ACCESO A LA JUSTICIA
        </a>
      </h4>
    </div>
    <div class="col-lg-offset-8">
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension9.'" >&nbsp;</span>'.$espacios.'
    <span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: '.$colordimension9PF.'" >&nbsp;</span>    
    </div>
    </div>
</div>
    <div id="collapsenine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingnine">
     '.$logrosacceso.'
     </div>
  </div>
                
  </div>' ;
       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_dimensiones'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/logros/'.$page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head' => HEAD1, 'botoneral' => BOTONERALOGROS,'listarlogros' => $listarlogros,  'folio' => $folio, 'doccogestor' => $doccogestor, 'foexiste' =>$foexiste, 'tdatinte' => $tdatinte, 'colordimension1' => $colordimension1,'colordimension2' => $colordimension2,'colordimension3' => $colordimension3,'colordimension4' => $colordimension4,'colordimension5' => $colordimension5,'colordimension6' => $colordimension6,'colordimension7' => $colordimension7,'colordimension8' => $colordimension8,'colordimension9' => $colordimension9,'colordimension1PF' => $colordimension1PF,'colordimension2PF' => $colordimension2PF,'colordimension3PF' => $colordimension3PF,'colordimension4PF' => $colordimension4PF,'colordimension5PF' => $colordimension5PF,'colordimension6PF' => $colordimension6PF,'colordimension7PF' => $colordimension7PF,'colordimension8PF' => $colordimension8PF,'colordimension9PF' => $colordimension9PF, 'foexisteporcen' =>$foexisteporcen, 'foexisteporcenaplicacn' =>$foexisteporcenaplicacn));
        //FIN LEVANTA LA VISTA
     }
     
     
       public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_dimensiones->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
     
     
///////////////////////////////////////////////////////////////////////////////
    
}
