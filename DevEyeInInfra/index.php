<?php 
  require_once('menu.php');
  require_once('controlador/Graficar.php');
  require_once('modelo/class.conexion.php');
  require_once('modelo/class.consultas.php');
  require_once('Pruebas/archivos.php');
  
 ?>

<!DOCTYPE html>
<html lang="es">
     <head>

       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IEedge">
       <title>Monitor Vivir Seguros .:EyeinInfra:.</title>
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">-->
       <link rel="stylesheet" type="text/css" href="css/style.css">

     </head>
     <body>
      <?php avatar(); ?>  
      <?php menu(); ?>
      
      <div class="container">
      <h2>Monitoreo en vivo</h2>
      <?php graficar(); ?>   
      </div> 

          <script src="js/bootstrap.min.js"></script>

     </body>
</html>
