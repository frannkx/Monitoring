<?php

     require_once('../modelo/class.conexion.php');
     require_once('../modelo/class.consultas.php');

     if (isset($_GET['id_grupo'])) {
          $id_grupo=$_GET['id_grupo'];
          $consulta=new Consultas();
          $filas=$consulta->cargarGrupo($id_grupo);
          foreach ($filas as $fila) {
               //print_r(array_keys($fila));
               echo '
                    <form action="ActualizarGrupo.php" method="post">
                         <table border="1px">
                              <tr>
                                   <th>
                                        ID Grupo
                                   </th>
                                   <td>
                                        <input type="text" name="id_grupo" value="'.$fila['ID_GRUPO'].'" readonly="readonly">
                                   </td>
                              </tr>
                              <tr>
                                   <th>
                                        Nombre Grupo
                                   </th>
                                   <td>
                                        <input type="text" name="nombre_grupo" value="'.$fila['NOMBRE_GRUPO'].'">
                                   </td>
                              </tr>
                              <tr>
                                   <th>
                                        Descripcion
                                   </th>
                                   <td>
                                        <textarea rows="5" cols="30" name="descripcion_grupo">'.$fila['DESCRIPCION_GRUPO'].'</textarea>
                                   </td>                    
                              </tr>
                              <tr>
                                   <td colspan="3" align="center">
                                        <input type="submit" name="Guardar" value="Guardar">
                                        <input type="reset" name="Limpiar" value="Limpiar">
                                   </td>
                              </tr>
                         </table>
                    </form>
                    ';
          }
          
     }

?>

