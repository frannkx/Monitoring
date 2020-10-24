<?php 

     function verGrupos(){
     	$consulta=new Consultas();
     	$filas=$consulta->cargarGrupos();

     	echo '
     		 <table border="1px">
			 	<tr>
			 		<th>Id Grupo</th>
			 		<th>Nombre Grupo</th>
			 		<th>Descripcion Grupo</th>
                         <th>Modificar</th>
                         <th>Eliminar</th>
			 	</tr>
     	';
     	foreach ($filas as $fila) {
     		echo "
     		<tr>	
	     		<td>".$fila['ID_GRUPO']."</td>
				<td>".$fila['NOMBRE_GRUPO']."</td>
				<td>".$fila['DESCRIPCION_GRUPO']."</td>
                    <td><a href='controlador/ModificarGrupo.php?id_grupo=".$fila['ID_GRUPO']."'>Modificar</a></td>
                    <td><a href='controlador/EliminarGrupo.php?id_grupo=".$fila['ID_GRUPO']."'>Eliminar</a></td>
			</tr>
			";
     	}

     	echo "</table>";
     }

     function buscar($nombre){
          $consulta=new Consultas();
          $filas=$consulta->buscarGrupo($nombre);

          echo "<table border='1px'>
                    <tr>
                         <th>Id Grupo</th>
                         <th>Nombre del Grupo</th>
                         <th>Descripcion del Grupo</th>
                         <th>Modificar</th>
                         <th>Eliminar</th>
                    </tr>";
          if (isset($filas)) {
               foreach ($filas as $fila) {
                    echo "<tr>";
                    echo "<td>".$fila['ID_GRUPO']."</td>";
                    echo "<td>".$fila['NOMBRE_GRUPO']."</td>";
                    echo "<td>".$fila['DESCRIPCION_GRUPO']."</td>";
                    echo "<td><a href='controlador/ActualizarGrupo.php?id_grupo=".$fila['ID_GRUPO']."'>Modificar</a></td>";
                    echo "<td><a href='controlador/EliminarGrupo.php?id_grupo=".$fila['ID_GRUPO']."'>Eliminar</a></td>";
                    echo "</tr>";
               }
          }
          echo "</table>";
     }

 ?>

 