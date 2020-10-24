<?php 
     
     require_once('modelo/class.conexion.php');
     require_once('modelo/class.consultas.php');
     require_once('menu.php');


 ?>

<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>ConfigurarDashboard</title>
          <link rel="stylesheet" href="css/style.css">

     </head>
     <body>

          <?php avatar(); ?>

          

          <?php menu(); ?> 

          <div class="container" id="">
          <h2>Configurar Panel</h2>
               <table>
                    <tr>
                         <td>
                              Nombre <input type="text" name="nombre_panel">
                         </td>
                         <td>
                              Descripción <textarea name="descripcion_panel"></textarea>
                         </td>
                    </tr>
               </table>
               <table border="1px">
                    <tr>
                         <td>
                              <input type="checkbox" name="" value="Servidores"> Servidores
                         </td>
                         <td>
                              <input type="checkbox" name="" value="Redes"> Redes
                         </td>
                    </tr>
                    <tr>
                         <td>
                              <input type="checkbox" name="" value="Srv-1"> Srv-1
                         </td>
                         <td>
                              <input type="checkbox" name="" value="Red-1"> Red-1
                         </td>
                    </tr>
                    <tr>
                         <td>
                              <input type="checkbox" name="" value="Srv-2"> Srv-2
                         </td>
                         <td>
                              <input type="checkbox" name="" value="Red-2"> Red-2
                         </td>
                    </tr>
                    <tr>
                         <td>
                              <input type="checkbox" name="" value="Srv-3"> Srv-3
                         </td>
                         <td>
                              <input type="checkbox" name="" value="Red-3"> Red-3
                         </td>
                    </tr>
                    <tr>
                         <td>
                              <input type="submit" name="" value="Guardar">
                              <input type="reset" name="" value="Borrar">
                         </td>
                    </tr>
               </table>
          </div>

     </body>
</html>