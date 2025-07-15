<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_acercaroportunidadi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_acercaroportunidadi');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_acercaroportunidadi($page = 'v_acercaroportunidadi') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $idtitular = $this->input->get('idtitular');
        $idintegrante = $this->input->get('idintegrante');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get
        $cyeaint = $this->input->get('yea');
        $cmesint = $this->input->get('mes');
        $cdiasint = $this->input->get('dias');
        $cvariable = $this->input->get('variable');

        //para traer la informacion de ayudas
        $cayudas = $this->m_acercaroportunidadi->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_acercaroportunidadi->fm_cargardatosgenerales($cfolio,$idintegrante);
        $carraydatosgenerales= array('enomcoges' => '', 'efolio' =>'', 'ecapitulo' => '', 'etitular' => '','edoctitular' => '','enombreintegrante' => '','edocintegrante' => '','esexointegrante'=> '','eedadintegrante'=> '','efechanacimiento'=> ''); 
        foreach ($cdatosgenerales as $cdatgen)
        {
            $carraydatosgenerales = array('enomcoges' => $cdatgen->nomcoges,
                                          'efolio' => $cdatgen->folio, 
                                          'ecapitulo' => $cdatgen->capitulo,
                                          'etitular' => $cdatgen->titular,
                                          'edoctitular' => $cdatgen->doctitular,         
                                          'enombreintegrante' => $cdatgen->nombreintegrante,
                                          'edocintegrante' => $cdatgen->docintegrante,
                                          'esexointegrante' => $cdatgen->sexointegrante,
                                          'eedadintegrante' => $cdatgen->edadintegrante,
                                          'efechanacimiento' =>$cdatgen-> fechanacimiento);
        }
        //fin traer datos generales
        $modal='';
        $modal2='';
        $modal21='';

        $listartabla = $this->m_acercaroportunidadi->fm_acercaroportunidadi($cfolio,$idintegrante,$cyeaint,$cmesint,$cdiasint);
                
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
        
        
        $desabilita= '';
        $idestado = '';
        
         $listartablaestado = $this->m_acercaroportunidadi->fm_listarestadoi($idintegrante,$valor->idoportunidad);
                
        $datos2 = '';
        if( empty($listartablaestado)){
             $datos2 =  '<option value="">No  acercada</option>';
       }
       else
       {
        
//        $datos1 =  '<option value="">Seleccione</option>';
        foreach ($listartablaestado as $valor1)
        {
                
        //estaado de la encuesta
        if($valor1->idestado == '1'){
        
            $datos2 .= '<option value="">'.$valor1->nombre_estado.'</option>';
       }else{
        
        $datos2 .=  '<option value="'.$valor1->idestado.'">'.$valor1->nombre_estado.'</option>';
        //fin estado de la oferta
       }
        
       
        //fin estado de la encuensta
       
        $idestado = $valor1->idestado ;
        
         if($idestado == 1)
        {
            $colorfila = 'class="info text-uppercase"';
        }

         if($idestado == 3)
        {
             $desabilita = 'disabled=""';
            $colorfila = 'class="warning text-uppercase"';
        }        
        
         if($idestado == 2)
        {
            $desabilita = 'disabled=""';
            $colorfila = 'class="danger text-uppercase"';
        }
        
        }  
       }
        
        $listartablaestado2 = $this->m_acercaroportunidadi->fm_listarestadoi2($idestado);
                
//        $datos2 = '';
       
        foreach ($listartablaestado2 as $valor2)
        {
                
        //estaado de la encuesta
       
        
        $datos2 .=  '<option value="'.$valor2->idestado.'">'.$valor2->nombre_estado.'</option>';
        //fin estado de la encuensta
            
        
        }       
        
        
        //inicion estado de mejora oportunidades
        $listartablaestadomejoracond = $this->m_acercaroportunidadi->fm_listarmejconopor();
        $datosmc = '<option value="">Seleccione</option>';
        foreach ($listartablaestadomejoracond as $valormc)
        {
        $datosmc .=  '<option value="'.$valormc->idestado.'">'.$valormc->nombre_estado.'</option>';
        }       
        //fin estado de mejora oportunidades


        //inicion estado de No mejora oportunidades
        $listartablaestadomejoracondno = $this->m_acercaroportunidadi->fm_listarmejconoporno();
        $datosmcno = '<option value="">Seleccione</option>';
        foreach ($listartablaestadomejoracondno as $valormcno)
        {
        $datosmcno .=  '<option value="'.$valormcno->idestado.'">'.$valormcno->nombre_estado.'</option>';
        }       
        //fin estado de No mejora oportunidades



        $descripcion = $valor->descripcion;
            
        $datos .=  '<tr '.$colorfila.'>'
                    .'<td>'.$valor->idoportunidad.'</td>'
                    .'<td>'.$valor->nombre_oportunidad.'</td>'
                    .'<td><button class="btn btn-warning btn-sm" data-target="#myModal'.$valor->idoportunidad.'" data-toggle="modal" type="button" id="modal" name="acercarh"><span class="glyphicon glyphicon-question-sign"></span> Ayuda </button></td>'
                    .'<td class="col-xs-2"><select class="form-control input-sm " onchange="botongi('.$valor->idoportunidad.')" '.$desabilita.' id="idoportunidad'.$valor->idoportunidad.'">'.$datos2.'</select></td>'
                    .'<td><button class="btn btn-primary btn-sm" disabled="" onclick="modale('.$valor->idoportunidad.','.$valor->versionn.')" type="button" id="acercari'.$valor->idoportunidad.'" name="acercari'.$valor->idoportunidad.'"><span class="glyphicon glyphicon-check"></span> Guardar  </button></td>'
                    //.'<td><button class="btn btn-danger btn-sm" '.$desabilita.' onclick="eliminaroportunidadi('.$valor->idoportunidad.')" type="button" id="eliminari" name="acercari"><span class="glyphicon glyphicon-remove"></span> Eliminar </button></td>
                    .'</tr>';
        
//        INICIO MODAL DE AYUDA
        
         $modal .= '       <div class="modal fade" id="myModal' . $valor->idoportunidad . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Otros</h4>
                              </div>
                                   <div class="modal-body">
                                     <div>
                                                         <label> DESCRIPCIÓN</label>
                                                          <p>' . $valor->descripcion . '</p>
                                                         </div> <br><br> 
                                                         <div>
                                                         <label> REQUISITO OPORTUNIDAD</label>
                                                          <p>' . $valor->requisito_oportunidad . '</p><br><br>  
                                                          </div> <br><br>  
                                                          <div>
                                                          <label> RUTA DE ACCESO</label>
                                                          <p>' . $valor->ruta_acceso . '</p><br><br> 
                                                              </div> <br><br> 
                                                              
                                                        <div class="row">
                                                          
                                                          <div class="col-md-4"><label>fecha inicio</label><br><input type="text" class="form-control input-sm" id="fecha1" name="fecha1"  disabled=""    value="'. $valor->fechainicio_oportunidad .'"></div>
                                                          
                                                          <div class="col-md-4"><label>limite acercamiento</label><br><input type="text" class="form-control input-sm" id="fecha1" name="fecha1"  disabled=""    value="'. $valor->fechalimite_acercamientoop .'"></div>
                                                          
                                                          <div class="col-md-4"><label>limite efectividad</label><br><input type="text" class="form-control input-sm" id="fecha1" name="fecha1"  disabled=""    value="'. $valor->fechalimite_efectividadop .'"></div>
                                                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                      </div>
                    </div>
                  </div>
                </div>';
         
         //FIN MODAL
         
         $modal2 .= '<div class="modal fade" id="myModalex'.$valor->idoportunidad.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                            <h4 class="modal-title" id="myModalLabel"></h4>
                          </div>
                          <div class="modal-body">
                          <div class="row">
                          <div class="col-md-12">
                            <label>¿Esta oportunidad le representó para usted o su familia una mejora en las condiciones de vida?</label>
                           
                              <select id="mc'.$valor->idoportunidad.$valor->versionn.'" class="form-control">
                                '.$datosmc.'
                              </select>
                            </div>
                          </div>
                          <br>
                
                          </div>
                          
                          <div class="modal-footer">
                          <center>
                            <button type="button" class="btn btn-success" data-dismiss="modal" onclick="guardaroportunidadi('.$valor->idoportunidad.','.$valor->versionn.')">Confirmar efectividad</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar efectividad</button>
                          </center>  
                          </div>
                        </div>
                      </div>
                    </div>';

         $modal21 .= '<div class="modal fade" id="myModalex1'.$valor->idoportunidad.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                            <h4 class="modal-title" id="myModalLabel"></h4>
                          </div>
                          <div class="modal-body">
                          <div class="row">
                          <div class="col-md-12">
                            <label>¿Cuál fue la razón por la que no pudo acceder de manera efectiva a esta oportunidad?</label>
                           
                              <select id="mcf'.$valor->idoportunidad.$valor->versionn.'" class="form-control" onchange="otraopormejora('.$valor->idoportunidad.','.$valor->versionn.',this.value)">
                                '.$datosmcno.'
                              </select>
                            </div>
                          </div>
                          <br>
                          <textarea class="form-control" id="mejoracondicionesno'.$valor->idoportunidad.$valor->versionn.'" name="mejoracondicionesno'.$valor->idoportunidad.$valor->versionn.'" style="display:none" value=""></textarea>
                          </div>
                          
                          <div class="modal-footer">
                          <center>
                            <button type="button" class="btn btn-success" data-dismiss="modal" onclick="guardaroportunidadi('.$valor->idoportunidad.','.$valor->versionn.')">Confirmar No efectividad</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar No efectividad</button>
                          </center>  
                          </div>
                        </div>
                      </div>
                    </div>';
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'oportunidad'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'folio' => $cfolio,
                                                   'idintegrante' => $idintegrante,
                                                   'textoayuda' => $ctextoayuda, 
                                                   'arraydatosgenerales' => $carraydatosgenerales,
                                                   'idtitular' => $idtitular,
                                                   'datos' => $datos,
                                                   'modal' => $modal,
                                                   'modal2' => $modal2,
                                                   'modal21' => $modal21,
                                                   'evariable' => $cvariable,
                                                   'edadyear' =>$cyeaint,
                                                   'edadmeses' =>$cmesint));
        //Fin levantar vista
         
    }
    
    
//    function mostrarlistaoportunidadeliminada()
//    {
//        
//        
//    }
    
    
    //funcion para isertar oportunidad
    
    
     public function fc_insertaroportunidadi()
    {
        $cvidintegrante= $this->input->get('vidintegrante');
        $cvidoportunidad= $this->input->get('vidoportunidad');
        $cversion= $this->input->get('vversion');
        $cvidestado = $this->input->get('videstado');
        $doccogestor = $this->session->userdata('documento');
        $cfolio = $this->input->get('vfolio');
        $cyeaint = $this->input->get('yea');
        $cmesint = $this->input->get('mes');

        $cmejoracondiciones = $this->input->get('mejoracondiciones');
        $cidestadoobservacion = $this->input->get('idestadoobservacion');
        
        
        $modal ='';
        $modal2='';
        $modal21='';
        $this->m_acercaroportunidadi ->fm_insertaroportunidadi($cvidintegrante,$cvidoportunidad,$cversion,$cvidestado,$doccogestor,$cmejoracondiciones,$cidestadoobservacion);
       //echo json_encode(array('result' => 'guardado'));
        
        
        $listartabla = $this->m_acercaroportunidadi->fm_acercaroportunidadi($cfolio,$cvidintegrante,$cyeaint,$cmesint,0);
                
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
        
        
        $desabilita= '';
        $idestado = '';
        
         $listartablaestado = $this->m_acercaroportunidadi->fm_listarestadoi($cvidintegrante,$valor->idoportunidad);
                
        $datos2 = '';
        if( empty($listartablaestado)){
             $datos2 =  '<option value="">No  acercada</option>';
       }
       else
       {
        
//        $datos1 =  '<option value="">Seleccione</option>';
        foreach ($listartablaestado as $valor1)
        {
                
        //estaado de la encuesta
        if($valor1->idestado == '1'){
        
            $datos2 .= '<option value="">'.$valor1->nombre_estado.'</option>';
       }else{
        
        $datos2 .=  '<option value="'.$valor1->idestado.'">'.$valor1->nombre_estado.'</option>';
        //fin estado de la oferta
       }
        
       
        //fin estado de la encuesta
       
        $idestado = $valor1->idestado ;
        
         if($idestado == 1)
        {
            $colorfila = 'class="info text-uppercase"';
        }

         if($idestado == 3)
        {
             $desabilita = 'disabled=""';
            $colorfila = 'class="warning text-uppercase"';
        }        
        
         if($idestado == 2)
        {
            $desabilita = 'disabled=""';
            $colorfila = 'class="danger text-uppercase"';
        }
        
        }  
       }
        
        $listartablaestado2 = $this->m_acercaroportunidadi->fm_listarestadoi2($idestado);
                
//        $datos2 = '';
       
        foreach ($listartablaestado2 as $valor2)
        {
                
        //estaado de la encuesta
       
        
        $datos2 .=  '<option value="'.$valor2->idestado.'">'.$valor2->nombre_estado.'</option>';
        //fin estado de la encuensta
            
        
        }       
        
        $descripcion = $valor->descripcion;
        
        
        //estaado de la encuesta
      
        
        
        
        //fin estado de la encuensta
            
        $datos .=  '<tr '.$colorfila.'>'
                    .'<td>'.$valor->idoportunidad.'</td>'
                    .'<td>'.$valor->nombre_oportunidad.'</td>'
                    .'<td><button class="btn btn-warning btn-sm" data-target="#myModal'.$valor->idoportunidad.'" data-toggle="modal" type="button" id="modal" name="acercarh"><span class="glyphicon glyphicon-question-sign"></span> Ayuda </button></td>'
                    .'<td class="col-xs-2"><select class="form-control input-sm " onchange="botongi('.$valor->idoportunidad.')" '.$desabilita.' id="idoportunidad'.$valor->idoportunidad.'">'.$datos2.'</select></td>'
                    .'<td><button class="btn btn-primary btn-sm" disabled="" onclick="modale('.$valor->idoportunidad.','.$valor->versionn.')" type="button" id="acercari'.$valor->idoportunidad.'" name="acercari'.$valor->idoportunidad.'"><span class="glyphicon glyphicon-check"></span> Guardar  </button></td>'
                    //.'<td><button class="btn btn-danger btn-sm" '.$desabilita.' onclick="eliminaroportunidadi('.$valor->idoportunidad.')" type="button" id="eliminari" name="acercari"><span class="glyphicon glyphicon-remove"></span> Eliminar </button></td>
                    .'</tr>';
         
        $modal .= '       <div class="modal fade" id="myModal' . $valor->idoportunidad . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Otros</h4>
                              </div>
                              <div class="modal-body">
                                   

                                                   <div>
                                                         <label> DESCRIPCIÓN</label>
                                                          <p>' . $valor->descripcion . '</p>
                                                         </div> <br><br> 
                                                         <div>
                                                         <label> REQUISITO OPORTUNIDAD</label>
                                                          <p>' . $valor->requisito_oportunidad . '</p><br><br>  
                                                          </div> <br><br>  
                                                          <div>
                                                          <label> RUTA DE ACCESO</label>
                                                          <p>' . $valor->ruta_acceso . '</p><br><br> 
                                                              </div> <br><br> 
                                                              
                                                        <div class="row">
                                                          
                                                          <div class="col-md-4"><label>fecha inicio</label><br><input type="text" class="form-control input-sm" id="fecha1" name="fecha1"  disabled=""    value="'. $valor->fechainicio_oportunidad .'"></div>
                                                          
                                                          <div class="col-md-4"><label>limite acercamiento</label><br><input type="text" class="form-control input-sm" id="fecha1" name="fecha1"  disabled=""    value="'. $valor->fechalimite_acercamientoop .'"></div>
                                                          
                                                          <div class="col-md-4"><label>limite efectividad</label><br><input type="text" class="form-control input-sm" id="fecha1" name="fecha1"  disabled=""    value="'. $valor->fechalimite_efectividadop .'"></div>
                                                        </div>




                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                              </div>
                            </div>
                          </div>
                        </div>';
                                 //FIN MODAL
                                 
        $modal2 .= '<div class="modal fade" id="myModalex'.$valor->idoportunidad.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"></h4>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                                                      <div class="form-group has-success" >    

                                                          <h3> Desea hacer efectiva la oportunidad?</h3>



                                                    </div> 
                            </div><br>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal" onclick="guardaroportunidadi('.$valor->idoportunidad.','.$valor->versionn.')">Si</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>

                          </div>
                        </div>
                      </div>
                    </div>';
        }

        echo json_encode(array('datos'=>$datos,'modal'=>$modal,'modal2'=>$modal2 ));
    }
   //fin isertar oportunidad 
    
    // esta funcion me permite eliminar la oportunidad acercada y me carga la tabla por medio de ajax
    
    function fc_filtrartablai()
    {
        
        $cvidintegrante= $this->input->get('vidintegrante');
        $cidbuscopi= $this->input->get('vidbuscopi');
        $cnombuscopi= $this->input->get('vnombuscopi');
        $cvestbuscopi = $this->input->get('vestbuscopi');         
        $cyeaint = $this->input->get('yea');
        $cmesint = $this->input->get('mes');
        $cvdimension= $this->input->get('vdimension');
        
        $modal ='';
        $modal2='';
        $listartabla = $this->m_acercaroportunidadi->fm_buscaroportunidadi($cvidintegrante,$cidbuscopi,$cnombuscopi,$cvestbuscopi,$cyeaint,$cmesint,$cvdimension);
                
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
        
        $desabilita= '';
        $idestado = '';
        
        
         $listartablaestado = $this->m_acercaroportunidadi->fm_listarestadoi($cvidintegrante,$valor->idoportunidad);
                
        $datos2 = '';
        if( empty($listartablaestado)){
             $datos2 =  '<option value="">No  acercada</option>';
       }
       else
       {
        
//        $datos1 =  '<option value="">Seleccione</option>';
        foreach ($listartablaestado as $valor1)
        {
                
        //estaado de la encuesta
        if($valor1->idestado == '1'){
        
            $datos2 .= '<option value="">'.$valor1->nombre_estado.'</option>';
       }else{
        
        $datos2 .=  '<option value="'.$valor1->idestado.'">'.$valor1->nombre_estado.'</option>';
        //fin estado de la oferta
       }
        //fin estado de la encuensta
       
         $idestado = $valor1->idestado ;
        
         if($idestado == 1)
        {
            $colorfila = 'class="info text-uppercase"';
        }

         if($idestado == 3)
        {
             $desabilita = 'disabled=""';
            $colorfila = 'class="warning text-uppercase"';
        }        
        
         if($idestado == 2)
        {
            $desabilita = 'disabled=""';
            $colorfila = 'class="danger text-uppercase"';
        } 
//        else 
//        {
//            $desabilita = '';
//        }
        
        
        
        }  
       }
        
        $listartablaestado2 = $this->m_acercaroportunidadi->fm_listarestadoi2($idestado);
                
//        $datos2 = '';
       
        foreach ($listartablaestado2 as $valor2)
        {
                
        //estaado de la encuesta
       
        
        $datos2 .=  '<option value="'.$valor2->idestado.'">'.$valor2->nombre_estado.'</option>';
        //fin estado de la encuensta
            
        
        }       
        
        
        
        
        //estaado de la encuesta
      
        
        
        
        //fin estado de la encuensta
            
       $descripcion = $valor->descripcion;
        
        
        //estaado de la encuesta
      
        
        
        
        //fin estado de la encuensta
            
        $datos .=  '<tr '.$colorfila.'>'
                    .'<td>'.$valor->idoportunidad.'</td>'
                    .'<td>'.$valor->nombre_oportunidad.'</td>'
                    .'<td><button class="btn btn-warning btn-sm" data-target="#myModal'.$valor->idoportunidad.'" data-toggle="modal" type="button" id="modal" name="acercarh"><span class="glyphicon glyphicon-question-sign"></span> Ayuda </button></td>'
                    .'<td class="col-xs-2"><select onchange="botongi('.$valor->idoportunidad.')" class="form-control input-sm " '.$desabilita.' id="idoportunidad'.$valor->idoportunidad.'">'.$datos2.'</select></td>'
                    .'<td><button class="btn btn-primary btn-sm" disabled="" onclick="modale('.$valor->idoportunidad.','.$valor->versionn.')" type="button" id="acercari'.$valor->idoportunidad.'" name="acercari'.$valor->idoportunidad.'"><span class="glyphicon glyphicon-check"></span> Guardar  </button></td>'
                    //.'<td><button class="btn btn-danger btn-sm" '.$desabilita.' onclick="eliminaroportunidadi('.$valor->idoportunidad.')" type="button" id="eliminari" name="acercari"><span class="glyphicon glyphicon-remove"></span> Eliminar </button></td>
                    .'</tr>';
//        INICIO MODAL AYUDA
                  /*               $modal .= '       <div class="modal fade" id="myModal' . $valor->idoportunidad . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Otros</h4>
                              </div>
                              <div class="modal-body">
                                   

                                                   <div>
                                                         <label> DESCRIPCIÓN</label>
                                                          <p>' . $valor->descripcion . '</p>
                                                         </div> <br><br> 
                                                         <div>
                                                         <label> REQUISITO OPORTUNIDAD</label>
                                                          <p>' . $valor->requisito_oportunidad . '</p><br><br>  
                                                          </div> <br><br>  
                                                          <div>
                                                          <label> RUTA DE ACCESO</label>
                                                          <p>' . $valor->ruta_acceso . '</p><br><br> 
                                                              </div> <br><br> 
                                                              
                                                        <div class="row">
                                                          
                                                          <div class="col-md-4"><label>fecha inicio</label><br><input type="text" class="form-control input-sm" id="fecha1" name="fecha1"  disabled=""    value="'. $valor->fechainicio_oportunidad .'"></div>
                                                          
                                                          <div class="col-md-4"><label>limite acercamiento</label><br><input type="text" class="form-control input-sm" id="fecha1" name="fecha1"  disabled=""    value="'. $valor->fechalimite_acercamientoop .'"></div>
                                                          
                                                          <div class="col-md-4"><label>limite efectividad</label><br><input type="text" class="form-control input-sm" id="fecha1" name="fecha1"  disabled=""    value="'. $valor->fechalimite_efectividadop .'"></div>
                                                        </div>




                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                              </div>
                            </div>
                          </div>
                        </div>';
                                 //FIN MODAL
                                 
                                 $modal2 .= '<div class="modal fade" id="myModalex'.$valor->idoportunidad.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"></h4>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                                                      <div class="form-group has-success" >    

                                                          <h3> Desea hacer efectiva la oportunidad?</h3>



                                                    </div> 
                                            </div><br>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal" onclick="guardaroportunidadi('.$valor->idoportunidad.','.$valor->versionn.')">Si</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>

                          </div>
                        </div>
                      </div>
                    </div>'; */
        }

      //  echo json_encode(array('datos'=>$datos,'modal'=>$modal,'modal2'=>$modal2 ));
        echo json_encode(array('datos'=>$datos));
    }

    public function fc_toalizarhogar() {
        
        $cvidintegrante= $this->input->get('vidintegrante');     
         $cyeaint = $this->input->get('yea');
        $cmesint = $this->input->get('mes');

        $listartabla = $this->m_acercaroportunidadi->fm_totaleshogar($cvidintegrante,$cyeaint,$cmesint);

        $datostotales = '';
 
        foreach ($listartabla as $valor)
        { 
            $datostotales = '<li class="list-group-item list-group-item-info">Acercadas : '.$valor->totalasignada.' </li>
                             <li class="list-group-item list-group-item-warning">No Efectivas : '.$valor->totalnoefectiva.'</li>
                             <li class="list-group-item list-group-item-danger">Efectivas : '.$valor->totalefectiva.'</li>';
        }
         
        echo ($datostotales);
    }    
    
    
}
