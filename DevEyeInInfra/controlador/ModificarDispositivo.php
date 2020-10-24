<?php

     require_once('../modelo/class.conexion.php');
     require_once('../modelo/class.consultas.php');

     if (isset($_GET['id_dispositivo'])) {
          $id_grupo=$_GET['id_dispositivo'];
          $consulta=new Consultas();
          $filas=$consulta->cargarDispositivo($id_dispositivo);
          foreach ($filas as $fila) {
               echo '
                    <form class="" action="ActualizarDispositivo.php" method="post">

		               <table border="1px">
		                    <tr>
		                         <th>Id de Equipo</th>
		                         <td>
		                             <input type="text" name="id_dispositivo" value="'.$fila['ID_DISPOSITIVO'].'" readonly="readonly">
		                         </td>
		                    </tr>
		                    <tr>
		                         <th>Nombre de Equipo</th>
		                         <td>
		                             <input type="text" name="nombre_dispositivo" value="'.$fila['NOMBRE_DISPOSITIVO'].'">
		                         </td>
		                    </tr>
		                    <tr>
		                         <th>IP</th>
		                         <td>
		                             <input type="ip" name="ip" value="'.$fila['IP'].'"> 
		                         </td>
		                    </tr>
		                    <tr>
		                         <th>Grupo</th>
		                         <td>';

		                              consultarGrupos();

		        echo '
		                              
		                         </td>
		                    </tr>
		                    <tr>
		                         <th>Descripción</th>
		                         <td colspan="3"><textarea name="descripcion_dispositivo" value="descripcion_dispositivo">"'.$fila['DESCRIPCION_DISPOSITIVO'].'"</textarea></td>
		                    </tr>
		                    <tr>
		                         <td colspan="3" align="center">
		                              <input type="submit" name="" value="Guardar">
		                              <input type="reset" name="" value="Borrar">
		                         </td>
		                    </tr>
		               </table>

		          </form>
                    ';
          }
          
     }

?>