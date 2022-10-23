<?php
include "templates/header.php";

include "db.php";

// error_reporting(0);
if(isset($_POST['entrar'])){
   
   $RUser = $conn->real_escape_string($_POST['login']);

   $Rqst = "SELECT * FROM login WHERE Email='$RUser'";
   $resultado = mysqli_query($conn,$Rqst);
   $verificado = $resultado->fetch_assoc();

   if($RUser == $verificado["Email"]){
      session_start();
      $_SESSION['Email'] = $verificado["Email"];
      $_SESSION['Nombre'] = $verificado["NombreUsuario"];      
      header('location: mostrar.php');
   }
}


?>



<div>
<header class="site-header">
          <div class="container contenido-header">
              <div class="barra" style="margin: 0 auto;">
                   <a href="index.php">
                      <img src="img/logo.png" alt="Logo">
                   </a>

              </div> <!--barra-->
              
           </div> <!-- Container-->
      </header>
      <h1 class="fw-300 centrar-texto">Inicia sesión</h1>
<div style="height: 90%; text-align: center; background-color: #1a45502e; min-height: 85vh;">

   <div style="padding: 5px;">
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="correo">Ingrese su correo</label>
    <input type="email" name="login" style="max-width: 300px;margin: 0 auto;"></input>

    <input type="submit" class="boton boton-amarillo f-btns" name="entrar" value="Entrar" style="max-width: 100px;">

    </form>
</div>
</div>

<?php
include "templates/footer.php";

?>