<?php 

	require_once('../modelo/class.conexion.php');
	require_once('../modelo/class.consultas.php');

	$mensaje=null;
	$id_grupo=$_POST['id_grupo'] ? $_POST['id_grupo'] : NULL ;
	$nombre_grupo=$_POST['nombre_grupo'] ? $_POST['nombre_grupo'] : NULL ;
	$descripcion_grupo=$_POST['descripcion_grupo'] ? $_POST['descripcion_grupo'] : NULL ;
	
	if (strlen($nombre_grupo) > 0 && strlen($descripcion_grupo) > 0) {
			$consultas=new Consultas();
			$mensaje=$consultas->modificarGrupo($id_grupo, $nombre_grupo, $descripcion_grupo);
			echo "
	          <script type='text/javascript'>
	               alert('Grupo actualizado correctamente');
	          </script>
	          <a href='../VerGrupos.php'>Ver Grupos</a>
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