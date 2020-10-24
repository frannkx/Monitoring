<?php

     function verUsuarios(){
          $consulta=new Consultas();
          $filas=$consulta->cargarUsuarios();
          
          echo "<table border='1px'>
                    <tr>
                         <th>Id Usuario</th>
                         <th>Nombre</th>
                         <th>Apellido</th>
                         <th>Email</th>
                         <th>Modificar</th>
                         <th>Eliminar</th>
                    </tr>";
          foreach ($filas as $fila) {
               echo "<tr>";
               echo "<td>".$fila['id_usuario']."</td>";
               echo "<td>".$fila['nombre']."</td>";
               echo "<td>".$fila['apellido']."</td>";
               echo "<td>".$fila['email']."</td>";
               echo "<td><a href='controlador/ActualizarUsuario.php?id_usuario=".$fila['id_usuario']."'>Modificar</a></td>";
               echo "<td><a href='controlador/EliminarUsuario.php?id_usuario=".$fila['id_usuario']."'>Eliminar</a></td>";
               echo "</tr>";
          }

          echo "</table>";
     }

     function buscar($nombre){
          $consulta=new Consultas();
          $filas=$consulta->buscarUsuario($nombre);

          echo "<table border='1px'>
                    <tr>
                         <th>Id Usuario</th>
                         <th>Nombre</th>
                         <th>Apellido</th>
                         <th>Email</th>
                         <th>Modificar</th>
                         <th>Eliminar</th>
                    </tr>";
          if (isset($filas)) {
               foreach ($filas as $fila) {
                    echo "<tr>";
                    echo "<td>".$fila['id_usuario']."</td>";
                    echo "<td>".$fila['nombre']."</td>";
                    echo "<td>".$fila['apellido']."</td>";
                    echo "<td>".$fila['email']."</td>";
                    echo "<td><a href='controlador/ActualizarUsuario.php?id_usuario=".$fila['id_usuario']."'>Modificar</a></td>";
                    echo "<td><a href='controlador/EliminarUsuario.php?id_usuario=".$fila['id_usuario']."'>Eliminar</a></td>";
                    echo "</tr>";
               }
          }
          echo "</table>";
     }

 ?>
