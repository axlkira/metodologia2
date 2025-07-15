<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $titulo ?>  </title>
    <link rel="stylesheet" href="<?php echo BOOTSTRAP, 'css/bootstrap1.min.css'; ?>" >
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="es"/>

</head>
<body>  
    <div class="container">
        <!--head-->
        <?php echo($head); ?>
        <!-- fin head-->
        <input type="text" class="form-control input-sm" id="folio" name="folio" style="display:none"    placeholder="folio" value="<?php echo($folio); ?>">
        <input type="text" class="form-control input-sm" id="doccogestor" name="doccogestor" style="display:none"    placeholder="dococogestor" value="<?php echo($docogestor); ?>">

<br><br>
      
<div class="form-row align-items-baseline">
            <div class="col-sm-12"><br>           
            <div id="enunciadono" name="enunciadono" class="alert alert-success" role="alert">
            <b>Formulario de encuadre</b><br>           
            </div>
            </div>
            <br>
</div><br><br><br><br><br>

        <form class="was-validated" id="form1">

              <div class="form-row align-items-baseline">
                <!-- Aqui comienza el div de la pregunta 1 del capitulo 3  style="display:none" -->

                <div class="col-sm-4"><br>
                  <label><b>Nacionalidad</b></label>
                  <select class="form-control" name="ep1" required="" id="ep1" onchange="validanacionalidad(this.value);">
                    <option value="">Seleccione</option>
                    <option value="Colombiano/a">Colombiano/a</option>
                    <option value="Venezolano/a">Venezolano/a</option>
                    <option value="Otra">Otra</option>
                  </select>
                </div>

                <div id="nacionalidaddiv" class="col-sm-4" style="display: none"><br>
                  <label><b>Cuál</b></label>
                  <input class="form-control" name="ep1cual" id="ep1cual" onKeyPress="return soloLetras(event)" value="">
                </div>

                <div class="col-sm-4" id="ep2div" ><br>
                  
                  <label><b>Etnia</b></label>
                  <select class="form-control" id="epetnia" required=""   name="epetnia">
                    <option value="">Seleccione</option>
                    <option value="Indigena">INDIGENA</option>
                    <option value="Rom o Gitano">ROM Ó GITANO</option>
                    <option value="Raizal de archipielago">RAIZAL ARCHIPIÉLAGO</option>
                    <option value="Palenquero">PALENQUERO</option>
                    <option value="Ninguna de las anteriores">NINGUNA DE LAS ANTERIORES</option>
                   
                  </select>

                </div>
              </div>

              <br><br><br><br><hr>

              <div class="form-row align-items-baseline">
              <div class="col-sm-3" id="ep2div" >
                  
                  <label><b>Mujeres embarazadas en el hogar</b></label>
                  <select class="form-control" id="ep2" required=""  onchange="validap2(this.value);" name="ep2">
                    <option value="">Seleccione</option>
                    <option value="Si">SI</option>
                    <option value="No">NO</option>
                  </select>

                </div>

                <div class="col-sm-3"  id="ep3cuantodiv" style="display: none"><br>
                  
                  <label><b>Cuantas</b></label>
                  <input class="form-control" name="ep3cuanto" onkeyup="menorque1('ep3cuanto')" min="1" type="number" id="ep3cuanto"  value="">

                </div>


                <div class="col-sm-3" id="ep3div" style="display: none"><br>
                  
                  <label><b>Es embarazo adolescente</b></label>
                  <select class="form-control" id="ep3" required=""   name="ep3">
                    <option value="">Seleccione</option>
                    <option value="Si">SI</option>
                    <option value="No">NO</option>
                  </select>

                </div>

                <div class="col-sm-3" id="ep4div" style="display:none">
                  
                  <label><b>Meses de gestación Ej: si son dos mujeres 3 - 5</b></label>
                  <input class="form-control" name="ep4"  id="ep4"  value="">

                </div>

              </div>

              <br><br><br><br><hr>

              <div class="form-row align-items-baseline">

              <div class="col-sm-3">                  
                  <label><b>Mujeres lactantes</b></label>
                  <select class="form-control" id="ep5" required=""   onchange="validap5(this.value);" name="ep5">
                    <option value="">Seleccione</option>
                    <option value="Si">SI</option>
                    <option value="No">NO</option>
                  </select>
              </div>

              <div class="col-sm-3" id="ep5cuantodiv" style="display:none">                  
                  <label><b>Cuantas</b></label>
                  <input class="form-control" name="ep5cuanto" min="1" onkeyup="menorque1('ep5cuanto')"  id="ep5cuanto" type="number" value="">
               </div>

              </div>
              
              <div class="col-sm-3">                  
                  <label><b>Adultos mayores en el hogar</b></label>
                  <select class="form-control" id="ep6" required=""   onchange="validap6(this.value);" name="ep6">
                    <option value="">Seleccione</option>
                    <option value="Si">SI</option>
                    <option value="No">NO</option>
                  </select>
              </div>

              <div class="col-sm-3" id="ep6cuantodiv" style="display:none">                  
                  <label><b>Cuantos</b></label>
                  <input class="form-control" name="ep6cuanto" min="1" onkeyup="menorque1('ep6cuanto')"  id="ep6cuanto" type="number" value="">
               </div>

              <br><br><br><br><hr>

              <div class="form-row align-items-baseline">

                <div class="col-sm-3"> 
                <br>         
                  <label><b>Menores de edad en el hogar</b></label>
                  <select class="form-control" id="ep7" required=""   onchange="validap7(this.value);" name="ep7">
                    <option value="">Seleccione</option>
                    <option value="Si">SI</option>
                    <option value="No">NO</option>
                  </select>
                </div>

              <div class="col-sm-3" id="ep7cuantodiv" style="display:none">                  
                <label><b>Cuantos</b></label>
                <input class="form-control" name="ep7cuanto" min="1" onkeyup="menorque1('ep7cuanto')"  id="ep7cuanto" type="number" value="">
              </div>
                  
                                  <div class="col-sm-3">                  
                            <label><b>Personas en situaciónn de discapacidad</b></label>
                            <select class="form-control" id="ep8" required=""  onchange="validap8(this.value);" name="ep8">
                              <option value="">Seleccione</option>
                              <option value="Si">SI</option>
                              <option value="No">NO</option>
                            </select>
                    </div>

                    <div class="col-sm-3" id="ep8cuantodiv" style="display:none"> <br>                 
                            <label><b>Cuantos</b></label>
                            <input class="form-control" name="ep8cuanto" onkeyup="menorque1('ep8cuanto')"  min="1" id="ep8cuanto" type="number" value="">
                     </div>    

              </div>
            <br><br><br><br><hr>

                    <div class="form-row align-items-baseline">
                    <div class="col-sm-3">                  
                            <label><b>Personas sin aseguramiento en salud hogar</b></label>
                            <select class="form-control" id="ep9"  required=""  onchange="validap9(this.value);" name="ep9">
                              <option value="">Seleccione</option>
                              <option value="Si">SI</option>
                              <option value="No">NO</option>
                            </select>
                    </div>

                    <div class="col-sm-3" id="ep9cuantodiv" style="display:none">    <br>              
                            <label><b>Cuantos</b></label>
                            <input class="form-control" name="ep9cuanto" min="1" onkeyup="menorque1('ep9cuanto')"  id="ep9cuanto" type="number" value="">
                     </div>
                     <div class="col-sm-3">                  
                            <label><b>Personas privadas de la libertad (casa por cárcel) hogar</b></label>
                            <select class="form-control" id="ep10" required=""   onchange="validap10(this.value);" name="ep10">
                              <option value="">Seleccione</option>
                              <option value="Si">SI</option>
                              <option value="No">NO</option>
                            </select>
                    </div>

                    <div class="col-sm-3" id="ep10cuantodiv" style="display:none">    <br>              
                            <label><b>Cuantos</b></label>
                            <input class="form-control" name="ep10cuanto"  min="1" onkeyup="menorque1('ep10cuanto')"  id="ep10cuanto" type="number" value="">
                     </div>   
                        <br><br><br><br><hr>
                     </div>

                    <div class="form-row align-items-baseline">
                    <div class="col-sm-6">                  
                    <label><b>Validación síntomas relacionados con COVID-19.</b></label>
                    <p>Indagar si algún integrante tiene o ha tenido algún síntoma. Dar a conocer al hogar las líneas donde puede comunicarse en caso de presentarse</p>

                            <select class="form-control" id="ep11" required=""   name="ep11">
                              <option value="">Seleccione</option>
                              <option value="Si">SI</option>
                              <option value="No">NO</option>
                            </select>
            </div>
            </div>                                        
            <br><br><br><br><br><br><br><hr>
            <div class="form-row align-items-baseline">
            <div class="col-sm-12"><br>           
            <label><b>Verificación beneficiarios ayudas</b></label>
            <p>¿Algún miembro de la familia ha recibido alguna ayuda humanitaria?</p>
            <div id="enunciadono" name="enunciadono" class="alert alert-danger" role="alert">
            <b>En este punto, el Cogestor deberá seleccionar si algún miembro de la familia recibe alguno de los beneficios a nivel municipal o nacional tales como:</b><br>           
            </div>
            </div>
            <br>
            </div><br><br><br><br><br><br>
            <div class="form-row align-items-baseline">

            <div class="col-sm-3">  <br>                
            <label><b>Mas familias en acción</b></label>
							<select class="form-control" id="ep13" required="" name="ep13">
							  <option value="">Seleccione</option>
							  <option value="Si">SI</option>
							  <option value="No">NO</option>
                                                          <option value="N/A">N/A</option>
							</select>
            </div>
            
            <div class="col-sm-3">   <br>               
						<label><b>Jovenes en acción</b></label><br>
							<select class="form-control" id="ep14"  required=""  name="ep14">
							  <option value="">Seleccione</option>
							  <option value="Si">SI</option>
							  <option value="No">NO</option>
                                                          <option value="N/A">N/A</option>
							</select>
            </div>

            <div class="col-sm-3">    <br>              
						<label><b>Ingreso solidario</b></label>
							<select class="form-control" id="ep15" required=""   name="ep15">
							  <option value="">Seleccione</option>
							  <option value="Si">SI</option>
							  <option value="No">NO</option>
                                                          <option value="N/A">N/A</option>
							</select>
            </div>

            <div class="col-sm-3">                  
						<label><b>Paquete alimentario Alcaldía de Medellín</b></label><br>
							<select class="form-control" id="ep16"  required=""  name="ep16">
							  <option value="">Seleccione</option>
							  <option value="Si">SI</option>
							  <option value="No">NO</option>
                                                          <option value="N/A">N/A</option>
							</select>
            </div>

            </div><br><br><br><br><br><hr>

            <div class="form-row align-items-baseline">

            <div class="col-sm-3">                  
						<label><b>	Paquete alimentario PAE. (Secretaría de Educación)</b></label><br>
							<select class="form-control" id="ep17"  required=""  name="ep17">
							  <option value="">Seleccione</option>
							  <option value="Si">SI</option>
							  <option value="No">NO</option>
                                                          <option value="N/A">N/A</option>
							</select>
            </div>   

<div class="col-sm-3">  <br>                
<label><b>Devolución del IVA</b></label>
  <select class="form-control" id="ep18"  required=""  name="ep18">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3">   <br>               
<label><b>SISBEN</b></label><br>
  <select class="form-control" id="ep19"  required=""  name="ep19">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3">                  
<label><b>Proceso de aseguramiento en salud con Savia Salud</b></label><br>
  <select class="form-control" id="ep20"  required=""  name="ep20">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

</div><br><br><br><br><br><hr>

<div class="form-row align-items-baseline">

<div class="col-sm-3">                
<label><b>Subsidio Colombia Mayor </b></label>
  <select class="form-control" id="ep21"  required=""  name="ep21">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3">                  
<label><b>Otro beneficio</b></label><br>
  <select class="form-control" id="ep22" required=""   onchange="valida22cual(this.value);" name="ep22">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-6" id="ep22cualdiv" style="display:none">                  
							<label><b>Cuál</b></label>
							<input class="form-control" name="ep22cual"  id="ep22cual" type="text" value="">
						 </div>

</div>
<br><br><br><hr>



<!-- inicio campos nuevos con variables nuevas -->
            <div class="form-row align-items-baseline">
            <div class="col-sm-12"><br>           
            <b><p>Socialización de las ayudas humanitarias</p></b>
            <div id="enunciadono" name="enunciadono" class="alert alert-success" role="alert">
            <b>A partir de las necesidades del hogar, ¿cuál de las siguientes  ayudas humanitarias es socializada por el cogestor? (Acerca):</b><br>           
            </div>
            </div>
            <br>
            </div><br><br><br><br><br>
            <div class="form-row align-items-baseline">

            <div class="col-sm-3">  <br>                
            <label><b>Mas familias en acción</b></label>
							<select class="form-control" id="ep13s" required="" name="ep13s">
							  <option value="">Seleccione</option>
							  <option value="Si">SI</option>
							  <option value="No">NO</option>
                                                          <option value="N/A">N/A</option>
							</select>
            </div>
            
            <div class="col-sm-3">   <br>               
						<label><b>Jóvenes en acción</b></label><br>
							<select class="form-control" id="ep14s"  required=""  name="ep14s">
							  <option value="">Seleccione</option>
							  <option value="Si">SI</option>
							  <option value="No">NO</option>
                                                          <option value="N/A">N/A</option>
							</select>
            </div>

            <div class="col-sm-3">    <br>              
						<label><b>Ingreso solidario</b></label>
							<select class="form-control" id="ep15s" required=""   name="ep15s">
							  <option value="">Seleccione</option>
							  <option value="Si">SI</option>
							  <option value="No">NO</option>
                                                          <option value="N/A">N/A</option>
							</select>
            </div>

            <div class="col-sm-3">                  
						<label><b>Paquete alimentario Alcaldía de Medellín</b></label><br>
							<select class="form-control" id="ep16s"  required=""  name="ep16s">
							  <option value="">Seleccione</option>
							  <option value="Si">SI</option>
							  <option value="No">NO</option>
                                                          <option value="N/A">N/A</option>
							</select>
            </div>

            </div><br><br><br><br><br><hr>

            <div class="form-row align-items-baseline">

            <div class="col-sm-3">                  
						<label><b>Paquete alimentario PAE. (Secretaría de Educación)</b></label><br>
							<select class="form-control" id="ep17s"  required=""  name="ep17s">
							  <option value="">Seleccione</option>
							  <option value="Si">SI</option>
							  <option value="No">NO</option>
                                                          <option value="N/A">N/A</option>
							</select>
            </div>   

<div class="col-sm-3">  <br>                
<label><b>Devolución del IVA</b></label>
  <select class="form-control" id="ep18s"  required=""  name="ep18s">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3">   <br>               
<label><b>SISBEN</b></label><br>
  <select class="form-control" id="ep19s"  required=""  name="ep19s">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3">                  
<label><b>Proceso de aseguramiento en salud con Savia Salud</b></label><br>
  <select class="form-control" id="ep20s"  required=""  name="ep20s">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

</div><br><br><br><br><br><hr>

<div class="form-row align-items-baseline">

<div class="col-sm-3">                
<label><b>Subsidio Colombia Mayor </b></label>
  <select class="form-control" id="ep21s"  required=""  name="ep21s">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3">                  
<label><b>Otro beneficio</b></label><br>
  <select class="form-control" id="ep22s" required="" onchange="valida22cuals(this.value);" name="ep22s">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-6" id="ep22cualsdiv" style="display:none">                  
<label><b>¿Cuál?</b></label>
<input class="form-control" name="ep22cuals"  id="ep22cuals" type="text" value="">
</div>

</div>
<br><br><br><hr>
<!-- fin campos nuevos con variables nuevas -->


<div class="form-row align-items-baseline">

<div class="col-sm-12"><br>           
            <div id="enunciadono" name="enunciadono" class="alert alert-warning" role="alert">
            <b>Adicional verificar con el hogar si son beneficiarios de:</b><br>           
            </div>
            </div>
            <br>
</div><br><br><br><br><br>

<div class="col-sm-3">                
<label><b>Bienestar Familiar (rutas de atención)</b></label>
  <select class="form-control" id="ep23"  required="" name="ep23">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3">                
<label><b>Paquete alimentario organizaciones sociales o particulares</b></label>
  <select class="form-control" id="ep24" required="" name="ep24">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3">                
<label><b>UARIV(Unidad de Atención y Reacción Inmediata para Víctimas)</b></label>
  <select class="form-control" id="ep25"  required="" name="ep25">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3">                
<label><b>Mecanismos de protección al cesante</b></label>
  <select class="form-control" id="ep26"  required="" name="ep26">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<br><br><br><hr>

<div class="col-sm-3">                
<label><b>Paquete alimentario Adultos Mayores</b></label>
  <select class="form-control" id="ep27"  required="" name="ep27">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3">                
<label><b>Servicios públicos Epm conexión normal </b></label>
  <select class="form-control" id="ep28"  required="" name="ep28">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3">        <br>      
<label><b>Servicios públicos EPM prepago</b></label>
  <select class="form-control" id="ep29"  required="" name="ep29">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3"><br>                
<label><b>Reconexión de servicios públicos</b></label>
  <select class="form-control" id="ep30"  required="" name="ep30">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>
<br><br><br><br><hr>

<!-- inicio campos nuevos con variables nuevas -->
<div class="form-row align-items-baseline">

<div class="col-sm-12"><br>           
            <b><p>Socialización de los beneficios</p></b>
            <div id="enunciadono" name="enunciadono" class="alert alert-info" role="alert">
            <b>A partir de las necesidades del hogar, ¿cuál de los siguientes beneficios son socializados por el cogestor? (Acerca):</b><br>           
            </div>
            </div>
            <br>
</div><br><br><br><br><br>
            
<div class="col-sm-3">                
<label><b>Bienestar Familiar (rutas de atención)</b></label>
  <select class="form-control" id="ep23s"  required="" name="ep23s">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3">                
<label><b>Paquete alimentario organizaciones sociales o particulares</b></label>
  <select class="form-control" id="ep24s" required="" name="ep24s">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3">                
<label><b>UARIV(Unidad de Atención y Reacción Inmediata para Víctimas)</b></label>
  <select class="form-control" id="ep25s" required="" name="ep25s">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3">                
<label><b>Mecanismos de protección al cesante</b></label>
  <select class="form-control" id="ep26s" required="" name="ep26s">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<br><br><br><hr>

<div class="col-sm-3">                
<label><b>Paquete alimentario Adultos Mayores</b></label>
  <select class="form-control" id="ep27s" required="" name="ep27s">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3">                
<label><b>Servicios públicos EPM conexión normal </b></label>
  <select class="form-control" id="ep28s" required="" name="ep28s">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3">        <br>      
<label><b>Servicios públicos EPM prepago</b></label>
  <select class="form-control" id="ep29s" required="" name="ep29s">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>

<div class="col-sm-3"><br>               
<label><b>Reconexión de servicios públicos</b></label>
  <select class="form-control" id="ep30s" required="" name="ep30s">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
    <option value="N/A">N/A</option>
  </select>
</div>
<br><br><br><br><hr>

<div class="form-row align-items-baseline">

<div class="col-sm-12"><br>           
            <b><p>Validación mapa de riesgo</p></b>
            <div id="enunciadono" name="enunciadono" class="alert alert-danger" role="alert">
            <b>Según el mapa de riesgo, ¿cuáles riesgos pueden estar pasando los integrantes del hogar?</b><br>           
            </div>
            </div>
            <br>
</div><br><br><br><br><br>
    
<div class="col-sm-4">              <br>  
<label><b>Violencia intrafamiliar</b></label>
  <select class="form-control" id="ep31mr1"  required="" name="ep31mr1">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
  </select>
</div>

<div class="col-sm-4">         <br>       
<label><b>Abuso sexual</b></label>
  <select class="form-control" id="ep31mr2" required="" name="ep31mr2">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
  </select>
</div>

<div class="col-sm-4">                
<label><b>Integrantes con depresión, psicosis, ansiedad o alguna condición psicológica asociada</b></label>
  <select class="form-control" id="ep31mr3" required="" name="ep31mr3">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
  </select>
</div>

<br><br><br><br><br><hr>

<div class="form-row align-items-baseline">

<div class="col-sm-4">                <br>
<label><b>Presencia de actividades al margen de la ley</b></label>
  <select class="form-control" id="ep31mr4" required="" name="ep31mr4">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
  </select>
</div>
    
<div class="col-sm-4">                
<label><b>Conflictos sociales intrabarriales que puedan afectar el hogar</b></label>
  <select class="form-control" id="ep31mr5" required="" name="ep31mr5">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
  </select>
</div>

<div class="col-sm-4"><br>
<label><b>Consumo de SPA (Sustancias psicoactivas)</b></label>
  <select class="form-control" id="ep31mr6" required="" name="ep31mr6">
    <option value="">Seleccione</option>
    <option value="Si">SI</option>
    <option value="No">NO</option>
  </select>
</div>
<!--
<div class="form-row align-items-baseline">

<div class="col-sm-12">
<textarea class="form-control" required="" id="ep31" rows="3"></textarea>
</div>
</div>-->

<br><br><br><br><hr>
    <div class="col-md-2">
					      <button class="btn btn-primary"  id="guardaraaa" name="guardaraaa">Guardar</button>
                                              <button class="btn btn-primary"  id="volver" name="volver">Volver</button>
    </div>
        </div>
            </form>  
    <!--Inicio Este es el footer NO TOCAR-->
    <?php echo($foot); ?>
    <!--fin del footer NO TOCAR-->
    
    
    <!--Inicio de los enlaces-->
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
    <!--Inicio de los enlaces-->
</body>

<script> 
///////////////////////////////////////Funciones que llaman al controlador para guardar y actualizar////////////////////////////////////////////////////////////////////////    
$(document).ready(function()
    {

     $("#form1").on("submit", function(e) {
     //   alert('boton entra a guardar');
        e.preventDefault();
      actualizarCapitulo22();
    });


    $("#ep32").on('paste', function(e){
      alert('entra');
    e.preventDefault();
    alert('Esta acción está prohibida');
  });

   
$('#ep1').val('<?php echo $carraydatosgenerales['ep1'] ?>');
$('#ep1cual').val('<?php echo $carraydatosgenerales['ep1cual'] ?>');
$('#epetnia').val('<?php echo $carraydatosgenerales['epetnia'] ?>');
$('#ep2').val('<?php echo $carraydatosgenerales['ep2'] ?>');
$('#ep3').val('<?php echo $carraydatosgenerales['ep3'] ?>');
$('#ep3cuanto').val('<?php echo $carraydatosgenerales['ep3cuanto'] ?>');
$('#ep4').val('<?php echo $carraydatosgenerales['ep4'] ?>');
$('#ep5').val('<?php echo $carraydatosgenerales['ep5'] ?>');
$('#ep5cuanto').val('<?php echo $carraydatosgenerales['ep5cuanto'] ?>');
$('#ep6').val('<?php echo $carraydatosgenerales['ep6'] ?>');
$('#ep6cuanto').val('<?php echo $carraydatosgenerales['ep6cuanto'] ?>');
$('#ep7').val('<?php echo $carraydatosgenerales['ep7'] ?>');
$('#ep7cuanto').val('<?php echo $carraydatosgenerales['ep7cuanto'] ?>');
$('#ep8').val('<?php echo $carraydatosgenerales['ep8'] ?>');
$('#ep8cuanto').val('<?php echo $carraydatosgenerales['ep8cuanto'] ?>');
$('#ep9').val('<?php echo $carraydatosgenerales['ep9'] ?>');
$('#ep9cuanto').val('<?php echo $carraydatosgenerales['ep9cuanto'] ?>');
$('#ep10cuanto').val('<?php echo $carraydatosgenerales['ep10cuanto'] ?>');
$('#ep10').val('<?php echo $carraydatosgenerales['ep10'] ?>');
$('#ep11').val('<?php echo $carraydatosgenerales['ep11'] ?>');
$('#ep13').val('<?php echo $carraydatosgenerales['ep13'] ?>');
$('#ep14').val('<?php echo $carraydatosgenerales['ep14'] ?>');
$('#ep15').val('<?php echo $carraydatosgenerales['ep15'] ?>');
$('#ep16').val('<?php echo $carraydatosgenerales['ep16'] ?>');
$('#ep17').val('<?php echo $carraydatosgenerales['ep17'] ?>');
$('#ep18').val('<?php echo $carraydatosgenerales['ep18'] ?>');
$('#ep19').val('<?php echo $carraydatosgenerales['ep19'] ?>');
$('#ep20').val('<?php echo $carraydatosgenerales['ep20'] ?>');
$('#ep21').val('<?php echo $carraydatosgenerales['ep21'] ?>');
$('#ep22').val('<?php echo $carraydatosgenerales['ep22'] ?>');
$('#ep22cual').val('<?php echo $carraydatosgenerales['ep22cual'] ?>');


$('#ep13s').val('<?php echo $carraydatosgenerales['ep13s'] ?>');
$('#ep14s').val('<?php echo $carraydatosgenerales['ep14s'] ?>');
$('#ep15s').val('<?php echo $carraydatosgenerales['ep15s'] ?>');
$('#ep16s').val('<?php echo $carraydatosgenerales['ep16s'] ?>');
$('#ep17s').val('<?php echo $carraydatosgenerales['ep17s'] ?>');
$('#ep18s').val('<?php echo $carraydatosgenerales['ep18s'] ?>');
$('#ep19s').val('<?php echo $carraydatosgenerales['ep19s'] ?>');
$('#ep20s').val('<?php echo $carraydatosgenerales['ep20s'] ?>');
$('#ep21s').val('<?php echo $carraydatosgenerales['ep21s'] ?>');
$('#ep22s').val('<?php echo $carraydatosgenerales['ep22s'] ?>');
$('#ep22cuals').val('<?php echo $carraydatosgenerales['ep22cuals'] ?>');


$('#ep23').val('<?php echo $carraydatosgenerales['ep23'] ?>');
$('#ep24').val('<?php echo $carraydatosgenerales['ep24'] ?>');
$('#ep25').val('<?php echo $carraydatosgenerales['ep25'] ?>');
$('#ep26').val('<?php echo $carraydatosgenerales['ep26'] ?>');
$('#ep27').val('<?php echo $carraydatosgenerales['ep27'] ?>');
$('#ep28').val('<?php echo $carraydatosgenerales['ep28'] ?>');
$('#ep29').val('<?php echo $carraydatosgenerales['ep29'] ?>');
$('#ep30').val('<?php echo $carraydatosgenerales['ep30'] ?>');

// NUEVOS
$('#ep23s').val('<?php echo $carraydatosgenerales['ep23s'] ?>');
$('#ep24s').val('<?php echo $carraydatosgenerales['ep24s'] ?>');
$('#ep25s').val('<?php echo $carraydatosgenerales['ep25s'] ?>');
$('#ep26s').val('<?php echo $carraydatosgenerales['ep26s'] ?>');
$('#ep27s').val('<?php echo $carraydatosgenerales['ep27s'] ?>');
$('#ep28s').val('<?php echo $carraydatosgenerales['ep28s'] ?>');
$('#ep29s').val('<?php echo $carraydatosgenerales['ep29s'] ?>');
$('#ep30s').val('<?php echo $carraydatosgenerales['ep30s'] ?>');

        
$('#ep31mr1').val('<?php echo $carraydatosgenerales['ep31mr1'] ?>');
$('#ep31mr2').val('<?php echo $carraydatosgenerales['ep31mr2'] ?>');
$('#ep31mr3').val('<?php echo $carraydatosgenerales['ep31mr3'] ?>');
$('#ep31mr4').val('<?php echo $carraydatosgenerales['ep31mr4'] ?>');
$('#ep31mr5').val('<?php echo $carraydatosgenerales['ep31mr5'] ?>');
$('#ep31mr6').val('<?php echo $carraydatosgenerales['ep31mr6'] ?>');
        
// FIN NUEVOS   

validanacionalidad('<?php echo $carraydatosgenerales['ep1'] ?>');
valida22cuals('<?php echo $carraydatosgenerales['ep22s'] ?>');
validap2('<?php echo $carraydatosgenerales['ep2'] ?>');
validap5('<?php echo $carraydatosgenerales['ep5'] ?>');
validap6('<?php echo $carraydatosgenerales['ep6'] ?>');
validap7('<?php echo $carraydatosgenerales['ep7'] ?>');
validap8('<?php echo $carraydatosgenerales['ep8'] ?>');
validap9('<?php echo $carraydatosgenerales['ep9'] ?>');
validap10('<?php echo $carraydatosgenerales['ep10'] ?>');
valida22cual('<?php echo $carraydatosgenerales['ep22'] ?>');
          
$("#volver").click(function ()
        {
  location.href = "../../c_encuadre/fc_encuadre?folio=" + $('#folio').val() +  "&idintegrante=0" +"&doccogestor="+$('#doccogestor').val();                      
        });
});

function menorque1(campo)
{
  
 if ($('#' + campo).val() < 1)
 {
  mensajito('MENSAJE','debes ingresar un numero mayor a 0');
  
  $('#' + campo).val('');

 }
}

function validarbolitasytexto(div,campo)
{ //alert(div + ' juanpis ' + campo);
   if(($('#'+ campo).val() == '') || ($('#'+ campo).val() == '0') || ($('#'+ campo).val() == '98'))
   { 
       $('#' + div).addClass(' has-error');
   }
   else
   { 
       $('#' + div).removeClass('has-error');
   }
    validarguardar();
}

function actualizarCapitulo22() {
//  alert("boton entra a guardar3");

$.ajax({
    url: "fc_actualizar",
    type: "post",
    data: {
      folio:$('#folio').val(),
ep1:$('#ep1').val(),
// NUEVO
ep1cual:$('#ep1cual').val(),
// FIN NUEVO
epetnia:$('#epetnia').val(),
ep2:$('#ep2').val(),
ep3:$('#ep3').val(),
ep3cuanto:$('#ep3cuanto').val(),
ep4:$('#ep4').val(),
ep5:$('#ep5').val(),
ep5cuanto:$('#ep5cuanto').val(),
ep6:$('#ep6').val(),
ep6cuanto:$('#ep6cuanto').val(),
ep7:$('#ep7').val(),
ep7cuanto:$('#ep7cuanto').val(),
ep8:$('#ep8').val(),
ep8cuanto:$('#ep8cuanto').val(),
ep9:$('#ep9').val(),
ep9cuanto:$('#ep9cuanto').val(),
ep10:$('#ep10').val(),
ep10cuanto:$('#ep10cuanto').val(),
ep11:$('#ep11').val(),
ep13:$('#ep13').val(),
ep14:$('#ep14').val(),
ep15:$('#ep15').val(),
ep16:$('#ep16').val(),
ep17:$('#ep17').val(),
ep18:$('#ep18').val(),
ep19:$('#ep19').val(),
ep20:$('#ep20').val(),
ep21:$('#ep21').val(),
ep22:$('#ep22').val(),
ep22cual:$('#ep22cual').val(),
// NUEVOS
ep13s:$('#ep13s').val(),
ep14s:$('#ep14s').val(),
ep15s:$('#ep15s').val(),
ep16s:$('#ep16s').val(),
ep17s:$('#ep17s').val(),
ep18s:$('#ep18s').val(),
ep19s:$('#ep19s').val(),
ep20s:$('#ep20s').val(),
ep21s:$('#ep21s').val(),
ep22s:$('#ep22s').val(),
ep22cuals:$('#ep22cuals').val(),
// FIN NUEVOS
ep23:$('#ep23').val(),
ep24:$('#ep24').val(),
ep25:$('#ep25').val(),
ep26:$('#ep26').val(),
ep27:$('#ep27').val(),
ep28:$('#ep28').val(),
ep29:$('#ep29').val(),
ep30:$('#ep30').val(),
// NUEVOS
ep23s:$('#ep23s').val(),
ep24s:$('#ep24s').val(),
ep25s:$('#ep25s').val(),
ep26s:$('#ep26s').val(),
ep27s:$('#ep27s').val(),
ep28s:$('#ep28s').val(),
ep29s:$('#ep29s').val(),
ep30s:$('#ep30s').val(),
// FIN NUEVOS
ep31mr1:$('#ep31mr1').val(),
ep31mr2:$('#ep31mr2').val(),
ep31mr3:$('#ep31mr3').val(),
ep31mr4:$('#ep31mr4').val(),
ep31mr5:$('#ep31mr5').val(),
ep31mr6:$('#ep31mr6').val(),
// FIN NUEVOS
doccogestor:$('#doccogestor').val(),
    },
    dataType: "json",
    success: function (obj) {
      insertidpaso103();     
     
    }
});
}

function iralsiguientepaso()
{
 location.href = "../../c_encuadre/fc_encuadre?folio=" + $('#folio').val() +  "&idintegrante=0" +"&doccogestor="+$('#doccogestor').val();                    
}

function validanacionalidad(opcion) {

if (opcion == 'Otra') {
    
    $('#nacionalidaddiv').show();
    $('#ep1cual').prop('required',true);
} 
else
{
    $('#nacionalidaddiv').hide();
    $('#ep1cual').prop('required',false);
    $('#ep1cual').val('');
}

}

function validap2(opcion) {

if (opcion == 'Si') {
    
    $('#ep3cuantodiv').show();
    $('#ep3div').show();
    $('#ep4div').show();
   
    $('#ep3cuanto').prop('required',true);
    $('#ep3').prop('required',true);
    $('#ep4').prop('required',true);
            
} 
else  {

 $('#ep3cuantodiv').hide();
 $('#ep3div').hide();
 $('#ep4div').hide();

 $('#ep3cuanto').prop('required',false);
 $('#ep3').prop('required',false);
 $('#ep4').prop('required',false);
 $('#ep3cuanto').val('');
 $('#ep3').val('');
 $('#ep4').val('');
    
}

}

function validap5(opcion) {

if (opcion == 'Si') {
    
    $('#ep5cuantodiv').show();
    $('#ep5cuanto').prop('required',true);               
} 
else  {
  $('#ep5cuantodiv').hide();
 $('#ep5cuanto').prop('required',false);
  $('#ep5cuanto').val('');
}

}

function validap6(opcion) {

if (opcion == 'Si') {
    
    $('#ep6cuantodiv').show();
    $('#ep6cuanto').prop('required',true);               
} 
else  {
  $('#ep6cuantodiv').hide();
 $('#ep6cuanto').prop('required',false);
  $('#ep6cuanto').val('');

}

}

function validap7(opcion) {

if (opcion == 'Si') {
    
    $('#ep7cuantodiv').show();
    $('#ep7cuanto').prop('required',true);               
} 
else  {
  $('#ep7cuantodiv').hide();
 $('#ep7cuanto').prop('required',false);
  $('#ep7cuanto').val('');

}

}

function validap8(opcion) {

if (opcion == 'Si') {
    
    $('#ep8cuantodiv').show();
    $('#ep8cuanto').prop('required',true);               
} 
else  {
  $('#ep8cuantodiv').hide();
 $('#ep8cuanto').prop('required',false);
  $('#ep8cuanto').val('');

}

}

function validap9(opcion) {

if (opcion == 'Si') {
    
    $('#ep9cuantodiv').show();
    $('#ep9cuanto').prop('required',true);               
} 
else  {
  $('#ep9cuantodiv').hide();
 $('#ep9cuanto').prop('required',false);
  $('#ep9cuanto').val('');

}

}

function validap10(opcion) {

if (opcion == 'Si') {
    
    $('#ep10cuantodiv').show();
    $('#ep10cuanto').prop('required',true);               
} 
else  {
  $('#ep10cuantodiv').hide();
 $('#ep10cuanto').prop('required',false);
  $('#ep10cuanto').val('');

}

}

function valida22cuals(opcion) {

if (opcion == 'Si') {
    
    $('#ep22cualsdiv').show();
    $('#ep22cuals').prop('required',true);               
} 
else  {
  $('#ep22cualsdiv').hide();
 $('#ep22cuals').prop('required',false);
  $('#ep22cuals').val('');
}

}

function valida22cual(opcion) {

if (opcion == 'Si') {
    
    $('#ep22cualdiv').show();
    $('#ep22cual').prop('required',true);               
} 
else  {
  $('#ep22cualdiv').hide();
 $('#ep22cual').prop('required',false);
  $('#ep22cual').val('');
}

}

function insertidpaso103()
   {
    //alert('test');
                        $.ajax({
                          url: "fc_cerrarpaso1",
                          type: "GET",
                          data: {vfolio: $('#folio').val(), vidpaso: '103', vestado:1},
                          dataType: "html",
                          success: function(obj) {

                            mensajito('MENSAJE','La informacion se guardó correctamente');
                            setTimeout("iralsiguientepaso()",1000);
        //  actualizarPuntaje();
                                       
                        }
                       });
   }



    
       
        //esta funcion no permite elpegar
  
        

//esta funcion no permite el copiar



</script>
</html>