<?php 
     
     require_once('modelo/class.conexion.php');
     require_once('modelo/class.consultas.php');
     require_once('controlador/ConsultarGrupos.php');
     require_once('menu.php');


 ?>


<!DOCTYPE html>
<html lang="es">
     <head>
          <meta charset="utf-8">
          <title>CrearDispositivo</title>
          <link rel="stylesheet" href="css/style.css">

     </head>
     <body>

          <?php avatar(); ?>

          

          <?php menu(); ?> 

          <div class="container">
          <h2>Crear Dispositivo</h2>
          <form class="" action="controlador/InsertarDispositivo.php" method="post">

               <table border="1px">
                    <tr>
                         <th>Nombre de Equipo</th>
                         <td>
                             <input type="text" name="nombre_dispositivo">
                         </td>
                    </tr>
                    <tr>
                         <th>IP</th>
                         <td>
                             <input type="ip" name="ip"> 
                         </td>
                    </tr>
                    <tr>
                         <th>Grupo</th>
                         <td>

                              <?php consultarGrupos(); ?>
                              
                              <a href="CrearGrupo.php">CrearGrupo</a>
                         </td>
                    </tr>
                    <tr>
                         <th>Descripción</th>
                         <td colspan="3"><textarea name="descripcion_dispositivo" value="descripcion_dispositivo"></textarea></td>
                    </tr>
                    <tr>
                         <td colspan="3" align="center">
                              <input type="submit" name="" value="Guardar">
                              <input type="reset" name="" value="Borrar">
                         </td>
                    </tr>
               </table>

          </form>
          </div>
          </div>

          <a href="index.php">Ir al home</a>
     </body>
</html>
