<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);
define('SINCRO','http://localhost:8081/metodologia2servidor/index.php/sincronizacion/');
define('JSPERFIL','http://localhost:8081/resources/jsperfil/');
define('JBOX','http://localhost:8081/resources/jBox-0.3.2/');
define('BOOTSTRAP','http://localhost:8081/resources/bootstrap/');
define('IMAGEN', 'http://localhost:8081/resources/img/');
define('FOOTS', '<br><br>
                <img src="'.IMAGEN.'footer.png">');
define('HEAD', '<div  class="row" id="imghead">
                <img src="'.IMAGEN.'headers.png" style="width:100%;height: auto">
                </div>
                <div></div>
                <div  class="row" id="camposhead">
                    <div class="col-md-4" >
                        <h6 id="xcapitulo">Capitulo: <p id="icapitulo"></p></h6>
                        <h6 id="xpregunta">Pregunta: <p id="ipregunta"></p></h6>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                    <h6 class="text-right">Gestor Territorial de Familia: <p id="cogestor"></p></h6>
                    <h6 class="text-right">Datos Integrante: <p id="ititular"></p></h6>
                    </div>
                </div>
                
                      <div id="progressBar" class="progress progress-striped">
                          <div class="progress-bar"  role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
                              <span id="incrementobarra"></span>
                          </div>
                      </div>');


define('HEAD3', '<div  class="row" id="imghead">
                <img src="'.IMAGEN.'headers.png" style="width:100%;height: auto">
                </div>  
                      <div id="progressBar" class="progress progress-striped">
                          <div class="progress-bar"  role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
                              <span id="incrementobarra"></span>
                          </div>
                      </div>');


                      define('HEAD44', '<div  class="row" id="imghead">
                <img src="'.IMAGEN.'headers.png" style="width:100%;height: auto">
                </div>  
                      ');

define('BOTONERAADISABLED', '<hr />
                   <div class="row">
                   <div class="form-group ">
                   <div class="col-md-10">
                             <div class="col-md-10">
                               <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                               <button class="btn btn-primary" type="button" id="actualizar"   none" name="actualizar">Actualizar</button>
                               <button class="btn btn-primary" type="button" id="cancelar" onclick="botoncancelar();" disabled="" name="cancelar">Cancelar</button>
                               <button class="btn btn-primary" type="button" id="siguiente" disabled="" none" name="siguiente">Siguiente >></button>
                   </div>
                   <div class="col-md-2">
                               <button class="btn btn-info" type="button" id="capitulos2" name="capitulos2">Volver a los capitulos</button>
                   </div>
                   </div>');

define('BOTONERAADISABLE', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" disabled="" name="cancelar" onclick="botoncancelar();">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" name="siguiente">Siguiente >></button>
                    </div>            
                    <div class="col-md-2">
                                <button class="btn btn-info" type="button" id="capitulos" disabled="" name="capitulos">Volver a los capitulos</button>
                    </div>
                    </div>');
define('BOTONERAGDISABLE', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="guardar" disabled=""  name="guardar">Guardar</button>
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" style="display: none" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" onclick="botoncancelar();" disabled="" name="cancelar">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" style="display: none" name="siguiente">Siguiente >></button>
                    </div>
                    <div class="col-md-2">
                                <button class="btn btn-info" type="button" id="capitulos" disabled="" name="capitulos">Volver a los capitulos</button>
                    </div>
                    </div>');

define('HEAD1', '<div  class="row" id="imghead">
                <img src="'.IMAGEN.'headers.png" style="width:100%;height: auto">
                </div>');


define('HEAD2', '<div  class="row" id="imghead">
                <img src="'.IMAGEN.'headers.png" style="width:100%;height: auto">
                </div>
        <div class="row">
            <form class="navbar-form navbar-left has-error">
                <input type="text" class="form-control" onKeyPress="return soloNumeros(event)" placeholder="Buscar por folio" name="buscarfolio" id="buscarfolio" onkeyup="traerfoliodinamic()">
            </form>         
            <form class="navbar-form navbar-left has-error">
                <input type="text" class="form-control" onKeyPress="return soloNumeros(event)" placeholder="Buscar por documento" name="buscardoc" id="buscardoc" onkeyup="traerdocdinamic()">
            </form> 
            <form class="navbar-form navbar-left has-error">   
                <input type="text" class="form-control " placeholder="Buscar por nombre" onKeyPress="return soloLetras(event)" name="buscarnom" id="buscarnom" onkeyup="traernombredinamic()">
            </form>    
        </div>');
define('HEAD2BUSCARSOLOFOLIO', '<div  class="row" id="imghead">
                <img src="'.IMAGEN.'headers.png" style="width:100%;height: auto">
                </div><br>
        <div class="row">
            <form class="navbar-form navbar-left has-error">
                <input type="text" class="form-control" onKeyPress="return soloNumeros(event)" placeholder="Buscar por folio" name="buscarfolio" id="buscarfolio" onkeyup="traerfoliodinamic()">
            </form>         
        </div>');
define('BOTONERAG', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="guardar" disabled=""  name="guardar">Guardar</button>
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" style="display: none" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" onclick="botoncancelar();" disabled="" name="cancelar">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" style="display: none" name="siguiente">Siguiente >></button>
                    </div>
                    <div class="col-md-2">
                                <button class="btn btn-info" type="button" id="capitulos" name="capitulos">Volver a los capitulos</button>
                    </div>
                    </div>');
define('BOTONERAA', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" disabled="" name="cancelar" onclick="botoncancelar();">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" name="siguiente">Siguiente >></button>
                    </div>            
                    <div class="col-md-2">
                                <button class="btn btn-info" type="button" id="capitulos" name="capitulos">Volver a los capitulos</button>
                    </div>
                    </div>');

define('BOTONERAC', '<hr />
                  <div class="row">
                  <div class="form-group ">
                              <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                              <button class="btn btn-primary" type="button" id="actualizar" disabled="" name="actualizar">Actualizar</button>
                              <button class="btn btn-info col-lg-offset-4" type="button" id="capitulos" name="capitulos">Volver a los capitulos</button>
                              <button class="btn btn-primary col-sm-offset-1" type="button" id="cerrar"  name="cerrar">Cerrar capitulo</button>
                  </div>
                  </div>');



define('BOTONERAGCAPA', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="guardar" disabled=""  name="guardar">Guardar</button>
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" style="display: none" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" onclick="botoncancelar();" disabled="" name="cancelar">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" style="display: none" name="siguiente">Siguiente >></button>
                    </div>
                   
                    </div>');
define('BOTONERAACAPA', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" disabled="" name="cancelar" onclick="botoncancelar();">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" name="siguiente">Siguiente >></button>
                    </div>            
                    
                    </div>');

define('BOTONERAGCAPA2', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" disabled="" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="guardar"   name="guardar">Guardar</button>
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" style="display: none" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" onclick="botoncancelar();" disabled="" name="cancelar">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" style="display: none" name="siguiente">Siguiente >></button>
                    </div>
                   
                    </div>');
define('BOTONERAACAPA2', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" disabled="" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="actualizar"  name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" disabled="" name="cancelar" onclick="botoncancelar();">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" name="siguiente">Siguiente >></button>
                    </div>            
                    
                    </div>');


define('BOTONERALOGROS', '<hr />
                   <div class="row">
                   <div class="form-group ">
                   <div class="col-md-10">
                               <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Volver a listado de hogares</button>           
                               
                   </div>            
                   <div class="col-md-2">
                               
                   </div>
                   </div>');


/////////////////////////////////////////////////////////////////////////////////////////////////////
define('BOTONERAGOTRO', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="guardar" disabled=""  name="guardar">Guardar</button>
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" style="display: none" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" onclick="botoncancelar();" disabled="" name="cancelar">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" style="display: none" name="siguiente">Siguiente >></button>
                                <button class="btn btn-primary" type="button" id="otro" style="display: none" name="otro">Agregar Otro titulo</button>
                    </div>
                    <div class="col-md-2">
                                <button class="btn btn-info" type="button" id="capitulos2" name="capitulos2">Volver a los capitulos</button>
                    </div>
                    </div>');
define('BOTONERAAOTRO', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" disabled="" name="cancelar" onclick="botoncancelar();">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" name="siguiente">Siguiente >></button>
                                <button class="btn btn-primary" type="button" id="otro" name="otro">Agregar Otro titulo</button>
                    </div>            
                    <div class="col-md-2">
                                <button class="btn btn-info" type="button" id="capitulos2" name="capitulos2">Volver a los capitulos</button>
                    </div>
                    </div>');
define('BOTONERAGOTRO1', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                
                                <button class="btn btn-primary" type="button" id="guardar" disabled=""  name="guardar">Guardar</button>
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" style="display: none" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" onclick="botoncancelar();" disabled="" name="cancelar">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" style="display: none" name="siguiente">Siguiente >></button>
                                <button class="btn btn-primary" type="button" id="otro1" style="display: none" name="otro1">Agregar Otro titulo</button>
                                <button class="btn btn-primary" type="button" id="eliminar" name="eliminar">eliminar y volver</button>                                      


                    </div>
                    <div class="col-md-2">
                                <button class="btn btn-info" type="button" id="capitulos2" style="display: none" name="capitulos2">Volver a los capitulos</button>
                    </div>
                    </div>');
define('BOTONERAAOTRO1', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                               
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" disabled="" name="cancelar" onclick="botoncancelar();">Cancelar</button>
                               <button class="btn btn-primary" type="button" id="siguiente" name="siguiente">Siguiente >></button>
                                 <button class="btn btn-primary" type="button" id="eliminar" name="eliminar">eliminar y volver</button>           
                                <button class="btn btn-primary" type="button" id="otro1" name="otro1">Agregar Otro titulo</button>
                    </div>            
                    <div class="col-md-2">
                                <button class="btn btn-info" type="button" id="capitulos2" style="display: none" name="capitulos2">Volver a los capitulos</button>
                    </div>
                    </div>');
define('BOTONERAGOTRO2', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                
                                <button class="btn btn-primary" type="button" id="guardar" disabled=""  name="guardar">Guardar</button>
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" style="display: none" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" onclick="botoncancelar();" disabled="" name="cancelar">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" style="display: none" name="siguiente">Siguiente >></button>
                                <button class="btn btn-primary" type="button" id="otro1" style="display: none" name="otro1">Agregar Otro titulo</button>
                                <button class="btn btn-primary" type="button" id="eliminar" name="eliminar">eliminar y volver</button>                                      


                    </div>
                    <div class="col-md-2">
                                <button class="btn btn-info" type="button" id="capitulos2"  style="display: none"name="capitulos2">Volver a los capitulos</button>
                    </div>
                    </div>');
define('BOTONERAAOTRO2', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                               
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" disabled="" name="cancelar" onclick="botoncancelar();">Cancelar</button>
                               <button class="btn btn-primary" type="button" id="siguiente" name="siguiente">Siguiente >></button>
                                 <button class="btn btn-primary" type="button" id="eliminar" name="eliminar">eliminar y volver</button>           
                               
                    </div>            
                    <div class="col-md-2">
                                <button class="btn btn-info" type="button" id="capitulos2" style="display: none"name="capitulos2">Volver a los capitulos</button>
                    </div>
                    </div>');
define('BOTONOTRODISABLE', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" disabled="" name="cancelar" onclick="botoncancelar();">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" name="siguiente">Siguiente >></button>
                                <button class="btn btn-primary" type="button" id="otro" disabled="" name="otro">Agregar Otro titulo</button>
                    </div>            
                    <div class="col-md-2">
                                <button class="btn btn-info" type="button" id="capitulos2" name="capitulos2">Volver a los capitulos</button>
                    </div>
                    </div>');

//comienza bononera estacion 2

define('BOTONERAG2', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="guardar" disabled=""  name="guardar">Guardar</button>
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" style="display: none" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" onclick="botoncancelar();" disabled="" name="cancelar">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" style="display: none" name="siguiente">Siguiente >></button>
                    </div>
                    <div class="col-md-2">
                                <button class="btn btn-info" type="button" id="capitulos2" name="capitulos2">Volver a los capitulos</button>
                    </div>
                    </div>');
define('BOTONERAA2', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" disabled="" name="cancelar" onclick="botoncancelar();">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" name="siguiente">Siguiente >></button>
                    </div>            
                    <div class="col-md-2">
                                <button class="btn btn-info" type="button" id="capitulos2" name="capitulos2">Volver a los capitulos</button>
                    </div>
                    </div>');
//finaliza botonera estacion 2

// comienza botonera estacion 2 por hogar
define('BOTONERAG2H', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="guardar" disabled=""  name="guardar">Guardar</button>
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" style="display: none" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" onclick="botoncancelar();" disabled="" name="cancelar">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" style="display: none" name="siguiente">Siguiente >></button>
                    </div>
                    <div class="col-md-2">
                                
                    </div>
                    </div>');
define('BOTONERAA2H', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" disabled="" name="cancelar" onclick="botoncancelar();">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" name="siguiente">Siguiente >></button>
                    </div>            
                    <div class="col-md-2">
                                
                    </div>
                    </div>');


define('BOTONERAGl2', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="guardar" disabled=""  name="guardar">Guardar</button>
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" style="display: none" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" onclick="botoncancelar();" disabled="" name="cancelar">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" style="display: none" name="siguiente">Siguiente >></button>
                    </div>
                    <div class="col-md-2">
                                
                    </div>
                    </div>');
define('BOTONERAAl2', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" disabled="" name="cancelar" onclick="botoncancelar();">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" name="siguiente">Siguiente >></button>
                    </div>            
                    <div class="col-md-2">
                                
                    </div>
                    </div>');


define('BOTONERAGINTERH', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="guardar" disabled=""  name="guardar">Guardar</button>
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" style="display: none" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" onclick="botoncancelar();" disabled="" name="cancelar">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" style="display: none" name="siguiente">Siguiente >></button>
                    </div>
                    <div class="col-md-2">
                                
                    </div>
                    <div class="col-md-2">
                                <button class="btn btn-info" type="button" id="capitulos" name="capitulos">Volver a los capitulos</button>
                    </div>
                    </div>');
define('BOTONERAAINTERH', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" disabled="" name="cancelar" onclick="botoncancelar();">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" name="siguiente">Siguiente >></button>
                    </div>            
                    <div class="col-md-2">
                                
                    </div>
                      <div class="col-md-2">
                                <button class="btn btn-info" type="button" id="capitulos" name="capitulos">Volver a los capitulos</button>
                    </div>
                    </div>');

define('BOTONERAGINTER', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="guardar" disabled=""  name="guardar">Guardar</button>
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" style="display: none" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" onclick="botoncancelar();" disabled="" name="cancelar">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" style="display: none" name="siguiente">Siguiente >></button>
                    </div>
                    <div class="col-md-2">
                                
                    </div>
                    <div class="col-md-2">
                                <button class="btn btn-info" type="button" id="capitulos" name="capitulos">Volver a los capitulos</button>
                    </div>
                    </div>');
define('BOTONERAAINTER', '<hr />
                    <div class="row">
                    <div class="form-group ">
                    <div class="col-md-10">
                                <button class="btn btn-primary" type="button" id="anterior" name="anterior"> << Anterior</button>           
                                <button class="btn btn-primary" type="button" id="actualizar" disabled="" name="actualizar">Actualizar</button>
                                <button class="btn btn-primary" type="button" id="cancelar" disabled="" name="cancelar" onclick="botoncancelar();">Cancelar</button>
                                <button class="btn btn-primary" type="button" id="siguiente" name="siguiente">Siguiente >></button>
                    </div>            
                    <div class="col-md-2">
                                
                    </div>
                    <div class="col-md-2">
                                <button class="btn btn-info" type="button" id="capitulos" name="capitulos">Volver a los capitulos</button>
                    </div>
                    </div>');
//para cargar
//define('JQUERYUPLOAD', 'http://localhost/ini/resources/jquery-upload');
//define('DESCARGA' , 'http://localhost/ini/resources/');

//para los script propios que creamos
//define('JSMSOL', 'http://localhost/ini/resources/jsmsol');


/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */