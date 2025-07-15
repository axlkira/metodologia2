<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/////////////// NUEVO LOGIN ///////////////////////////
class C_editaraccionessueno extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('/linea2estacion2/m_editaraccionessueno');
    }

     //funcion encargada de llamar a la vista de la pagina 
    public function fc_editaraccionessueno($page = 'v_editaraccionessueno') {

        if (!file_exists('application/views/pages/linea2estacion2/'. $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        //INICIO TRAER DATOS DEL INTEGRANTE
        $doccogestor = $this->input->get('doccogestor');
        $folio = $this->input->get('folio');//tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');
        $idsueno = $this->input->get('idsueno');
        $idaccion = $this->input->get('idaccion');
        
        //validar si el folio existe
        $folioexiste = $this->m_editaraccionessueno->fm_folioexiste($folio);//lo mandasmos a la funcion del modelo para verificar
        
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
        $datossuenointegrante = $this->m_editaraccionessueno->fm_suenointegrante($folio,$idintegrante,$idsueno);//lo mandasmos a la funcion del modelo para verificar
        
        $tdatsuenointe= array('tid'=>'','tfolio' => '','tidintegrante' => '','tnombreintegrante'=>'','tnombresueno'=>'','tcatsueno'=>'','taplicasueno'=>'','tfcreacionsueno'=>'');
        
        foreach ($datossuenointegrante as $filainte)
        {
        $tdatsuenointe = array('tid'=>$filainte->id,'tfolio' => $filainte->folio,'tidintegrante' => $filainte->idintegrante,'tnombreintegrante' => $filainte->nombreintegrante,'tnombresueno' => $filainte->nombresueno,'tcatsueno' => $filainte->necesidad,'taplicasueno' => $filainte->aplicasueno,'tfcreacionsueno' => $filainte->fechacreacionsueno); //se guarda el resultado del ption value en la variable datos
        }
        //FIN TRAER DATOS DEL INTEGRANTE
        
        $datosintegrante = $this->m_editaraccionessueno->fm_datosintegrante($folio,$idintegrante);//lo mandasmos a la funcion del modelo para verificar
        
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
        
        //validar si el sueño existe
        $suenoexiste = $this->m_editaraccionessueno->fm_principalhogarsueno($folio);//lo mandasmos a la funcion del modelo para verificar
        
        //ACA USTEDES SI TOCAN - COLOCAN EL NOMBRE DE LAS VARIABLES idresc9mp1 - idresc9mp4a - idresc9mp4b - idresc9mp4c
        $suexiste= array('eid'=>'','efolio'=>'','eidintegrante'=>'','enombreintegrante'=>'','eaplica'=>'','eaplicasueno'=>'','enombresueno'=>'','ecatsueno'=>'','enecesidad'=>'','erecursosinternoso1'=>'','erecursosinternoso2'=>'','erecursosinternoso3'=>'','erecursosinternoso4'=>'','erecursosinternoso5'=>'','erecursosinternoso6'=>'','erecursosinternoso7'=>'','erecursosinternoso8'=>'','erecursosinternoso9'=>'','erecursosexternoso1'=>'','erecursosexternoso2'=>'','erecursosexternoso3'=>'','erecursosexternoso4'=>'','erecursosexternoso5'=>'','efechacreacionsueno'=>'','efechaactualizacionsueno'=>'');
        foreach ($suenoexiste as $fila)
        {
        //USTEDES SI TOCAN - LO VERDE LO COLCAN COMO ESTA EN LA TABLA DE LA BD
        $suexiste = array('eid'=>$fila->id,'efolio'=>$fila->folio,'eidintegrante'=>$fila->idintegrante,'enombreintegrante'=>$fila->nombreintegrante,'eaplica'=>$fila->aplica,'eaplicasueno'=>$fila->aplicasueno,'enombresueno'=>$fila->nombresueno,'ecatsueno'=>$fila->catsueno,'enecesidad'=>$fila->necesidad,'erecursosinternoso1'=>$fila->recursosinternoso1,'erecursosinternoso2'=>$fila->recursosinternoso2,'erecursosinternoso3'=>$fila->recursosinternoso3,'erecursosinternoso4'=>$fila->recursosinternoso4,'erecursosinternoso5'=>$fila->recursosinternoso5,'erecursosinternoso6'=>$fila->recursosinternoso6,'erecursosinternoso7'=>$fila->recursosinternoso7,'erecursosinternoso8'=>$fila->recursosinternoso8,'erecursosinternoso9'=>$fila->recursosinternoso9,'erecursosexternoso1'=>$fila->recursosexternoso1,'erecursosexternoso2'=>$fila->recursosexternoso2,'erecursosexternoso3'=>$fila->recursosexternoso3,'erecursosexternoso4'=>$fila->recursosexternoso4,'erecursosexternoso5'=>$fila->recursosexternoso5,'efechacreacionsueno'=>$fila->fechacreacionsueno,'efechaactualizacionsueno'=>$fila->fechaactualizacionsueno); //se guarda el resultado del ption value en la variable datos
        }
        //fin validar si el sueño existe
        //traer una lista de valores
        $listacategorias = $this->m_editaraccionessueno->fm_listarcategorias();
        $categorias = '';
        foreach ($listacategorias as $categoria)
        {
        $categorias .= '<option value="'.$categoria->id.'">'.$categoria->necesidad.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
        //traer una lista de valores
        $listasino = $this->m_editaraccionessueno->fm_listarrepresentante($folio);
        $representante = '';
        foreach ($listasino as $estado)
        {
        $representante .= '<option value="'.$estado->idintegrante.'">'.$estado->nombrecompleto.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
        //traer una lista de valores
        $listasino = $this->m_editaraccionessueno->fm_suenotiempo();
        $motivo = '';
        foreach ($listasino as $estado)
        {
        $motivo .= '<option value="'.$estado->id.'">'.$estado->idsignificado.'</option>'; //se guarda el resultado del ption value en la variable datos
        }
        //fin traer una lista de valores
        
        //traer una lista de valores
        $listartabla = $this->m_editaraccionessueno->fm_principalsuenoaccionesact($folio,$idintegrante,$idsueno,$idaccion);
        $listadesueno= array('eidaccion' => '','eidsueno'=>'','efolio'=>'','eidintegrante'=>'','edescripcionaccion'=>'','etiempoaccion'=>'','eidsignificado'=>''); 
        
        
        $datossuenoacciones = '';
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
        $listadesueno= array('eidaccion'=>$valor->idaccion,'eidsueno'=>$valor->idsueno,'efolio'=>$valor->folio,'eidintegrante'=>$valor->idintegrante,'edescripcionaccion'=>$valor->descripcionaccion,'etiempoaccion'=>$valor->tiempoaccion,'eidsignificado'=>$valor->idsignificado); 
        $datossuenoacciones .=  '<tr '.$colorfila.'>'
                            .'<td>'.$valor->idaccion.'</td>'
                            .'<td>'.$valor->folio.'</td>'
                            .'<td>'.$valor->idintegrante.'</td>'
                            .'<td>'.$valor->descripcionaccion.'</td>'
                            .'<td>'.$valor->idsignificado.'</td>'
                            
                   // .'<td><button type="button" id="acciones'.$valor->idintegrante.'" onclick="acciones('.$valor->idaccion.','.$valor->folio.','.$valor->idintegrante.')" class="btn btn-success btn-sm">Crear o ver acciones</button></td>'
                    .'<td><button type="button" id="eliminaraccion'.$valor->idintegrante.'" onclick="eliminaraccion('.$valor->idaccion.','.$valor->idsueno.','.$valor->folio.','.$valor->idintegrante.')" class="btn btn-danger btn-sm">Eliminar Acción</button></td>    
                        
                    </tr>';
        }
        //ESTO LEVANTA LA VISTA     
        $titulo = 'v_editaraccionessueno'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/linea2estacion2/'.$page,  array('titulo' => $titulo, 'foot' => FOOTS, 'head1' => HEAD1, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA, 'botonerac' => BOTONERAC,'motivo' => $motivo, 'representante' => $representante,'folio' => $folio, 'doccogestor' => $doccogestor,'tdatinte' => $tdatinte, 'suexiste' => $suexiste, 'categorias' => $categorias,'datossuenoacciones'=>$datossuenoacciones,'listadesueno'=>$listadesueno,'tdatsuenointe'=>$tdatsuenointe,'foexiste' =>$foexiste,));
        //FIN LEVANTA LA VISTA
     }
     
    //funcion para guardar
    public function fc_actualizar()
    {
        $cidsueno= $this->input->get('vidsueno');
        $cidaccion= $this->input->get('vidaccion');
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $cnombresuenoaccion = $this->input->get('vnombresuenoaccion');
        $csuenotiempo = $this->input->get('vsuenotiempo');
        $this->m_editaraccionessueno->fm_actualizar($cidsueno,$cidaccion,$cfolio,$cidintegrante,$cnombresuenoaccion,$csuenotiempo);
        //echo json_encode(array('result' => 'guardado'));
        
    }
    //fin funcion para guardar
    public function fc_eliminaraccion()
    {
        $cidaccion = $this->input->get('vidaccion');
        $cidsueno = $this->input->get('vidsueno');
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $this->m_editaraccionessueno->fm_eliminaraccion($cidaccion,$cidsueno,$cfolio,$cidintegrante);
        //echo json_encode(array('result' => 'guardado'));
    }
     
}
