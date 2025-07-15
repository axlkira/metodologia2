<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Sicroarriba</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">        <meta charset="utf-8">
        <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/ds-digital">
        <meta http-equiv="Content-Language" content="es"/>

    </head>
    <body>  
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
.amg-step.\--error .amg-step_marker { //Cambia el cursor del mouse a una mano
  cursor: pointer;
}
.amg-step.\--complete .amg-step_marker:hover {
  box-shadow: 0 0 8px 1px #39d084;
}

.amg-step.\--error .amg-step_marker:hover { //Cambia el fondo del circulo
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
/////////////////////////////////////////////////////////////////////



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
  font-size: 15px;
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
  padding: 15px;
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
  background-color:#0dcaf0;
}

.green>button:hover {
  background-color:  #0d6efd;
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

<div class="amg-container" style="display:none">
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
    
    
    function editar_llbfb(){

    //alert("JuanPis1");

    $.ajax({
						url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_editar_llbfb/fc_sin_editar_llbf",
						type: "get",
						data: {},
						dataType: "json",
						success: function(obj) {
              $('#barra').css('width','0.1%');$('#barra').html('1%');$('#progreso').html('Progreso: 1%')       
              cap2();
                            
					    },
						error:function(jqXHR, textStatus, errorThrown) {alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                        //erroravanza('Capitulo  edicion lbf');
						}
					});    

}


function cap2() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_capitulo2/fc_sin_capitulo2",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {   $('#barra').css('width','0.4%');   
       
          if( obj === ''){inilogrosprivaciones();}else{erroravanza('Capitulo 2');}
                        //alert("Hola Juan2");
                                                                                    
          },
        error:function() {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Capitulo 2');
        }
      });    

};

// para limpiar los logros y privacion
function inilogrosprivaciones() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_iniciarlogrosprivaciones/fc_sin_iniciarlogrosprivaciones",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','0.8%');$('#barra').html('	1	%');$('#progreso').html('Progreso: 1%')
   
    //alert(obj);
    if( obj === ''){cap3();}else{erroravanza('Inicar Logros y Privaciones');}
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
     erroravanza('Inicar Logros y Privaciones');
  }
});
};


  function cap3() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_capitulo3/fc_sin_capitulo3",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','1.2%');   
          if( obj === ''){cap6();}else{erroravanza('Capitulo 3');}
                       
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Capitulo 3');
        }
      });    

};

        
		
  function cap6(){

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_capitulo6/fc_sin_capitulo6",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','1.4%');   

          if( obj === ''){sincroarriba = 1;cap11();}else{erroravanza('Capitulo 6');}
                                                                                     
                        
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Capitulo 6');
        }
      });    

};


function cap11() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_capitulo11/fc_sin_capitulo11",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','1.8%');  $('#barra').html('2%');$('#progreso').html('Progreso: 2%') 
            if( obj === ''){cap4i();}else{erroravanza('Capitulo 11');}
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Capitulo 11');
        }
      });    

};


  function cap4i() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_capitulo4i/fc_sin_capitulo4i",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','2.2%');   
          if( obj === ''){cap5i();}else{erroravanza('Capitulo 4 integrantes');}
          
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Capitulo 4 integrantes');
        }
      });    

};

  function cap5i() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_capitulo5i/fc_sin_capitulo5i",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','2.6%');   
          if( obj === ''){sincroarriba = 2;cap7i();}else{erroravanza('Capitulo 5 integrantes');}
                                                                                    
                        
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Capitulo 5 integrantes');
        }
      });    

};

 
  function cap7i() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_capitulo7i/fc_sin_capitulo7i",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','3.0%'); $('#barra').html('3%');$('#progreso').html('Progreso: 3%')  
          if( obj === ''){cap8i();}else{erroravanza('Capitulo 7 integrantes');}
         
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Capitulo 7 integrantes');
        }
      });    

};


  function cap8i() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_capitulo8i/fc_sin_capitulo8i",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','3.4%');   
          if( obj === ''){cap9i();}else{erroravanza('Capitulo 8 integrantes');}
          
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Capitulo 8 integrantes');
        }
      });    

};

  function cap9i() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_capitulo9i/fc_sin_capitulo9i",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','3.8%');   $('#barra').html('4%');$('#progreso').html('Progreso: 4%')
          if( obj === ''){cap10i();}else{erroravanza('Capitulo 9 integrantes');}                                                           
                        
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Capitulo 9 integrantes');
        }
      });    

};
        
        
  function cap10i() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_capitulo10i/fc_sin_capitulo10i",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','4.2%');   
          if( obj === ''){sincroarriba = 3;cap11i();}else{erroravanza('Capitulo 10 integrantes');}  
                                                                                  
                        
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Capitulo 10 integrantes');
        }
      });    

};


  function cap11i() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_capitulo11i/fc_sin_capitulo11i",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','4.6%');   
          if( obj === ''){cap12i();}else{erroravanza('Capitulo 11 integrantes');}                                                           
                       
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Capitulo 11 integrantes');
        }
      });    

};


  function cap12i() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_capitulo12i/fc_sin_capitulo12i",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','5.0%');  $('#barra').html('5%');$('#progreso').html('Progreso: 5%') 
          if( obj === ''){sincroarriba = 4;avanza();pph();}else{erroravanza('Capitulo 12 integrantes');}   
                        
                                                                                  
                        
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Capitulo 12 integrantes');
        }
      });    

};
        

  /////////////////////////////Sincronizacion Perfil productivo //////////////////

  function pph() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_pph/fc_sin_pph",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','5.4%');   
          if( obj === ''){ madresadolecentes();}else{erroravanza('Perfil Productivo capitulo 1 hogar');}                                                          
                       
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Perfil Productivo capitulo 1 hogar');
        }
      });    

};



  /////////////////////////////Sincronizacion tabla madres adolecentes //////////////////

  function madresadolecentes() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_arriba/t11_madres_adolecentes",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','5.8%');  $('#barra').html('6%');$('#progreso').html('Progreso: 6%') 

       //   alert(obj);
          if( obj === '"ok""ok"'){ madresadolecentescamposincro();}else{erroravanza('Tabla Madres Adolecentes');}                                                          
                       
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Tabla Madres Adolecentes');
        }
      });    

};


 /////////////////////////////Sincronizacion tabla madres adolecentes //////////////////

 function madresadolecentescamposincro() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_arriba/t11_madres_adolecentes_update",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','6.2%');   

         // alert(obj);
          if( obj == 'ok'){ ppcap1();}else{erroravanza('Tabla Madres Adolecentes1');}                                                          
                       
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Tabla Madres Adolecentes 2');
        }
      });    

};


  function ppcap1() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_ppcap1/fc_sin_ppcap1",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','6.6%');   
          if( obj === ''){ppcap2();}else{erroravanza('Perfil Productivo capitulo 1');}                                                            
                       
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Perfil Productivo capitulo 1');
        }
      });    

};

  function ppcap2() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_ppcap2/fc_sin_ppcap2",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','7.0%');  $('#barra').html('7%');$('#progreso').html('Progreso: 7%') 
          if( obj === ''){sincroarriba = 5;ppcap3();}else{erroravanza('Perfil Productivo capitulo 2');}  
                        
                                                                                 
                        
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Perfil Productivo capitulo 2');
        }
      });    

};

  function ppcap3() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_ppcap3/fc_sin_ppcap3",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','7.4%');   
          if( obj === ''){ppcap4();}else{erroravanza('Perfil Productivo capitulo 3');}                                                            
                        
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Perfil Productivo capitulo 3');
        }
      });    

};

  function ppcap4() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_ppcap4/fc_sin_ppcap4",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','7.8%');  $('#barra').html('8%');$('#progreso').html('Progreso: 8%') 
          if( obj === ''){ppfac();}else{erroravanza('Perfil Productivo capitulo 4');}                                                           
                        
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Perfil Productivo capitulo 4');
        }
      });    

};

  function ppfac() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_ppfac/fc_sin_ppfac",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','8.2%');   
          if( obj === ''){sincroarriba = 6;ppoes();}else{erroravanza('Perfil Productivo formacion academica');}
                                                        
                        
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Perfil Productivo formacion academica');
        }
      });    

};

  function ppoes() {

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_ppoes/fc_sin_ppoes",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','8.6%');   
          if( obj === ''){ppexp();}else{erroravanza('Perfil Productivo otros estudios');}                                                         
                        
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Perfil Productivo otros estudios');
        }
      });    

};

  function ppexp() {//falta

//alert("JuanPis2");

$.ajax({
        url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_ppexp/fc_sin_ppexp",
        type: "get",
        data: {},
        dataType: "json",
        success: function(obj) {
          $('#barra').css('width','9.0%');  $('#barra').html('9%');$('#progreso').html('Progreso: 9%') 
          if( obj === ''){ sincroarriba = 7;avanza();logro1();}else{erroravanza('Perfil Productivo experiencia laboral');}  
                       
                                                                                 
                        
          },
        error:function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                    erroravanza('Perfil Productivo experiencia laboral');
        }
      });    

};
        
        ////////////////////////////////Sincronizacion Logros//////////////////////////////////
        
  function logro1(){ // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro1/fc_sin_logro1",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','9.4%');   
    if( obj === ''){
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro1/fc_sin_logro1ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {
        erroravanza('Logro 1');
      }
    });
    logro2();
  }else{erroravanza('Logro 1');}
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 1');
  }
});
};

  function logro2(){ // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro2/fc_sin_logro2",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','9.8%'); $('#barra').html('10%');$('#progreso').html('Progreso: 10%')  
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro2/fc_sin_logro2ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
       // alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 2');
      }
    });
    sincroarriba = 8;
    logro3();
  }else{erroravanza('Logro 2');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 2');
  }
});
};

  function logro3() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro3/fc_sin_logro3",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','10.2%');   
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro3/fc_sin_logro3ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
       // alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 3');
      }
    });
    logro4();
  }else{erroravanza('Logro 3');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 3');
  }
});
};

  function logro4() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro4/fc_sin_logro4",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','10.6%');   

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro4/fc_sin_logro4ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 4');
      }
    });
    logro5();
  }else{erroravanza('Logro 4');}
    //alert('Sin ok');
  },
  error: function() { alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 4');
  }
});
};

  function logro5() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro5/fc_sin_logro5",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','11.0%'); $('#barra').html('11%');$('#progreso').html('Progreso: 11%')  
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro5/fc_sin_logro5ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 5');
      }
    });
    sincroarriba = 9;
    logro6();
  }else{erroravanza('Logro 5');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 5');
  }
});
};

  function logro6() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro6/fc_sin_logro6",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','11.4%');   
    if( obj === ''){
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro6/fc_sin_logro6ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 6');
      }
    });
    logro7();
  }else{erroravanza('Logro 6');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 6');
  }
});
};

  function logro7() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro7/fc_sin_logro7",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','11.8%');  $('#barra').html('12%');$('#progreso').html('Progreso: 12%') 
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro7/fc_sin_logro7ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 7');
      }
    });
    logro8();
  }else{erroravanza('Logro 7');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 7');
  }
});
};


  function logro8() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro8/fc_sin_logro8",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','12.2%');   
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro8/fc_sin_logro8ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 8');
      }
    });
    sincroarriba = 10;
    logro9();
  }else{erroravanza('Logro 8');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 8');
  }
});
};

  function logro9(){ // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro9/fc_sin_logro9",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','12.6%');   
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro9/fc_sin_logro9ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 9');
      }
    });
    logro10();
  }else{erroravanza('Logro 9');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 9');
  }
});
};

  function logro10() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro10/fc_sin_logro10",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','13.0%');$('#barra').html('13%');$('#progreso').html('Progreso: 13%')   
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro10/fc_sin_logro10ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 10');
      }
    });
    logro11();
  }else{erroravanza('Logro 10');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 10');
  }
});
};

  function logro11()  { // falta
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro11/fc_sin_logro11",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','13.4%');   
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro11/fc_sin_logro11ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 11');
      }
    });
    logro12();
  }else{erroravanza('Logro 11');}
    //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 11');
  }
});
};

  function logro12()  { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro12/fc_sin_logro12",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','13.8%');$('#barra').html('14%');$('#progreso').html('Progreso: 14%')   
    if( obj === ''){
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro12/fc_sin_logro12ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 12');
      }
    });
    logro13();
  }else{erroravanza('Logro 12');}
    
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 12');
  }
});
};

  function logro13() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro13/fc_sin_logro13",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','14.2%');   
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro13/fc_sin_logro13ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 13');
      }
    });
    logro14();
  }else{erroravanza('Logro 13');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 13');
  }
});
};

  function logro14() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro14/fc_sin_logro14",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','14.6%');   
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro14/fc_sin_logro14ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
       // alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 14');
      }
    });
    sincroarriba = 12;
    logro15();    
  }else{erroravanza('Logro 14');}
    //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 14');
  }
});
};

  function logro15() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro15/fc_sin_logro15",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','15.0%');  $('#barra').html('15%');$('#progreso').html('Progreso: 15%') 
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro15/fc_sin_logro15ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 15');
      }
    });
    logro16();
  }else{erroravanza('Logro 15');}    
    //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 15');
  }
});
};

  function logro16() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro16/fc_sin_logro16",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','15.4%');   

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro16/fc_sin_logro16ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 16');
      }
    });
    logro17();    
  }else{erroravanza('Logro 16');}
    //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 16');
  }
});
};


  function logro17() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro17/fc_sin_logro17",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','15.8%');   $('#barra').html('16%');$('#progreso').html('Progreso: 16%')

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro17/fc_sin_logro17ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
       // alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 17');
      }
    });
    sincroarriba = 13;
    logro18();
  }else{erroravanza('Logro 17');}
    //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 17');
  }
});
};

  function logro18()  { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro18/fc_sin_logro18",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','16.2%');   

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro18/fc_sin_logro18ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 18');
      }
    });
    logro19();
  }else{erroravanza('Logro 18');}
    //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
      erroravanza('Logro 18');
  }
});
};

  function logro19()  { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro19/fc_sin_logro19",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','16.6%');   

    if( obj === ''){
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro19/fc_sin_logro19ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 19');
      }
    });
    logro20();
  }else{erroravanza('Logro 19');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 19');
  }
});
};

  function logro20() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro20/fc_sin_logro20",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','17.0%');  $('#barra').html('17%');$('#progreso').html('Progreso: 17%') 

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro20/fc_sin_logro20ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 20');
      }
    });
    sincroarriba = 14;
    logro21();
  }else{erroravanza('Logro 20');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 20');
  }
});
};

  function logro21()  { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro21/fc_sin_logro21",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','17.4%');   

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro21/fc_sin_logro21ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 21');
      }
    });
    logro22();
  }else{erroravanza('Logro 21');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 21');
  }
});
};

  function logro22() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro22/fc_sin_logro22",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','17.8%'); $('#barra').html('18%');$('#progreso').html('Progreso: 18%')  

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro22/fc_sin_logro22ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 22');
      }
    });
    logro23();
  }else{erroravanza('Logro 22');}
    //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 22');
  }
});
};

  function logro23() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro23/fc_sin_logro23",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    if( obj === ''){ 
      $('#barra').css('width','18.2%');   

    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro23/fc_sin_logro23ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
       // alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 23');
      }
    });
    sincroarriba = 15;
    logro24();
  }else{erroravanza('Logro 23');}
   //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 23');
  }
});
};

  function logro24() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro24/fc_sin_logro24",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','18.6%');   

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro24/fc_sin_logro24ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 24');
      }
    });
    logro25();
  }else{erroravanza('Logro 24');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 24');
  }
});
};

  function logro25() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro25/fc_sin_logro25",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','19.0%'); $('#barra').html('19%');$('#progreso').html('Progreso: 19%')  

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro25/fc_sin_logro25ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
       // alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 25');
      }
    });
    logro26();
  }else{erroravanza('Logro 25');}
    //alert('Sin ok');
  },
  error: function() {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 25');
  }
});
};

  function logro26() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro26/fc_sin_logro26",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','19.4%');   

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro26/fc_sin_logro26ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 26');
      }
    });
    sincroarriba = 16;
    logro27();
  }else{erroravanza('Logro 26');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 26');
  }
});
};

  function logro27() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro27/fc_sin_logro27",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','19.8%');  $('#barra').html('20%');$('#progreso').html('Progreso: 20%') 

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro27/fc_sin_logro27ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
       // alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 27');
      }
    });
    logro28();
  }else{erroravanza('Logro 27');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 27');
  }
});
};

  function logro28() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro28/fc_sin_logro28",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','20.2%');   

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro28/fc_sin_logro28ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 28');
      }
    });
    logro29();
  }else{erroravanza('Logro 28');}
    //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 28');
  }
});
};

  function logro29() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro29/fc_sin_logro29",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','20.4%');   

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro29/fc_sin_logro29ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 29');
      }
    });
    sincroarriba = 17;
    logro30();
  }else{erroravanza('Logro 29');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 29');
  }
});
};

  function logro30() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro30/fc_sin_logro30",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','20.8%');   $('#barra').html('21%');$('#progreso').html('Progreso: 21%')

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro30/fc_sin_logro30ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 30');
      }
    });
    logro31();
  }else{erroravanza('Logro 30');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 30');
  }
});
};

  function logro31() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro31/fc_sin_logro31",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','21.2%');   

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro31/fc_sin_logro31ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 31');
      }
    });
    logro32();
  }else{erroravanza('Logro 31');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 31');
  }
});
};

  function logro32() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro32/fc_sin_logro32",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','21.6%');   

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro32/fc_sin_logro32ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 32');
      }
    });
    sincroarriba = 18;
    logro33();
  }else{erroravanza('Logro 32');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 32');
  }
});
};

  function logro33() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro33/fc_sin_logro33",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','22.0%');$('#barra').html('22%');$('#progreso').html('Progreso: 22%')   

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro33/fc_sin_logro33ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 33');
      }
    });
    logro34();
  }else{erroravanza('Logro 33');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 33');
  }
});
};

  function logro34() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro34/fc_sin_logro34",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','22.4%');   

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro34/fc_sin_logro34ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 34');
      }
    });
    logro35();
  }else{erroravanza('Logro 34');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 34');
  }
});
};

  function logro35() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro35/fc_sin_logro35",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','22.8%'); $('#barra').html('23%');$('#progreso').html('Progreso: 23%')  

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro35/fc_sin_logro35ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 35');
      }
    });
    sincroarriba = 19;
    logro36();
  }else{erroravanza('Logro 35');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 35');
  }
});
};

  function logro36() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro36/fc_sin_logro36",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','23.2%');   

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro36/fc_sin_logro36ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
       // alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 36');
      }
    });
    logro37();
  }else{erroravanza('Logro 36');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 36');
  }
});
};

  function logro37() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro37/fc_sin_logro37",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','23.6%');   

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro37/fc_sin_logro37ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
       // alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 37');
      }
    });
    logro38();
  }else{erroravanza('Logro 37');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 37');
  }
});
};


  function logro38()  { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro38/fc_sin_logro38",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','24.0%');$('#barra').html('24%');$('#progreso').html('Progreso: 24%')   

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro38/fc_sin_logro38ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 38');
      }
    });
    sincroarriba = 20;
    logro39();
  }else{erroravanza('Logro 38');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 38');
  }
});
};

  function logro39() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro39/fc_sin_logro39",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','24.4%');   

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro39/fc_sin_logro39ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 39');
      }
    });
    logro40();
  }else{erroravanza('Logro 39');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 39');
  }
});
};

  function logro40() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro40/fc_sin_logro40",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','24.8%');  $('#barra').html('25%');$('#progreso').html('Progreso: 25%') 

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro40/fc_sin_logro40ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
       // alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 40');
      }
    });
    logro41();
  }else{erroravanza('Logro 40');}
    //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 40');
  }
});
};

  function logro41() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro41/fc_sin_logro41",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','25.2%');   

    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_logro41/fc_sin_logro41ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
       // alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {//alert("Hola Juan Error1" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Logro 41');
      }
    });
    hmovlog();
  }else{erroravanza('Logro 41');}
    //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Logro 41');
  }
});
};


        function hmovlog(){
           $.ajax({
                          url: "fc_hmovlog",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ 
                            $('#barra').css('width','25.6%');   
                          console.log(obj);
                            $.ajax({
                              url: "fc_hmovlogok",
                              type: "GET",
                              data: {},    
                              dataType: "html",
                              success : function(obj){ 
                                console.log(obj);
                                movlog10();
                              },
                              error:function() {
                                  erroravanza('Historico Movimiento Logro');
                                }
                             })  
                          },
                          error:function() {
                              erroravanza('Historico Movimiento Logro');
                            }
                        });  
           
        };
        function movlog10(){
           $.ajax({
                          url: "fc_movlog10",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                              success : function(obj){    
                                $('#barra').css('width','26.0%');   $('#barra').html('26%');$('#progreso').html('Progreso: 26%')                  
                                $.ajax({
                              url: "fc_movlog10ok",
                              type: "GET",
                              data: {},    
                              dataType: "html",
                              success : function(obj){                      
                              movlog18();
                              },
                              error:function() {
                                  erroravanza('Movimiento Logro 10');
                                }
                            });  
                          },
                          error:function() {
                              erroravanza('Movimiento Logro 10');
                            }
                        });  
           
        };
        function movlog18(){
           $.ajax({
                          url: "fc_movlog18",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){     
                            $('#barra').css('width','26.4%');                    
                              $.ajax({
                            url: "fc_movlog18ok",
                            type: "GET",
                            data: {},    
                            dataType: "html",
                            success : function(obj){                      
                            sincroarriba = 22;                        
                            movlog24();
                            },
                            error:function() {
                                erroravanza('Movimiento Logro 18');
                              }
                          });
                          },
                          error:function() {
                              erroravanza('Movimiento Logro 18');
                            }
                        });  
           
        };
        function movlog24(){
           $.ajax({
                          url: "fc_movlog24",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    
                            $('#barra').css('width','26.8%');  $('#barra').html('27%');$('#progreso').html('Progreso: 27%')                   
                              $.ajax({
                            url: "fc_movlog24ok",
                            type: "GET",
                            data: {},    
                            dataType: "html",
                            success : function(obj){                      
                            movlog33();
                            },
                            error:function() {
                                erroravanza('Movimiento Logro 24');
                              }
                          });  
                          },
                          error:function() {
                              erroravanza('Movimiento Logro 24');
                            }
                        });  
           
        };
        function movlog33(){
           $.ajax({
                          url: "fc_movlog33",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $('#barra').css('width','27.2%');                       
                              $.ajax({
                            url: "fc_movlog33ok",
                            type: "GET",
                            data: {},    
                            dataType: "html",
                            success : function(obj){                      
                            movlog34();
                            },
                            error:function() {
                                erroravanza('Movimiento Logro 33');
                              }
                          });  
                          },
                          error:function() {
                              erroravanza('Movimiento Logro 33');
                            }
                        });  
           
        };
        function movlog34(){
           $.ajax({
                          url: "fc_movlog34",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){      
                            $('#barra').css('width','27.6%');   
                              $.ajax({
                            url: "fc_movlog34ok",
                            type: "GET",
                            data: {},    
                            dataType: "html",
                            success : function(obj){                      
                            sincroarriba = 23;                            
                            movlog39();
                            },
                            error:function() {
                                erroravanza('Movimiento Logro 34');
                              }
                          });  
                          },
                          error:function() {
                              erroravanza('Movimiento Logro 34');
                            }
                        });  
           
        };
        function movlog39(){
           $.ajax({
                          url: "fc_movlog39",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ 
                            $('#barra').css('width','28.0%');  $('#barra').html('28%');$('#progreso').html('Progreso: 28%')                      
                                $.ajax({
                              url: "fc_movlog39ok",
                              type: "GET",
                              data: {},    
                              dataType: "html",
                              success : function(obj){                      
                              logromovcgs();
                              },
                              error:function() {
                                  erroravanza('Movimiento Logro 39');
                                }
                            });  
                          },
                          error:function() {
                              erroravanza('Movimiento Logro 39');
                            }
                        });  
           
        };
        function logromovcgs(){
           $.ajax({
                          url: "fc_logromovimientocgs",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   
                            $('#barra').css('width','28.4%');                      
                                $.ajax({
                              url: "fc_logromovimientocgsok",
                              type: "GET",
                              data: {},    
                              dataType: "html",
                              success : function(obj){                      
                              ipm();
                              },
                              error:function() {
                                  erroravanza('Logro Movimiento Cogestor');
                                }
                            }); 
                          },
                          error:function() {
                              erroravanza('Logro Movimiento Cogestor');
                            }
                        });  
           
        };
//        function l2e2sueno(){
//           $.ajax({
//                          url: "fc_l2e2sueno",
//                          type: "GET",
//                          data: {},    
//                          dataType: "html",
//                          success : function(obj){                      
//                            l2e2suenoacciones();
//                          },
//                          error:function() {
//                              erroravanza('Linea 2 Estacion 2 Sueno');
//                            }
//                        });  
//           
//        };
//        function l2e2suenoacciones(){
//           $.ajax({
//                          url: "fc_l2e2suenoacciones",
//                          type: "GET",
//                          data: {},    
//                          dataType: "html",
//                          success : function(obj){                      
//                            ipm();
//                          },
//                          error:function() {
//                              erroravanza('Linea 2 Estacion 2 Sueno Acciones');
//                            }
//                        });  
//           
//        };
  function ipm() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_ipm/fc_sin_ipm",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {
    $('#barra').css('width','28.8%');$('#barra').html('29%');$('#progreso').html('Progreso: 29%')   
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_ipm/fc_sin_ipmok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('IPM');
      }
    });
    sincroarriba = 24;
    logroblanco();
  }else{erroravanza('IPM');}
     //alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
     erroravanza('IPM');
  }
});
};
        
        //// Actualizacion 25 - 10 - 2017 logro blanco y recalculo ////////////////////
        
        function logroblanco(){
           $.ajax({
                          url: "fc_logroblanco",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    
                            $('#barra').css('width','29.2%');                     
                              $.ajax({
                            url: "fc_logroblancook",
                            type: "GET",
                            data: {},    
                            dataType: "html",
                            success : function(obj){                      
                            logmovrec10();
                            },
                            error:function() {
                                erroravanza('Logro Blanco');
                              }
                          });
                          },
                          error:function() {
                              erroravanza('Logro Blanco');
                            }
                        });  
           
        };
        function logmovrec10(){
           $.ajax({
                          url: "fc_logmovrec10",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $('#barra').css('width','29.6%');                       
                            $.ajax({
                          url: "fc_logmovrec10ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          logmovrec11();
                          },
                          error:function() {
                              erroravanza('Logro 10 Movimiento Recalculo');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Logro 10 Movimiento Recalculo');
                            }
                        });  
           
        };
        function logmovrec11(){
           $.ajax({
                          url: "fc_logmovrec11",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){
                            $('#barra').css('width','30.0%'); $('#barra').html('30%');$('#progreso').html('Progreso: 30%')                        
                            $.ajax({
                          url: "fc_logmovrec11ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          logmovrec12();
                          },
                          error:function() {
                              erroravanza('Logro 11 Movimiento Recalculo');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Logro 11 Movimiento Recalculo');
                            }
                        });  
           
        };
        function logmovrec12(){
           $.ajax({
                          url: "fc_logmovrec12",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   
                            $('#barra').css('width','30.4%');                      
                            $.ajax({
                          url: "fc_logmovrec12ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          sincroarriba = 25;                            
                          logmovrec13();
                          },
                          error:function() {
                            erroravanza('Logro 12 Movimiento Recalculo');
                            }
                        });  
                          },
                          error:function() {
                            erroravanza('Logro 12 Movimiento Recalculo');
                            }
                        });  
           
        };
        function logmovrec13(){
           $.ajax({
                          url: "fc_logmovrec13",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ 
                            $('#barra').css('width','30.8%');  $('#barra').html('31%');$('#progreso').html('Progreso: 31%')                      
                            $.ajax({
                          url: "fc_logmovrec13ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          logmovrec2();
                          },
                          error:function() {
                              erroravanza('Logro 13 Movimiento Recalculo');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Logro 13 Movimiento Recalculo');
                            }
                        });  
           
        };
        function logmovrec2(){
           $.ajax({
                          url: "fc_logmovrec2",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){
                            $('#barra').css('width','31.2%');                         
                            $.ajax({
                          url: "fc_logmovrec2ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          logmovrec22();
                          },
                          error:function() {
                             erroravanza('Logro 2 Movimiento Recalculo');
                            }
                        });  
                          },
                          error:function() {
                             erroravanza('Logro 2 Movimiento Recalculo');
                            }
                        });  
           
        };
        function logmovrec22(){
           $.ajax({
                          url: "fc_logmovrec22",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){
                            $('#barra').css('width','32.0%'); $('#barra').html('32%');$('#progreso').html('Progreso: 32%')                     
                            $.ajax({
                          url: "fc_logmovrec22ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          sincroarriba = 26;                                
                          logmovrec23();
                          },
                          error:function() {
                              erroravanza('Logro 22 Movimiento Recalculo');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Logro 22 Movimiento Recalculo');
                            }
                        });  
           
        };
        function logmovrec23(){
           $.ajax({
                          url: "fc_logmovrec23",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    
                            $('#barra').css('width','32.0%');                  
                            $.ajax({
                          url: "fc_logmovrec23ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          logmovrec3();
                          },
                          error:function() {
                             erroravanza('Logro 23 Movimiento Recalculo');
                            }
                        });  
                          },
                          error:function() {
                             erroravanza('Logro 23 Movimiento Recalculo');
                            }
                        });  
           
        };
        function logmovrec3(){
           $.ajax({
                          url: "fc_logmovrec3",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','32.5%');                     
                            $.ajax({
                          url: "fc_logmovrec3ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          logmovrec5();
                          },
                          error:function() {
                              erroravanza('Logro 3 Movimiento Recalculo');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Logro 3 Movimiento Recalculo');
                            }
                        });  
           
        };
        function logmovrec5(){
           $.ajax({
                          url: "fc_logmovrec5",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','33.0%');  $('#barra').html('33%');$('#progreso').html('Progreso: 33%')                  
                            $.ajax({
                          url: "fc_logmovrec5ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          sincroarriba = 27;                                
                          logmovrec7();
                          },
                          error:function() {
                             erroravanza('Logro 5 Movimiento Recalculo');
                            }
                        });  
                          },
                          error:function() {
                             erroravanza('Logro 5 Movimiento Recalculo');
                            }
                        });  
           
        };
        function logmovrec7(){
           $.ajax({
                          url: "fc_logmovrec7",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','33.5%');                    
                            $.ajax({
                          url: "fc_logmovrec7ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          logmovrec8();
                          },
                          error:function() {
                              erroravanza('Logro 7 Movimiento Recalculo');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Logro 7 Movimiento Recalculo');
                            }
                        });  
           
        };
        function logmovrec8(){
           $.ajax({
                          url: "fc_logmovrec8",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','34.0%'); $('#barra').html('34%');$('#progreso').html('Progreso: 34%')                   
                            $.ajax({
                          url: "fc_logmovrec8ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          logmovrec9();
                          },
                          error:function() {
                            erroravanza('Logro 8 Movimiento Recalculo');
                            }
                        });  
                          },
                          error:function() {
                            erroravanza('Logro 8 Movimiento Recalculo');
                            }
                        });  
           
        };
        function logmovrec9(){
           $.ajax({
                          url: "fc_logmovrec9",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','34.5%');                     
                            $.ajax({
                          url: "fc_logmovrec9ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          sincroarriba = 28;                                
                          privacion1();
                          },
                          error:function() {
                             erroravanza('Logro 9 Movimiento Recalculo');
                            }
                        });  
                          },
                          error:function() {
                             erroravanza('Logro 9 Movimiento Recalculo');
                            }
                        });  
           
        };
        ////////////////////////Sincronizacion privaciones //////////////////////////////////
        
  function privacion1() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion1/fc_sin_privacion1",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) { $('#barra').css('width','35.0%');$('#barra').html('35%');$('#progreso').html('Progreso: 35%')
    if( obj === ''){
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion1/fc_sin_privacion1ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Privacion 1');
      }
    });
    privacion2();
  }else{erroravanza('Privacion 1');}
     //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Privacion 1');
  }
});
};

  function privacion2() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion2/fc_sin_privacion2",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','36.0%');$('#barra').html('36%');$('#progreso').html('Progreso: 36%')
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion2/fc_sin_privacion2ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Privacion 2');
      }
    });
    privacion3();
  }else{erroravanza('Privacion 2');}
     //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Privacion 2');
  }
});
};

  function privacion3() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion3/fc_sin_privacion3",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','37.0%');$('#barra').html('37%');$('#progreso').html('Progreso: 37%')
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion3/fc_sin_privacion3ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Privacion 3');
      }
    });
    sincroarriba = 29;
        privacion4();
      }else{erroravanza('Privacion 3');}
     //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Privacion 3');
  }
});
};

  function privacion4() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion4/fc_sin_privacion4",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','38.0%');$('#barra').html('38%');$('#progreso').html('Progreso: 38%')
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion4/fc_sin_privacion4ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Privacion 4');
      }
    });
    privacion5();
  }else{erroravanza('Privacion 4');}
     //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Privacion 4');
  }
});
};

  function privacion5() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion5/fc_sin_privacion5",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','39.0%');$('#barra').html('39%');$('#progreso').html('Progreso: 39%')
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion5/fc_sin_privacion5ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Privacion 5');
      }
    });
    privacion6();
  }else{erroravanza('Privacion 5');}
     //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Privacion 5');
  }
});
};

  function privacion6() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion6/fc_sin_privacion6",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','40.0%');$('#barra').html('40%');$('#progreso').html('Progreso: 40%')
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion6/fc_sin_privacion6ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Privacion 6');
      }
    });
    sincroarriba = 30;
        privacion7();
      }else{erroravanza('Privacion 6');}
     //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Privacion 6');
  }
});
};

  function privacion7() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion7/fc_sin_privacion7",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','41.0%');$('#barra').html('41%');$('#progreso').html('Progreso: 41%')
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion7/fc_sin_privacion7ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Privacion 7');
      }
    });
    privacion8();
  }else{erroravanza('Privacion 7');}
     //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Privacion 7');
  }
});
};

  function privacion8() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion8/fc_sin_privacion8",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','42.0%');$('#barra').html('42%');$('#progreso').html('Progreso: 42%')
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion8/fc_sin_privacion8ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Privacion 8');
      }
    });
    privacion9();
  }else{erroravanza('Privacion 8');}
     //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Privacion 8');
  }
});
};

  function privacion9() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion9/fc_sin_privacion9",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','43.0%');$('#barra').html('43%');$('#progreso').html('Progreso: 43%')
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion9/fc_sin_privacion9ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Privacion 9');
      }
    });
    sincroarriba = 31;
        privacion10();
      }else{erroravanza('Privacion 9');}
     //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Privacion 9');
  }
});
};

  function privacion10() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion10/fc_sin_privacion10",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','44.0%');$('#barra').html('44%');$('#progreso').html('Progreso: 44%')
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion10/fc_sin_privacion10ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Privacion 10');
      }
    });
    privacion11();
  }else{erroravanza('Privacion 10');}
     //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Privacion 10');
  }
});
};

  function privacion11() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion11/fc_sin_privacion11",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','45.8%');$('#barra').html('45%');$('#progreso').html('Progreso: 45%')
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion11/fc_sin_privacion11ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Privacion 11');
      }
    });
    privacion12();
  }else{erroravanza('Privacion 11');}
     //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Privacion 11');
  }
});
};

  function privacion12() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion12/fc_sin_privacion12",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','46.2%');$('#barra').html('46%');$('#progreso').html('Progreso: 46%')
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion12/fc_sin_privacion12ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Privacion 12');
      }
    });
    sincroarriba = 32;
        privacion13();
      }else{erroravanza('Privacion 12');}
     //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Privacion 12');
  }
});
};

  function privacion13() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion13/fc_sin_privacion13",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','46.6%');
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion13/fc_sin_privacion13ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Privacion 13');
      }
    });
    privacion14();
  }else{erroravanza('Privacion 13');}
     //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Privacion 13');
  }
});
};

  function privacion14() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion14/fc_sin_privacion14",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','47.0%');$('#barra').html('47%');$('#progreso').html('Progreso: 47%')
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion14/fc_sin_privacion14ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Privacion 14');
      }
    });
    privacion15();
    }else{erroravanza('Privacion 14');}
     //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Privacion 14');
  }
});
};

  function privacion15() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion15/fc_sin_privacion15",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','47.4%');
    if( obj === ''){
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion15/fc_sin_privacion15ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Privacion 15');
      }
    });
    sincroarriba = 33;
        privacion16();
      }else{erroravanza('Privacion 15');}
     //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Privacion 15');
  }
});
};

  function privacion16() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion16/fc_sin_privacion16",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','47.8%');$('#barra').html('48%');$('#progreso').html('Progreso: 48%')
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_privacion16/fc_sin_privacion16ok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Privacion 16');
      }
    });
    sincroarriba = 34;
        avanza();
        pasos();
      }else{erroravanza('Privacion 16');}
     //alert('Sin ok');
  },
  error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Privacion 16');
  }
});
};


      
         /////////////////////////////Sincronizacion otras tablas/////////////////////
     ////////////////////////pasosestado,estacionestado,capacidades,actualizacion///////////////
        function pasos(){ // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_pasos/fc_sin_pasos",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','48.2%');
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_pasos/fc_sin_pasosok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Protocolo pasos estado');
      }
    });
    estacion();
  }else{erroravanza('Protocolo pasos estado');}
    // alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Protocolo pasos estado');
  }
});
};
		
		
 function estacion() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_estacion/fc_sin_estacion",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','48.6%');
    if( obj === ''){ 
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_estacion/fc_sin_estacionok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Protocolo estacion estado');
      }
    });
    capacidades();
  }else{erroravanza('Protocolo estacion estado');}
    // alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Protocolo estacion estado');
  }
});
};

  function capacidades() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_capacidades/fc_sin_capacidades",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','49.0%');$('#barra').html('49%');$('#progreso').html('Progreso: 49%')
    //alert(obj);
    if( obj === ''){
    /*
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_capacidades/fc_sin_capacidadesok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        // erroravanza('Capacidades');
      }
    }); */
    sincroarriba = 35;
    estacionh();
    // alert('Sin ok');
    }else{erroravanza('Capacidades');}
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
     erroravanza('Capacidades');
  }
});
};
        
  function estacionh(){ // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_estacionh/fc_sin_estacionh",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','49.4%');
    //alert(obj);
    if( obj === ''){
    
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_estacionh/fc_sin_estacionhok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Historico estacion estado');
      }
    }); 
    integrantes();
    // alert('Sin ok');
    }else{erroravanza('Historico estacion estado');}
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
     erroravanza('Historico estacion estado');
  }
});
};
        function integrantes(){
           $.ajax({
                          url: "fc_sincrointegrante",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','49.8%');  $('#barra').html('50%');$('#progreso').html('Progreso: 50%')                 
                                $.ajax({
                              url: "fc_sincrointegranteok",
                              type: "GET",
                              data: {},    
                              dataType: "html",
                              success : function(obj){                      
                              hogar();
                              },
                              error:function() {
                                  erroravanza('Principal integrantes');
                                }
                            });  
                          },
                          error:function() {
                              erroravanza('Principal integrantes');
                            }
                        });  
           
        };
        function hogar(){
           $.ajax({
                          url: "fc_sincrohogar",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','50.2%');                    
                            $.ajax({
                          url: "fc_sincrohogarok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          sincroarriba = 36;              
                          logrosfolios();
                          },
                          error:function() {
                              erroravanza('Principal hogar');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Principal hogar');
                            }
                        });  
           
        };
        function logrosfolios(){
           $.ajax({
                          url: "fc_sincrofolioslogros",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','50.6%');                    
                            $.ajax({
                          url: "fc_sincrofolioslogrosok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          actualizacion();
                          },
                          error:function() {
                              erroravanza('Folios con logros');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Folios con logros');
                            }
                        });  
           
        };
		
        
  function actualizacion() { // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_actualizacion/fc_sin_actualizacion",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','51.0%');$('#barra').html('51%');$('#progreso').html('Progreso: 51%')
    //alert(obj);
    if( obj === ''){
    
    c1p1ap12();
    // alert('Sin ok');
    }else{erroravanza('Actualizacion');}
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
    erroravanza('Actualizacion');
  }
});
};

         function c1p1ap12(){
           $.ajax({
                          url: "fc_sincroc1p1ap12",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','51.0%');                     
                            $.ajax({
                          url: "fc_sincroc1p1ap12ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          sincroarriba = 37;               
                          historicoactivacioni();
                          },
                          error:function() {
                              erroravanza('Tabla c1p1ap12');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Tabla c1p1ap12');
                            }
                        });  
           
        };
        
//        function capitulo1l2e1(){
//           $.ajax({
//                          url: "fc_sincrocapitulo1l2e1",
//                          type: "GET",
//                          data: {},    
//                          dataType: "html",
//                          success : function(obj){                      
//                           
//                            linea2e1cualidadesh();
//                            
//                          },
//                          error:function() {
//                              erroravanza('Capitulo 1 Linea 2 Estacion 1');
//                            }
//                        });  
//           
//        };
//        
//        function linea2e1cualidadesh(){
//           $.ajax({
//                          url: "fc_sincrolinea2e1cualidadesh",
//                          type: "GET",
//                          data: {},    
//                          dataType: "html",
//                          success : function(obj){                      
//                           
//                            linea2e1cualidadesi();
//                            
//                          },
//                          error:function() {
//                              erroravanza('Linea 2 Estacion 1 Cualidades Hogar');
//                            }
//                        });  
//           
//        };
//        
//        function linea2e1cualidadesi(){
//           $.ajax({
//                          url: "fc_sincrolinea2e1cualidadesi",
//                          type: "GET",
//                          data: {},    
//                          dataType: "html",
//                          success : function(obj){                      
//                           
//                           historicoactivacioni();
//                            
//                          },
//                          error:function() {
//                              erroravanza('Linea 2 Estacion 1 Cualidades Integrantes');
//                            }
//                        });  
//           
//        };
        function historicoactivacioni(){
           $.ajax({
                          url: "fc_sincrohistoricoactivacioni",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','51.4%');                     
                            $.ajax({
                          url: "fc_sincrohistoricoactivacioniok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          hfprocedencia();
                          },
                          error:function() {
                              erroravanza('Linea 2 Estacion 1 Cualidades Integrantes');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Linea 2 Estacion 1 Cualidades Integrantes');
                            }
                        });  
           
        };
        
        /////////////////////////////////////Sincronizacion estacion 0 ////////////////////////////////
         function hfprocedencia(){
           $.ajax({
                          url: "fc_hfprocedencia",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','51.8%');   $('#barra').html('52%');$('#progreso').html('Progreso: 52%')                
                            $.ajax({
                          url: "fc_hfprocedenciaok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          hflogros();
                          },
                          error:function() {
                              erroravanza('Procedencia Estacion Cero');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Procedencia Estacion Cero');
                            }
                        });  
           
        };
        function hflogros(){
           $.ajax({
                          url: "fc_hflogros",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','52.2%');                     
                            $.ajax({
                          url: "fc_hflogrosok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          sincroarriba = 38;                
                          hfcostumbres();
                          },
                          error:function() {
                              erroravanza('Logros Estacion Cero');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Logros Estacion Cero');
                            }
                        });  
           
        };
        function hfcostumbres(){
           $.ajax({
                          url: "fc_hfcostumbres",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','52.6%');                     
                            $.ajax({
                          url: "fc_hfcostumbresok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          hfconformacion();
                          },
                          error:function() {
                              erroravanza('Costumbres Estacion Cero');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Costumbres Estacion Cero');
                            }
                        });  
           
        };
        function hfconformacion(){
           $.ajax({
                          url: "fc_hfconformacion",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','53.0%');   $('#barra').html('53%');$('#progreso').html('Progreso: 53%')                
                            $.ajax({
                          url: "fc_hfconformacionok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          facttscual1();
                          },
                          error:function() {
                              erroravanza('Conformacion Estacion Cero');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Conformacion Estacion Cero');
                            }
                        });  
           
        };
        function facttscual1(){
           $.ajax({
                          url: "fc_facttscual1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','53.4%');                    
                            $.ajax({
                          url: "fc_facttscual1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          sincroarriba = 39;                    
                          facttfcual1();
                          },
                          error:function() {
                              erroravanza('facttscual1 Estacion Cero');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('facttscual1 Estacion Cero');
                            }
                        });  
           
        };
        function facttfcual1(){
           $.ajax({
                          url: "fc_facttfcual1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','53.8%'); $('#barra').html('54%');$('#progreso').html('Progreso: 54%')                    
                            $.ajax({
                          url: "fc_facttfcual1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          facttecual1();
                          },
                          error:function() {
                              erroravanza('facttfcual1 Estacion Cero');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('facttfcual1 Estacion Cero');
                            }
                        });  
           
        };
        function facttecual1(){
           $.ajax({
                          url: "fc_facttecual1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','54.2%');                    
                            $.ajax({
                          url: "fc_facttecual1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          factiscual1();
                          },
                          error:function() {
                              erroravanza('facttecual1 Estacion Cero');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('facttecual1 Estacion Cero');
                            }
                        });  
           
        };
        function factiscual1(){
           $.ajax({
                          url: "fc_factiscual1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','54.6%');                     
                            $.ajax({
                          url: "fc_factiscual1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          sincroarriba = 40;                     
                          factifcual1();
                          },
                          error:function() {
                              erroravanza('factiscual1 Estacion Cero');
                            }
                        }); 
                          },
                          error:function() {
                              erroravanza('factiscual1 Estacion Cero');
                            }
                        });  
           
        };
        function factifcual1(){
           $.ajax({
                          url: "fc_factifcual1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){$('#barra').css('width','55.0%');  $('#barra').html('55%');$('#progreso').html('Progreso: 55%')                    
                            $.ajax({
                          url: "fc_factifcual1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          factiecual1();
                          },
                          error:function() {
                              erroravanza('factifcual1 Estacion Cero');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('factifcual1 Estacion Cero');
                            }
                        });  
           
        };
        function factiecual1(){
           $.ajax({
                          url: "fc_factiecual1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','55.4%');                     
                            $.ajax({
                          url: "fc_factiecual1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          estacioncerocea();
                          },
                          error:function() {
                              erroravanza('factifcual1 Estacion Cero');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('factifcual1 Estacion Cero');
                            }
                        });  
           
        };
        function estacioncerocea(){
           $.ajax({
                          url: "fc_estacioncerocea",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','55.8%'); $('#barra').html('56%');$('#progreso').html('Progreso: 56%')                   
                            $.ajax({
                          url: "fc_estacionceroceaok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          sincroarriba = 41;                         
                          crisisscual1();
                          },
                          error:function() {
                              erroravanza('estacioncerocea Estacion Cero');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('estacioncerocea Estacion Cero');
                            }
                        });  
           
        };
        function crisisscual1(){
           $.ajax({
                          url: "fc_crisisscual1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','56.2%');                    
                            $.ajax({
                          url: "fc_crisisscual1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          crisisfcual1();
                          },
                          error:function() {
                              erroravanza('crisisscual1 Estacion Cero');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('crisisscual1 Estacion Cero');
                            }
                        });  
           
        };
        function crisisfcual1(){
           $.ajax({
                          url: "fc_crisisfcual1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','56.6%');                    
                            $.ajax({
                          url: "fc_crisisfcual1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          crisisecual1();
                          },
                          error:function() {
                              erroravanza('crisisfcual1 Estacion Cero');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('crisisfcual1 Estacion Cero');
                            }
                        });  
           
        };
        function crisisecual1(){
           $.ajax({
                          url: "fc_crisisecual1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','57.0%'); $('#barra').html('57%');$('#progreso').html('Progreso: 57%')                    
                            $.ajax({
                          url: "fc_crisisecual1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          sincroarriba = 42;                          
                          crearmetas();
                          },
                          error:function() {
                              erroravanza('crisisecual1 Estacion Cero');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('crisisecual1 Estacion Cero');
                            }
                        });  
           
        };
        function crearmetas(){
           $.ajax({
                          url: "fc_crearmetas",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','57.4%');                     
                            $.ajax({
                          url: "fc_crearmetasok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          correspautonomia();
                          },
                          error:function() {
                              erroravanza('crearmetas Estacion Cero');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('crearmetas Estacion Cero');
                            }
                        });  
           
        };
        function correspautonomia(){
           $.ajax({
                          url: "fc_correspautonomia",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','57.8%');                     
                            $.ajax({
                          url: "fc_correspautonomiaok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          eerf();
                          },
                          error:function() {
                              erroravanza('correspautonomia Estacion Cero');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('correspautonomia Estacion Cero');
                            }
                        });  
           
        };
        function eerf(){
           $.ajax({
                          url: "fc_eerf",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','58.2%');$('#barra').html('58%');$('#progreso').html('Progreso: 58%')                     
                            $.ajax({
                          url: "fc_eerfok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          sincroarriba = 43;                              
                          avanceproceso();
                          },
                          error:function() {
                              erroravanza('EERF Estacion Cero');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('EERF Estacion Cero');
                            }
                        });  
           
        };
        /////////////////////////////////////Fin Sincronizacion estacion 0 ////////////////////////////////
        
        //////////////Sincro tablas estacion 2/////////////////////////7
        
        function avanceproceso(){
           $.ajax({
                          url: "fc_avanceproceso",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','58.6%');                   
                            $.ajax({
                          url: "fc_avanceprocesook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          l2metas();
                          },
                          error:function() {
                              erroravanza('Avance Proceso');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Avance Proceso');
                            }
                        });  
           
        };
        
  function l2metas(){ // ok
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_linea2metas/fc_sin_linea2metas",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','59.2%');$('#barra').html('59%');$('#progreso').html('Progreso: 59%')
    //alert(obj);
    if( obj === ''){
    
    //Cuando termina de instar coloca el sincro en 0
    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_linea2metas/fc_sin_linea2metasok",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        //alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
         erroravanza('Metas hogar');
      }
    });
      l2acciones();
     //alert('Sin ok');
    }else{erroravanza('Metas hogar');}
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
     erroravanza('Metas hogar');
  }
});
};

        
  function l2acciones() { // ok

    $.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_l2accionesmetas/fc_sin_l2accionesmetas",
      type: "get",
      data: {},
      dataType: "json",
      success: function(obj) {$('#barra').css('width','59.6%');
        if( obj === ''){
        //Cuando termina de instar coloca el sincro en 0

        $.ajax({
          url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_l2accionesmetas/fc_sin_l2accionesmetasok",
          type: "get",
          data: {},
          dataType: "",
          success: function(obj) {
            //alert("Eliminado");
          },
          error: function(jqXHR, textStatus, errorThrown) {
            erroravanza('Acciones Metas hogar');
          }
        });

        //Cuando termina de instar coloca el sincro en 0 y llamo a los sigueintes
        sincroarriba = 44;
        casoexitoso();
      }else{erroravanza('Acciones Metas hogar');}
      },
      error: function() { //alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        erroravanza('Acciones Metas hogar');
      }
    });

  };

        
  function casoexitoso() { // ok falta bandera de los muchachos
$.ajax({
  url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_casoexitoso/fc_sin_casoexitoso",
  type: "get",
  data: {},
  dataType: "json",
  success: function(obj) {$('#barra').css('width','60.0%');$('#barra').html('60%');$('#progreso').html('Progreso: 60%')
    if( obj === ''){ correspautonomiahistorico();}else{erroravanza('Caso Exitoso');}
    //Cuando termina de instar coloca el sincro en 0
    /*$.ajax({
      url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_casoexitoso/fc_sin_casoexitosook",
      type: "get",
      data: {},
      dataType: "",
      success: function(obj) {
        alert("Eliminado");
      },
      error: function(jqXHR, textStatus, errorThrown) { alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
        // erroravanza('Caso Exitoso');
      }
    });*/
    //correspautonomiahistorico();
    // alert('Sin ok');
  },
  error: function() {// alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
     erroravanza('Caso Exitoso');
  }
});
};

       
        function correspautonomiahistorico(){
           $.ajax({
                          url: "fc_correspautonomiahistorico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','60.4%');                   
                                $.ajax({
                              url: "fc_correspautonomiahistoricook",
                              type: "GET",
                              data: {},    
                              dataType: "html",
                              success : function(obj){                      
                              logromovimientocf();
                              },
                              error:function() {
                                  erroravanza('Historico corresponsabilidad');
                                }
                            });  
                          },
                          error:function() {
                              erroravanza('Historico corresponsabilidad');
                            }
                        });  
           
        };
        
        function logromovimientocf(){
           $.ajax({
                          url: "fc_logromovimientocf",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','60.8%');$('#barra').html('61%');$('#progreso').html('Progreso: 61%')                     
                            $.ajax({
                          url: "fc_logromovimientocfok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          sincroarriba = 45;                                                              
                          protocoloinicioestacion();
                          },
                          error:function() {
                              erroravanza('Logro Movimiento CF');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Logro Movimiento CF');
                            }
                        });  
           
        };
        
        function protocoloinicioestacion(){
           $.ajax({
                          url: "fc_protocoloinicioestacion",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','61.2%');                     
                            $.ajax({
                          url: "fc_protocoloinicioestacionok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          condicionnecesaria();
                          },
                          error:function() {
                              erroravanza('Protocolo Inicio Estacion');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Protocolo Inicio Estacion');
                            }
                        });  
           
        };
        function condicionnecesaria(){
           $.ajax({
                          url: "fc_condicionnecesaria",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','61.6%');                     
                            $.ajax({
                          url: "fc_condicionnecesariaok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          tablaingresos();
                          },
                          error:function() {
                              erroravanza('Condicion Necesaria');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Condicion Necesaria');
                            }
                        });  
           
        };
        function tablaingresos(){
           $.ajax({
                          url: "fc_tablaingresos",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','62.0%');  $('#barra').html('62%');$('#progreso').html('Progreso: 62%')                  
                            $.ajax({
                          url: "fc_tablaingresosok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          sincroarriba = 46;                           
                          privacionesintermedia1();
                          },
                          error:function() {
                              erroravanza('Tabla Ingresos');
                            }
                        });  
                          },
                          error:function() {
                              erroravanza('Tabla Ingresos');
                            }
                        });  
           
        };
//        function privacionesintermedia(){
//           $.ajax({
//                          url: "fc_privacionesintermedia",
//                          type: "GET",
//                          data: {},    
//                          dataType: "html",
//                          success : function(obj){                      
//                          tablasintermediasubida();
//                          },
//                          error:function() {
//                              erroravanza('Tabla subida Intermedia');
//                            }
//                        });  
//           
//        };
        function privacionesintermedia1(){
           $.ajax({
                          url: "fc_privacionesintermedia1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','62.4%');                     
                            $.ajax({
                          url: "fc_privacionesintermedia1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          privacionesintermedia2();
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 1'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 1'); }
                        });  
        };        
        function privacionesintermedia2(){
           $.ajax({
                          url: "fc_privacionesintermedia2",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','62.8%');                     
                            $.ajax({
                          url: "fc_privacionesintermedia2ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          privacionesintermedia3();
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 2'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 2'); }
                        });  
        };
        function privacionesintermedia3(){
           $.ajax({
                          url: "fc_privacionesintermedia3",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){$('#barra').css('width','63.2%');$('#barra').html('63%');$('#progreso').html('Progreso: 63%')
                            $.ajax({
                          url: "fc_privacionesintermedia3ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){
                          sincroarriba = 47;                               
                          privacionesintermedia4();
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 3'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 3'); }
                        });  
        };
        function privacionesintermedia4(){
           $.ajax({
                          url: "fc_privacionesintermedia4",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','63.6%');                    
                            $.ajax({
                          url: "fc_privacionesintermedia4ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          privacionesintermedia5();
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 4'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 4'); }
                        });  
        };
        function privacionesintermedia5(){
           $.ajax({
                          url: "fc_privacionesintermedia5",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){$('#barra').css('width','64.0%'); $('#barra').html('64%');$('#progreso').html('Progreso: 64%')                     
                            $.ajax({
                          url: "fc_privacionesintermedia5ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          privacionesintermedia6();
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 5'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 5'); }
                        });  
        };
        function privacionesintermedia6(){
           $.ajax({
                          url: "fc_privacionesintermedia6",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','64.4%');
                            $.ajax({
                          url: "fc_privacionesintermedia6ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sincroarriba = 48;                               
                          privacionesintermedia7();
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 6'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 6'); }
                        });  
        };
        function privacionesintermedia7(){
           $.ajax({
                          url: "fc_privacionesintermedia7",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','64.8%');                    
                            $.ajax({
                          url: "fc_privacionesintermedia7ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          privacionesintermedia8();
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 7'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 7'); }
                        });  
        };
        function privacionesintermedia8(){
           $.ajax({
                          url: "fc_privacionesintermedia8",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    $('#barra').css('width','65.2%'); $('#barra').html('65%');$('#progreso').html('Progreso: 65%')                 
                            $.ajax({
                          url: "fc_privacionesintermedia8ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          privacionesintermedia9();
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 8'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 8'); }
                        });  
        };
        function privacionesintermedia9(){
           $.ajax({
                          url: "fc_privacionesintermedia9",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','65.6%');
                            $.ajax({
                          url: "fc_privacionesintermedia9ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ 
                          sincroarriba = 49;                               
                          privacionesintermedia10();
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 9'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 9'); }
                        });  
        };
        function privacionesintermedia10(){
           $.ajax({
                          url: "fc_privacionesintermedia10",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','66.0%'); $('#barra').html('66%');$('#progreso').html('Progreso: 66%')                   
                            $.ajax({
                          url: "fc_privacionesintermedia10ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          privacionesintermedia11();
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 10'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 10'); }
                        });  
        };
        function privacionesintermedia11(){
           $.ajax({
                          url: "fc_privacionesintermedia11",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','66.4%');                     
                            $.ajax({
                          url: "fc_privacionesintermedia11ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          privacionesintermedia12();
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 11'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 11'); }
                        });  
        };
        function privacionesintermedia12(){
           $.ajax({
                          url: "fc_privacionesintermedia12",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','66.8%');                   
                            $.ajax({
                          url: "fc_privacionesintermedia12ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          privacionesintermedia13();
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 12'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 12'); }
                        });  
        };
        function privacionesintermedia13(){
           $.ajax({
                          url: "fc_privacionesintermedia13",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   $('#barra').css('width','67.2%');$('#barra').html('67%');$('#progreso').html('Progreso: 67%')
                          sincroarriba = 50;                               
                          $.ajax({
                          url: "fc_privacionesintermedia13ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){   
                          sincroarriba = 50;                               
                          privacionesintermedia14();
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 13'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 13'); }
                        });  
        };
        function privacionesintermedia14(){
           $.ajax({
                          url: "fc_privacionesintermedia14",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','67.6%');                     
                            $.ajax({
                          url: "fc_privacionesintermedia14ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          privacionesintermedia15();
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 14'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 14'); }
                        });  
        };
        function privacionesintermedia15(){
           $.ajax({
                          url: "fc_privacionesintermedia15",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','68.0%'); $('#barra').html('68%');$('#progreso').html('Progreso: 68%')                    
                            $.ajax({
                          url: "fc_privacionesintermedia15ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
                          privacionesintermedia16();
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 15'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 15'); }
                        });  
        };
        function privacionesintermedia16(){
           $.ajax({
                          url: "fc_privacionesintermedia16",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','68.4%');   
                            $.ajax({
                          url: "fc_privacionesintermedia16ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){    
                          sincroarriba = 51;                               
                          privacionesintermediaipm();
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 16'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia 16'); }
                        });  
        };
        function privacionesintermediaipm(){
           $.ajax({
                          url: "fc_privacionesintermediaipm",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','68.8%');                    
                                $.ajax({
                              url: "fc_privacionesintermediaipmok",
                              type: "GET",
                              data: {},    
                              dataType: "html",
                              success : function(obj){                      
                              tablasintermediasubidac2();
                              },
                              error:function() { erroravanza('Tabla subida privacion Intermedia IPM'); }
                            }); 
                          },
                          error:function() { erroravanza('Tabla subida privacion Intermedia IPM'); }
                        });  
        };
        
        
        
        
        
        /////////////////////////////////////////////////////////////////////////////////////////////////////
        
//          function tablasintermediasubida(){
//           $.ajax({
//                          url: "fc_tablasintermediasubida",
//                          type: "GET",
//                          data: {},    
//                          dataType: "html",
//                          success : function(obj){  
//                          sincroarriba = 52;                               
//                          finsincro();
//                          },
//                          error:function() {
//                              erroravanza('Tabla Privaciones Intermedia');
//                            }
//                        });  
//           
//        };
           function tablasintermediasubidac2(){
           $.ajax({
                          url: "fc_tablasintermediasubidac2",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','69.2%');$('#barra').html('69%');$('#progreso').html('Progreso: 69%')
                            $.ajax({
                          url: "fc_tablasintermediasubidac2ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          tablasintermediasubidac5();
                          },
                          error:function() { erroravanza('Tabla Intermedia cap 2'); }
                        });
                          },
                          error:function() { erroravanza('Tabla Intermedia cap 2'); }
                        });  
           };
           function tablasintermediasubidac5(){
           $.ajax({
                          url: "fc_tablasintermediasubidac5",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','69.6%'); 
                            $.ajax({
                          url: "fc_tablasintermediasubidac5ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sincroarriba = 52;                                   
                          tablasintermediasubidac6();
                          },
                          error:function() { erroravanza('Tabla Intermedia cap 5'); }
                        }); 
                          },
                          error:function() { erroravanza('Tabla Intermedia cap 5'); }
                        });  
           };
           function tablasintermediasubidac6(){
           $.ajax({
                          url: "fc_tablasintermediasubidac6",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','70.0%');$('#barra').html('70%');$('#progreso').html('Progreso: 70%')
                            $.ajax({
                          url: "fc_tablasintermediasubidac6ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          tablasintermediasubidac7();
                          },
                          error:function() { erroravanza('Tabla Intermedia cap 6'); }
                        }); 
                          },
                          error:function() { erroravanza('Tabla Intermedia cap 6'); }
                        });  
           };
           function tablasintermediasubidac7(){
           $.ajax({
                          url: "fc_tablasintermediasubidac7",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','70.4%');
                            $.ajax({
                          url: "fc_tablasintermediasubidac7ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          tablasintermediasubidac8();
                          },
                          error:function() { erroravanza('Tabla Intermedia cap 7'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla Intermedia cap 7'); }
                        });  
           };
           function tablasintermediasubidac8(){
           $.ajax({
                          url: "fc_tablasintermediasubidac8",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_tablasintermediasubidac8ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','70.8%');
                          sincroarriba = 53;                                   
                          tablasintermediasubidac9();
                          },
                          error:function() { erroravanza('Tabla Intermedia cap 8'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla Intermedia cap 8'); }
                        });  
           };
           function tablasintermediasubidac9(){
           $.ajax({
                          url: "fc_tablasintermediasubidac9",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_tablasintermediasubidac9ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','71.2%');$('#barra').html('71%');$('#progreso').html('Progreso: 71%')
                          tablasintermediasubidac11();
                          },
                          error:function() { erroravanza('Tabla Intermedia cap 9'); }
                        }); 
                          },
                          error:function() { erroravanza('Tabla Intermedia cap 9'); }
                        });  
           };
           function tablasintermediasubidac11(){
           $.ajax({
                          url: "fc_tablasintermediasubidac11",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','71.6%');
                            $.ajax({
                          url: "fc_tablasintermediasubidac11ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          tablasintermediasubidainteg();
                          },
                          error:function() { erroravanza('Tabla Intermedia cap 11'); }
                        }); 
                          },
                          error:function() { erroravanza('Tabla Intermedia cap 11'); }
                        });  
           };
           function tablasintermediasubidainteg(){
           $.ajax({
                          url: "fc_tablasintermediasubidainteg",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','72.0%');$('#barra').html('72%');$('#progreso').html('Progreso: 72%')
                            $.ajax({
                          url: "fc_tablasintermediasubidaintegok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sincroarriba = 54;                                   
                          sincronizarsubidaintermediahistc11();
                          },
                          error:function() { erroravanza('Tabla integrantes Intermedia'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla integrantes Intermedia'); }
                        });  
           };
           ////////////////////////////////////////////////////////////////////////////////////
           function sincronizarsubidaintermediahistc11(){
           $.ajax({
                          url: "fc_sincronizarsubidaintermediahistc11",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','72.4%');
                            $.ajax({
                          url: "fc_sincronizarsubidaintermediahistc11ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sincronizarsubidaintermediahistc2();
                          },
                          error:function() { erroravanza('Tabla Intermedia historico cap 11'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla Intermedia historico cap 11'); }
                        });  
           };
           function sincronizarsubidaintermediahistc2(){
           $.ajax({
                          url: "fc_sincronizarsubidaintermediahistc2",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','72.8%'); 
                            $.ajax({
                          url: "fc_sincronizarsubidaintermediahistc2ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sincronizarsubidaintermediahistc5();
                          },
                          error:function() { erroravanza('Tabla Intermedia historico cap 2'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla Intermedia historico cap 2'); }
                        });  
           };
           function sincronizarsubidaintermediahistc5(){
           $.ajax({
                          url: "fc_sincronizarsubidaintermediahistc5",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','73.2%');$('#barra').html('73%');$('#progreso').html('Progreso: 73%')
                            $.ajax({
                          url: "fc_sincronizarsubidaintermediahistc5ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ 
                          sincroarriba = 55;
                          sincronizarsubidaintermediahistc6();
                          },
                          error:function() { erroravanza('Tabla Intermedia historico cap 5'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla Intermedia historico cap 5'); }
                        });  
           };
           function sincronizarsubidaintermediahistc6(){
           $.ajax({
                          url: "fc_sincronizarsubidaintermediahistc6",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','73.6%');
                            $.ajax({
                          url: "fc_sincronizarsubidaintermediahistc6ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sincronizarsubidaintermediahistc7();
                          },
                          error:function() { erroravanza('Tabla Intermedia historico cap 6'); }
                        }); 
                          },
                          error:function() { erroravanza('Tabla Intermedia historico cap 6'); }
                        });  
           };
           function sincronizarsubidaintermediahistc7(){
           $.ajax({
                          url: "fc_sincronizarsubidaintermediahistc7",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','74.0%');$('#barra').html('74%');$('#progreso').html('Progreso: 74%')
                            $.ajax({
                          url: "fc_sincronizarsubidaintermediahistc7ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sincronizarsubidaintermediahistc8();
                          },
                          error:function() { erroravanza('Tabla Intermedia historico cap 7'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla Intermedia historico cap 7'); }
                        });  
           };
           function sincronizarsubidaintermediahistc8(){
           $.ajax({
                          url: "fc_sincronizarsubidaintermediahistc8",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){$('#barra').css('width','74.4%');  
                            $.ajax({
                          url: "fc_sincronizarsubidaintermediahistc8ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sincroarriba = 56;    
                          sincronizarsubidaintermediahistc9();
                          },
                          error:function() { erroravanza('Tabla Intermedia historico cap 8'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla Intermedia historico cap 8'); }
                        });  
           };
           function sincronizarsubidaintermediahistc9(){
           $.ajax({
                          url: "fc_sincronizarsubidaintermediahistc9",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','74.8%');
                            $.ajax({
                          url: "fc_sincronizarsubidaintermediahistc9ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sincronizacionintegrantesintermedia_historicosub();
                          },
                          error:function() { erroravanza('Tabla Intermedia historico cap 9'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla Intermedia historico cap 9'); }
                        });  
           };
           function sincronizacionintegrantesintermedia_historicosub(){
           $.ajax({
                          url: "fc_sincronizacionintegrantesintermedia_historicosub",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','75.2%');$('#barra').html('75%');$('#progreso').html('Progreso: 75%')
                            $.ajax({
                          url: "fc_sincronizacionintegrantesintermedia_historicosubok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sp5privacion10intermediaservidor_historico();
                          },
                          error:function() { erroravanza('Tabla Intermedia integrante historico'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla Intermedia integrante historico'); }
                        });  
           };
           function sp5privacion10intermediaservidor_historico(){
           $.ajax({
                          url: "fc_sp5privacion10intermediaservidor_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','75.6%');
                            $.ajax({
                          url: "fc_sp5privacion10intermediaservidor_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ 
                          sincroarriba = 57;        
                          sp5privacion11intermediaservidor_historico();
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 10 historico'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 10 historico'); }
                        });  
           };
           function sp5privacion11intermediaservidor_historico(){
           $.ajax({
                          url: "fc_sp5privacion11intermediaservidor_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','76.0%');$('#barra').html('76%');$('#progreso').html('Progreso: 76%')
                            $.ajax({
                          url: "fc_sp5privacion11intermediaservidor_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sp5privacion12intermediaservidor_historico();
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 11 historico'); }
                        });
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 11 historico'); }
                        });  
           };
           function sp5privacion12intermediaservidor_historico(){
           $.ajax({
                          url: "fc_sp5privacion12intermediaservidor_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','76.4%');
                            $.ajax({
                          url: "fc_sp5privacion12intermediaservidor_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sp5privacion13intermediaservidor_historico();
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 12 historico'); }
                        });
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 12 historico'); }
                        });  
           };
           function sp5privacion13intermediaservidor_historico(){
           $.ajax({
                          url: "fc_sp5privacion13intermediaservidor_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','76.8%');
                            $.ajax({
                          url: "fc_sp5privacion13intermediaservidor_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sp5privacion14intermediaservidor_historico();
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 13 historico'); }
                        }); 
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 13 historico'); }
                        });  
           };
           function sp5privacion14intermediaservidor_historico(){
           $.ajax({
                          url: "fc_sp5privacion14intermediaservidor_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){$('#barra').css('width','77.2%');$('#barra').html('77%');$('#progreso').html('Progreso: 77%')
                            $.ajax({
                          url: "fc_sp5privacion14intermediaservidor_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){
                          sincroarriba = 58;            
                          sp5privacion15intermediaservidor_historico();
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 14 historico'); }
                        }); 
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 14 historico'); }
                        });  
           };
           function sp5privacion15intermediaservidor_historico(){
           $.ajax({
                          url: "fc_sp5privacion15intermediaservidor_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','77.6%');
                            $.ajax({
                          url: "fc_sp5privacion15intermediaservidor_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sp5privacion16intermediaservidor_historico();
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 15 historico'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 15 historico'); }
                        });  
           };
           function sp5privacion16intermediaservidor_historico(){
           $.ajax({
                          url: "fc_sp5privacion16intermediaservidor_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','78.0%');$('#barra').html('78%');$('#progreso').html('Progreso: 78%') 
                            $.ajax({
                          url: "fc_sp5privacion16intermediaservidor_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sp5privacion1intermediaservidor_historico();
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 16 historico'); }
                        });
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 16 historico'); }
                        });  
           };
           function sp5privacion1intermediaservidor_historico(){
           $.ajax({
                          url: "fc_sp5privacion1intermediaservidor_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','78.4%');
                            $.ajax({
                          url: "fc_sp5privacion1intermediaservidor_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sp5privacion2intermediaservidor_historico();
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 1 historico'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 1 historico'); }
                        });  
           };
           function sp5privacion2intermediaservidor_historico(){
           $.ajax({
                          url: "fc_sp5privacion2intermediaservidor_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','78.8%'); 
                            $.ajax({
                          url: "fc_sp5privacion2intermediaservidor_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sincroarriba = 59;     
                          sp5privacion3intermediaservidor_historico();
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 2 historico'); }
                        });
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 2 historico'); }
                        });  
           };
           function sp5privacion3intermediaservidor_historico(){
           $.ajax({
                          url: "fc_sp5privacion3intermediaservidor_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','79.2%');$('#barra').html('79%');$('#progreso').html('Progreso: 79%')
                            $.ajax({
                          url: "fc_sp5privacion3intermediaservidor_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sp5privacion4intermediaservidor_historico();
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 3 historico'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 3 historico'); }
                        });  
           };
           function sp5privacion4intermediaservidor_historico(){
           $.ajax({
                          url: "fc_sp5privacion4intermediaservidor_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','79.6%');$('#barra').html('80%');$('#progreso').html('Progreso: 80%')
                            $.ajax({
                          url: "fc_sp5privacion4intermediaservidor_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            sp5ipmintermediaservidor_historico();
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 4 historico'); }
                        }); 
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 4 historico'); }
                        });  
           };
           function sp5ipmintermediaservidor_historico(){
           $.ajax({
                          url: "fc_sp5ipmintermediaservidor_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','81.0%'); $('#barra').html('81%');$('#progreso').html('Progreso: 81%')
                            $.ajax({
                          url: "fc_sp5ipmintermediaservidor_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            sp5privacion5intermediaservidor_historico();
                          },
                          error:function() { erroravanza('Tabla IPM Intermedia historico'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla IPM Intermedia historico'); }
                        });  
           };
           function sp5privacion5intermediaservidor_historico(){
           $.ajax({
                          url: "fc_sp5privacion5intermediaservidor_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','81.4%');
                            $.ajax({
                          url: "fc_sp5privacion5intermediaservidor_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sincroarriba = 60;         
                          sp5privacion6intermediaservidor_historico();
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 5 historico'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 5 historico'); }
                        });  
           };
           function sp5privacion6intermediaservidor_historico(){
           $.ajax({
                          url: "fc_sp5privacion6intermediaservidor_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_sp5privacion6intermediaservidor_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','81.8%');
                          sp5privacion7intermediaservidor_historico();
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 6 historico'); }
                        }); 
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 6 historico'); }
                        });  
           };
           function sp5privacion7intermediaservidor_historico(){
           $.ajax({
                          url: "fc_sp5privacion7intermediaservidor_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','82.2%'); $('#barra').html('82%');$('#progreso').html('Progreso: 82%')
                            $.ajax({
                          url: "fc_sp5privacion7intermediaservidor_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sp5privacion8intermediaservidor_historico();
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 7 historico'); }
                        }); 
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 7 historico'); }
                        });  
           };
           function sp5privacion8intermediaservidor_historico(){
           $.ajax({
                          url: "fc_sp5privacion8intermediaservidor_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','82.6%');
                            $.ajax({
                          url: "fc_sp5privacion8intermediaservidor_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sp5privacion9intermediaservidor_historico();
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 8 historico'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 8 historico'); }
                        });  
           };
           function sp5privacion9intermediaservidor_historico(){
           $.ajax({
                          url: "fc_sp5privacion9intermediaservidor_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','83.0%');$('#barra').html('83%');$('#progreso').html('Progreso: 83%')
                            $.ajax({
                          url: "fc_sp5privacion9intermediaservidor_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sincroarriba = 61;             
                          sincronizarprotocoloestacionestado_intermedia_historico();
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 9 historico'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla Intermedia privacion 9 historico'); }
                        });  
           };
           function sincronizarprotocoloestacionestado_intermedia_historico(){
           $.ajax({
                          url: "fc_sincronizarprotocoloestacionestado_intermedia_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','83.4%'); 
                            $.ajax({
                          url: "fc_sincronizarprotocoloestacionestado_intermedia_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          sincronizarprotocolopasosestado_intermedia_historico();
                          },
                          error:function() { erroravanza('Tabla protocolo estacion servidor hostorico'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla protocolo estacion servidor hostorico'); }
                        });  
           };
           function sincronizarprotocolopasosestado_intermedia_historico(){
           $.ajax({
                          url: "fc_sincronizarprotocolopasosestado_intermedia_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','83.8%');
                            $.ajax({
                          url: "fc_sincronizarprotocolopasosestado_intermedia_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                          encuadreservidor();
                          },
                          error:function() { erroravanza('Tabla protocolo pasos estado servidor hostorico'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla protocolo pasos estado servidor hostorico'); }
                        });  
           };
		   
   		   function encuadreservidor(){
           $.ajax({
                          url: "fc_encuadreservidor",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','84.2%');$('#barra').html('84%');$('#progreso').html('Progreso: 84%')
                            $.ajax({
                          url: "fc_encuadreservidorok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            informaciongeneralvisitasservidor();
                          },
                          error:function() { erroravanza('Tabla visita Encuadre'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla visita Encuadre'); }
                        });  
           };


       function informaciongeneralvisitasservidor(){
           $.ajax({
                          url: "fc_informaciongeneralvisitasservidor",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','84.6%'); 
                            $.ajax({
                          url: "fc_informaciongeneralvisitasservidorok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            informaciongeneralvisitas_historico();
                          },
                          error:function() { erroravanza('Tabla validación visita Encuadre'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación visita Encuadre'); }
                        });  
           };

           function informaciongeneralvisitas_historico(){
           $.ajax({
                          url: "fc_informaciongeneralvisitas_historico",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','85.0%');$('#barra').html('85%');$('#progreso').html('Progreso: 85%')
                            $.ajax({
                          url: "fc_informaciongeneralvisitas_historicook",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            informaciongeneralvisitas_ae();
                          },
                          error:function() { erroravanza('Tabla validación visita Encuadre'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación visita Encuadre'); }
                        });  
           };
   
           function informaciongeneralvisitas_ae(){
           $.ajax({
                          url: "fc_informaciongeneralvisitas_ae",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','85.4%'); 
                            $.ajax({
                          url: "fc_informaciongeneralvisitas_aeok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            ipmintermediaLCV1();
                          },
                          error:function() { erroravanza('Tabla validación visita Encuadre'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación visita Encuadre'); }
                        });  
           };



        /////////////////////Inicio Sincronizacion arriba cierre///////////////////////////////////////

        function ipmintermediaLCV1(){
           $.ajax({
                          url: "fc_ipmintermediaLCV1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','85.8%');
                            $.ajax({
                          url: "fc_ipmintermediaLCV1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            privacion16intermediaLCV1();
                          },
                          error:function() { erroravanza('Tabla validación ipmintermediaLCV1'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación ipmintermediaLCV1'); }
                        });  
           };

           function privacion16intermediaLCV1(){
           $.ajax({
                          url: "fc_privacion16intermediaLCV1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','86.2%');$('#barra').html('86%');$('#progreso').html('Progreso: 86%')
                            $.ajax({
                          url: "fc_privacion16intermediaLCV1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            privacion15intermediaLCV1();
                          },
                          error:function() { erroravanza('Tabla validación privacion16intermediaLCV1'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación privacion16intermediaLCV1'); }
                        });  
           };

           function privacion15intermediaLCV1(){
           $.ajax({
                          url: "fc_privacion15intermediaLCV1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','86.6%');
                            $.ajax({
                          url: "fc_privacion15intermediaLCV1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            privacion14intermediaLCV1();
                          },
                          error:function() { erroravanza('Tabla validación privacion15intermediaLCV1'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación privacion15intermediaLCV1'); }
                        });  
           };


           function privacion14intermediaLCV1(){
           $.ajax({
                          url: "fc_privacion14intermediaLCV1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','87.0%');$('#barra').html('87%');$('#progreso').html('Progreso: 87%')
                            $.ajax({
                          url: "fc_privacion14intermediaLCV1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            privacion13intermediaLCV1();
                          },
                          error:function() { erroravanza('Tabla validación privacion14intermediaLCV1'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación privacion14intermediaLCV1'); }
                        });  
           };


           function privacion13intermediaLCV1(){
           $.ajax({
                          url: "fc_privacion13intermediaLCV1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_privacion13intermediaLCV1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','88.4%'); $('#barra').html('88%');$('#progreso').html('Progreso: 88%')
                            privacion12intermediaLCV1();
                          },
                          error:function() { erroravanza('Tabla validación privacion13intermediaLCV1'); }
                        }); 
                          },
                          error:function() { erroravanza('Tabla validación privacion13intermediaLCV1'); }
                        });  
           };

           function privacion12intermediaLCV1(){
           $.ajax({
                          url: "fc_privacion12intermediaLCV1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_privacion12intermediaLCV1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','88.8%'); 
                            privacion11intermediaLCV1();
                          },
                          error:function() { erroravanza('Tabla validación privacion12intermediaLCV1'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación privacion12intermediaLCV1'); }
                        });  
           };

           function privacion11intermediaLCV1(){
           $.ajax({
                          url: "fc_privacion11intermediaLCV1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_privacion11intermediaLCV1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','89.2%');$('#barra').html('89%');$('#progreso').html('Progreso: 89%')
                            privacion10intermediaLCV1();
                          },
                          error:function() { erroravanza('Tabla validación privacion11intermediaLCV1'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación privacion11intermediaLCV1'); }
                        });  
           };


           function privacion10intermediaLCV1(){
           $.ajax({
                          url: "fc_privacion10intermediaLCV1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','89.6%');
                            $.ajax({
                          url: "fc_privacion10intermediaLCV1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            privacion9intermediaLCV1();
                          },
                          error:function() { erroravanza('Tabla validación privacion10intermediaLCV1'); }
                        }); 
                          },
                          error:function() { erroravanza('Tabla validación privacion10intermediaLCV1'); }
                        });  
           };

           function privacion9intermediaLCV1(){
           $.ajax({
                          url: "fc_privacion9intermediaLCV1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_privacion9intermediaLCV1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','90.0%');$('#barra').html('90%');$('#progreso').html('Progreso: 90%')
                            privacion8intermediaLCV1();
                          },
                          error:function() { erroravanza('Tabla validación privacion9intermediaLCV1'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación privacion9intermediaLCV1'); }
                        });  
           };

           function privacion8intermediaLCV1(){
           $.ajax({
                          url: "fc_privacion8intermediaLCV1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_privacion8intermediaLCV1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','90.4%'); 
                            privacion7intermediaLCV1();
                          },
                          error:function() { erroravanza('Tabla validación privacion8intermediaLCV1'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación privacion8intermediaLCV1'); }
                        });  
           };


           function privacion7intermediaLCV1(){
           $.ajax({
                          url: "fc_privacion7intermediaLCV1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_privacion7intermediaLCV1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','90.8%'); 
                            privacion6intermediaLCV1();
                          },
                          error:function() { erroravanza('Tabla validación privacion7intermediaLCV1'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación privacion7intermediaLCV1'); }
                        });  
           };
           

           function privacion6intermediaLCV1(){
           $.ajax({
                          url: "fc_privacion6intermediaLCV1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_privacion6intermediaLCV1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','91.2%');$('#barra').html('91%');$('#progreso').html('Progreso: 91%')
                            privacion5intermediaLCV1();
                          },
                          error:function() { erroravanza('Tabla validación privacion6intermediaLCV1'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación privacion6intermediaLCV1'); }
                        });  
           };


           function privacion5intermediaLCV1(){
           $.ajax({
                          url: "fc_privacion5intermediaLCV1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_privacion5intermediaLCV1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','91.6%'); 
                            privacion4intermediaLCV1();
                          },
                          error:function() { erroravanza('Tabla validación privacion5intermediaLCV1'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación privacion5intermediaLCV1'); }
                        });  
           };


           function privacion4intermediaLCV1(){
           $.ajax({
                          url: "fc_privacion4intermediaLCV1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_privacion4intermediaLCV1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','92.0%');$('#barra').html('92%');$('#progreso').html('Progreso: 92%')
                            privacion3intermediaLCV1();
                          },
                          error:function() { erroravanza('Tabla validación privacion4intermediaLCV1'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación privacion4intermediaLCV1'); }
                        });  
           };


           function privacion3intermediaLCV1(){
           $.ajax({
                          url: "fc_privacion3intermediaLCV1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_privacion3intermediaLCV1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','92.4%'); 
                            privacion2intermediaLCV1();
                          },
                          error:function() { erroravanza('Tabla validación privacion3intermediaLCV1'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación privacion3intermediaLCV1'); }
                        });  
           };


           function privacion2intermediaLCV1(){
           $.ajax({
                          url: "fc_privacion2intermediaLCV1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_privacion2intermediaLCV1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','92.8%');
                            privacion1intermediaLCV1();
                          },
                          error:function() { erroravanza('Tabla validación privacion2intermediaLCV1'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación privacion2intermediaLCV1'); }
                        });  
           };


           function privacion1intermediaLCV1(){
           $.ajax({
                          url: "fc_privacion1intermediaLCV1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_privacion1intermediaLCV1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','93.2%');$('#barra').html('93%');$('#progreso').html('Progreso: 93%')
                            capitulo11intermedia_lineacierre();
                          },
                          error:function() { erroravanza('Tabla validación privacion1intermediaLCV1'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación privacion1intermediaLCV1'); }
                        });  
           };


           function capitulo11intermedia_lineacierre(){
           $.ajax({
                          url: "fc_capitulo11intermedia_lineacierre",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_capitulo11intermedia_lineacierreok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','93.6%'); 
                            capitulo6intermedia_lineacierre();
                          },
                          error:function() { erroravanza('Tabla validación capitulo11intermedia_lineacierre'); }
                        });
                          },
                          error:function() { erroravanza('Tabla validación capitulo11intermedia_lineacierre'); }
                        });  
           };


           function capitulo6intermedia_lineacierre(){
           $.ajax({
                          url: "fc_capitulo6intermedia_lineacierre",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_capitulo6intermedia_lineacierreok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','94.0%'); $('#barra').html('94%');$('#progreso').html('Progreso: 94%')
                            capitulo2intermedia_lineacierre();
                          },
                          error:function() { erroravanza('Tabla validación capitulo6intermedia_lineacierre'); }
                        }); 
                          },
                          error:function() { erroravanza('Tabla validación capitulo6intermedia_lineacierre'); }
                        });  
           };


           function capitulo2intermedia_lineacierre(){
           $.ajax({
                          url: "fc_capitulo2intermedia_lineacierre",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_capitulo2intermedia_lineacierreok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){$('#barra').css('width','94.4%');  
                            capitulo9intermedia_lineacierre();
                          },
                          error:function() { erroravanza('Tabla validación capitulo2intermedia_lineacierre'); }
                        }); 
                          },
                          error:function() { erroravanza('Tabla validación capitulo2intermedia_lineacierre'); }
                        });  
           };


           function capitulo9intermedia_lineacierre(){
           $.ajax({
                          url: "fc_capitulo9intermedia_lineacierre",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_capitulo9intermedia_lineacierreok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','94.8%');
                            capitulo8intermedia_lineacierre();
                          },
                          error:function() { erroravanza('Tabla validación capitulo9intermedia_lineacierre'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación capitulo9intermedia_lineacierre'); }
                        });  
           };

           
           function capitulo8intermedia_lineacierre(){
           $.ajax({
                          url: "fc_capitulo8intermedia_lineacierre",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_capitulo8intermedia_lineacierreok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','95.2%');$('#barra').html('95%');$('#progreso').html('Progreso: 95%') 
                            capitulo7intermedia_lineacierre();
                          },
                          error:function() { erroravanza('Tabla validación capitulo8intermedia_lineacierre'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación capitulo8intermedia_lineacierre'); }
                        });  
           };


           function capitulo7intermedia_lineacierre(){
           $.ajax({
                          url: "fc_capitulo7intermedia_lineacierre",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_capitulo7intermedia_lineacierreok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','95.6%');
                            capitulo5intermedia_lineacierre();
                          },
                          error:function() { erroravanza('Tabla validación capitulo7intermedia_lineacierre'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación capitulo7intermedia_lineacierre'); }
                        });  
           };

           function capitulo5intermedia_lineacierre(){
           $.ajax({
                          url: "fc_capitulo5intermedia_lineacierre",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            $.ajax({
                          url: "fc_capitulo5intermedia_lineacierreok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','96.0%');$('#barra').html('96%');$('#progreso').html('Progreso: 96%')
                            principalintegrantes_intermedialcv1();
                          },
                          error:function() { erroravanza('Tabla validación capitulo5intermedia_lineacierre'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación capitulo5intermedia_lineacierre'); }
                        });  
           };

           function principalintegrantes_intermedialcv1(){
           $.ajax({
                          url: "fc_principalintegrantes_intermedialcv1",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','96.4%');
                            $.ajax({
                          url: "fc_principalintegrantes_intermedialcv1ok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            sincronizaactualizacionpp();
                          },
                          error:function() { erroravanza('Tabla validación principalintegrantes_intermedialcv1'); }
                        });  
                          },
                          error:function() { erroravanza('Tabla validación principalintegrantes_intermedialcv1'); }
                        });  
           };
           function sincronizaactualizacionpp(){
           $.ajax({
                          url: "fc_sincronizaactualizacionpp",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','96.8%');
                            $.ajax({
                          url: "fc_sincronizaactualizacionppok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            porcentajelogrosaplican();
                          },
                          error:function() { erroravanza('Tabla validación t_actualizacionpp'); }
                        }); 
                          },
                          error:function() { erroravanza('Tabla validación t_actualizacionpp'); }
                        });  
           };


           function porcentajelogrosaplican(){
           $.ajax({
                          url: "fc_porcentajelogrosaplican",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','96.8%');
                            $.ajax({
                          url: "fc_porcentajelogrosaplicanok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            totalporcentajelogros();
                          },
                          error:function() { erroravanza('Tabla validación t_porcentajelogrosaplican'); }
                        }); 
                          },
                          error:function() { erroravanza('Tabla validación t_porcentajelogrosaplican'); }
                        });  
           };


           function totalporcentajelogros(){
           $.ajax({
                          url: "fc_totalporcentajelogros",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','96.8%');
                            $.ajax({
                          url: "fc_totalporcentajelogrosok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  
                            sincronizacionusuariosincronizado();
                          },
                          error:function() { erroravanza('Tabla validación t_totalporcentajelogros'); }
                        }); 
                          },
                          error:function() { erroravanza('Tabla validación t_totalporcentajelogros'); }
                        });  
           };

         //////////////////FIN SINCRO ARRIBA CIERRE///////////////////

        function sincronizacionusuariosincronizado(){
           $.ajax({
                          url: "fc_sincronizacionusuariosincronizado",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){$('#barra').css('width','97.2%');$('#barra').html('97%');$('#progreso').html('Progreso: 97%')
                          sincroarriba = 62; 
                          finsincro();
                          },
                          error:function() { erroravanza('Tabla usuario sincronizado'); }
                        });  
           };
		   
		   
    
        //////////Fin Linea 2 ///////////////////////////////////////
       
        function finsincro(){//Finaliza sincronizacion hacia arriba
       
        
        $.ajax({
                          url: "fc_sincrofin",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','97.6%'); 
                          sincroabajo = 1;
                          avanza();
                          reasignacionarriba();
                          },
                          error:function() {
                              erroravanza('Finalizacion');
                            }
                        });  
           
        };
       
        //Inicia sincronizacion hacia abajo
        function reasignacionarriba(){
           $.ajax({
                          url: "fc_reasignacionarriba",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','98.0%'); $('#barra').html('98%');$('#progreso').html('Progreso: 98%')                    
                          reasignacionabajo();
                          },
                          error:function() {
                              erroravanza('Reasignacion Arriba');
                            }
                        });  
           
        };
        
        function reasignacionabajo(){
           $.ajax({
                          url: "fc_reasignacionabajo",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){ $('#barra').css('width','98.5%');                     
                          sincroabajo = 2;    
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
						success: function(obj) {$('#barra').css('width','99.0%');$('#barra').html('99%');$('#progreso').html('Progreso: 99%')
                            //alert("Hola Juan2");
                            //sincroarriba = 2;                                                            
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
                          success : function(obj){   $('#barra').css('width','99.5%');                    
                           
                            if(obj === '0'){ //0
                              foliosactualizadosd2();                               
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
                          success : function(obj){   $('#barra').css('width','1%'); $('#barra').html('1%');$('#progreso').html('Progreso Reasignación: 1%');$('#barra').addClass('bg-info');$('#progreso').css('color','#00AEEF');                       
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
                          success : function(obj){   $('#barra').css('width','2%');$('#barra').html('2%');$('#progreso').html('Progreso Reasignación: 2%')                          
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
                          success : function(obj){    $('#barra').css('width','3%'); $('#barra').html('3%');$('#progreso').html('Progreso Reasignación: 3%')                        
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
                          success : function(obj){    $('#barra').css('width','4.2%'); $('#barra').html('4%');$('#progreso').html('Progreso Reasignación: 4%')                        
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
                          success : function(obj){ $('#barra').css('width','5.0%');$('#barra').html('5%');$('#progreso').html('Progreso Reasignación: 5%')                            
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
                          success : function(obj){   $('#barra').css('width','6.2%');$('#barra').html('6%');$('#progreso').html('Progreso Reasignación: 6%')                          
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
                          success : function(obj){   $('#barra').css('width','7%');$('#barra').html('7%');$('#progreso').html('Progreso Reasignación: 7%')                          
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
                          success : function(obj){   $('#barra').css('width','8.2%');$('#barra').html('8%');$('#progreso').html('Progreso Reasignación: 8%')                          
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
                          success : function(obj){    $('#barra').css('width','9.0%'); $('#barra').html('9%');$('#progreso').html('Progreso Reasignación: 9%')                  
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
                           url: "fc_pasosestadodok",
                           type: "GET",
                           data: {},    
                          dataType: "html",
                          success : function(obj){$('#barra').css('width','9.4%');                       
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
            $('#barra').css('width','10.2%'); $('#barra').html('10%');$('#progreso').html('Progreso Reasignación: 10%')                   
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
            $('#barra').css('width','11.0%'); $('#barra').html('11%');$('#progreso').html('Progreso Reasignación: 11%')                     
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
                          url: "fc_estacionestadodok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){  $('#barra').css('width','12.2%');$('#barra').html('12%');$('#progreso').html('Progreso Reasignación: 12%')                     
                              $.ajax({
                              url: "fc_estacionestadod",
                              type: "GET",
                              data: {},    
                              dataType: "html",
                              success : function(obj){  $('#barra').css('width','12.2%');$('#barra').html('12%');$('#progreso').html('Progreso Reasignación: 12%')                     
                              sincroabajo = 10;                                     
                              c1p1ap12d();                           
                              },
                              error:function() {
                                  erroravanza('Asignar Estacion Estado');
                                }
                            });                       
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
                          success : function(obj){    $('#barra').css('width','13.0%');$('#barra').html('13%');$('#progreso').html('Progreso Reasignación: 13%')                   
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
                          success : function(obj){   $('#barra').css('width','14.2%'); $('#barra').html('14%');$('#progreso').html('Progreso Reasignación: 14%')                   
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
                          success : function(obj){   $('#barra').css('width','15.0%');$('#barra').html('15%');$('#progreso').html('Progreso Reasignación: 15%')                    
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
                          success : function(obj){  $('#barra').css('width','16.2%');$('#barra').html('16%');$('#progreso').html('Progreso Reasignación: 16%')                     
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
                          success : function(obj){   $('#barra').css('width','17.0%');$('#barra').html('17%');$('#progreso').html('Progreso Reasignación: 17%')                    
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
                          success : function(obj){   $('#barra').css('width','18.2%'); $('#barra').html('18%');$('#progreso').html('Progreso Reasignación: 18%')                   
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
                          success : function(obj){ $('#barra').css('width','19.2%'); $('#barra').html('19%');$('#progreso').html('Progreso Reasignación: 19%')                     
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
                          success : function(obj){ $('#barra').css('width','20.0%'); $('#barra').html('20%');$('#progreso').html('Progreso Reasignación: 20%')                     
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
                          success : function(obj){ $('#barra').css('width','21.2%'); $('#barra').html('21%');$('#progreso').html('Progreso Reasignación: 21%')                     
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
                          success : function(obj){  $('#barra').css('width','22.0%'); $('#barra').html('22%');$('#progreso').html('Progreso Reasignación: 22%')                    
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
                          success : function(obj){ $('#barra').css('width','23.2%');$('#barra').html('23%');$('#progreso').html('Progreso Reasignación: 23%')                      
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
                          success : function(obj){  $('#barra').css('width','24.0%');$('#barra').html('24%');$('#progreso').html('Progreso Reasignación: 24%')                     
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
                          success : function(obj){   $('#barra').css('width','25.2%'); $('#barra').html('25%');$('#progreso').html('Progreso Reasignación: 25%')                   
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
                          success : function(obj){   $('#barra').css('width','26.0%'); $('#barra').html('26%');$('#progreso').html('Progreso Reasignación: 26%')                   
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
                          success : function(obj){  $('#barra').css('width','27.2%'); $('#barra').html('27%');$('#progreso').html('Progreso Reasignación: 27%')                    
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
                          success : function(obj){  $('#barra').css('width','28%'); $('#barra').html('28%');$('#progreso').html('Progreso Reasignación: 28%')                    
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
                          success : function(obj){  $('#barra').css('width','29.2%');$('#barra').html('29%');$('#progreso').html('Progreso Reasignación: 29%')                     
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
                          success : function(obj){    $('#barra').css('width','30.0%'); $('#barra').html('30%');$('#progreso').html('Progreso Reasignación: 30%')                 
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
                          success : function(obj){      $('#barra').css('width','31.2%');$('#barra').html('31%');$('#progreso').html('Progreso Reasignación: 31%')                
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
                          success : function(obj){  $('#barra').css('width','32.0%');$('#barra').html('32%');$('#progreso').html('Progreso Reasignación: 32%')                    
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
        
        
//         function capitulo2d(){
//            $.ajax({
//                           url: "fc_capitulo2d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){  $('#barra').css('width','1%');  $('#barra').html('1%');$('#progreso').html('Progreso Reasignación: 1%')                     
//                           capitulo3d();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Capitulo 2');
//                             }
//                         });
                    
           
//         };
        
//         function capitulo3d(){
//            $.ajax({
//                           url: "fc_capitulo3d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 3;                         
//                           capitulo6d();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Capitulo 3');
//                             }
//                         });  
           
//         };
        
//         function capitulo6d(){
//            $.ajax({
//                           url: "fc_capitulo6d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           capitulo11d();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Capitulo 6');
//                             }
//                         });  
           
//         };
        
//         function capitulo11d(){
//            $.ajax({
//                           url: "fc_capitulo11d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           capitulo4id();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Capitulo 11');
//                             }
//                         });  
           
//         };
        
//         function capitulo4id(){
//            $.ajax({
//                           url: "fc_capitulo4id",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 4;                           
//                           capitulo5id();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Capitulo 4');
//                             }
//                         });  
           
//         };
        
//         function capitulo5id(){
//            $.ajax({
//                           url: "fc_capitulo5id",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           capitulo7id();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Capitulo 5');
//                             }
//                         });  
           
//         };
        
//         function capitulo7id(){
//            $.ajax({
//                           url: "fc_capitulo7id",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           capitulo8id();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Capitulo 7');
//                             }
//                         });  
           
//         };
        
//         function capitulo8id(){
//            $.ajax({
//                           url: "fc_capitulo8id",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 5;                             
//                           capitulo9id();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Capitulo 8');
//                             }
//                         });  
           
//         };
        
//         function capitulo9id(){
//            $.ajax({
//                           url: "fc_capitulo9id",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           capitulo10id();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Capitulo 9');
//                             }
//                         });  
           
//         };
        
//         function capitulo10id(){
//            $.ajax({
//                           url: "fc_capitulo10id",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           capitulo11id();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Capitulo 10');
//                             }
//                         });  
           
//         };
        
//         function capitulo11id(){
//            $.ajax({
//                           url: "fc_capitulo11id",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 6;                               
//                           capitulo12id();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Capitulo 11 Integrantes');
//                             }
//                         });  
           
//         };
        
//         function capitulo12id(){
//            $.ajax({
//                           url: "fc_capitulo12id",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           pphogard();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Capitulo 12');
//                             }
//                         });  
           
//         };
//         function pphogard(){
//            $.ajax({
//                           url: "fc_pphogard",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           ppcap1d();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Perfil Productivo Hogar');
//                             }
//                         });  
           
//         };
        
//         function ppcap1d(){
//            $.ajax({
//                           url: "fc_ppcap1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 7;                                 
//                           ppcap2d();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Perfil Productivo Capitulo 1');
//                             }
//                         });  
           
//         };
        
//         function ppcap2d(){
//            $.ajax({
//                           url: "fc_ppcap2d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           ppcap3d();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Perfil Productivo Capitulo 2');
//                             }
//                         });  
           
//         };
        
//         function ppcap3d(){
//            $.ajax({
//                           url: "fc_ppcap3d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           ppcap4d();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Perfil Productivo Capitulo 3');
//                             }
//                         });  
           
//         };
        
//         function ppcap4d(){
//            $.ajax({
//                           url: "fc_ppcap4d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 8;                                   
//                           ppacademicad();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Perfil Productivo Capitulo 4');
//                             }
//                         });  
           
//         };
        
//         function ppacademicad(){
//            $.ajax({
//                           url: "fc_ppacademicad",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           ppoestudiosd();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Perfil Productivo Formacion Academica');
//                             }
//                         });  
           
//         };
        
//         function ppoestudiosd(){
//            $.ajax({
//                           url: "fc_ppoestudiosd",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           ppexpd();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Perfil Productivo Otros Estudios');
//                             }
//                         });  
           
//         };
        
//         function ppexpd(){ // este es
//            $.ajax({
//                           url: "fc_ppexpd",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 9;                                   
//                           pasosestadod();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Perfil Productivo Experiencia Laboral');
//                             }
//                         });  
           
//         };
        
//         function pasosestadod(){
//            $.ajax({
//                           url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacionl_aba_sincronizarprotocolopasosestadod/fc_sincronizacionl_aba_sincronizarprotocolopasosestadod",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             pasosestadod1();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Pasos Estado');
//                             }
//                         });  
           
//         };

//         function pasosestadod1(){
//            $.ajax({
//                           url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacionl_aba_sincronizarprotocolopasosestadod/fc_sincronizacionl_aba_sincronizarprotocolopasosestadod1",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             pasosestadod2();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Pasos Estado');
//                             }
//                         });  
           
//         };        
        
//         function pasosestadod2(){
//            $.ajax({
//                           url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacionl_aba_sincronizarprotocolopasosestadod/fc_sincronizacionl_aba_sincronizarprotocolopasosestadod2",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             pasosestadod3();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Pasos Estado');
//                             }
//                         });  
           
//         };   
        
//         function pasosestadod3(){
//            $.ajax({
//                           url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacionl_aba_sincronizarprotocolopasosestadod/fc_sincronizacionl_aba_sincronizarprotocolopasosestadod3",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             pasosestadod4();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Pasos Estado');
//                             }
//                         });  
           
//         };    
        
//         function pasosestadod4(){
//            $.ajax({
//                           url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacionl_aba_sincronizarprotocolopasosestadod/fc_sincronizacionl_aba_sincronizarprotocolopasosestadod4",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           fconlogrosd();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Pasos Estado');
//                             }
//                         });  
           
//         }; 
        
       
        
//         function fconlogrosd(){
//            $.ajax({
//                           url: "fc_fconlogrosd",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           capacidadesd();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Folios con Logros');
//                             }
//                         });  
           
//         };
        
//         function capacidadesd(){
//            $.ajax({
//                           url: "fc_capacidadesd",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           estacionestadod();
//                           },
//                           error:function() {
//                               erroravanza('Asignar Capacidades');
//                             }
//                         });  
           
//         };
        
//         function estacionestadod(){
//            $.ajax({
//                           url: "fc_estacionestadod",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 10;                                     
//                           c1p1ap12d();                           
//                           },
//                           error:function() {
//                               erroravanza('Asignar Estacion Estado');
//                             }
//                         });  
           
//         };
        
//         function c1p1ap12d(){
//            $.ajax({
//                           url: "fc_sincroc1p1ap12d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro1d();
//                           },
//                           error:function() {
//                               erroravanza('Tabla c1p1ap12 Abajo');
//                             }
//                         });  
           
//         };
        
        
    
        
        
// //         function capitulo1l2e1d(){
// //           $.ajax({
// //                          url: "fc_sincrocapitulo1l2e1d",
// //                          type: "GET",
// //                          data: {},    
// //                          dataType: "html",
// //                          success : function(obj){                      
// //                           
// //                            linea2e1cualidadeshd();
// //                            
// //                          },
// //                          error:function() {
// //                              erroravanza('Capitulo 1 Linea 2 Estacion 1 Abajo');
// //                            }
// //                        });  
// //           
// //        };
// //        
// //        function linea2e1cualidadeshd(){
// //           $.ajax({
// //                          url: "fc_sincrolinea2e1cualidadeshd",
// //                          type: "GET",
// //                          data: {},    
// //                          dataType: "html",
// //                          success : function(obj){                      
// //                           
// //                            linea2e1cualidadesid();
// //                            
// //                          },
// //                          error:function() {
// //                              erroravanza('Linea 2 Estacion 1 Cualidades Hogar Abajo');
// //                            }
// //                        });  
// //           
// //        };
// //        
// //        function linea2e1cualidadesid(){
// //           $.ajax({
// //                          url: "fc_sincrolinea2e1cualidadesid",
// //                          type: "GET",
// //                          data: {},    
// //                          dataType: "html",
// //                          success : function(obj){                      
// //                           
// //                            logro1d();
// //                            
// //                          },
// //                          error:function() {
// //                              erroravanza('Linea 2 Estacion 1 Cualidades Integrantes Abajo');
// //                            }
// //                        });  
// //           
// //        };
        
//         function logro1d(){
//            $.ajax({
//                           url: "fc_sincrologro1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro2d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 1 Abajo');
//                             }
//                         });  
           
//         };
        
//         function logro2d(){
//            $.ajax({
//                           url: "fc_sincrologro2d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 11;                                         
//                           logro3d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 2 Abajo');
//                             }
//                         });  
           
//         };
//         function logro3d(){
//            $.ajax({
//                           url: "fc_sincrologro3d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro4d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 3 Abajo');
//                             }
//                         });  
           
//         };
//         function logro4d(){
//            $.ajax({
//                           url: "fc_sincrologro4d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro5d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 4 Abajo');
//                             }
//                         });  
           
//         };
//         function logro5d(){
//            $.ajax({
//                           url: "fc_sincrologro5d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro6d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 5 Abajo');
//                             }
//                         });  
           
//         };
//         function logro6d(){
//            $.ajax({
//                           url: "fc_sincrologro6d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 12;                                             
//                           logro7d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 6 Abajo');
//                             }
//                         });  
           
//         };
//         function logro7d(){
//            $.ajax({
//                           url: "fc_sincrologro7d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro8d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 7 Abajo');
//                             }
//                         });  
           
//         };
//         function logro8d(){
//            $.ajax({
//                           url: "fc_sincrologro8d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro9d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 8 Abajo');
//                             }
//                         });  
           
//         };
//         function logro9d(){
//            $.ajax({
//                           url: "fc_sincrologro9d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 13;                                                 
//                           logro10d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 9 Abajo');
//                             }
//                         });  
           
//         };
//         function logro10d(){
//            $.ajax({
//                           url: "fc_sincrologro10d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro11d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 10 Abajo');
//                             }
//                         });  
           
//         };
//         function logro11d(){
//            $.ajax({
//                           url: "fc_sincrologro11d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro12d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 11 Abajo');
//                             }
//                         });  
           
//         };
//         function logro12d(){
//            $.ajax({
//                           url: "fc_sincrologro12d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro13d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 12 Abajo');
//                             }
//                         });  
           
//         };
//         function logro13d(){
//            $.ajax({
//                           url: "fc_sincrologro13d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 14;                                                     
//                           logro14d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 13 Abajo');
//                             }
//                         });  
           
//         };
//         function logro14d(){
//            $.ajax({
//                           url: "fc_sincrologro14d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro15d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 14 Abajo');
//                             }
//                         });  
           
//         };
//         function logro15d(){
//            $.ajax({
//                           url: "fc_sincrologro15d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro16d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 15 Abajo');
//                             }
//                         });  
           
//         };
//         function logro16d(){
//            $.ajax({
//                           url: "fc_sincrologro16d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro17d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 16 Abajo');
//                             }
//                         });  
           
//         };
//         function logro17d(){
//            $.ajax({
//                           url: "fc_sincrologro17d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 15;                                                         
//                           logro18d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 17 Abajo');
//                             }
//                         });  
           
//         };
//         function logro18d(){
//            $.ajax({
//                           url: "fc_sincrologro18d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro19d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 18 Abajo');
//                             }
//                         });  
           
//         };
//         function logro19d(){
//            $.ajax({
//                           url: "fc_sincrologro19d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro20d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 19 Abajo');
//                             }
//                         });  
           
//         };
//         function logro20d(){
//            $.ajax({
//                           url: "fc_sincrologro20d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 16;                                                             
//                           logro21d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 20 Abajo');
//                             }
//                         });  
           
//         };
//         function logro21d(){
//            $.ajax({
//                           url: "fc_sincrologro21d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro22d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 21 Abajo');
//                             }
//                         });  
           
//         };
//         function logro22d(){
//            $.ajax({
//                           url: "fc_sincrologro22d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro23d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 22 Abajo');
//                             }
//                         });  
           
//         };
//         function logro23d(){
//            $.ajax({
//                           url: "fc_sincrologro23d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 17;                                                                 
//                           logro24d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 23 Abajo');
//                             }
//                         });  
           
//         };
//         function logro24d(){
//            $.ajax({
//                           url: "fc_sincrologro24d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro25d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 24 Abajo');
//                             }
//                         });  
           
//         };
//         function logro25d(){
//            $.ajax({
//                           url: "fc_sincrologro25d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro26d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 25 Abajo');
//                             }
//                         });  
           
//         };
//         function logro26d(){
//            $.ajax({
//                           url: "fc_sincrologro26d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 18;                                                                     
//                           logro27d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 26 Abajo');
//                             }
//                         });  
           
//         };
//         function logro27d(){
//            $.ajax({
//                           url: "fc_sincrologro27d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro28d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 27 Abajo');
//                             }
//                         });  
           
//         };
//         function logro28d(){
//            $.ajax({
//                           url: "fc_sincrologro28d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro29d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 28 Abajo');
//                             }
//                         });  
           
//         };
//         function logro29d(){
//            $.ajax({
//                           url: "fc_sincrologro29d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 19;    
//                           logro30d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 29 Abajo');
//                             }
//                         });  
           
//         };
//         function logro30d(){
//            $.ajax({
//                           url: "fc_sincrologro30d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro31d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 30 Abajo');
//                             }
//                         });  
           
//         };
//         function logro31d(){
//            $.ajax({
//                           url: "fc_sincrologro31d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro32d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 31 Abajo');
//                             }
//                         });  
           
//         };
//         function logro32d(){
//            $.ajax({
//                           url: "fc_sincrologro32d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 20;        
//                           logro33d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 32 Abajo');
//                             }
//                         });  
           
//         };
//         function logro33d(){
//            $.ajax({
//                           url: "fc_sincrologro33d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro34d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 33 Abajo');
//                             }
//                         });  
           
//         };
//         function logro34d(){
//            $.ajax({
//                           url: "fc_sincrologro34d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro35d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 34 Abajo');
//                             }
//                         });  
           
//         };
//         function logro35d(){
//            $.ajax({
//                           url: "fc_sincrologro35d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 21;    
//                           logro36d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 35 Abajo');
//                             }
//                         });  
           
//         };
//         function logro36d(){
//            $.ajax({
//                           url: "fc_sincrologro36d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro37d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 36 Abajo');
//                             }
//                         });  
           
//         };
//         function logro37d(){
//            $.ajax({
//                           url: "fc_sincrologro37d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro38d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 37 Abajo');
//                             }
//                         });  
           
//         };
//         function logro38d(){
//            $.ajax({
//                           url: "fc_sincrologro38d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 22;
//                           logro39d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 38 Abajo');
//                             }
//                         });  
           
//         };
//         function logro39d(){
//            $.ajax({
//                           url: "fc_sincrologro39d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro40d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 39 Abajo');
//                             }
//                         });  
           
//         };
//         function logro40d(){
//            $.ajax({
//                           url: "fc_sincrologro40d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logro41d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 40 Abajo');
//                             }
//                         });  
           
//         };
//         function logro41d(){
//            $.ajax({
//                           url: "fc_sincrologro41d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 23;    
//                           hmovlogd();
//                           },
//                           error:function() {
//                               erroravanza('Logro 41 Abajo');
//                             }
//                         });  
           
//         };
//         function hmovlogd(){
//            $.ajax({
//                           url: "fc_hmovlogd",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           movlog10d();
//                           },
//                           error:function() {
//                               erroravanza('Historico Movimiento Logro Abajo');
//                             }
//                         });  
           
//         };
//         function movlog10d(){
//            $.ajax({
//                           url: "fc_movlog10d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           movlog18d();
//                           },
//                           error:function() {
//                               erroravanza('Movimiento Logro 10 Abajo');
//                             }
//                         });  
           
//         };
//         function movlog18d(){
//            $.ajax({
//                           url: "fc_movlog18d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 24;    
//                           movlog24d();
//                           },
//                           error:function() {
//                               erroravanza('Movimiento Logro 18 Abajo');
//                             }
//                         });  
           
//         };
//         function movlog24d(){
//            $.ajax({
//                           url: "fc_movlog24d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           movlog33d();
//                           },
//                           error:function() {
//                               erroravanza('Movimiento Logro 24 Abajo');
//                             }
//                         });  
           
//         };
//         function movlog33d(){
//            $.ajax({
//                           url: "fc_movlog33d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           movlog34d();
//                           },
//                           error:function() {
//                               erroravanza('Movimiento Logro 33 Abajo');
//                             }
//                         });  
           
//         };
//         function movlog34d(){
//            $.ajax({
//                           url: "fc_movlog34d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 25;    
//                           movlog39d();
//                           },
//                           error:function() {
//                               erroravanza('Movimiento Logro 34 Abajo');
//                             }
//                         });  
           
//         };
//         function movlog39d(){
//            $.ajax({
//                           url: "fc_movlog39d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logromovcgsd();
//                           },
//                           error:function() {
//                               erroravanza('Movimiento Logro 39 Abajo');
//                             }
//                         });  
           
//         };
//         function logromovcgsd(){
//            $.ajax({
//                           url: "fc_logromovimientocgsd",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){  
//                           sincroabajo = 26;
//                           ipmd();
//                           },
//                           error:function() {
//                               erroravanza('Logro Movimiento Cogestor Abajo');
//                             }
//                         });  
           
//         };
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
//         function ipmd(){
//            $.ajax({
//                           url: "fc_sincroipmd",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logroblancod();
//                           },
//                           error:function() {
//                               erroravanza('IPM Abajo');
//                             }
//                         });  
           
//         };
        
        
//         //// Actualizacion 25 - 10 - 2017 logro blanco y recalculo ////////////////////
        
//         function logroblancod(){
//            $.ajax({
//                           url: "fc_logroblancod",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logmovrec10d();
//                           },
//                           error:function() {
//                               erroravanza('Logro Blanco Abajo');
//                             }
//                         });  
           
//         };
//         function logmovrec10d(){
//            $.ajax({
//                           url: "fc_logmovrec10d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 27;
//                           logmovrec11d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 10 Movimiento Recalculo Abajo');
//                             }
//                         });  
           
//         };
//         function logmovrec11d(){
//            $.ajax({
//                           url: "fc_logmovrec11d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logmovrec12d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 11 Movimiento Recalculo Abajo');
//                             }
//                         });  
           
//         };
//         function logmovrec12d(){
//            $.ajax({
//                           url: "fc_logmovrec12d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logmovrec13d();
//                           },
//                           error:function() {
//                             erroravanza('Logro 12 Movimiento Recalculo Abajo');
//                             }
//                         });  
           
//         };
//         function logmovrec13d(){
//            $.ajax({
//                           url: "fc_logmovrec13d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logmovrec2d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 13 Movimiento Recalculo Abajo');
//                             }
//                         });  
           
//         };
//         function logmovrec2d(){
//            $.ajax({
//                           url: "fc_logmovrec2d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 28;
//                           logmovrec22d();
//                           },
//                           error:function() {
//                              erroravanza('Logro 2 Movimiento Recalculo Abajo');
//                             }
//                         });  
           
//         };
//         function logmovrec22d(){
//            $.ajax({
//                           url: "fc_logmovrec22d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logmovrec23d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 22 Movimiento Recalculo Abajo');
//                             }
//                         });  
           
//         };
//         function logmovrec23d(){
//            $.ajax({
//                           url: "fc_logmovrec23d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logmovrec3d();
//                           },
//                           error:function() {
//                              erroravanza('Logro 23 Movimiento Recalculo Abajo');
//                             }
//                         });  
           
//         };
//         function logmovrec3d(){
//            $.ajax({
//                           url: "fc_logmovrec3d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 29;
//                           logmovrec5d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 3 Movimiento Recalculo Abajo');
//                             }
//                         });  
           
//         };
//         function logmovrec5d(){
//            $.ajax({
//                           url: "fc_logmovrec5d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logmovrec7d();
//                           },
//                           error:function() {
//                              erroravanza('Logro 5 Movimiento Recalculo Abajo');
//                             }
//                         });  
           
//         };
//         function logmovrec7d(){
//            $.ajax({
//                           url: "fc_logmovrec7d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           logmovrec8d();
//                           },
//                           error:function() {
//                               erroravanza('Logro 7 Movimiento Recalculo Abajo');
//                             }
//                         });  
           
//         };
//         function logmovrec8d(){
//            $.ajax({
//                           url: "fc_logmovrec8d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 30;
//                           logmovrec9d();
//                           },
//                           error:function() {
//                             erroravanza('Logro 8 Movimiento Recalculo Abajo');
//                             }
//                         });  
           
//         };
//         function logmovrec9d(){
//            $.ajax({
//                           url: "fc_logmovrec9d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion1d();
//                           },
//                           error:function() {
//                              erroravanza('Logro 9 Movimiento Recalculo Abajo');
//                             }
//                         });  
           
//         };
//        //////////////////////////Sincronizacion privaciones //////////////////////////////////
        
//         function privacion1d(){
//            $.ajax({
//                           url: "fc_sincroprivacion1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion2d();
//                           },
//                           error:function() {
//                               erroravanza('Privacion 1 Abajo');
//                             }
//                         });  
           
//         };
//         function privacion2d(){
//            $.ajax({
//                           url: "fc_sincroprivacion2d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){ 
//                           sincroabajo = 31;    
//                           privacion3d();
//                           },
//                           error:function() {
//                               erroravanza('Privacion 2 Abajo');
//                             }
//                         });  
           
//         };
//         function privacion3d(){
//            $.ajax({
//                           url: "fc_sincroprivacion3d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion4d();
//                           },
//                           error:function() {
//                               erroravanza('Privacion 3 Abajo');
//                             }
//                         });  
           
//         };
//         function privacion4d(){
//            $.ajax({
//                           url: "fc_sincroprivacion4d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion5d();
//                           },
//                           error:function() {
//                               erroravanza('Privacion 4 Abajo');
//                             }
//                         });  
           
//         };
//         function privacion5d(){
//            $.ajax({
//                           url: "fc_sincroprivacion5d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 32;    
//                           privacion6d();
//                           },
//                           error:function() {
//                               erroravanza('Privacion 5 Abajo');
//                             }
//                         });  
           
//         };
//         function privacion6d(){
//            $.ajax({
//                           url: "fc_sincroprivacion6d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion7d();
//                           },
//                           error:function() {
//                               erroravanza('Privacion 6 Abajo');
//                             }
//                         });  
           
//         };
//         function privacion7d(){
//            $.ajax({
//                           url: "fc_sincroprivacion7d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion8d();
//                           },
//                           error:function() {
//                               erroravanza('Privacion 7 Abajo');
//                             }
//                         });  
           
//         };
//         function privacion8d(){
//            $.ajax({
//                           url: "fc_sincroprivacion8d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 33;        
//                           privacion9d();
//                           },
//                           error:function() {
//                               erroravanza('Privacion 8 Abajo');
//                             }
//                         });  
           
//         };
//         function privacion9d(){
//            $.ajax({
//                           url: "fc_sincroprivacion9d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion10d();
//                           },
//                           error:function() {
//                               erroravanza('Privacion 9 Abajo');
//                             }
//                         });  
           
//         };
//         function privacion10d(){
//            $.ajax({
//                           url: "fc_sincroprivacion10d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion11d();
//                           },
//                           error:function() {
//                               erroravanza('Privacion 10 Abajo');
//                             }
//                         });  
           
//         };
//         function privacion11d(){
//            $.ajax({
//                           url: "fc_sincroprivacion11d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 34;    
//                           privacion12d();
//                           },
//                           error:function() {
//                               erroravanza('Privacion 11 Abajo');
//                             }
//                         });  
           
//         };
//         function privacion12d(){
//            $.ajax({
//                           url: "fc_sincroprivacion12d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion13d();
//                           },
//                           error:function() {
//                               erroravanza('Privacion 12 Abajo');
//                             }
//                         });  
           
//         };
//         function privacion13d(){
//            $.ajax({
//                           url: "fc_sincroprivacion13d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion14d();
//                           },
//                           error:function() {
//                               erroravanza('Privacion 13 Abajo');
//                             }
//                         });  
           
//         };
//         function privacion14d(){
//            $.ajax({
//                           url: "fc_sincroprivacion14d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 35;        
//                           privacion15d();
//                           },
//                           error:function() {
//                               erroravanza('Privacion 14 Abajo');
//                             }
//                         });  
           
//         };
//         function privacion15d(){
//            $.ajax({
//                           url: "fc_sincroprivacion15d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion16d();
//                           },
//                           error:function() {
//                               erroravanza('Privacion 15 Abajo');
//                             }
//                         });  
           
//         };
//         function privacion16d(){
//            $.ajax({
//                           url: "fc_sincroprivacion16d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           hfprocedenciad();
//                           },
//                           error:function() {
//                               erroravanza('Privacion 16');
//                             }
//                         });  
           
//         };
        
//         /////////////////////////////////////Sincronizacion abajo estacion 0 ////////////////////////////////
//          function hfprocedenciad(){
//            $.ajax({
//                           url: "fc_hfprocedenciad",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 36;
//                           hflogrosd();
//                           },
//                           error:function() {
//                               erroravanza('Procedencia Estacion Cero');
//                             }
//                         });  
           
//         };
//         function hflogrosd(){
//            $.ajax({
//                           url: "fc_hflogrosd",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           hfcostumbresd();
//                           },
//                           error:function() {
//                               erroravanza('Logros Estacion Cero');
//                             }
//                         });  
           
//         };
//         function hfcostumbresd(){
//            $.ajax({
//                           url: "fc_hfcostumbresd",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           hfconformaciond();
//                           },
//                           error:function() {
//                               erroravanza('Costumbres Estacion Cero');
//                             }
//                         });  
           
//         };
//         function hfconformaciond(){
//            $.ajax({
//                           url: "fc_hfconformaciond",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 37; 
//                           facttscual1d();
//                           },
//                           error:function() {
//                               erroravanza('Conformacion Estacion Cero');
//                             }
//                         });  
           
//         };
//         function facttscual1d(){
//            $.ajax({
//                           url: "fc_facttscual1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           facttfcual1d();
//                           },
//                           error:function() {
//                               erroravanza('facttscual1 Estacion Cero');
//                             }
//                         });  
           
//         };
//         function facttfcual1d(){
//            $.ajax({
//                           url: "fc_facttfcual1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           facttecual1d();
//                           },
//                           error:function() {
//                               erroravanza('facttfcual1 Estacion Cero');
//                             }
//                         });  
           
//         };
//         function facttecual1d(){
//            $.ajax({
//                           url: "fc_facttecual1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 38; 
//                           factiscual1d();
//                           },
//                           error:function() {
//                               erroravanza('facttecual1 Estacion Cero');
//                             }
//                         });  
           
//         };
//         function factiscual1d(){
//            $.ajax({
//                           url: "fc_factiscual1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           factifcual1d();
//                           },
//                           error:function() {
//                               erroravanza('factiscual1 Estacion Cero');
//                             }
//                         });  
           
//         };
//         function factifcual1d(){
//            $.ajax({
//                           url: "fc_factifcual1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           factiecual1d();
//                           },
//                           error:function() {
//                               erroravanza('factifcual1 Estacion Cero');
//                             }
//                         });  
           
//         };
//         function factiecual1d(){
//            $.ajax({
//                           url: "fc_factiecual1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 39;  
//                           estacioncerocead();
//                           },
//                           error:function() {
//                               erroravanza('factifcual1 Estacion Cero');
//                             }
//                         });  
           
//         };
//         function estacioncerocead(){
//            $.ajax({
//                           url: "fc_estacioncerocead",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           crisisscual1d();
//                           },
//                           error:function() {
//                               erroravanza('estacioncerocea Estacion Cero');
//                             }
//                         });  
           
//         };
//         function crisisscual1d(){
//            $.ajax({
//                           url: "fc_crisisscual1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           crisisfcual1d();
//                           },
//                           error:function() {
//                               erroravanza('crisisscual1 Estacion Cero');
//                             }
//                         });  
           
//         };
//         function crisisfcual1d(){
//            $.ajax({
//                           url: "fc_crisisfcual1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 40;   
//                           crisisecual1d();
//                           },
//                           error:function() {
//                               erroravanza('crisisfcual1 Estacion Cero');
//                             }
//                         });  
           
//         };
//         function crisisecual1d(){
//            $.ajax({
//                           url: "fc_crisisecual1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           crearmetasd();
//                           },
//                           error:function() {
//                               erroravanza('crisisecual1 Estacion Cero');
//                             }
//                         });  
           
//         };
//         function crearmetasd(){
//            $.ajax({
//                           url: "fc_crearmetasd",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           correspautonomiad();
//                           },
//                           error:function() {
//                               erroravanza('crearmetas Estacion Cero');
//                             }
//                         });  
           
//         };
//         function correspautonomiad(){
//            $.ajax({
//                           url: "fc_correspautonomiad",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 41; 
//                           eerfd();
//                           },
//                           error:function() {
//                               erroravanza('correspautonomia Estacion Cero');
//                             }
//                         });  
           
//         };
//         function eerfd(){
//            $.ajax({
//                           url: "fc_eerfd",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           avanceprocesod();
//                           },
//                           error:function() {
//                               erroravanza('EERF Estacion Cero');
//                             }
//                         });  
           
//         };
//         /////////////////////////////////////Fin Sincronizacion estacion 0 ////////////////////////////////
        
//         //////////////Sincro tablas estacion 2/////////////////////////7
        
//         function avanceprocesod(){
//            $.ajax({
//                           url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_aba_avanceprocesol/fc_aba_avanceproceso",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           l2metasd();
//                           },
//                           error:function() {
//                               erroravanza('Avance Proceso Abajo');
//                             }
//                         });  
           
//         };
        
//         function l2metasd(){
//            $.ajax({
//                           url: "fc_l2metasd",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 42;  
//                           l2accionesd();
//                           },
//                           error:function() {
//                               erroravanza('Metas hogar abajo');
//                             }
//                         });  
           
//         };
        
//         function l2accionesd(){
//            $.ajax({
//                           url: "fc_l2accionesd",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           casoexitosod();
//                           },
//                           error:function() {
//                               erroravanza('Acciones hogar abajo');
//                             }
//                         });  
           
//         };
        
//         function casoexitosod(){
//            $.ajax({
//                           url: "fc_casoexitosod",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           correspautonomiahistoricod();
//                           },
//                           error:function() {
//                               erroravanza('Caso Exitoso abajo');
//                             }
//                         });  
           
//         };
        
//         function correspautonomiahistoricod(){
//            $.ajax({
//                           url: "fc_correspautonomiahistoricod",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 43; 
//                           logromovimientocfd();
//                           },
//                           error:function() {
//                               erroravanza('Historico corresponsabilidad abajo');
//                             }
//                         });  
           
//         };
        
//         function logromovimientocfd(){
//            $.ajax({
//                           url: "fc_logromovimientocfd",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           protocoloinicioestaciond();
//                           },
//                           error:function() {
//                               erroravanza('Logro Movimiento CF Abajo');
//                             }
//                         });  
           
//         };
        
//         function protocoloinicioestaciond(){
//            $.ajax({
//                           url: "http://localhost/metodologia2msol/index.php/sincronizacion/c_sincronizacion_aba_protocoloinicioestacionl/fc_aba_protocoloinicioestacion",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           condicionnecesariad();
//                           },
//                           error:function() {
//                               erroravanza('Protocolo Inicio Estacion Abajo');
//                             }
//                         });  
           
//         };
//         function condicionnecesariad(){
//            $.ajax({
//                           url: "fc_condicionnecesariad",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 44; 
//                           tablaingresosd();
//                           },
//                           error:function() {
//                               erroravanza('Condicion Necesaria');
//                             }
//                         });  
           
//         };
//         function tablaingresosd(){
//            $.ajax({
//                           url: "fc_tablaingresosd",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           //privacionesintermediad();
// 						  privacionesintermediad1();
//                           },
//                           error:function() {
//                               erroravanza('Tabla Ingresos');
//                             }
//                         });  
           
//         };
// //        function privacionesintermediad(){
// //           $.ajax({
// //                          url: "fc_privacionesintermediad",
// //                          type: "GET",
// //                          data: {},    
// //                          dataType: "html",
// //                          success : function(obj){                      
// //                          tablasintermediabajada();
// //                          },
// //                          error:function() {
// //                              erroravanza('Tabla Ingresos');
// //                            }
// //                        });  
// //           
// //        };
//         function privacionesintermediad1(){
//            $.ajax({
//                           url: "fc_privacionesintermediad1",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacionesintermediad2();
//                           },
//                           error:function() {
//                               erroravanza('Tabla privacion intermedia 1');
//                             }
//                         });  
//         };
//         function privacionesintermediad2(){
//            $.ajax({
//                           url: "fc_privacionesintermediad2",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){  
//                           sincroabajo = 45;    
//                           privacionesintermediad3();
//                           },
//                           error:function() {
//                               erroravanza('Tabla privacion intermedia 2');
//                             }
//                         });  
//         };
//         function privacionesintermediad3(){
//            $.ajax({
//                           url: "fc_privacionesintermediad3",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacionesintermediad4();
//                           },
//                           error:function() {
//                               erroravanza('Tabla privacion intermedia 3');
//                             }
//                         });  
//         };
//         function privacionesintermediad4(){
//            $.ajax({
//                           url: "fc_privacionesintermediad4",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacionesintermediad5();
//                           },
//                           error:function() {
//                               erroravanza('Tabla privacion intermedia 4');
//                             }
//                         });  
//         };
//         function privacionesintermediad5(){
//            $.ajax({
//                           url: "fc_privacionesintermediad5",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){ 
//                           sincroabajo = 46;    
//                           privacionesintermediad6();
//                           },
//                           error:function() {
//                               erroravanza('Tabla privacion intermedia 5');
//                             }
//                         });  
//         };
//         function privacionesintermediad6(){
//            $.ajax({
//                           url: "fc_privacionesintermediad6",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacionesintermediad7();
//                           },
//                           error:function() {
//                               erroravanza('Tabla privacion intermedia 6');
//                             }
//                         });  
//         };
//         function privacionesintermediad7(){
//            $.ajax({
//                           url: "fc_privacionesintermediad7",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacionesintermediad8();
//                           },
//                           error:function() {
//                               erroravanza('Tabla privacion intermedia 7');
//                             }
//                         });  
//         };
//         function privacionesintermediad8(){
//            $.ajax({
//                           url: "fc_privacionesintermediad8",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 47;    
//                           privacionesintermediad9();
//                           },
//                           error:function() {
//                               erroravanza('Tabla privacion intermedia 8');
//                             }
//                         });  
//         };
//         function privacionesintermediad9(){
//            $.ajax({
//                           url: "fc_privacionesintermediad9",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacionesintermediad10();
//                           },
//                           error:function() {
//                               erroravanza('Tabla privacion intermedia 9');
//                             }
//                         });  
//         };
//         function privacionesintermediad10(){
//            $.ajax({
//                           url: "fc_privacionesintermediad10",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacionesintermediad11();
//                           },
//                           error:function() {
//                               erroravanza('Tabla privacion intermedia 10');
//                             }
//                         });  
//         };
//         function privacionesintermediad11(){
//            $.ajax({
//                           url: "fc_privacionesintermediad11",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 48;    
//                           privacionesintermediad12();
//                           },
//                           error:function() {
//                               erroravanza('Tabla privacion intermedia 11');
//                             }
//                         });  
//         };
//         function privacionesintermediad12(){
//            $.ajax({
//                           url: "fc_privacionesintermediad12",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacionesintermediad13();
//                           },
//                           error:function() {
//                               erroravanza('Tabla privacion intermedia 12');
//                             }
//                         });  
//         };
//         function privacionesintermediad13(){
//            $.ajax({
//                           url: "fc_privacionesintermediad13",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacionesintermediad14();
//                           },
//                           error:function() {
//                               erroravanza('Tabla privacion intermedia 13');
//                             }
//                         });  
//         };
//         function privacionesintermediad14(){
//            $.ajax({
//                           url: "fc_privacionesintermediad14",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacionesintermediad15();
//                           },
//                           error:function() {
//                               erroravanza('Tabla privacion intermedia 14');
//                             }
//                         });  
//         };
//         function privacionesintermediad15(){
//            $.ajax({
//                           url: "fc_privacionesintermediad15",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 49;     
//                           privacionesintermediad16();
//                           },
//                           error:function() {
//                               erroravanza('Tabla privacion intermedia 15');
//                             }
//                         });  
//         };
//         function privacionesintermediad16(){
//            $.ajax({
//                           url: "fc_privacionesintermediad16",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           ipmservidordintermediasub();
//                           },
//                           error:function() {
//                               erroravanza('Tabla privacion intermedia 16');
//                             }
//                         });  
//         };
//         function ipmservidordintermediasub(){
//            $.ajax({
//                           url: "fc_ipmservidordintermediasub",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           tablasintermediabajadac11();
//                           },
//                           error:function() {
//                               erroravanza('Tabla privacion intermedia IPM');
//                             }
//                         });  
//         };
//         function tablasintermediabajadac11(){
//            $.ajax({
//                           url: "fc_tablasintermediabajadac11",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 50;    
//                           tablasintermediabajadac2();
//                           },
//                           error:function() { erroravanza('Tabla intermedia bajada cap 11'); }
//                         });  
//         };
//         function tablasintermediabajadac2(){
//            $.ajax({
//                           url: "fc_tablasintermediabajadac2",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           tablasintermediabajadac5();
//                           },
//                           error:function() { erroravanza('Tabla intermedia bajada cap 2'); }
//                         });  
//         };
//         function tablasintermediabajadac5(){
//            $.ajax({
//                           url: "fc_tablasintermediabajadac5",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           tablasintermediabajadac6();
//                           },
//                           error:function() { erroravanza('Tabla intermedia bajada cap 5'); }
//                         });  
//         };
//         function tablasintermediabajadac6(){
//            $.ajax({
//                           url: "fc_tablasintermediabajadac6",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 51;    
//                           tablasintermediabajadac7();
//                           },
//                           error:function() { erroravanza('Tabla intermedia bajada cap 6'); }
//                         });  
//         };
//         function tablasintermediabajadac7(){
//            $.ajax({
//                           url: "fc_tablasintermediabajadac7",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           tablasintermediabajadac8();
//                           },
//                           error:function() { erroravanza('Tabla intermedia bajada cap 7'); }
//                         });  
//         };
//         function tablasintermediabajadac8(){
//            $.ajax({
//                           url: "fc_tablasintermediabajadac8",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           tablasintermediabajadac9();
//                           },
//                           error:function() { erroravanza('Tabla intermedia bajada cap 8'); }
//                         });  
//         };
//         function tablasintermediabajadac9(){
//            $.ajax({
//                           url: "fc_tablasintermediabajadac9",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 52;    
//                           sincronizarbajadaintermediahistc11();
//                           },
//                           error:function() { erroravanza('Tabla intermedia bajada cap 9'); }
//                         });  
//         };
//         function sincronizarbajadaintermediahistc11(){
//            $.ajax({
//                           url: "fc_sincronizarbajadaintermediahistc11",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincronizarbajadaintermediahistc2();
//                           },
//                           error:function() { erroravanza('Tabla intermedia bajada cap 11 historico'); }
//                         });  
//         };
//         function sincronizarbajadaintermediahistc2(){
//            $.ajax({
//                           url: "fc_sincronizarbajadaintermediahistc2",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincronizarbajadaintermediahistc5();
//                           },
//                           error:function() { erroravanza('Tabla intermedia bajada cap 2 historico'); }
//                         });  
//         };
//         function sincronizarbajadaintermediahistc5(){
//            $.ajax({
//                           url: "fc_sincronizarbajadaintermediahistc5",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 53;    
//                           sincronizarbajadaintermediahistc6();
//                           },
//                           error:function() { erroravanza('Tabla intermedia bajada cap 5 historico'); }
//                         });  
//         };
//         function sincronizarbajadaintermediahistc6(){
//            $.ajax({
//                           url: "fc_sincronizarbajadaintermediahistc6",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincronizarbajadaintermediahistc7();
//                           },
//                           error:function() { erroravanza('Tabla intermedia bajada cap 6 historico'); }
//                         });  
//         };
//         function sincronizarbajadaintermediahistc7(){
//            $.ajax({
//                           url: "fc_sincronizarbajadaintermediahistc7",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincronizarbajadaintermediahistc8();
//                           },
//                           error:function() { erroravanza('Tabla intermedia bajada cap 7 historico'); }
//                         });  
//         };
//         function sincronizarbajadaintermediahistc8(){
//            $.ajax({
//                           url: "fc_sincronizarbajadaintermediahistc8",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 54;    
//                           sincronizarbajadaintermediahistc9();
//                           },
//                           error:function() { erroravanza('Tabla intermedia bajada cap 8 historico'); }
//                         });  
//         };
//         function sincronizarbajadaintermediahistc9(){
//            $.ajax({
//                           url: "fc_sincronizarbajadaintermediahistc9",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincronizacionintegrantesintermedia_historicodint();
//                           },
//                           error:function() { erroravanza('Tabla intermedia bajada cap 9 historico'); }
//                         });  
//         };
//         function sincronizacionintegrantesintermedia_historicodint(){
//            $.ajax({
//                           url: "fc_sincronizacionintegrantesintermedia_historicodint",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion10intermediaservidor_historicod10();
//                           },
//                           error:function() { erroravanza('Tabla intermedia integrante historico'); }
//                         });  
//         };
//         function privacion10intermediaservidor_historicod10(){
//            $.ajax({
//                           url: "fc_privacion10intermediaservidor_historicod10",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 55;    
//                           privacion11intermediaservidor_historicod11();
//                           },
//                           error:function() { erroravanza('Tabla intermedia privacion 10 historico'); }
//                         });  
//         };
//         function privacion11intermediaservidor_historicod11(){
//            $.ajax({
//                           url: "fc_privacion11intermediaservidor_historicod11",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion12intermediaservidor_historicod12();
//                           },
//                           error:function() { erroravanza('Tabla intermedia privacion 11 historico'); }
//                         });  
//         };
//         function privacion12intermediaservidor_historicod12(){
//            $.ajax({
//                           url: "fc_privacion12intermediaservidor_historicod12",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion13intermediaservidor_historicod13();
//                           },
//                           error:function() { erroravanza('Tabla intermedia privacion 12 historico'); }
//                         });  
//         };
//         function privacion13intermediaservidor_historicod13(){
//            $.ajax({
//                           url: "fc_privacion13intermediaservidor_historicod13",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 56;    
//                           privacion14intermediaservidor_historicod14();
//                           },
//                           error:function() { erroravanza('Tabla intermedia privacion 13 historico'); }
//                         });  
//         };
//         function privacion14intermediaservidor_historicod14(){
//            $.ajax({
//                           url: "fc_privacion14intermediaservidor_historicod14",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion15intermediaservidor_historicod15();
//                           },
//                           error:function() { erroravanza('Tabla intermedia privacion 14 historico'); }
//                         });  
//         };
//         function privacion15intermediaservidor_historicod15(){
//            $.ajax({
//                           url: "fc_privacion15intermediaservidor_historicod15",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion16intermediaservidor_historicod16();
//                           },
//                           error:function() { erroravanza('Tabla intermedia privacion 15 historico'); }
//                         });  
//         };
//         function privacion16intermediaservidor_historicod16(){
//            $.ajax({
//                           url: "fc_privacion16intermediaservidor_historicod16",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){  
//                           sincroabajo = 57;    
//                           privacion1intermediaservidor_historicod1();
//                           },
//                           error:function() { erroravanza('Tabla intermedia privacion 16 historico'); }
//                         });  
//         };
//         function privacion1intermediaservidor_historicod1(){
//            $.ajax({
//                           url: "fc_privacion1intermediaservidor_historicod1",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion2intermediaservidor_historicod2();
//                           },
//                           error:function() { erroravanza('Tabla intermedia privacion 1 historico'); }
//                         });  
//         };
//         function privacion2intermediaservidor_historicod2(){
//            $.ajax({
//                           url: "fc_privacion2intermediaservidor_historicod2",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion3intermediaservidor_historicod3();
//                           },
//                           error:function() { erroravanza('Tabla intermedia privacion 2 historico'); }
//                         });  
//         };
//         function privacion3intermediaservidor_historicod3(){
//            $.ajax({
//                           url: "fc_privacion3intermediaservidor_historicod3",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 58;    
//                           privacion4intermediaservidor_historicod4();
//                           },
//                           error:function() { erroravanza('Tabla intermedia privacion 3 historico'); }
//                         });  
//         };
//         function privacion4intermediaservidor_historicod4(){
//            $.ajax({
//                           url: "fc_privacion4intermediaservidor_historicod4",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             ipmintermediaservidor_historicod();
//                           },
//                           error:function() { erroravanza('Tabla intermedia privacion 4 historico'); }
//                         });  
//         };




//         function ipmintermediaservidor_historicod(){
//            $.ajax({
//                           url: "fc_ipmintermediaservidor_historicod",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion5intermediaservidor_historicod5();
//                           },
//                           error:function() { erroravanza('Tabla IPM intermedia historico'); }
//                         });  
//         };








//         function privacion5intermediaservidor_historicod5(){
//            $.ajax({
//                           url: "fc_privacion5intermediaservidor_historicod5",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion6intermediaservidor_historicod6();
//                           },
//                           error:function() { erroravanza('Tabla intermedia privacion 5 historico'); }
//                         });  
//         };
//         function privacion6intermediaservidor_historicod6(){
//            $.ajax({
//                           url: "fc_privacion6intermediaservidor_historicod6",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 59;    
//                           privacion7intermediaservidor_historicod7();
//                           },
//                           error:function() { erroravanza('Tabla intermedia privacion 6 historico'); }
//                         });  
//         };
//         function privacion7intermediaservidor_historicod7(){
//            $.ajax({
//                           url: "fc_privacion7intermediaservidor_historicod7",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion8intermediaservidor_historicod8();
//                           },
//                           error:function() { erroravanza('Tabla intermedia privacion 7 historico'); }
//                         });  
//         };
//         function privacion8intermediaservidor_historicod8(){
//            $.ajax({
//                           url: "fc_privacion8intermediaservidor_historicod8",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           privacion9intermediaservidor_historicod9();
//                           },
//                           error:function() { erroravanza('Tabla intermedia privacion 8 historico'); }
//                         });  
//         };
//         function privacion9intermediaservidor_historicod9(){
//            $.ajax({
//                           url: "fc_privacion9intermediaservidor_historicod9",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincroabajo = 60;    
//                           sincronizarprotocoloestacionestado_intermedia_historicod1();
//                           },
//                           error:function() { erroravanza('Tabla intermedia privacion 9 historico'); }
//                         });  
//         };
//         function sincronizarprotocoloestacionestado_intermedia_historicod1(){
//            $.ajax({
//                           url: "fc_sincronizarprotocoloestacionestado_intermedia_historicod1",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           sincronizarprotocolopasosestado_intermedia_historicod1();
//                           },
//                           error:function() { erroravanza('Tabla intermedia historico final'); }
//                         });  
//         };
//         function sincronizarprotocolopasosestado_intermedia_historicod1(){
//            $.ajax({
//                           url: "fc_sincronizarprotocolopasosestado_intermedia_historicod1",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                           encuadreservidord();
//                           },
//                           error:function() { erroravanza('Tabla intermedia pasos historico final'); }
//                         });  
//         };
		
// 		function encuadreservidord(){
//            $.ajax({
//                           url: "fc_encuadreservidord",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             informaciongeneralvisitasservidord();
//                           },
//                           error:function() { erroravanza('Tabla visita Encuadre Bajada'); }
//                         });  
//         };
		
//         function informaciongeneralvisitasservidord(){
//            $.ajax({
//                           url: "fc_informaciongeneralvisitasservidord",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             informaciongeneralvisitas_historicod();
//                           },
//                           error:function() { erroravanza('Tabla validación visita Encuadre Bajada'); }
//                         });  
//         };
		

//         function informaciongeneralvisitas_historicod(){
//            $.ajax({
//                           url: "fc_informaciongeneralvisitas_historicod",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             informaciongeneralvisitas_aed();
//                           },
//                           error:function() { erroravanza('Tabla validación visita Encuadre Bajada'); }
//                         });  
//         };


//         function informaciongeneralvisitas_aed(){
//            $.ajax({
//                           url: "fc_informaciongeneralvisitas_aed",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             ipmintermediaLCV1d();
//                           },
//                           error:function() { erroravanza('Tabla validación visita Encuadre Bajada'); }
//                         });  
//         };


// 		//////////Fin Linea 2 ///////////////////////////////////////

//     //////////INICIO SINCRO ABAJO CIERRE/////////////

//     function ipmintermediaLCV1d(){
//            $.ajax({
//                           url: "fc_ipmintermediaLCV1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             privacion16intermediaLCV1d();
//                           },
//                           error:function() { erroravanza('Tabla validación ipmintermediaLCV1d'); }
//                         });  
//         };

//         function privacion16intermediaLCV1d(){
//            $.ajax({
//                           url: "fc_privacion16intermediaLCV1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             privacion15intermediaLCV1d();
//                           },
//                           error:function() { erroravanza('Tabla validación privacion16intermediaLCV1d'); }
//                         });  
//         };

//         function privacion15intermediaLCV1d(){
//            $.ajax({
//                           url: "fc_privacion15intermediaLCV1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             privacion14intermediaLCV1d();
//                           },
//                           error:function() { erroravanza('Tabla validación privacion15intermediaLCV1d'); }
//                         });  
//         };

//         function privacion14intermediaLCV1d(){
//            $.ajax({
//                           url: "fc_privacion14intermediaLCV1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             privacion13intermediaLCV1d();
//                           },
//                           error:function() { erroravanza('Tabla validación privacion14intermediaLCV1d'); }
//                         });  
//         };

//         function privacion13intermediaLCV1d(){
//            $.ajax({
//                           url: "fc_privacion13intermediaLCV1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             privacion12intermediaLCV1d();
//                           },
//                           error:function() { erroravanza('Tabla validación privacion13intermediaLCV1d'); }
//                         });  
//         };

//         function privacion12intermediaLCV1d(){
//            $.ajax({
//                           url: "fc_privacion12intermediaLCV1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             privacion11intermediaLCV1d();
//                           },
//                           error:function() { erroravanza('Tabla validación privacion12intermediaLCV1d'); }
//                         });  
//         };

//         function privacion11intermediaLCV1d(){
//            $.ajax({
//                           url: "fc_privacion11intermediaLCV1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             privacion10intermediaLCV1d();
//                           },
//                           error:function() { erroravanza('Tabla validación privacion11intermediaLCV1d'); }
//                         });  
//         };

//         function privacion10intermediaLCV1d(){
//            $.ajax({
//                           url: "fc_privacion10intermediaLCV1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             privacion9intermediaLCV1d();
//                           },
//                           error:function() { erroravanza('Tabla validación privacion10intermediaLCV1d'); }
//                         });  
//         };

//         function privacion9intermediaLCV1d(){
//            $.ajax({
//                           url: "fc_privacion9intermediaLCV1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             privacion8intermediaLCV1d();
//                           },
//                           error:function() { erroravanza('Tabla validación privacion9intermediaLCV1d'); }
//                         });  
//         };

//         function privacion8intermediaLCV1d(){
//            $.ajax({
//                           url: "fc_privacion8intermediaLCV1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             privacion7intermediaLCV1d();
//                           },
//                           error:function() { erroravanza('Tabla validación privacion8intermediaLCV1d'); }
//                         });  
//         };

//         function privacion7intermediaLCV1d(){
//            $.ajax({
//                           url: "fc_privacion7intermediaLCV1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             privacion6intermediaLCV1d();
//                           },
//                           error:function() { erroravanza('Tabla validación privacion7intermediaLCV1d'); }
//                         });  
//         };

//         function privacion6intermediaLCV1d(){
//            $.ajax({
//                           url: "fc_privacion6intermediaLCV1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             privacion5intermediaLCV1d();
//                           },
//                           error:function() { erroravanza('Tabla validación privacion6intermediaLCV1d'); }
//                         });  
//         };

//         function privacion5intermediaLCV1d(){
//            $.ajax({
//                           url: "fc_privacion5intermediaLCV1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             privacion4intermediaLCV1d();
//                           },
//                           error:function() { erroravanza('Tabla validación privacion5intermediaLCV1d'); }
//                         });  
//         };

//         function privacion4intermediaLCV1d(){
//            $.ajax({
//                           url: "fc_privacion4intermediaLCV1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             privacion3intermediaLCV1d();
//                           },
//                           error:function() { erroravanza('Tabla validación privacion4intermediaLCV1d'); }
//                         });  
//         };

//         function privacion3intermediaLCV1d(){
//            $.ajax({
//                           url: "fc_privacion3intermediaLCV1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             privacion2intermediaLCV1d();
//                           },
//                           error:function() { erroravanza('Tabla validación privacion3intermediaLCV1d'); }
//                         });  
//         };

//         function privacion2intermediaLCV1d(){
//            $.ajax({
//                           url: "fc_privacion2intermediaLCV1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             privacion1intermediaLCV1d();
//                           },
//                           error:function() { erroravanza('Tabla validación privacion2intermediaLCV1d'); }
//                         });  
//         };

//         function privacion1intermediaLCV1d(){
//            $.ajax({
//                           url: "fc_privacion1intermediaLCV1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             capitulo11intermedia_lineacierred();
//                           },
//                           error:function() { erroravanza('Tabla validación privacion1intermediaLCV1d'); }
//                         });  
//         };

//         function capitulo11intermedia_lineacierred(){
//            $.ajax({
//                           url: "fc_capitulo11intermedia_lineacierred",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             capitulo6intermedia_lineacierred();
//                           },
//                           error:function() { erroravanza('Tabla validación capitulo11intermedia_lineacierred'); }
//                         });  
//         };

//         function capitulo6intermedia_lineacierred(){
//            $.ajax({
//                           url: "fc_capitulo6intermedia_lineacierred",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             capitulo2intermedia_lineacierred();
//                           },
//                           error:function() { erroravanza('Tabla validación capitulo6intermedia_lineacierred'); }
//                         });  
//         };

//         function capitulo2intermedia_lineacierred(){
//            $.ajax({
//                           url: "fc_capitulo2intermedia_lineacierred",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             capitulo9intermedia_lineacierred();
//                           },
//                           error:function() { erroravanza('Tabla validación capitulo2intermedia_lineacierred'); }
//                         });  
//         };

        
//         function capitulo9intermedia_lineacierred(){
//            $.ajax({
//                           url: "fc_capitulo9intermedia_lineacierred",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             capitulo8intermedia_lineacierred();
//                           },
//                           error:function() { erroravanza('Tabla validación capitulo9intermedia_lineacierred'); }
//                         });  
//         };

//         function capitulo8intermedia_lineacierred(){
//            $.ajax({
//                           url: "fc_capitulo8intermedia_lineacierred",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             capitulo7intermedia_lineacierred();
//                           },
//                           error:function() { erroravanza('Tabla validación capitulo8intermedia_lineacierred'); }
//                         });  
//         };

//         function capitulo7intermedia_lineacierred(){
//            $.ajax({
//                           url: "fc_capitulo7intermedia_lineacierred",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             capitulo5intermedia_lineacierred();
//                           },
//                           error:function() { erroravanza('Tabla validación capitulo7intermedia_lineacierred'); }
//                         });  
//         };

//         function capitulo5intermedia_lineacierred(){
//            $.ajax({
//                           url: "fc_capitulo5intermedia_lineacierred",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             principalintegrantes_intermedialcv1d();
//                           },
//                           error:function() { erroravanza('Tabla validación capitulo5intermedia_lineacierred'); }
//                         });  
//         };

//         function principalintegrantes_intermedialcv1d(){
//            $.ajax({
//                           url: "fc_principalintegrantes_intermedialcv1d",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             sincronizaactualizacionppd();
//                           },
//                           error:function() { erroravanza('Tabla validación principalintegrantes_intermedialcv1d'); }
//                         });  
//         };

//         function sincronizaactualizacionppd(){
//            $.ajax({
//                           url: "fc_sincronizaactualizacionppd",
//                           type: "GET",
//                           data: {},    
//                           dataType: "html",
//                           success : function(obj){                      
//                             sincronizacionintegrantesd();
//                           },
//                           error:function() { erroravanza('Tabla validación t_actualizacionppd'); }
//                         });  
//         };


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
                          success : function(obj){    $('#barra').css('width','33.2%');$('#barra').html('33%');$('#progreso').html('Progreso Reasignación: 33%')                  
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
                          success : function(obj){    $('#barra').css('width','34.0%'); $('#barra').html('34%');$('#progreso').html('Progreso Reasignación: 34%')                 
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
                          success : function(obj){  $('#barra').css('width','35.2%'); $('#barra').html('35%');$('#progreso').html('Progreso Reasignación: 35%')                   
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
                          success : function(obj){$('#barra').css('width','36.0%'); $('#barra').html('36%');$('#progreso').html('Progreso Reasignación: 36%')                     
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
                          success : function(obj){  $('#barra').css('width','37.2%'); $('#barra').html('37%');$('#progreso').html('Progreso Reasignación: 37%')                   
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
                          success : function(obj){     $('#barra').css('width','38.0%'); $('#barra').html('38%');$('#progreso').html('Progreso Reasignación: 38%')                
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
                          success : function(obj){ $('#barra').css('width','38.4%');  $('#barra').html('39%');$('#progreso').html('Progreso Reasignación: 39%')                   
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
                          success : function(obj){     $('#barra').css('width','40.2%');$('#barra').html('40%');$('#progreso').html('Progreso Reasignación: 40%')                 
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
                          success : function(obj){      $('#barra').css('width','41.0%');  $('#barra').html('41%');$('#progreso').html('Progreso Reasignación: 41%')              
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
                          success : function(obj){     $('#barra').css('width','42.2%'); $('#barra').html('42%');$('#progreso').html('Progreso Reasignación: 42%')                
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
                          success : function(obj){      $('#barra').css('width','43.0%'); $('#barra').html('43%');$('#progreso').html('Progreso Reasignación: 43%')               
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
                          success : function(obj){       $('#barra').css('width','44.2%'); $('#barra').html('44%');$('#progreso').html('Progreso Reasignación: 44%')              
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
                          success : function(obj){   $('#barra').css('width','45.0%'); $('#barra').html('45%');$('#progreso').html('Progreso Reasignación: 45%')                  
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
                          success : function(obj){       $('#barra').css('width','46.4%'); $('#barra').html('46%');$('#progreso').html('Progreso Reasignación: 46%')                
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
                          success : function(obj){    $('#barra').css('width','47.2%');$('#barra').html('47%');$('#progreso').html('Progreso Reasignación: 47%')                    
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
                          success : function(obj){    $('#barra').css('width','48.0%');$('#barra').html('48%');$('#progreso').html('Progreso Reasignación: 48%')                    
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
                          success : function(obj){     $('#barra').css('width','49.2%');$('#barra').html('49%');$('#progreso').html('Progreso Reasignación: 49%')                   
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
                          success : function(obj){   $('#barra').css('width','50.0%');  $('#barra').html('50%');$('#progreso').html('Progreso Reasignación: 50%')                   
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
                          success : function(obj){    $('#barra').css('width','51%'); $('#barra').html('51%');$('#progreso').html('Progreso Reasignación: 51%')                   
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
                          success : function(obj){   $('#barra').css('width','52.5%'); $('#barra').html('52%');$('#progreso').html('Progreso Reasignación: 52%')                     
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
                          success : function(obj){    $('#barra').css('width','53%');$('#barra').html('53%');$('#progreso').html('Progreso Reasignación: 53%')                    
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
                          success : function(obj){   $('#barra').css('width','54.0%'); $('#barra').html('54%');$('#progreso').html('Progreso Reasignación: 54%')                    
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
                          success : function(obj){      $('#barra').css('width','55.0%');  $('#barra').html('55%');$('#progreso').html('Progreso Reasignación: 55%')                
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
                          success : function(obj){    $('#barra').css('width','56.0%');$('#barra').html('56%');$('#progreso').html('Progreso Reasignación: 56%')                    
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
                          success : function(obj){   $('#barra').css('width','57.0%');$('#barra').html('57%');$('#progreso').html('Progreso Reasignación: 57%') 
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
                          success : function(obj){     $('#barra').css('width','58.0%');$('#barra').html('58%');$('#progreso').html('Progreso Reasignación: 58%')                   
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
                          success : function(obj){         $('#barra').css('width','59.0%');$('#barra').html('59%');$('#progreso').html('Progreso Reasignación: 59%')               
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
                          success : function(obj){     $('#barra').css('width','60.0%');$('#barra').html('60%');$('#progreso').html('Progreso Reasignación: 60%')                   
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
                          success : function(obj){    $('#barra').css('width','61.0%'); $('#barra').html('61%');$('#progreso').html('Progreso Reasignación: 61%')                   
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
                          success : function(obj){      $('#barra').css('width','62.0%'); $('#barra').html('62%');$('#progreso').html('Progreso Reasignación: 62%')                 
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
                          success : function(obj){    $('#barra').css('width','63.0%');$('#barra').html('63%');$('#progreso').html('Progreso Reasignación: 63%')                    
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
                          success : function(obj){         $('#barra').css('width','64.0%');$('#barra').html('64%');$('#progreso').html('Progreso Reasignación: 64%')               
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
                          success : function(obj){  $('#barra').css('width','65.0%'); $('#barra').html('65%');$('#progreso').html('Progreso Reasignación: 65%')                     
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
                          success : function(obj){     $('#barra').css('width','66.0%');$('#barra').html('66%');$('#progreso').html('Progreso Reasignación: 66%')                   
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
                          success : function(obj){     $('#barra').css('width','67.0%');$('#barra').html('67%');$('#progreso').html('Progreso Reasignación: 67%')                   
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
                          success : function(obj){       $('#barra').css('width','68.0%'); $('#barra').html('68%');$('#progreso').html('Progreso Reasignación: 68%')                
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
                          success : function(obj){       $('#barra').css('width','69.0%'); $('#barra').html('69%');$('#progreso').html('Progreso Reasignación: 69%')                
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
                          success : function(obj){           $('#barra').css('width','70.0%'); $('#barra').html('70%');$('#progreso').html('Progreso Reasignación: 70%')            
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
                          success : function(obj){             $('#barra').css('width','71.0%'); $('#barra').html('71%');$('#progreso').html('Progreso Reasignación: 71%')          
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
                          success : function(obj){           $('#barra').css('width','72.0%');$('#barra').html('72%');$('#progreso').html('Progreso Reasignación: 72%')             
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
                          success : function(obj){        $('#barra').css('width','73.0%');$('#barra').html('73%');$('#progreso').html('Progreso Reasignación: 73%')                
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
                          success : function(obj){             $('#barra').css('width','74.0%');$('#barra').html('74%');$('#progreso').html('Progreso Reasignación: 74%')           
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
                          success : function(obj){           $('#barra').css('width','75.0%'); $('#barra').html('75%');$('#progreso').html('Progreso Reasignación: 75%')            
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
                          success : function(obj){       $('#barra').css('width','76.0%'); $('#barra').html('76%');$('#progreso').html('Progreso Reasignación: 76%')                
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
                          success : function(obj){        $('#barra').css('width','77.0%');$('#barra').html('77%');$('#progreso').html('Progreso Reasignación: 77%')                
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
                          success : function(obj){        $('#barra').css('width','78.0%'); $('#barra').html('78%');$('#progreso').html('Progreso Reasignación: 78%')               
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
                          success : function(obj){        $('#barra').css('width','79.0%');$('#barra').html('79%');$('#progreso').html('Progreso Reasignación: 79%')                
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
                          success : function(obj){        $('#barra').css('width','80.0%');$('#barra').html('80%');$('#progreso').html('Progreso Reasignación: 80%')                
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
                          success : function(obj){     $('#barra').css('width','81.0%');$('#barra').html('81%');$('#progreso').html('Progreso Reasignación: 81%')                   
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
                          success : function(obj){            $('#barra').css('width','82.0%');$('#barra').html('82%');$('#progreso').html('Progreso Reasignación: 82%')            
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
                          success : function(obj){         $('#barra').css('width','83.0%'); $('#barra').html('83%');$('#progreso').html('Progreso Reasignación: 83%')              
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
                          success : function(obj){      $('#barra').css('width','84.0%');$('#barra').html('84%');$('#progreso').html('Progreso Reasignación: 84%')                  
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
                          success : function(obj){               $('#barra').css('width','85.0%'); $('#barra').html('85%');$('#progreso').html('Progreso Reasignación: 85%')        
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
                          success : function(obj){     $('#barra').css('width','86.0%'); $('#barra').html('86%');$('#progreso').html('Progreso Reasignación: 86%')                  
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
                          success : function(obj){                       $('#barra').css('width','87.0%');$('#barra').html('87%');$('#progreso').html('Progreso Reasignación: 87%') 
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
                          success : function(obj){       $('#barra').css('width','88.0%'); $('#barra').html('88%');$('#progreso').html('Progreso Reasignación: 88%')                
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
                          success : function(obj){            $('#barra').css('width','89.0%'); $('#barra').html('89%');$('#progreso').html('Progreso Reasignación: 89%')           
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
                          success : function(obj){       $('#barra').css('width','90.0%');$('#barra').html('90%');$('#progreso').html('Progreso Reasignación: 90%')                 
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
                          success : function(obj){       $('#barra').css('width','91.0%');$('#barra').html('91%');$('#progreso').html('Progreso Reasignación: 91%')                 
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
                          success : function(obj){       $('#barra').css('width','92.0%');$('#barra').html('92%');$('#progreso').html('Progreso Reasignación: 92%')                 
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
                          success : function(obj){         $('#barra').css('width','93.0%'); $('#barra').html('93%');$('#progreso').html('Progreso Reasignación: 93%')              
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
                          success : function(obj){      $('#barra').css('width','94.0%');$('#barra').html('94%');$('#progreso').html('Progreso Reasignación: 94%')                  
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
                          success : function(obj){        $('#barra').css('width','95.0%');$('#barra').html('95%');$('#progreso').html('Progreso Reasignación: 95%')                
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
                          success : function(obj){      $('#barra').css('width','96.0%'); $('#barra').html('96%');$('#progreso').html('Progreso Reasignación: 96%')                 
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
                          success : function(obj){       $('#barra').css('width','97.0%'); $('#barra').html('97%');$('#progreso').html('Progreso Reasignación: 97%')                
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
                          success : function(obj){  $('#barra').css('width','98.2%'); $('#barra').html('98%');$('#progreso').html('Progreso Reasignación: 98%')
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
        
      //  function sincronizacionintegrantesd(){
      //      $.ajax({
      //                     url: "fc_sincronizacionintegrantesd",
      //                     type: "GET",
      //                     data: {},    
      //                     dataType: "html",
      //                     success : function(obj){ 
      //                     sincroabajo = 61;    
      //                     sincronizacionhogard();
      //                     },
      //                     error:function() {
      //                         erroravanza('Asignar Integrantes');
      //                       }
      //                   });  
           
      //   };
        
      //   function sincronizacionhogard(){
      //      $.ajax({
      //                     url: "fc_sincronizacionhogard",
      //                     type: "GET",
      //                     data: {},    
      //                     dataType: "html",
      //                     success : function(obj){                      
      //                     movlogsisbend();
      //                     },
      //                     error:function() {
      //                         erroravanza('Asignar Hogar');
      //                        }
      //                   });  
           
      //   };
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
        
        function sincronizacionhogard(){  $('#barra').css('width','99.4%'); $('#barra').html('99%');$('#progreso').html('Progreso Reasignación: 99%')
           $.ajax({
                          url: "fc_sincronizacionhogardok",
                          type: "GET",
                          data: {},    
                          dataType: "html",
                          success : function(obj){                      
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
                          foliosactualizadosd2();
                         },
                         error:function() {
                             erroravanza('Movimiento Logros del sisben');
                           }
                       });  
          
       };

 

       function foliosactualizadosd2(){
$.ajax({
      url: "fc_foliosactualizadosok",
      type: "get",
      data: {},
      dataType: "json",
      success: function(obj) {   
            $.ajax({
            url: "fc_foliosactualizados",
            type: "get",
            data: {},
            dataType: "json",
            success: function(obj) {  
              sincroabajo == 62;   
              actualizappalhogard();                                                                  
              },
            error:function() {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                        erroravanza('Capitulo 2');
            }
          });                                                                             
        },
      error:function() {//alert("Hola Juan Error" + jqXHR.status + textStatus + errorThrown);
                   erroravanza('Capitulo 2');
      }
    });       

}

function actualizappalhogard(){
          $.ajax({
                         url: "fc_actualizapphpgard",
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
                          success : function(obj){
                            $('#barra').css('width','100%');$('#barra').html('100%');$('#progreso').html('Progreso: 100%')                      
                            avanza();
                            janelaPopUp.abre("fin", 'm green', 'Mensaje', 'Sincronizacion Exitosa!!!!');
                            detenerReloj();
                          },
                          error:function() {
                              erroravanza('Borrar Inactivos');
                            }
                        });  
           
        };
    $(document).ready(function() {
     
    editar_llbfb();
 //erroravanza('Borrar Inactivos');
 //janelaPopUp.abre("fin", 'm green', 'Mensaje', 'Sincronizacion Exitosa!!!!');

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









