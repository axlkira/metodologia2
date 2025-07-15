<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_metahogar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('linea2estacion1/m_metahogar');//carga el controlador modelo
        
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_metahogar($page = 'v_metahogar') {

        if (!file_exists('application/views/pages/linea2estacion1/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get
        $doccogestor = $this->input->get('doccogestor');
        $idestacion = $this->input->get('idestacion');
        
         $this->m_metahogar->fm_metaestacioncero($cfolio);
        
        //para traer la informacion de ayudas
        $cayudas = $this->m_metahogar->fm_ayudas();
        
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_metahogar->fm_cargardatosgenerales($cfolio);
        $carraydatosgenerales= array('enomcoges' => '', 'efolio' =>'', 'ecapitulo' => '', 'etitular' => '','edoctitular' => ''); 
        foreach ($cdatosgenerales as $cdatgen)
        {
            $carraydatosgenerales = array('enomcoges' => $cdatgen->nomcoges,'efolio' => $cdatgen->folio,'ecapitulo' => $cdatgen->capitulo,'etitular' => $cdatgen->titular,'edoctitular' => $cdatgen->doctitular);
        }
         //traer una lista de valores
        $listardimensiones = $this->m_metahogar->fm_listardimensiones();
        $dimensiones = '';
        foreach ($listardimensiones as $estado)
        {
        $dimensiones .= '<option value="'.$estado->id.'">'.$estado->dimension.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
         //traer una lista de valores
        $listaracciones = $this->m_metahogar->fm_listaracciones();
        $acciones = '';
        foreach ($listaracciones as $accion)
        {
        $acciones .= '<option value="'.$accion->idaccion.'">'.$accion->nombreaccion.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
        //fin traer datos generales
        $crespuestametas = $this->m_metahogar->fm_buscarmetas($cfolio);
                                 
        //$carraymetas = array('efolio' =>'','emeta1' => '','emeta1dimension' => '','emeta2' => '','emeta2dimension' => '','emeta3' => '','emeta3dimension' => '','enombdimension1' =>'','enombdimension2' =>'','enombdimension3' =>'','eeerf'); 
        $contmeta = 0;
        $classerror = '';
        $cmetas = '';
        foreach ($crespuestametas as $cresmetas)
        {
            $contmeta++;
           // $carraymetas = array('efolio'=>$cresmetas->folio,'emeta1'=>$cresmetas->meta1,'emeta1dimension'=>$cresmetas->meta1dimension,'emeta2'=>$cresmetas->meta2,'emeta2dimension'=>$cresmetas->meta2dimension,'emeta3'=>$cresmetas->meta3,'emeta3dimension'=>$cresmetas->meta3dimension,'enombdimension1'=>$cresmetas->nombdimension1,'enombdimension2'=>$cresmetas->nombdimension2,'enombdimension3'=>$cresmetas->nombdimension3,'eeerf' =>$cresmetas->eerf);
            
            
            
            $cmetas .= '<div class="row">
            <div  id="meta'.$contmeta.'mostrarp" name="meta'.$contmeta.'mostrarp" class="form-group col-md-6 form-group-sm '.$classerror.'">
            <label class="control-label">Describir  la meta '.$contmeta.'</label>
            <textarea class="form-control" id="meta'.$contmeta.'mostrar" onkeypress="return soloLetras(event)"  name="meta'.$contmeta.'mostrar" value="">'.$cresmetas->meta.'</textarea>
            </div>
            <div id="meta'.$contmeta.'dimediv" name="meta'.$contmeta.'dimediv" class="form-group col-md-4 form-group-sm">
                        <label class="control-label" for="enunmeta'.$contmeta.'">Dimensión de la meta</label>
                        <select class="form-control input-sm" id="meta'.$contmeta.'dime" name="meta'.$contmeta.'dime">
                            <option value="'.$cresmetas->dimension.'">'.$cresmetas->nombredimension.'</option>
                            '.$dimensiones.'
                        </select>
            </div>
            <div  class="form-group col-md-2 form-group-sm">
            <br>
            <button type="button" class="btn btn-info" onclick="nuevaaccion('.$cresmetas->id.')">Acciones</button>
            <button type="button" class="btn btn-success" onclick="actualizarmeta('.$cresmetas->id.','.$contmeta.')">Editar</button>
            </div>
            </div>
            ';
            
        }
        //fin traer datos generales
        
       
        
        
        
        
        //Levantar vista     
        $titulo = 'Metas'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/linea2estacion1/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'folio' => $cfolio,
                                                   'doccogestor' => $doccogestor,
                                                   'textoayuda' => $ctextoayuda,
                                                   'dimensiones' => $dimensiones,
                                                  // 'carraymetas' =>$carraymetas,
                                                   'arraydatosgenerales' => $carraydatosgenerales,
                                                   'metas' => $cmetas,
                                                   'acciones' => $acciones,
                                                    'idestacion'=>$idestacion));
        //Fin levantar vista
    }
    //funcion para actualizar
    public function fc_actualizar()
    {
        $cfolio = $this->input->get('vfolio');
        $cmeta1mostrar= $this->input->get('vmeta1mostrar');
        $cmeta1dime= $this->input->get('vmeta1dime');
        $cmeta2mostrar= $this->input->get('vmeta2mostrar');
        $cmeta2dime= $this->input->get('vmeta2dime');
        $cmeta3mostrar= $this->input->get('vmeta3mostrar');
        $cmeta3dime= $this->input->get('vmeta3dime');
                
        $this->m_metahogar->fm_actualizarpregunta($cfolio,$cmeta1mostrar,$cmeta1dime,$cmeta2mostrar,$cmeta2dime,$cmeta3mostrar,$cmeta3dime);
       //echo json_encode(array('result' => 'guardado'));
    }
    //fin funcion para actualizar
    
    
    public function fc_guardarnuevameta()
    {
        $cfolio = $this->input->get('vfolio');
        $cnuevameta= $this->input->get('vnuevameta');
        $cdimensionnuevameta= $this->input->get('vdimensionnuevameta');
       
                
        $this->m_metahogar->fm_guardarnuevameta($cfolio,$cnuevameta,$cdimensionnuevameta);
       
        
        $listardimensiones = $this->m_metahogar->fm_listardimensiones();
        $dimensiones = '';
        foreach ($listardimensiones as $estado)
        {
        $dimensiones .= '<option value="'.$estado->id.'">'.$estado->dimension.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
        //fin traer datos generales
        $crespuestametas = $this->m_metahogar->fm_buscarmetas($cfolio);
                                 
        //$carraymetas = array('efolio' =>'','emeta1' => '','emeta1dimension' => '','emeta2' => '','emeta2dimension' => '','emeta3' => '','emeta3dimension' => '','enombdimension1' =>'','enombdimension2' =>'','enombdimension3' =>'','eeerf'); 
        $contmeta = 0;
        $classerror = '';
        $cmetas = '';
        foreach ($crespuestametas as $cresmetas)
        {
            $contmeta++;
           // $carraymetas = array('efolio'=>$cresmetas->folio,'emeta1'=>$cresmetas->meta1,'emeta1dimension'=>$cresmetas->meta1dimension,'emeta2'=>$cresmetas->meta2,'emeta2dimension'=>$cresmetas->meta2dimension,'emeta3'=>$cresmetas->meta3,'emeta3dimension'=>$cresmetas->meta3dimension,'enombdimension1'=>$cresmetas->nombdimension1,'enombdimension2'=>$cresmetas->nombdimension2,'enombdimension3'=>$cresmetas->nombdimension3,'eeerf' =>$cresmetas->eerf);
            
            
            
            $cmetas .= '<div class="row">
            <div  id="meta'.$contmeta.'mostrarp" name="meta'.$contmeta.'mostrarp" class="form-group col-md-6 form-group-sm '.$classerror.'">
            <label class="control-label">Describir  la meta '.$contmeta.'</label>
            <textarea class="form-control" id="meta'.$contmeta.'mostrar" onkeypress="return soloLetras(event)"  name="meta'.$contmeta.'mostrar" value="">'.$cresmetas->meta.'</textarea>
            </div>
            <div id="meta'.$contmeta.'dimediv" name="meta'.$contmeta.'dimediv" class="form-group col-md-4 form-group-sm">
                        <label class="control-label" for="enunmeta'.$contmeta.'">Dimensión de la meta</label>
                        <select class="form-control input-sm" id="meta'.$contmeta.'dime" name="meta'.$contmeta.'dime">
                            <option value="'.$cresmetas->dimension.'">'.$cresmetas->nombredimension.'</option>
                            '.$dimensiones.'
                        </select>
            </div>
            <div  class="form-group col-md-2 form-group-sm">
            <br>
            <button type="button" class="btn btn-info" onclick="nuevaaccion('.$cresmetas->id.')">Acciones</button>
            <button type="button" class="btn btn-success" onclick="actualizarmeta('.$cresmetas->id.','.$contmeta.')">Editar</button>
            </div>
            
            </div>
            ';
            
        }
        
        echo $cmetas;
    }
    
    public function fc_actualizarmeta()
    {
        $cfolio = $this->input->get('vfolio');
        $cnuevameta= $this->input->get('vnuevameta');
        $cdimensionnuevameta= $this->input->get('vdimensionnuevameta');
        $cidmeta = $this->input->get('vidmeta');
       
                
        $this->m_metahogar->fm_actualizarmeta($cidmeta,$cfolio,$cnuevameta,$cdimensionnuevameta);
       
        
        $listardimensiones = $this->m_metahogar->fm_listardimensiones();
        $dimensiones = '';
        foreach ($listardimensiones as $estado)
        {
        $dimensiones .= '<option value="'.$estado->id.'">'.$estado->dimension.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
        //fin traer datos generales
        $crespuestametas = $this->m_metahogar->fm_buscarmetas($cfolio);
                                 
        //$carraymetas = array('efolio' =>'','emeta1' => '','emeta1dimension' => '','emeta2' => '','emeta2dimension' => '','emeta3' => '','emeta3dimension' => '','enombdimension1' =>'','enombdimension2' =>'','enombdimension3' =>'','eeerf'); 
        $contmeta = 0;
        $classerror = '';
        $cmetas = '';
        foreach ($crespuestametas as $cresmetas)
        {
            $contmeta++;
           // $carraymetas = array('efolio'=>$cresmetas->folio,'emeta1'=>$cresmetas->meta1,'emeta1dimension'=>$cresmetas->meta1dimension,'emeta2'=>$cresmetas->meta2,'emeta2dimension'=>$cresmetas->meta2dimension,'emeta3'=>$cresmetas->meta3,'emeta3dimension'=>$cresmetas->meta3dimension,'enombdimension1'=>$cresmetas->nombdimension1,'enombdimension2'=>$cresmetas->nombdimension2,'enombdimension3'=>$cresmetas->nombdimension3,'eeerf' =>$cresmetas->eerf);
            
            
            
            $cmetas .= '<div class="row">
            <div  id="meta'.$contmeta.'mostrarp" name="meta'.$contmeta.'mostrarp" class="form-group col-md-6 form-group-sm '.$classerror.'">
            <label class="control-label">Describir  la meta '.$contmeta.'</label>
            <textarea class="form-control" id="meta'.$contmeta.'mostrar" onkeypress="return soloLetras(event)"  name="meta'.$contmeta.'mostrar" value="">'.$cresmetas->meta.'</textarea>
            </div>
            <div id="meta'.$contmeta.'dimediv" name="meta'.$contmeta.'dimediv" class="form-group col-md-4 form-group-sm">
                        <label class="control-label" for="enunmeta'.$contmeta.'">Dimensión de la meta</label>
                        <select class="form-control input-sm" id="meta'.$contmeta.'dime" name="meta'.$contmeta.'dime">
                            <option value="'.$cresmetas->dimension.'">'.$cresmetas->nombredimension.'</option>
                            '.$dimensiones.'
                        </select>
            </div>
            <div  class="form-group col-md-2 form-group-sm">
            <br>
            <button type="button" class="btn btn-info" onclick="nuevaaccion('.$cresmetas->id.')">Acciones</button>
            <button type="button" class="btn btn-success" onclick="actualizarmeta('.$cresmetas->id.','.$contmeta.')">Editar</button>
            </div>
            
            </div>
            ';
            
        }
        
        echo $cmetas;
    }
    
    public function fc_abriracciones() {
        
         $cmeta= $this->input->get('vidmeta');
         $cfolio= $this->input->get('vfolio');
       
                
        $traeracciones = $this->m_metahogar->fm_listaraccionesxmeta($cfolio,$cmeta);
       
        $tablaacciones = '';
        foreach ($traeracciones as $accion)
        {
        $tablaacciones .= '<tr><td style="display: none">'.$accion->id.'</td>
                <td>'.$accion->nombreaccion.'</td>
                <td>'.$accion->descripcionaccion.'</td>
                <td>'.$accion->fecharegistro.'</td>
                <td><button type="button" class="btn btn-warning btn-xs">
    <span class="glyphicon glyphicon-remove" onclick="eliminaraccion('.$accion->id.')"></span>
  </button></td>
                <td><button type="button" class="btn btn-info btn-xs">
    <span class="glyphicon glyphicon-edit" onclick="editaraccion('.$accion->id.','.$accion->idaccion.',\''.$accion->descripcionaccion.'\')"></span>
  </button></td>
                </tr>';
        }
        
        echo $tablaacciones;
    }
    
     public function fc_insertaraccion() {
        
         $caccion= $this->input->get('vidaccion');
         $cfolio= $this->input->get('vfolio');
         $cmeta= $this->input->get('vidmeta');
         $cdescripcion= $this->input->get('vdescripcion');
         $cidaccioneditar = $this->input->get('vidaccioneditar');
                
       $this->m_metahogar->fm_insertaraccion($cidaccioneditar,$caccion,$cfolio,$cmeta,$cdescripcion);
       
        $traeracciones = $this->m_metahogar->fm_listaraccionesxmeta($cfolio,$cmeta);
        $tablaacciones = '';
        foreach ($traeracciones as $accion)
        {
        $tablaacciones .= '<tr><td style="display: none">'.$accion->id.'</td>
                <td>'.$accion->nombreaccion.'</td>
                <td>'.$accion->descripcionaccion.'</td>
                <td>'.$accion->fecharegistro.'</td>
                <td><button type="button" class="btn btn-warning btn-xs">
    <span class="glyphicon glyphicon-remove" onclick="eliminaraccion('.$accion->id.')"></span>
  </button></td>  
  <td><button type="button" class="btn btn-info btn-xs">
    <span class="glyphicon glyphicon-edit" onclick="editaraccion('.$accion->id.','.$accion->idaccion.',\''.$accion->descripcionaccion.'\')"></span>
  </button></td>
                </tr>';
        }
        
        echo $tablaacciones;
    }
   
    public function fc_eliminaraccion() {
        
         $caccion= $this->input->get('vidaccion');
         $cfolio= $this->input->get('vfolio');
         $cmeta= $this->input->get('vidmeta');
       
                
       $this->m_metahogar->fm_eliminaraccion($caccion);
       
        $traeracciones = $this->m_metahogar->fm_listaraccionesxmeta($cfolio,$cmeta);
        $tablaacciones = '';
        foreach ($traeracciones as $accion)
        {
        $tablaacciones .= '<tr><td style="display: none">'.$accion->id.'</td>
                <td>'.$accion->nombreaccion.'</td>
                <td>'.$accion->descripcionaccion.'</td>
                <td>'.$accion->fecharegistro.'</td>
                <td><button type="button" class="btn btn-warning btn-xs">
    <span class="glyphicon glyphicon-remove" onclick="eliminaraccion('.$accion->id.')"></span>
  </button></td>  
  <td><button type="button" class="btn btn-info btn-xs">
    <span class="glyphicon glyphicon-edit" onclick="editaraccion('.$accion->id.','.$accion->idaccion.',\''.$accion->descripcionaccion.'\')"></span>
  </button></td>
                </tr>';
        }
        
        echo $tablaacciones;
    }
    
     public function fc_metaestacioncero() {
        
        
        $cfolio= $this->input->get('vfolio');
         
        $this->m_metahogar->fm_metaestacioncero($cfolio);
     }
     
      // FUNCION QUE REGISTRA CADA PASO FINALIZADO
    public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_metahogar->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    
}
