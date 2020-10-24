<?php

     function verDepartamentos()
     {
               $consulta=new Consultas();
               $filas=$consulta->cargarDepartamentos();

               echo "
                    <table border='1px'>
                         <tr>
                              <th>Id Departamento</th>
                              <th>Nombre Departamento</th>
                              <th>Modificar</th>
                              <th>Eliminar</th>
                         </tr>
               ";

               foreach ($filas as $fila) {

                    echo"<tr>";
                    echo "<td>".$fila['ID_DEPARTAMENTO']."</td>";
                    echo "<td>".$fila['NOMBRE_DEPARTAMENTO']."</td>";
                    echo "<td><a href='controlador/ModificarDepartamento.php?id_departamento=".$fila['ID_DEPARTAMENTO']."'>Modificar</a>";
                    echo "<td><a href='controlador/EliminarDepartamento.php?id_departamento=".$fila['ID_DEPARTAMENTO']."'>Eliminar</a>";
                    echo "</tr>";

               }

               echo "</table>";
     }


     function buscar($nombre){
          $consulta=new Consultas();
          $filas=$consulta->buscarDepartamento($nombre);

          echo "
               <table border='1px'>
                    <tr>
                         <th>Id Departamento</th>
                         <th>Nombre Departamento</th>
                         <th>Modificar</th>
                         <th>Eliminar</th>
                    </tr>
          ";
          if (isset($filas)) {
               foreach ($filas as $fila) {

                    echo"<tr>";
                    echo "<td>".$fila['ID_DEPARTAMENTO']."</td>";
                    echo "<td>".$fila['NOMBRE_DEPARTAMENTO']."</td>";
                    echo "<td><a href='controlador/ModificarDepartamento.php?id_departamento=".$fila['ID_DEPARTAMENTO']."'>Modificar</a>";
                    echo "<td><a href='controlador/EliminarDepartamento.php?id_departamento=".$fila['ID_DEPARTAMENTO']."'>Eliminar</a>";
                    echo "</tr>";

               }

               echo "</table>";
          }

     }
 ?>
