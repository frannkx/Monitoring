<?php

     function consultarGrupos(){
          $consulta=new Consultas();
          $filas=$consulta->cargarGrupos();
          echo "<select name='id_grupo'>";

          foreach ($filas as $fila) {
               echo "<option value=".$fila['ID_GRUPO'].">".$fila['NOMBRE_GRUPO']."</option>";
          }

          echo "</select>";
     }



 ?>