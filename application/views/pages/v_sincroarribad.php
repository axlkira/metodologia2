<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Sicroarriba</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="es"/>
        <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/ds-digital">
    </head>
    <body>  
<style>

<style>
    div,
span {
  box-sizing: border-box;
}
.amg-container {
  with: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.amg-progress-bar {
  display: flex;
  padding: 20px;
}
.amg-step {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  position: relative;
  min-width: 120px;
  color: #999;
}
.amg-step_marker {
  margin: 10px;
  width: 50px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #ddd;
  border-radius: 50%;
}
.amg-step_marker_content {
  width: 42px;
  height: 42px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  pointer-events: none;
}
.amg-step_marker_icon {
  display: none;
  width: 25px;
  height: 25px;
}
.amg-step_wing {
  width: calc(100% - 50px + 8px);
  height: 12px;
  position: absolute;
  left: calc(50% - 4px + 50px / 2);
  bottom: 29px;
  border-top: 4px solid #ddd;
  border-bottom: 4px solid #ddd;
  background-color: #ddd;
  z-index: 1;
}
.amg-step:last-child .amg-step_wing {
  display: none;
}
.amg-step.\-active
{
  color: #ff8d00;
}
.amg-step.\-active .amg-step_marker:hover {
  box-shadow: 0 0 8px 1px #ff8d00;
}
.amg-step.\-active .amg-step_marker_content {
  background-color: #ff8d00;
  color: #fff;
}
.amg-step.\-active .amg-step_wing {
  background: linear-gradient(to right, #ff8d00, #ddd);
}
.amg-step.\--complete .amg-step_marker {
  cursor: pointer;
}
.amg-step.\--error .amg-step_marker { 
  cursor: pointer;
}
.amg-step.\--complete .amg-step_marker:hover {
  box-shadow: 0 0 8px 1px #39d084;
}

.amg-step.\--error .amg-step_marker:hover { 
  box-shadow: 0 0 8px 1px #F62930;
}
.amg-step.\--error .amg-step_marker_content {
  background-color: #F62930;
  color: #fff;
}

.amg-step.\--complete .amg-step_marker_content {
  background-color: #39d084;
  color: #fff;
}

.amg-step.\--error .amg-step_marker_content {
  background-color: #F62930;
  color: #fff;
}
.amg-step.\--complete .amg-step_marker_number {
  display: none;
}

.amg-step.\--error .amg-step_marker_number {
  display: none;
}
.amg-step.\--complete .amg-step_marker_icon {
  display: block;
}
.amg-step.\--error .amg-step_marker_icon {
  display: block;
}

.amg-step.\--complete .amg-step_wing {
  background-color: #39d084;
}

.amg-step.\--error .amg-step_wing {
  background-color: #F62930;
}
.amg-step.\--previous .amg-step_wing {
  background: linear-gradient(to right, #39d084, #ff8d00);
}




@keyframes popUpEntrada {
  0% {
    opacity: 0;
    margin-top: -20%;
  }
  75% {
    margin-top: 5%;
  }
  100% {
    opacity: 1;
  }
}

/*@-webkit-keyframes popUpSaida {
  0% {
    opacity: 1;
  }
  75% {
    opacity: 1;
    margin-top: -20%;
  }
  100% {
    opacity: 0;
    margin-top: 40%;
  }
}*/

/*@keyframes popUpSaida {
  0% {
    opacity: 1;
  }
  75% {
    opacity: 1;
    margin-top: -20%;
  }
  100% {
    opacity: 0;
    margin-top: 40%;
  }
}*/

/*body,
html,
root,
document {
  display: block height 500px;
}*/

.popUpFundo {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  background-color: #4879c3;
  opacity: 0.8;
  z-index: 50;
}

.popUp {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  border-radius:20px;
  display: none;
  position: absolute; 
  top: 50% !important;
  left: 50% !important;
  font-size: 12px;
  font-family: 'PT Sans', sans-serif;
  color: #fff;
  border-style: none;
  z-index: 999;
  overflow: hidden;
 
}

/*.popUp button:focus {
  outline-style: none;
}*/

.popUp>h1 {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  margin: 0;
  padding: 5px;
  min-height: 40px;
  font-size: 1.2em;
  font-weight: bold;
  text-align: center;
  color: #fff;
  background-color: transparent;
  border-style: none;
  border-width: 5px;
  border-color: black;
}

/*.vermelha>h1 {
  border-color: #fa5032;
}*/

/*.verde>h1 {
  border-color: #42ad4f;
}*/

/*.azul>h1 {
  border-color: #659cff;
}*/

.popUp>div {
  display: block;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  width: 100%;
  padding: 5%;
  text-align: center;
  vertical-align: middle;
  border-width: 1px;
  border-color: #ccc;
  border-style: none none solid none;
  overflow: auto;
}

.popUp>div>span {
  display: table-cell;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  margin: 0;
  padding: 0;
  vertical-align: middle;
}

.popUp>button {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  margin: 0;
  padding: 10px;
  width: 50%;
  border: 1px none #ccc;
  color: #fff;
  font-family: inherit;
  cursor: pointer;
}

.alert {
  width: 100% !important;
}

.popUp .puCancelar {
  float: left;
}

.popUp .puEnviar {
  float: right;
}

/*.p {
  margin: 0;
  width: 100%;
  max-width: 300px;
  height: 100%;
  max-height: 200px;
  transform: translate(-50%, -50%);
}*/

/*.p>div {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  width: 100%;
  height: calc(100% -108px);
  margin: 0;
  padding: 0;
  border-style: none;
}*/

.p>div>div,
.p span {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  width: 300px;
  height: 108px;
  margin: 0;
  padding: 0;
  border-style: none;
}

.p>button {
  height: 50px;
}

.puEnviar {
  margin: 5px 0;
}

.puCancelar {
  margin: 5px 0;
}

.m {
  margin: 0;
  width: 100%;
  max-width: 400px;
  height: 100%;
  max-height: 300px;
  transform: translate(-50%, -50%);
}

.m>div {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  width: 100%;
  height: calc(100% -108px);
  margin: 0;
  padding: 0;
  border-style: none;
  border-color: #ccc;
}

.m>div>div,
.m>span,
.m>div>span {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  width: 400px;
  height: 208px;
  margin: 0;
  padding: 0;
  border-style: none;
}

.m>button {
  height: 50px;
}

.g {
  margin: 0;
  width: 100%;
  max-width: 600px;
  height: 100%;
  max-height: 500px;
  transform: translate(-50%, -50%);
}

.g>div {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  width: 100%;
  height: calc(100% -108px);
  margin: 0;
  padding: 0;
  border-style: none;
  border-color: #ccc;
}

.g>div>div,
.g span {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  width: 600px;
  height: 408px;
  margin: 0;
  padding: 0;
  border-style: none;
}

.g>button {
  height: 60px;
}

.alert.puEnviar {
  display: none;
}

.popUpEntrada {
  display: block !important;
  animation: popUpEntrada 0.5s;
  -webkit-animation: popUpEntrada 0.5s;
}

.popUpSaida {
  display: block !important;
  animation: popUpSaida 0.5s;
  -webkit-animation: popUpSaida 0.5s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}

.blue {
  background-color: #51b2d6;
}

.blue>button {
  background-color: #38a7d0;
}

.blue>button:hover {
  background-color: #72c1de;
}

.popUpFundo.blue {
  background-color: #134152;
}

.green {
  background-color: #0dcaf0;
}

.green>button {
  background-color: #0dcaf0;
}

.green>button:hover {
  background-color: #0d6efd;
}

.popUpFundo.green {
  background-color: rgba(13, 202, 240, 0.4);
}

.red {
  background-color: #d55c4b;
}

.red>button {
  background-color: #d04b38;
}

.red>button:hover {
  background-color: #d86959;
}

.popUpFundo.red {
  background-color: rgba(74, 24, 17, 0.4);
}

.orange {
  background-color: #f9a025;
}

.orange>button {
  background-color: #f89710;
}

.orange>button:hover {
  background-color: #f9ac42;
}

.popUpFundo.orange {
  background-color: #8c5b02;
}

.purple {
  background-color: #ab4bd5;
}

.purple>button {
  background-color: #a238d0;
}

.purple>button:hover {
  background-color: #b159d8;
}

.popUpFundo.purple {
  background-color: #3f114a;
}

.white {
  background-color: #fff;
  color: #555;
}

.white>h1 {
  color: #000;
}

.white>button {
  background-color: #f3f3f3;
  color: #555;
}

.white>button:hover {
  background-color: #e3e3e3;
}

.popUpFundo.white {
  background-color: #555;
}


/*
That part is just for the form
*/

.colorfulForm {
  width: 350px;
  margin: 60px auto;
}

.colorfulForm input,
.colorfulForm textarea,
.colorfulForm select {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  width: 350px;
  padding: 5px;
  background-color: #f3f3f3;
  border: 1px solid #ccc;
  border-radius: 2px;
}

.colorfulForm label {
  display: block;
  font-family: Verdana, Arial;
  margin: 10px 0 5px 0;
}

.colorfulForm button {
  width: 100px;
  margin: 3px 7px;
  padding: 5px;
  color: #fff;
  border-style: none;
}
    
</style>
<section class="colorfulForm">
    
</section>
<!-- 
<div class="container" style="padding-top:350px">
<label for="" id="progreso">Progreso:</label>
<div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="500">
  <div id="barra" class="progress-bar progress-bar-striped progress-bar-animated" style="width:0%"></div>
</div>
</div> -->

<div class="container" style="padding-top:350px">
<label for="" id="progreso">Progreso:</label>
<!-- <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="500">
  <div id="barra" class="progress-bar progress-bar-striped progress-bar-animated" style="width:0%"></div>
</div> -->
<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div id="barra" class="progress-bar progress-bar-striped progress-bar-animated" style="width: 0%">0%</div>
</div>
</div>
<hr>
<div class="container text-center">
<h1 style="color:blue;font-family: 'DS-Digital', sans-serif;"> <span id="horas">00</span>:<span id="minutos">00</span>:<span id="segundos">00</span></h1>
</div>

<div class="amg-container" style='display:none'>
    <div class="amg-progress-bar">
        <div class="amg-step -active" style="left: -30px">
            <span class="amg-step_title">Formulario</span>
            <div class="amg-step_marker">
                <div class="amg-step_marker_content">
                    <div class="amg-step_marker_number">1</div>
                    <div class="amg-step_marker_icon">
                        <svg viewBox="0 0 1792 1792"><path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z" fill="#fff"/></svg>
                    </div>
                </div>
            </div>
            <div class="amg-step_wing"></div>
        </div>

        <div class="amg-step" style="left: -30px">
            <span class="amg-step_title">Perfil Productivo</span>
            <div class="amg-step_marker">
                <div class="amg-step_marker_content">
                    <span class="amg-step_marker_number">2</span>
                    <div class="amg-step_marker_icon">
                        <svg viewBox="0 0 1792 1792"><path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z" fill="#fff"/></svg>
                    </div>
                </div>
            </div>
            <div class="amg-step_wing" style="width: 113px"></div>
        </div>
         <div class="amg-step">
            <span class="amg-step_title">Logros y Privaciones</span>
            <div class="amg-step_marker">
                <div class="amg-step_marker_content">
                    <span class="amg-step_marker_number">3</span>
                    <div class="amg-step_marker_icon">
                        <svg viewBox="0 0 1792 1792"><path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z" fill="#fff"/></svg>
                    </div>
                </div>
            </div>
            <div class="amg-step_wing" style="width: 113px"></div>
        </div>

        <div class="amg-step" style="left: 30px">
            <span class="amg-step_title">Otras Tablas</span>
            <div class="amg-step_wing"></div>
            <div class="amg-step_marker">
                <div class="amg-step_marker_content">
                    <span class="amg-step_marker_number">4</span>
                    <div class="amg-step_marker_icon">
                        <svg viewBox="0 0 1792 1792"><path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z" fill="#fff"/></svg>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="amg-step" style="left: 30px">
            <span class="amg-step_title">Reasignacion</span>
            <div class="amg-step_wing"></div>
            <div class="amg-step_marker">
                <div class="amg-step_marker_content">
                    <span class="amg-step_marker_number">5</span>
                    <div class="amg-step_marker_icon">
                        <svg viewBox="0 0 1792 1792"><path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z" fill="#fff"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <script src="<?php echo BOOTSTRAP, 'js/jquery-1.11.0.js' ?>"></script>
    <script src="<?php echo BOOTSTRAP, 'js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo BOOTSTRAP, 'js/jquery.bootstrap.wizard.js' ?>"></script>
    <script src="<?php echo BOOTSTRAP, 'js/prettify.js' ?>"></script>
    <script src="<?php echo JBOX, 'Source/jBox.min.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jsfechas.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jsmensajes.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jsvalidarcampos.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jsvalidarletrasnumeros.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jsbotones.js' ?>"></script>
    <script src="<?php echo JSPERFIL, 'jscargardatos.js' ?>"></script>
    <link href="<?php echo JBOX, 'Source/jBox.css' ?>" rel="stylesheet">

<script>
    
    var sincroavanza = 0;
    var sincroarriba = 0;
    var sincroabajo = 0;
var janelaPopUp = new Object();
janelaPopUp.abre = function(id, classes, titulo, corpo) {
  var cancelar = 'Aceptar';
  var enviar = 'Volver a intentar';
  classes += ' ';
  var classArray = classes.split(' ');
  classes = '';
  classesFundo = '';
  var classBot = '';
  
    if (id !== 'err'){
            classBot += ' alert ';   
    }
  
  $.each(classArray, function(index, value) {
   
        switch (value) {
//      case 'alert':
//        classBot += ' alert ';
//        break;
      case 'blue':
        classesFundo += this + ' ';
      case 'green':
        classesFundo += this + ' ';
      case 'red':
        classesFundo += this + ' ';
//      case 'white':
//        classesFundo += this + ' ';
//      case 'orange':
//        classesFundo += this + ' ';
//      case 'purple':
//        classesFundo += this + ' ';
      default:
        classes += this + ' ';
        break;
    }
  }); 
  var popFundo = '<div id="popFundo_' + id + '" class="popUpFundo ' + classesFundo + '"></div>'
  var janela = '<div name="' + id + '" id="' + id + '" class="popUp ' + classes + '"><h1>' + titulo + "</h1><div><span>" + corpo + "</span></div><button class='puCancelar " + classBot + "' id='" + id + "aceptar' data-parent=" + id + ">" + cancelar + "</button><button class='puEnviar " + classBot + "' data-parent=" + id + " id='" + id + "volvera'>" + enviar + "</button></div>";
  $("window, body").css('overflow', 'hidden');

  $("body").append(popFundo);
  $("body").append(janela);
 // $("body").append(popFundo);
  //alert(janela);
  $("#popFundo_" + id).fadeIn("fast");
  $("#" + id).addClass("popUpEntrada");

  $("#" + id + 'aceptar').on("click", function() {
   
      location.href = "../c_busquedahistorico/fc_busqueda";

   
  });
  $("#" + id + 'volvera').on("click", function() {
    $('#err').remove();
    $('#popFundo_err').remove();
    
    if(sincroavanza == 0 && sincroarriba == 0){
      location.reload();
    }
    if(sincroavanza == 0 && sincroarriba == 1){
      cap11();
    }
    if(sincroavanza == 0 && sincroarriba == 2){
      cap7i();
    }
    if(sincroavanza == 0 && sincroarriba == 3){
      cap11i();
    }
    if(sincroavanza == 1 && sincroarriba == 4){
       pph();
    }
    if(sincroavanza == 1 && sincroarriba == 5){
       ppcap3();
    }
    if(sincroavanza == 1 && sincroarriba == 6){
       ppoes();
    }
    if(sincroavanza == 2 && sincroarriba == 7){
       logro1();
    }
    if(sincroavanza == 2 && sincroarriba == 8){
       logro3();
    }
    if(sincroavanza == 2 && sincroarriba == 9){
       logro6();
    }
    if(sincroavanza == 2 && sincroarriba == 10){
       logro9();
    }
    if(sincroavanza == 2 && sincroarriba == 11){
       logro12();
    }
    if(sincroavanza == 2 && sincroarriba == 12){
       logro15();
    }
    if(sincroavanza == 2 && sincroarriba == 13){
       logro18();
    }
    if(sincroavanza == 2 && sincroarriba == 14){
       logro21();
    }
    if(sincroavanza == 2 && sincroarriba == 15){
       logro24();
    }
    if(sincroavanza == 2 && sincroarriba == 16){
       logro27();
    }
    if(sincroavanza == 2 && sincroarriba == 17){
       logro30();
    }
    if(sincroavanza == 2 && sincroarriba == 18){
       logro33();
    }
    if(sincroavanza == 2 && sincroarriba == 19){
       logro36();
    }
    if(sincroavanza == 2 && sincroarriba == 20){
       logro39();
    }
    if(sincroavanza == 2 && sincroarriba == 21){
       hmovlog();
    }
    if(sincroavanza == 2 && sincroarriba == 22){
       movlog24();
    }
    if(sincroavanza == 2 && sincroarriba == 23){
       movlog39();
    }
    if(sincroavanza == 2 && sincroarriba == 24){
       logroblanco();
    }
    if(sincroavanza == 2 && sincroarriba == 25){
       logmovrec13();
    }
    if(sincroavanza == 2 && sincroarriba == 26){
       logmovrec23();
    }
    if(sincroavanza == 2 && sincroarriba == 27){
       logmovrec7();
    }
    if(sincroavanza == 2 && sincroarriba == 28){
       privacion1();
    }
    if(sincroavanza == 2 && sincroarriba == 29){
       privacion4();
    }
    if(sincroavanza == 2 && sincroarriba == 30){
       privacion7();
    }
    if(sincroavanza == 2 && sincroarriba == 31){
       privacion10();
    }
    if(sincroavanza == 2 && sincroarriba == 32){
       privacion13();
    }
    if(sincroavanza == 2 && sincroarriba == 33){
       privacion16();
    }
    if(sincroavanza == 3 && sincroarriba == 34){
       pasos();
    }
    if(sincroavanza == 3 && sincroarriba == 35){
       estacionh();
    }
    if(sincroavanza == 3 && sincroarriba == 36){
       logrosfolios();
    }
    if(sincroavanza == 3 && sincroarriba == 37){
       historicoactivacioni();
    }
    if(sincroavanza == 3 && sincroarriba == 38){
       hfcostumbres();
    }
    if(sincroavanza == 3 && sincroarriba == 39){
       facttfcual1();
    }
    if(sincroavanza == 3 && sincroarriba == 40){
       factifcual1();
    }
    if(sincroavanza == 3 && sincroarriba == 41){
       crisisscual1();
    }
    if(sincroavanza == 3 && sincroarriba == 42){
       crearmetas();
    }
    if(sincroavanza == 3 && sincroarriba == 43){
       avanceproceso();
    }
    if(sincroavanza == 3 && sincroarriba == 44){
       casoexitoso();
    }
    if(sincroavanza == 3 && sincroarriba == 45){
       protocoloinicioestacion();
    }
    if(sincroavanza == 3 && sincroarriba == 46){
       privacionesintermedia1();
    }
    if(sincroavanza == 3 && sincroarriba == 47){
       privacionesintermedia4();
    }
    if(sincroavanza == 3 && sincroarriba == 48){
       privacionesintermedia7();
    }
    if(sincroavanza == 3 && sincroarriba == 49){
       privacionesintermedia10();
    }
    if(sincroavanza == 3 && sincroarriba == 50){
       privacionesintermedia14();
    }
    if(sincroavanza == 3 && sincroarriba == 51){
       privacionesintermediaipm();
    }
    if(sincroavanza == 3 && sincroarriba == 52){
       tablasintermediasubidac6();
    }
    if(sincroavanza == 3 && sincroarriba == 53){
       tablasintermediasubidac9();
    }
    if(sincroavanza == 3 && sincroarriba == 54){
       sincronizarsubidaintermediahistc11();
    }
    if(sincroavanza == 3 && sincroarriba == 55){
       sincronizarsubidaintermediahistc6();
    }
    if(sincroavanza == 3 && sincroarriba == 56){
       sincronizarsubidaintermediahistc9();
    }
    if(sincroavanza == 3 && sincroarriba == 57){
       sp5privacion11intermediaservidor_historico();
    }    
    if(sincroavanza == 3 && sincroarriba == 58){
       sp5privacion15intermediaservidor_historico();
    }
    if(sincroavanza == 3 && sincroarriba == 59){
       sp5privacion3intermediaservidor_historico();
    }
    if(sincroavanza == 3 && sincroarriba == 60){
       sp5privacion6intermediaservidor_historico();
    }
    if(sincroavanza == 3 && sincroarriba == 61){
       sincronizarprotocoloestacionestado_intermedia_historico();
    }
    if(sincroavanza == 3 && sincroarriba == 62){
       finsincro();
    }
    
    
    
    
    
    if(sincroavanza == 4 && sincroabajo == 1){
       reasignacionarriba();
    }
    if(sincroavanza == 4 && sincroabajo == 2){
       sincronizacionabajo();
    }
    if(sincroavanza == 4 && sincroabajo == 3){
       capitulo6d();
    }
    if(sincroavanza == 4 && sincroabajo == 4){
       capitulo5id();
    }
    if(sincroavanza == 4 && sincroabajo == 5){
       capitulo9id();
    }
    if(sincroavanza == 4 && sincroabajo == 6){
       capitulo12id();
    }
    if(sincroavanza == 4 && sincroabajo == 7){
       ppcap2d();
    }
    if(sincroavanza == 4 && sincroabajo == 8){
       ppacademicad();
    }
    if(sincroavanza == 4 && sincroabajo == 9){
       pasosestadod();
    }
    if(sincroavanza == 4 && sincroabajo == 10){
       c1p1ap12d();                           
    }
    if(sincroavanza == 4 && sincroabajo == 11){
       logro3d();                           
    }
    if(sincroavanza == 4 && sincroabajo == 12){
       logro7d();                           
    }
    if(sincroavanza == 4 && sincroabajo == 13){
       logro10d();
    }
    if(sincroavanza == 4 && sincroabajo == 14){
       logro14d();
    }
    if(sincroavanza == 4 && sincroabajo == 15){
       logro18d();
    }
    if(sincroavanza == 4 && sincroabajo == 16){
       logro21d();
    }
    if(sincroavanza == 4 && sincroabajo == 17){
       logro24d();
    }
    if(sincroavanza == 4 && sincroabajo == 18){
       logro27d();
    }
    if(sincroavanza == 4 && sincroabajo == 19){
       logro30d();
    }
    if(sincroavanza == 4 && sincroabajo == 20){
       logro33d();
    }
    if(sincroavanza == 4 && sincroabajo == 21){
       logro36d();
    }
    if(sincroavanza == 4 && sincroabajo == 22){
       logro39d();
    }
    if(sincroavanza == 4 && sincroabajo == 23){
       hmovlogd();
    }
    if(sincroavanza == 4 && sincroabajo == 24){
       movlog24d();
    }
    if(sincroavanza == 4 && sincroabajo == 25){
       movlog39d();
    }
    if(sincroavanza == 4 && sincroabajo == 26){
       ipmd();
    }
    if(sincroavanza == 4 && sincroabajo == 27){
       logmovrec11d();
    }
    if(sincroavanza == 4 && sincroabajo == 28){
       logmovrec22d();
    }
    if(sincroavanza == 4 && sincroabajo == 29){
       logmovrec5d();
    }
    if(sincroavanza == 4 && sincroabajo == 30){
       logmovrec9d();
    }
    if(sincroavanza == 4 && sincroabajo == 31){
       privacion3d();
    }
    if(sincroavanza == 4 && sincroabajo == 32){
       privacion6d();
    }
    if(sincroavanza == 4 && sincroabajo == 33){
       privacion9d();
    }
    if(sincroavanza == 4 && sincroabajo == 34){
       privacion12d();
    }
    if(sincroavanza == 4 && sincroabajo == 35){
       privacion15d();
    }
    if(sincroavanza == 4 && sincroabajo == 36){
       hflogrosd();
    }
    if(sincroavanza == 4 && sincroabajo == 37){
       facttscual1d();
    }
    if(sincroavanza == 4 && sincroabajo == 38){
       factiscual1d();
    }
    if(sincroavanza == 4 && sincroabajo == 39){
       estacioncerocead();
    }
    if(sincroavanza == 4 && sincroabajo == 40){
       crisisecual1d();
    }
    if(sincroavanza == 4 && sincroabajo == 41){
       eerfd();
    }
    if(sincroavanza == 4 && sincroabajo == 42){
       l2accionesd();
    }
    if(sincroavanza == 4 && sincroabajo == 43){
       logromovimientocfd();
    }
    if(sincroavanza == 4 && sincroabajo == 44){
       tablaingresosd();
    }
    if(sincroavanza == 4 && sincroabajo == 45){
       privacionesintermediad3();
    }
    if(sincroavanza == 4 && sincroabajo == 46){
       privacionesintermediad6();
    }
    if(sincroavanza == 4 && sincroabajo == 47){
       privacionesintermediad9();
    }
    if(sincroavanza == 4 && sincroabajo == 48){
       privacionesintermediad12();
    }
    if(sincroavanza == 4 && sincroabajo == 49){
       privacionesintermediad16();
    }
    if(sincroavanza == 4 && sincroabajo == 50){
       tablasintermediabajadac2();
    }
    if(sincroavanza == 4 && sincroabajo == 51){
       tablasintermediabajadac7();
    }
    if(sincroavanza == 4 && sincroabajo == 52){
       sincronizarbajadaintermediahistc11();
    }
    if(sincroavanza == 4 && sincroabajo == 53){
       sincronizarbajadaintermediahistc6();
    }
    if(sincroavanza == 4 && sincroabajo == 54){
       sincronizarbajadaintermediahistc9();
    }
    if(sincroavanza == 4 && sincroabajo == 55){
       privacion11intermediaservidor_historicod11();
    }
    if(sincroavanza == 4 && sincroabajo == 56){
       privacion14intermediaservidor_historicod14();
    }
    if(sincroavanza == 4 && sincroabajo == 57){
       privacion1intermediaservidor_historicod1();
    }
    if(sincroavanza == 4 && sincroabajo == 58){
       privacion4intermediaservidor_historicod4();
    }
    if(sincroavanza == 4 && sincroabajo == 59){
       privacion7intermediaservidor_historicod7();
    }
    if(sincroavanza == 4 && sincroabajo == 60){
       sincronizarprotocoloestacionestado_intermedia_historicod1();
    }
    if(sincroavanza == 4 && sincroabajo == 61){
       sincronizacionhogard();
    }
    if(sincroavanza == 4 && sincroabajo == 62){
       sincronizacionmadresd();
    }
    if(sincroavanza == 4 && sincroabajo == 63){
      principalintegrantes_intermediad();
    }
    if(sincroavanza == 4 && sincroabajo == 64){
       borrarinactivos();
    }
    
    });

};
   
   var $steps = $('.amg-step');
    var i = 0;
    

    function avanza() {
       
        if (i > 0) {
            $($steps[i - 1]).removeClass('--previous');
        }

        $($steps[i]).removeClass('-active')
            .addClass('--complete')
            .addClass('--previous');

        if (i < $steps.length) {
            $($steps[i + 1]).addClass('-active');
        }

        i++;
        sincroavanza++;
    };
  
  


    function erroravanza(tabla) {
       
        if (i > 0) {
          //  $($steps[i - 1]).removeClass('--previous');
        }

      //  $($steps[i]).removeClass('-active')
           // .addClass('--error')
    
    janelaPopUp.abre("err", 'm red', 'Error!!',tabla);
        
    };
    
        function reasignacionabajo(){
           $.ajax({
                          url: "fc_reasignacionabajo",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          sincroabajo = 2;
                          sincroavanza=4;    
                          editar_llbfa();
                          },
                          error:function() {
                              erroravanza('Reasignacion Abajo');
                            }
                        });  
           
        };
		
            function editar_llbfa(){

    //alert("JuanPis2");

    $.ajax({
						url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_editar_llbf/fc_sin_editar_llbf",
						type: "get",
						data: {},
						dataType: "json",
						success: function(obj) {  $('#barra').css('width','0.1%'); $('#barra').html('0.1%');$('#progreso').html('Progreso: 0.1%')     
                          sincroabajo = 2;
                          sincroavanza=4;                                                          
                            sincronizacionabajo();
					    },
						error:function(jqXHR, textStatus, errorThrown) {alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                        //erroravanza('Capitulo edicion lbf');
						}
					});    

}		
        
        function sincronizacionabajo(){
                  $.ajax({
                          url: "fc_sincronizacionabajo",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     $('#barra').css('width','0.5%');                         
                           
                            if(obj === '0'){
                               borrarinactivos();                               
                            }else{
                                 capitulo2d();
                            }
                          },
                          error:function() {
                              erroravanza('Inicia Sincronizacion Abajo');
                            }
                        });  
           
        };
        
        
       
        
        
        function capitulo2d(){
           $.ajax({
                          url: "fc_capitulo2d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','1%');  $('#barra').html('1%');$('#progreso').html('Progreso: 1%')                       
                          capitulo3d();
                          },
                          error:function() {
                              erroravanza('Asignar Capitulo 2');
                            }
                        });
                    
           
        };
        
        function capitulo3d(){
           $.ajax({
                          url: "fc_capitulo3d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','1.5%');                         
                          sincroabajo = 3;                         
                          capitulo6d();
                          },
                          error:function() {
                              erroravanza('Asignar Capitulo 3');
                            }
                        });  
           
        };
        
        function capitulo6d(){
           $.ajax({
                          url: "fc_capitulo6d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','2%');$('#barra').html('2%');$('#progreso').html('Progreso: 2%')                          
                          capitulo11d();
                          },
                          error:function() {
                              erroravanza('Asignar Capitulo 6');
                            }
                        });  
           
        };
        
        function capitulo11d(){
           $.ajax({
                          url: "fc_capitulo11d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){      $('#barra').css('width','2.5%');                       
                          capitulo4id();
                          },
                          error:function() {
                              erroravanza('Asignar Capitulo 11');
                            }
                        });  
           
        };
        
        function capitulo4id(){
           $.ajax({
                          url: "fc_capitulo4id",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','3%'); $('#barra').html('3%');$('#progreso').html('Progreso: 3%')                        
                          sincroabajo = 4;                           
                          capitulo5id();
                          },
                          error:function() {
                              erroravanza('Asignar Capitulo 4');
                            }
                        });  
           
        };
        
        function capitulo5id(){
           $.ajax({
                          url: "fc_capitulo5id",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','3.4%');                         
                          capitulo7id();
                          },
                          error:function() {
                              erroravanza('Asignar Capitulo 5');
                            }
                        });  
           
        };
        
        function capitulo7id(){
           $.ajax({
                          url: "fc_capitulo7id",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){      $('#barra').css('width','3.8%');                       
                          capitulo8id();
                          },
                          error:function() {
                              erroravanza('Asignar Capitulo 7');
                            }
                        });  
           
        };
        
        function capitulo8id(){
           $.ajax({
                          url: "fc_capitulo8id",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','4.2%'); $('#barra').html('4%');$('#progreso').html('Progreso: 4%')                        
                          sincroabajo = 5;                             
                          capitulo9id();
                          },
                          error:function() {
                              erroravanza('Asignar Capitulo 8');
                            }
                        });  
           
        };
        
        function capitulo9id(){
           $.ajax({
                          url: "fc_capitulo9id",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','4.6%');                          
                          capitulo10id();
                          },
                          error:function() {
                              erroravanza('Asignar Capitulo 9');
                            }
                        });  
           
        };
        
        function capitulo10id(){
           $.ajax({
                          url: "fc_capitulo10id",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','5.0%');$('#barra').html('5%');$('#progreso').html('Progreso: 5%')                            
                          capitulo11id();
                          },
                          error:function() {
                              erroravanza('Asignar Capitulo 10');
                            }
                        });  
           
        };
        
        function capitulo11id(){
           $.ajax({
                          url: "fc_capitulo11id",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','5.4%');                           
                          sincroabajo = 6;                               
                          capitulo12id();
                          },
                          error:function() {
                              erroravanza('Asignar Capitulo 11 Integrantes');
                            }
                        });  
           
        };
        
        function capitulo12id(){
           $.ajax({
                          url: "fc_capitulo12id",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','5.8%');                           
                          pphogard();
                          },
                          error:function() {
                              erroravanza('Asignar Capitulo 12');
                            }
                        });  
           
        };
        function pphogard(){
           $.ajax({
                          url: "fc_pphogard",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','6.2%');$('#barra').html('6%');$('#progreso').html('Progreso: 6%')                          
                          ppcap1d();
                          },
                          error:function() {
                              erroravanza('Asignar Perfil Productivo Hogar');
                            }
                        });  
           
        };
        
        function ppcap1d(){
           $.ajax({
                          url: "fc_ppcap1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','6.6%');                         
                          sincroabajo = 7;                                 
                          ppcap2d();
                          },
                          error:function() {
                              erroravanza('Asignar Perfil Productivo Capitulo 1');
                            }
                        });  
           
        };
        
        function ppcap2d(){
           $.ajax({
                          url: "fc_ppcap2d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','7%');$('#barra').html('7%');$('#progreso').html('Progreso: 7%')                          
                          ppcap3d();
                          },
                          error:function() {
                              erroravanza('Asignar Perfil Productivo Capitulo 2');
                            }
                        });  
           
        };
        
        function ppcap3d(){
           $.ajax({
                          url: "fc_ppcap3d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','7.4%');                          
                          ppcap4d();
                          },
                          error:function() {
                              erroravanza('Asignar Perfil Productivo Capitulo 3');
                            }
                        });  
           
        };
        
        function ppcap4d(){
           $.ajax({
                          url: "fc_ppcap4d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','7.8%');                          
                          sincroabajo = 8;                                   
                          ppacademicad();
                          },
                          error:function() {
                              erroravanza('Asignar Perfil Productivo Capitulo 4');
                            }
                        });  
           
        };
        
        function ppacademicad(){
           $.ajax({
                          url: "fc_ppacademicad",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','8.2%');$('#barra').html('8%');$('#progreso').html('Progreso: 8%')                          
                          ppoestudiosd();
                          },
                          error:function() {
                              erroravanza('Asignar Perfil Productivo Formacion Academica');
                            }
                        });  
           
        };
        
        function ppoestudiosd(){
           $.ajax({
                          url: "fc_ppoestudiosd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','8.6%');                    
                          ppexpd();
                          },
                          error:function() {
                              erroravanza('Asignar Perfil Productivo Otros Estudios');
                            }
                        });  
           
        };
        
        function ppexpd(){ // este es
           $.ajax({
                          url: "fc_ppexpd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','9.0%'); $('#barra').html('9%');$('#progreso').html('Progreso: 9%')                  
                          sincroabajo = 9;                                   
                          pasosestadod();
                          },
                          error:function() {
                              erroravanza('Asignar Perfil Productivo Experiencia Laboral');
                            }
                        });  
           
        };
        
        function pasosestadod(){
           $.ajax({
                           url: "fc_pasosestadod",
                           type: "GET",
                           data: {},    
                          dataType: "html",
                          success : function(obj){$('#barra').css('width','9.4%');                       
                            pasosestadod1();
                           },
                           error:function() {
                               erroravanza('Asignar Pasos Estado');
                             }
                         });  
           
        };

        function pasosestadod1(){
          //  $.ajax({
          //                 url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacionl_aba_sincronizarprotocolopasosestadod/fc_sincronizacionl_aba_sincronizarprotocolopasosestadod1",
          //                 type: "GET",
          //                 data: {},    
          //                 dataType: "html",
          //                 success : function(obj){   
            $('#barra').css('width','9.8%');                    
                            pasosestadod2();
                        //   },
                        //   error:function() {
                        //       erroravanza('Asignar Pasos Estado');
                        //     }
                        // });  
           
        };        
        
        function pasosestadod2(){
          //  $.ajax({
          //                 url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacionl_aba_sincronizarprotocolopasosestadod/fc_sincronizacionl_aba_sincronizarprotocolopasosestadod2",
          //                 type: "GET",
          //                 data: {},    
          //                 dataType: "html",
          //                 success : function(obj){   
            $('#barra').css('width','10.2%'); $('#barra').html('10%');$('#progreso').html('Progreso: 10%')                   
                            pasosestadod3();
                        //   },
                        //   error:function() {
                        //       erroravanza('Asignar Pasos Estado');
                        //     }
                        // });  
           
        };   
        
        function pasosestadod3(){
          //  $.ajax({
          //                 url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacionl_aba_sincronizarprotocolopasosestadod/fc_sincronizacionl_aba_sincronizarprotocolopasosestadod3",
          //                 type: "GET",
          //                 data: {},    
          //                 dataType: "html",
          //                 success : function(obj){ 
            $('#barra').css('width','10.6%');                      
                            pasosestadod4();
                        //   },
                        //   error:function() {
                        //       erroravanza('Asignar Pasos Estado');
                        //     }
                        // });  
           
        };    
        
        function pasosestadod4(){
          //  $.ajax({
          //                 url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacionl_aba_sincronizarprotocolopasosestadod/fc_sincronizacionl_aba_sincronizarprotocolopasosestadod4",
          //                 type: "GET",
          //                 data: {},    
          //                 dataType: "html",
          //                 success : function(obj){ 
            $('#barra').css('width','11.0%'); $('#barra').html('11%');$('#progreso').html('Progreso: 11%')                     
                          fconlogrosd();
                        //   },
                        //   error:function() {
                        //       erroravanza('Asignar Pasos Estado');
                        //     }
                        // });  
           
        };        
        
        function fconlogrosd(){
           $.ajax({
                          url: "fc_fconlogrosd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','11.4%');                     
                          capacidadesd();
                          },
                          error:function() {
                              erroravanza('Asignar Folios con Logros');
                            }
                        });  
           
        };
        
        function capacidadesd(){
           $.ajax({
                          url: "fc_capacidadesd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','11.8%');                      
                          estacionestadod();
                          },
                          error:function() {
                              erroravanza('Asignar Capacidades');
                            }
                        });  
           
        };
        
        function estacionestadod(){
           $.ajax({
                          url: "fc_estacionestadod",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','12.2%');$('#barra').html('12%');$('#progreso').html('Progreso: 12%')                     
                          sincroabajo = 10;                                     
                          c1p1ap12d();                           
                          },
                          error:function() {
                              erroravanza('Asignar Estacion Estado');
                            }
                        });  
           
        };
        
        function c1p1ap12d(){
           $.ajax({
                          url: "fc_sincroc1p1ap12d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','12.6%');                     
                          logro1d();
                          },
                          error:function() {
                              erroravanza('Tabla c1p1ap12 Abajo');
                            }
                        });  
           
        };
        
        
    
        
        
//         function capitulo1l2e1d(){
//           $.ajax({
//                          url: "fc_sincrocapitulo1l2e1d",
//                          type: "GET",
//                          data: {},    
//                          dataType: "html",
//                          success : function(obj){                      
//                           
//                            linea2e1cualidadeshd();
//                            
//                          },
//                          error:function() {
//                              erroravanza('Capitulo 1 Linea 2 Estacion 1 Abajo');
//                            }
//                        });  
//           
//        };
//        
//        function linea2e1cualidadeshd(){
//           $.ajax({
//                          url: "fc_sincrolinea2e1cualidadeshd",
//                          type: "GET",
//                          data: {},    
//                          dataType: "html",
//                          success : function(obj){                      
//                           
//                            linea2e1cualidadesid();
//                            
//                          },
//                          error:function() {
//                              erroravanza('Linea 2 Estacion 1 Cualidades Hogar Abajo');
//                            }
//                        });  
//           
//        };
//        
//        function linea2e1cualidadesid(){
//           $.ajax({
//                          url: "fc_sincrolinea2e1cualidadesid",
//                          type: "GET",
//                          data: {},    
//                          dataType: "html",
//                          success : function(obj){                      
//                           
//                            logro1d();
//                            
//                          },
//                          error:function() {
//                              erroravanza('Linea 2 Estacion 1 Cualidades Integrantes Abajo');
//                            }
//                        });  
//           
//        };
        
        function logro1d(){
          
           $.ajax({
                          url: "fc_sincrologro1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','13.0%');$('#barra').html('13%');$('#progreso').html('Progreso: 13%')                   
                          logro2d();
                          },
                          error:function() {
                              erroravanza('Logro 1 Abajo');
                            }
                        });  
           
        };
        
        function logro2d(){
           $.ajax({
                          url: "fc_sincrologro2d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','13.4%');                    
                          sincroabajo = 11;                                         
                          logro3d();
                          },
                          error:function() {
                              erroravanza('Logro 2 Abajo');
                            }
                        });  
           
        };
        function logro3d(){
           $.ajax({
                          url: "fc_sincrologro3d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','13.8%');                     
                          logro4d();
                          },
                          error:function() {
                              erroravanza('Logro 3 Abajo');
                            }
                        });  
           
        };
        function logro4d(){
           $.ajax({
                          url: "fc_sincrologro4d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','14.2%'); $('#barra').html('14%');$('#progreso').html('Progreso: 14%')                   
                          logro5d();
                          },
                          error:function() {
                              erroravanza('Logro 4 Abajo');
                            }
                        });  
           
        };
        function logro5d(){
           $.ajax({
                          url: "fc_sincrologro5d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','14.6%');                     
                          logro6d();
                          },
                          error:function() {
                              erroravanza('Logro 5 Abajo');
                            }
                        });  
           
        };
        function logro6d(){
           $.ajax({
                          url: "fc_sincrologro6d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','15.0%');$('#barra').html('15%');$('#progreso').html('Progreso: 15%')                    
                          sincroabajo = 12;                                             
                          logro7d();
                          },
                          error:function() {
                              erroravanza('Logro 6 Abajo');
                            }
                        });  
           
        };
        function logro7d(){
           $.ajax({
                          url: "fc_sincrologro7d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','15.4%');                      
                          logro8d();
                          },
                          error:function() {
                              erroravanza('Logro 7 Abajo');
                            }
                        });  
           
        };
        function logro8d(){
           $.ajax({
                          url: "fc_sincrologro8d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','15.8%');                      
                          logro9d();
                          },
                          error:function() {
                              erroravanza('Logro 8 Abajo');
                            }
                        });  
           
        };
        function logro9d(){
           $.ajax({
                          url: "fc_sincrologro9d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','16.2%');$('#barra').html('16%');$('#progreso').html('Progreso: 16%')                     
                          sincroabajo = 13;                                                 
                          logro10d();
                          },
                          error:function() {
                              erroravanza('Logro 9 Abajo');
                            }
                        });  
           
        };
        function logro10d(){
           $.ajax({
                          url: "fc_sincrologro10d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','16.6%');                    
                          logro11d();
                          },
                          error:function() {
                              erroravanza('Logro 10 Abajo');
                            }
                        });  
           
        };
        function logro11d(){
           $.ajax({
                          url: "fc_sincrologro11d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','17.0%');$('#barra').html('17%');$('#progreso').html('Progreso: 17%')                    
                          logro12d();
                          },
                          error:function() {
                              erroravanza('Logro 11 Abajo');
                            }
                        });  
           
        };
        function logro12d(){
           $.ajax({
                          url: "fc_sincrologro12d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','17.4%');                      
                          logro13d();
                          },
                          error:function() {
                              erroravanza('Logro 12 Abajo');
                            }
                        });  
           
        };
        function logro13d(){
           $.ajax({
                          url: "fc_sincrologro13d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','17.8%');                      
                          sincroabajo = 14;                                                     
                          logro14d();
                          },
                          error:function() {
                              erroravanza('Logro 13 Abajo');
                            }
                        });  
           
        };
        function logro14d(){
           $.ajax({
                          url: "fc_sincrologro14d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','18.2%'); $('#barra').html('18%');$('#progreso').html('Progreso: 18%')                   
                          logro15d();
                          },
                          error:function() {
                              erroravanza('Logro 14 Abajo');
                            }
                        });  
           
        };
        function logro15d(){
           $.ajax({
                          url: "fc_sincrologro15d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','18.6%');                     
                          logro16d();
                          },
                          error:function() {
                              erroravanza('Logro 15 Abajo');
                            }
                        });  
           
        };
        function logro16d(){
           $.ajax({
                          url: "fc_sincrologro16d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','19.2%'); $('#barra').html('19%');$('#progreso').html('Progreso: 19%')                     
                          logro17d();
                          },
                          error:function() {
                              erroravanza('Logro 16 Abajo');
                            }
                        });  
           
        };
        function logro17d(){
           $.ajax({
                          url: "fc_sincrologro17d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','19.6%');                      
                          sincroabajo = 15;                                                         
                          logro18d();
                          },
                          error:function() {
                              erroravanza('Logro 17 Abajo');
                            }
                        });  
           
        };
        function logro18d(){
           $.ajax({
                          url: "fc_sincrologro18d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','20.0%'); $('#barra').html('20%');$('#progreso').html('Progreso: 20%')                     
                          logro19d();
                          },
                          error:function() {
                              erroravanza('Logro 18 Abajo');
                            }
                        });  
           
        };
        function logro19d(){
           $.ajax({
                          url: "fc_sincrologro19d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','20.4%');                      
                          logro20d();
                          },
                          error:function() {
                              erroravanza('Logro 19 Abajo');
                            }
                        });  
           
        };
        function logro20d(){
           $.ajax({
                          url: "fc_sincrologro20d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','20.8%');                      
                          sincroabajo = 16;                                                             
                          logro21d();
                          },
                          error:function() {
                              erroravanza('Logro 20 Abajo');
                            }
                        });  
           
        };
        function logro21d(){
           $.ajax({
                          url: "fc_sincrologro21d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','21.2%'); $('#barra').html('21%');$('#progreso').html('Progreso: 21%')                     
                          logro22d();
                          },
                          error:function() {
                              erroravanza('Logro 21 Abajo');
                            }
                        });  
           
        };
        function logro22d(){
           $.ajax({
                          url: "fc_sincrologro22d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','21.6%');                     
                          logro23d();
                          },
                          error:function() {
                              erroravanza('Logro 22 Abajo');
                            }
                        });  
           
        };
        function logro23d(){
           $.ajax({
                          url: "fc_sincrologro23d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','22.0%'); $('#barra').html('22%');$('#progreso').html('Progreso: 22%')                    
                          sincroabajo = 17;                                                                 
                          logro24d();
                          },
                          error:function() {
                              erroravanza('Logro 23 Abajo');
                            }
                        });  
           
        };
        function logro24d(){
           $.ajax({
                          url: "fc_sincrologro24d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','22.4%');                      
                          logro25d();
                          },
                          error:function() {
                              erroravanza('Logro 24 Abajo');
                            }
                        });  
           
        };
        function logro25d(){
           $.ajax({
                          url: "fc_sincrologro25d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','22.8%');                     
                          logro26d();
                          },
                          error:function() {
                              erroravanza('Logro 25 Abajo');
                            }
                        });  
           
        };
        function logro26d(){
           $.ajax({
                          url: "fc_sincrologro26d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','23.2%');$('#barra').html('23%');$('#progreso').html('Progreso: 23%')                      
                          sincroabajo = 18;                                                                     
                          logro27d();
                          },
                          error:function() {
                              erroravanza('Logro 26 Abajo');
                            }
                        });  
           
        };
        function logro27d(){
           $.ajax({
                          url: "fc_sincrologro27d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','23.6%');                      
                          logro28d();
                          },
                          error:function() {
                              erroravanza('Logro 27 Abajo');
                            }
                        });  
           
        };
        function logro28d(){
           $.ajax({
                          url: "fc_sincrologro28d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','24.0%');$('#barra').html('24%');$('#progreso').html('Progreso: 24%')                     
                          logro29d();
                          },
                          error:function() {
                              erroravanza('Logro 28 Abajo');
                            }
                        });  
           
        };
        function logro29d(){
           $.ajax({
                          url: "fc_sincrologro29d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','24.4%');                     
                          sincroabajo = 19;    
                          logro30d();
                          },
                          error:function() {
                              erroravanza('Logro 29 Abajo');
                            }
                        });  
           
        };
        function logro30d(){
           $.ajax({
                          url: "fc_sincrologro30d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','24.8%');                     
                          logro31d();
                          },
                          error:function() {
                              erroravanza('Logro 30 Abajo');
                            }
                        });  
           
        };
        function logro31d(){
           $.ajax({
                          url: "fc_sincrologro31d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','25.2%'); $('#barra').html('25%');$('#progreso').html('Progreso: 25%')                   
                          logro32d();
                          },
                          error:function() {
                              erroravanza('Logro 31 Abajo');
                            }
                        });  
           
        };
        function logro32d(){
           $.ajax({
                          url: "fc_sincrologro32d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','25.6%');                     
                          sincroabajo = 20;        
                          logro33d();
                          },
                          error:function() {
                              erroravanza('Logro 32 Abajo');
                            }
                        });  
           
        };
        function logro33d(){
           $.ajax({
                          url: "fc_sincrologro33d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','26.0%'); $('#barra').html('26%');$('#progreso').html('Progreso: 26%')                   
                          logro34d();
                          },
                          error:function() {
                              erroravanza('Logro 33 Abajo');
                            }
                        });  
           
        };
        function logro34d(){
           $.ajax({
                          url: "fc_sincrologro34d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     $('#barra').css('width','26.4%');                  
                          logro35d();
                          },
                          error:function() {
                              erroravanza('Logro 34 Abajo');
                            }
                        });  
           
        };
        function logro35d(){
           $.ajax({
                          url: "fc_sincrologro35d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','26.8%');                    
                          sincroabajo = 21;    
                          logro36d();
                          },
                          error:function() {
                              erroravanza('Logro 35 Abajo');
                            }
                        });  
           
        };
        function logro36d(){
           $.ajax({
                          url: "fc_sincrologro36d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','27.2%'); $('#barra').html('27%');$('#progreso').html('Progreso: 27%')                    
                          logro37d();
                          },
                          error:function() {
                              erroravanza('Logro 36 Abajo');
                            }
                        });  
           
        };
        function logro37d(){
           $.ajax({
                          url: "fc_sincrologro37d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','27.6%');                     
                          logro38d();
                          },
                          error:function() {
                              erroravanza('Logro 37 Abajo');
                            }
                        });  
           
        };
        function logro38d(){
           $.ajax({
                          url: "fc_sincrologro38d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','28%'); $('#barra').html('28%');$('#progreso').html('Progreso: 28%')                    
                          sincroabajo = 22;
                          logro39d();
                          },
                          error:function() {
                              erroravanza('Logro 38 Abajo');
                            }
                        });  
           
        };
        function logro39d(){
           $.ajax({
                          url: "fc_sincrologro39d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','28.4%');                    
                          logro40d();
                          },
                          error:function() {
                              erroravanza('Logro 39 Abajo');
                            }
                        });  
           
        };
        function logro40d(){
           $.ajax({
                          url: "fc_sincrologro40d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','28.8%');                    
                          logro41d();
                          },
                          error:function() {
                              erroravanza('Logro 40 Abajo');
                            }
                        });  
           
        };
        function logro41d(){
           $.ajax({
                          url: "fc_sincrologro41d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','29.2%');$('#barra').html('29%');$('#progreso').html('Progreso: 29%')                     
                          sincroabajo = 23;    
                          hmovlogd();
                          },
                          error:function() {
                              erroravanza('Logro 41 Abajo');
                            }
                        });  
           
        };
        function hmovlogd(){
           $.ajax({
                          url: "fc_hmovlogd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','29.6%');                   
                          movlog10d();
                          },
                          error:function() {
                              erroravanza('Historico Movimiento Logro Abajo');
                            }
                        });  
           
        };
        function movlog10d(){
           $.ajax({
                          url: "fc_movlog10d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','30.0%'); $('#barra').html('30%');$('#progreso').html('Progreso: 30%')                 
                          movlog18d();
                          },
                          error:function() {
                              erroravanza('Movimiento Logro 10 Abajo');
                            }
                        });  
           
        };
        function movlog18d(){
           $.ajax({
                          url: "fc_movlog18d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','30.4%');                  
                          sincroabajo = 24;    
                          movlog24d();
                          },
                          error:function() {
                              erroravanza('Movimiento Logro 18 Abajo');
                            }
                        });  
           
        };
        function movlog24d(){
           $.ajax({
                          url: "fc_movlog24d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','30.8%');                   
                          movlog33d();
                          },
                          error:function() {
                              erroravanza('Movimiento Logro 24 Abajo');
                            }
                        });  
           
        };
        function movlog33d(){
           $.ajax({
                          url: "fc_movlog33d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){      $('#barra').css('width','31.2%');$('#barra').html('31%');$('#progreso').html('Progreso: 31%')                
                          movlog34d();
                          },
                          error:function() {
                              erroravanza('Movimiento Logro 33 Abajo');
                            }
                        });  
           
        };
        function movlog34d(){
           $.ajax({
                          url: "fc_movlog34d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','31.6%');                    
                          sincroabajo = 25;    
                          movlog39d();
                          },
                          error:function() {
                              erroravanza('Movimiento Logro 34 Abajo');
                            }
                        });  
           
        };
        function movlog39d(){
           $.ajax({
                          url: "fc_movlog39d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','32.0%');$('#barra').html('32%');$('#progreso').html('Progreso: 32%')                    
                          logromovcgsd();
                          },
                          error:function() {
                              erroravanza('Movimiento Logro 39 Abajo');
                            }
                        });  
           
        };
        function logromovcgsd(){
           $.ajax({
                          url: "fc_logromovimientocgsd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','32.4%');
                          sincroabajo = 26;
                          ipmd();
                          },
                          error:function() {
                              erroravanza('Logro Movimiento Cogestor Abajo');
                            }
                        });  
           
        };
//        function l2e2suenod(){
//           $.ajax({
//                          url: "fc_l2e2suenod",
//                          type: "GET",
//                          data: {},    
//                          dataType: "html",
//                          success : function(obj){                      
//                            l2e2suenoaccionesd();
//                          },
//                          error:function() {
//                              erroravanza('Linea 2 Estacion 2 Sueno Abajo');
//                            }
//                        });  
//           
//        };
//        function l2e2suenoaccionesd(){
//           $.ajax({
//                          url: "fc_l2e2suenoaccionesd",
//                          type: "GET",
//                          data: {},    
//                          dataType: "html",
//                          success : function(obj){                      
//                            ipmd();
//                          },
//                          error:function() {
//                              erroravanza('Linea 2 Estacion 2 Sueno Acciones Abajo');
//                            }
//                        });  
//           
//        };
        function ipmd(){
           $.ajax({
                          url: "fc_sincroipmd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','32.8%');                  
                          logroblancod();
                          },
                          error:function() {
                              erroravanza('IPM Abajo');
                            }
                        });  
           
        };
        
        
        //// Actualizacion 25 - 10 - 2017 logro blanco y recalculo ////////////////////
        
        function logroblancod(){
           $.ajax({
                          url: "fc_logroblancod",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','33.2%');$('#barra').html('33%');$('#progreso').html('Progreso: 33%')                  
                          logmovrec10d();
                          },
                          error:function() {
                              erroravanza('Logro Blanco Abajo');
                            }
                        });  
           
        };
        function logmovrec10d(){
           $.ajax({
                          url: "fc_logmovrec10d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','33.6%');                     
                          sincroabajo = 27;
                          logmovrec11d();
                          },
                          error:function() {
                              erroravanza('Logro 10 Movimiento Recalculo Abajo');
                            }
                        });  
           
        };
        function logmovrec11d(){
           $.ajax({
                          url: "fc_logmovrec11d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','34.0%'); $('#barra').html('34%');$('#progreso').html('Progreso: 34%')                 
                          logmovrec12d();
                          },
                          error:function() {
                              erroravanza('Logro 11 Movimiento Recalculo Abajo');
                            }
                        });  
           
        };
        function logmovrec12d(){
           $.ajax({
                          url: "fc_logmovrec12d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','34.4%');                   
                          logmovrec13d();
                          },
                          error:function() {
                            erroravanza('Logro 12 Movimiento Recalculo Abajo');
                            }
                        });  
           
        };
        function logmovrec13d(){
           $.ajax({
                          url: "fc_logmovrec13d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','34.8%');                    
                          logmovrec2d();
                          },
                          error:function() {
                              erroravanza('Logro 13 Movimiento Recalculo Abajo');
                            }
                        });  
           
        };
        function logmovrec2d(){
           $.ajax({
                          url: "fc_logmovrec2d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','35.2%'); $('#barra').html('35%');$('#progreso').html('Progreso: 35%')                   
                          sincroabajo = 28;
                          logmovrec22d();
                          },
                          error:function() {
                             erroravanza('Logro 2 Movimiento Recalculo Abajo');
                            }
                        });  
           
        };
        function logmovrec22d(){
           $.ajax({
                          url: "fc_logmovrec22d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','35.6%');                    
                          logmovrec23d();
                          },
                          error:function() {
                              erroravanza('Logro 22 Movimiento Recalculo Abajo');
                            }
                        });  
           
        };
        function logmovrec23d(){
           $.ajax({
                          url: "fc_logmovrec23d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){$('#barra').css('width','36.0%'); $('#barra').html('36%');$('#progreso').html('Progreso: 36%')                     
                          logmovrec3d();
                          },
                          error:function() {
                             erroravanza('Logro 23 Movimiento Recalculo Abajo');
                            }
                        });  
           
        };
        function logmovrec3d(){
           $.ajax({
                          url: "fc_logmovrec3d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','36.4%');                  
                          sincroabajo = 29;
                          logmovrec5d();
                          },
                          error:function() {
                              erroravanza('Logro 3 Movimiento Recalculo Abajo');
                            }
                        });  
           
        };
        function logmovrec5d(){
           $.ajax({
                          url: "fc_logmovrec5d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','36.8%');                     
                          logmovrec7d();
                          },
                          error:function() {
                             erroravanza('Logro 5 Movimiento Recalculo Abajo');
                            }
                        });  
           
        };
        function logmovrec7d(){
           $.ajax({
                          url: "fc_logmovrec7d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','37.2%'); $('#barra').html('37%');$('#progreso').html('Progreso: 37%')                   
                          logmovrec8d();
                          },
                          error:function() {
                              erroravanza('Logro 7 Movimiento Recalculo Abajo');
                            }
                        });  
           
        };
        function logmovrec8d(){
           $.ajax({
                          url: "fc_logmovrec8d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','37.6%');                  
                          sincroabajo = 30;
                          logmovrec9d();
                          },
                          error:function() {
                            erroravanza('Logro 8 Movimiento Recalculo Abajo');
                            }
                        });  
           
        };
        function logmovrec9d(){
           $.ajax({
                          url: "fc_logmovrec9d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     $('#barra').css('width','38.0%'); $('#barra').html('38%');$('#progreso').html('Progreso: 38%')                
                          privacion1d();
                          },
                          error:function() {
                             erroravanza('Logro 9 Movimiento Recalculo Abajo');
                            }
                        });  
           
        };
       //////////////////////////Sincronizacion privaciones //////////////////////////////////
        
        function privacion1d(){
           $.ajax({
                          url: "fc_sincroprivacion1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','38.4%');  $('#barra').html('39%');$('#progreso').html('Progreso: 39%')                   
                          privacion2d();
                          },
                          error:function() {
                              erroravanza('Privacion 1 Abajo');
                            }
                        });  
           
        };
        function privacion2d(){
           $.ajax({
                          url: "fc_sincroprivacion2d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','38.8%');
                          sincroabajo = 31;    
                          privacion3d();
                          },
                          error:function() {
                              erroravanza('Privacion 2 Abajo');
                            }
                        });  
           
        };
        function privacion3d(){
           $.ajax({
                          url: "fc_sincroprivacion3d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     $('#barra').css('width','40.2%');$('#barra').html('40%');$('#progreso').html('Progreso: 40%')                 
                          privacion4d();
                          },
                          error:function() {
                              erroravanza('Privacion 3 Abajo');
                            }
                        });  
           
        };
        function privacion4d(){
           $.ajax({
                          url: "fc_sincroprivacion4d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','40.6%');                   
                          privacion5d();
                          },
                          error:function() {
                              erroravanza('Privacion 4 Abajo');
                            }
                        });  
           
        };
        function privacion5d(){
           $.ajax({
                          url: "fc_sincroprivacion5d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){      $('#barra').css('width','41.0%');  $('#barra').html('41%');$('#progreso').html('Progreso: 41%')              
                          sincroabajo = 32;    
                          privacion6d();
                          },
                          error:function() {
                              erroravanza('Privacion 5 Abajo');
                            }
                        });  
           
        };
        function privacion6d(){
           $.ajax({
                          url: "fc_sincroprivacion6d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','41.4%');                     
                          privacion7d();
                          },
                          error:function() {
                              erroravanza('Privacion 6 Abajo');
                            }
                        });  
           
        };
        function privacion7d(){
           $.ajax({
                          url: "fc_sincroprivacion7d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','41.8%');                   
                          privacion8d();
                          },
                          error:function() {
                              erroravanza('Privacion 7 Abajo');
                            }
                        });  
           
        };
        function privacion8d(){
           $.ajax({
                          url: "fc_sincroprivacion8d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     $('#barra').css('width','42.2%'); $('#barra').html('42%');$('#progreso').html('Progreso: 42%')                
                          sincroabajo = 33;        
                          privacion9d();
                          },
                          error:function() {
                              erroravanza('Privacion 8 Abajo');
                            }
                        });  
           
        };
        function privacion9d(){
           $.ajax({
                          url: "fc_sincroprivacion9d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){       $('#barra').css('width','42.6%');               
                          privacion10d();
                          },
                          error:function() {
                              erroravanza('Privacion 9 Abajo');
                            }
                        });  
           
        };
        function privacion10d(){
           $.ajax({
                          url: "fc_sincroprivacion10d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){      $('#barra').css('width','43.0%'); $('#barra').html('43%');$('#progreso').html('Progreso: 43%')               
                          privacion11d();
                          },
                          error:function() {
                              erroravanza('Privacion 10 Abajo');
                            }
                        });  
           
        };
        function privacion11d(){
           $.ajax({
                          url: "fc_sincroprivacion11d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','43.4%');                   
                          sincroabajo = 34;    
                          privacion12d();
                          },
                          error:function() {
                              erroravanza('Privacion 11 Abajo');
                            }
                        });  
           
        };
        function privacion12d(){
           $.ajax({
                          url: "fc_sincroprivacion12d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','43.8%');                   
                          privacion13d();
                          },
                          error:function() {
                              erroravanza('Privacion 12 Abajo');
                            }
                        });  
           
        };
        function privacion13d(){
           $.ajax({
                          url: "fc_sincroprivacion13d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){       $('#barra').css('width','44.2%'); $('#barra').html('44%');$('#progreso').html('Progreso: 44%')              
                          privacion14d();
                          },
                          error:function() {
                              erroravanza('Privacion 13 Abajo');
                            }
                        });  
           
        };
        function privacion14d(){
           $.ajax({
                          url: "fc_sincroprivacion14d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','44.6%');                   
                          sincroabajo = 35;        
                          privacion15d();
                          },
                          error:function() {
                              erroravanza('Privacion 14 Abajo');
                            }
                        });  
           
        };
        function privacion15d(){
           $.ajax({
                          url: "fc_sincroprivacion15d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','45.0%'); $('#barra').html('45%');$('#progreso').html('Progreso: 45%')                  
                          privacion16d();
                          },
                          error:function() {
                              erroravanza('Privacion 15 Abajo');
                            }
                        });  
           
        };
        function privacion16d(){
           $.ajax({
                          url: "fc_sincroprivacion16d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','45.4%');                   
                          hfprocedenciad();
                          },
                          error:function() {
                              erroravanza('Privacion 16');
                            }
                        });  
           
        };
        
        /////////////////////////////////////Sincronizacion abajo estacion 0 ////////////////////////////////
         function hfprocedenciad(){
           $.ajax({
                          url: "fc_hfprocedenciad",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','45.8%');                   
                          sincroabajo = 36;
                          hflogrosd();
                          },
                          error:function() {
                              erroravanza('Procedencia Estacion Cero');
                            }
                        });  
           
        };
        function hflogrosd(){
           $.ajax({
                          url: "fc_hflogrosd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){       $('#barra').css('width','46.4%'); $('#barra').html('46%');$('#progreso').html('Progreso: 46%')                
                          hfcostumbresd();
                          },
                          error:function() {
                              erroravanza('Logros Estacion Cero');
                            }
                        });  
           
        };
        function hfcostumbresd(){
           $.ajax({
                          url: "fc_hfcostumbresd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){      $('#barra').css('width','46.8%');                  
                          hfconformaciond();
                          },
                          error:function() {
                              erroravanza('Costumbres Estacion Cero');
                            }
                        });  
           
        };
        function hfconformaciond(){
           $.ajax({
                          url: "fc_hfconformaciond",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','47.2%');$('#barra').html('47%');$('#progreso').html('Progreso: 47%')                    
                          sincroabajo = 37; 
                          facttscual1d();
                          },
                          error:function() {
                              erroravanza('Conformacion Estacion Cero');
                            }
                        });  
           
        };
        function facttscual1d(){
           $.ajax({
                          url: "fc_facttscual1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','47.6%');                    
                          facttfcual1d();
                          },
                          error:function() {
                              erroravanza('facttscual1 Estacion Cero');
                            }
                        });  
           
        };
        function facttfcual1d(){
           $.ajax({
                          url: "fc_facttfcual1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','48.0%');$('#barra').html('48%');$('#progreso').html('Progreso: 48%')                    
                          facttecual1d();
                          },
                          error:function() {
                              erroravanza('facttfcual1 Estacion Cero');
                            }
                        });  
           
        };
        function facttecual1d(){
           $.ajax({
                          url: "fc_facttecual1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','48.4%');                      
                          sincroabajo = 38; 
                          factiscual1d();
                          },
                          error:function() {
                              erroravanza('facttecual1 Estacion Cero');
                            }
                        });  
           
        };
        function factiscual1d(){
           $.ajax({
                          url: "fc_factiscual1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){      $('#barra').css('width','48.8%');                  
                          factifcual1d();
                          },
                          error:function() {
                              erroravanza('factiscual1 Estacion Cero');
                            }
                        });  
           
        };
        function factifcual1d(){
           $.ajax({
                          url: "fc_factifcual1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     $('#barra').css('width','49.2%');$('#barra').html('49%');$('#progreso').html('Progreso: 49%')                   
                          factiecual1d();
                          },
                          error:function() {
                              erroravanza('factifcual1 Estacion Cero');
                            }
                        });  
           
        };
        function factiecual1d(){
           $.ajax({
                          url: "fc_factiecual1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){      $('#barra').css('width','49.6%');                  
                          sincroabajo = 39;  
                          estacioncerocead();
                          },
                          error:function() {
                              erroravanza('factifcual1 Estacion Cero');
                            }
                        });  
           
        };
        function estacioncerocead(){
           $.ajax({
                          url: "fc_estacioncerocead",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){       $('#barra').css('width','49.8%');                 
                          crisisscual1d();
                          },
                          error:function() {
                              erroravanza('estacioncerocea Estacion Cero');
                            }
                        });  
           
        };
        function crisisscual1d(){
           $.ajax({
                          url: "fc_crisisscual1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','49.9%');                     
                          crisisfcual1d();
                          },
                          error:function() {
                              erroravanza('crisisscual1 Estacion Cero');
                            }
                        });  
           
        };
        function crisisfcual1d(){
           $.ajax({
                          url: "fc_crisisfcual1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','50.0%');  $('#barra').html('50%');$('#progreso').html('Progreso: 50%')                   
                          sincroabajo = 40;   
                          crisisecual1d();
                          },
                          error:function() {
                              erroravanza('crisisfcual1 Estacion Cero');
                            }
                        });  
           
        };
        function crisisecual1d(){
           $.ajax({
                          url: "fc_crisisecual1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){          $('#barra').css('width','50.2%');              
                          crearmetasd();
                          },
                          error:function() {
                              erroravanza('crisisecual1 Estacion Cero');
                            }
                        });  
           
        };
        function crearmetasd(){
           $.ajax({
                          url: "fc_crearmetasd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','50.6%');                    
                          correspautonomiad();
                          },
                          error:function() {
                              erroravanza('crearmetas Estacion Cero');
                            }
                        });  
           
        };
        function correspautonomiad(){
           $.ajax({
                          url: "fc_correspautonomiad",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','51%'); $('#barra').html('51%');$('#progreso').html('Progreso: 51%')                   
                          sincroabajo = 41; 
                          eerfd();
                          },
                          error:function() {
                              erroravanza('correspautonomia Estacion Cero');
                            }
                        });  
           
        };
        function eerfd(){
           $.ajax({
                          url: "fc_eerfd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     $('#barra').css('width','51.4%');                   
                          avanceprocesod();
                          },
                          error:function() {
                              erroravanza('EERF Estacion Cero');
                            }
                        });  
           
        };
        /////////////////////////////////////Fin Sincronizacion estacion 0 ////////////////////////////////
        
        //////////////Sincro tablas estacion 2/////////////////////////7
        
        function avanceprocesod(){
           $.ajax({
                          url: "fc_avanceprocesod",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){      $('#barra').css('width','51.8%');                  
                          l2metasd();
                          },
                          error:function() {
                              erroravanza('Avance Proceso Abajo');
                            }
                        });  
           
        };
        
        function l2metasd(){
           $.ajax({
                          url: "fc_l2metasd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','52.5%'); $('#barra').html('52%');$('#progreso').html('Progreso: 52%')                     
                          sincroabajo = 42;  
                          l2accionesd();
                          },
                          error:function() {
                              erroravanza('Metas hogar abajo');
                            }
                        });  
           
        };
        
        function l2accionesd(){
           $.ajax({
                          url: "fc_l2accionesd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','53%');$('#barra').html('53%');$('#progreso').html('Progreso: 53%')                    
                          casoexitosod();
                          },
                          error:function() {
                              erroravanza('Acciones hogar abajo');
                            }
                        });  
           
        };
        
        function casoexitosod(){
           $.ajax({
                          url: "fc_casoexitosod",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','53.5%');                     
                          correspautonomiahistoricod();
                          },
                          error:function() {
                              erroravanza('Caso Exitoso abajo');
                            }
                        });  
           
        };
        
        function correspautonomiahistoricod(){
           $.ajax({
                          url: "fc_correspautonomiahistoricod",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','54.0%'); $('#barra').html('54%');$('#progreso').html('Progreso: 54%')                    
                          sincroabajo = 43; 
                          logromovimientocfd();
                          },
                          error:function() {
                              erroravanza('Historico corresponsabilidad abajo');
                            }
                        });  
           
        };
        
        function logromovimientocfd(){
           $.ajax({
                          url: "fc_logromovimientocfd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){           $('#barra').css('width','54.5%');             
                          protocoloinicioestaciond();
                          },
                          error:function() {
                              erroravanza('Logro Movimiento CF Abajo');
                            }
                        });  
           
        };
        
        function protocoloinicioestaciond(){
           $.ajax({
                          url: "fc_protocoloinicioestaciond",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){      $('#barra').css('width','55.0%');  $('#barra').html('55%');$('#progreso').html('Progreso: 55%')                
                          condicionnecesariad();
                          },
                          error:function() {
                              erroravanza('Protocolo Inicio Estacion Abajo');
                            }
                        });  
           
        };
        function condicionnecesariad(){
           $.ajax({
                          url: "fc_condicionnecesariad",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','55.5%');                    
                          sincroabajo = 44; 
                          tablaingresosd();
                          },
                          error:function() {
                              erroravanza('Condicion Necesaria');
                            }
                        });  
           
        };
        function tablaingresosd(){
           $.ajax({
                          url: "fc_tablaingresosd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','56.0%');$('#barra').html('56%');$('#progreso').html('Progreso: 56%')                    
                          //privacionesintermediad();
						  privacionesintermediad1();
                          },
                          error:function() {
                              erroravanza('Tabla Ingresos');
                            }
                        });  
           
        };
//        function privacionesintermediad(){
//           $.ajax({
//                          url: "fc_privacionesintermediad",
//                          type: "GET",
//                          data: {},    
//                          dataType: "html",
//                          success : function(obj){                      
//                          tablasintermediabajada();
//                          },
//                          error:function() {
//                              erroravanza('Tabla Ingresos');
//                            }
//                        });  
//           
//        };
        function privacionesintermediad1(){
           $.ajax({
                          url: "fc_privacionesintermediad1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){      $('#barra').css('width','56.5%');                  
                          privacionesintermediad2();
                          },
                          error:function() {
                              erroravanza('Tabla privacion intermedia 1');
                            }
                        });  
        };
        function privacionesintermediad2(){
           $.ajax({
                          url: "fc_privacionesintermediad2",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','57.0%');$('#barra').html('57%');$('#progreso').html('Progreso: 57%') 
                          sincroabajo = 45;    
                          privacionesintermediad3();
                          },
                          error:function() {
                              erroravanza('Tabla privacion intermedia 2');
                            }
                        });  
        };
        function privacionesintermediad3(){
           $.ajax({
                          url: "fc_privacionesintermediad3",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          privacionesintermediad4();
                          },
                          error:function() { $('#barra').css('width','57.5%'); 
                              erroravanza('Tabla privacion intermedia 3');
                            }
                        });  
        };
        function privacionesintermediad4(){
           $.ajax({
                          url: "fc_privacionesintermediad4",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     $('#barra').css('width','58.0%');$('#barra').html('58%');$('#progreso').html('Progreso: 58%')                   
                          privacionesintermediad5();
                          },
                          error:function() {
                              erroravanza('Tabla privacion intermedia 4');
                            }
                        });  
        };
        function privacionesintermediad5(){
           $.ajax({
                          url: "fc_privacionesintermediad5",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','58.5%'); 
                          sincroabajo = 46;    
                          privacionesintermediad6();
                          },
                          error:function() {
                              erroravanza('Tabla privacion intermedia 5');
                            }
                        });  
        };
        function privacionesintermediad6(){
           $.ajax({
                          url: "fc_privacionesintermediad6",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){         $('#barra').css('width','59.0%');$('#barra').html('59%');$('#progreso').html('Progreso: 59%')               
                          privacionesintermediad7();
                          },
                          error:function() {
                              erroravanza('Tabla privacion intermedia 6');
                            }
                        });  
        };
        function privacionesintermediad7(){
           $.ajax({
                          url: "fc_privacionesintermediad7",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){       $('#barra').css('width','59.5%');                 
                          privacionesintermediad8();
                          },
                          error:function() {
                              erroravanza('Tabla privacion intermedia 7');
                            }
                        });  
        };
        function privacionesintermediad8(){
           $.ajax({
                          url: "fc_privacionesintermediad8",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     $('#barra').css('width','60.0%');$('#barra').html('60%');$('#progreso').html('Progreso: 60%')                   
                          sincroabajo = 47;    
                          privacionesintermediad9();
                          },
                          error:function() {
                              erroravanza('Tabla privacion intermedia 8');
                            }
                        });  
        };
        function privacionesintermediad9(){
           $.ajax({
                          url: "fc_privacionesintermediad9",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){      $('#barra').css('width','60.5%');                  
                          privacionesintermediad10();
                          },
                          error:function() {
                              erroravanza('Tabla privacion intermedia 9');
                            }
                        });  
        };
        function privacionesintermediad10(){
           $.ajax({
                          url: "fc_privacionesintermediad10",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','61.0%'); $('#barra').html('61%');$('#progreso').html('Progreso: 61%')                   
                          privacionesintermediad11();
                          },
                          error:function() {
                              erroravanza('Tabla privacion intermedia 10');
                            }
                        });  
        };
        function privacionesintermediad11(){
           $.ajax({
                          url: "fc_privacionesintermediad11",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          sincroabajo = 48;    
                          privacionesintermediad12();
                          },
                          error:function() { $('#barra').css('width','61.5%'); 
                              erroravanza('Tabla privacion intermedia 11');
                            }
                        });  
        };
        function privacionesintermediad12(){
           $.ajax({
                          url: "fc_privacionesintermediad12",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){      $('#barra').css('width','62.0%'); $('#barra').html('62%');$('#progreso').html('Progreso: 62%')                 
                          privacionesintermediad13();
                          },
                          error:function() {
                              erroravanza('Tabla privacion intermedia 12');
                            }
                        });  
        };
        function privacionesintermediad13(){
           $.ajax({
                          url: "fc_privacionesintermediad13",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','62.5%');                    
                          privacionesintermediad14();
                          },
                          error:function() {
                              erroravanza('Tabla privacion intermedia 13');
                            }
                        });  
        };
        function privacionesintermediad14(){
           $.ajax({
                          url: "fc_privacionesintermediad14",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','63.0%');$('#barra').html('63%');$('#progreso').html('Progreso: 63%')                    
                          privacionesintermediad15();
                          },
                          error:function() {
                              erroravanza('Tabla privacion intermedia 14');
                            }
                        });  
        };
        function privacionesintermediad15(){
           $.ajax({
                          url: "fc_privacionesintermediad15",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){          $('#barra').css('width','63.5%');              
                          sincroabajo = 49;     
                          privacionesintermediad16();
                          },
                          error:function() {
                              erroravanza('Tabla privacion intermedia 15');
                            }
                        });  
        };
        function privacionesintermediad16(){
           $.ajax({
                          url: "fc_privacionesintermediad16",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){         $('#barra').css('width','64.0%');$('#barra').html('64%');$('#progreso').html('Progreso: 64%')               
                          ipmservidordintermediasub();
                          },
                          error:function() {
                              erroravanza('Tabla privacion intermedia 16');
                            }
                        });  
        };
        function ipmservidordintermediasub(){
           $.ajax({
                          url: "fc_ipmservidordintermediasub",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','64.5%');                    
                          tablasintermediabajadac11();
                          },
                          error:function() {
                              erroravanza('Tabla privacion intermedia IPM');
                            }
                        });  
        };
        function tablasintermediabajadac11(){
           $.ajax({
                          url: "fc_tablasintermediabajadac11",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','65.0%'); $('#barra').html('65%');$('#progreso').html('Progreso: 65%')                     
                          sincroabajo = 50;    
                          tablasintermediabajadac2();
                          },
                          error:function() { erroravanza('Tabla intermedia bajada cap 11'); }
                        });  
        };
        function tablasintermediabajadac2(){
           $.ajax({
                          url: "fc_tablasintermediabajadac2",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     $('#barra').css('width','65.5%');                   
                          tablasintermediabajadac5();
                          },
                          error:function() { erroravanza('Tabla intermedia bajada cap 2'); }
                        });  
        };
        function tablasintermediabajadac5(){
           $.ajax({
                          url: "fc_tablasintermediabajadac5",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     $('#barra').css('width','66.0%');$('#barra').html('66%');$('#progreso').html('Progreso: 66%')                   
                          tablasintermediabajadac6();
                          },
                          error:function() { erroravanza('Tabla intermedia bajada cap 5'); }
                        });  
        };
        function tablasintermediabajadac6(){
           $.ajax({
                          url: "fc_tablasintermediabajadac6",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){       $('#barra').css('width','66.5%');                 
                          sincroabajo = 51;    
                          tablasintermediabajadac7();
                          },
                          error:function() { erroravanza('Tabla intermedia bajada cap 6'); }
                        });  
        };
        function tablasintermediabajadac7(){
           $.ajax({
                          url: "fc_tablasintermediabajadac7",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     $('#barra').css('width','67.0%');$('#barra').html('67%');$('#progreso').html('Progreso: 67%')                   
                          tablasintermediabajadac8();
                          },
                          error:function() { erroravanza('Tabla intermedia bajada cap 7'); }
                        });  
        };
        function tablasintermediabajadac8(){
           $.ajax({
                          url: "fc_tablasintermediabajadac8",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){        $('#barra').css('width','67.5%');                
                          tablasintermediabajadac9();
                          },
                          error:function() { erroravanza('Tabla intermedia bajada cap 8'); }
                        });  
        };
        function tablasintermediabajadac9(){
           $.ajax({
                          url: "fc_tablasintermediabajadac9",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){       $('#barra').css('width','68.0%'); $('#barra').html('68%');$('#progreso').html('Progreso: 68%')                
                          sincroabajo = 52;    
                          sincronizarbajadaintermediahistc11();
                          },
                          error:function() { erroravanza('Tabla intermedia bajada cap 9'); }
                        });  
        };
        function sincronizarbajadaintermediahistc11(){
           $.ajax({
                          url: "fc_sincronizarbajadaintermediahistc11",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){       $('#barra').css('width','69.0%'); $('#barra').html('69%');$('#progreso').html('Progreso: 69%')                
                          sincronizarbajadaintermediahistc2();
                          },
                          error:function() { erroravanza('Tabla intermedia bajada cap 11 historico'); }
                        });  
        };
        function sincronizarbajadaintermediahistc2(){
           $.ajax({
                          url: "fc_sincronizarbajadaintermediahistc2",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){           $('#barra').css('width','70.0%'); $('#barra').html('70%');$('#progreso').html('Progreso: 70%')            
                          sincronizarbajadaintermediahistc5();
                          },
                          error:function() { erroravanza('Tabla intermedia bajada cap 2 historico'); }
                        });  
        };
        function sincronizarbajadaintermediahistc5(){
           $.ajax({
                          url: "fc_sincronizarbajadaintermediahistc5",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){             $('#barra').css('width','71.0%'); $('#barra').html('71%');$('#progreso').html('Progreso: 71%')          
                          sincroabajo = 53;    
                          sincronizarbajadaintermediahistc6();
                          },
                          error:function() { erroravanza('Tabla intermedia bajada cap 5 historico'); }
                        });  
        };
        function sincronizarbajadaintermediahistc6(){
           $.ajax({
                          url: "fc_sincronizarbajadaintermediahistc6",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){           $('#barra').css('width','72.0%');$('#barra').html('72%');$('#progreso').html('Progreso: 72%')             
                          sincronizarbajadaintermediahistc7();
                          },
                          error:function() { erroravanza('Tabla intermedia bajada cap 6 historico'); }
                        });  
        };
        function sincronizarbajadaintermediahistc7(){
           $.ajax({
                          url: "fc_sincronizarbajadaintermediahistc7",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){        $('#barra').css('width','73.0%');$('#barra').html('73%');$('#progreso').html('Progreso: 73%')                
                          sincronizarbajadaintermediahistc8();
                          },
                          error:function() { erroravanza('Tabla intermedia bajada cap 7 historico'); }
                        });  
        };
        function sincronizarbajadaintermediahistc8(){
           $.ajax({
                          url: "fc_sincronizarbajadaintermediahistc8",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){             $('#barra').css('width','74.0%');$('#barra').html('74%');$('#progreso').html('Progreso: 74%')           
                          sincroabajo = 54;    
                          sincronizarbajadaintermediahistc9();
                          },
                          error:function() { erroravanza('Tabla intermedia bajada cap 8 historico'); }
                        });  
        };
        function sincronizarbajadaintermediahistc9(){
           $.ajax({
                          url: "fc_sincronizarbajadaintermediahistc9",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','74.5%');                     
                          sincronizacionintegrantesintermedia_historicodint();
                          },
                          error:function() { erroravanza('Tabla intermedia bajada cap 9 historico'); }
                        });  
        };
        function sincronizacionintegrantesintermedia_historicodint(){
           $.ajax({
                          url: "fc_sincronizacionintegrantesintermedia_historicodint",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){           $('#barra').css('width','75.0%'); $('#barra').html('75%');$('#progreso').html('Progreso: 75%')            
                          privacion10intermediaservidor_historicod10();
                          },
                          error:function() { erroravanza('Tabla intermedia integrante historico'); }
                        });  
        };
        function privacion10intermediaservidor_historicod10(){
           $.ajax({
                          url: "fc_privacion10intermediaservidor_historicod10",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){             $('#barra').css('width','75.5%');           
                          sincroabajo = 55;    
                          privacion11intermediaservidor_historicod11();
                          },
                          error:function() { erroravanza('Tabla intermedia privacion 10 historico'); }
                        });  
        };
        function privacion11intermediaservidor_historicod11(){
           $.ajax({
                          url: "fc_privacion11intermediaservidor_historicod11",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){       $('#barra').css('width','76.0%'); $('#barra').html('76%');$('#progreso').html('Progreso: 76%')                
                          privacion12intermediaservidor_historicod12();
                          },
                          error:function() { erroravanza('Tabla intermedia privacion 11 historico'); }
                        });  
        };
        function privacion12intermediaservidor_historicod12(){
           $.ajax({
                          url: "fc_privacion12intermediaservidor_historicod12",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){           $('#barra').css('width','76.5%');             
                          privacion13intermediaservidor_historicod13();
                          },
                          error:function() { erroravanza('Tabla intermedia privacion 12 historico'); }
                        });  
        };
        function privacion13intermediaservidor_historicod13(){
           $.ajax({
                          url: "fc_privacion13intermediaservidor_historicod13",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){        $('#barra').css('width','77.0%');$('#barra').html('77%');$('#progreso').html('Progreso: 77%')                
                          sincroabajo = 56;    
                          privacion14intermediaservidor_historicod14();
                          },
                          error:function() { erroravanza('Tabla intermedia privacion 13 historico'); }
                        });  
        };
        function privacion14intermediaservidor_historicod14(){
           $.ajax({
                          url: "fc_privacion14intermediaservidor_historicod14",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){           $('#barra').css('width','77.5%');             
                          privacion15intermediaservidor_historicod15();
                          },
                          error:function() { erroravanza('Tabla intermedia privacion 14 historico'); }
                        });  
        };
        function privacion15intermediaservidor_historicod15(){
           $.ajax({
                          url: "fc_privacion15intermediaservidor_historicod15",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){        $('#barra').css('width','78.0%'); $('#barra').html('78%');$('#progreso').html('Progreso: 78%')               
                          privacion16intermediaservidor_historicod16();
                          },
                          error:function() { erroravanza('Tabla intermedia privacion 15 historico'); }
                        });  
        };
        function privacion16intermediaservidor_historicod16(){
           $.ajax({
                          url: "fc_privacion16intermediaservidor_historicod16",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','78.5%'); 
                          sincroabajo = 57;    
                          privacion1intermediaservidor_historicod1();
                          },
                          error:function() { erroravanza('Tabla intermedia privacion 16 historico'); }
                        });  
        };
        function privacion1intermediaservidor_historicod1(){
           $.ajax({
                          url: "fc_privacion1intermediaservidor_historicod1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){        $('#barra').css('width','79.0%');$('#barra').html('79%');$('#progreso').html('Progreso: 79%')                
                          privacion2intermediaservidor_historicod2();
                          },
                          error:function() { erroravanza('Tabla intermedia privacion 1 historico'); }
                        });  
        };
        function privacion2intermediaservidor_historicod2(){
           $.ajax({
                          url: "fc_privacion2intermediaservidor_historicod2",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){        $('#barra').css('width','80.0%');$('#barra').html('80%');$('#progreso').html('Progreso: 80%')                
                          privacion3intermediaservidor_historicod3();
                          },
                          error:function() { erroravanza('Tabla intermedia privacion 2 historico'); }
                        });  
        };
        function privacion3intermediaservidor_historicod3(){
           $.ajax({
                          url: "fc_privacion3intermediaservidor_historicod3",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){            $('#barra').css('width','80.5%');            
                          sincroabajo = 58;    
                          privacion4intermediaservidor_historicod4();
                          },
                          error:function() { erroravanza('Tabla intermedia privacion 3 historico'); }
                        });  
        };
        function privacion4intermediaservidor_historicod4(){
           $.ajax({
                          url: "fc_privacion4intermediaservidor_historicod4",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     $('#barra').css('width','81.0%');$('#barra').html('81%');$('#progreso').html('Progreso: 81%')                   
                            ipmintermediaservidor_historicod();
                          },
                          error:function() { erroravanza('Tabla intermedia privacion 4 historico'); }
                        });  
        };




        function ipmintermediaservidor_historicod(){
           $.ajax({
                          url: "fc_ipmintermediaservidor_historicod",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','81.5%');                      
                          privacion5intermediaservidor_historicod5();
                          },
                          error:function() { erroravanza('Tabla IPM intermedia historico'); }
                        });  
        };








        function privacion5intermediaservidor_historicod5(){
           $.ajax({
                          url: "fc_privacion5intermediaservidor_historicod5",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){            $('#barra').css('width','82.0%');$('#barra').html('82%');$('#progreso').html('Progreso: 82%')            
                          privacion6intermediaservidor_historicod6();
                          },
                          error:function() { erroravanza('Tabla intermedia privacion 5 historico'); }
                        });  
        };
        function privacion6intermediaservidor_historicod6(){
           $.ajax({
                          url: "fc_privacion6intermediaservidor_historicod6",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){               $('#barra').css('width','82.5%');         
                          sincroabajo = 59;    
                          privacion7intermediaservidor_historicod7();
                          },
                          error:function() { erroravanza('Tabla intermedia privacion 6 historico'); }
                        });  
        };
        function privacion7intermediaservidor_historicod7(){
           $.ajax({
                          url: "fc_privacion7intermediaservidor_historicod7",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){         $('#barra').css('width','83.0%'); $('#barra').html('83%');$('#progreso').html('Progreso: 83%')              
                          privacion8intermediaservidor_historicod8();
                          },
                          error:function() { erroravanza('Tabla intermedia privacion 7 historico'); }
                        });  
        };
        function privacion8intermediaservidor_historicod8(){
           $.ajax({
                          url: "fc_privacion8intermediaservidor_historicod8",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){        $('#barra').css('width','83.5%');                
                          privacion9intermediaservidor_historicod9();
                          },
                          error:function() { erroravanza('Tabla intermedia privacion 8 historico'); }
                        });  
        };
        function privacion9intermediaservidor_historicod9(){
           $.ajax({
                          url: "fc_privacion9intermediaservidor_historicod9",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){      $('#barra').css('width','84.0%');$('#barra').html('84%');$('#progreso').html('Progreso: 84%')                  
                          sincroabajo = 60;    
                          sincronizarprotocoloestacionestado_intermedia_historicod1();
                          },
                          error:function() { erroravanza('Tabla intermedia privacion 9 historico'); }
                        });  
        };
        function sincronizarprotocoloestacionestado_intermedia_historicod1(){
           $.ajax({
                          url: "fc_sincronizarprotocoloestacionestado_intermedia_historicod1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                $('#barra').css('width','84.5%');        
                          sincronizarprotocolopasosestado_intermedia_historicod1();
                          },
                          error:function() { erroravanza('Tabla intermedia historico final'); }
                        });  
        };
        function sincronizarprotocolopasosestado_intermedia_historicod1(){
           $.ajax({
                          url: "fc_sincronizarprotocolopasosestado_intermedia_historicod1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){        $('#barra').css('width','84.8%');                
                          encuadreservidord();
                          },
                          error:function() { erroravanza('Tabla intermedia pasos historico final'); }
                        });  
        };
		
		function encuadreservidord(){
           $.ajax({
                          url: "fc_encuadreservidord",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){               $('#barra').css('width','85.0%'); $('#barra').html('85%');$('#progreso').html('Progreso: 85%')        
                            informaciongeneralvisitasservidord();
                          },
                          error:function() { erroravanza('Tabla visita Encuadre Bajada'); }
                        });  
        };
		
        function informaciongeneralvisitasservidord(){
           $.ajax({
                          url: "fc_informaciongeneralvisitasservidord",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      $('#barra').css('width','85.5%');  
                            informaciongeneralvisitas_historicod();
                          },
                          error:function() { erroravanza('Tabla validación visita Encuadre Bajada'); }
                        });  
        };
		

        function informaciongeneralvisitas_historicod(){
           $.ajax({
                          url: "fc_informaciongeneralvisitas_historicod",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     $('#barra').css('width','86.0%'); $('#barra').html('86%');$('#progreso').html('Progreso: 86%')                  
                            informaciongeneralvisitas_aed();
                          },
                          error:function() { erroravanza('Tabla validación visita Encuadre Bajada'); }
                        });  
        };


        function informaciongeneralvisitas_aed(){
           $.ajax({
                          url: "fc_informaciongeneralvisitas_aed",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){         $('#barra').css('width','86.5%');               
                            ipmintermediaLCV1d();
                          },
                          error:function() { erroravanza('Tabla validación visita Encuadre Bajada'); }
                        });  
        };


		//////////Fin Linea 2 ///////////////////////////////////////

    //////////INICIO SINCRO ABAJO CIERRE/////////////

    function ipmintermediaLCV1d(){
           $.ajax({
                          url: "fc_ipmintermediaLCV1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                       $('#barra').css('width','87.0%');$('#barra').html('87%');$('#progreso').html('Progreso: 87%') 
                            privacion16intermediaLCV1d();
                          },
                          error:function() { erroravanza('Tabla validación ipmintermediaLCV1d'); }
                        });  
        };

        function privacion16intermediaLCV1d(){
           $.ajax({
                          url: "fc_privacion16intermediaLCV1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){          $('#barra').css('width','87.5%');              
                            privacion15intermediaLCV1d();
                          },
                          error:function() { erroravanza('Tabla validación privacion16intermediaLCV1d'); }
                        });  
        };

        function privacion15intermediaLCV1d(){
           $.ajax({
                          url: "fc_privacion15intermediaLCV1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){       $('#barra').css('width','88.0%'); $('#barra').html('88%');$('#progreso').html('Progreso: 88%')                
                            privacion14intermediaLCV1d();
                          },
                          error:function() { erroravanza('Tabla validación privacion15intermediaLCV1d'); }
                        });  
        };

        function privacion14intermediaLCV1d(){
           $.ajax({
                          url: "fc_privacion14intermediaLCV1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                       $('#barra').css('width','88.5%'); 
                            privacion13intermediaLCV1d();
                          },
                          error:function() { erroravanza('Tabla validación privacion14intermediaLCV1d'); }
                        });  
        };

        function privacion13intermediaLCV1d(){
           $.ajax({
                          url: "fc_privacion13intermediaLCV1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){            $('#barra').css('width','89.0%'); $('#barra').html('89%');$('#progreso').html('Progreso: 89%')           
                            privacion12intermediaLCV1d();
                          },
                          error:function() { erroravanza('Tabla validación privacion13intermediaLCV1d'); }
                        });  
        };

        function privacion12intermediaLCV1d(){
           $.ajax({
                          url: "fc_privacion12intermediaLCV1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){            $('#barra').css('width','89.5%');            
                            privacion11intermediaLCV1d();
                          },
                          error:function() { erroravanza('Tabla validación privacion12intermediaLCV1d'); }
                        });  
        };

        function privacion11intermediaLCV1d(){
           $.ajax({
                          url: "fc_privacion11intermediaLCV1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){       $('#barra').css('width','90.0%');$('#barra').html('90%');$('#progreso').html('Progreso: 90%')                 
                            privacion10intermediaLCV1d();
                          },
                          error:function() { erroravanza('Tabla validación privacion11intermediaLCV1d'); }
                        });  
        };

        function privacion10intermediaLCV1d(){
           $.ajax({
                          url: "fc_privacion10intermediaLCV1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){       $('#barra').css('width','90.5%');                 
                            privacion9intermediaLCV1d();
                          },
                          error:function() { erroravanza('Tabla validación privacion10intermediaLCV1d'); }
                        });  
        };

        function privacion9intermediaLCV1d(){
           $.ajax({
                          url: "fc_privacion9intermediaLCV1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){       $('#barra').css('width','91.0%');$('#barra').html('91%');$('#progreso').html('Progreso: 91%')                 
                            privacion8intermediaLCV1d();
                          },
                          error:function() { erroravanza('Tabla validación privacion9intermediaLCV1d'); }
                        });  
        };

        function privacion8intermediaLCV1d(){
           $.ajax({
                          url: "fc_privacion8intermediaLCV1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){              $('#barra').css('width','91.5%');          
                            privacion7intermediaLCV1d();
                          },
                          error:function() { erroravanza('Tabla validación privacion8intermediaLCV1d'); }
                        });  
        };

        function privacion7intermediaLCV1d(){
           $.ajax({
                          url: "fc_privacion7intermediaLCV1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){       $('#barra').css('width','92.0%');$('#barra').html('92%');$('#progreso').html('Progreso: 92%')                 
                            privacion6intermediaLCV1d();
                          },
                          error:function() { erroravanza('Tabla validación privacion7intermediaLCV1d'); }
                        });  
        };

        function privacion6intermediaLCV1d(){
           $.ajax({
                          url: "fc_privacion6intermediaLCV1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){             $('#barra').css('width','92.5%');           
                            privacion5intermediaLCV1d();
                          },
                          error:function() { erroravanza('Tabla validación privacion6intermediaLCV1d'); }
                        });  
        };

        function privacion5intermediaLCV1d(){
           $.ajax({
                          url: "fc_privacion5intermediaLCV1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){         $('#barra').css('width','93.0%'); $('#barra').html('93%');$('#progreso').html('Progreso: 93%')              
                            privacion4intermediaLCV1d();
                          },
                          error:function() { erroravanza('Tabla validación privacion5intermediaLCV1d'); }
                        });  
        };

        function privacion4intermediaLCV1d(){
           $.ajax({
                          url: "fc_privacion4intermediaLCV1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','93.5%');                    
                            privacion3intermediaLCV1d();
                          },
                          error:function() { erroravanza('Tabla validación privacion4intermediaLCV1d'); }
                        });  
        };

        function privacion3intermediaLCV1d(){
           $.ajax({
                          url: "fc_privacion3intermediaLCV1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){      $('#barra').css('width','94.0%');$('#barra').html('94%');$('#progreso').html('Progreso: 94%')                  
                            privacion2intermediaLCV1d();
                          },
                          error:function() { erroravanza('Tabla validación privacion3intermediaLCV1d'); }
                        });  
        };

        function privacion2intermediaLCV1d(){
           $.ajax({
                          url: "fc_privacion2intermediaLCV1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){         $('#barra').css('width','94.4%');               
                            privacion1intermediaLCV1d();
                          },
                          error:function() { erroravanza('Tabla validación privacion2intermediaLCV1d'); }
                        });  
        };

        function privacion1intermediaLCV1d(){
           $.ajax({
                          url: "fc_privacion1intermediaLCV1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     $('#barra').css('width','94.8%');                   
                            capitulo11intermedia_lineacierred();
                          },
                          error:function() { erroravanza('Tabla validación privacion1intermediaLCV1d'); }
                        });  
        };

        function capitulo11intermedia_lineacierred(){
           $.ajax({
                          url: "fc_capitulo11intermedia_lineacierred",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){        $('#barra').css('width','95.0%');$('#barra').html('95%');$('#progreso').html('Progreso: 95%')                
                            capitulo6intermedia_lineacierred();
                          },
                          error:function() { erroravanza('Tabla validación capitulo11intermedia_lineacierred'); }
                        });  
        };

        function capitulo6intermedia_lineacierred(){
           $.ajax({
                          url: "fc_capitulo6intermedia_lineacierred",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){        $('#barra').css('width','95.4%');                
                            capitulo2intermedia_lineacierred();
                          },
                          error:function() { erroravanza('Tabla validación capitulo6intermedia_lineacierred'); }
                        });  
        };

        function capitulo2intermedia_lineacierred(){
           $.ajax({
                          url: "fc_capitulo2intermedia_lineacierred",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){         $('#barra').css('width','95.8%');               
                            capitulo9intermedia_lineacierred();
                          },
                          error:function() { erroravanza('Tabla validación capitulo2intermedia_lineacierred'); }
                        });  
        };

        
        function capitulo9intermedia_lineacierred(){
           $.ajax({
                          url: "fc_capitulo9intermedia_lineacierred",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){      $('#barra').css('width','96.0%'); $('#barra').html('96%');$('#progreso').html('Progreso: 96%')                 
                            capitulo8intermedia_lineacierred();
                          },
                          error:function() { erroravanza('Tabla validación capitulo9intermedia_lineacierred'); }
                        });  
        };

        function capitulo8intermedia_lineacierred(){
           $.ajax({
                          url: "fc_capitulo8intermedia_lineacierred",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){       $('#barra').css('width','96.4%');                 
                            capitulo7intermedia_lineacierred();
                          },
                          error:function() { erroravanza('Tabla validación capitulo8intermedia_lineacierred'); }
                        });  
        };

        function capitulo7intermedia_lineacierred(){
           $.ajax({
                          url: "fc_capitulo7intermedia_lineacierred",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){        $('#barra').css('width','96.8%');                
                            capitulo5intermedia_lineacierred();
                          },
                          error:function() { erroravanza('Tabla validación capitulo7intermedia_lineacierred'); }
                        });  
        };

        function capitulo5intermedia_lineacierred(){
           $.ajax({
                          url: "fc_capitulo5intermedia_lineacierred",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){       $('#barra').css('width','97.0%'); $('#barra').html('97%');$('#progreso').html('Progreso: 97%')                
                            principalintegrantes_intermedialcv1d();
                          },
                          error:function() { erroravanza('Tabla validación capitulo5intermedia_lineacierred'); }
                        });  
        };

        function principalintegrantes_intermedialcv1d(){
           $.ajax({
                          url: "fc_principalintegrantes_intermedialcv1d",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     $('#barra').css('width','97.4%');                   
                            sincronizaactualizacionppd();
                          },
                          error:function() { erroravanza('Tabla validación principalintegrantes_intermedialcv1d'); }
                        });  
        };
        function sincronizaactualizacionppd(){
           $.ajax({
                          url: "fc_sincronizaactualizacionppd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','97.8%');                     
                            sincronizacionmadresd();
                          },
                          error:function() { erroravanza('Tabla validación t_actualizacionppd'); }
                        });  
        };                                                                 //sincronizacionmadresd
        function sincronizacionmadresd(){
           $.ajax({
                          url: "fc_madresadolecentesd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','98.2%'); $('#barra').html('98%');$('#progreso').html('Progreso: 98%')
                            principalintegrantes_intermediad();                     
                          
                          },
                          error:function() { erroravanza('Tabla validación t11_madresadolecentes'); }
                        });  
        };    
        function principalintegrantes_intermediad(){
           $.ajax({
                          url: "fc_principalintegrantes_intermediad",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','98.6%');                      
                            sincronizacionintegrantesd();
                          },
                          error:function() { erroravanza('Tabla validación t1_principalintegrantes_intermedia'); }
                        });  
        };    
      ///////////////////Fin sincro abajo Cierre/////////////    
        
       function sincronizacionintegrantesd(){ $('#barra').css('width','99.0%'); 
           $.ajax({
                          url: "fc_sincronizacionintegrantesd",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ 
                          sincroabajo = 61;    
                          sincronizacionhogard();
                          },
                          error:function() {
                              erroravanza('Asignar Integrantes');
                            }
                        });  
           
        };
        
        function sincronizacionhogard(){  $('#barra').css('width','99.4%'); $('#barra').html('99%');$('#progreso').html('Progreso: 99%')
           $.ajax({
                          url: "fc_sincronizacionhogard",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          movlogsisbend();
                          },
                          error:function() {
                              erroravanza('Asignar Hogar');
                             }
                        });  
           
        };
        
        function movlogsisbend(){
          $.ajax({
                         url: "fc_movlogsisbend",
                         type: "GET",
                         data: {},    
                         dataType: "html",
                         success : function(obj){    $('#barra').css('width','99.8%');                    
                         sincroabajo = 62;         
                         borrarinactivos();
                         },
                         error:function() {
                             erroravanza('Movimiento Logros del sisben');
                           }
                       });  
          
       };
       
        function borrarinactivos(){
           $.ajax({
                          url: "fc_borrarinactivos",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     $('#barra').css('width','100%'); $('#barra').html('100%');$('#progreso').html('Progreso: 100%')                  
                            detenerReloj();
                            avanza();
                            janelaPopUp.abre("fin", 'm green', 'Mensaje', 'Sincronizacion Exitosa!!!!');
                            
                          },
                          error:function() {
                              erroravanza('Borrar Inactivos');
                            }
                        });  
           
        };
    $(document).ready(function() {
      editar_llbfa();
//reasignacionabajo();  

    });

</script>

<script>
    let intervalo;
        // Función para iniciar el contador
        function iniciarContador() {
            let horas = 0, minutos = 0, segundos = 0;
            const horasElemento = document.getElementById('horas');
            const minutosElemento = document.getElementById('minutos');
            const segundosElemento = document.getElementById('segundos');

            // Actualiza el contador cada segundo
             intervalo = setInterval(function() {
                segundos++;
                if (segundos === 60) {
                    segundos = 0;
                    minutos++;
                }
                if (minutos === 60) {
                    minutos = 0;
                    horas++;
                }
                // Formatea los valores de horas, minutos y segundos
                horasElemento.textContent = String(horas).padStart(2, '0');
                minutosElemento.textContent = String(minutos).padStart(2, '0');
                segundosElemento.textContent = String(segundos).padStart(2, '0');
            }, 1000);

            // Evento para detener el contador al hacer clic en el botón
           

        }

        function detenerReloj(){
                clearInterval(intervalo); // Detiene el intervalo
           }

        // Iniciar el contador cuando se carga la página
        window.addEventListener('load', iniciarContador);
    </script>


</body>
</html>