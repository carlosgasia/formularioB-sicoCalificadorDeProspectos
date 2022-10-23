<?php
session_start();
include 'db.php';

if(!isset($_SESSION['Email'])){

    header('location: ./login.php');

}

?>

<?php 

include 'templates/header.php';

if(isset($_GET['id'])){

$ID = $_GET['id'];

$inc = include("db.php");
if ($inc) {
	$consulta = "SELECT * FROM `encuesta_empresas` WHERE `ID` ='$ID';";
	$resultado = mysqli_query($conn,$consulta);

    $iii = 0;

	?>

	<style>
    .btn-aturde{       
    text-decoration: none;
    color: black;
    font-weight: 600;
    background-color: orange;
    padding: 5px;
    border-radius: 13px;
    }
	</style>

<p style="background-image: linear-gradient(to bottom right,#3590a7,#000000); margin: 0; padding: 6px;color: white;">
  <b>Panel:</b>
<a href="./cerrarSesion.php" class="btn-aturde">Cerrar sesión</a> <b> Usuario:</b> 

<?php
echo $_SESSION['Nombre'] ?>

</p>
<style>
	p{
		text-align: center;
	}
	h2{
		text-align: center;
	}
	.btn-volver{
		background-color: orange;
		padding: 5px;
		text-decoration: none;
		font-weight: 800;
		color: white;
	}
</style>
<header class="site-header">
          <div class="container contenido-header">
              <div class="barra" style="margin: 0 auto;">
                   <a href="#">
                      <img src="img/logo.png" alt="Logo">
                   </a>

              </div> <!--barra-->
              
           </div> <!-- Container-->
      </header>

     <h1 class="fw-300 centrar-texto">Detalles del registro</h1>




<?php

	if ($resultado) {
		 while ($row = $resultado->fetch_array()) {
             $iii++;
	    $fechaRegistro = $row['FechaRegistro'];
	    $NombreEmpresa = $row['NombreEmpresa'];
        $NombrePersona = $row['NombrePersona'];
        $NumeroContacto = $row['NumeroContacto'];
        $empresaEjecutaProgramasSocialesDirigidaATrabajadoresFamilias = $row['empresaEjecutaProgramasSocialesDirigidaATrabajadoresFamilias'];
        $empresaEjecutaProgramasSocialesDirigidaAComunidad = $row['empresaEjecutaProgramasSocialesDirigidaAComunidad'];
        $nombreProgramaActividad1 = $row['nombreProgramaActividad1'];
        $alcanceProgramaActividad1 = $row['alcanceProgramaActividad1'];
        $MunicipioProgramaActividad1 = $row['MunicipioProgramaActividad1'];
        $sectorProgramaActividad1 = $row['sectorProgramaActividad1'];
        $otroSectorProgramaActividad1 = $row['otroSectorProgramaActividad1'];

        // actividad 2
if(isset($row['nombreProgramaActividad1'])){
        $nombreProgramaActividad1 = $row['nombreProgramaActividad1'];
        $alcanceProgramaActividad1 = $row['alcanceProgramaActividad1'];
        $MunicipioProgramaActividad1 = $row['MunicipioProgramaActividad1'];
        $sectorProgramaActividad1 = $row['sectorProgramaActividad1'];
        $otroSectorProgramaActividad1 = $row['otroSectorProgramaActividad1'];
        $tipo_organizacionProgramaActividad1 = $row['tipo_organizacionProgramaActividad1'];

}

if(isset($row['nombreProgramaActividad2'])){
    $nombreProgramaActividad2 = $row['nombreProgramaActividad2'];
    $alcanceProgramaActividad2 = $row['alcanceProgramaActividad2'];
    $MunicipioProgramaActividad2 = $row['municipioProgramaActividad2'];
    $sectorProgramaActividad2 = $row['sectorProgramaActividad2'];
    $otroSectorProgramaActividad2 = $row['otroSectorProgramaActividad2'];
    $tipo_organizacionProgramaActividad2 = $row['tipo_organizacionProgramaActividad2'];

}

if(isset($row['nombreProgramaActividad3'])){
    $nombreProgramaActividad3 = $row['nombreProgramaActividad3'];
    $alcanceProgramaActividad3 = $row['alcanceProgramaActividad3'];
    $MunicipioProgramaActividad3 = $row['municipioProgramaActividad3'];
    $sectorProgramaActividad3 = $row['sectorProgramaActividad3'];
    $otroSectorProgramaActividad3 = $row['otroSectorProgramaActividad3'];
    $tipo_organizacionProgramaActividad3 = $row['tipo_organizacionProgramaActividad3'];

}

if(isset($row['nombreProgramaActividad4'])){
    $nombreProgramaActividad4 = $row['nombreProgramaActividad4'];
    $alcanceProgramaActividad4 = $row['alcanceProgramaActividad4'];
    $MunicipioProgramaActividad4 = $row['municipioProgramaActividad4'];
    $sectorProgramaActividad4 = $row['sectorProgramaActividad4'];
    $otroSectorProgramaActividad4 = $row['otroSectorProgramaActividad4'];
    $tipo_organizacionProgramaActividad4 = $row['tipo_organizacionProgramaActividad4'];

}

if(isset($row['nombreProgramaActividad5'])){
    $nombreProgramaActividad5 = $row['nombreProgramaActividad5'];
    $alcanceProgramaActividad5 = $row['alcanceProgramaActividad5'];
    $MunicipioProgramaActividad5 = $row['municipioProgramaActividad5'];
    $sectorProgramaActividad5 = $row['sectorProgramaActividad5'];
    $otroSectorProgramaActividad5 = $row['otroSectorProgramaActividad5'];
    $tipo_organizacionProgramaActividad5 = $row['tipo_organizacionProgramaActividad5'];

}

$AlianzasConOtrasOrg= $row['AlianzasConOtrasOrg'];
$tipo_organizacionProgramaActividad1 = $row['tipo_organizacionProgramaActividad1'];
$tipo_organizacionProgramaActividad2 = $row['tipo_organizacionProgramaActividad2'];
$tipo_organizacionProgramaActividad3 = $row['tipo_organizacionProgramaActividad3'];
$tipo_organizacionProgramaActividad3 = $row['tipo_organizacionProgramaActividad4'];
$tipo_organizacionProgramaActividad3 = $row['tipo_organizacionProgramaActividad5'];

$areasInteresEnApoyo1 = $row['areasInteresEnApoyo1'];
$areasInteresEnApoyo2 = $row['areasInteresEnApoyo2'];
$areasInteresEnApoyo3 = $row['areasInteresEnApoyo3'];

$rangoInversionAnual = $row['rangoInversionAnual'];
        
        
        
        ?>
      
        <div>
        	<h2><b>Nombre de la empresa: </b> <?php echo $NombreEmpresa ?></h2>
        	<div>
                <p>
        			<b>Fecha del registro: </b> <?php echo substr($fechaRegistro, 12, 20) ?><br>
        		</p>
                <p>
        			<b>Hora del registro: </b> <?php echo substr($fechaRegistro, 0, 12) ?><br>
        		</p>

                <p>
        			<b>Teléfono para contacto: </b> <?php echo $NumeroContacto; ?><br>
        		</p>

                <p>
        			<b>La empresa ejecuta programas dirigidos a la comunidad: </b> <?php echo $empresaEjecutaProgramasSocialesDirigidaAComunidad; ?><br>
        		</p>


                <p>
        			<b>La empresa ejecuta programas dirigidos a los trabajadores/familias: </b> <?php echo $empresaEjecutaProgramasSocialesDirigidaATrabajadoresFamilias; ?><br>
        		</p>

                <hr>

                <p>
        			<b>Nombre del programa/actividad nº1: </b> <?php echo $nombreProgramaActividad1; ?><br>
        		</p>

                <p>
        			<b>Alcance: </b> <?php echo $alcanceProgramaActividad1; ?><br>
        		</p>
        	</div>


            <p>
        			<b>Municipio: </b> <?php echo $MunicipioProgramaActividad1; ?><br>
        		</p>

                <p>
        			<b>Sector: </b> <?php echo $sectorProgramaActividad1; ?><br>
        		</p>

                <p>
        			<b>Otro sector: </b> <?php echo $otroSectorProgramaActividad1; ?><br>
        		</p>

                <p>
        			<b>Tipo de organización (Alianzas): </b> <?php echo $tipo_organizacionProgramaActividad1; ?><br>
        		</p>
<hr>
                <p>
        			<b>Nombre del programa/actividad nº2: </b> <?php echo $nombreProgramaActividad2; ?><br>
        		</p>

                <p>
        			<b>Alcance: </b> <?php echo $alcanceProgramaActividad2; ?><br>
        		</p>
        	</div>


            <p>
        			<b>Municipio: </b> <?php echo $MunicipioProgramaActividad2; ?><br>
        		</p>

                <p>
        			<b>Sector: </b> <?php echo $sectorProgramaActividad2; ?><br>
        		</p>

                <p>
        			<b>Otro sector: </b> <?php echo $otroSectorProgramaActividad2; ?><br>
        		</p>

                <p>
        			<b>Tipo de organización (Alianzas): </b> <?php echo $tipo_organizacionProgramaActividad2; ?><br>
        		</p>
<hr>


<p>
        			<b>Nombre del programa/actividad nº3: </b> <?php echo $nombreProgramaActividad3; ?><br>
        		</p>

                <p>
        			<b>Alcance: </b> <?php echo $alcanceProgramaActividad3; ?><br>
        		</p>
        	</div>


            <p>
        			<b>Municipio: </b> <?php echo $MunicipioProgramaActividad3; ?><br>
        		</p>

                <p>
        			<b>Sector: </b> <?php echo $sectorProgramaActividad3; ?><br>
        		</p>

                <p>
        			<b>Otro sector: </b> <?php echo $otroSectorProgramaActividad3; ?><br>
        		</p>

                <p>
        			<b>Tipo de organización (Alianzas): </b> <?php echo $tipo_organizacionProgramaActividad3; ?><br>
        		</p>
<hr>

<p>
        			<b>Nombre del programa/actividad nº4: </b> <?php echo $nombreProgramaActividad4; ?><br>
        		</p>

                <p>
        			<b>Alcance: </b> <?php echo $alcanceProgramaActividad4; ?><br>
        		</p>
        	</div>


            <p>
        			<b>Municipio: </b> <?php echo $MunicipioProgramaActividad4; ?><br>
        		</p>

                <p>
        			<b>Sector: </b> <?php echo $sectorProgramaActividad4; ?><br>
        		</p>

                <p>
        			<b>Otro sector: </b> <?php echo $otroSectorProgramaActividad4; ?><br>
        		</p>

                <p>
        			<b>Tipo de organización (Alianzas): </b> <?php echo $tipo_organizacionProgramaActividad4; ?><br>
        		</p>
<hr>

<p>
        			<b>Nombre del programa/actividad nº5: </b> <?php echo $nombreProgramaActividad5; ?><br>
        		</p>

                <p>
        			<b>Alcance: </b> <?php echo $alcanceProgramaActividad5; ?><br>
        		</p>
        	</div>


            <p>
        			<b>Municipio: </b> <?php echo $MunicipioProgramaActividad5; ?><br>
        		</p>

                <p>
        			<b>Sector: </b> <?php echo $sectorProgramaActividad5; ?><br>
        		</p>

                <p>
        			<b>Otro sector: </b> <?php echo $otroSectorProgramaActividad5; ?><br>
        		</p>

                <p>
        			<b>Tipo de organización (Alianzas): </b> <?php echo $tipo_organizacionProgramaActividad5; ?><br>
        		</p>
<hr>

                <p>
                    <b>¿la empresa ha establecido alianzas con otras organizaciones? </b> <?php echo $AlianzasConOtrasOrg; ?><br>
                </p>

                <p>
        			<b>Áreas en las que estaría interesado en recibir algún tipo de apoyo: </b> <br>
        		</p>

                <p>
        			<!-- <?php  ?><br> -->
                    <?php echo $areasInteresEnApoyo1; ?><br>
                    <?php echo $areasInteresEnApoyo2; ?><br>
                    <?php echo $areasInteresEnApoyo3; ?><br>

        		</p>

                <p>
        			<b>Rango inversión anual (programas sociales): </b> <?php echo $rangoInversionAnual; ?><br>
        		</p>


        </div> 
	    <?php
	    }
	}
}

}else{
    echo 'Error!';
} ?>

<p><a href="mostrar.php" class="btn-volver">Volver</a></p>

<?php

include 'templates/footer.php';

?>


<script src="js/borrar_items.js"></script>