<?php include 'templates/header.php' ?>

     <header class="site-header">
          <div class="container contenido-header">
              <div class="barra" style="margin: 0 auto;">
                

              </div> <!--barra-->
              
           </div> <!-- Container-->
      </header>

     <h1 class="fw-300 centrar-texto">¡Gracias!</h1>

<div class="grid centrar-columnas"> 

  <div class="col-12 bgcolorc" style="height: 100vh; text-align: center; margin: auto; display: flex; justify-content: center; align-items: center;">


      




<?php

include 'db.php';


 	$destino="administracion@g-social.com,g.social.vzla@gmail.com";
 

     $fechaRegistro = date("h:i:s A d/m/y");

	 if(isset($_POST["nombreEmpresa"])){
		 $nombreEmpresa= $_POST["nombreEmpresa"];
	 }else{
		$nombreEmpresa='-vacio-';
	 }

	 if(isset($_POST["nombrePersona"])){
		$nombrePersona= $_POST["nombrePersona"];
	}else{
		$nombrePersona='-vacio-';
	}
	
	if(isset($_POST["numeroContacto"])){
		$numeroContacto= $_POST["numeroContacto"];
	}else{
		$numeroContacto = '-vacio-';
	}

	if(isset($_POST["empresaEjecutaProgramasSocialesDirigidaATrabajadoresFamilias"])){

		$empresaEjecutaProgramasSocialesDirigidaATrabajadoresFamilias= $_POST["empresaEjecutaProgramasSocialesDirigidaATrabajadoresFamilias"];
	}else{
		$empresaEjecutaProgramasSocialesDirigidaATrabajadoresFamilias= '-vacio-';
	}

	if(isset($_POST["empresaEjecutaProgramasSocialesDirigidaAComunidad"])){

		$empresaEjecutaProgramasSocialesDirigidaAComunidad= $_POST["empresaEjecutaProgramasSocialesDirigidaAComunidad"];

	}else{
		$empresaEjecutaProgramasSocialesDirigidaAComunidad= '-vacio-';
	}

	if(isset($_POST["nombreProgramaActividad1"])){
		$nombreProgramaActividad1= $_POST["nombreProgramaActividad1"];
	}else{
		$nombreProgramaActividad1= '-vacio-';
	}

	if(isset($_POST["alcanceProgramaActividad1"])){
		$alcanceProgramaActividad1= $_POST["alcanceProgramaActividad1"];
	}else{
		$alcanceProgramaActividad1= '-vacio-';
	}

	if(isset($_POST["MunicipioProgramaActividad1"])){
		$MunicipioProgramaActividad1= $_POST["MunicipioProgramaActividad1"];
	}else{
		$MunicipioProgramaActividad1= '-vacio-'; 
	}

	if(isset($_POST["sectorProgramaActividad1"])){

		$sectorProgramaActividad1= $_POST["sectorProgramaActividad1"];
	}else{
		$sectorProgramaActividad1= '-vacio-';

	}

	if(isset($_POST["otroSectorProgramaActividad1"])){

		$otroSectorProgramaActividad1 = $_POST["otroSectorProgramaActividad1"];
		
	}else{
		$otroSectorProgramaActividad1 = '-vacio-';

	}

	



	 if(isset($_POST["nombreProgramaActividad2"])){
		$nombreProgramaActividad2= $_POST["nombreProgramaActividad2"];
	 }else{
		$nombreProgramaActividad2 = '-vacio-';

	}

	 if(isset($_POST["alcanceProgramaActividad2"])){
		$alcanceProgramaActividad2= $_POST["alcanceProgramaActividad2"];
	 }else{
		$alcanceProgramaActividad2 = '-vacio-';

	}

	 if(isset($_POST["municipioProgramaActividad2"])){
		$municipioProgramaActividad2 = $_POST["municipioProgramaActividad2"];
	 }else{
		$municipioProgramaActividad2 = '-vacio-';

	}

	 if(isset($_POST["sectorProgramaActividad2"])){
		$sectorProgramaActividad2= $_POST["sectorProgramaActividad2"];
	 }else{
		$sectorProgramaActividad2 = '-vacio-';
	}

	 if(isset($_POST["otroSectorProgramaActividad2"])){
		$otroSectorProgramaActividad2= $_POST["otroSectorProgramaActividad2"];
	 }else{
		$otroSectorProgramaActividad2 = '-vacio-';
	}

	 if(isset($_POST["tipo_organizacionProgramaActividad2"])){
		$tipo_organizacionProgramaActividad2= $_POST["tipo_organizacionProgramaActividad2"];

	 }


	//  actividad 3

	if(isset($_POST["nombreProgramaActividad3"])){
		$nombreProgramaActividad3= $_POST["nombreProgramaActividad3"];
	 }else{
		$nombreProgramaActividad3= '-vacio-';
	 }

	 if(isset($_POST["alcanceProgramaActividad3"])){
		$alcanceProgramaActividad3= $_POST["alcanceProgramaActividad3"];
	 }else{
		$alcanceProgramaActividad3= '-vacio-';
	 }

	 if(isset($_POST["municipioProgramaActividad3"])){
		$municipioProgramaActividad3= $_POST["municipioProgramaActividad3"];
	 }else{
		$municipioProgramaActividad3= '-vacio-';
	 }

	 if(isset($_POST["sectorProgramaActividad3"])){
		$sectorProgramaActividad3= $_POST["sectorProgramaActividad3"];
	 }else{
		$sectorProgramaActividad3 = '-vacio-';
	 }

	 if(isset($_POST["otroSectorProgramaActividad3"])){
		$otroSectorProgramaActividad3= $_POST["otroSectorProgramaActividad3"];
	 }else{
		$otroSectorProgramaActividad3= '-vacio-';
		 }

	 if(isset($_POST["tipo_organizacionProgramaActividad3"])){
		$tipo_organizacionProgramaActividad3= $_POST["tipo_organizacionProgramaActividad3"];
	 }else{
		$tipo_organizacionProgramaActividad3= '-vacio-';
	 }

	//  actividad 4

	if(isset($_POST["nombreProgramaActividad4"])){
		$nombreProgramaActividad4= $_POST["nombreProgramaActividad4"];
	 }else{
		$nombreProgramaActividad4= '-vacio-';
	 }

	 if(isset($_POST["alcanceProgramaActividad4"])){
		$alcanceProgramaActividad4= $_POST["alcanceProgramaActividad4"];
	 }else{
		$alcanceProgramaActividad4 = '-vacio-';
	 }

	 if(isset($_POST["municipioProgramaActividad4"])){
		$municipioProgramaActividad4= $_POST["municipioProgramaActividad4"];
	 }else{
		$municipioProgramaActividad4= '-vacio-';
	 }

	 if(isset($_POST["sectorProgramaActividad4"])){
		$sectorProgramaActividad4= $_POST["sectorProgramaActividad4"];
	 }else{
		$sectorProgramaActividad4= '-vacio-';

	 }

	 if(isset($_POST["otroSectorProgramaActividad4"])){
		$otroSectorProgramaActividad4= $_POST["otroSectorProgramaActividad4"];

	 }else{
		$otroSectorProgramaActividad4= '-vacio-';

	 }

	 if(isset($_POST["tipo_organizacionProgramaActividad4"])){
		$tipo_organizacionProgramaActividad4= $_POST["tipo_organizacionProgramaActividad4"];
	 }else{
		$tipo_organizacionProgramaActividad4= '-vacio-';

	 }


	// actividad 5
	if(isset($_POST["nombreProgramaActividad5"])){
		$nombreProgramaActividad5= $_POST["nombreProgramaActividad5"];
	 }else{
		$nombreProgramaActividad5= '-vacio-';
	 }

	 if(isset($_POST["alcanceProgramaActividad5"])){
		$alcanceProgramaActividad5= $_POST["alcanceProgramaActividad5"];
	 }else{
		$alcanceProgramaActividad5= '-vacio-';
	 }

	 if(isset($_POST["municipioProgramaActividad5"])){
		$municipioProgramaActividad5= $_POST["municipioProgramaActividad5"];
	 }else{
		$municipioProgramaActividad5= '-vacio-';
	 }

	 if(isset($_POST["sectorProgramaActividad5"])){
		$sectorProgramaActividad5= $_POST["sectorProgramaActividad5"];
	 }else{
		$sectorProgramaActividad5= '-vacio-';
	}

	 if(isset($_POST["otroSectorProgramaActividad5"])){
		$otroSectorProgramaActividad5= $_POST["otroSectorProgramaActividad5"];
	 }else{
		$otroSectorProgramaActividad5= '-vacio-';
	 }

	 if(isset($_POST["tipo_organizacionProgramaActividad5"])){
		$tipo_organizacionProgramaActividad5= $_POST["tipo_organizacionProgramaActividad5"];
	 }else{
		$tipo_organizacionProgramaActividad5= '-vacio-';
	 }



	 if(isset($_POST["AlianzasConOtrasOrg"])){
		 $AlianzasConOtrasOrg= $_POST["AlianzasConOtrasOrg"];
	}else{
		$AlianzasConOtrasOrg='-vacio-';
	
	}
		 
	if(isset($_POST["tipo_organizacionProgramaActividad1"])){

		$tipo_organizacionProgramaActividad1= $_POST["tipo_organizacionProgramaActividad1"];
   }else{
	$tipo_organizacionProgramaActividad1= '-vacio-';
   }

   if(isset($_POST["tipo_organizacionProgramaActividad2"])){

	$tipo_organizacionProgramaActividad2= $_POST["tipo_organizacionProgramaActividad2"];

}else{
	$tipo_organizacionProgramaActividad2= '-vacio-';
}

if(isset($_POST["tipo_organizacionProgramaActividad3"])){

	$tipo_organizacionProgramaActividad3= $_POST["tipo_organizacionProgramaActividad3"];
}else{
	$tipo_organizacionProgramaActividad3= '-vacio-';
}

if(isset($_POST["tipo_organizacionProgramaActividad4"])){
	$tipo_organizacionProgramaActividad4= $_POST["tipo_organizacionProgramaActividad4"];
}else{
	$tipo_organizacionProgramaActividad4= '-vacio-';
}

if(isset($_POST["tipo_organizacionProgramaActividad5"])){

	$tipo_organizacionProgramaActividad5= $_POST["tipo_organizacionProgramaActividad5"];
}else{
	$tipo_organizacionProgramaActividad5= '-vacio-';
}


if(isset($_POST["areasInteresEnApoyo1"])){

	$areasInteresEnApoyo1= $_POST["areasInteresEnApoyo1"];
}else{
	$areasInteresEnApoyo1= '-vacio-';

}
	 

if(isset($_POST["areasInteresEnApoyo2"])){

	$areasInteresEnApoyo2= $_POST["areasInteresEnApoyo2"];

}else{
	$areasInteresEnApoyo2= '-vacio-';

}

if(isset($_POST["areasInteresEnApoyo3"])){
	$areasInteresEnApoyo3= $_POST["areasInteresEnApoyo3"];
}else{
	$areasInteresEnApoyo3= '-vacio-';
}
	 
if(isset($_POST["rangoInversionAnual"])){

	$rangoInversionAnual= $_POST["rangoInversionAnual"];
}else{
	$rangoInversionAnual= '-vacio-';

}

$Rqst = "INSERT INTO `encuesta_empresas`(`FechaRegistro`, `NombreEmpresa`, `NombrePersona`, `NumeroContacto`, `empresaEjecutaProgramasSocialesDirigidaATrabajadoresFamilias`, `empresaEjecutaProgramasSocialesDirigidaAComunidad`, `nombreProgramaActividad1`, `alcanceProgramaActividad1`, `MunicipioProgramaActividad1`, `sectorProgramaActividad1`, `otroSectorProgramaActividad1`, `nombreProgramaActividad2`, `alcanceProgramaActividad2`, `municipioProgramaActividad2`, `sectorProgramaActividad2`, `otroSectorProgramaActividad2`, `nombreProgramaActividad3`, `alcanceProgramaActividad3`, `municipioProgramaActividad3`, `sectorProgramaActividad3`, `otroSectorProgramaActividad3`, `nombreProgramaActividad4`, `alcanceProgramaActividad4`, `municipioProgramaActividad4`, `sectorProgramaActividad4`, `otroSectorProgramaActividad4`, `nombreProgramaActividad5`, `alcanceProgramaActividad5`, `municipioProgramaActividad5`, `sectorProgramaActividad5`, `otroSectorProgramaActividad5`, `AlianzasConOtrasOrg`, `tipo_organizacionProgramaActividad1`, `tipo_organizacionProgramaActividad2`, `tipo_organizacionProgramaActividad3`, `tipo_organizacionProgramaActividad4`, `tipo_organizacionProgramaActividad5`, `areasInteresEnApoyo1`, `areasInteresEnApoyo2`, `areasInteresEnApoyo3`, `rangoInversionAnual`) VALUES ('$fechaRegistro','$nombreEmpresa','$nombrePersona','$numeroContacto','$empresaEjecutaProgramasSocialesDirigidaATrabajadoresFamilias','$empresaEjecutaProgramasSocialesDirigidaAComunidad','$nombreProgramaActividad1','$alcanceProgramaActividad1','$MunicipioProgramaActividad1','$sectorProgramaActividad1','$otroSectorProgramaActividad1','$nombreProgramaActividad2','$alcanceProgramaActividad2','$municipioProgramaActividad2','$sectorProgramaActividad2','$otroSectorProgramaActividad2','$nombreProgramaActividad3','$alcanceProgramaActividad3','$municipioProgramaActividad3','$sectorProgramaActividad3','$otroSectorProgramaActividad3','$nombreProgramaActividad4','$alcanceProgramaActividad4','$municipioProgramaActividad4','$sectorProgramaActividad4','$otroSectorProgramaActividad4','$nombreProgramaActividad5','$alcanceProgramaActividad5','$municipioProgramaActividad5','$sectorProgramaActividad5','$otroSectorProgramaActividad5','$AlianzasConOtrasOrg','$tipo_organizacionProgramaActividad1','$tipo_organizacionProgramaActividad2','$tipo_organizacionProgramaActividad3','$tipo_organizacionProgramaActividad4','$tipo_organizacionProgramaActividad5','$areasInteresEnApoyo1','$areasInteresEnApoyo2','$areasInteresEnApoyo3','$rangoInversionAnual')";


$resultado = mysqli_query($conn,$Rqst);
if ($resultado) {

	$Notification = 'La información se ha enviado correctamente';

} else {
 
	$Notification = '¡Ups ha ocurrido un error!';

}

?>

<div>
          <h2><?php echo $Notification ?></h2>
         
    <a class="boton boton-amarillo" href="index.php">Volver</a>
  </div>
 

 </div>
</div><!--grid-->


<?php




	// $contenido = "Nombre de la empresa: " . $nombreCompleto . "\nCédula: " . $Cedula . 
	// 			  "\nFecha de nacimiento: " . $fnacimiento . "\nSexo: " . $typesex . 
	// 			  "\nNúmero telefónico: " . $numeroDtelefono . "\nDirección (línea 1): " . $direccionLocal . 
	// 			   "\nDirección (línea 2): " . $direccionLocal2 . "\nCiudad: " . $ciudadForm . 
	// 				"\nEstado: " . $estadoForm . "\nRed Social: " . $igform . "\nCorreo: " . $emailForm . 
	// 				"\nInterés (1): " . $op_interes . "\nInterés (2): " . $op_interes2 . "\nInterés (3): " . $op_interes3 . 
	// 				"\nOtro interés: " . $otraInteres . "\nHabilidad (1): " . $habilidades1 . "\nHabilidad (2): " . $habilidades2 . 
	// 				"\nHabilidad (3): " . $habilidades3 . "\nOtra habilidad: " . $Ohabilidad . "\n¿Ha tenido experiencia como voluntario? : " . $entrenamientoRequerido . 
	// 				"\n¿Por qué quiere ser voluntario? : " . $Pvoluntario .  
	// 				"\nDías disponibles: " . $Dvoluntario . "\nHoras disponibles: " . $HorasVoluntario . 
	// 				"\nFines de semana: " . $FinesDsemana . "\nHoras: " . $Horas;


 	// mail($destino,"Encuesta-Empresas", $contenido);
 	
 	// header("location:gracias.html");

	 include 'templates/footer.php';
?>
