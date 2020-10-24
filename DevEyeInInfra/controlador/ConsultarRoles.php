<?php

     function consultarRoles(){
          $consulta=new Consultas();
          $filas=$consulta->cargarRoles();
          echo "Rol <select label='Rol'>";

          foreach ($filas as $fila) {
               echo "<option value='".$fila["id_rol"]."'>".$fila['nombre_rol']."</option>";
          }

          echo "</select>";
     }



 ?>
