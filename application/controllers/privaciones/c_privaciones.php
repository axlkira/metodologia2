<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/////////////// NUEVO LOGIN ///////////////////////////
class C_privaciones extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('/privaciones/m_privaciones');
    }

     //funcion encargada de llamar a la vista de la pagina 
    public function fc_privaciones($page = 'v_privaciones') {

        if (!file_exists('application/views/pages/privaciones/'. $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        //INICIO TRAER DATOS DEL TITULAR
        $idprivacion = $this->input->get('idprivacion');
        $iddimension = $this->input->get('iddimension');
        $doccogestor = $this->input->get('doccogestor');
        $folio = $this->input->get('folio');
        $colordimension = $this->input->get('colordimension');
        
        //tomamos el valor del folio que viene por get
      //  $idintegrante = $this->input->get('idintegrante');
        
        //validar si el folio existe
        $folioexiste = $this->m_privaciones->fm_folioexiste($folio);//lo mandasmos a la funcion del modelo para verificar
        
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
       // $listalogro = $this->m_privaciones->fm_privacionresultado($folio,$idlogro);
        $listaprivacion = $this->m_privaciones->fm_privacionresultado($folio,$idprivacion);
        $privacionresul = ''; 
        // $colorlogroint = ''; 
        $bolitaint = '';
        $tabla = '';
        
        if($idprivacion == 1){
            
          $columnas = '<th>Nombre del integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>total integrantes</th>
                        <th>total grados aprobados</th>
                        <th>promedio grados</th>
                        <th>Color Privacion</th>';
          $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     Privacion 1: Bajo logro educativo: las personas de 18 años y mas terminarron el ciclo basico (9)
                     </h3><br>
                     <p>En el hogar hay privación cuando el promedio de educación de los integrantes del hogar de 15 años y más de edad es inferior al grado 9.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimension.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        
        foreach ($listaprivacion as $privacion)
        {
          if($privacion->colorprivacionDIP == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        
                $privacionresul .= '<tr>'
                      .'<td>'.$privacion->nombreintegrante.'</td>'
                      .'<td>'.$privacion->edad.'</td>'
                      .'<td>'.$privacion->sexo.'</td>'
                      .'<td>'.$privacion->totalintegrantes.'</td>'
                      .'<td>'.$privacion->totalgrado.'</td>'
                      .'<td>'.$privacion->promedioprivacion.'</td>'
                      .'<td>'.$bolitaint.'</td>    
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores privacion 1
        
        if($idprivacion == 2){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>sabe leer y escribir</th>
                        <th>Color Privacion</th>';
        
          $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     Privacion 2: Analfabetismo
                     </h3><br>
                     <p>En el hogar hay privación cuando los integrantes de 15 años y más no saben leer ni escribir.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimension.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        
        
        foreach ($listaprivacion as $privacion)
        {
          if($privacion->colorprivacionDIP == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else
            {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
            }
         
                $privacionresul .= '<tr>'
                      .'<td>'.$privacion->nombreintegrante.'</td>'
                      .'<td>'.$privacion->edad.'</td>'
                      .'<td>'.$privacion->sexo.'</td>'
                      .'<td>'.$privacion->sabeleeryescribir.'</td>'
                      .'<td>'.$bolitaint.'</td>    
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores privacion 2
        if($idprivacion == 3){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>actualmente estudia</th>
                        <th>ultimo grado aprovado</th>
                        <th>Color logro</th>';
        
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     Privacion 3: Inasistencia escolar
                     </h3><br>
                     <p>En el hogar hay privación cuando los integrantes entre 5 y 16 años de edad no se  encuentran estudiando y no han terminado el grado 11.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimension.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        
        foreach ($listaprivacion as $privacion)
        {
          if($privacion->colorprivacionDIP == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        
                $privacionresul .= '<tr>'
                      .'<td>'.$privacion->nombreintegrante.'</td>'
                      .'<td>'.$privacion->edad.'</td>'
                      .'<td>'.$privacion->sexo.'</td>'
                      .'<td>'.$privacion->actualmenteestudia.'</td>'
                      .'<td>'.$privacion->ultimogradoaprovado.'</td>'
                      .'<td>'.$bolitaint.'</td>    
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores privacion 3
        if($idprivacion == 4){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>ultimo grado aprovado</th>
                        <th>Color Privacion</th>';
               
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     Privacion 4: Rezago escolar
                     </h3><br>
                     <p>En el hogar hay privación cuando los integrantes entre 7 y 17 años de edad no han aprobado los años escolarers normativos.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimension.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        foreach ($listaprivacion as $privacion)
        {
          if($privacion->colorprivacionDIP == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
         
                $privacionresul .= '<tr>'
                      .'<td>'.$privacion->nombreintegrante.'</td>'
                      .'<td>'.$privacion->edad.'</td>'
                      .'<td>'.$privacion->sexo.'</td>'
                      .'<td>'.$privacion->ultimogradoaprovado.'</td>'
                      .'<td>'.$bolitaint.'</td>    
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores privacion 4        
        if($idprivacion == 5){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>afiliado seguridad social en salud</th>
                        <th>donde permanece el menor</th>
                        <th>joven sin alimentacion nutritiva</th>
                        <th>joven no pudo variar alimentacion</th>
                        <th>joven con alimentacion disminuida</th>
                        <th>joven se quejo de hambre</th>
                        <th>joven se acosto con hambre</th>
                        <th>joven comio una sola vez</th>
                        <th>Color Privacion</th>';      
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     Privacion 5: Barreras de acceso a servicios para el cuidado de la primera infancia
                     </h3><br>
                     <p>En el hogar hay privación cuando los integrantes entre 0 y 5 años de edad no tienen acceso simultaneo a salud, alimentación y educación inicial.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimension.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        foreach ($listaprivacion as $privacion)
        {
          if($privacion->colorprivacionDIP == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
         
                $privacionresul .= '<tr>'
                      .'<td>'.$privacion->nombreintegrante.'</td>'
                      .'<td>'.$privacion->edad.'</td>'
                      .'<td>'.$privacion->sexo.'</td>'
                      .'<td>'.$privacion->afiliadoseguridadsocialensalud.'</td>'
                      .'<td>'.$privacion->dondepermaneceelmenor.'</td>'
                      .'<td>'.$privacion->jovensinalimentacionnutritiva.'</td>'
                      .'<td>'.$privacion->jovennopudovariaralimentacion.'</td>'
                      .'<td>'.$privacion->jovenconalimentaciondisminuida.'</td>'
                      .'<td>'.$privacion->jovensequejodehambre.'</td>'
                      .'<td>'.$privacion->jovenseacostoconhambre.'</td>'
                      .'<td>'.$privacion->jovencomiounasolavez.'</td>'
                      .'<td>'.$bolitaint.'</td>    
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores privacion 5
          if($idprivacion == 6){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>gestiono permiso laboral en ministerio</th>
                        <th>ninguna actividad de explotacion laboral</th>
                        <th>fabricar productos</th>
                        <th>ayudar a cocinar</th>
                        <th>vender productos</th>
                        <th>llevar domicilios</th>
                        <th>cultivar la tierra</th>
                        <th>recolectar cartones</th>
                        <th>no ayudo a nadie</th>
                        <th>otra ayuda</th>
                        <th>cuanto tiempo a la semana</th>
                        <th>trabajo infantil</th>
                        <th>Color Privacion</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     Privacion 6: Trabajo infantil
                     </h3><br>
                     <p>En el hogar hay privación cuando el hogar lo manifiesta, el Cogestor lo observa o cuando los niños entre 5 y 14 años de edad realizan actividades de apoyo a los adultos por más de 15 horas semanlaes. También estará privado cuando los integrantes entre 15 y 17 años de edad que se encuentran trabajando  no cuentan con autorización del Ministerio de Trabajo.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimension.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';  
        
        foreach ($listaprivacion as $privacion)
        {
          if($privacion->colorprivacionDIP == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
         
                $privacionresul .= '<tr>'
                      .'<td>'.$privacion->nombreintegrante.'</td>'
                      .'<td>'.$privacion->edad.'</td>'
                    //  .'<td>'.$privacion->sexo.'</td>'
                      .'<td>'.$privacion->gestionopermisolaboralenministerio.'</td>'
                     // .'<td>'.$privacion->trabajodomestico.'</td>'
                     // .'<td>'.$privacion->trabajoenminas.'</td>'
                     // .'<td>'.$privacion->explotacionsexual.'</td>'
                     // .'<td>'.$privacion->reclutamientoconflictoarmado.'</td>'
                    //  .'<td>'.$privacion->microtraficoestuperfaciente.'</td>'
                    //  .'<td>'.$privacion->ventashambulantes.'</td>'
                    //  .'<td>'.$privacion->reciclaje.'</td>'
                    //  .'<td>'.$privacion->trabajoencalle.'</td>'
                    //  .'<td>'.$privacion->mendicidad.'</td>'
                    //  .'<td>'.$privacion->otra.'</td>'
                     // .'<td>'.$privacion->cual.'</td>'
                      .'<td>'.$privacion->ninguna.'</td>'
                      .'<td>'.$privacion->fabricarproductos.'</td>'
                      .'<td>'.$privacion->ayudaracocinar.'</td>'
                      .'<td>'.$privacion->venderproductos.'</td>'
                      .'<td>'.$privacion->llevardomicilios.'</td>'
                      .'<td>'.$privacion->cultivarlatierra.'</td>'
                      .'<td>'.$privacion->recolectarcartones.'</td>'
                      .'<td>'.$privacion->noayudoanadie.'</td>'
                      .'<td>'.$privacion->otraayuda.'</td>'
                     // .'<td>'.$privacion->cualayuda.'</td>'
                      .'<td>'.$privacion->cuantotiempoalasemana.'</td>'
                      .'<td>'.$privacion->trabajoinfantil.'</td>'
                      .'<td>'.$bolitaint.'</td>    
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores logro 6
         if($idprivacion == 7){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>trabajo por lo menos 2 semanas consecutivas</th>
                        <th>pagos por pension jubilacion vejez</th>
                        <th>cuanto fue el pago</th>
                        <th>Color Privacion</th>';      
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     Privacion 7: Desempleo de larga duracion
                     </h3><br>
                     <p>En el hogar hay privación cuando alguno de sus integrantes en edad de trabajar se encuentra desempleado hace más de un año y no esta pensionado o jubilado.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimension.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        foreach ($listaprivacion as $privacion)
        {
          if($privacion->colorprivacionDIP == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
         
                $privacionresul .= '<tr>'
                      .'<td>'.$privacion->nombreintegrante.'</td>'
                      .'<td>'.$privacion->edad.'</td>'
                      .'<td>'.$privacion->sexo.'</td>'
                      .'<td>'.$privacion->trabajoporlomenos2semanasconsecutivas.'</td>'
                      .'<td>'.$privacion->pagosporpensionjubilacionvejez.'</td>'
                      .'<td>'.$privacion->cuantofueelpago.'</td>'
                      .'<td>'.$bolitaint.'</td>    
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores privacion 7
        if($idprivacion == 8){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>gestiono permiso laboral en ministerio</th>
                        <th>cotizando actualmente fondo pensiones</th>
                        <th>Color Privacion</th>';      
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     Privacion 8: Empleo informal
                     </h3><br>
                     <p>En el hogar hay privación cuando los integrantes que se encuentran empleados no están afiliados al fondo de pensión.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimension.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        foreach ($listaprivacion as $privacion)
        {
          if($privacion->colorprivacionDIP == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
         
                $privacionresul .= '<tr>'
                      .'<td>'.$privacion->nombreintegrante.'</td>'
                      .'<td>'.$privacion->edad.'</td>'
                      .'<td>'.$privacion->sexo.'</td>'
                      .'<td>'.$privacion->gestionopermisolaboralenministerio.'</td>'
                      .'<td>'.$privacion->cotizandoactualmentefondopensiones.'</td>'
                      .'<td>'.$bolitaint.'</td>    
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores privacion 8
         if($idprivacion == 9){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>afiliado a seguridad social ensalud</th>
                        <th>Color Privacion</th>';      
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     Privacion 9: Sin aseguramiento en salud
                     </h3><br>
                     <p>En el hogar hay privación cuando algún integrante del hogar no esta afiliado, es cotizante o beneficiario de alguna entidad de seguridad social en salud.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimension.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        foreach ($listaprivacion as $privacion)
        {
          if($privacion->colorprivacionDIP == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
         
                $privacionresul .= '<tr>'
                      .'<td>'.$privacion->nombreintegrante.'</td>'
                      .'<td>'.$privacion->edad.'</td>'
                      .'<td>'.$privacion->sexo.'</td>'
                      .'<td>'.$privacion->afiliadoseguridadsocialensalud.'</td>'
                      .'<td>'.$bolitaint.'</td>    
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores privacion 9
         if($idprivacion == 10){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>que hizo al presentar problemas de salud</th>
                        <th>Color Privacion</th>';      
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     Privacion 10: Barreras de acceso a servicio de salud dada una necesidad
                     </h3><br>
                     <p>En el hogar hay privación cuando los integrantes que en el último mes presentaron algún problema de salud, no acudieron a ningún servicio institucional de salud.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimension.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        foreach ($listaprivacion as $privacion)
        {
          if($privacion->colorprivacionDIP == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
         
                $privacionresul .= '<tr>'
                      .'<td>'.$privacion->nombreintegrante.'</td>'
                      .'<td>'.$privacion->edad.'</td>'
                      .'<td>'.$privacion->sexo.'</td>'
                      .'<td>'.$privacion->quehizoalpresentarproblemasdesalud.'</td>'
                      .'<td>'.$bolitaint.'</td>    
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores privacion 10
         if($idprivacion == 11){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>agua para consumo la optienen</th>
                        <th>Color Privacion</th>';      
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     Privacion 11: Sin acceso a fuente de agua mejorada
                     </h3><br>
                     <p>En el hogar hay privación cuando no existe conexión a un acueducto público, comunal o veredal.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimension.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        foreach ($listaprivacion as $privacion)
        {
          if($privacion->colorprivacionDIP == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
         
                $privacionresul .= '<tr>'
                      .'<td>'.$privacion->nombreintegrante.'</td>'
                      .'<td>'.$privacion->edad.'</td>'
                      .'<td>'.$privacion->sexo.'</td>'
                      .'<td>'.$privacion->aguaparaconsumolaoptienen.'</td>'
                      .'<td>'.$bolitaint.'</td>    
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores privacion 11
         if($idprivacion == 12){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>tiene alcantarillado</th>
                        <th>el servicio sanitario es</th>
                        <th>Color Privacion</th>';      
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     Privacion 12: Inadecuada eliminacion de excretas
                     </h3><br>
                     <p>En el hogar hay privación cuando no existe conexión de alcantarillado o cuando no hay servicio sanitario.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimension.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        foreach ($listaprivacion as $privacion)
        {
          if($privacion->colorprivacionDIP == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
         
                $privacionresul .= '<tr>'
                      .'<td>'.$privacion->nombreintegrante.'</td>'
                      .'<td>'.$privacion->edad.'</td>'
                      .'<td>'.$privacion->sexo.'</td>'
                      .'<td>'.$privacion->tienealcantarillado.'</td>'
                      .'<td>'.$privacion->elserviciosanitarioes.'</td>'
                      .'<td>'.$bolitaint.'</td>    
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores privacion 12
         if($idprivacion == 13){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>material predominante de los pisos</th>
                        <th>Color Privacion</th>';      
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     Privacion 13: Pisos inadecuados
                     </h3><br>
                     <p>En el hogar hay privación cuando el material de los pisos es tierra. </p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimension.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        foreach ($listaprivacion as $privacion)
        {
          if($privacion->colorprivacionDIP == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
         
                $privacionresul .= '<tr>'
                      .'<td>'.$privacion->nombreintegrante.'</td>'
                      .'<td>'.$privacion->edad.'</td>'
                      .'<td>'.$privacion->sexo.'</td>'
                      .'<td>'.$privacion->materialpredominantedelospisos.'</td>'
                      .'<td>'.$bolitaint.'</td>    
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores privacion 13
         if($idprivacion == 14){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>material predominante paredes exteriores</th>
                        <th>Color Privacion</th>';      
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     Privacion 14: Paredes exteriores inadecuada
                     </h3><br>
                     <p>En el hogar hay privación cuando el material de las paredes exteriores es diferente a bloque, ladrillo, piedra, bahareque y material prefabricado.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimension.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        foreach ($listaprivacion as $privacion)
        {
          if($privacion->colorprivacionDIP == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
         
                $privacionresul .= '<tr>'
                      .'<td>'.$privacion->nombreintegrante.'</td>'
                      .'<td>'.$privacion->edad.'</td>'
                      .'<td>'.$privacion->sexo.'</td>'
                      .'<td>'.$privacion->materialpredominanteparedesexteriores.'</td>'
                      .'<td>'.$bolitaint.'</td>    
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores privacion 14
         if($idprivacion == 15){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>total integrantes folio</th>
                        <th>total cantidad cuartos</th>
                        <th>total integrantes por cuarto</th>
                        <th>Color Privacion</th>';      
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     Privacion 15: Hacinamiento critico
                     </h3><br>
                     <p>En el hogar hay privación cuando el número de integrantes por cada cuarto para dormir es igual o superior a 3  personas por cuarto.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimension.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        foreach ($listaprivacion as $privacion)
        {
          if($privacion->colorprivacionDIP == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
         
                $privacionresul .= '<tr>'
                      .'<td>'.$privacion->nombreintegrante.'</td>'
                      .'<td>'.$privacion->edad.'</td>'
                      .'<td>'.$privacion->sexo.'</td>'
                      .'<td>'.$privacion->totalintegrantesfolio.'</td>'
                      .'<td>'.$privacion->totalcantidadcuartos.'</td>'
                      .'<td>'.$privacion->totalintegrantesporcuarto.'</td>'
                      .'<td>'.$bolitaint.'</td>    
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores privacion 15
        if($idprivacion == 16){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>total integrantes folio</th>
                        <th>total ganacia mensual</th>
                        <th>total ganacia anual</th>
                        <th>total anual promedio mes</th>
                        <th>indice tradicional ingreso</th>
                        <th>Color Privacion</th>';      
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     Privacion 16: Indice tradicional de ingresos
                     </h3><br>
                     <p>En el hogar hay privación cuando el ingreso per cápita, es decir la suma resultante de todos los ingresos que genera o a los que accede el hogar dividido el número de integrantes es inferior a la línea de pobreza extrema per cápita definida por el Dane y que se actualiza anualmente.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimension.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        foreach ($listaprivacion as $privacion)
        {
          if($privacion->colorprivacionDIP == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
         
                $privacionresul .= '<tr>'
                      .'<td>'.$privacion->nombreintegrante.'</td>'
                      .'<td>'.$privacion->edad.'</td>'
                      .'<td>'.$privacion->sexo.'</td>'
                      .'<td>'.$privacion->totalintegrantes.'</td>'
                      .'<td>'.$privacion->totalmensual.'</td>'
                      .'<td>'.$privacion->totalanual.'</td>'
                      .'<td>'.$privacion->totalanualmes.'</td>'
                      .'<td>'.$privacion->indicetradicionalingreso.'</td>'
                      .'<td>'.$bolitaint.'</td>    
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores privacion 16
        //Armar tabla//
        $tabla = '<div class="panel-body">
                             <p>'.$texto.'</p>
                           </div>
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        '.$columnas.'
                                    </tr>
                                </thead>

                                <tbody>
                                    '.$privacionresul.'
                                </tbody>
                            </table>
                            </div>';
        
//        fin armar tabla
       
       //ESTO LEVANTA LA VISTA     
        $titulo = 'v_privaciones'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/privaciones/'.$page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head' => HEAD1, 'botoneral' => BOTONERALOGROS, 'privacion' => $privacionresul, 'folio' => $folio, 'doccogestor' => $doccogestor, 'foexiste' =>$foexiste, 'iddimen' => $iddimension, 'idpriva' => $idprivacion,'tabla' => $tabla,'colordimen' => $colordimension));
        //FIN LEVANTA LA VISTA
     }
     
      
}
