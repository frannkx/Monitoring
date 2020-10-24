<?php 
     
     require_once('modelo/class.conexion.php');
     require_once('modelo/class.consultas.php');
     require_once('controlador/CargarDispositivos.php');
     require_once('menu.php');


 ?>

 <html>
 <head>
 	<meta charset="utf-8">
 	<title>ConsultarReporte</title>
 	<link rel="stylesheet" href="css/style.css">
 </head>
 <body>

 	<?php avatar(); ?>

 	<?php menu(); ?> 

 	<div class="container">
 		<form action="controlador/BuscarCaidas.php" method="post">
 	<h2>Consultar Reporte</h2>

	 		<table border="1px">

	 			<tr>
	 				<td>Fecha Desde
			 			<input type="date">
			 		</td>
	 				<td>
	 					Fecha Hasta
			 			<input type="date">
	 				</td>

	 			</tr>
			 	
			</table>

			<table border="1px">
				<?php ConsultarDispositivos(); ?>
			</table>
			<table align="center">
                    <tr>
                         <td>
                              <input type="submit" name="" value="Guardar">
                              <input type="reset" name="" value="Borrar">
                         </td>
                    </tr>
               </table>
			
		</form>
 	</div>

 </body>
 </html>
