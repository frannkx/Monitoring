<?php 

     require_once('../modelo/class.conexion.php');
     require_once('../modelo/class.consultas.php');

     $mensaje=null;

     $nombre_grupo=isset($_POST['nombre_grupo'])? $_POST['nombre_grupo']: NULL;
     $descripcion=isset($_POST['descripcion_grupo']) ? $_POST['descripcion_grupo']: NULL;

     if(strlen($nombre_grupo) > 0 && strlen($descripcion) > 0){
     	$consultas=new Consultas();
     	$mensaje=$consultas->insertarGrupo($nombre_grupo,$descripcion);

     	echo "
     		<script type='text/javascript'>
               alert('Grupo creado correctamente');
          </script>
          <a href='../CrearGrupo.php'>Crear otro grupo</a>
          <br>
          <a href='../index.php'>Ir al home</a>
          
     	";
     }else{
     	echo "Por favor complete los campos
     	<a href='../CrearGrupo.php'>Crear otro grupo</a>";

     }

 ?>
