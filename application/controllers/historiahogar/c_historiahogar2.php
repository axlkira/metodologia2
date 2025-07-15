<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_historiahogar2 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/historiahogar/m_historiahogar2');//carga el controlador modelo
        
        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        } 
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_historiahogar2($page = 'v_historiahogar2') {

        if (!file_exists('application/views/pages/historiahogar/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $idestacion = $this->input->get('idestacion');
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get
        $doccogestor = $this->input->get('doccogestor');
        //para traer la informacion de ayudas
        $cayudas = $this->m_historiahogar2->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
        //incio traer datos generales
        $cdatosgenerales = $this->m_historiahogar2->fm_cargardatosgenerales($cfolio);
        $carraydatosgenerales= array('enomcoges' => '', 'efolio' =>'', 'ecapitulo' => '', 'etitular' => '','edoctitular' => ''); 
        foreach ($cdatosgenerales as $cdatgen)
        {
            $carraydatosgenerales = array('enomcoges' => $cdatgen->nomcoges,
                                          'efolio' => $cdatgen->folio, 
                                          'ecapitulo' => $cdatgen->capitulo,
                                          'etitular' => $cdatgen->titular,
                                          'edoctitular' => $cdatgen->doctitular);
        }
        //fin traer datos generales
        
        //traer los logros
        $cdatoshflogros = $this->m_historiahogar2->fm_traerhflogro($cfolio);
        //traer los datos
        $carraytraerlogros = '';
        foreach ($cdatoshflogros as $cdhflogros)
        {
            $carraytraerlogros .= '<div class="panel-body">
                                       <p> <small><strong> '.$cdhflogros->fecha.' - '.$cdhflogros->estacion.' - '.$cdhflogros->nombreucogestor.' '.$cdhflogros->nombredcogestor.' '.$cdhflogros->apellidoucogestor.' '.$cdhflogros->apellidodcogestor.':</strong></small> '.$cdhflogros->textlogro.'</p>
                                    </div>';
        } 
        
        if($carraytraerlogros == '')
        {
            $carraytraerlogros = '<div class="panel-body">
                                       <p> <small><strong>Sin registro</strong></small></p>
                                    </div>';
        
        }
        
        // fin traer logros
        //traer los conformacion
        $cdatoshfconformacion = $this->m_historiahogar2->fm_traerhfconformacion($cfolio);
        //traer los datos
        $carraytraerconformacion = '';
        foreach ($cdatoshfconformacion as $cdhfconf)
        {
            $carraytraerconformacion .= '<div class="panel-body">
                                       <p> <small><strong> '.$cdhfconf->fecha.' - '.$cdhfconf->estacion.' - '.$cdhfconf->nombreucogestor.' '.$cdhfconf->nombredcogestor.' '.$cdhfconf->apellidoucogestor.' '.$cdhfconf->apellidodcogestor.':</strong></small> '.$cdhfconf->textconformacion.'</p>
                                    </div>';
        } 
        
        if($carraytraerconformacion == '')
        {
            $carraytraerconformacion = '<div class="panel-body">
                                       <p> <small><strong>Sin registro</strong></small></p>
                                    </div>';
        
        }
        
        // fin traer conformacion
        //traer los procedenia
        $cdatoshfprocedencia = $this->m_historiahogar2->fm_traerhfprocedencia($cfolio);
        //traer los datos
        $carraytraerprocedencia = '';
        foreach ($cdatoshfprocedencia as $cdhfprocedencia)
        {
            $carraytraerprocedencia .= '<div class="panel-body">
                                       <p> <small><strong> '.$cdhfprocedencia->fecha.' - '.$cdhfprocedencia->estacion.' - '.$cdhfprocedencia->nombreucogestor.' '.$cdhfprocedencia->nombredcogestor.' '.$cdhfprocedencia->apellidoucogestor.' '.$cdhfprocedencia->apellidodcogestor.':</strong></small> '.$cdhfprocedencia->textprocedencia.'</p>
                                    </div>';
        } 
        
        if($carraytraerprocedencia == '')
        {
            $carraytraerprocedencia = '<div class="panel-body">
                                       <p> <small><strong>Sin registro</strong></small></p>
                                    </div>';
        
        }
        
        // fin traer procedencia
        //traer los costumbres
        $cdatoshfcostumbres = $this->m_historiahogar2->fm_traerhfcostumbres($cfolio);
        //traer los datos
        $carraytraercostumbres = '';
        foreach ($cdatoshfcostumbres as $cdhfcostumbres)
        {
            $carraytraercostumbres .= '<div class="panel-body">
                                       <p> <small><strong> '.$cdhfcostumbres->fecha.' - '.$cdhfcostumbres->estacion.' - '.$cdhfcostumbres->nombreucogestor.' '.$cdhfcostumbres->nombredcogestor.' '.$cdhfcostumbres->apellidoucogestor.' '.$cdhfcostumbres->apellidodcogestor.':</strong></small> '.$cdhfcostumbres->textcostumbres.'</p>
                                    </div>';
        } 
        
        if($carraytraercostumbres == '')
        {
            $carraytraercostumbres = '<div class="panel-body">
                                       <p> <small><strong>Sin registro</strong></small></p>
                                    </div>';
        
        }
        
        // fin traer costumbres
        
        
        //incio traer respuestas
        $crespuestas = $this->m_historiahogar2->fm_buscarpregunta($cfolio);
        $carrayrespuestas= array('ec2p10' => '','ec2p1' => ''); 
        foreach ($crespuestas as $crespuesta)
        {
            $carrayrespuestas = array('ec2p10' => $crespuesta->c2p10,'ec2p1' => $crespuesta->c2p1);
        }
        //fin traer datos generales
        
       //Levantar vista     
        $titulo = 'Historia hogar - Vista 1'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/historiahogar/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD, 
                                                   'botonerag' => BOTONERAG, 
                                                   'botoneraa' => BOTONERAA,
                                                   'folio' => $cfolio,
                                                   'doccogestor' => $doccogestor, 
                                                   'textoayuda' => $ctextoayuda, 
                                                   'idestacion'=>$idestacion,
                                                   'arraydatosgenerales' => $carraydatosgenerales, 
                                                   'arrayrespuestas' => $carrayrespuestas,
                                                   'arraytraerlogros' => $carraytraerlogros,
                                                   'arraytraerconformacion' => $carraytraerconformacion,
                                                   'arraytraerprocedencia' => $carraytraerprocedencia,
                                                   'arraytraercostumbres' => $carraytraercostumbres));
        //Fin levantar vista
         
    }
    
    
    //funcion para actualizar LOGROS
    public function fc_hfinsertarlogro()
    {
        $cfolio = $this->input->post('vfolio');
        $ctextlogro= $this->input->post('vtextlogro');   
        $cestacion= $this->input->post('vestacion');
        $cdatoshflogros = $this->m_historiahogar2->fm_insertarhflogro($cfolio,$cestacion,$ctextlogro,$this->session->userdata('documento'));
    //traer los datos
        $carraydatoshflogros = '';
        foreach ($cdatoshflogros as $cdhflogros)
        {
            $carraydatoshflogros .= '<div class="panel-body">
                                       <p> <small><strong> '.$cdhflogros->fecha.' - '.$cdhflogros->estacion.' - '.$cdhflogros->nombreucogestor.' '.$cdhflogros->nombredcogestor.' '.$cdhflogros->apellidoucogestor.' '.$cdhflogros->apellidodcogestor.':</strong></small> '.$cdhflogros->textlogro.'</p>
                                    </div>';
        }        
        
                
    //fin traer los datos
        
        
        echo ($carraydatoshflogros);
    }
    //fin funcion para actualizar LOGROS
    
    //funcion para actualizar conformacion
    public function fc_hfinsertarconformacion()
    {
        $cfolio = $this->input->post('vfolio');
        $ctextconformacion= $this->input->post('vtextconformacion');   
        $cestacion= $this->input->post('vestacion');
        $cdatoshfconformacion = $this->m_historiahogar2->fm_insertarhconformacion($cfolio,$cestacion,$ctextconformacion,$this->session->userdata('documento'));
    //traer los datos
        $carraydatoshfconformacion = '';
        foreach ($cdatoshfconformacion as $cdhfconformacion)
        {
            $carraydatoshfconformacion .= '<div class="panel-body">
                                       <p> <small><strong> '.$cdhfconformacion->fecha.' - '.$cdhfconformacion->estacion.' - '.$cdhfconformacion->nombreucogestor.' '.$cdhfconformacion->nombredcogestor.' '.$cdhfconformacion->apellidoucogestor.' '.$cdhfconformacion->apellidodcogestor.':</strong></small> '.$cdhfconformacion->textconformacion.'</p>
                                    </div>';
        }        
        
                
    //fin traer los datos
        
        
        echo ($carraydatoshfconformacion);
    }
    //fin funcion para actualizar conformacion  
    
    //funcion para actualizar conformacion
    public function fc_hfinsertarprocedencia()
    {
        $cfolio = $this->input->post('vfolio');
        $ctextprocedencia= $this->input->post('vtextprocedencia');   
        $cestacion= $this->input->post('vestacion');
        $cdatoshfprocedencia = $this->m_historiahogar2->fm_insertarhfprocedencia($cfolio,$cestacion,$ctextprocedencia,$this->session->userdata('documento'));
    //traer los datos
        $carraydatoshfprocedencia = '';
        foreach ($cdatoshfprocedencia as $cdhfproce)
        {
            $carraydatoshfprocedencia .= '<div class="panel-body">
                                       <p> <small><strong> '.$cdhfproce->fecha.' - '.$cdhfproce->estacion.' - '.$cdhfproce->nombreucogestor.' '.$cdhfproce->nombredcogestor.' '.$cdhfproce->apellidoucogestor.' '.$cdhfproce->apellidodcogestor.':</strong></small> '.$cdhfproce->textprocedencia.'</p>
                                    </div>';
        }        
        
                
    //fin traer los datos
        
        
        echo ($carraydatoshfprocedencia);
    }
    //fin funcion para actualizar conformacion    
    
    //funcion para actualizar conformacion
    public function fc_hfinsertarcostumbres()
    {
        $cfolio = $this->input->post('vfolio');
        $ctextconstumbres= $this->input->post('vtextconstumbres');   
        $cestacion= $this->input->post('vestacion');
        $cdatoshfconstumbres = $this->m_historiahogar2->fm_insertarhfconstumbres($cfolio,$cestacion,$ctextconstumbres,$this->session->userdata('documento'));
    //traer los datos
        $carraydatoshfconstumbres = '';
        foreach ($cdatoshfconstumbres as $cdhfconst)
        {
            $carraydatoshfconstumbres .= '<div class="panel-body">
                                       <p> <small><strong> '.$cdhfconst->fecha.' - '.$cdhfconst->estacion.' - '.$cdhfconst->nombreucogestor.' '.$cdhfconst->nombredcogestor.' '.$cdhfconst->apellidoucogestor.' '.$cdhfconst->apellidodcogestor.':</strong></small> '.$cdhfconst->textcostumbres.'</p>
                                    </div>';
        }        
        
                
    //fin traer los datos
        
        
        echo ($carraydatoshfconstumbres);
    }
    //fin funcion para actualizar conformacion       
    
    public function fc_cerrarpaso()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_historiahogar2->fm_cerrarpaso($cfolio,$cidpaso,$cestado);
    }
    
}
