<?php

     function verRoles(){
          $consulta=new Consultas();
          $filas=$consulta->cargarRoles();

          echo "<table border='1px'>
                    <tr>
                         <th>Id Rol</th>
                         <th>Nombre del Rol</th>
                         <th>Modificar</th>
                         <th>Eliminar</th>
                    </tr>";
          foreach ($filas as $fila) {
               echo "<tr>";
               echo "<td>".$fila['id_rol']."</td>";
               echo "<td>".$fila['nombre_rol']."</td>";
               echo "<td><a href='controlador/ModificarRol.php?id_rol=".$fila['id_rol']."'>Modificar</a></td>";
               echo "<td><a href='controlador/EliminarRol.php?id_rol=".$fila['id_rol']."'>Eliminar</a></td>";
               echo "</tr>";
          }
          echo "</table>";
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
 ?>
