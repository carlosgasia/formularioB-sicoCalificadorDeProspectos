<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>G-social</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="stylesss.css">

      <!--iconos -->

    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
table {
  font-family: arial, sans-serif;
  width: 100%;
  display: block;
}

td, th {
  border: 1px solid #6c6c6c;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>


<div class="grid centrar-columnas"> 

  <div class="col-12">

    <img src="img/forms/form1-img.jpg" alt="Imagen-form">

  </div>
    <div class="col-10 inner-form ">
            
            
            <form action="enviar1.php" method="Post">
              <h2 class="fw-300 centrar-texto">¡Es un gusto saludarle!</h2>
              <fieldset id="fieldset-main" class="fieldset-forms" style="margin: 0 auto;">
                <legend><img src="logos-gsocial.png" alt="" srcset=""></legend>

                <div class="p">
                  
                  <p class="justify" style="text-align: justify">  
                  La Cámara de Industriales del estado Carabobo en alianza con G-Social y el Centro de Educación para la Construcción Social, organizaciones dedicadas al fortalecimiento de la gestión social empresarial, la formación y el emprendimiento social, adelanta esfuerzos a fin de hacer visible la contribución social de la industria carabobeña en nuestra comunidad. <br><br>
                  En este sentido, le agradecemos contestar las siguientes preguntas referidas a los programas y/o actividades llevadas a cabo por su empresa en materia de Responsabilidad Social.  <br><br>
                  Los resultados obtenidos permitirán a la Cámara contar con una panorámica de los esfuerzos desplegados por las empresas afiliadas, así como definir estrategias de cooperación para potenciarlos y lograr un mayor alcance e impacto en su ejecución.
                  Es importante mencionar que la Cámara garantiza la absoluta confidencialidad de la información de las encuestas así como la presentación consolidada de los resultados obtenidos.
                  </p>

              <h2 style="text-align: center;">Encuesta</h2><br>
                </div>

                <label for="nombreEmpresa">Nombre de la empresa: </label>
                <input type="text" required id="nombreEmpresa" name="nombreEmpresa" class="inside-table-form">

                <label for="nombrePersona">Nombre persona para contacto: </label>
                <input type="text" required id="nombrePersona" name="nombrePersona" class="inside-table-form">

                <label for="numeroContacto">Teléfono para contacto: </label>
                <input type="text" required id="numeroContacto" name="numeroContacto" class="inside-table-form">


                <label for="nombreCompleto" class="justify" style="text-align: justify">1.	¿La empresa está ejecutando actualmente programas o actividades dirigidas a la comunidad o a trabajadores y sus familias (más allá de las obligaciones de ley)?</label>

                <table style="overflow-x:auto">
                  <tr>
                    <th class="invisible"> </th>
                    <th>Sí</th>
                    <th>No</th>
                  </tr>
                  <tr>
                    <td>Trabajadores/familias</td>
                    <td><input type="radio" id="css" name="empresaEjecutaProgramasSocialesDirigidaATrabajadoresFamilias" value="Si"></td>
                    <td><input type="radio" id="css" name="empresaEjecutaProgramasSocialesDirigidaATrabajadoresFamilias" value="No "></td>
                  </tr>
                  <tr>
                    <td>Comunidad</td>
                    <td><input type="radio" id="css" name="empresaEjecutaProgramasSocialesDirigidaAComunidad" value="Si"></td>
                    <td><input type="radio" id="css" name="empresaEjecutaProgramasSocialesDirigidaAComunidad" value="No"></td>
                  </tr>
                  
                </table>

                <br><br>


                <label for="Cedula" style="text-align: justify;" >2. Completa el siguiente recuadro para conocer el detalle de estas actividades y/o programas:  a) Alcance del programa: (N) Nacional o (E) Estadal; b) Nombre del municipio donde se desarrolla;  c) Sector: selecciona el sector al que pertenece el programa y/o actividad, si el sector al que pertenece tu actividad o programa es distinto a las opciones desplegadas, indica su nombre en el recuadro (Otro).</label>

                <label for="nombreProgramaActividad1">Nombre del programa/actividad nº1: </label>
                <input type="text" id="nombreProgramaActividad1" name="nombreProgramaActividad1" onchange="nombrePrograma(0)" class="inside-table-form input-programa" style="max-width: 250px">

                

                <div style="overflow-x:auto">

                  <div class="table-responsive">
                    <table class="table" id="tipo-organizacion2">
                     
                      <tr>
                          <th>Alcance</th>
                          <td>
                              <select  name="alcanceProgramaActividad1" style="margin-left: 5px;" class="inside-table-form">
                                  <option disabled selected>---Pulse para seleccionar---</option>
                                  <option value="Nacional">Nacional (N)</option>
                                  <option value="Estadal">Estadal (E)</option>
      
                                  </select>

                          </td>
                          
                        </tr>

                        <tr>
                          <th>
                            Municipio
                          </th>
                            <td>
                                <select  name="MunicipioProgramaActividad1" style="margin-left: 5px;" class="inside-table-form">
                                    <option disabled selected>---Pulse para seleccionar---</option>
                                    <option value="Bejuma">Bejuma</option>
                                    <option value="Carlos Arvelo">Carlos Arvelo</option>
                                    <option value="Diego Ibarra">Diego Ibarra</option>
                                    <option value="Guacara">Guacara</option>
                                    <option value="Juan Jose Mora">Juan José Mora</option>
                                    <option value="Libertador">Libertador</option>
                                    <option value="Los Guayos">Los Guayos</option>
                                    <option value="Miranda">Miranda</option>
                                    <option value="Montalban">Montalbán</option>
                                    <option value="Naguanagua">Naguanagua</option>
                                    <option value="Puerto Cabello">Puerto Cabello</option>
                                    <option value="San Diego">San Diego</option>
                                    <option value="San Joaquin">San Joaquín</option>
                                    <option value="Valencia">Valencia</option>
                                    <option value="Mas de 1 Municipio">Más de 1 municipio</option>
                                  </select>
                        </tr>   

                        

                        <tr>
                          <th>Sector</th>
                            <td>
                                <select  name="sectorProgramaActividad1" style="margin-left: 5px;" class="inside-table-form">
                                  <option disabled selected>---Pulse para seleccionar---</option>
                                  <option value="Alimentación">Alimentación</option>
                                  <option value="Salud">Salud</option>
                                  <option value="Educación">Educación</option>
                                  <option value="Emprendimiento">Emprendimiento</option>
                                </select>
                         </td>
                      
                        </tr>

                        <tr>
                          <th>Otro sector</th>
                            <td><input type="text" name="otroSectorProgramaActividad1" class="inside-table-form" placeholder="(Opcional)" style="margin-left: 5px;"></td>
                        </tr>


                    </table>
                    
                  </div>
                  <table style="overflow-x:auto">
                    
                    
                  </table>
                </div>
                <button id="add-campo-btn1" class="boton-amarillo-form">Añadir programa</button>

                <br><br>


                  <label for="fnacimiento">3.	Para la ejecución de estos programas o actividades, ¿la empresa ha establecido alianzas con otras organizaciones?</label required>
                




                    <table style="overflow-x:auto">
                        <tr>
                          <td><input type="radio" id="css" name="AlianzasConOtrasOrg" value="Si"></td>
                          <th>Sí</th>
                        </tr>
                        <tr>
                          <td><input type="radio" id="css" name="AlianzasConOtrasOrg" value="No"></td>
                          <th>No</th>
                        </tr>
                        
                      </table>
            
                <br><br>


                <label for="siono">4.	En caso afirmativo, por favor identifique con qué tipo de organización mantiene alianza para cada programa o actividad:</label>
                <div style="overflow-x:auto;">


                <table >
                  <tbody id="tipo-organizacion">

                  <tr style="background-color: black; color: white;">
                    <th>Programa/ Actividad</th>
                    <th>Tipo de organización</th>
                  </tr>
                  <tr>
                    <td><input type="text" disabled style="background-color: transparent;" class="inside-table-form input-programa-recibir"></td>
                    <td>
                      <select  name="tipo_organizacionProgramaActividad1" style="margin-left: 5px;" class="inside-table-form">
                        <option disabled selected>---Pulse para seleccionar---</option>
                        <option value="ONG">ONG</option>
                        <option value="Organismo publico">Organismo público</option>
                        <option value="Embajada">Embajada</option>
                        <option value="Empresa privada">Empresa privada</option>
                        <option value="Sin alianzas">Sin alianzas</option>
                        
                        
                      </select>
                    </td>
                    
                  </tr>
                  
                  </tbody>
                  
                </table>
                </div>

                <br><br>


                <label for="numeroDtelefono" class="justify" style="text-align: justify">5.	¿Señale las áreas en las que estaría interesado en recibir algún tipo de apoyo de parte de la Cámara para el desarrollo de iniciativas de responsabilidad social? Seleccione hasta 3 categorías</label>

                <select  name="areasInteresEnApoyo1" style="margin-left: 5px;" class="inside-table-form">
                  <option disabled selected>---Pulse para seleccionar---</option>
                  <option>Detección de necesidades</option>
                  <option>Diseño y evaluación de proyectos sociales</option>
                  <option>Ejecución de proyectos en la comunidad</option>
                  <option>Generación de alianzas o enlaces con otras organizaciones</option>
                  <option>Capacitación</option>
                  <option>Divulgación de sus iniciativas</option>
                  <option>Potenciales fuentes de financiamiento</option>
                  <option>Otro</option>
               </select>

               <br><br>

               <select  name="areasInteresEnApoyo2" style="margin-left: 5px;" class="inside-table-form">
                <option disabled selected>---Pulse para seleccionar---</option>
                <option>Detección de necesidades</option>
                <option>Diseño y evaluación de proyectos sociales</option>
                <option>Ejecución de proyectos en la comunidad</option>
                <option>Generación de alianzas o enlaces con otras organizaciones</option>
                <option>Capacitación</option>
                <option>Divulgación de sus iniciativas</option>
                <option>Potenciales fuentes de financiamiento</option>
                <option>Otro</option>
             </select>

             <br><br>

            <select  name="areasInteresEnApoyo3" style="margin-left: 5px;" class="inside-table-form">
              <option disabled selected>---Pulse para seleccionar---</option>
              <option>Detección de necesidades</option>
              <option>Diseño y evaluación de proyectos sociales</option>
              <option>Ejecución de proyectos en la comunidad</option>
              <option>Generación de alianzas o enlaces con otras organizaciones</option>
              <option>Capacitación</option>
              <option>Divulgación de sus iniciativas</option>
              <option>Potenciales fuentes de financiamiento</option>
              <option>Otro</option>
            </select>

               <br><br>

                <label for="direccionLocal">6.	Señale el rango de inversión  anual de la contribución de la empresa a los programas sociales:</label>
                
                <label class="for4" for="javascript">a.	Menos de USD 5.000.</label><br>
                <input class="for4" type="radio" id="javascript" name="rangoInversionAnual" value="Menos de USD 5.000.">
                <label class="for4" for="javsascripts">b.	Entre USD 5.001 y 10.000</label><br>
                <input class="for4" type="radio" id="javsascripts" name="rangoInversionAnual" value="Entre USD 5.001 y 10.000">
                <label class="for4" for="javsascriptsd">c.	Entre USD 10.001 y 25.000</label>
                <input class="for4" type="radio" id="javsascriptsd" name="rangoInversionAnual" value="Entre USD 10.001 y 25.000">
                <label class="for4" for="javsascriptsdx">d.	Más de USD 25.001.</label>
                <input class="for4" type="radio" id="javsascriptsdx" name="rangoInversionAnual" value="Más de USD 25.001">

                <input type="submit" class="boton boton-amarillo f-btns" value="Enviar">
                <a class="boton boton-amarillo f-btns" href="index.php">Volver</a>
              </fieldset>

            </form>
    </div><!--Fin col-10-->
</div><!--grid-->

</main>
   
<?php 
include 'templates/footer.php';
?>