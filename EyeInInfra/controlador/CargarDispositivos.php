<?php

     function verDispositivos(){
          $consulta=new Consultas();
          $filas=$consulta->cargarDispositivos();

          echo "<table border='1px'>
                    <tr>
                         <th>Id Dispositivo</th>
                         <th>Nombre del Dispositivo</th>
                         <th>IP</th>
                         <th>Modificar</th>
                         <th>Eliminar</th>
                    </tr>";
          foreach ($filas as $fila) {
               echo "<tr>";
               echo "<td>".$fila['ID_DISPOSITIVO']."</td>";
               echo "<td>".$fila['NOMBRE_DISPOSITIVO']."</td>";
               echo "<td>".$fila['IP']."</td>";
               echo "<td><a href='controlador/ModificarDispositivo.php?ID_DISPOSITIVO=".$fila['ID_DISPOSITIVO']."'>Modificar</a></td>";
               echo "<td><a href='controlador/EliminarDispositivo.php?id_dispositivo=".$fila['ID_DISPOSITIVO']."'>Eliminar</a></td>";
               echo "</tr>";
          }
          echo "</table>";
     }

     function buscar($nombre){
          $consulta=new Consultas();
          $filas=$consulta->buscarDispositivo($nombre);

          echo "<table border='1px'>
                    <tr>
                         <th>Id Dispositivo</th>
                         <th>Nombre del Dispositivo</th>
                         <th>IP</th>
                         <th>Modificar</th>
                         <th>Eliminar</th>
                    </tr>";
          if (isset($filas)) {
               foreach ($filas as $fila) {
                    echo "<tr>";
                    echo "<td>".$fila['ID_DISPOSITIVO']."</td>";
                    echo "<td>".$fila['NOMBRE_DISPOSITIVO']."</td>";
                    echo "<td>".$fila['IP']."</td>";
                    echo "<td><a href='controlador/ModificarDispositivo.php?ID_DISPOSITIVO=".$fila['ID_DISPOSITIVO']."'>Modificar</a></td>";
                    echo "<td><a href='controlador/EliminarDispositivo.php?id_dispositivo=".$fila['ID_DISPOSITIVO']."'>Eliminar</a></td>";
                    echo "</tr>";
               }
               echo "</table>";
          }
     }
 ?>
