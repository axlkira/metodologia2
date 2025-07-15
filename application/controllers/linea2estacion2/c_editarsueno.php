<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/////////////// NUEVO LOGIN ///////////////////////////
class C_editarsueno extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('/linea2estacion2/m_editarsueno');
    }

     //funcion encargada de llamar a la vista de la pagina 
    public function fc_editarsueno($page = 'v_editarsueno') {

        if (!file_exists('application/views/pages/linea2estacion2/'. $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        //INICIO TRAER DATOS DEL TITULAR
        $doccogestor = $this->input->get('doccogestor');
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
        $idsueno = $this->input->get('idsueno');
        $datosintegrante = $this->m_editarsueno->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
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
        $folioexiste = $this->m_editarsueno->fm_folioexiste($folio);//lo mandasmos a la funcion del modelo para verificar
        
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
        //validar si el sueño existe
        $suenoexiste = $this->m_editarsueno->fm_principalhogarsuenoact($folio,$idintegrante,$idsueno);//lo mandasmos a la funcion del modelo para verificar
        
        //ACA USTEDES SI TOCAN - COLOCAN EL NOMBRE DE LAS VARIABLES idresc9mp1 - idresc9mp4a - idresc9mp4b - idresc9mp4c
        $suexiste= array('eid'=>'','efolio'=>'','eidintegrante'=>'','enombreintegrante'=>'','eaplica'=>'','eaplicasueno'=>'','enombresueno'=>'','ecatsueno'=>'','enecesidad'=>'','erecursosinternoso1'=>'','erecursosinternoso2'=>'','erecursosinternoso3'=>'','erecursosinternoso4'=>'','erecursosinternoso5'=>'','erecursosinternoso6'=>'','erecursosinternoso7'=>'','erecursosinternoso8'=>'','erecursosinternoso9'=>'','erecursosexternoso1'=>'','erecursosexternoso2'=>'','erecursosexternoso3'=>'','erecursosexternoso4'=>'','erecursosexternoso5'=>'','efechacreacionsueno'=>'','efechaactualizacionsueno'=>'');
        foreach ($suenoexiste as $fila)
        {
        //USTEDES SI TOCAN - LO VERDE LO COLCAN COMO ESTA EN LA TABLA DE LA BD
        $suexiste = array('eid'=>$fila->id,'efolio'=>$fila->folio,'eidintegrante'=>$fila->idintegrante,'enombreintegrante'=>$fila->nombreintegrante,'eaplica'=>$fila->aplica,'eaplicasueno'=>$fila->aplicasueno,'enombresueno'=>$fila->nombresueno,'ecatsueno'=>$fila->catsueno,'enecesidad'=>$fila->necesidad,'erecursosinternoso1'=>$fila->recursosinternoso1,'erecursosinternoso2'=>$fila->recursosinternoso2,'erecursosinternoso3'=>$fila->recursosinternoso3,'erecursosinternoso4'=>$fila->recursosinternoso4,'erecursosinternoso5'=>$fila->recursosinternoso5,'erecursosinternoso6'=>$fila->recursosinternoso6,'erecursosinternoso7'=>$fila->recursosinternoso7,'erecursosinternoso8'=>$fila->recursosinternoso8,'erecursosinternoso9'=>$fila->recursosinternoso9,'erecursosexternoso1'=>$fila->recursosexternoso1,'erecursosexternoso2'=>$fila->recursosexternoso2,'erecursosexternoso3'=>$fila->recursosexternoso3,'erecursosexternoso4'=>$fila->recursosexternoso4,'erecursosexternoso5'=>$fila->recursosexternoso5,'efechacreacionsueno'=>$fila->fechacreacionsueno,'efechaactualizacionsueno'=>$fila->fechaactualizacionsueno); //se guarda el resultado del ption value en la variable datos
        }
        //fin validar si el sueño existe
        //traer una lista de valores
        $listacategorias = $this->m_editarsueno->fm_listarcategorias();
        $categorias = '';
        foreach ($listacategorias as $categoria)
        {
        $categorias .= '<option value="'.$categoria->id.'">'.$categoria->necesidad.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
        //traer una lista de valores
        $listasino = $this->m_editarsueno->fm_listarrepresentante($folio);
        $representante = '';
        foreach ($listasino as $estado)
        {
        $representante .= '<option value="'.$estado->idintegrante.'">'.$estado->nombrecompleto.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
        //traer una lista de valores
        $listasino = $this->m_editarsueno->fm_suenoaplica();
        $motivo = '';
        foreach ($listasino as $estado)
        {
        $motivo .= '<option value="'.$estado->id.'">'.$estado->aplicasueno.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        //traer una lista de valores
        $listartabla = $this->m_editarsueno->fm_principalhogarsueno($folio);
        
        
        $datossueno = '';
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
        
        $datossueno .=  '<tr '.$colorfila.'>'
                    .'<td>'.$valor->folio.'</td>'
                    .'<td>'.$valor->nombreintegrante.'</td>'
                    .'<td>'.$valor->aplicasueno.'</td>'
                    .'<td>'.$valor->id.'</td>'
                    .'<td>'.$valor->nombresueno.'</td>'
                    .'<td>'.$valor->necesidad.'</td>'
                    .'<td>'.$valor->fechacreacionsueno.'</td>'
                    .'<td><button type="button" id="acciones'.$valor->idintegrante.'" onclick="acciones('.$valor->id.','.$valor->folio.','.$valor->idintegrante.')" class="btn btn-success btn-sm">Crear o ver acciones</button></td>'
                    .'<td><button type="button" id="editarsueno'.$valor->idintegrante.'" onclick="editarsueno('.$valor->id.','.$valor->folio.','.$valor->idintegrante.')" class="btn btn-default btn-sm">Editar Sueño</button></td>'
                    .'<td><button type="button" id="eliminarsueno'.$valor->idintegrante.'" onclick="eliminarsueno('.$valor->id.','.$valor->folio.','.$valor->idintegrante.')" class="btn btn-danger btn-sm">Eliminar Sueño</button></td>    
                        
                    </tr>';
        }
        //ESTO LEVANTA LA VISTA     
        $titulo = 'v_editarsueno'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/linea2estacion2/'.$page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head1' => HEAD1, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA, 'botonerac' => BOTONERAC,'motivo' => $motivo, 'representante' => $representante,'folio' => $folio, 'doccogestor' => $doccogestor, 'foexiste' =>$foexiste, 'tdatinte' => $tdatinte, 'suexiste' => $suexiste, 'categorias' => $categorias,'datossueno'=>$datossueno,'idsueno'=>$idsueno));
        //FIN LEVANTA LA VISTA
     }
     
    //funcion para guardar
    public function fc_actualizar()
    {
        $cidsueno = $this->input->get('vidsueno');
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $caplica= $this->input->get('vaplica');
        $cnombresueno = $this->input->get('vnombresueno');
        $ccatsueno = $this->input->get('vcatsueno');
        $crecursosinto1 = $this->input->get('vrecursosinto1');
        $crecursosinto2 = $this->input->get('vrecursosinto2');
        $crecursosinto3 = $this->input->get('vrecursosinto3');
        $crecursosinto4 = $this->input->get('vrecursosinto4');
        $crecursosinto5 = $this->input->get('vrecursosinto5');
        $crecursosinto6 = $this->input->get('vrecursosinto6');
        $crecursosinto7 = $this->input->get('vrecursosinto7');
        $crecursosinto8 = $this->input->get('vrecursosinto8');
        $crecursosinto9 = $this->input->get('vrecursosinto9');
        $crecursosexto1 = $this->input->get('vrecursosexto1');
        $crecursosexto2 = $this->input->get('vrecursosexto2');
        $crecursosexto3 = $this->input->get('vrecursosexto3');
        $crecursosexto4 = $this->input->get('vrecursosexto4');
        $crecursosexto5 = $this->input->get('vrecursosexto5');
        $this->m_editarsueno->fm_actualizar($cidsueno,$cfolio,$cidintegrante,$caplica,$cnombresueno,$ccatsueno,$crecursosinto1,$crecursosinto2,$crecursosinto3,$crecursosinto4,$crecursosinto5,$crecursosinto6,$crecursosinto7,$crecursosinto8,$crecursosinto9,$crecursosexto1,$crecursosexto2,$crecursosexto3,$crecursosexto4,$crecursosexto5);
        //echo json_encode(array('result' => 'guardado'));
        
    }
    //fin funcion para guardar
    public function fc_eliminarsueno()
    {
        $cid = $this->input->get('vid');
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $this->m_editarsueno->fm_eliminarsueno($cid,$cfolio,$cidintegrante);
        //echo json_encode(array('result' => 'guardado'));
    }
     
}
