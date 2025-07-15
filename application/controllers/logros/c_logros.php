<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/////////////// NUEVO LOGIN ///////////////////////////
class C_logros extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('/logros/m_logros');
    }

     //funcion encargada de llamar a la vista de la pagina 
    public function fc_logros($page = 'v_logros') {

        if (!file_exists('application/views/pages/logros/'. $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        //INICIO TRAER DATOS DEL TITULAR
        $idlogro = $this->input->get('idlogro');
        $iddimension = $this->input->get('iddimension');
        $doccogestor = $this->input->get('doccogestor');
        $folio = $this->input->get('folio');
        $colordimension = $this->input->get('colordimension');
        $colordimensionPF = $this->input->get('colordimensionPF');
        $vbleborde = '';
        if($colordimensionPF == 'FFFFFF'){
            $vbleborde = ';border: 1px solid #555';
            $colordimensionPF = $colordimensionPF.$vbleborde;
        }
        
        //tomamos el valor del folio que viene por get
      //  $idintegrante = $this->input->get('idintegrante');
        
        //validar si el folio existe
        $folioexiste = $this->m_logros->fm_folioexiste($folio);//lo mandasmos a la funcion del modelo para verificar
        
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
        $listarpaises = $this->m_logros->fm_listarpaises();
        
        $paises= '';
        
        foreach ($listarpaises as $valpaises)
        {
            //se guarda el resultado del ption value en la variable datos
            $paises .='<option value="'.$valpaises->nombrepais.'">'.$valpaises->nombrepais.'</option>'; 
        }
        //traer una lista de valores
        $listalogro = $this->m_logros->fm_logroresultado($folio,$idlogro);
        $logroresul = ''; 
        // $colorlogroint = ''; 
        $bolitaint = '';
        $bolitaintPF = '';
        $tabla = '';
        
        if($idlogro == 1){
            
          $columnas = '<th>Nombre del integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>documento de identidad</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
          $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 1: Los niños y niñas menores de 7  años tienen Registro civil
                     </h3><br>
                     <p>Es ROJO cuando el integrante no tiene el documento de identidad correspondiente a su edad</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
        // chacha
        if($logro->colorlogroPF == 0)
        {
                // $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES">&nbsp;</span>';            
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B">&nbsp;</span>';            
                }        
        // fin chacha                
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->registrocivil.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>    
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 1
        if($idlogro == 2){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>documento de identidad</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';

          $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 2: Los niños, niñas y adolescentes entre 7 y 17 años tienen Tarjeta de identidad
                     </h3><br>
                     <p>Es ROJO cuando el integrante no tiene el documento de identidad correspondiente a su edad</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // chacha
                if($logro->colorlogroPF == 0)
        {
                // $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';    
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES">&nbsp;</span>';    
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES">&nbsp;</span>';
                }
        else if($logro->colorlogroPF == 5)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;border: 1px solid #555;background: #FFFFFF" onclick="modalpreguntasrecalculologro2('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.','.$logro->edad.')" title="Preguntas para el recalculo del logro">&nbsp;</span>';
                //$bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';    
                }        
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                } 
                // fin chacha
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->tarjetaidentidad.'</td>'
                      .'<td>'.$bolitaint.'</td>'    
                      .'<td>'.$bolitaintPF.'</td>        
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 2
        if($idlogro == 3){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>documento de identidad</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 3: Los mayores de 18 años tienen cédula o contraseña certificada
                     </h3><br>
                     <p>Es ROJO cuando el integrante no tiene el documento de identidad correspondiente a su edad</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                // $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES">&nbsp;</span>';      
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES">&nbsp;</span>';
                }
        else if($logro->colorlogroPF == 5)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;border: 1px solid #555;background: #FFFFFF" onclick="modalpreguntasrecalculologro3('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.','.$logro->edad.')" title="Preguntas para el recalculo del logro">&nbsp;</span>';
                //$bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';    
                }        
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                } 
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->cedulaciudadania.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 3
        if($idlogro == 4){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>víctima conflictoarmado</th>
                        <th>declaro ante autoridades</th>
                        <th>reconocido como víctima</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
               
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 4: La población victima del conflicto armado cuenta con registro RUV
                     </h3><br>
                     <p>La persona que manifiesta ser victima debe contar con el el Registro Único de Víctimas (RUV) otorgado por una autoridad competente como: Unidad de Atención y Reparación Integral a las Víctimas (UARIV), Unidad de Restitución de Tierras, Procuraduría General de la Nación, Defensoría del Pueblo, Unidad Nacional de Protección y Fiscalía General de la Nación.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                if($logro->colorlogroPF == 0)
        {
                 $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcfaz('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';   
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportdificulcfaz('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                } 
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->victimaconflictoarmado.'</td>'
                      .'<td>'.$logro->declaroanteautoridades.'</td>'
                      .'<td>'.$logro->reconocidocomovictiva.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores logro 4        
        if($idlogro == 5){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>Libreta militar</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 5: Los hombres entre 18 y 50 años tienen resuelta la situacion militar
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';       
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulaz('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';    
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportdificulaz('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else if($logro->colorlogroPF == 5)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;border: 1px solid #555;background: #FFFFFF" onclick="modalpreguntasrecalculologro5('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.','.$logro->edad.')" title="Preguntas para el recalculo del logro">&nbsp;</span>';
                //$bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';    
                }        
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA 
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->libretamilitar.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 5
        if($idlogro == 6){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>Sisbenizado</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 6: Los integrantes del hogar están incluídos en el SISBÉN
                     </h3><br>
                     <p>Aunque el hogar manifieste estar sisbenizado el movimiento del logro dependerá de la validación con la base de datos certificada del SISBEN (Sistema de Potenciales Beneficiarioas para Programas Sociales).</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';  
        
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
               $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                if($logro->colorlogroPF == 0)
        {
                 $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por CRUCE INSTITUCIONAL o DIFICULTAD PARA ALCANZARLO, pero puede GESTIONAR OPORTUNIDADES">&nbsp;</span>';   
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades -- (el logro solo se mueve por cruce institucional)">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por CRUCE INSTITUCIONAL o DIFICULTAD PARA ALCANZARLO, pero puede GESTIONAR OPORTUNIDADES">&nbsp;</span>';   
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                } 
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->sisbenizado.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 6
        if($idlogro == 7){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>actividad semana pasada</th>
                        <th>cual actividad semana pasada</th>
                        <th>actividad paga semana pasada</th>
                        <th>que hizo para conseguir trabajo</th>
                        <th>que fue lo que hizo para conseguir trabajo</th>
                        <th>disponible para trabajar</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 7: Las personas entre 18 a 65 años que lo requieren acceden a empleo.
                     </h3><br>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101">&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                if($logro->colorlogroPF == 0)
        {
               $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>'; 
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else if($logro->colorlogroPF == 5)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;border: 1px solid #555;background: #FFFFFF" onclick="modalpreguntasrecalculologro7('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.','.$logro->edad.')" title="Preguntas para el recalculo del logro">&nbsp;</span>';
                //$bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';    
                }        
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->actividadsemanapasada.'</td>'
                      .'<td>'.$logro->actividadsemanapasadacual.'</td>'
                      .'<td>'.$logro->actividadpagasemanapasada.'</td>'
                      .'<td>'.$logro->quehizoparaconseguirtrabajo.'</td>'
                      .'<td>'.$logro->quehizoparaconseguirtrabajocual.'</td>'
                      .'<td>'.$logro->disponibleparatrabajar.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores logro 7
        if($idlogro == 8){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>		
                        <th>curso para el trabajo</th>
                        <th>cual curso para el trabajo</th>
                        <th>certificandose competencia laboral</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 8: Los hombres y las mujeres entre 15 y 65 años que lo requieren acceden a certificación de competencias laborales o  formación para el trabajo
                     </h3><br>
                     <p>Requieren capacitación para el trabajo las personas que en los dos últimos años no han tomado ningún curso ni se han certificado.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>'; 
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else if($logro->colorlogroPF == 5)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;border: 1px solid #555;background: #FFFFFF" onclick="modalpreguntasrecalculologro8('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.','.$logro->edad.')" title="Preguntas para el recalculo del logro">&nbsp;</span>';
                //$bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';    
                }                 
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->cursoparaeltrabajo.'</td>'
                      .'<td>'.$logro->cursoparaeltrabajocual.'</td>'
                      .'<td>'.$logro->certificandosecompetencialaboral.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 8
          if($idlogro == 9){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>negocio o espectativa de negocio</th>
                        <th>actualmente tiene</th>
                        <th>negocio registrado</th>
                        <th>recibio apoyo para unidad productiva</th>
                        <th>credito entidad financiera</th>
                        <th>credito pagadiario</th>
                        <th>recursos propios</th>
                        <th>credito fondos emprendimiento</th>
                        <th>donaciones</th>
                        <th>subsidios</th>
                        <th>otros</th>
                        <th>otros. ¿Cuales?</th>
                        <th>ninguna</th>
                        <th>no necesita financiamiento</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 9: Los hombres y las mujeres entre 18 y 65 años que lo requieran acceden a orientación a emprendimientos o fortalecimiento de Unidades Productivas.
                     </h3><br>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>'; 
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else if($logro->colorlogroPF == 5)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;border: 1px solid #555;background: #FFFFFF" onclick="modalpreguntasrecalculologro9('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.','.$logro->edad.')" title="Preguntas para el recalculo del logro">&nbsp;</span>';
                //$bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';    
                }         
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->negociooespectativadenegocio.'</td>'
                      .'<td>'.$logro->actualmentetiene.'</td>'
                      .'<td>'.$logro->negocioregistrado.'</td>'
                    //  .'<td>'.$logro->ultimafecharenovacionregistro.'</td>'
                    //  .'<td>'.$logro->tiempofuncionandonegocio.'</td>'
                      .'<td>'.$logro->recibioapoyoparaunidadproductiva.'</td>'
                      .'<td>'.$logro->creditoentidadfinanciera.'</td>'
                      .'<td>'.$logro->creditopagadiario.'</td>'
                      .'<td>'.$logro->recursospropios.'</td>'
                      .'<td>'.$logro->creditofondosemprendimiento.'</td>'
                      .'<td>'.$logro->donaciones.'</td>'
                      .'<td>'.$logro->subsidios.'</td>'
                      .'<td>'.$logro->otros.'</td>'
                      .'<td>'.$logro->otroscuales.'</td>'
                      .'<td>'.$logro->ninguna.'</td>'
                      .'<td>'.$logro->nonecesitafinanciamiento.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores logro 9
if($idlogro == 10){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>trabajo infantil</th>
                        <th>gestiono permiso laboral en ministerio</th>
                        <th>actividades del menor (ninguna)</th>
                        <th>ayuda en negocio o cultivos (no ayudo anadie)</th>
                        <th>cuanto tiempo a la semana</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 10: Ningún niño, niña o adolescente entre 5 y 14  años  está vinculado a actividades laborales y ningún adolescente entre 15 y 17 años realiza trabajo sin permiso del Ministerio de trabajo
                     </h3><br>
                     <p>Es rojo cuando el hogar manifiesta que en su dinámica familiar hay trabajo infantil o cuando en el hogar se observan actividades como: ventas ambulantes, mendicidad, explotación sexual, entre otras. Además, cuando  el menor ayuda a padres o adultos en actividades por más de 15 horas a la semana.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                if($logro->colorlogroPF == 0)
        {
                 $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportpreval('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.','.$logro->edad.')" title="El logro solo se mueve por PREGUNTAS DE VALIDACIÓN o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';   
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';   
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportpreval('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.','.$logro->edad.')" title="El logro solo se mueve por PREGUNTAS DE VALIDACIÓN o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';   
                }
        else if($logro->colorlogroPF == 5)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;border: 1px solid #555;background: #FFFFFF" onclick="modalpreguntasrecalculologro10('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.','.$logro->edad.')" title="Preguntas para el recalculo del logro">&nbsp;</span>';
                //$bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';    
                } 
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->trabajoinfantil.'</td>'
                      .'<td>'.$logro->gestionopermisolaboralenministerio.'</td>'         
                      .'<td>'.$logro->ninguna.'</td>'  
                      .'<td>'.$logro->noayudoanadie.'</td>'
                      .'<td>'.$logro->cuantotiempoalasemana.'</td>'    
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores logro 10

          if($idlogro == 11){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>actualmente estudia</th>
                        <th>nivel educativo mas alto</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 11: Los menores en edad escolar (desde los 5 hasta los 17 años) que no hayan terminado el ciclo básico o media, están siendo atendidos por el servicio educativo formal
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>'; 
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else if($logro->colorlogroPF == 5)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;border: 1px solid #555;background: #FFFFFF" onclick="modalpreguntasrecalculologro11('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.','.$logro->edad.')" title="Preguntas para el recalculo del logro">&nbsp;</span>';
                //$bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';    
                }                
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->actualmenteestudia.'</td>'
                      .'<td>'.$logro->niveleducativomasalto.'</td>'
                    //  .'<td>'.$logro->ultimogradoaprovado.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores logro 11
                if($idlogro == 12){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>sabe leer y escribir</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 12: Las personas mayores de 15 años y más saben leer y escribir
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E">&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportverifcog12('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';         
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportverifcog12('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';         
                }
        else if($logro->colorlogroPF == 5)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;border: 1px solid #555;background: #FFFFFF" onclick="modalpreguntasrecalculologro12('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.','.$logro->edad.')" title="Preguntas para el recalculo del logro">&nbsp;</span>';
                //$bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';    
                }        
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->sabeleeryescribir.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores logro 12
        if($idlogro == 13){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>nivel educativo mas alto</th>
                        <th>ultimo grado</th>
                        <th>actualmente estudia</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 13: Los adultos entre 18 y 65 años que no  hayan terminado el ciclo media (11 ) y no esten estudiando, se vinculan al sistema educativo
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else if($logro->colorlogroPF == 5)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;border: 1px solid #555;background: #FFFFFF" onclick="modalpreguntasrecalculologro13('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.','.$logro->edad.')" title="Preguntas para el recalculo del logro">&nbsp;</span>';
                //$bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';    
                }        
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->niveleducativomasalto.'</td>'
                      .'<td>'.$logro->ultimogrado.'</td>'
                      .'<td>'.$logro->actualmenteestudia.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores logro 13
        if($idlogro == 14){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>nivel educativo mas alto</th>
                        <th>ultimo nivel cursado</th>
                        <th>actualmente estudia</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 14: Una vez concluido el ciclo básico o media, quienes lo deseen, se vinculan a la educación técnica, tecnológica o universitaria
                     </h3><br>
                     <p>Es rojo cuando las personas culminaron el grado 9° o 11°, no se encuentran estudiando actualmente y no cuentan con ningún titulo técnico, tecnológico o universitario.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoporvali3('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoporvali3('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->niveleducativomasalto.'</td>'
                      .'<td>'.$logro->ultimogradoaprovado.'</td>'
                      .'<td>'.$logro->actualmenteestudia.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores logro 14
        if($idlogro == 15){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>donde permanece el menor</th>
                        <th>asiste hogar comuniario</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 15: Los niños y niñas menores de 5 años están vinculados a algún programa de atención integral en cuidado, nutrición y educación inicial
                     </h3><br>
                     <p>Tienen el logro en rojo los menores que no asisten a un hogar comunitario, guardería, preescolar privado o al programa Buen Comienzo.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->dondepermaneceelmenor.'</td>'
                      .'<td>'.$logro->asistehogarcomuniario.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
                    
         }
         }
        //fin traer una lista de valores logro 15
        if($idlogro == 16){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>afiliado seguridad social en salud</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 16: Los integrantes  del hogar están afiliados al Sistema General de Seguridad Social en Salud SGSS
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoporvali1('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                //$bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>'; 
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoporvali1('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';        
                //$bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->afiliadoseguridadsocialensalud.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 16
        if($idlogro == 17){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>vacunacion</th>
                        <th>atencion preventiva en salud oral</th>
                        <th>toma de presion arterial</th>
                        <th>diabetes mellitus</th>
                        <th>Tamizaje visual</th>
                        <th>crecimiento y desarrollo</th>
                        <th>no le interesa</th>
                        <th>otro</th>
                        <th>ninguno</th>
                        <th>cual</th>
                        <th>asistio crecimiento y desarrollo</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 17: Los integrantes del hogar acceden a las intervenciones de promoción y prevención en salud en el marco SGSSS
                     </h3><br>
                     <p>Es rojo cuando el integrante manifiesta no haber asistido en el último año a: vacunación, salud oral, control diabetes mellitus, tamizaje visual, toma de presión arterial o a otro programa de promocion en salud.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
         $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoporvali1('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>'; 
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoporvali1('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->vacunacion.'</td>'
                      .'<td>'.$logro->atencionpreventivaensaludoral.'</td>'
                      .'<td>'.$logro->tomadepresionarterial.'</td>'
                      .'<td>'.$logro->diabetesmellitus.'</td>'
                      .'<td>'.$logro->Tamizajevisual.'</td>'
                      .'<td>'.$logro->crecimientoydesarrollo.'</td>'
                      .'<td>'.$logro->noleinteresa.'</td>'
                      .'<td>'.$logro->otro.'</td>'
                      .'<td>'.$logro->ninguno.'</td>'
                      .'<td>'.$logro->cual.'</td>'
                      .'<td>'.$logro->asistiocrecimientoydesarrollo.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 17
        if($idlogro == 18){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>ligadura de trompas o cirugia</th>
                        <th>pildora o pastilla</th>
                        <th>diu</th>
                        <th>inyeccion</th>
                        <th>implante subdermico</th>
                        <th>condon femenino</th>
                        <th>espuma jalea ovulos</th>
                        <th>metodos naturales</th>
                        <th>anticoncepcion de emergencia</th>
                        <th>vasectomia</th>
                        <th>preservativo o condon</th>
                        <th>otros</th>
                        <th>ninguno</th>
                        <th>cual ?</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 18: Los adolescentes y adultos, de ambos sexos, conocen los métodos de planificación familiar recomendados  (Protección especifica)
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportpreval18('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por PREGUNTAS DE VALIDACIÓN o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';   
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportpreval18('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por PREGUNTAS DE VALIDACIÓN o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';   
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->ligaduradetrompasocirugia.'</td>'
                      .'<td>'.$logro->pildoraopastilla.'</td>'
                      .'<td>'.$logro->diu.'</td>'
                      .'<td>'.$logro->inyeccion.'</td>'
                      .'<td>'.$logro->implantesubdermico.'</td>'
                      .'<td>'.$logro->condonfemenino.'</td>'
                      .'<td>'.$logro->espumajaleaovulos.'</td>'
                      .'<td>'.$logro->metodosnaturales.'</td>'
                      .'<td>'.$logro->anticoncepciondeemergencia.'</td>'
                      .'<td>'.$logro->vasectomia.'</td>'
                      .'<td>'.$logro->preservativoocondon.'</td>'
                      .'<td>'.$logro->otros.'</td>'
                      .'<td>'.$logro->ninguno.'</td>'
                      .'<td>'.$logro->cual.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
       // fin traer una lista de valores logro 18
         if($idlogro == 19){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>carné de vacunas</th>
                        <th>esquema vacunas</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 19: Todos los niños y niñas  de 0 a 6 años del hogar tienen el esquema completo de vacunación 
                     </h3><br>
                     <p>El integrante debe tener el carné de vacunas con su esquema de vacunación completo de acuerdo a su edad.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o por DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';      
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o por DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';      
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->carnetdevacunas.'</td>'
                      .'<td>'.$logro->esquemavacunas.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 19
        if($idlogro == 20){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>actualmente esta embarazada</th>
                        <th>asiste a controles</th>
                        <th>hierro</th>
                        <th>calcio</th>
                        <th>acidofolico</th>
                        <th>otro</th>
                        <th>ninguno</th>
                        <th>cual</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 20: Las gestantes del hogar están inscritas , reciben suplemento alimentario según el criterio mèdico y asisten a los controles prenatales.  Y las lactantes acceden a algún complemento alimentario
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o por DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';      
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o por DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';      
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->actualmenteesta.'</td>'
                      .'<td>'.$logro->asisteacontroles.'</td>'
                      .'<td>'.$logro->hierro.'</td>'
                      .'<td>'.$logro->calcio.'</td>'
                      .'<td>'.$logro->acidofolico.'</td>'
                      .'<td>'.$logro->otro.'</td>'
                      .'<td>'.$logro->ninguno.'</td>'
                      .'<td>'.$logro->cual.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 20
        if($idlogro == 21){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>asiste a crecimiento y desarrollo</th>
                        <th>no hay citas disponibles</th>
                        <th>no tiene recusrsos</th>
                        <th>no tenia conocimiento</th>
                        <th>otro</th>
                        <th>no le interesa</th>
                        <th>cual</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 21: Los menores de 10 años de la familia están inscritos y asisten a consultas para la detección temprana de alteraciones de crecimiento y desarrollo
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o por DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';    
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o por DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                } 
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->asisteacrecimientoydesarrollo.'</td>'
                      .'<td>'.$logro->nohaycitasdisponibles.'</td>'
                      .'<td>'.$logro->notienerecusrsos.'</td>'
                      .'<td>'.$logro->noteniaconocimiento.'</td>'
                      .'<td>'.$logro->otro.'</td>'
                      .'<td>'.$logro->noleinteresa.'</td>'
                      .'<td>'.$logro->cual.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 21
        if($idlogro == 22){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>citologia vaginal</th>
                        <th>conocio resultado</th>
                        <th>auto examen de seno cada mes</th>
                        <th>examen clinico de seno</th>
                        <th>ecografia mamaria</th>
                        <th>mamografia</th>
                        <th>ninguna</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 22: Las mujeres del hogar  de  12 a 69 años asisten a los programas de tamizaje de cáncer de cuello uterino y seno al menos una vez al año; y conocen los resultados
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
         $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoporvali3('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';    
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoporvali3('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else if($logro->colorlogroPF == 5)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;border: 1px solid #555;background: #FFFFFF" onclick="modalpreguntasrecalculologro22('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.','.$logro->edad.')" title="Preguntas para el recalculo del logro">&nbsp;</span>';
                //$bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';    
                }        
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->citologiavaginal.'</td>'
                      .'<td>'.$logro->conocioresultado.'</td>'
                      .'<td>'.$logro->autoexamendesenocadames.'</td>'
                      .'<td>'.$logro->examenclinicodeseno.'</td>'
                      .'<td>'.$logro->ecografiamamaria.'</td>'
                      .'<td>'.$logro->mamografia.'</td>'
                      .'<td>'.$logro->ninguna.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 22
        if($idlogro == 23){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>tamizaje de cancer de prostata</th>
                        <th>noconocia este examen</th>
                        <th>no sabe donde prestan el servicio</th>
                        <th>el examen es muy caro</th>
                        <th>dificultad geografica</th>
                        <th>no se siente enfermo</th>
                        <th>por pena</th>
                        <th>descuido</th>
                        <th>por miedo</th>
                        <th>no es importante</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 23: Los hombres del hogar mayores de 49 años asisten a los programas de tamizaje de próstata
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else if($logro->colorlogroPF == 5)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;border: 1px solid #555;background: #FFFFFF" onclick="modalpreguntasrecalculologro23('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.','.$logro->edad.')" title="Preguntas para el recalculo del logro">&nbsp;</span>';
                //$bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';    
                }        
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->tamizajedecancerdeprostata.'</td>'
                      .'<td>'.$logro->noconociaesteexamen.'</td>'
                      .'<td>'.$logro->nosabedondeprestanelservicio.'</td>'
                      .'<td>'.$logro->elexamenesmuycaro.'</td>'
                      .'<td>'.$logro->dificultadgeografica.'</td>'
                      .'<td>'.$logro->nosesienteenfermo.'</td>'
                      .'<td>'.$logro->porpena.'</td>'
                      .'<td>'.$logro->descuido.'</td>'
                      .'<td>'.$logro->pormiedo.'</td>'
                      .'<td>'.$logro->noesimportante.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 23
        if($idlogro == 24){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>se quedaron sin dinero</th>
                        <th>no pudo variar alimentacion</th>
                        <th>se quedaron sin alimentos</th>
                        <th>dejo de desayunar</th>
                        <th>no comio por falta de dinero</th>
                        <th>comio una sola vez al dia</th>
                        <th>se acosto con hambre</th>
                        <th>joven sin alimentacion nutritiva</th>
                        <th>joven no pudo variar alimentacion</th>
                        <th>joven con alimentacion disminuida</th>
                        <th>joven se quejo de hambre</th>
                        <th>joven se acosto con hambre</th>
                        <th>joven comio una sola vez</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 24: El hogar cuenta con recursos para el acceso y consumo de alimentos
                     </h3><br>
                     <p>Este logro estará en rojo cuando el hogar  presenta dificultades para el acceso y consumo de alimentos según las preguntas de las Escala Latinoamericana y Caribeña  de Seguridad Alimentaria. (ELCSA)</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportpreval24('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por PREGUNTAS DE VALIDACIÓN, pero puede gestionar oportunidades">&nbsp;</span>';   
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58>&nbsp;</span>';   
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513"onclick="modalescogeropcionoportpreval24('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por PREGUNTAS DE VALIDACIÓN, pero puede gestionar oportunidades">&nbsp;</span>';
                }        
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->sequedaronsindinero.'</td>'
                      .'<td>'.$logro->nopudovariaralimentacion.'</td>'
                      .'<td>'.$logro->sequedaronsinalimentos.'</td>'
                      .'<td>'.$logro->dejodedesayunar.'</td>'
                      .'<td>'.$logro->nocomioporfaltadedinero.'</td>'
                      .'<td>'.$logro->comiounasolavezaldia.'</td>'
                      .'<td>'.$logro->seacostoconhambre.'</td>'
                      .'<td>'.$logro->jovensinalimentacionnutritiva.'</td>'
                      .'<td>'.$logro->jovennopudovariaralimentacion.'</td>'
                      .'<td>'.$logro->jovenconalimentaciondisminuida.'</td>'
                      .'<td>'.$logro->jovensequejodehambre.'</td>'
                      .'<td>'.$logro->jovenseacostoconhambre.'</td>'
                      .'<td>'.$logro->jovencomiounasolavez.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 24
        if($idlogro == 25){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>agua para consumo la obtienen</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 25: La vivienda cuenta con abastecimiento de agua potable
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o por DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';      
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';   
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o por DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';      
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                } 
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                    //  .'<td>'.$logro->energiaelectrica.'</td>'
                    //  .'<td>'.$logro->alcantarillado.'</td>'
                    //  .'<td>'.$logro->acueducto.'</td>'
                    //  .'<td>'.$logro->gasnaturaldomiciliario.'</td>'
                    //  .'<td>'.$logro->recolecciondebasuras.'</td>'
                    //  .'<td>'.$logro->ningunservicio.'</td>'
                      .'<td>'.$logro->aguaparaconsumolaobtienen.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 25
        if($idlogro == 26){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>energia electrica</th>
                        <th>alcantarillado</th>
                        <th>acueducto</th>
                        <th>gas natural domiciliario</th>
                        <th>recoleccion de basuras</th>
                        <th>ningunservicio</th>
                        <th>servicio sanitario es</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 26: La vivienda cuenta con un sistema de desagües
                     </h3><br>
                     <p>El hogar debe tener conexión a alcantarillado y servicio sanitario.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                //CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';   
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->energiaelectrica.'</td>'
                      .'<td>'.$logro->alcantarillado.'</td>'
                      .'<td>'.$logro->acueducto.'</td>'
                      .'<td>'.$logro->gasnaturaldomiciliario.'</td>'
                      .'<td>'.$logro->recolecciondebasuras.'</td>'
                      .'<td>'.$logro->ningunservicio.'</td>'
                      .'<td>'.$logro->serviciosanitarioes.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 26
        if($idlogro == 27){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>energia electrica</th>
                        <th>alcantarillado</th>
                        <th>acueducto</th>
                        <th>gas natural domiciliario</th>
                        <th>recoleccion de basuras</th>
                        <th>ningunservicio</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 27: La vivienda cuenta con dotación de un sistema de energía convencional
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                //CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->energiaelectrica.'</td>'
                      .'<td>'.$logro->alcantarillado.'</td>'
                      .'<td>'.$logro->acueducto.'</td>'
                      .'<td>'.$logro->gasnaturaldomiciliario.'</td>'
                      .'<td>'.$logro->recolecciondebasuras.'</td>'
                      .'<td>'.$logro->ningunservicio.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 27
        if($idlogro == 28){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>espacios diferenciados de bano,cocina y dormitorios</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 28: La vivienda cuenta con espacios diferenciados de baño, cocina, y dormitorios
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                 $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportverifcog12('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';              
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';       
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportverifcog12('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';              
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->espaciosdiferenciados.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 28
        if($idlogro == 29){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>total integrantes por hogar</th>
                        <th>total cantidad de cuartos</th>
                        <th>total integrantes por cuarto</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 29: En la vivienda no duermen tres o más personas en cada cuarto
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportverifcog12('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';               
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';       
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportverifcog12('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';               
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->totalintegrantesfolio.'</td>'
                      .'<td>'.$logro->totalcantidadcuartos.'</td>'
                      .'<td>'.$logro->totalintegrantesporcuarto.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 29
        if($idlogro == 30){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>material de los pisos</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 30: La vivienda no tiene pisos de tierra
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                //CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoporvali1('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoporvali1('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->materialdelospisos.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 30
        if($idlogro == 31){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>material paredes exteriores</th>
                        <th>estructura adecuada de la vivienda</th>
                        <th>no se visualizan columnas y vigas</th>
                        <th>se visualizan grietas</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 31: La vivienda posee paredes adecuadas que posibilitan la seguridad en la estructura fisica
                     </h3><br>
                     <p> la vivienda  debe contar con paredes de materiales adecuados y se debe observar una estructura con columnas, vigas y sin grietas.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoporvali1('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoporvali1('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->materialparedesexteriores.'</td>'
                      .'<td>'.$logro->estructuraadecuadadelavivienda.'</td>'
                      .'<td>'.$logro->nosevisualizancolumnasyvigas.'</td>'
                      .'<td>'.$logro->sevisualizangrietas.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 31
        if($idlogro == 32){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>la familia conoce la ruta sobre violencia</th>
                        <th>violencia intrafamiliar</th>
                        <th>violencia de genero</th>
                        <th>abuso sexual</th>
                        <th>busco ayuda institucional</th>
                        <th>apoyo de familiares</th>
                        <th>no implemento estrategias</th>
                        <th>otra</th>
                        <th>Cual ?</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 32: La familia accede a información y/o servicios de intervención de la violencia intrafamiliar 
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoporvali1('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoporvali1('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->recibiocapacitacionsobreviolencia.'</td>'
                      .'<td>'.$logro->violenciaintrafamiliar.'</td>'
                      .'<td>'.$logro->violenciadegenero.'</td>'
                      .'<td>'.$logro->abusosexual.'</td>'
                      .'<td>'.$logro->buscoayudainstitucional.'</td>'
                      .'<td>'.$logro->apoyodefamiliares.'</td>'
                      .'<td>'.$logro->noimplementoestrategias.'</td>'
                      .'<td>'.$logro->otra.'</td>'
                      .'<td>'.$logro->cual.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 32
        if($idlogro == 33){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>menores de 18</th>
                        <th>prohibiendoles lo que les gusta</th>
                        <th>conversando sobre la situacion</th>
                        <th>haciendoles saber lo que se espera de ellos</th>
                        <th>tratandolos con indiferencia</th>
                        <th>con gritos amenazas o insultos</th>
                        <th>pormedio del castigo fisico</th>
                        <th>no los corrigen</th>
                        <th>otra</th>
                        <th>otra. Cual ?</th>
                        <th>estrategias de motivación</th>
                        <th>no se implementan habitos y rutinas para la educación</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 33: El hogar con integrantes menores de 18 años aplica pautas de crianza humanizada para mejorar el entorno familiar
                     </h3><br>
                     <p>Se establecen como pautas de crianza humanizada la implementación de estrategias de motivación, hábitos y rutinas para la educación  y estrategias adecuadas para corregir o reprender a los niños, niñas y adolescentes.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportpreval33('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por PREGUNTAS DE VALIDACIÓN o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';         
        }                                    
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportpreval33('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por PREGUNTAS DE VALIDACIÓN o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';         
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->menoresde18.'</td>'
                      .'<td>'.$logro->prohibiendolesloquelesgusta.'</td>'
                      .'<td>'.$logro->conversandosobrelasituacion.'</td>'
                      .'<td>'.$logro->haciendolessaberloqueseesperadeellos.'</td>'
                      .'<td>'.$logro->tratandolosconindiferencia.'</td>'
                      .'<td>'.$logro->congritosamenazasoinsultos.'</td>'
                      .'<td>'.$logro->pormediodelcastigofisico.'</td>'
                      .'<td>'.$logro->noloscorrigen.'</td>'
                      .'<td>'.$logro->otrap1.'</td>'
                      .'<td>'.$logro->cualp1.'</td>'
                      .'<td>'.$logro->noseimplementanestrategias.'</td>'
                      .'<td>'.$logro->noseimplementanhabitosyrutinas.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 33
        if($idlogro == 34){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>No se genera ningun espacio de dialogo</th>
                        <th>No existen demostraciones de afecto</th>
                        <th>por acuerdos entre los integrantes del hogar</th>
                        <th>buscando apoyo de otros familiares o amigos</th>
                        <th>buscando ayudas de otras instituciones</th>
                        <th>por medio del castigo fisico</th>
                        <th>usando amenazas</th>
                        <th>otro</th>
                        <th>no se implementa ninguna estrategia</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 34: Las relaciones entre los integrantes del hogar, fortalecen la convivencia familiar
                     </h3><br>
                     <p>La convivencia familiar se fortalece por medio de espacios de diálogo, demostraciones de afecto, adecuada toma de decisiones y resolución de conflictos. Los hogares con un solo integrante tendrán el logro en rojo.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportpreval34('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por PREGUNTAS DE VALIDACIÓN o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';         
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportpreval34('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por PREGUNTAS DE VALIDACIÓN o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';         
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                    //  .'<td>'.$logro->tipologiadelafamilia.'</td>'
                      .'<td>'.$logro->Nosegeneraningunespaciodedialogo.'</td>'
                      .'<td>'.$logro->Noexistendemostracionesdeafecto.'</td>'
                      .'<td>'.$logro->poracuerdosentrelosintegrantesdelhogar.'</td>'
                      .'<td>'.$logro->buscandoapoyodeotrosfamiliaresoamigos.'</td>'
                      .'<td>'.$logro->buscandoayudasdeotrasinstituciones.'</td>'
                      .'<td>'.$logro->pormediodelcastigofisico.'</td>'
                      .'<td>'.$logro->usandoamenazas.'</td>'
                      .'<td>'.$logro->otrop7.'</td>'
                      .'<td>'.$logro->noseimplementaningunaestrategia.'</td>'
                   //   .'<td>'.$logro->cualp7.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 34
        if($idlogro == 35){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>es discapacitado</th>
                        <th>recibe rehabilitacion integral</th>
                        <th>recibio rehabilitacion integral</th>
                        <th>Cual es la rehabilitacion integral que recibe</th>
                        <th>Cual es la rehabilitacion integral que recibio</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 35: Las personas en situación de discapacidad acceden a los programas de rehabilitación integral de acuerdo a la discapacidad
                     </h3><br>
                     <p>La rehabilitación integral son las acciones dirigidas al individuo, a su familia y a su comunidad, desarrolladas en corresponsabilidad por los diferentes sectores: salud, educación, trabajo, cultura, recreación y deportes, comunicaciones y transporte, entre otros, con el objeto de facilitar la promoción, prevención, recuperación, rehabilitación e inclusión social de la población</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o por DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o por DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->esdiscapacitado.'</td>'
                      .'<td>'.$logro->reciberehabilitacionintegral.'</td>'
                      .'<td>'.$logro->reciberehabilitacionintegralcual.'</td>'
                      .'<td>'.$logro->recibiorehabilitacionintegral.'</td>'
                      .'<td>'.$logro->recibiorehabilitacionintegralcual.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 35
        if($idlogro == 36){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>realizan ahorros</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 36: El hogar ahorra a través del sistema financiero o de mecanismos no formales
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoporvali1('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VALIDACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoporvali1('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VALIDACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->realizanahorros.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 36
        if($idlogro == 37){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>entidad financiera</th>
                        <th>cooperativa de ahorro</th>
                        <th>ong</th>
                        <th>no ha recibido educacion financiera</th>
                        <th>otro</th>
                        <th>cual</th>
                        <th>sabe solicitar un crédito</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 37: El hogar accede a educacion financiera y sabe como solicitar un credito cuando lo requiera 
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                //CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoporvali1('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')"  title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VALIDACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoporvali1('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')"  title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VALIDACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->entidadfinanciera.'</td>'
                      .'<td>'.$logro->cooperativadeahorro.'</td>'
                      .'<td>'.$logro->ong.'</td>'
                      .'<td>'.$logro->noharecibidoeducacionfinanciera.'</td>'
                      .'<td>'.$logro->otro.'</td>'
                      .'<td>'.$logro->cual.'</td>'
                      .'<td>'.$logro->realizanahorros.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 37
        if($idlogro == 38){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>conoce deberes y derechos</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 38: Los integrantes del hogar conocen sus derechos y deberes ciudadanos
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                //CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o VERIFICACIÓN DEL COGESTOR o DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                //FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->conocedeberesyderecho.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 38
        if($idlogro == 39){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>necesito servicios de justicia</th>
                        <th>cuantas veces</th>
                        <th>grupo al margen de la ley</th>
                        <th>no ha solicitado ayuda</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 39: Los integrantes que lo requieren,  acuden a los servicios que ofrecen los operadores de justicia para la resolucion de conflictos 
                     </h3><br>
                     <p>Es rojo cuando el hogar que requiere servicios de operadores de justicia no acceden a ellos o acuden a grupos al margen de la ley.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                //CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportpreval39('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por PREGUNTAS DE VALIDACIÓN o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';         
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportpreval39('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro solo se mueve por PREGUNTAS DE VALIDACIÓN o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';         
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->necesitoserviciosdejusticia.'</td>'
                      .'<td>'.$logro->cuantasveces.'</td>'
                      .'<td>'.$logro->grupoalmargendelaley.'</td>'
                      .'<td>'.$logro->nohasolicitadoayuda.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 39
        if($idlogro == 40){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>conoce mecanismos proteccion derechos humanos</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 40: Los integrantes del hogar conocen algunos de los mecanismos y acciones  constitucionales para la protección de los derechos fundamentales 
                     </h3><br>
                     <p></p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
         $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" >&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                // CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro se mueve por GESTIÓN OPORTUNIDADES O VALIDACIÓN COGESTOR o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';         
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcion('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="El logro se mueve por GESTIÓN OPORTUNIDADES O VALIDACIÓN COGESTOR o DIFICULTAD PARA ALCANZARLO, pero puede gestionar oportunidades">&nbsp;</span>';         
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                //FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->conocemecanismosprotecciondh.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 40
        if($idlogro == 41){
            
          $columnas = '<th>Nombre integrante</th>
                        <th>Edad</th>
                        <th>Genero</th>
                        <th>victima conflicto armado</th>
                        <th>declaro ante autoridades</th>
                        <th>reconocido como victiva</th>
                        <th>no esta recibiendo ninguna atencion</th>
                        <th>logro Inicial</th>
                        <th>logro Actual</th>';
        $texto = '<div class="panel-body">
                     <div class="row" style="vertical-align:">  
                     <div class="col-md-8">
                     <h3 class="panel-title">
                     logro 41: El hogar en situación de victimización recibe acompañamiento para apoyar el goce efectivo de derechos
                     </h3><br>
                     <p>La persona que manifiesta ser victima debe contar con el el Registro Único de Víctimas (RUV) otorgado por una autoridad competente como: Unidad de Atención y Reparación Integral a las Víctimas (UARIV), Unidad de Restitución de Tierras, Procuraduría General de la Nación, Defensoría del Pueblo, Unidad Nacional de Protección y Fiscalía General de la Nación.</p>
                     </div>
                     <div class="col-lg-offset-11">
                     Dimension
                     <span class="badge" style="width: 50px;height: 50px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #'.$colordimensionPF.'" >&nbsp;</span>
                     </div>
                     </div>
                     </div>';
        foreach ($listalogro as $logro)
        {
          if($logro->colorlogroDI == 0)
        {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101">&nbsp;</span>';
        }
        else if($logro->colorlogroDI == 1)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 2)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroDI == 3)
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #7B4E58" >&nbsp;</span>';            
                }
        else 
                {
                $bolitaint ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #0D0C0C" >&nbsp;</span>';            
                }
                //CHACHA
                  if($logro->colorlogroPF == 0)
        {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #DF0101" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o por DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
        }
        else if($logro->colorlogroPF == 1)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #30E24E" onclick="exampleModallogroxoportunidad('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Gestionar Oportunidades">&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 2)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #D1DFD3" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 3)
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #428BCA" >&nbsp;</span>';            
                }
        else if($logro->colorlogroPF == 4)
                {
                $bolitaintPF ='<span class="badge" style="cursor:pointer;width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #8B4513" onclick="modalescogeropcionoportdificulcf('.$logro->idlogro.','.$logro->folio.','.$logro->idintegrante.')" title="Movimiento del logro por GESTIÓN DE OPORTUNIDADES o por DIFICULTAD PARA ALCANZARLO">&nbsp;</span>';
                }
        else 
                {
                $bolitaintPF ='<span class="badge" style="width: 30px;height: 30px;-moz-border-radius: 50%;-webkit-border-radius: 50%;border-radius: 50%;background: #00008B" >&nbsp;</span>';            
                }
                // FIN CHACHA
         
                $logroresul .= '<tr>'
                      .'<td>'.$logro->nombreintegrante.'</td>'
                      .'<td>'.$logro->edad.'</td>'
                      .'<td>'.$logro->sexo.'</td>'
                      .'<td>'.$logro->victimaconflictoarmado.'</td>'
                      .'<td>'.$logro->declaroanteautoridades.'</td>'
                      .'<td>'.$logro->reconocidocomovictiva.'</td>'
                      .'<td>'.$logro->ninguna.'</td>'
                      .'<td>'.$bolitaint.'</td>'
                      .'<td>'.$bolitaintPF.'</td>      
                      </tr>';
         }
         }
        //fin traer una lista de valores logro 41
        //Armar tabla//
        $tabla = '<div class="panel-body">
                             <p>'.$texto.'</p>
                           </div>
                            <div class="form-group">
                        
                    
                    <div id="DivRoot" align="left">
                     <div style="overflow: hidden;" id="DivHeaderRow">
                       <table class="table table-bordered" id="tr24h2" style="table-layout: fixed">
                           <thead>
                               <tr class="success">
                                  '.$columnas.'
                               </tr>
                           </thead>
                     </table>
                   </div>

                    <div style="overflow:scroll;" onscroll="OnScrollDiv(this)" id="DivMainContent">
                      <table class="table table-bordered table-striped" name="tr24h" id="tr24h" style="table-layout: fixed">
                             <thead>
                               <tr class="success" >
                                   '.$columnas.'
                               </tr>
                           </thead>
                            <tbody id="datos2">
                            '.$logroresul.'
                            </tbody>
                    </table>  
                    </div>
                    <div id="DivFooterRow" style="overflow:hidden">
                    </div>
                    </div>

            </div>
                            ';
        
        //fin armar tabla
    // enunciados de logros
    $elogro7='';    
    $elogro8='<label id="elogro8" class="control-label">Verificación del certificado adquirido de formación para el trabajo.</label>';   
    $elogro9='';       
    $elogro11='<label id="elogro11" class="control-label">Se verifica acceso a sistema educativo formal (a traves de instucion privada).</label>';       
    $elogro12='<label id="elogro12" class="control-label">Se verifica que el integrante sabe leer y escribir.</label>';       
    $elogro13='<label id="elogro13" class="control-label">Se verifica acceso a sistema educativo formal (o privado).</label>';       
    $elogro14='<label id="elogro14" class="control-label">Se verifica que el integrante se vincula a educación tecnica, tecnologica o universitaria.</label>';       
    $elogro15='<label id="elogro15" class="control-label">Se verifica que el integrante accede a programa de atencion integral.</label>';
    $elogro16='<label id="elogro16" class="control-label">Se verifica que el integrante está afiliado al Sistema General de Seguridad Social en Salud SGSS.</label>';       
    $elogro17='<label id="elogro17" class="control-label">Se verifica que el hogar accede a programas de promocion, como salud Oral, tamisaje visual, control presión arterial, entre otros.</label>';       
    $elogro22='<label id="elogro22" class="control-label">Se verifica control de tamizaje de cáncer de cuello uterino y seno al menos una vez al año; y conocen los resultados.</label>';       
    $elogro23='<label id="elogro23" class="control-label">Se verifica control de tamizaje de prostata.</label>';       
    $elogro28='<label id="elogro28" class="control-label">Se verifica que La vivienda cuenta con espacios diferenciados de baño, cocina, y dormitorios.</label>';       
    $elogro29='<label id="elogro29" class="control-label">Se verifica que en la vivienda no duermen tres o más personas en cada cuarto.</label>';       
    $elogro30='<label id="elogro30" class="control-label">se verifica aque La vivienda no tiene pisos de tierra.</label>';       
    $elogro31='<label id="elogro31" class="control-label">Se verifica que Las paredes de la vivienda son en: bloque, ladrillo, piedra madera pulida tapia, material prefabricado, adobe o baareque y se visualiza estructura adecuada de la vivienda.</label>';       
    $elogro32='<label id="elogro32" class="control-label">Se verifica que el hogar accede a informacion y/o servicios de intervencion de violencia intrafamiliar.</label>';       
    $elogro36='<label id="elogro36" class="control-label">Se verifica que en el  hogar se ahorra por mecanismos financieros o no formales.</label>';       
    $elogro37='<label id="elogro37" class="control-label">Se verifica que en el hogar tienen conocimiento acerca de entidades financieras y saben como solicitar un crédito.</label>';       
    $elogro38='<label id="elogro38" class="control-label">Se verifica que el hogar conoce acerca de derechos y de beres ciudadanos (vida, educación, libertad, igualdad)  definir sesión educativa - metodológico.</label>';       
    $elogro40='<label id="elogro40" class="control-label">Se verifica que en hogar conocen algunos mecanismos o acciones constitucionales como: Derecho de petición, Acción de tutela,conciliación, Demandas entre otras. </label>';       
// fin enunciados de logros













//inicion estado de mejora oportunidades
        $listartablaestadomejoracond = $this->m_logros->fm_listarmejconopor();
        $datosmc = '<option value="">Seleccione</option>';
        foreach ($listartablaestadomejoracond as $valormc)
        {
        $datosmc .=  '<option value="'.$valormc->idestado.'">'.$valormc->nombre_estado.'</option>';
        }       
        //fin estado de mejora oportunidades


        //inicion estado de No mejora oportunidades
        $listartablaestadomejoracondno = $this->m_logros->fm_listarmejconoporno();
        $datosmcno = '<option value="">Seleccione</option>';
        foreach ($listartablaestadomejoracondno as $valormcno)
        {
        $datosmcno .=  '<option value="'.$valormcno->idestado.'">'.$valormcno->nombre_estado.'</option>';
        }       
        //fin estado de No mejora oportunidades
















        //ESTO LEVANTA LA VISTA     
        $titulo = 'v_logros'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/logros/'.$page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head' => HEAD1, 'botoneral' => BOTONERALOGROS, 'logro' => $logroresul, 'folio' => $folio, 'doccogestor' => $doccogestor, 'foexiste' =>$foexiste, 'iddimen' => $iddimension, 'idlog' => $idlogro,'tabla' => $tabla,'colordimen' => $colordimension,'elogro7' => $elogro7,'elogro8' => $elogro8,'elogro9' => $elogro9,'elogro11' => $elogro11,'elogro12' => $elogro12,'elogro13' => $elogro13,'elogro14' => $elogro14,'elogro15' => $elogro15, 'elogro16' => $elogro16,'elogro17' => $elogro17,'elogro22' => $elogro22,'elogro23' => $elogro23,'elogro28' => $elogro28,'elogro29' => $elogro29,'elogro30' => $elogro30,'elogro31' => $elogro31,'elogro32' => $elogro32,'elogro36' => $elogro36,'elogro37' => $elogro37,'elogro38' => $elogro38,'elogro40' => $elogro40,'paises' => $paises,'datosmc' => $datosmc,'datosmcno' => $datosmcno));
        //FIN LEVANTA LA VISTA
    }
     public function fc_buscarinfooport()
    {   
        $cvidoportunidad = $this->input->get('vidoportunidad');
        $listasinfo=$this->m_logros->fm_logroxportunidadinfo($cvidoportunidad);
        //echo json_encode(array('result' => 'guardado'));
       $infopor = array('eidoportunidad'=>'','enombre_oportunidad'=>'','edescripcion'=>'','erequisito_oportunidad'=>'','eruta_acceso'=>'','efechainicio_oportunidad'=>'','efechalimite_acercamientoop'=>'','efechalimite_efectividadop'=>'');
       foreach ($listasinfo as $inopor)
       {
       $infopor = array('eidoportunidad'=> $inopor->idoportunidad,'enombre_oportunidad'=> $inopor->nombre_oportunidad,'edescripcion'=> $inopor->descripcion,'erequisito_oportunidad'=> $inopor->requisito_oportunidad,'eruta_acceso'=> $inopor->ruta_acceso,'efechainicio_oportunidad'=> $inopor->fechainicio_oportunidad,'efechalimite_acercamientoop'=> $inopor->fechalimite_acercamientoop,'efechalimite_efectividadop'=> $inopor->fechalimite_efectividadop);
       }
       echo json_encode($infopor);
    }
    //funcion para guardar movimiento cogestor
    public function fc_insertar()
    {   
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrantemodal');
        $ciddimension= $this->input->get('viddimension');
        $cidlogro = $this->input->get('vidlogro');
        $cvalorlogromov = $this->input->get('vvalorlogromov');
        $cnombreoportunidadobs = $this->input->get('vnombreoportunidadobs');
        $cnombreoportunidad = $this->input->get('vnombreoportunidad');
        $ctelcontactocual = $this->input->get('vtelcontactocual');
        $cdoccogestor = $this->input->get('vdoccogestor');
        $this->m_logros->fm_insertar($cfolio,$cidintegrante,$ciddimension,$cidlogro,$cvalorlogromov,$cnombreoportunidadobs,$cnombreoportunidad,$ctelcontactocual,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
     //funcion para recalcular log 10
    public function fc_insertarpreval10a14a()
    {   
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrantemodal');
        $ciddimension= $this->input->get('viddimension');
        $cidlogro = $this->input->get('vidlogro');
        $cc9p37o1 = $this->input->get('vc9p37o1');
        $cc9p37o2 = $this->input->get('vc9p37o2');
        $cc9p37o3 = $this->input->get('vc9p37o3');
        $cc9p37o4 = $this->input->get('vc9p37o4');
        $cc9p37o5 = $this->input->get('vc9p37o5');
        $cc9p37o6 = $this->input->get('vc9p37o6');
        $cc9p37o7 = $this->input->get('vc9p37o7');
        $cc9p37o8 = $this->input->get('vc9p37o8');
        $cc9p37o9 = $this->input->get('vc9p37o9');
        $cc9p37o10 = $this->input->get('vc9p37o10');
        $cc9p37o11 = $this->input->get('vc9p37o11');
        $cc9p37cual = $this->input->get('vc9p37cual');
        $cc9p39o1 = $this->input->get('vc9p39o1');
        $cc9p39o2 = $this->input->get('vc9p39o2');
        $cc9p39o3 = $this->input->get('vc9p39o3');
        $cc9p39o4 = $this->input->get('vc9p39o4');
        $cc9p39o5 = $this->input->get('vc9p39o5');
        $cc9p39o6 = $this->input->get('vc9p39o6');
        $cc9p39o7 = $this->input->get('vc9p39o7');
        $cc9p39o8 = $this->input->get('vc9p39o8');
        $cc9p39cual = $this->input->get('vc9p39cual');
        $cvalorc9p40 = $this->input->get('vvalorc9p40');
        $cvalorc9p3 = $this->input->get('vvalorc9p3');
        $cc9p3cual = $this->input->get('vc9p3cual');
        $cvalorc9p4 = $this->input->get('vvalorc9p4');
        $cvalorc9p19 = $this->input->get('vvalorc9p19');
        $cedad = $this->input->get('vedad');
        $cdoccogestor = $this->input->get('vdoccogestor');
        $this->m_logros->fm_insertarpreval10a14a($cfolio,$cidintegrante,$ciddimension,$cidlogro,$cc9p37o1,$cc9p37o2,$cc9p37o3,$cc9p37o4,$cc9p37o5,$cc9p37o6,$cc9p37o7,$cc9p37o8,$cc9p37o9,$cc9p37o10,$cc9p37o11,$cc9p37cual,$cc9p39o1,$cc9p39o2,$cc9p39o3,$cc9p39o4,$cc9p39o5,$cc9p39o6,$cc9p39o7,$cc9p39o8,$cc9p39cual,$cvalorc9p40,$cvalorc9p3,$cc9p3cual,$cvalorc9p4,$cvalorc9p19,$cedad,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
     //funcion para guardar pregunta validacion log 10
    public function fc_insertarpreval10a14()
    {   
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrantemodal');
        $ciddimension= $this->input->get('viddimension');
        $cidlogro = $this->input->get('vidlogro');
        $cc9p37o1 = $this->input->get('vc9p37o1');
        $cc9p37o2 = $this->input->get('vc9p37o2');
        $cc9p37o3 = $this->input->get('vc9p37o3');
        $cc9p37o4 = $this->input->get('vc9p37o4');
        $cc9p37o5 = $this->input->get('vc9p37o5');
        $cc9p37o6 = $this->input->get('vc9p37o6');
        $cc9p37o7 = $this->input->get('vc9p37o7');
        $cc9p37o8 = $this->input->get('vc9p37o8');
        $cc9p37o9 = $this->input->get('vc9p37o9');
        $cc9p37o10 = $this->input->get('vc9p37o10');
        $cc9p37o11 = $this->input->get('vc9p37o11');
        $cc9p37cual = $this->input->get('vc9p37cual');
        $cc9p39o1 = $this->input->get('vc9p39o1');
        $cc9p39o2 = $this->input->get('vc9p39o2');
        $cc9p39o3 = $this->input->get('vc9p39o3');
        $cc9p39o4 = $this->input->get('vc9p39o4');
        $cc9p39o5 = $this->input->get('vc9p39o5');
        $cc9p39o6 = $this->input->get('vc9p39o6');
        $cc9p39o7 = $this->input->get('vc9p39o7');
        $cc9p39o8 = $this->input->get('vc9p39o8');
        $cc9p39cual = $this->input->get('vc9p39cual');
        $cvalorc9p40 = $this->input->get('vvalorc9p40');
        $cvalorc9p3 = $this->input->get('vvalorc9p3');
        $cc9p3cual = $this->input->get('vc9p3cual');
        $cvalorc9p4 = $this->input->get('vvalorc9p4');
        $cvalorc9p19 = $this->input->get('vvalorc9p19');
        $cedad = $this->input->get('vedad');
        $cdoccogestor = $this->input->get('vdoccogestor');
        $this->m_logros->fm_insertarpreval10a14($cfolio,$cidintegrante,$ciddimension,$cidlogro,$cc9p37o1,$cc9p37o2,$cc9p37o3,$cc9p37o4,$cc9p37o5,$cc9p37o6,$cc9p37o7,$cc9p37o8,$cc9p37o9,$cc9p37o10,$cc9p37o11,$cc9p37cual,$cc9p39o1,$cc9p39o2,$cc9p39o3,$cc9p39o4,$cc9p39o5,$cc9p39o6,$cc9p39o7,$cc9p39o8,$cc9p39cual,$cvalorc9p40,$cvalorc9p3,$cc9p3cual,$cvalorc9p4,$cvalorc9p19,$cedad,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
     //funcion para guardar pregunta validacion logro 18
    public function fc_insertarpreval18()
    {   
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrantemodal');
        $ciddimension= $this->input->get('viddimension');
        $cidlogro = $this->input->get('vidlogro');
        $cc5p5o1 = $this->input->get('vc5p5o1');
        $cc5p5o2 = $this->input->get('vc5p5o2');
        $cc5p5o3 = $this->input->get('vc5p5o3');
        $cc5p5o4 = $this->input->get('vc5p5o4');
        $cc5p5o5 = $this->input->get('vc5p5o5');
        $cc5p5o6 = $this->input->get('vc5p5o6');
        $cc5p5o7 = $this->input->get('vc5p5o7');
        $cc5p5o9 = $this->input->get('vc5p5o9');
        $cc5p5o10 = $this->input->get('vc5p5o10');
        $cc5p5o11 = $this->input->get('vc5p5o11');
        $cc5p5o13 = $this->input->get('vc5p5o13');
        $cdoccogestor = $this->input->get('vdoccogestor');
        $this->m_logros->fm_insertarpreval18($cfolio,$cidintegrante,$ciddimension,$cidlogro,$cc5p5o1,$cc5p5o2,$cc5p5o3,$cc5p5o4,$cc5p5o5,$cc5p5o6,$cc5p5o7,$cc5p5o9,$cc5p5o10,$cc5p5o11,$cc5p5o13,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
     //funcion para guardar pregunta validacion logro 42
    public function fc_insertarpreval24()
    {   
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrantemodal');
        $ciddimension= $this->input->get('viddimension');
        $cidlogro = $this->input->get('vidlogro');
        $cvalorc6p2 = $this->input->get('vvalorc6p2');
        $cvalorc6p3 = $this->input->get('vvalorc6p3');
        $cvalorc6p5 = $this->input->get('vvalorc6p5');
        $cvalorc6p9 = $this->input->get('vvalorc6p9');
        $cdoccogestor = $this->input->get('vdoccogestor');
        $this->m_logros->fm_insertarpreval24($cfolio,$cidintegrante,$ciddimension,$cidlogro,$cvalorc6p2,$cvalorc6p3,$cvalorc6p5,$cvalorc6p9,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
     //funcion para guardar pregunta validacion logro 42
    public function fc_insertarpreval33()
    {   
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrantemodal');
        $ciddimension= $this->input->get('viddimension');
        $cidlogro = $this->input->get('vidlogro');
        $cc11p1o1 = $this->input->get('vc11p1o1');
        $cc11p1o2 = $this->input->get('vc11p1o2');
        $cc11p1o3 = $this->input->get('vc11p1o3');
        $cc11p1o4 = $this->input->get('vc11p1o4');
        $cc11p1o5 = $this->input->get('vc11p1o5');
        $cc11p1o6 = $this->input->get('vc11p1o6');
        $cc11p1o7 = $this->input->get('vc11p1o7');
        $cc11p1o8 = $this->input->get('vc11p1o8');
        $cc11p1cual = $this->input->get('vc11p1cual');
        $cc11p2o1 = $this->input->get('vc11p2o1');
        $cc11p2o2 = $this->input->get('vc11p2o2');
        $cc11p2o3 = $this->input->get('vc11p2o3');
        $cc11p2o4 = $this->input->get('vc11p2o4');
        $cc11p2o5 = $this->input->get('vc11p2o5');
        $cc11p2o6 = $this->input->get('vc11p2o6');
        $cc11p2o7 = $this->input->get('vc11p2o7');
        $cc11p2cual = $this->input->get('vc11p2cual');
        $cc11p3o1 = $this->input->get('vc11p3o1');
        $cc11p3o2 = $this->input->get('vc11p3o2');
        $cc11p3o3 = $this->input->get('vc11p3o3');
        $cc11p3o4 = $this->input->get('vc11p3o4');
        $cc11p3o5 = $this->input->get('vc11p3o5');
        $cc11p3o6 = $this->input->get('vc11p3o6');
        $cc11p3cual = $this->input->get('vc11p3cual');
        $cdoccogestor = $this->input->get('vdoccogestor');
        $this->m_logros->fm_insertarpreval33($cfolio,$cidintegrante,$ciddimension,$cidlogro,$cc11p1o1,$cc11p1o2,$cc11p1o3,$cc11p1o4,$cc11p1o5,$cc11p1o6,$cc11p1o7,$cc11p1o8,$cc11p1cual,$cc11p2o1,$cc11p2o2,$cc11p2o3,$cc11p2o4,$cc11p2o5,$cc11p2o6,$cc11p2o7,$cc11p2cual,$cc11p3o1,$cc11p3o2,$cc11p3o3,$cc11p3o4,$cc11p3o5,$cc11p3o6,$cc11p3cual,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
     //funcion para guardar pregunta validacion logro 42
    public function fc_insertarpreval34()
    {   
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrantemodal');
        $ciddimension= $this->input->get('viddimension');
        $cidlogro = $this->input->get('vidlogro');
        $cc11p4o1 = $this->input->get('vc11p4o1');
        $cc11p4o2 = $this->input->get('vc11p4o2');
        $cc11p4o3 = $this->input->get('vc11p4o3');
        $cc11p4o4 = $this->input->get('vc11p4o4');
        $cc11p4o5 = $this->input->get('vc11p4o5');
        $cc11p4o6 = $this->input->get('vc11p4o6');
        $cc11p4cual = $this->input->get('vc11p4cual');
        $cc11p5o1 = $this->input->get('vc11p5o1');
        $cc11p5o2 = $this->input->get('vc11p5o2');
        $cc11p5o3 = $this->input->get('vc11p5o3');
        $cc11p5o4 = $this->input->get('vc11p5o4');
        $cc11p5o5 = $this->input->get('vc11p5o5');
        $cc11p5o6 = $this->input->get('vc11p5o6');
        $cc11p5o7 = $this->input->get('vc11p5o7');
        $cc11p5cual = $this->input->get('vc11p5cual');
        $cc11p7o1 = $this->input->get('vc11p7o1');
        $cc11p7o2 = $this->input->get('vc11p7o2');
        $cc11p7o3 = $this->input->get('vc11p7o3');
        $cc11p7o4 = $this->input->get('vc11p7o4');
        $cc11p7o5 = $this->input->get('vc11p7o5');
        $cc11p7o6 = $this->input->get('vc11p7o6');
        $cc11p7o7 = $this->input->get('vc11p7o7');
        $cc11p7cual = $this->input->get('vc11p7cual');
        $cdoccogestor = $this->input->get('vdoccogestor');
        $this->m_logros->fm_insertarpreval34($cfolio,$cidintegrante,$ciddimension,$cidlogro,$cc11p4o1,$cc11p4o2,$cc11p4o3,$cc11p4o4,$cc11p4o5,$cc11p4o6,$cc11p4cual,$cc11p5o1,$cc11p5o2,$cc11p5o3,$cc11p5o4,$cc11p5o5,$cc11p5o6,$cc11p5o7,$cc11p5cual,$cc11p7o1,$cc11p7o2,$cc11p7o3,$cc11p7o4,$cc11p7o5,$cc11p7o6,$cc11p7o7,$cc11p7cual,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
     //funcion para guardar pregunta validacion logro 42
    public function fc_insertarpreval39()
    {   
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrantemodal');
        $ciddimension= $this->input->get('viddimension');
        $cidlogro = $this->input->get('vidlogro');
        $cc10p5o1= $this->input->get('vc10p5o1');   
        $cc10p5o2= $this->input->get('vc10p5o2');
        $cc10p5o3= $this->input->get('vc10p5o3');
        $cc10p5o4= $this->input->get('vc10p5o4');
        $cc10p5o5= $this->input->get('vc10p5o5');
        $cc10p5o6= $this->input->get('vc10p5o6');
        $cc10p5o7= $this->input->get('vc10p5o7');
        $cc10p5o8= $this->input->get('vc10p5o8');
        $cc10p5o9= $this->input->get('vc10p5o9');
        $cc10p5o11= $this->input->get('vc10p5o11');
        $cc10p5o12= $this->input->get('vc10p5o12');
        $cc10p5o13= $this->input->get('vc10p5o13');
        $cc10p5o16= $this->input->get('vc10p5o16');
        $cc10p5o17= $this->input->get('vc10p5o17');
        $cc10p5o18= $this->input->get('vc10p5o18');
        $cc10p5o19= $this->input->get('vc10p5o19');
        $cc10p5o20= $this->input->get('vc10p5o20');
        $cc10p5o22= $this->input->get('vc10p5o22');
        $cvinstitucion1= $this->input->get('vinstitucion1');
        $cvinstitucion2= $this->input->get('vinstitucion2');
        $cvc10p5cual= $this->input->get('vc10p5cual');
        $cdoccogestor = $this->input->get('vdoccogestor');
        $this->m_logros->fm_insertarpreval39($cfolio,$cidintegrante,$ciddimension,$cidlogro,$cc10p5o1,$cc10p5o2,$cc10p5o3,$cc10p5o4,$cc10p5o5,$cc10p5o6,$cc10p5o7,$cc10p5o8,$cc10p5o9,$cc10p5o11,$cc10p5o12,$cc10p5o13,$cc10p5o16,$cc10p5o17,$cc10p5o18,$cc10p5o19,$cc10p5o20,$cc10p5o22,$cvinstitucion1,$cvinstitucion2,$cvc10p5cual,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
    public function fc_insertarlogroxoport()
    {   
        $cfolio = $this->input->get('vfolio');
        $cidintegrantemodaloport = $this->input->get('vidintegrantemodaloport');
        $cidlogro= $this->input->get('vidlogro');
        $cidoportunidad= $this->input->get('vidoportunidad');
        $cversion= $this->input->get('vversion');
        $cdoccogestor = $this->input->get('vdoccogestor');
        $cvaloropo = $this->input->get('vvaloropo');
        $cidefectiva = $this->input->get('videfectiva');
        $cmejoracondicionesno = $this->input->get('vmejoracondicionesno');
                
        $this->m_logros->fm_insertarlogroxoport($cfolio,$cidintegrantemodaloport,$cidlogro,$cidoportunidad,$cversion,$cdoccogestor,$cvaloropo,$cidefectiva,$cmejoracondicionesno);
        //echo json_encode(array('result' => 'guardado'));
    }
    public function fc_oportunidadxlogroxintegrante(){
        $valorenunciado='';
        $logrosxoportunidadenunciado = $this->m_logros->fm_listarestadooportunidad();
        
        foreach ($logrosxoportunidadenunciado as $enunciado)
        {
            $valorenunciado .= '<option value="'.$enunciado->idestado.'">'.$enunciado->nombre_estado.'</option>';
        }
        $cidlogro= $this->input->get('vlogro');
        $cidintegrante = $this->input->get('vidintegrante');
        $cfolio = $this->input->get('vfolio');
        // inicio traer las oportunidades por logros
        $logrosxoportunidad = $this->m_logros->fm_logroxportunidad($cidlogro);
        $tablalogxopor ='';
/*
        $modal2='';
        $modal21=''; */


        foreach ($logrosxoportunidad as $logroxoport)
        {       
            $estadoxoportunidadxint = $this->m_logros->fm_logroxportunidadxint($logroxoport->idoportunidad,$cidintegrante);
            $idestado = '';
            $desabilita = '';
            if(empty($estadoxoportunidadxint)){
                $idestado = '<option value="">No acercada</option>';
            }else{
                foreach($estadoxoportunidadxint as $datooportunidad){
                
        if($datooportunidad->idestado == '2' || $datooportunidad->idestado == '3'){
                    $desabilita = 'disabled=""';
                    //$idestado .= '<option value="'.$datooportunidad->idestado.'">'.$datooportunidad->nombre_estado.'</option>';
       }//else{
        $idestado .=  '<option value="'.$datooportunidad->idestado.'">'.$datooportunidad->nombre_estado.'</option>';
        //fin estado de la oferta
       //}   
            }
            }
                $tablalogxopor .=  '<tr>'
                .'<td>'.$logroxoport->nombre_oportunidad.'</td>'
                .'<td><button type="button" id="edicioninfo'.$logroxoport->idoportunidad.''.$logroxoport->idlogro.'" onclick="exampleModallogroxoportunidadinfo('.$logroxoport->idoportunidad.')" class="btn btn-warning btn-sm">Ver Información</button></td>'        
                .'<td><select id="listaestado'.$logroxoport->idoportunidad.''.$logroxoport->idlogro.'" onchange="botongoport('.$logroxoport->idoportunidad.''.$logroxoport->idlogro.')" class="form-control input-sm" '.$desabilita.'>'.$idestado.$valorenunciado.'</select></td>'        
                .'<td><button type="button" disabled="" id="edicion'.$logroxoport->idoportunidad.''.$logroxoport->idlogro.'" onclick="exampleModallogroxoportunidadsino('.$logroxoport->idoportunidad.','.$logroxoport->idlogro.','.$cfolio.','.$logroxoport->versionn.',$(\'#listaestado'.$logroxoport->idoportunidad.''.$logroxoport->idlogro.'\').val(),'.$cidintegrante.')" class="btn btn-success btn-sm" '.$desabilita.'>Guardar</button></td>
                </tr>';

        }
// fin traer las oportunidades por logros  
        echo $tablalogxopor;
    }
    //funcion para guardar movimiento cogestor
    public function fc_insertarcf()
    {   
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrantemodal');
        $ciddimension= $this->input->get('viddimension');
        $cidlogro = $this->input->get('vidlogro');
        $cvalorlogromovcf = $this->input->get('vvalorlogromovcf');
        $cnombreoportunidadobscf = $this->input->get('vnombreoportunidadobscf');
        $cdoccogestor = $this->input->get('vdoccogestor');
        
        $this->m_logros->fm_insertarcf($cfolio,$cidintegrante,$ciddimension,$cidlogro,$cvalorlogromovcf,$cnombreoportunidadobscf,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
    
    
    
    
    public function fc_insertarrecalculolog2()
    {   
        
        $cfoliorecalculolog2 = $this->input->get('vfoliorecalculolog2');
        $cidintegranterecalculolog2 = $this->input->get('vidintegranterecalculolog2');
        $cidlogrorecalculolog2= $this->input->get('vidlogrorecalculolog2');
        $cedadintemodalrecalculolog2= $this->input->get('vedadintemodalrecalculolog2');
        $cvalorc4p8o1= $this->input->get('vvalorc4p8o1');
        $cc4p8o2 = $this->input->get('vc4p8o2');
        $cdoccogestor = $this->input->get('vdoccogestor');
                
        $this->m_logros->fm_insertarrecalculolog2($cfoliorecalculolog2,$cidintegranterecalculolog2,$cidlogrorecalculolog2,$cedadintemodalrecalculolog2,$cvalorc4p8o1,$cc4p8o2,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
    public function fc_insertarrecalculolog3()
    {   
        
        $cfoliorecalculolog3 = $this->input->get('vfoliorecalculolog3');
        $cidintegranterecalculolog3 = $this->input->get('vidintegranterecalculolog3');
        $cidlogrorecalculolog3= $this->input->get('vidlogrorecalculolog3');
        $cedadintemodalrecalculolog3= $this->input->get('vedadintemodalrecalculolog3');
        $cvalorc4p8o1a= $this->input->get('vvalorc4p8o1a');
        $cc4p8o2a = $this->input->get('vc4p8o2a');
        $cdoccogestor = $this->input->get('vdoccogestor');
                
        $this->m_logros->fm_insertarrecalculolog3($cfoliorecalculolog3,$cidintegranterecalculolog3,$cidlogrorecalculolog3,$cedadintemodalrecalculolog3,$cvalorc4p8o1a,$cc4p8o2a,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
    public function fc_insertarrecalculolog5()
    {   
        
        $cfoliorecalculolog5 = $this->input->get('vfoliorecalculolog5');
        $cidintegranterecalculolog5 = $this->input->get('vidintegranterecalculolog5');
        $cidlogrorecalculolog5= $this->input->get('vidlogrorecalculolog5');
        $cedadintemodalrecalculolog5= $this->input->get('vedadintemodalrecalculolog5');
        $cvalorc4p9= $this->input->get('vvalorc4p9');
        $cdoccogestor = $this->input->get('vdoccogestor');
                
        $this->m_logros->fm_insertarrecalculolog5($cfoliorecalculolog5,$cidintegranterecalculolog5,$cidlogrorecalculolog5,$cedadintemodalrecalculolog5,$cvalorc4p9,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
    public function fc_insertarrecalculolog7()
    {   
        $cfoliorecalculolog7 = $this->input->get('vfoliorecalculolog7');
        $cidintegranterecalculolog7 = $this->input->get('vidintegranterecalculolog7');
        $cviddimension = $this->input->get('viddimension');
        $cidlogrorecalculolog7= $this->input->get('vidlogrorecalculolog7');
        $cedadintemodalrecalculolog7= $this->input->get('vedadintemodalrecalculolog7');
        $cvalorc9p3recalculolog7= $this->input->get('vvalorc9p3recalculolog7');
        $cc9p3cualrecalculolog7= $this->input->get('vc9p3cualrecalculolog7');
        $cvalorc9p4recalculolog7= $this->input->get('vvalorc9p4recalculolog7');
        $cvalorc9p5recalculolog7= $this->input->get('vvalorc9p5recalculolog7');
        $cc9p5cualrecalculolog7g= $this->input->get('vc9p5cualrecalculolog7g');
        $cvalorc9p6= $this->input->get('vvalorc9p6');
        $cdoccogestor = $this->input->get('vdoccogestor');
                
        $this->m_logros->fm_insertarrecalculolog7($cfoliorecalculolog7,$cidintegranterecalculolog7,$cviddimension,$cidlogrorecalculolog7,$cedadintemodalrecalculolog7,$cvalorc9p3recalculolog7,$cc9p3cualrecalculolog7,$cvalorc9p4recalculolog7,$cvalorc9p5recalculolog7,$cc9p5cualrecalculolog7g,$cvalorc9p6,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
    public function fc_insertarrecalculolog8()
    {   
        
        $cfoliorecalculolog8 = $this->input->get('vfoliorecalculolog8');
        $cidintegranterecalculolog8 = $this->input->get('vidintegranterecalculolog8');
        $ciddimension= $this->input->get('viddimension');
        $cidlogrorecalculolog8= $this->input->get('vidlogrorecalculolog8');
        $cedadintemodalrecalculolog8= $this->input->get('vedadintemodalrecalculolog8');
        $cvalorc9p1= $this->input->get('vvalorc9p1');
        $cvalorc9p1cual= $this->input->get('vvalorc9p1cual');
        $cvalorc9p2= $this->input->get('vvalorc9p2');
        $cdoccogestor = $this->input->get('vdoccogestor');
        
        $this->m_logros->fm_insertarrecalculolog8($cfoliorecalculolog8,$cidintegranterecalculolog8,$ciddimension,$cidlogrorecalculolog8,$cedadintemodalrecalculolog8,$cvalorc9p1,$cvalorc9p1cual,$cvalorc9p2,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
    public function fc_insertarrecalculolog9()
    {   
        $cfoliorecalculolog9 = $this->input->get('vfolio');
        $cidintegranterecalculolog9 = $this->input->get('vidintegrantemodal');
        $ciddimensionrecalculolog9= $this->input->get('viddimension');
        $cidlogrorecalculolog9= $this->input->get('vidlogro');
        $cedadintemodalrecalculolog9= $this->input->get('vedad');
        $cvalorc9p30= $this->input->get('vvalorc9p30');
        $cvalorc9p34= $this->input->get('vvalorc9p34');
        $cc9p35o1= $this->input->get('vc9p35o1');
        $cc9p35o2= $this->input->get('vc9p35o2');
        $cc9p35o3= $this->input->get('vc9p35o3');
        $cc9p35o4= $this->input->get('vc9p35o4');
        $cc9p35o5= $this->input->get('vc9p35o5');
        $cc9p35o6= $this->input->get('vc9p35o6');
        $cc9p35o7= $this->input->get('vc9p35o7');
        $cc9p35o8= $this->input->get('vc9p35o8');
        $cc9p35o9= $this->input->get('vc9p35o9');
        $cc9p35o7cual= $this->input->get('vc9p35o7cual');
        $cdoccogestor = $this->input->get('vdoccogestor');
         
        $this->m_logros->fm_insertarrecalculolog9($cfoliorecalculolog9,$cidintegranterecalculolog9,$ciddimensionrecalculolog9,$cidlogrorecalculolog9,$cedadintemodalrecalculolog9,$cvalorc9p30,$cvalorc9p34,$cc9p35o1,$cc9p35o2,$cc9p35o3,$cc9p35o4,$cc9p35o5,$cc9p35o6, $cc9p35o7,$cc9p35o8,$cc9p35o9,$cc9p35o7cual,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
    public function fc_insertarrecalculolog11()
    {   
        $cfoliorecalculolog11 = $this->input->get('vfoliorecalculolog11');
        $cidintegranterecalculolog11 = $this->input->get('vidintegranterecalculolog11');
        $cidlogrorecalculolog11= $this->input->get('vidlogrorecalculolog11');
        $cedadintemodalrecalculolog11= $this->input->get('vedadintemodalrecalculolog11');
        $cvalorc8p4reclog11= $this->input->get('vvalorc8p4reclog11');
        $cc8p2gradorecalculolog11= $this->input->get('vc8p2gradorecalculolog11');
        $cdoccogestor = $this->input->get('vdoccogestor');
                
        $this->m_logros->fm_insertarrecalculolog11($cfoliorecalculolog11,$cidintegranterecalculolog11,$cidlogrorecalculolog11,$cedadintemodalrecalculolog11,$cvalorc8p4reclog11,$cc8p2gradorecalculolog11,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
    public function fc_insertarrecalculolog12()
    {   
        $cfoliorecalculolog12 = $this->input->get('vfoliorecalculolog12');
        $cidintegranterecalculolog12 = $this->input->get('vidintegranterecalculolog12');
        $cidlogrorecalculolog12= $this->input->get('vidlogrorecalculolog12');
        $cedadintemodalrecalculolog12= $this->input->get('vedadintemodalrecalculolog12');
        $cvalorc8p1= $this->input->get('vvalorc8p1');
        $cdoccogestor = $this->input->get('vdoccogestor');
                
        $this->m_logros->fm_insertarrecalculolog12($cfoliorecalculolog12,$cidintegranterecalculolog12,$cidlogrorecalculolog12,$cedadintemodalrecalculolog12,$cvalorc8p1,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
    public function fc_insertarrecalculolog13()
    {   
        $cfoliorecalculolog13 = $this->input->get('vfoliorecalculolog13');
        $cidintegranterecalculolog13 = $this->input->get('vidintegranterecalculolog13');
        $cidlogrorecalculolog13= $this->input->get('vidlogrorecalculolog13');
        $cedadintemodalrecalculolog13= $this->input->get('vedadintemodalrecalculolog13');
        $cvalorc8p2= $this->input->get('vvalorc8p2');
        $cc8p2grado= $this->input->get('vc8p2grado');
        $cvalorc8p4= $this->input->get('vvalorc8p4');
        $cdoccogestor = $this->input->get('vdoccogestor');
                
        $this->m_logros->fm_insertarrecalculolog13($cfoliorecalculolog13,$cidintegranterecalculolog13,$cidlogrorecalculolog13,$cedadintemodalrecalculolog13,$cvalorc8p2,$cc8p2grado,$cvalorc8p4,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
    public function fc_insertarrecalculolog22()
    {   
        $cfoliorecalculolog22 = $this->input->get('vfoliorecalculolog22');
        $cidintegranterecalculolog22 = $this->input->get('vidintegranterecalculolog22');
        $cidlogrorecalculolog22= $this->input->get('vidlogrorecalculolog22');
        $cedadintemodalrecalculolog22= $this->input->get('vedadintemodalrecalculolog22');
        $cvalorc5p7= $this->input->get('vvalorc5p7');
        $cvalorc5p7r= $this->input->get('vvalorc5p7r');
        $cc5p8o1= $this->input->get('vc5p8o1');
        $cc5p8o2= $this->input->get('vc5p8o2');
        $cc5p8o3= $this->input->get('vc5p8o3');
        $cc5p8o4= $this->input->get('vc5p8o4');
        $cc5p8o5= $this->input->get('vc5p8o5');
        $cdoccogestor = $this->input->get('vdoccogestor');
                
        $this->m_logros->fm_insertarrecalculolog22($cfoliorecalculolog22,$cidintegranterecalculolog22,$cidlogrorecalculolog22,$cedadintemodalrecalculolog22,$cvalorc5p7,$cvalorc5p7r,$cc5p8o1,$cc5p8o2,$cc5p8o3,$cc5p8o4,$cc5p8o5,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
    public function fc_insertarrecalculolog23()
    {   
        
        $cfoliorecalculolog23 = $this->input->get('vfoliorecalculolog23');
        $cidintegranterecalculolog23 = $this->input->get('vidintegranterecalculolog23');
        $cidlogrorecalculolog23= $this->input->get('vidlogrorecalculolog23');
        $cedadintemodalrecalculolog23= $this->input->get('vedadintemodalrecalculolog23');
        $cvalorc5p12= $this->input->get('vvalorc5p12');
        $cdoccogestor = $this->input->get('vdoccogestor');
                
        $this->m_logros->fm_insertarrecalculolog23($cfoliorecalculolog23,$cidintegranterecalculolog23,$cidlogrorecalculolog23,$cedadintemodalrecalculolog23,$cvalorc5p12,$cdoccogestor);
        //echo json_encode(array('result' => 'guardado'));
    }
    
    
    
    
    }
    
    
    