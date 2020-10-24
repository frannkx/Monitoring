<?php 
     
     require_once('modelo/class.conexion.php');
     require_once('modelo/class.consultas.php');
     require_once('menu.php');


 ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title>CrearGrupo</title>
	 <meta charset="utf-8">
     <title>CrearDispositivo</title>
     <link rel="stylesheet" href="css/style.css">
</head>

<body>

	<?php avatar(); ?>

	

	<?php menu(); ?>

	<div class="container">
		<h2>Crear Grupo</h2>
	<form action="controlador/InsertarGrupo.php" method="post">
		<table border="1px">
			<tr>
				<th>
					Nombre del grupo
				</th>
				<td>
					<input type="text" name="nombre_grupo">
				</td>
			</tr>
			<tr>
				<th>
					Descripción
				</th>
				<td>
					<textarea rows="5" cols="30" name="descripcion_grupo"></textarea>
				</td>				
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" name="Guardar" value="Guardar">
					<input type="reset" name="Limpiar" value="Limpiar">
				</td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>