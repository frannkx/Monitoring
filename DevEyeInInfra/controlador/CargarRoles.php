<?php

     function verRoles(){
          $consulta=new Consultas();
          $filas=$consulta->cargarRoles();

          echo "<table border='1px'>
                    <tr>
                         <th>Id Rol</th>
                         <th>Nombre del Rol</th>
                         <th>Descripción</th>
                    </tr>
                    ";
          //foreach ($filas as $fila) {
               echo "<tr>";
               echo "<td>".$filas['id_rol']."</td>";
               echo "<td>".$filas['nombre_rol']."</td>";
               echo "<td>".$filas['descripcion_rol']."</td>";
               echo "</tr>";
               echo "</table>";

               echo "<table border='1px'>";

               echo '
               <tr>
                         <th>Consultar</th>
                         <th>Crear</th>
                         <th>Modificar</th>
                         <th>Eliminar</th>
                    </tr>

                    <tr>
                         <td>Consultar Roles <input type="checkbox" name="consultar_roles" value=1></td>
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
                    </tr>';

               echo "</table>";

               echo "<table border='1px'>";
               echo "<td><a href='controlador/ModificarRol.php?id_rol=".$filas['id_rol']."'>Modificar</a></td>";
               echo "<td><a href='controlador/EliminarRol.php?id_rol=".$filas['id_rol']."'>Eliminar</a></td>";
               echo "</table>";
          //}
          
     }

     function buscar($nombre){
          $consulta=new Consultas();
          $filas=$consulta->buscarRol($nombre);

          echo "<table border='1px'>
                    <tr>
                         <th>Id Rol</th>
                         <th>Nombre del Rol</th>
                         <th>Modificar</th>
                         <th>Eliminar</th>
                    </tr>";
          if (isset($filas)) {
               foreach ($filas as $fila) {
                    echo "<tr>";
                    echo "<td>".$fila['id_rol']."</td>";
                    echo "<td>".$fila['nombre_rol']."</td>";
                    echo "<td><a href='controlador/ModificarRol.php?id_rol=".$fila['id_rol']."'>Modificar</a></td>";
                    echo "<td><a href='controlador/EliminarRol.php?id_rol=".$fila['id_rol']."'>Eliminar</a></td>";
                    echo "</tr>";
               }
          }
          echo "</table>";
     }

/*
echo "<td><a href='controlador/ModificarRol.php?id_rol=".$fila['id_rol']."'>Modificar</a></td>";
echo "<td><a href='controlador/EliminarRol.php?id_rol=".$fila['id_rol']."'>Eliminar</a></td>";
*/
     
 ?>

