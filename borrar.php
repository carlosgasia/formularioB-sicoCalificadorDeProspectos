<?php
$ID = $_GET['id'];

$inc = include("db.php");
	
    $consulta = "DELETE FROM `encuesta_empresas` WHERE ID='$ID';";

	if( $resultado = mysqli_query($conn,$consulta) ){
        echo 'Borrado con exito';
        header('Location: mostrar.php?delete=success ');
    }



?>