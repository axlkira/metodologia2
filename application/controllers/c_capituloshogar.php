<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_capituloshogar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_capituloshogar'); //carga el controlador modelo
        if( $this->session->userdata('documento') == '')
        {
            redirect('/c_login/fc_vlogin');
        }  
    }

    //funcion encargada de llamar a la vista de la pagina 
    public function fc_capituloshogar($page = 'v_capituloshogar') {

        if (!file_exists('application/views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        //INICIO TRAER DATOS DEL TITULAR
        $folio = $this->input->get('folio'); //tomamos el valor del folio que viene por get
        $idintegrante = $this->input->get('idintegrante');

        $datosintegrante = $this->m_capituloshogar->fm_datosintegrante($folio, $idintegrante); //lo mandasmos a la funcion del modelo para verificar

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
        $listartabla = $this->m_capituloshogar->fm_listartablacap1($folio);
        $a = '';
        $datos1 = '';
        $cap1 = '';
        foreach ($listartabla as $valor) {
            $cap1 = $valor->p1;
            switch ($valor->p1) {

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
                    $habilitarboton1 = '';
                    $mensajebtn1 = 'P1-Actual';
                    break;
                default:
                    //esta listo
                    $claseboton1 = 'success';
                    $habilitarboton1 = '';
                    $mensajebtn1 = 'P1-Realizado';
            }

            $datos1 .= '<tr>'
                    //.'<td>'.$valor->idvivienda.'</td>'
                    . '<td><button type="button" id="p1' . $valor->folio . '" ' . $habilitarboton1 . ' onclick="c1p1(' . $valor->folio . ')" class="btn btn-' . $claseboton1 . ' btn-sm col-sm-1">' . $mensajebtn1 . '</button></td>
                    </tr>';
        }
//fin traer una lista de valores cap 1
//traer una lista de valores cap 2
        $listartabla = $this->m_capituloshogar->fm_listartablacap2($folio);

        $datos2 = '';
        $cap2 = '';
        $c2 = '';
        foreach ($listartabla as $valor) {
            $cap2 = $valor->c2p16;

            if ($cap1 <> '' && $valor->c2p1 == '') {
                $estado1 = '97';
            } else {
                $estado1 = $valor->c2p1;
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

            if ($valor->c2p1 <> '' && $valor->c2p2 == '') {
                $estado2 = '97';
            } else {
                $estado2 = $valor->c2p2;
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

            if ($valor->c2p1 <> '' && $valor->c2p2 <> '' && $valor->c2p3 == '') {
                $estado3 = '97';
            } else {
                $estado3 = $valor->c2p3;
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

            if ($valor->c2p1 <> '' && $valor->c2p2 <> '' && $valor->c2p3 <> '' && $valor->c2p4 == '') {
                $estado4 = '97';
            } else {
                $estado4 = $valor->c2p4;
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

            if ($valor->c2p1 <> '' && $valor->c2p2 <> '' && $valor->c2p3 <> '' && $valor->c2p4 <> '' && $valor->c2p5 == '') {
                $estado5 = '97';
            } else {
                $estado5 = $valor->c2p5;
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

            if ($valor->c2p1 <> '' && $valor->c2p2 <> '' && $valor->c2p3 <> '' && $valor->c2p4 <> '' && $valor->c2p5 <> '' && $valor->c2p6o1 == '') {
                $estado6 = '97';
            } else {
                $estado6 = $valor->c2p6o1;
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

            if ($valor->c2p1 <> '' && $valor->c2p2 <> '' && $valor->c2p3 <> '' && $valor->c2p4 <> '' && $valor->c2p5 <> '' && $valor->c2p6o1 <> '' && $valor->c2p7o1 == '') {
                $estado7 = '97';
            } else {
                $estado7 = $valor->c2p7o1;
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

            if ($valor->c2p1 <> '' && $valor->c2p2 <> '' && $valor->c2p3 <> '' && $valor->c2p4 <> '' && $valor->c2p5 <> '' && $valor->c2p6o1 <> '' && $valor->c2p7o1 <> '' && $valor->c2p8 == '') {
                $estado8 = '97';
            } else {
                $estado8 = $valor->c2p8;
            }
            switch ($estado8) {

                case '98': //Para salto
                    $claseboton8 = '';
                    $habilitarboton8 = 'disabled="disabled"';
                    $mensajebtn8 = 'P8-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton8 = 'warning';
                    $habilitarboton8 = '';
                    $mensajebtn8 = 'P8-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton8 = 'danger';
                    $habilitarboton8 = 'disabled="disabled"';
                    $mensajebtn8 = 'P8-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton8 = 'success';
                    $habilitarboton8 = '';
                    $mensajebtn8 = 'P8-Realizado';
            }

            if ($valor->c2p1 <> '' && $valor->c2p2 <> '' && $valor->c2p3 <> '' && $valor->c2p4 <> '' && $valor->c2p5 <> '' && $valor->c2p6o1 <> '' && $valor->c2p7o1 <> '' && $valor->c2p8 <> '' && $valor->c2p9 == '') {
                $estado9 = '97';
            } else {
                $estado9 = $valor->c2p9;
            }
            switch ($estado9) {

                case '98': //Para salto
                    $claseboton9 = '';
                    $habilitarboton9 = 'disabled="disabled"';
                    $mensajebtn9 = 'P9-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton9 = 'warning';
                    $habilitarboton9 = '';
                    $mensajebtn9 = 'P9-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton9 = 'danger';
                    $habilitarboton9 = 'disabled="disabled"';
                    $mensajebtn9 = 'P9-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton9 = 'success';
                    $habilitarboton9 = '';
                    $mensajebtn9 = 'P9-Realizado';
            }

            if ($valor->c2p1 <> '' && $valor->c2p2 <> '' && $valor->c2p3 <> '' && $valor->c2p4 <> '' && $valor->c2p5 <> '' && $valor->c2p6o1 <> '' && $valor->c2p7o1 <> '' && $valor->c2p8 <> '' && $valor->c2p9 <> '' && $valor->c2p10 == '') {
                $estado10 = '97';
            } else {
                $estado10 = $valor->c2p10;
            }
            switch ($estado10) {

                case '98': //Para salto
                    $claseboton10 = '';
                    $habilitarboton10 = 'disabled="disabled"';
                    $mensajebtn10 = 'P10-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton10 = 'warning';
                    $habilitarboton10 = '';
                    $mensajebtn10 = 'P10-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton10 = 'danger';
                    $habilitarboton10 = 'disabled="disabled"';
                    $mensajebtn10 = 'P10-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton10 = 'success';
                    $habilitarboton10 = '';
                    $mensajebtn10 = 'P10-Realizado';
            }

            if ($valor->c2p1 <> '' && $valor->c2p2 <> '' && $valor->c2p3 <> '' && $valor->c2p4 <> '' && $valor->c2p5 <> '' && $valor->c2p6o1 <> '' && $valor->c2p7o1 <> '' && $valor->c2p8 <> '' && $valor->c2p9 <> '' && $valor->c2p10 <> '' && $valor->c2p11 == '') {
                $estado11 = '97';
            } else {
                $estado11 = $valor->c2p11;
            }
            switch ($estado11) {

                case '98': //Para salto
                    $claseboton11 = '';
                    $habilitarboton11 = 'disabled="disabled"';
                    $mensajebtn11 = 'P11-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton11 = 'warning';
                    $habilitarboton11 = '';
                    $mensajebtn11 = 'P11-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton11 = 'danger';
                    $habilitarboton11 = 'disabled="disabled"';
                    $mensajebtn11 = 'P11-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton11 = 'success';
                    $habilitarboton11 = '';
                    $mensajebtn11 = 'P11-Realizado';
            }

            if ($valor->c2p1 <> '' && $valor->c2p2 <> '' && $valor->c2p3 <> '' && $valor->c2p4 <> '' && $valor->c2p5 <> '' && $valor->c2p6o1 <> '' && $valor->c2p7o1 <> '' && $valor->c2p8 <> '' && $valor->c2p9 <> '' && $valor->c2p10 <> '' && $valor->c2p11 <> '' && $valor->c2p12 == '') {
                $estado12 = '97';
            } else {
                $estado12 = $valor->c2p12;
            }
            switch ($estado12) {

                case '98': //Para salto
                    $claseboton12 = '';
                    $habilitarboton12 = 'disabled="disabled"';
                    $mensajebtn12 = 'P12-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton12 = 'warning';
                    $habilitarboton12 = '';
                    $mensajebtn12 = 'P12-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton12 = 'danger';
                    $habilitarboton12 = 'disabled="disabled"';
                    $mensajebtn12 = 'P12-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton12 = 'success';
                    $habilitarboton12 = '';
                    $mensajebtn12 = 'P12-Realizado';
            }

            if ($valor->c2p1 <> '' && $valor->c2p2 <> '' && $valor->c2p3 <> '' && $valor->c2p4 <> '' && $valor->c2p5 <> '' && $valor->c2p6o1 <> '' && $valor->c2p7o1 <> '' && $valor->c2p8 <> '' && $valor->c2p9 <> '' && $valor->c2p10 <> '' && $valor->c2p11 <> '' && $valor->c2p12 <> '' && $valor->c2p13 == '') {
                $estado13 = '97';
            } else {
                $estado13 = $valor->c2p13;
            }
            switch ($estado13) {

                case '98': //Para salto
                    $claseboton13 = '';
                    $habilitarboton13 = 'disabled="disabled"';
                    $mensajebtn13 = 'P13-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton13 = 'warning';
                    $habilitarboton13 = '';
                    $mensajebtn13 = 'P13-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton13 = 'danger';
                    $habilitarboton13 = 'disabled="disabled"';
                    $mensajebtn13 = 'P13-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton13 = 'success';
                    $habilitarboton13 = '';
                    $mensajebtn13 = 'P13-Realizado';
            }

            if ($valor->c2p1 <> '' && $valor->c2p2 <> '' && $valor->c2p3 <> '' && $valor->c2p4 <> '' && $valor->c2p5 <> '' && $valor->c2p6o1 <> '' && $valor->c2p7o1 <> '' && $valor->c2p8 <> '' && $valor->c2p9 <> '' && $valor->c2p10 <> '' && $valor->c2p11 <> '' && $valor->c2p12 <> '' && $valor->c2p13 <> '' && $valor->c2p13ao1 == '') {
                $estado14 = '97';
            } else {
                $estado14 = $valor->c2p13ao1;
            }
            switch ($estado14) {

                case '98': //Para salto
                    $claseboton14 = '';
                    $habilitarboton14 = 'disabled="disabled"';
                    $mensajebtn14 = 'P13a-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton14 = 'warning';
                    $habilitarboton14 = '';
                    $mensajebtn14 = 'P13a-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton14 = 'danger';
                    $habilitarboton14 = 'disabled="disabled"';
                    $mensajebtn14 = 'P13a-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton14 = 'success';
                    $habilitarboton14 = '';
                    $mensajebtn14 = 'P13a-Realizado';
            }

            if ($valor->c2p1 <> '' && $valor->c2p2 <> '' && $valor->c2p3 <> '' && $valor->c2p4 <> '' && $valor->c2p5 <> '' && $valor->c2p6o1 <> '' && $valor->c2p7o1 <> '' && $valor->c2p8 <> '' && $valor->c2p9 <> '' && $valor->c2p10 <> '' && $valor->c2p11 <> '' && $valor->c2p12 <> '' && $valor->c2p13 <> '' && $valor->c2p13ao1 <> '' && $valor->c2p13bo1 == '') {
                $estado14a = '97';
            } else {
                $estado14a = $valor->c2p13bo1;
            }
            switch ($estado14a) {

                case '98': //Para salto
                    $claseboton14a = '';
                    $habilitarboton14a = 'disabled="disabled"';
                    $mensajebtn14a = 'P13b-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton14a = 'warning';
                    $habilitarboton14a = '';
                    $mensajebtn14a = 'P13b-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton14a = 'danger';
                    $habilitarboton14a = 'disabled="disabled"';
                    $mensajebtn14a = 'P13b-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton14a = 'success';
                    $habilitarboton14a = '';
                    $mensajebtn14a = 'P13b-Realizado';
            }

            if ($valor->c2p1 <> '' && $valor->c2p2 <> '' && $valor->c2p3 <> '' && $valor->c2p4 <> '' && $valor->c2p5 <> '' && $valor->c2p6o1 <> '' && $valor->c2p7o1 <> '' && $valor->c2p8 <> '' && $valor->c2p9 <> '' && $valor->c2p10 <> '' && $valor->c2p11 <> '' && $valor->c2p12 <> '' && $valor->c2p13 <> '' && $valor->c2p13ao1 <> '' && $valor->c2p13bo1 <> '' && $valor->c2p14o1 == '') {
                $estado14b = '97';
            } else {
                $estado14b = $valor->c2p14o1;
            }
            switch ($estado14b) {

                case '98': //Para salto
                    $claseboton14b = '';
                    $habilitarboton14b = 'disabled="disabled"';
                    $mensajebtn14b = 'P14-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton14b = 'warning';
                    $habilitarboton14b = '';
                    $mensajebtn14b = 'P14-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton14b = 'danger';
                    $habilitarboton14b = 'disabled="disabled"';
                    $mensajebtn14b = 'P14-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton14b = 'success';
                    $habilitarboton14b = '';
                    $mensajebtn14b = 'P14-Realizado';
            }

            if ($valor->c2p1 <> '' && $valor->c2p2 <> '' && $valor->c2p3 <> '' && $valor->c2p4 <> '' && $valor->c2p5 <> '' && $valor->c2p6o1 <> '' && $valor->c2p7o1 <> '' && $valor->c2p8 <> '' && $valor->c2p9 <> '' && $valor->c2p10 <> '' && $valor->c2p11 <> '' && $valor->c2p12 <> '' && $valor->c2p13 <> '' && $valor->c2p13ao1 <> '' && $valor->c2p13bo1 <> '' && $valor->c2p14o1 <> '' && $valor->c2p15 == '') {
                $estado15 = '97';
            } else {
                $estado15 = $valor->c2p15;
            }
            switch ($estado15) {

                case '98': //Para salto
                    $claseboton15 = '';
                    $habilitarboton15 = 'disabled="disabled"';
                    $mensajebtn15 = 'P15-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton15 = 'warning';
                    $habilitarboton15 = '';
                    $mensajebtn15 = 'P15-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton15 = 'danger';
                    $habilitarboton15 = 'disabled="disabled"';
                    $mensajebtn15 = 'P15-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton15 = 'success';
                    $habilitarboton15 = '';
                    $mensajebtn15 = 'P15-Realizado';
            }

            if ($valor->c2p1 <> '' && $valor->c2p2 <> '' && $valor->c2p3 <> '' && $valor->c2p4 <> '' && $valor->c2p5 <> '' && $valor->c2p6o1 <> '' && $valor->c2p7o1 <> '' && $valor->c2p8 <> '' && $valor->c2p9 <> '' && $valor->c2p10 <> '' && $valor->c2p11 <> '' && $valor->c2p12 <> '' && $valor->c2p13 <> '' && $valor->c2p13ao1 <> '' && $valor->c2p13bo1 <> '' && $valor->c2p14o1 <> '' && $valor->c2p15 <> '' && $valor->c2p16 == '') {
                $estado16 = '97';
            } else {
                $estado16 = $valor->c2p16;
            }
            switch ($estado16) {

                case '98': //Para salto
                    $claseboton16 = '';
                    $habilitarboton16 = 'disabled="disabled"';
                    $mensajebtn16 = 'P16-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton16 = 'warning';
                    $habilitarboton16 = '';
                    $mensajebtn16 = 'P16-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton16 = 'danger';
                    $habilitarboton16 = 'disabled="disabled"';
                    $mensajebtn16 = 'P16-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton16 = 'success';
                    $habilitarboton16 = '';
                    $mensajebtn16 = 'P16-Realizado';
            }
            
            $c2 = $valor->c2p1 <> '' && $valor->c2p2 <> '' && $valor->c2p3 <> '' && $valor->c2p4 <> '' && $valor->c2p5 <> '' && $valor->c2p6o1 <> '' && $valor->c2p7o1 <> '' && $valor->c2p8 <> '' && $valor->c2p9 <> '' && $valor->c2p10 <> '' && $valor->c2p11 <> '' && $valor->c2p12 <> '' && $valor->c2p13 <> '' && $valor->c2p13ao1 <> '' && $valor->c2p13bo1 <> '' && $valor->c2p14o1 <> '' && $valor->c2p15 <> '' && $valor->c2p16 <> '';
                





            $datos2 .= '<tr>'
                    . '<td><button type="button" id="p1' . $valor->folio . '" ' . $habilitarboton1 . ' onclick="c2p1(' . $valor->folio . ')" class="btn btn-' . $claseboton1 . ' btn-sm col-sm-9">' . $mensajebtn1 . '</button></td>
                      <td><button type="button" id="p2' . $valor->folio . '" ' . $habilitarboton2 . ' onclick="c2p2(' . $valor->folio . ')" class="btn btn-' . $claseboton2 . ' btn-sm col-sm-9">' . $mensajebtn2 . '</button></td>
                      <td><button type="button" id="p3' . $valor->folio . '" ' . $habilitarboton3 . ' onclick="c2p3(' . $valor->folio . ')" class="btn btn-' . $claseboton3 . ' btn-sm col-sm-9">' . $mensajebtn3 . '</button></td>
                      <td><button type="button" id="p4' . $valor->folio . '" ' . $habilitarboton4 . ' onclick="c2p4(' . $valor->folio . ')" class="btn btn-' . $claseboton4 . ' btn-sm col-sm-9">' . $mensajebtn4 . '</button></td>
                      <td><button type="button" id="p5' . $valor->folio . '" ' . $habilitarboton5 . ' onclick="c2p5(' . $valor->folio . ')" class="btn btn-' . $claseboton5 . ' btn-sm col-sm-9">' . $mensajebtn5 . '</button></td>
                      <td><button type="button" id="p6' . $valor->folio . '" ' . $habilitarboton6 . ' onclick="c2p6(' . $valor->folio . ')" class="btn btn-' . $claseboton6 . ' btn-sm col-sm-9">' . $mensajebtn6 . '</button></td>
                      <td><button type="button" id="p7' . $valor->folio . '" ' . $habilitarboton7 . ' onclick="c2p7(' . $valor->folio . ')" class="btn btn-' . $claseboton7 . ' btn-sm col-sm-9">' . $mensajebtn7 . '</button></td>
                      <td><button type="button" id="p8' . $valor->folio . '" ' . $habilitarboton8 . ' onclick="c2p8(' . $valor->folio . ')" class="btn btn-' . $claseboton8 . ' btn-sm col-sm-9">' . $mensajebtn8 . '</button></td>
                      </tr>
                      <tr>
                      <td><button type="button" id="p9' . $valor->folio . '" ' . $habilitarboton9 . ' onclick="c2p9(' . $valor->folio . ')" class="btn btn-' . $claseboton9 . ' btn-sm col-sm-9">' . $mensajebtn9 . '</button></td>
                      <td><button type="button" id="p10' . $valor->folio . '" ' . $habilitarboton10 . ' onclick="c2p10(' . $valor->folio . ')" class="btn btn-' . $claseboton10 . ' btn-sm col-sm-9">' . $mensajebtn10 . '</button></td>
                      <td><button type="button" id="p11' . $valor->folio . '" ' . $habilitarboton11 . ' onclick="c2p11a(' . $valor->folio . ')" class="btn btn-' . $claseboton11 . ' btn-sm col-sm-9">' . $mensajebtn11 . '</button></td>
                      <td><button type="button" id="p12' . $valor->folio . '" ' . $habilitarboton12 . ' onclick="c2p12(' . $valor->folio . ')" class="btn btn-' . $claseboton12 . ' btn-sm col-sm-9">' . $mensajebtn12 . '</button></td>
                      <td><button type="button" id="p13' . $valor->folio . '" ' . $habilitarboton13 . ' onclick="c2p13(' . $valor->folio . ')" class="btn btn-' . $claseboton13 . ' btn-sm col-sm-9">' . $mensajebtn13 . '</button></td>    
                      <td><button type="button" id="p13a' . $valor->folio . '" ' . $habilitarboton14 . ' onclick="c2p13a(' . $valor->folio . ')" class="btn btn-' . $claseboton14 . ' btn-sm col-sm-9">' . $mensajebtn14 . '</button></td>    
                      <td><button type="button" id="p13b' . $valor->folio . '" ' . $habilitarboton14a . ' onclick="c2p13b(' . $valor->folio . ')" class="btn btn-' . $claseboton14a . ' btn-sm col-sm-9">' . $mensajebtn14a . '</button></td>    
                      <td><button type="button" id="p14' . $valor->folio . '" ' . $habilitarboton14b . ' onclick="c2p14(' . $valor->folio . ')" class="btn btn-' . $claseboton14b . ' btn-sm col-sm-9">' . $mensajebtn14b . '</button></td>        
                      </tr>
                      <tr>
                      <td><button type="button" id="p15' . $valor->folio . '" ' . $habilitarboton15 . ' onclick="c2p15(' . $valor->folio . ')" class="btn btn-' . $claseboton15 . ' btn-sm col-sm-9">' . $mensajebtn15 . '</button></td>
                      <td><button type="button" id="p16' . $valor->folio . '" ' . $habilitarboton16 . ' onclick="c2p16(' . $valor->folio . ')" class="btn btn-' . $claseboton16 . ' btn-sm col-sm-9">' . $mensajebtn16 . '</button></td>
                      
                      </tr>';
        }
//fin traer una lista de valores cap 2
//traer una lista de valores cap 3
        $listartabla = $this->m_capituloshogar->fm_listartablacap3($folio);

        $datos3 = '';
        $cap3 = '';
        $c3 = '';
        foreach ($listartabla as $valor) {
            $cap3 = $valor->c3p4;

            if ($cap1 <> '' && $cap2 <> '' && $valor->c3p1 == '') {
                $estado1 = '97';
            } else {
                $estado1 = $valor->c3p1;
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

            if ($valor->c3p1 <> '' && $valor->c3p1ao1 == '') {
                $estado1a = '97';
            } else {
                $estado1a = $valor->c3p1ao1;
            }
            switch ($estado1a) {

                case '98': //Para salto
                    $claseboton1a = '';
                    $habilitarboton1a = 'disabled="disabled"';
                    $mensajebtn1a = 'P1a-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton1a = 'warning';
                    $habilitarboton1a = '';
                    $mensajebtn1a = 'P1a-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton1a = 'danger';
                    $habilitarboton1a = 'disabled="disabled"';
                    $mensajebtn1a = 'P1a-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton1a = 'success';
                    $habilitarboton1a = '';
                    $mensajebtn1a = 'P1a-Realizado';
            }

            if ($valor->c3p1 <> '' && $valor->c3p1ao1 <> '' && $valor->c3p2o1 == '') {
                $estado2 = '97';
            } else {
                $estado2 = $valor->c3p2o1;
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

            if ($valor->c3p1 <> '' && $valor->c3p1ao1 <> '' && $valor->c3p2o1 <> '' && $valor->c3p3o1 == '') {
                $estado3 = '97';
            } else {
                $estado3 = $valor->c3p3o1;
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

            if ($valor->c3p1 <> '' && $valor->c3p1ao1 <> '' && $valor->c3p2o1 <> '' && $valor->c3p3o1 <> '' && $valor->c3p4 == '') {
                $estado4 = '97';
            } else {
                $estado4 = $valor->c3p4;
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

            $c3 = $valor->c3p1 <> '' && $valor->c3p1ao1 <> '' && $valor->c3p2o1 <> '' && $valor->c3p3o1 <> '' && $valor->c3p4 <> '';

            $datos3 .= '<tr>'
                    . '<td><button type="button" id="p1' . $valor->folio . '" ' . $habilitarboton1 . ' onclick="c3p1(' . $valor->folio . ')" class="btn btn-' . $claseboton1 . ' btn-sm col-sm-9">' . $mensajebtn1 . '</button></td>
                      <td><button type="button" id="p1a' . $valor->folio . '" ' . $habilitarboton1a . ' onclick="c3p1a(' . $valor->folio . ')" class="btn btn-' . $claseboton1a . ' btn-sm col-sm-9">' . $mensajebtn1a . '</button></td>  
                      <td><button type="button" id="p2' . $valor->folio . '" ' . $habilitarboton2 . ' onclick="c3p2(' . $valor->folio . ')" class="btn btn-' . $claseboton2 . ' btn-sm col-sm-9">' . $mensajebtn2 . '</button></td>
                      <td><button type="button" id="p3' . $valor->folio . '" ' . $habilitarboton3 . ' onclick="c3p3(' . $valor->folio . ')" class="btn btn-' . $claseboton3 . ' btn-sm col-sm-9">' . $mensajebtn3 . '</button></td>
                      <td><button type="button" id="p4' . $valor->folio . '" ' . $habilitarboton4 . ' onclick="c3p4(' . $valor->folio . ')" class="btn btn-' . $claseboton4 . ' btn-sm col-sm-9">' . $mensajebtn4 . '</button></td>
                     </tr>';
        }
//fin traer una lista de valores cap 3
//traer una lista de valores cap 6
        $listartabla = $this->m_capituloshogar->fm_listartablacap6($folio);
        $c6 = '';
        $datos6 = '';
        $cap6 = '';
        foreach ($listartabla as $valor) {
            $cap6 = $valor->c6p19;

            if ($cap1 <> '' && $cap2 <> '' && $cap3 <> '' && $valor->c6p1 == '') {
                $estado1 = '97';
            } else {
                $estado1 = $valor->c6p1;
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

            if ($valor->c6p1 <> '' && $valor->c6p2 == '') {
                $estado2 = '97';
            } else {
                $estado2 = $valor->c6p2;
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

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 == '') {
                $estado3 = '97';
            } else {
                $estado3 = $valor->c6p3;
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

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 == '') {
                $estado4 = '97';
            } else {
                $estado4 = $valor->c6p4;
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

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 == '') {
                $estado5 = '97';
            } else {
                $estado5 = $valor->c6p5;
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

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 <> '' && $valor->c6p6 == '') {
                $estado6 = '97';
            } else {
                $estado6 = $valor->c6p6;
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

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 <> '' && $valor->c6p6 <> '' && $valor->c6p7 == '') {
                $estado7 = '97';
            } else {
                $estado7 = $valor->c6p7;
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

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 <> '' && $valor->c6p6 <> '' && $valor->c6p7 <> '' && $valor->c6p8 == '') {
                $estado8 = '97';
            } else {
                $estado8 = $valor->c6p8;
            }
            switch ($estado8) {

                case '98': //Para salto
                    $claseboton8 = '';
                    $habilitarboton8 = 'disabled="disabled"';
                    $mensajebtn8 = 'P8-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton8 = 'warning';
                    $habilitarboton8 = '';
                    $mensajebtn8 = 'P8-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton8 = 'danger';
                    $habilitarboton8 = 'disabled="disabled"';
                    $mensajebtn8 = 'P8-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton8 = 'success';
                    $habilitarboton8 = '';
                    $mensajebtn8 = 'P8-Realizado';
            }

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 <> '' && $valor->c6p6 <> '' && $valor->c6p7 <> '' && $valor->c6p8 <> '' && $valor->c6p9 == '') {
                $estado9 = '97';
            } else {
                $estado9 = $valor->c6p9;
            }
            switch ($estado9) {

                case '98': //Para salto
                    $claseboton9 = '';
                    $habilitarboton9 = 'disabled="disabled"';
                    $mensajebtn9 = 'P9-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton9 = 'warning';
                    $habilitarboton9 = '';
                    $mensajebtn9 = 'P9-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton9 = 'danger';
                    $habilitarboton9 = 'disabled="disabled"';
                    $mensajebtn9 = 'P9-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton9 = 'success';
                    $habilitarboton9 = '';
                    $mensajebtn9 = 'P9-Realizado';
            }

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 <> '' && $valor->c6p6 <> '' && $valor->c6p7 <> '' && $valor->c6p8 <> '' && $valor->c6p9 <> '' && $valor->c6menores18 == '') {
                $estado9m18 = '97';
            } else {
                $estado9m18 = $valor->c6menores18;
            }
            switch ($estado9m18) {

                case '98': //Para salto
                    $claseboton9m18 = '';
                    $habilitarboton9m18 = 'disabled="disabled"';
                    $mensajebtn9m18 = 'P9m18-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton9m18 = 'warning';
                    $habilitarboton9m18 = '';
                    $mensajebtn9m18 = 'P9m18-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton9m18 = 'danger';
                    $habilitarboton9m18 = 'disabled="disabled"';
                    $mensajebtn9m18 = 'P9m18-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton9m18 = 'success';
                    $habilitarboton9m18 = '';
                    $mensajebtn9m18 = 'P9m18-Realizado';
            }

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 <> '' && $valor->c6p6 <> '' && $valor->c6p7 <> '' && $valor->c6p8 <> '' && $valor->c6p9 <> '' && $valor->c6menores18 <> '' && $valor->c6p10 == '') {
                $estado10 = '97';
            } else {
                $estado10 = $valor->c6p10;
            }
            switch ($estado10) {

                case '98': //Para salto
                    $claseboton10 = '';
                    $habilitarboton10 = 'disabled="disabled"';
                    $mensajebtn10 = 'P10-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton10 = 'warning';
                    $habilitarboton10 = '';
                    $mensajebtn10 = 'P10-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton10 = 'danger';
                    $habilitarboton10 = 'disabled="disabled"';
                    $mensajebtn10 = 'P10-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton10 = 'success';
                    $habilitarboton10 = '';
                    $mensajebtn10 = 'P10-Realizado';
            }

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 <> '' && $valor->c6p6 <> '' && $valor->c6p7 <> '' && $valor->c6p8 <> '' && $valor->c6p9 <> '' && $valor->c6menores18 <> '' && $valor->c6p10 <> '' && $valor->c6p11 == '') {
                $estado11 = '97';
            } else {
                $estado11 = $valor->c6p11;
            }
            switch ($estado11) {

                case '98': //Para salto
                    $claseboton11 = '';
                    $habilitarboton11 = 'disabled="disabled"';
                    $mensajebtn11 = 'P11-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton11 = 'warning';
                    $habilitarboton11 = '';
                    $mensajebtn11 = 'P11-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton11 = 'danger';
                    $habilitarboton11 = 'disabled="disabled"';
                    $mensajebtn11 = 'P11-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton11 = 'success';
                    $habilitarboton11 = '';
                    $mensajebtn11 = 'P11-Realizado';
            }

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 <> '' && $valor->c6p6 <> '' && $valor->c6p7 <> '' && $valor->c6p8 <> '' && $valor->c6p9 <> '' && $valor->c6menores18 <> '' && $valor->c6p10 <> '' && $valor->c6p11 <> '' && $valor->c6p12 == '') {
                $estado12 = '97';
            } else {
                $estado12 = $valor->c6p12;
            }
            switch ($estado12) {

                case '98': //Para salto
                    $claseboton12 = '';
                    $habilitarboton12 = 'disabled="disabled"';
                    $mensajebtn12 = 'P12-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton12 = 'warning';
                    $habilitarboton12 = '';
                    $mensajebtn12 = 'P12-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton12 = 'danger';
                    $habilitarboton12 = 'disabled="disabled"';
                    $mensajebtn12 = 'P12-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton12 = 'success';
                    $habilitarboton12 = '';
                    $mensajebtn12 = 'P12-Realizado';
            }

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 <> '' && $valor->c6p6 <> '' && $valor->c6p7 <> '' && $valor->c6p8 <> '' && $valor->c6p9 <> '' && $valor->c6menores18 <> '' && $valor->c6p10 <> '' && $valor->c6p11 <> '' && $valor->c6p12 <> '' && $valor->c6p13 == '') {
                $estado13 = '97';
            } else {
                $estado13 = $valor->c6p13;
            }
            switch ($estado13) {

                case '98': //Para salto
                    $claseboton13 = '';
                    $habilitarboton13 = 'disabled="disabled"';
                    $mensajebtn13 = 'P13-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton13 = 'warning';
                    $habilitarboton13 = '';
                    $mensajebtn13 = 'P13-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton13 = 'danger';
                    $habilitarboton13 = 'disabled="disabled"';
                    $mensajebtn13 = 'P13-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton13 = 'success';
                    $habilitarboton13 = '';
                    $mensajebtn13 = 'P13-Realizado';
            }

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 <> '' && $valor->c6p6 <> '' && $valor->c6p7 <> '' && $valor->c6p8 <> '' && $valor->c6p9 <> '' && $valor->c6menores18 <> '' && $valor->c6p10 <> '' && $valor->c6p11 <> '' && $valor->c6p12 <> '' && $valor->c6p13 <> '' && $valor->c6p14 == '') {
                $estado14 = '97';
            } else {
                $estado14 = $valor->c6p14;
            }
            switch ($estado14) {

                case '98': //Para salto
                    $claseboton14 = '';
                    $habilitarboton14 = 'disabled="disabled"';
                    $mensajebtn14 = 'P14-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton14 = 'warning';
                    $habilitarboton14 = '';
                    $mensajebtn14 = 'P14-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton14 = 'danger';
                    $habilitarboton14 = 'disabled="disabled"';
                    $mensajebtn14 = 'P14-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton14 = 'success';
                    $habilitarboton14 = '';
                    $mensajebtn14 = 'P14-Realizado';
            }

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 <> '' && $valor->c6p6 <> '' && $valor->c6p7 <> '' && $valor->c6p8 <> '' && $valor->c6p9 <> '' && $valor->c6menores18 <> '' && $valor->c6p10 <> '' && $valor->c6p11 <> '' && $valor->c6p12 <> '' && $valor->c6p13 <> '' && $valor->c6p14 <> '' && $valor->c6p15 == '') {
                $estado15 = '97';
            } else {
                $estado15 = $valor->c6p15;
            }
            switch ($estado15) {

                case '98': //Para salto
                    $claseboton15 = '';
                    $habilitarboton15 = 'disabled="disabled"';
                    $mensajebtn15 = 'P15-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton15 = 'warning';
                    $habilitarboton15 = '';
                    $mensajebtn15 = 'P15-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton15 = 'danger';
                    $habilitarboton15 = 'disabled="disabled"';
                    $mensajebtn15 = 'P15-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton15 = 'success';
                    $habilitarboton15 = '';
                    $mensajebtn15 = 'P15-Realizado';
            }

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 <> '' && $valor->c6p6 <> '' && $valor->c6p7 <> '' && $valor->c6p8 <> '' && $valor->c6p9 <> '' && $valor->c6menores18 <> '' && $valor->c6p10 <> '' && $valor->c6p11 <> '' && $valor->c6p12 <> '' && $valor->c6p13 <> '' && $valor->c6p14 <> '' && $valor->c6p15 <> '' && $valor->c6p16o1 == '') {
                $estado16 = '97';
            } else {
                $estado16 = $valor->c6p16o1;
            }
            switch ($estado16) {

                case '98': //Para salto
                    $claseboton16 = '';
                    $habilitarboton16 = 'disabled="disabled"';
                    $mensajebtn16 = 'P16-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton16 = 'warning';
                    $habilitarboton16 = '';
                    $mensajebtn16 = 'P16-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton16 = 'danger';
                    $habilitarboton16 = 'disabled="disabled"';
                    $mensajebtn16 = 'P16-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton16 = 'success';
                    $habilitarboton16 = '';
                    $mensajebtn16 = 'P16-Realizado';
            }

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 <> '' && $valor->c6p6 <> '' && $valor->c6p7 <> '' && $valor->c6p8 <> '' && $valor->c6p9 <> '' && $valor->c6menores18 <> '' && $valor->c6p10 <> '' && $valor->c6p11 <> '' && $valor->c6p12 <> '' && $valor->c6p13 <> '' && $valor->c6p14 <> '' && $valor->c6p15 <> '' && $valor->c6p16o1 <> '' && $valor->c6p17 == '') {
                $estado17 = '97';
            } else {
                $estado17 = $valor->c6p17;
            }
            switch ($estado17) {

                case '98': //Para salto
                    $claseboton17 = '';
                    $habilitarboton17 = 'disabled="disabled"';
                    $mensajebtn17 = 'P17-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton17 = 'warning';
                    $habilitarboton17 = '';
                    $mensajebtn17 = 'P17-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton17 = 'danger';
                    $habilitarboton17 = 'disabled="disabled"';
                    $mensajebtn17 = 'P17-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton17 = 'success';
                    $habilitarboton17 = '';
                    $mensajebtn17 = 'P17-Realizado';
            }

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 <> '' && $valor->c6p6 <> '' && $valor->c6p7 <> '' && $valor->c6p8 <> '' && $valor->c6p9 <> '' && $valor->c6menores18 <> '' && $valor->c6p10 <> '' && $valor->c6p11 <> '' && $valor->c6p12 <> '' && $valor->c6p13 <> '' && $valor->c6p14 <> '' && $valor->c6p15 <> '' && $valor->c6p16o1 <> '' && $valor->c6p17 <> '' && $valor->c6p17ao1 == '') {
                $estado18 = '97';
            } else {
                $estado18 = $valor->c6p17ao1;
            }
            switch ($estado18) {

                case '98': //Para salto
                    $claseboton18 = '';
                    $habilitarboton18 = 'disabled="disabled"';
                    $mensajebtn18 = 'P17a-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton18 = 'warning';
                    $habilitarboton18 = '';
                    $mensajebtn18 = 'P17a-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton18 = 'danger';
                    $habilitarboton18 = 'disabled="disabled"';
                    $mensajebtn18 = 'P17a-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton18 = 'success';
                    $habilitarboton18 = '';
                    $mensajebtn18 = 'P17a-Realizado';
            }

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 <> '' && $valor->c6p6 <> '' && $valor->c6p7 <> '' && $valor->c6p8 <> '' && $valor->c6p9 <> '' && $valor->c6menores18 <> '' && $valor->c6p10 <> '' && $valor->c6p11 <> '' && $valor->c6p12 <> '' && $valor->c6p13 <> '' && $valor->c6p14 <> '' && $valor->c6p15 <> '' && $valor->c6p16o1 <> '' && $valor->c6p17 <> '' && $valor->c6p17ao1 <> '' && $valor->c6p18 == '') {
                $estado18a = '97';
            } else {
                $estado18a = $valor->c6p18;
            }
            switch ($estado18a) {

                case '98': //Para salto
                    $claseboton18a = '';
                    $habilitarboton18a = 'disabled="disabled"';
                    $mensajebtn18a = 'P18-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton18a = 'warning';
                    $habilitarboton18a = '';
                    $mensajebtn18a = 'P18-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton18a = 'danger';
                    $habilitarboton18a = 'disabled="disabled"';
                    $mensajebtn18a = 'P18-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton18a = 'success';
                    $habilitarboton18a = '';
                    $mensajebtn18a = 'P18-Realizado';
            }

            if ($valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 <> '' && $valor->c6p6 <> '' && $valor->c6p7 <> '' && $valor->c6p8 <> '' && $valor->c6p9 <> '' && $valor->c6menores18 <> '' && $valor->c6p10 <> '' && $valor->c6p11 <> '' && $valor->c6p12 <> '' && $valor->c6p13 <> '' && $valor->c6p14 <> '' && $valor->c6p15 <> '' && $valor->c6p16o1 <> '' && $valor->c6p17 <> '' && $valor->c6p17ao1 <> '' && $valor->c6p18 <> '' && $valor->c6p19 == '') {
                $estado19 = '97';
            } else {
                $estado19 = $valor->c6p19;
            }
            switch ($estado19) {

                case '98': //Para salto
                    $claseboton19 = '';
                    $habilitarboton19 = 'disabled="disabled"';
                    $mensajebtn19 = 'P19-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton19 = 'warning';
                    $habilitarboton19 = '';
                    $mensajebtn19 = 'P19-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton19 = 'danger';
                    $habilitarboton19 = 'disabled="disabled"';
                    $mensajebtn19 = 'P19-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton19 = 'success';
                    $habilitarboton19 = '';
                    $mensajebtn19 = 'P19-Realizado';
            }

           $c6 = $valor->c6p1 <> '' && $valor->c6p2 <> '' && $valor->c6p3 <> '' && $valor->c6p4 <> '' && $valor->c6p5 <> '' && $valor->c6p6 <> '' && $valor->c6p7 <> '' && $valor->c6p8 <> '' && $valor->c6p9 <> '' && $valor->c6menores18 <> '' && $valor->c6p10 <> '' && $valor->c6p11 <> '' && $valor->c6p12 <> '' && $valor->c6p13 <> '' && $valor->c6p14 <> '' && $valor->c6p15 <> '' && $valor->c6p16o1 <> '' && $valor->c6p17 <> '' && $valor->c6p17ao1 <> '' && $valor->c6p18 <> '' && $valor->c6p19 <> '';

            $datos6 .= '<tr>'
                    . '<td><button type="button" id="p1' . $valor->folio . '" ' . $habilitarboton1 . ' onclick="c6p1(' . $valor->folio . ')" class="btn btn-' . $claseboton1 . ' btn-sm col-sm-9">' . $mensajebtn1 . '</button></td>
                      <td><button type="button" id="p2' . $valor->folio . '" ' . $habilitarboton2 . ' onclick="c6p2(' . $valor->folio . ')" class="btn btn-' . $claseboton2 . ' btn-sm col-sm-9">' . $mensajebtn2 . '</button></td>
                      <td><button type="button" id="p3' . $valor->folio . '" ' . $habilitarboton3 . ' onclick="c6p3(' . $valor->folio . ')" class="btn btn-' . $claseboton3 . ' btn-sm col-sm-9">' . $mensajebtn3 . '</button></td>
                      <td><button type="button" id="p4' . $valor->folio . '" ' . $habilitarboton4 . ' onclick="c6p4(' . $valor->folio . ')" class="btn btn-' . $claseboton4 . ' btn-sm col-sm-9">' . $mensajebtn4 . '</button></td>
                      <td><button type="button" id="p5' . $valor->folio . '" ' . $habilitarboton5 . ' onclick="c6p5(' . $valor->folio . ')" class="btn btn-' . $claseboton5 . ' btn-sm col-sm-9">' . $mensajebtn5 . '</button></td>
                      <td><button type="button" id="p6' . $valor->folio . '" ' . $habilitarboton6 . ' onclick="c6p6(' . $valor->folio . ')" class="btn btn-' . $claseboton6 . ' btn-sm col-sm-9">' . $mensajebtn6 . '</button></td>
                      <td><button type="button" id="p7' . $valor->folio . '" ' . $habilitarboton7 . ' onclick="c6p7(' . $valor->folio . ')" class="btn btn-' . $claseboton7 . ' btn-sm col-sm-9">' . $mensajebtn7 . '</button></td>        
                      <td><button type="button" id="p8' . $valor->folio . '" ' . $habilitarboton8 . ' onclick="c6p8(' . $valor->folio . ')" class="btn btn-' . $claseboton8 . ' btn-sm col-sm-9">' . $mensajebtn8 . '</button></td>              
                      <tr>
                      <td><button type="button" id="p9' . $valor->folio . '" ' . $habilitarboton9 . ' onclick="c6p9(' . $valor->folio . ')" class="btn btn-' . $claseboton9 . ' btn-sm col-sm-9">' . $mensajebtn9 . '</button></td>            
                      <td><button type="button" id="p9m18' . $valor->folio . '" ' . $habilitarboton9m18 . ' onclick="c6p9m18(' . $valor->folio . ')" class="btn btn-' . $claseboton9m18 . ' btn-sm col-sm-9">' . $mensajebtn9m18 . '</button></td>                
                      <td><button type="button" id="p10' . $valor->folio . '" ' . $habilitarboton10 . ' onclick="c6p10(' . $valor->folio . ')" class="btn btn-' . $claseboton10 . ' btn-sm col-sm-9">' . $mensajebtn10 . '</button></td>
                      <td><button type="button" id="p11' . $valor->folio . '" ' . $habilitarboton11 . ' onclick="c6p11a(' . $valor->folio . ')" class="btn btn-' . $claseboton11 . ' btn-sm col-sm-9">' . $mensajebtn11 . '</button></td>
                      <td><button type="button" id="p12' . $valor->folio . '" ' . $habilitarboton12 . ' onclick="c6p12(' . $valor->folio . ')" class="btn btn-' . $claseboton12 . ' btn-sm col-sm-9">' . $mensajebtn12 . '</button></td>
                      <td><button type="button" id="p13' . $valor->folio . '" ' . $habilitarboton13 . ' onclick="c6p13(' . $valor->folio . ')" class="btn btn-' . $claseboton13 . ' btn-sm col-sm-9">' . $mensajebtn13 . '</button></td>
                      <td><button type="button" id="p14' . $valor->folio . '" ' . $habilitarboton14 . ' onclick="c6p14(' . $valor->folio . ')" class="btn btn-' . $claseboton14 . ' btn-sm col-sm-9">' . $mensajebtn14 . '</button></td>
                      <td><button type="button" id="p15' . $valor->folio . '" ' . $habilitarboton15 . ' onclick="c6p15(' . $valor->folio . ')" class="btn btn-' . $claseboton15 . ' btn-sm col-sm-9">' . $mensajebtn15 . '</button></td>
                      </tr>
                      <tr>
                      <td><button type="button" id="p16' . $valor->folio . '" ' . $habilitarboton16 . ' onclick="c6p16(' . $valor->folio . ')" class="btn btn-' . $claseboton16 . ' btn-sm col-sm-9">' . $mensajebtn16 . '</button></td>
                      <td><button type="button" id="p17' . $valor->folio . '" ' . $habilitarboton17 . ' onclick="c6p17(' . $valor->folio . ')" class="btn btn-' . $claseboton17 . ' btn-sm col-sm-9">' . $mensajebtn17 . '</button></td>
                      <td><button type="button" id="p18' . $valor->folio . '" ' . $habilitarboton18 . ' onclick="c6p18(' . $valor->folio . ')" class="btn btn-' . $claseboton18 . ' btn-sm col-sm-9">' . $mensajebtn18 . '</button></td>        
                      <td><button type="button" id="p18a' . $valor->folio . '" ' . $habilitarboton18a . ' onclick="c6p18a(' . $valor->folio . ')" class="btn btn-' . $claseboton18a . ' btn-sm col-sm-9">' . $mensajebtn18a . '</button></td>            
                      <td><button type="button" id="p19' . $valor->folio . '" ' . $habilitarboton19 . ' onclick="c6p19(' . $valor->folio . ')" class="btn btn-' . $claseboton19 . ' btn-sm col-sm-9">' . $mensajebtn19 . '</button></td>            
                      </tr>
                      </tr>';
        }
//fin traer una lista de valores cap 6
//traer una lista de valores cap 11
        $listartabla = $this->m_capituloshogar->fm_listartablacap11($folio);
        $c11 = '';
        $datos11 = '';
        $cap11 = '';
        foreach ($listartabla as $valor) {
            $cap11 = $valor->c11p11ao1;

            if ($cap1 <> '' && $cap2 <> '' && $cap3 <> '' && $cap6 <> '' && $valor->c11p1o1 == '') {
                $estado1 = '97';
            } else {
                $estado1 = $valor->c11p1o1;
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

            if ($valor->c11p1o1 <> '' && $valor->c11p2o1 == '') {
                $estado2 = '97';
            } else {
                $estado2 = $valor->c11p2o1;
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

            if ($valor->c11p1o1 <> '' && $valor->c11p2o1 <> '' && $valor->c11p3o1 == '') {
                $estado2a = '97';
            } else {
                $estado2a = $valor->c11p3o1;
            }
            switch ($estado2a) {

                case '98': //Para salto
                    $claseboton2a = '';
                    $habilitarboton2a = 'disabled="disabled"';
                    $mensajebtn2a = 'P3-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton2a = 'warning';
                    $habilitarboton2a = '';
                    $mensajebtn2a = 'P3-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton2a = 'danger';
                    $habilitarboton2a = 'disabled="disabled"';
                    $mensajebtn2a = 'P3-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton2a = 'success';
                    $habilitarboton2a = '';
                    $mensajebtn2a = 'P3-Realizado';
            }

            if ($valor->c11p1o1 <> '' && $valor->c11p2o1 <> '' && $valor->c11p3o1 <> '' && $valor->c11p4o1 == '') {
                $estado2b = '97';
            } else {
                $estado2b = $valor->c11p4o1;
            }
            switch ($estado2b) {

                case '98': //Para salto
                    $claseboton2b = '';
                    $habilitarboton2b = 'disabled="disabled"';
                    $mensajebtn2b = 'P4-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton2b = 'warning';
                    $habilitarboton2b = '';
                    $mensajebtn2b = 'P4-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton2b = 'danger';
                    $habilitarboton2b = 'disabled="disabled"';
                    $mensajebtn2b = 'P4-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton2b = 'success';
                    $habilitarboton2b = '';
                    $mensajebtn2b = 'P4-Realizado';
            }

            if ($valor->c11p1o1 <> '' && $valor->c11p2o1 <> '' && $valor->c11p3o1 <> '' && $valor->c11p4o1 <> '' && $valor->c11p5o1 == '') {
                $estado3 = '97';
            } else {
                $estado3 = $valor->c11p5o1;
            }
            switch ($estado3) {

                case '98': //Para salto
                    $claseboton3 = '';
                    $habilitarboton3 = 'disabled="disabled"';
                    $mensajebtn3 = 'P5-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton3 = 'warning';
                    $habilitarboton3 = '';
                    $mensajebtn3 = 'P5-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton3 = 'danger';
                    $habilitarboton3 = 'disabled="disabled"';
                    $mensajebtn3 = 'P5-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton3 = 'success';
                    $habilitarboton3 = '';
                    $mensajebtn3 = 'P5-Realizado';
            }

            if ($valor->c11p1o1 <> '' && $valor->c11p2o1 <> '' && $valor->c11p3o1 <> '' && $valor->c11p4o1 <> '' && $valor->c11p5o1 <> '' && $valor->c11p6o1 == '') {
                $estado3a = '97';
            } else {
                $estado3a = $valor->c11p6o1;
            }
            switch ($estado3a) {

                case '98': //Para salto
                    $claseboton3a = '';
                    $habilitarboton3a = 'disabled="disabled"';
                    $mensajebtn3a = 'P6-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton3a = 'warning';
                    $habilitarboton3a = '';
                    $mensajebtn3a = 'P6-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton3a = 'danger';
                    $habilitarboton3a = 'disabled="disabled"';
                    $mensajebtn3a = 'P6-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton3a = 'success';
                    $habilitarboton3a = '';
                    $mensajebtn3a = 'P6-Realizado';
            }

            if ($valor->c11p1o1 <> '' && $valor->c11p2o1 <> '' && $valor->c11p3o1 <> '' && $valor->c11p4o1 <> '' && $valor->c11p5o1 <> '' && $valor->c11p6o1 <> '' && $valor->c11p7o1 == '') {
                $estado4 = '97';
            } else {
                $estado4 = $valor->c11p7o1;
            }
            switch ($estado4) {

                case '98': //Para salto
                    $claseboton4 = '';
                    $habilitarboton4 = 'disabled="disabled"';
                    $mensajebtn4 = 'P7-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton4 = 'warning';
                    $habilitarboton4 = '';
                    $mensajebtn4 = 'P7-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton4 = 'danger';
                    $habilitarboton4 = 'disabled="disabled"';
                    $mensajebtn4 = 'P7-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton4 = 'success';
                    $habilitarboton4 = '';
                    $mensajebtn4 = 'P7-Realizado';
            }

            if ($valor->c11p1o1 <> '' && $valor->c11p2o1 <> '' && $valor->c11p3o1 <> '' && $valor->c11p4o1 <> '' && $valor->c11p5o1 <> '' && $valor->c11p6o1 <> '' && $valor->c11p7o1 <> '' && $valor->c11p8o1 == '') {
                $estado4a = '97';
            } else {
                $estado4a = $valor->c11p8o1;
            }
            switch ($estado4a) {

                case '98': //Para salto
                    $claseboton4a = '';
                    $habilitarboton4a = 'disabled="disabled"';
                    $mensajebtn4a = 'P8-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton4a = 'warning';
                    $habilitarboton4a = '';
                    $mensajebtn4a = 'P8-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton4a = 'danger';
                    $habilitarboton4a = 'disabled="disabled"';
                    $mensajebtn4a = 'P8-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton4a = 'success';
                    $habilitarboton4a = '';
                    $mensajebtn4a = 'P8-Realizado';
            }

            if ($valor->c11p1o1 <> '' && $valor->c11p2o1 <> '' && $valor->c11p3o1 <> '' && $valor->c11p4o1 <> '' && $valor->c11p5o1 <> '' && $valor->c11p6o1 <> '' && $valor->c11p7o1 <> '' && $valor->c11p8o1 <> '' && $valor->c11p9o1 == '') {
                $estado5 = '97';
            } else {
                $estado5 = $valor->c11p9o1;
            }
            switch ($estado5) {

                case '98': //Para salto
                    $claseboton5 = '';
                    $habilitarboton5 = 'disabled="disabled"';
                    $mensajebtn5 = 'P9-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton5 = 'warning';
                    $habilitarboton5 = '';
                    $mensajebtn5 = 'P9-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton5 = 'danger';
                    $habilitarboton5 = 'disabled="disabled"';
                    $mensajebtn5 = 'P9-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton5 = 'success';
                    $habilitarboton5 = '';
                    $mensajebtn5 = 'P9-Realizado';
            }

            if ($valor->c11p1o1 <> '' && $valor->c11p2o1 <> '' && $valor->c11p3o1 <> '' && $valor->c11p4o1 <> '' && $valor->c11p5o1 <> '' && $valor->c11p6o1 <> '' && $valor->c11p7o1 <> '' && $valor->c11p8o1 <> '' && $valor->c11p9o1 <> '' && $valor->c11p10 == '') {
                $estado5a = '97';
            } else {
                $estado5a = $valor->c11p10;
            }
            switch ($estado5a) {

                case '98': //Para salto
                    $claseboton5a = '';
                    $habilitarboton5a = 'disabled="disabled"';
                    $mensajebtn5a = 'P10-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton5a = 'warning';
                    $habilitarboton5a = '';
                    $mensajebtn5a = 'P10-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton5a = 'danger';
                    $habilitarboton5a = 'disabled="disabled"';
                    $mensajebtn5a = 'P10-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton5a = 'success';
                    $habilitarboton5a = '';
                    $mensajebtn5a = 'P10-Realizado';
            }

            if ($valor->c11p1o1 <> '' && $valor->c11p2o1 <> '' && $valor->c11p3o1 <> '' && $valor->c11p4o1 <> '' && $valor->c11p5o1 <> '' && $valor->c11p6o1 <> '' && $valor->c11p7o1 <> '' && $valor->c11p8o1 <> '' && $valor->c11p9o1 <> '' && $valor->c11p11o1 == '') {
                $estado6 = '97';
            } else {
                $estado6 = $valor->c11p11o1;
            }
            switch ($estado6) {

                case '98': //Para salto
                    $claseboton6 = '';
                    $habilitarboton6 = 'disabled="disabled"';
                    $mensajebtn6 = 'P11-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton6 = 'warning';
                    $habilitarboton6 = '';
                    $mensajebtn6 = 'P11-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton6 = 'danger';
                    $habilitarboton6 = 'disabled="disabled"';
                    $mensajebtn6 = 'P11-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton6 = 'success';
                    $habilitarboton6 = '';
                    $mensajebtn6 = 'P11-Realizado';
            }

            if ($valor->c11p1o1 <> '' && $valor->c11p2o1 <> '' && $valor->c11p3o1 <> '' && $valor->c11p4o1 <> '' && $valor->c11p5o1 <> '' && $valor->c11p6o1 <> '' && $valor->c11p7o1 <> '' && $valor->c11p8o1 <> '' && $valor->c11p9o1 <> '' && $valor->c11p11o1 <> '' && $valor->c11p11ao1 == '') {
                $estado7 = '97';
               
            } else {
                $estado7 = $valor->c11p11ao1;
            }

            switch ($estado7) {

                case '98': //Para salto
                    $claseboton7 = '';
                    $habilitarboton7 = 'disabled="disabled"';
                    $mensajebtn7 = 'P11a-No Aplica';
                    break;
                case '97'://actual
                    ++$a;
                    $claseboton7 = 'warning';
                    $habilitarboton7 = '';
                    $mensajebtn7 = 'P11a-Actual';
                    break;
                case ''://por realizar o pendiente
                    ++$a;
                    $claseboton7 = 'danger';
                    $habilitarboton7 = 'disabled="disabled"';
                    $mensajebtn7 = 'P11a-Pendiente';
                    break;
                default:
                    //esta listo
                    $claseboton7 = 'success';
                    $habilitarboton7 = '';
                    $mensajebtn7 = 'P11a-Realizado';
            }
            $estado15fin = $a;

            $c11 = $valor->c11p1o1 <> '' && $valor->c11p2o1 <> '' && $valor->c11p3o1 <> '' && $valor->c11p4o1 <> '' && $valor->c11p5o1 <> '' && $valor->c11p6o1 <> '' && $valor->c11p7o1 <> '' && $valor->c11p8o1 <> '' && $valor->c11p9o1 <> '' && $valor->c11p11o1 <> '' && $valor->c11p11ao1 <> '';
            $datos11 .= '<tr>'
                    . '<td><button type="button" id="p1' . $valor->folio . '" ' . $habilitarboton1 . ' onclick="c11p1(' . $valor->folio . ')" class="btn btn-' . $claseboton1 . ' btn-sm col-sm-9">' . $mensajebtn1 . '</button></td>
                      <td><button type="button" id="p2' . $valor->folio . '" ' . $habilitarboton2 . ' onclick="c11p2(' . $valor->folio . ')" class="btn btn-' . $claseboton2 . ' btn-sm col-sm-9">' . $mensajebtn2 . '</button></td>
                      <td><button type="button" id="p3' . $valor->folio . '" ' . $habilitarboton2a . ' onclick="c11p3(' . $valor->folio . ')" class="btn btn-' . $claseboton2a . ' btn-sm col-sm-9">' . $mensajebtn2a . '</button></td>
                      <td><button type="button" id="p4' . $valor->folio . '" ' . $habilitarboton2b . ' onclick="c11p4(' . $valor->folio . ')" class="btn btn-' . $claseboton2b . ' btn-sm col-sm-9">' . $mensajebtn2b . '</button></td>
                      <td><button type="button" id="p5' . $valor->folio . '" ' . $habilitarboton3 . ' onclick="c11p5(' . $valor->folio . ')" class="btn btn-' . $claseboton3 . ' btn-sm col-sm-9">' . $mensajebtn3 . '</button></td>
                      <td><button type="button" id="p6' . $valor->folio . '" ' . $habilitarboton3a . ' onclick="c11p6(' . $valor->folio . ')" class="btn btn-' . $claseboton3a . ' btn-sm col-sm-9">' . $mensajebtn3a . '</button></td>
                      <td><button type="button" id="p7' . $valor->folio . '" ' . $habilitarboton4 . ' onclick="c11p7(' . $valor->folio . ')" class="btn btn-' . $claseboton4 . ' btn-sm col-sm-9">' . $mensajebtn4 . '</button></td>        
                      <td><button type="button" id="p8' . $valor->folio . '" ' . $habilitarboton4a . ' onclick="c11p8(' . $valor->folio . ')" class="btn btn-' . $claseboton4a . ' btn-sm col-sm-9">' . $mensajebtn4a . '</button></td>              
                      <tr>
                      <td><button type="button" id="p9' . $valor->folio . '" ' . $habilitarboton5 . ' onclick="c11p9(' . $valor->folio . ')" class="btn btn-' . $claseboton5 . ' btn-sm col-sm-9">' . $mensajebtn5 . '</button></td>            
                      <td><button type="button" id="p10' . $valor->folio . '" ' . $habilitarboton5a . ' onclick="c11p10(' . $valor->folio . ')" class="btn btn-' . $claseboton5a . ' btn-sm col-sm-9">' . $mensajebtn5a . '</button></td>
                      <td><button type="button" id="p11' . $valor->folio . '" ' . $habilitarboton6 . ' onclick="c11p11(' . $valor->folio . ')" class="btn btn-' . $claseboton6 . ' btn-sm col-sm-9">' . $mensajebtn6 . '</button></td>
                      <td><button type="button" id="p11a' . $valor->folio . '" ' . $habilitarboton7 . ' onclick="c11p11a(' . $valor->folio . ')" class="btn btn-' . $claseboton7 . ' btn-sm col-sm-9">' . $mensajebtn7 . '</button></td>
                      
                                        
                      </tr>';
        }
//fin traer una lista de valores cap 11
        //ESTO LEVANTA LA VISTA     
        $titulo = 'v_capituloshogar'; // para el titulo de la vista en la pestaña
        $this->load->view('pages/' . $page, array('titulo' => $titulo, 'foot' => FOOTS, 'head1' => HEAD1, 'botonerag' => BOTONERAG, 'botoneraa' => BOTONERAA, 'datos1' => $datos1, 'datos2' => $datos2, 'datos3' => $datos3, 'datos6' => $datos6, 'datos11' => $datos11, 'cap11' => $cap11,
            'folio' => $folio, 'tdatinte' => $tdatinte, 'estado15fin' => $estado15fin, 'cap1' => $cap1, 'cap2' => $cap2, 'cap3' => $cap3, 'cap6' => $cap6, 'cap11' => $cap11, 'c2' => $c2, 'c3' => $c3, 'c6' => $c6, 'c11' => $c11));
        //FIN LEVANTA LA VISTA
    }

    public function fc_cerrarform() {
        $cfolio = $this->input->get('vfolio');
        $cidpaso = $this->input->get('vidpaso');
        $cestado = $this->input->get('vestado');
        $this->m_capituloshogar->fm_cerrarform($cfolio, $cidpaso, $cestado);
    }

    public function fc_llenarcapitulosintegrante() {
        $cfolio = $this->input->get('vfolio');
        $cidintegrante = $this->input->get('vidintegrante');
        $this->m_capituloshogar->fm_llenarcapitulosintegrante($cfolio, $cidintegrante);
        //echo json_encode(array('result' => 'guardado'));
    }

}
