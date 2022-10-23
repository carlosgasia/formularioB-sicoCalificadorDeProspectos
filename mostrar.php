<?php 
include 'templates/header.php';

?>
<p style="text-align: center; background-image: linear-gradient(to bottom right,#3590a7,#000000); margin: 0; padding: 6px;color: white;">
  <b>Panel:</b>
<a href="./cerrarSesion.php" class="btn-aturde">Cerrar sesión</a><b> Usuario:</b>

<?php
session_start();

echo $_SESSION['Nombre'] ?>

</p>

<?php
include 'db.php';

if(!isset($_SESSION['Email'])){

    header('location: ./login.php');

}

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

    .btn-eliminar{       
    text-decoration: none;
    color: #bdbdbd;
    font-weight: 100;
    background-color: black;
    padding: 5px;
    border-radius: 10px;
    }



</style>
<header class="site-header">
          <div class="container contenido-header">
              <div class="barra" style="margin: 0 auto;">
                   <a href="index.php">
                      <img src="img/logo.png" alt="Logo">
                   </a>

              </div> <!--barra-->
              
           </div> <!-- Container-->
      </header>

     <h1 class="fw-300 centrar-texto">Panel administrativo</h1>

     <div class="grid centrar-columnas"> 

  <div class="col-12 bgcolorc" style="height: 100vh; text-align: center; margin: auto; display: flex; justify-content: center; align-items: center;">

<style>

    div{
        text-align: center;
    }
</style>



<?php

$inc = include("db.php");
if ($inc) {
	$consulta = "SELECT ID, FechaRegistro, NombreEmpresa FROM `encuesta_empresas` ORDER BY `encuesta_empresas`.`ID` DESC";

    $consulta2 = 'SELECT COUNT(ID) FROM `encuesta_empresas`;';
	
    $registrosDisponibles = mysqli_query($conn,$consulta2);
    $resultado = mysqli_query($conn,$consulta);
	if ($resultado) {
        
        ?>

<h1>Hasta la fecha hay <?php echo $registrosDisponibles->fetch_array()[0] ?> registros</h1></div>
<?php

		 while ($row = $resultado->fetch_array()) {
	    $fechaRegistro = $row['FechaRegistro'];
	    $NombreEmpresa = $row['NombreEmpresa'];
        $id = $row['ID'];
        


        ?>
        <div>
        	<h2><?php echo $fechaRegistro; ?></h2>
        	<div>
        		<p>
        			<b>Empresa: </b> <?php echo $NombreEmpresa ?><br>
        		</p>

                <p>
        			<b>Pulsa para: </b>

                    
                    <br>
        		</p>

                <p>
                <button class="btn-aturde"  onclick="mostrarElemento(<?php echo $id; ?>)">Ver más</button>
                    <button class="btn-eliminar" onclick="borrarElemento(<?php echo $id; ?>)" href="borrar.php?id=<?php echo $id; ?>">Borrar</button>

                    
                    <br>
        		</p>
        	</div>
        </div> 


        </div>
	    <?php
	    }
	}
}


include 'templates/footer.php';

?>