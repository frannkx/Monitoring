<?php

require_once('modelo/class.conexion.php');
require_once('modelo/class.consultas.php');
require_once('controlador/ConsultarRoles.php');
require_once('controlador/ConsultarDepartamentos.php');
require_once('menu.php');

 ?>

<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>CrearUsuario</title>
          <link rel="stylesheet" type="text/css" href="css/style.css">
     </head>
     <body>

          

          <?php avatar(); ?>

          

          <?php menu(); ?> 
          
          <div class="container">
          <h2>Crear Usuario</h2>
          <form action="controlador/InsertarUsuario.php" method="post">
          <table align="center" border="1px">
               <tr>
                    <td>Nombre: <input type="text" name="nombre"></input></td>
                    <td>Apellido: <input type="text" name="apellido"></input></td>
                    
               </tr>

               <tr>
                    <td>Email: <input type="text" name="email"></input></td>
                    <td>
                         <?php consultarRoles(); ?> <a href="CrearRol.php">Crear Rol</a>
                    </td>
               </tr>

               <tr>
                    <td>
                         Contraseña: <input type="password" name="password" value=""></input>
                    </td>
                    <td>
                         Confirmacion: <input type="conf_password" name="" value=""></input>
                    </td>
               </tr>

               <tr>
                    <td>
                         <input type="submit" name="Enviar" value="Enviar">
                         <input type="reset" name="Borrar" value="Borrar">
                    </td>
               </tr>
          </table>
          </form>
          </div>

          <a href="index.php">Ir al home</a>

          <?php

          ?>
          <!--<script src="../bootstrap/js/jquery-1.11.1.min.js"></script>-->
          <script src="../bootstrap/js/bootstrap.min.js"></script>
     </body>
</html>
