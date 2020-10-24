<?php 
     
     require_once('modelo/class.conexion.php');
     require_once('modelo/class.consultas.php');
     require_once('menu.php');


 ?>

<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>CrearRol</title>
          <link rel="stylesheet" href="css/style.css">

     </head>
     <body>

          <?php avatar(); ?>  

          

          <?php menu(); ?> 


          <div class="container">
          <h2>Crear Rol</h2>
          <form class="" action="controlador/InsertarRol.php" method="post">
               <table align="center">
                    <tr>
                         
                         <td>
                              Nombre <input type="text" name="nombre_rol">
                         </td>
                         <td>Descripción <textarea name="descripcion_rol"></textarea></td>
                    </tr>
               </table>

               <table align="center" border="1px">
                    <tr>
                         <th>Consultar</th>
                         <th>Crear</th>
                         <th>Modificar</th>
                         <th>Eliminar</th>
                    </tr>

                    <tr>
                         <td>Consultar Roles <input type="checkbox" name="consultar_roles"></td>
                         <td>Crear Roles <input type="checkbox" name="crear_roles"></td>
                         <td>Modificar Roles <input type="checkbox" name="modificar_roles"></td>
                         <td>Eliminar Roles <input type="checkbox" name="eliminar_roles"></td>
                    </tr>

                    <tr>
                         <td>Consultar Usuarios <input type="checkbox" name="consultar_usuarios"></td>
                         <td>Crear Usuarios <input type="checkbox" name="crear_usuarios"></td>
                         <td>Modificar Usuarios <input type="checkbox" name="modificar_usuarios"></td>
                         <td>Eliminar Usuarios <input type="checkbox" name="eliminar_usuarios"></td>
                    </tr>

                    <tr>
                         <td>Consultar Paneles <input type="checkbox" name="consultar_paneles"></td>
                         <td>Crear Paneles <input type="checkbox" name="crear_paneles"></td>
                         <td>Modificar Paneles <input type="checkbox" name="modificar_paneles"></td>
                         <td>Eliminar Paneles <input type="checkbox" name="eliminar_paneles"></td>
                    </tr>

                    <tr>
                         <td>Consultar Grupos <input type="checkbox" name="consultar_grupos"></td>
                         <td>Crear Grupos <input type="checkbox" name="crear_grupos"></td>
                         <td>Modificar Grupos <input type="checkbox" name="modificar_grupos"></td>
                         <td>Eliminar Grupos <input type="checkbox" name="eliminar_grupos"></td>
                    </tr>

                    <tr>
                         <td>Consultar Dispositivos <input type="checkbox" name="consultar_dispositivos"></td>
                         <td>Crear Dispositivos <input type="checkbox" name="crear_dispositivos"></td>
                         <td>Modificar Dispositivos <input type="checkbox" name="modificar_dispositivos"></td>
                         <td>Eliminar Dispositivos <input type="checkbox" name="eliminar_dispositivos"></td>
                    </tr>

                    <tr>
                         <td>Consultar Alertas <input type="checkbox" name="consultar_alertas"></td>
                    </tr>


               </table>

               <table align="center">
                    <tr>
                         <td>
                              <input type="submit" name="" value="Guardar">
                              <input type="reset" name="" value="Borrar">
                         </td>
                    </tr>
               </table>
          </form>
          </div>

          <a href="index.php">Ir al home</a>

     </body>
</html>
