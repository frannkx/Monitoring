<?php 

	function graficar(){
		$g=null;
          $consulta=new Consultas();
          $filas=$consulta->cargarDispositivos();

          echo "<table border='1px'>
                    <tr>
                         <th>Id Dispositivo</th>
                         <th>Nombre del Dispositivo</th>
                         <th>IP</th>
                         <th>Grupo</th>
                         <th>Descripcion</th>
                         <th>Estado</th>
                         
                    </tr>";
          foreach ($filas as $fila) {
               echo "<tr>";
               echo "<td>".$fila['ID_DISPOSITIVO']."</td>";
               echo "<td>".$fila['NOMBRE_DISPOSITIVO']."</td>";
               echo "<td>".$fila['IP']."</td>";
               $grupos=$consulta->buscarNombreGrupo($fila['ID_GRUPO']);
               foreach ($grupos as $grupo) {
                    echo "<td>".$grupo['NOMBRE_GRUPO']."</td>";     
               }               
               echo "<td>".$fila['DESCRIPCION_DISPOSITIVO']."</td>";
               $g=grafico($fila['NOMBRE_DISPOSITIVO']);
               echo $g;

               echo "</tr>";
          }
          echo "</table>";
     }

 ?>








<!--<html>
<head>
	<title>Graficar</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<script>
		chartCPU = new Highcharts.StockChart({
		    chart: {
	    	renderTo: 'contenedor'
		        //defaultSeriesType: 'spline'

		    },
		    rangeSelector : {
		        enabled: false
	    },
		    title: {
	        text: 'Gráfica'
		    },
		    xAxis: {
		        type: 'datetime'
		        //tickPixelInterval: 150,
		        //maxZoom: 20 * 1000
		    },
		    yAxis: {
		        minPadding: 0.2,
		        maxPadding: 0.2,
		        title: {
		            text: 'Valores',
		            margin: 10
		        }
		    },
		    series: [{
		        name: 'Valor',
		        data: (function() {
		                // generate an array of random data
		                var data = [];
		                <?php
	//	                    for($i = 0 ;$i<count($rawdata);$i++){
		                ?>
	//	                data.push([<?php //echo $timeArray[$i];?>,<?php //echo $valoresArray[$i];?>]);
		                <?php //} ?>
		                return data;
		            })()
		    }],
		    credits: {
		            enabled: false
		    }
		});

	</script>

	<div id="contenedor" style="width:50%" height:"50px"></div>
-->
	<!--<script src="https://code.jquery.com/jquery.js"></script>-->
    <!-- Importo el archivo Javascript de Highcharts directamente desde su servidor -->
	<!--<script src="http://code.highcharts.com/stock/highstock.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>

</body>
</html>

-->
	


<?php 

	/*Funcion que genera el grafico que solicita el dashboard*/

//	function graficarResultados($arg_grupo,$arg_dispositivo){
		/*Consultar a archivos.php para que lea los 
		  resultados del txt buscando el dispositivo
		   del argumento y los datos del resultado*/
//		$rawdata = array('ID' => 1 , 'valor' => 20 , 'tiempo' => datetime );
//		echo '
//		<script src="https://code.jquery.com/jquery.js"></script>
//		<!-- Importo el archivo Javascript de Highcharts directamente desde su servidor -->
//		<script src="http://code.highcharts.com/stock/highstock.js"></script>
//		<script src="http://code.highcharts.com/modules/exporting.js"></script>
//		';

//		echo '
//		<div id="contenedor"></div>
//		';

//		echo "
//			


//		";

//	}


		   

// ?>