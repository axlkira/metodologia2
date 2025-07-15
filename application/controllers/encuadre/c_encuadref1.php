<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  C_encuadref1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('/encuadre/m_encuadref1');//carga el controlador modelo
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_encuadref1($page = 'v_encuadref1') {

        if (!file_exists('application/views/pages/encuadre/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

      
        
        $cfolio = $this->input->get('folio');//tomamos el valor del vivienda que viene por get
        //$docogestor = $this->input->get('docogestor');
        $docogestor =$this->input->get('doccogestor');
//        $idintegrante = $this->input->get('idintegrante');

        //para traer la informacion de ayudas
        $cayudas = $this->m_encuadref1->fm_ayudas();
        $ctextoayuda = '';
        foreach ($cayudas as $cayuda)
        {
            $ctextoayuda =  $cayuda->ayuda;
        }
        //Fin ayudas 
        
   
      

        //$idusuario = $this->input->get('idusuario');//tomamos el valor del vivienda que viene por get
        //$idusuario = $this->session->userdata('idusuario');

        $cdatosgenerales = $this->m_encuadref1->fm_cargardatosgenerales($cfolio);
        $carraydatosgenerales= array(  
        'folio' =>'',
        'ep1' =>'',
        'ep1cual' =>'',    
        'epetnia' =>'',
        'ep2' =>'',
        'ep3' =>'',
        'ep3cuanto' =>'',        
        'ep4' =>'',
        'ep5' =>'',
        'ep5cuanto' =>'',
        'ep6' =>'',
        'ep6cuanto' =>'',
        'ep7' =>'',
        'ep7cuanto' =>'',
        'ep8' =>'',
        'ep8cuanto' =>'',
        'ep9' =>'',
        'ep9cuanto' =>'',
        'ep10' =>'',
        'ep10cuanto' =>'',
        'ep11' =>'',
        'ep13' =>'',
        'ep14' =>'',
        'ep15' =>'',
        'ep16' =>'',
        'ep17' =>'',
        'ep18' =>'',
        'ep19' =>'',
        'ep20' =>'',
        'ep21' =>'',
        'ep22cual' =>'',
        'ep22' =>'',
        
        'ep13s' => '',
        'ep14s' => '',
        'ep15s' => '',
        'ep16s' => '',
        'ep17s' => '',
        'ep18s' => '',
        'ep19s' => '',
        'ep20s' => '',
        'ep21s' => '',
        'ep22s' => '',
        'ep22cuals' => '',
            
        'ep23' =>'',
        'ep24' =>'',
        'ep25' =>'',
        'ep26' =>'',
        'ep27' =>'',
        'ep28' =>'',
        'ep29' =>'',
        'ep30' =>'',
            
        // NUEVOS
        'ep23s' => '',
        'ep24s' => '',    
        'ep25s' => '',
        'ep26s' => '',
        'ep27s' => '',
        'ep28s' => '',
        'ep29s' => '',
        'ep30s' => '',    
        
        'ep31mr1' => '',
        'ep31mr2' => '',
        'ep31mr3' => '',
        'ep31mr4' => '',
        'ep31mr5' => '',
        'ep31mr6' => '',
        
        // FIN NUEVOS   
            
        'doccogestor' => ''
        
        ); 

        foreach ($cdatosgenerales as $cdatgen)
        {
            $carraydatosgenerales = array(
            'folio' => $cdatgen->folio,
            'ep1' => $cdatgen->ep1,
            'ep1cual' => $cdatgen->ep1cual,    
            'epetnia' => $cdatgen->epetnia,
            'ep2' => $cdatgen->ep2,
            'ep3' => $cdatgen->ep3,
            'ep3cuanto' => $cdatgen->ep3cuanto,
            'ep4' => $cdatgen->ep4,
            'ep5' => $cdatgen->ep5,
            'ep5cuanto' => $cdatgen->ep5cuanto,
            'ep6' => $cdatgen->ep6,
            'ep6cuanto' => $cdatgen->ep6cuanto,
            'ep7' => $cdatgen->ep7,
            'ep7cuanto' => $cdatgen->ep7cuanto,
            'ep8' => $cdatgen->ep8,
            'ep8cuanto' => $cdatgen->ep8cuanto,
            'ep9' => $cdatgen->ep9,
            'ep9cuanto' => $cdatgen->ep9cuanto,
            'ep10' => $cdatgen->ep10,
            'ep10cuanto' => $cdatgen->ep10cuanto,
            'ep11' => $cdatgen->ep11,
          //  'ep12' => $cdatgen->ep12,
            'ep13' => $cdatgen->ep13,
            'ep14' => $cdatgen->ep14,
            'ep15' => $cdatgen->ep15,
            'ep16' => $cdatgen->ep16,
            'ep17' => $cdatgen->ep17,
            'ep18' => $cdatgen->ep18,
            'ep19' => $cdatgen->ep19,
            'ep20' => $cdatgen->ep20,
            'ep21' => $cdatgen->ep21,
            'ep22' => $cdatgen->ep22,
            'ep22cual' => $cdatgen->ep22cual,
                
            'ep13s' => $cdatgen->ep13s,
            'ep14s' => $cdatgen->ep14s,
            'ep15s' => $cdatgen->ep15s,
            'ep16s' => $cdatgen->ep16s,
            'ep17s' => $cdatgen->ep17s,
            'ep18s' => $cdatgen->ep18s,
            'ep19s' => $cdatgen->ep19s,
            'ep20s' => $cdatgen->ep20s,
            'ep21s' => $cdatgen->ep21s,
            'ep22s' => $cdatgen->ep22s,
            'ep22cuals' => $cdatgen->ep22cuals,
                
            'ep23' => $cdatgen->ep23,
            'ep24' => $cdatgen->ep24,
            'ep25' => $cdatgen->ep25,
            'ep26' => $cdatgen->ep26,
            'ep27' => $cdatgen->ep27,
            'ep28' => $cdatgen->ep28,
            'ep29' => $cdatgen->ep29,
            'ep30' => $cdatgen->ep30,
                
        // NUEVOS
            'ep23s' => $cdatgen->ep23s,
            'ep24s' => $cdatgen->ep24s,    
            'ep25s' => $cdatgen->ep25s,
            'ep26s' => $cdatgen->ep26s,
            'ep27s' => $cdatgen->ep27s,
            'ep28s' => $cdatgen->ep28s,
            'ep29s' => $cdatgen->ep29s,
            'ep30s' => $cdatgen->ep30s,    
        
            'ep31mr1' => $cdatgen->ep31mr1,
            'ep31mr2' => $cdatgen->ep31mr2,
            'ep31mr3' => $cdatgen->ep31mr3,
            'ep31mr4' => $cdatgen->ep31mr4,
            'ep31mr5' => $cdatgen->ep31mr5,
            'ep31mr6' => $cdatgen->ep31mr6,
        
        // FIN NUEVOS   
                
            'doccogestor' => $cdatgen->doccogestor  );
        }
        
       //Levantar vista     
        $titulo = 'Cap I - Pregunta 1.5'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/encuadre/' . $page,  array('titulo' => $titulo, 
                                                   'foot' => FOOTS, 
                                                   'head' => HEAD44, 
                                                   'folio' => $cfolio,
                                                   'docogestor' => $docogestor,
                                                   'textoayuda' => $ctextoayuda,
                                                   'carraydatosgenerales' => $carraydatosgenerales 
                                                   //'arrayrespuestas' => $carrayrespuestas
                                                ));
        //Fin levantar vista
    }
    
    
    public function fc_actualizar()
    {
    $datos = array(
        'folio' => $this->input->post('folio'),
        'ep1' => $this->input->post('ep1'),
        // NUEVO
        'ep1cual' => $this->input->post('ep1cual'),
        // FIN NUEVO
        'epetnia' => $this->input->post('epetnia'),
        'ep2' => $this->input->post('ep2'),
        'ep3' => $this->input->post('ep3'),
        'ep3cuanto' => $this->input->post('ep3cuanto'),
        'ep4' => $this->input->post('ep4'),
        'ep5' => $this->input->post('ep5'),
        'ep5cuanto' => $this->input->post('ep5cuanto'),
        'ep6' => $this->input->post('ep6'),
        'ep6cuanto' => $this->input->post('ep6cuanto'),
        'ep7' => $this->input->post('ep7'),
        'ep7cuanto' => $this->input->post('ep7cuanto'),
        'ep8' => $this->input->post('ep8'),
        'ep8cuanto' => $this->input->post('ep8cuanto'),
        'ep9' => $this->input->post('ep9'),
        'ep9cuanto' => $this->input->post('ep9cuanto'),
        'ep10' => $this->input->post('ep10'),
        'ep10cuanto' => $this->input->post('ep10cuanto'),
        'ep11' => $this->input->post('ep11'),
        'ep13' => $this->input->post('ep13'),
        'ep14' => $this->input->post('ep14'),
        'ep15' => $this->input->post('ep15'),
        'ep16' => $this->input->post('ep16'),
        'ep17' => $this->input->post('ep17'),
        'ep18' => $this->input->post('ep18'),
        'ep19' => $this->input->post('ep19'),
        'ep20' => $this->input->post('ep20'),
        'ep21' => $this->input->post('ep21'),
        'ep22' => $this->input->post('ep22'),
        'ep22cual' => $this->input->post('ep22cual'),
        // NUEVOS
        'ep13s' => $this->input->post('ep13s'),
        'ep14s' => $this->input->post('ep14s'),
        'ep15s' => $this->input->post('ep15s'),
        'ep16s' => $this->input->post('ep16s'),
        'ep17s' => $this->input->post('ep17s'),
        'ep18s' => $this->input->post('ep18s'),
        'ep19s' => $this->input->post('ep19s'),
        'ep20s' => $this->input->post('ep20s'),
        'ep21s' => $this->input->post('ep21s'),
        'ep22s' => $this->input->post('ep22s'),
        'ep22cuals' => $this->input->post('ep22cuals'),
        // FIN NUEVOS
        'ep23' => $this->input->post('ep23'),
        'ep24' => $this->input->post('ep24'),
        'ep25' => $this->input->post('ep25'),
        'ep26' => $this->input->post('ep26'),
        'ep27' => $this->input->post('ep27'),
        'ep28' => $this->input->post('ep28'),
        'ep29' => $this->input->post('ep29'),
        'ep30' => $this->input->post('ep30'),
        // NUEVOS
        'ep23s' => $this->input->post('ep23s'),
        'ep24s' => $this->input->post('ep24s'),
        'ep25s' => $this->input->post('ep25s'),
        'ep26s' => $this->input->post('ep26s'),
        'ep27s' => $this->input->post('ep27s'),
        'ep28s' => $this->input->post('ep28s'),
        'ep29s' => $this->input->post('ep29s'),
        'ep30s' => $this->input->post('ep30s'),
        
        'ep31mr1' => $this->input->post('ep31mr1'),
        'ep31mr2' => $this->input->post('ep31mr2'),
        'ep31mr3' => $this->input->post('ep31mr3'),
        'ep31mr4' => $this->input->post('ep31mr4'),
        'ep31mr5' => $this->input->post('ep31mr5'),
        'ep31mr6' => $this->input->post('ep31mr6'),
        // FIN NUEVOS
        'fechaactualizacion' => date("Y-m-d H:i:s"),
        'doccogestor' => $this->input->post('doccogestor') ,
        'campo_elimina'    => 0

                   
    
                       // 'fecha_registro' => $this->input->post('vfecha')
                        );
     
        
         $idu = $this->m_encuadref1->fm_actualizarpreguntaxx($datos);
           echo $idu;
        
     
      
     ///  echo 1;
                    
    }


    public function fc_cerrarpaso1()
    {
       $cfolio = $this->input->get('vfolio');
       $cidpaso = $this->input->get('vidpaso');
       $cestado = $this->input->get('vestado');
       $this->m_encuadref1->fm_cerrarpaso1($cfolio,$cidpaso,$cestado);
    }


  /*  public function fc_actualizar()
    {


        $cfolio = $this->input->post('folio');
        $cep1= $this->input->post('ep1');
        $cep2= $this->input->post('ep2');
       $cep3= $this->input->post('ep3');
      $cep3cuanto= $this->input->post('ep3cuanto');
        $cep4= $this->input->post('ep4');
        $cep5= $this->input->post('ep5');
        $cep5cuanto= $this->input->post('ep5cuanto');
        /*  $cep6= $this->input->post('ep6');
        $cep6cuanto= $this->input->post('ep6cuanto');
        $cep7= $this->input->post('ep7');
        $cep7cuanto= $this->input->post('ep7cuanto');
        $cep8= $this->input->post('ep8');
        $cep8cuanto= $this->input->post('ep8cuanto');
        $cep9= $this->input->post('ep9');
        $cep9cuanto= $this->input->post('ep9cuanto');
        $cep10= $this->input->post('ep10');
        $cep10cuanto= $this->input->post('ep10cuanto');
       $cep11= $this->input->post('ep11');
        $cep12= $this->input->post('ep12');
        $cep13= $this->input->post('ep13');
        $cep14= $this->input->post('ep14');
        $cep15= $this->input->post('ep15');
        $cep16= $this->input->post('ep16');
        $cep17= $this->input->post('ep17');
        $cep18= $this->input->post('ep18');
        $cep19= $this->input->post('ep19');
        $cep20= $this->input->post('ep20');
        $cep21= $this->input->post('ep21');
        $cep22= $this->input->post('ep22');
        $cep22cual= $this->input->post('ep22cual');
        $cep23= $this->input->post('ep23');
        $cep24= $this->input->post('ep24');
        $cep25= $this->input->post('ep25');
        $cep26= $this->input->post('ep26');
        $cep27= $this->input->post('ep27');
        $cep28= $this->input->post('ep28');
        $cep29= $this->input->post('ep29');
        $cep30= $this->input->post('ep30');
        $cep31= $this->input->post('ep31'); 
        $docogestor= $this->input->post('doccogestor');
        
        $this->m_encuadref1->fm_actualizarpregunta($cfolio,$cep1,	$cep2, $cep3,  $cep3cuanto,	$cep4,	$cep5,	$cep5cuanto,
        	//$cep6,	$cep6cuanto,	$cep7,	$cep7cuanto,
           //$cep8,	$cep8cuanto,	$cep9,	$cep9cuanto,$cep10,$cep10cuanto,
           //	$cep11,	$cep12,	$cep13,	$cep14,	$cep15,	$cep16,
              // $cep17,	$cep18,	$cep19,	$cep20,	$cep21,	$cep22,	$cep22cual,	$cep23,	$cep24,	$cep25,	$cep26,	$cep27,
                 //  $cep28,	$cep29,	$cep30,	$cep31,
                    	$docogestor);
    }*/
    
}
