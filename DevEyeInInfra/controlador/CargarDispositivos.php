<?php

     function ConsultarDispositivos(){
          $consulta=new Consultas();
          $filas=$consulta->cargarDispositivos();

          echo "<table border='1px'>
                    <tr>
                         <th>Id Dispositivo</th>
                         <th>Nombre del Dispositivo</th>
                         <th>IP</th>
                         <th>Grupo</th>
                         <th>Descripcion</th>
                         <th>Seleccionar</th>
                         
                    </tr>";
          foreach ($filas as $fila) {
               echo "<tr>";
               echo "<td>".$fila['ID_DISPOSITIVO']."</td>";
               echo "<td>".$fila['NOMBRE_DISPOSITIVO']."</td>";
               echo "<td>".$fila['IP']."</td>";
               $grupos=$consulta->buscarNombreGrupo($fila['ID_GRUPO']);
               foreach ($grupos as $grupo) {
                    echo "<td>".$grupo['NOMBRE_GRUPO']."</td>";     
               }               
               echo "<td>".$fila['DESCRIPCION_DISPOSITIVO']."</td>";
               echo "<td><input type='checkbox' name=''></td>";
               
               echo "</tr>";
          }
          echo "</table>";
     }

     function verDispositivos(){
          $consulta=new Consultas();
          $filas=$consulta->cargarDispositivos();

          echo "<table border='1px'>
                    <tr>
                         <th>Id Dispositivo</th>
                         <th>Nombre del Dispositivo</th>
                         <th>IP</th>
                         <th>Grupo</th>
                         <th>Descripcion</th>
                         <th>Modificar</th>
                         <th>Eliminar</th>
                    </tr>";
          foreach ($filas as $fila) {
               echo "<tr>";
               echo "<td>".$fila['ID_DISPOSITIVO']."</td>";
               echo "<td>".$fila['NOMBRE_DISPOSITIVO']."</td>";
               echo "<td>".$fila['IP']."</td>";
               $grupos=$consulta->buscarNombreGrupo($fila['ID_GRUPO']);
               foreach ($grupos as $grupo) {
                    echo "<td>".$grupo['NOMBRE_GRUPO']."</td>";     
               }               
               echo "<td>".$fila['DESCRIPCION_DISPOSITIVO']."</td>";
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
