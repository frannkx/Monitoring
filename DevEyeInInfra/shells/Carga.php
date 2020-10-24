<?php 

	require_once('../modelo/class.conexion.php');
	require_once('../modelo/class.consultas.php');
	require_once('../modelo/class.archivos.php');

/*Script ejecutado automaticamente por el cron que abre cada archivo lo lee 
linea por linea y si consigue alguna caida la registra en base de datos*/



//1- consultar en BD los grupos y dispositivos registrados en base de datos 
	$archivos=new Archivos();
	$consultas=new Consultas();
	$grupos=$consultas->cargarGrupos();
	$dispositivos=$consultas->cargarDispositivos();
	$parametro="r";


	/*echo '
     		 <table border="1px">
			 	<tr>
			 		<th>Id Grupo</th>
			 		<th>Nombre Grupo</th>
			 		<th>Descripcion Grupo</th>
                         <th>Modificar</th>
                         <th>Eliminar</th>
			 	</tr>
     	';
     	foreach ($grupos as $grupo) {
     		echo "
     		<tr>	
	     		<td>".$grupo['ID_GRUPO']."</td>
				<td>".$grupo['NOMBRE_GRUPO']."</td>
				<td>".$grupo['DESCRIPCION_GRUPO']."</td>
			</tr>
			";
     	}

     	echo "</table>";
     	*/


    // Cargar dispositivos
	/*$dispositivos=$consultas->cargarDispositivos();

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
          foreach ($dispositivos as $dispositivo) {
               echo "<tr>";
               echo "<td>".$dispositivo['ID_DISPOSITIVO']."</td>";
               echo "<td>".$dispositivo['NOMBRE_DISPOSITIVO']."</td>";
               echo "<td>".$dispositivo['IP']."</td>";
               $grupos=$consulta->buscarNombreGrupo($fila['ID_GRUPO']);
               foreach ($grupos as $grupo) {
                    echo "<td>".$grupo['NOMBRE_GRUPO']."</td>";     
               }               
               echo "<td>".$fila['DESCRIPCION_DISPOSITIVO']."</td>";
               echo "<td><a href='controlador/ModificarDispositivo.php?ID_DISPOSITIVO=".$fila['ID_DISPOSITIVO']."'>Modificar</a></td>";
               echo "<td><a href='controlador/EliminarDispositivo.php?id_dispositivo=".$fila['ID_DISPOSITIVO']."'>Eliminar</a></td>";
               echo "</tr>";
          }
          echo "</table>";*/






//2- abrir archivo de cada uno de los dispositivos
          //foreach ($grupos as $grupo) {
          	foreach ($dispositivos as $dispositivo) {
          		
          		$archivo="G".$dispositivo['ID_GRUPO']."D".$dispositivo['ID_DISPOSITIVO'];
          		$apertura=$archivos->abrirArchivo($archivo,$parametro);
				
				//3- leer linea por linea la actividad del dispositivo          		
          		while(!feof($apertura)) {
          			$linea=fgets($apertura);
					$ms=substr($linea,7,3);
					$tm=substr($linea,14,5);
					$vms=is_numeric($ms);


				//4- hacer comprobacion de la existencia de una caida de servicio
          		
          		echo "<h1>".$vms."</h1>";
          		/*if (!is_numeric($ms)) {
          			echo "<h3>Caida del Servidor".$dispositivo['ID_DISPOSITIVO']." perteneciente al grupo ".$dispositivo['ID_GRUPO']." a la hora".$tm."</h3>";
          		}else{
          			echo " grupo ".$dispositivo['ID_GRUPO']." dispositivo ".$dispositivo['ID_DISPOSITIVO']." Milisegundos ".$ms." en la hora ".$tm;
          		}*/



          		if($vms==1)
			        echo " grupo ".$dispositivo['ID_GRUPO']." dispositivo ".$dispositivo['ID_DISPOSITIVO']." Milisegundos ".$ms." en la hora ".$tm;
			    else{
			        echo "<h3>Caida del Servidor".$dispositivo['ID_DISPOSITIVO']." perteneciente al grupo ".$dispositivo['ID_GRUPO']." a la hora".$tm."</h3>";
			    }


          		}
          		//Fin de lectura del archivo

          	}
          //}//Fin de apertura de archivos




//5- guardar dicha caida en la tabla Alertas de BD


 ?>