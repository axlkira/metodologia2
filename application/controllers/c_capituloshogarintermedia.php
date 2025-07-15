<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_capituloshogarintermedia extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_capituloshogarintermedia'); //carga el controlador modelo
        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }  
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_capituloshogarintermedia($page = 'v_capituloshogarintermedia') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        //INICIO TRAER DATOS DEL TITULAR
        $folio = $this->input->get('folio'); //tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');

        $datosintegrante = $this->m_capituloshogarintermedia->fm_datosintegrante($folio, $idintegrante); //lo mandasmos a la funcion del modelo para verificar

        $tdatinte = array('tfolio' => '',
            'tidintegrante' => '',
            'tdoc' => '',
            'tnombre' => '');



        foreach ($datosintegrante as $filainte) {
            $tdatinte = array('tfolio' => $filainte->folio,
                'tidintegrante' => $filainte->idintegrante,
                'tdoc' => $filainte->documento,
                'tnombre' => $filainte->nombre1 . ' ' . $filainte->nombre2 . ' ' . $filainte->apellido1 . ' ' . $filainte->apellido2); //se guarda el resultado del ption value en la variable datos
        }
        //FIN TRAER DATOS DEL TITULAR       
//traer una lista de valores cap 1
//        $listartabla = $this->m_capituloshogarintermedia->fm_listartablacap1($folio);
       $a = '';
//        $datos1 = '';
//        $cap1 = '';
//        foreach ($listartabla as $valor) {
//            $cap1 = $valor->p1;
//            switch ($valor->p1) {
//
//                case '98': //Para salto
//                    $claseboton1 = '';
//                    $habilitarboton1 = 'disabled="disabled"';
//                    $mensajebtn1 = 'P1-No Aplica';
//                    break;
//                case '97'://actual
//                    ++$a;
//                    $claseboton1 = 'warning';
//                    $habilitarboton1 = '';
//                    $mensajebtn1 = 'P1-Actual';
//                    break;
//                case ''://por realizar o pendiente
//                    ++$a;
//                    $claseboton1 = 'warning';
//                    $habilitarboton1 = '';
//                    $mensajebtn1 = 'P1-Actual';
//                    break;
//                default:
//                    //esta listo
//                    $claseboton1 = 'success';
//                    $habilitarboton1 = '';
//                    $mensajebtn1 = 'P1-Realizado';
//            }
//
//            $datos1 .= '<tr>'
//                    //.'<td>'.$valor->idvivienda.'</td>'
//                    . '<td><button type="button" id="p1' . $valor->folio . '" ' . $habilitarboton1 . ' onclick="c1p1(' . $valor->folio . ')" class="btn btn-' . $claseboton1 . ' btn-sm col-sm-1">' . $mensajebtn1 . '</button></td>
//                    </tr>';
//        }
//fin traer una lista de valores cap 1
//traer una lista de valores cap 2
        $listartabla = $this->m_capituloshogarintermedia->fm_listartablacap2($folio);

        $datos2 = '';
        $cap2 = '';
        $c2 = '';
        foreach ($listartabla as $valor) {
            $cap2 = $valor->c2p11intermedia;

            if ($valor->c2p1intermedia == '') {
                $estado1 = '97';
            } else {
                $estado1 = $valor->c2p1intermedia;
            }
            switch ($estado1) {

                case '98': //Para salto
                    $claseboton1 = '';
                    $habilitarboton1 = 'disabled="disabled"';
                    $mensajebtn1 = 'P1-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton1 = 'warning';
                    $habilitarboton1 = '';
                    $mensajebtn1 = 'P1-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton1 = 'warning';
                    $habilitarboton1 = 'disabled="disabled"';
                    $mensajebtn1 = 'P1-Actual';
                    break;
                default:
                    //esta listo
                    $claseboton1 = 'success';
                    $habilitarboton1 = '';
                    $mensajebtn1 = 'P1-Realizado';
            }

            if ($valor->c2p1intermedia <> '' && $valor->c2p2intermedia == '') {
                $estado2 = '97';
            } else {
                $estado2 = $valor->c2p2intermedia;
            }
            switch ($estado2) {

                case '98': //Para salto
                    $claseboton2 = '';
                    $habilitarboton2 = 'disabled="disabled"';
                    $mensajebtn2 = 'P2-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton2 = 'warning';
                    $habilitarboton2 = '';
                    $mensajebtn2 = 'P2-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton2 = 'danger';
                    $habilitarboton2 = 'disabled="disabled"';
                    $mensajebtn2 = 'P2-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton2 = 'success';
                    $habilitarboton2 = '';
                    $mensajebtn2 = 'P2-Realizado';
            }

            if ($valor->c2p1intermedia <> '' && $valor->c2p2intermedia <> '' && $valor->c2p5intermedia == '') {
                $estado3 = '97';
            } else {
                $estado3 = $valor->c2p5intermedia;
            }
            switch ($estado3) {

                case '98': //Para salto
                    $claseboton3 = '';
                    $habilitarboton3 = 'disabled="disabled"';
                    $mensajebtn3 = 'P3-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton3 = 'warning';
                    $habilitarboton3 = '';
                    $mensajebtn3 = 'P3-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton3 = 'danger';
                    $habilitarboton3 = 'disabled="disabled"';
                    $mensajebtn3 = 'P3-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton3 = 'success';
                    $habilitarboton3 = '';
                    $mensajebtn3 = 'P3-Realizado';
            }

            if ($valor->c2p1intermedia <> '' && $valor->c2p2intermedia <> '' && $valor->c2p5intermedia <> '' && $valor->c2p7intermediao1 == '') {
                $estado4 = '97';
            } else {
                $estado4 = $valor->c2p7intermediao1;
            }
            switch ($estado4) {

                case '98': //Para salto
                    $claseboton4 = '';
                    $habilitarboton4 = 'disabled="disabled"';
                    $mensajebtn4 = 'P4-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton4 = 'warning';
                    $habilitarboton4 = '';
                    $mensajebtn4 = 'P4-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton4 = 'danger';
                    $habilitarboton4 = 'disabled="disabled"';
                    $mensajebtn4 = 'P4-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton4 = 'success';
                    $habilitarboton4 = '';
                    $mensajebtn4 = 'P4-Realizado';
            }

            if ($valor->c2p1intermedia <> '' && $valor->c2p2intermedia <> '' && $valor->c2p5intermedia <> '' && $valor->c2p7intermediao1 <> '' && $valor->c2p8intermedia == '') {
                $estado5 = '97';
            } else {
                $estado5 = $valor->c2p8intermedia;
            }
            switch ($estado5) {

                case '98': //Para salto
                    $claseboton5 = '';
                    $habilitarboton5 = 'disabled="disabled"';
                    $mensajebtn5 = 'P5-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton5 = 'warning';
                    $habilitarboton5 = '';
                    $mensajebtn5 = 'P5-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton5 = 'danger';
                    $habilitarboton5 = 'disabled="disabled"';
                    $mensajebtn5 = 'P5-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton5 = 'success';
                    $habilitarboton5 = '';
                    $mensajebtn5 = 'P5-Realizado';
            }

            if ($valor->c2p1intermedia <> '' && $valor->c2p2intermedia <> '' && $valor->c2p5intermedia <> '' && $valor->c2p7intermediao1 <> '' && $valor->c2p8intermedia <> '' && $valor->c2p9intermedia == '') {
                $estado6 = '97';
            } else {
                $estado6 = $valor->c2p9intermedia;
            }
            switch ($estado6) {

                case '98': //Para salto
                    $claseboton6 = '';
                    $habilitarboton6 = 'disabled="disabled"';
                    $mensajebtn6 = 'P6-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton6 = 'warning';
                    $habilitarboton6 = '';
                    $mensajebtn6 = 'P6-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton6 = 'danger';
                    $habilitarboton6 = 'disabled="disabled"';
                    $mensajebtn6 = 'P6-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton6 = 'success';
                    $habilitarboton6 = '';
                    $mensajebtn6 = 'P6-Realizado';
            }

            if ($valor->c2p1intermedia <> '' && $valor->c2p2intermedia <> '' && $valor->c2p5intermedia <> '' && $valor->c2p7intermediao1 <> '' && $valor->c2p8intermedia <> '' && $valor->c2p9intermedia <> '' && $valor->c2p11intermedia == '') {
                $estado7 = '97';
            } else {
                $estado7 = $valor->c2p11intermedia;
            }
            switch ($estado7) {

                case '98': //Para salto
                    $claseboton7 = '';
                    $habilitarboton7 = 'disabled="disabled"';
                    $mensajebtn7 = 'P7-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton7 = 'warning';
                    $habilitarboton7 = '';
                    $mensajebtn7 = 'P7-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton7 = 'danger';
                    $habilitarboton7 = 'disabled="disabled"';
                    $mensajebtn7 = 'P7-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton7 = 'success';
                    $habilitarboton7 = '';
                    $mensajebtn7 = 'P7-Realizado';
            }

       
            
            $c2 = $valor->c2p1intermedia <> '' && $valor->c2p2intermedia <> '' && $valor->c2p5intermedia <> '' && $valor->c2p7intermediao1 <> '' && $valor->c2p8intermedia <> '' && $valor->c2p9intermedia <> '' && $valor->c2p11intermedia <> '';
                





            $datos2 .= '<tr>'
                    . '<td><button type="button" id="p1' . $valor->folio . '" ' . $habilitarboton1 . ' onclick="c2p1(' . $valor->folio . ')" class="btn btn-' . $claseboton1 . ' btn-sm col-sm-9">' . $mensajebtn1 . '</button></td>
                      <td><button type="button" id="p2' . $valor->folio . '" ' . $habilitarboton2 . ' onclick="c2p2(' . $valor->folio . ')" class="btn btn-' . $claseboton2 . ' btn-sm col-sm-9">' . $mensajebtn2 . '</button></td>
                      <td><button type="button" id="p3' . $valor->folio . '" ' . $habilitarboton3 . ' onclick="c2p3(' . $valor->folio . ')" class="btn btn-' . $claseboton3 . ' btn-sm col-sm-9">' . $mensajebtn3 . '</button></td>
                      <td><button type="button" id="p4' . $valor->folio . '" ' . $habilitarboton4 . ' onclick="c2p4(' . $valor->folio . ')" class="btn btn-' . $claseboton4 . ' btn-sm col-sm-9">' . $mensajebtn4 . '</button></td>
                      <td><button type="button" id="p5' . $valor->folio . '" ' . $habilitarboton5 . ' onclick="c2p5(' . $valor->folio . ')" class="btn btn-' . $claseboton5 . ' btn-sm col-sm-9">' . $mensajebtn5 . '</button></td>
                      <td><button type="button" id="p6' . $valor->folio . '" ' . $habilitarboton6 . ' onclick="c2p6(' . $valor->folio . ')" class="btn btn-' . $claseboton6 . ' btn-sm col-sm-9">' . $mensajebtn6 . '</button></td>
                      <td><button type="button" id="p7' . $valor->folio . '" ' . $habilitarboton7 . ' onclick="c2p7(' . $valor->folio . ')" class="btn btn-' . $claseboton7 . ' btn-sm col-sm-9">' . $mensajebtn7 . '</button></td>
                      
                      </tr>';
        }
//fin traer una lista de valores cap 2
//traer una lista de valores cap 3
    
//fin traer una lista de valores cap 3
//traer una lista de valores cap 6
        $listartabla = $this->m_capituloshogarintermedia->fm_listartablacap6($folio);
        $c6 = '';
        $datos6 = '';
        $cap6 = '';
        foreach ($listartabla as $valor) {
            $cap6 = $valor->c6p15intermedia;

            if ($cap2 <> '' && $valor->c6p10intermedia == '') {
                $estado1 = '97';
            } else {
                $estado1 = $valor->c6p10intermedia;
            }
            switch ($estado1) {

                case '98': //Para salto
                    $claseboton1 = '';
                    $habilitarboton1 = 'disabled="disabled"';
                    $mensajebtn1 = 'P1-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton1 = 'warning';
                    $habilitarboton1 = '';
                    $mensajebtn1 = 'P1-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton1 = 'warning';
                    $habilitarboton1 = 'disabled="disabled"';
                    $mensajebtn1 = 'P1-Actual';
                    break;
                default:
                    //esta listo
                    $claseboton1 = 'success';
                    $habilitarboton1 = '';
                    $mensajebtn1 = 'P1-Realizado';
            }

            if ($valor->c6p10intermedia <> '' && $valor->c6p11intermedia == '') {
                $estado2 = '97';
            } else {
                $estado2 = $valor->c6p11intermedia;
            }
            switch ($estado2) {

                case '98': //Para salto
                    $claseboton2 = '';
                    $habilitarboton2 = 'disabled="disabled"';
                    $mensajebtn2 = 'P2-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton2 = 'warning';
                    $habilitarboton2 = '';
                    $mensajebtn2 = 'P2-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton2 = 'danger';
                    $habilitarboton2 = 'disabled="disabled"';
                    $mensajebtn2 = 'P2-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton2 = 'success';
                    $habilitarboton2 = '';
                    $mensajebtn2 = 'P2-Realizado';
            }

            if ($valor->c6p10intermedia <> '' && $valor->c6p11intermedia <> '' && $valor->c6p12intermedia == '') {
                $estado3 = '97';
            } else {
                $estado3 = $valor->c6p12intermedia;
            }
            switch ($estado3) {

                case '98': //Para salto
                    $claseboton3 = '';
                    $habilitarboton3 = 'disabled="disabled"';
                    $mensajebtn3 = 'P3-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton3 = 'warning';
                    $habilitarboton3 = '';
                    $mensajebtn3 = 'P3-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton3 = 'danger';
                    $habilitarboton3 = 'disabled="disabled"';
                    $mensajebtn3 = 'P3-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton3 = 'success';
                    $habilitarboton3 = '';
                    $mensajebtn3 = 'P3-Realizado';
            }

            if ($valor->c6p10intermedia <> '' && $valor->c6p11intermedia <> '' && $valor->c6p12intermedia <> '' && $valor->c6p13intermedia == '') {
                $estado4 = '97';
            } else {
                $estado4 = $valor->c6p13intermedia;
            }
            switch ($estado4) {

                case '98': //Para salto
                    $claseboton4 = '';
                    $habilitarboton4 = 'disabled="disabled"';
                    $mensajebtn4 = 'P4-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton4 = 'warning';
                    $habilitarboton4 = '';
                    $mensajebtn4 = 'P4-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton4 = 'danger';
                    $habilitarboton4 = 'disabled="disabled"';
                    $mensajebtn4 = 'P4-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton4 = 'success';
                    $habilitarboton4 = '';
                    $mensajebtn4 = 'P4-Realizado';
            }

            if ($valor->c6p10intermedia <> '' && $valor->c6p11intermedia <> '' && $valor->c6p12intermedia <> '' && $valor->c6p13intermedia <> '' && $valor->c6p14intermedia == '') {
                $estado5 = '97';
            } else {
                $estado5 = $valor->c6p14intermedia;
            }
            switch ($estado5) {

                case '98': //Para salto
                    $claseboton5 = '';
                    $habilitarboton5 = 'disabled="disabled"';
                    $mensajebtn5 = 'P5-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton5 = 'warning';
                    $habilitarboton5 = '';
                    $mensajebtn5 = 'P5-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton5 = 'danger';
                    $habilitarboton5 = 'disabled="disabled"';
                    $mensajebtn5 = 'P5-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton5 = 'success';
                    $habilitarboton5 = '';
                    $mensajebtn5 = 'P5-Realizado';
            }

            if ($valor->c6p10intermedia <> '' && $valor->c6p11intermedia <> '' && $valor->c6p12intermedia <> '' && $valor->c6p13intermedia <> '' && $valor->c6p14intermedia <> '' && $valor->c6p15intermedia == '') {
                $estado6 = '97';
            } else {
                $estado6 = $valor->c6p15intermedia;
            }
            switch ($estado6) {

                case '98': //Para salto
                    $claseboton6 = '';
                    $habilitarboton6 = 'disabled="disabled"';
                    $mensajebtn6 = 'P6-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton6 = 'warning';
                    $habilitarboton6 = '';
                    $mensajebtn6 = 'P6-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton6 = 'danger';
                    $habilitarboton6 = 'disabled="disabled"';
                    $mensajebtn6 = 'P6-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton6 = 'success';
                    $habilitarboton6 = '';
                    $mensajebtn6 = 'P6-Realizado';
            }

           

           $c6 = $valor->c6p10intermedia <> '' && $valor->c6p11intermedia <> '' && $valor->c6p12intermedia <> '' && $valor->c6p13intermedia <> '' && $valor->c6p14intermedia <> '' && $valor->c6p15intermedia <> '';

            $datos6 .= '<tr>'
                    . '<td><button type="button" id="p1' . $valor->folio . '" ' . $habilitarboton1 . ' onclick="c6p1(' . $valor->folio . ')" class="btn btn-' . $claseboton1 . ' btn-sm col-sm-9">' . $mensajebtn1 . '</button></td>
                      <td><button type="button" id="p2' . $valor->folio . '" ' . $habilitarboton2 . ' onclick="c6p2(' . $valor->folio . ')" class="btn btn-' . $claseboton2 . ' btn-sm col-sm-9">' . $mensajebtn2 . '</button></td>
                      <td><button type="button" id="p3' . $valor->folio . '" ' . $habilitarboton3 . ' onclick="c6p3(' . $valor->folio . ')" class="btn btn-' . $claseboton3 . ' btn-sm col-sm-9">' . $mensajebtn3 . '</button></td>
                      <td><button type="button" id="p4' . $valor->folio . '" ' . $habilitarboton4 . ' onclick="c6p4(' . $valor->folio . ')" class="btn btn-' . $claseboton4 . ' btn-sm col-sm-9">' . $mensajebtn4 . '</button></td>
                      <td><button type="button" id="p5' . $valor->folio . '" ' . $habilitarboton5 . ' onclick="c6p5(' . $valor->folio . ')" class="btn btn-' . $claseboton5 . ' btn-sm col-sm-9">' . $mensajebtn5 . '</button></td>
                      <td><button type="button" id="p6' . $valor->folio . '" ' . $habilitarboton6 . ' onclick="c6p6(' . $valor->folio . ')" class="btn btn-' . $claseboton6 . ' btn-sm col-sm-9">' . $mensajebtn6 . '</button></td>
                      
                      
                      
                      </tr>';
        }
//fin traer una lista de valores cap 6
//traer una lista de valores cap 11
        $listartabla = $this->m_capituloshogarintermedia->fm_listartablacap11($folio);
        $c11 = '';
        $datos11 = '';
        $cap11 = '';
        foreach ($listartabla as $valor) {
            $cap11 = $valor->c11p11intermediao1;

            if ($cap2 <> ''  && $cap6 <> '' && $valor->c11p11intermediao1 == '') {
                $estado1 = '97';
            } else {
                $estado1 = $valor->c11p11intermediao1;
            }
            switch ($estado1) {

                case '98': //Para salto
                    $claseboton1 = '';
                    $habilitarboton1 = 'disabled="disabled"';
                    $mensajebtn1 = 'P1-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton1 = 'warning';
                    $habilitarboton1 = '';
                    $mensajebtn1 = 'P1-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton1 = 'warning';
                    $habilitarboton1 = 'disabled="disabled"';
                    $mensajebtn1 = 'P1-Actual';
                    break;
                default:
                    //esta listo
                    $claseboton1 = 'success';
                    $habilitarboton1 = '';
                    $mensajebtn1 = 'P1-Realizado';
            }

          
            $estado15fin = $a;

            $c11 = $valor->c11p11intermediao1 <> '' ;
            $datos11 .= '<tr>'
                    . '<td><button type="button" id="p1' . $valor->folio . '" ' . $habilitarboton1 . ' onclick="c11p1(' . $valor->folio . ')" class="btn btn-' . $claseboton1 . ' btn-sm col-sm-1">' . $mensajebtn1 . '</button></td>
                     
                                        
                      </tr>';
        }
//fin traer una lista de valores cap 11
        //ESTO LEVANTA LA VISTA     
        $titulo = 'v_capituloshogarintermedia'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page, array('titulo' => $titulo, 'foot' => FOOTS, 'head1' => HEAD1, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA, 'datos2' => $datos2, 'datos6' => $datos6, 'datos11' => $datos11, 'cap11' => $cap11,
            'folio' => $folio, 'tdatinte' => $tdatinte, 'estado15fin' => $estado15fin, 'cap2' => $cap2, 'cap6' => $cap6, 'cap11' => $cap11, 'c2' => $c2,  'c6' => $c6, 'c11' => $c11));
        //FIN LEVANTA LA VISTA
    }

    public function fc_cerrarform() {
        $cfolio = $this->input->get('vfolio');
        $cidpaso = $this->input->get('vidpaso');
        $cestado = $this->input->get('vestado');
        $this->m_capituloshogarintermedia->fm_cerrarform($cfolio, $cidpaso, $cestado);
    }

    public function fc_llenarcapitulosintegrante() {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $this->m_capituloshogarintermedia->fm_llenarcapitulosintegrante($cfolio, $cidintegrante);
        //echo json_encode(array('result' => 'guardado'));
    }
    
    

}
