<?php

     function cosultarDepartamentos(){
          $consulta=new Consultas();
          $filas=$consulta->cargarDepartamentos();
          echo "Departamento <select label='Departamento'>";

          foreach ($filas as $fila) {
               echo "<option value='".$fila["ID_DEPARTAMENTO"]."'>".$fila['NOMBRE_DEPARTAMENTO']."</option>";
          }

          echo "</select>";
     }

 ?>
