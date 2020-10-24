<?php

     require_once('../modelo/class.conexion.php');
     require_once('../modelo/class.consultas.php');

     if (isset($_GET['id_rol'])) {
          $id_rol=$_GET['id_rol'];
          $consulta=new Consultas();
          $filas=$consulta->cargarRol($id_rol);
          /*foreach ($filas as $fila) {*/
               echo "<h1>Modificar Rol</h1>";
               echo "<form class='' action='ActualizarRol.php' method='post'>";
               echo "<table align='center' border='1px'>";
               echo "<tr>
                         <td>";
               echo "Numero <input type='text' name='' value='".$filas['id_rol']."'>";
               echo "
                    </td>
                    <td>
               ";
               echo "Nombre <input type='text' name='nombre_rol' value='".$filas['nombre_rol']."'>";

               echo "
                    </td>
               </tr>
               <tr>
                    <td>";
               echo "<input type='submit' name='' value='Guardar'>";
               echo "<input type='reset' name='' value='Borrar'>";
          echo "
                    </td>
               </tr>
          </table>
          </form>
          ";

     }

 ?>
