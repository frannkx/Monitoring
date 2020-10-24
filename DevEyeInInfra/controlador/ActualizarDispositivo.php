<?php 

	require_once('../modelo/class.conexion.php');
	require_once('../modelo/class.consultas.php');

	
	$id_dispositivo=$_POST['id_dispositivo'] ? $_POST['id_dispositivo'] : NULL ;
	$nombre_dispositivo=$_POST['nombre_dispositivo'] ? $_POST['nombre_dispositivo'] : NULL ;
	$ip=$_POST['ip'] ? $_POST['ip'] : NULL ;
	$id_grupo=$_POST['id_grupo'] ? $_POST['id_grupo'] : NULL ;
	$descripcion_dispositivo=$_POST['descripcion_dispositivo'] ? $_POST['descripcion_dispositivo'] : NULL ;
	
	if (strlen($id_dispositivo) > 0 && strlen($nombre_dispositivo) > 0 && strlen($ip) > 0 && strlen($id_grupo) > 0 && strlen($descripcion_dispositivo) > 0) {
			$consultas=new Consultas();
			$mensaje=$consultas->modificarDispositivo($id_dispositivo, $nombre_dispositivo, $ip, $id_grupo, $descripcion_dispositivo);
			echo "
	          <script type='text/javascript'>
	               alert('Dispositivo actualizado correctamente');
	          </script>
	          <a href='../VerDispositivos.php'>Ver Dispositivos</a>
	          <br>
	          <a href='../index.php'>Ir al home</a>";
		}else{
			echo "
				<script type='text/javascript'>
		           alert('Los campos no pueden estar vacios');
		           window.history.back();
		      </script>
			";
		}

 ?>