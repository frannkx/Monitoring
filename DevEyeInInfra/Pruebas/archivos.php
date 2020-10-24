<?php 
	require_once('modelo/class.conexion.php');
	require_once('modelo/class.consultas.php');
	require_once('class.archivos.php');
	
/*	function escribirConfiguracion(){
	
	$archivos=new Archivos($arg_ip);
	$archivo="eyes.sh";
	$parametro="c+"; //verificar parametro mas conveniente
	$apertura=$archivos->abrirArchivo($archivo,$parametro);
	$texto="ping ".$arg_ip."\n"; //verificar la posibilidad de generar la salida con el id de dispositivo
	$archivos->escribirArchivo($apertura,$texto);
	$cierre=$archivos->cerrarArchivo($apertura);
	echo "Se modifico el archivo ".$archivo." correctamente";
	shell_exec("permisos.sh");//verificar que se ejecute el script
	
	}


	function mostrarPantalla(){
		$archivos=new Archivos();
		$archivo="eyes.sh";
		$parametro="r";
		$apertura=$archivos->abrirArchivo($archivo,$parametro);
		$contenido=$archivos->leerArchivo($apertura,$archivo);
		echo $contenido;
		$cierre=$archivos->cerrarArchivo($apertura);	
	}*/

	/*function leerLineas(){
		$archivos=new Archivos();
		$archivo="eyes.sh";
		$parametro="r";
		$apertura=$archivos->abrirArchivo($archivo,$parametro);
		echo ftell($apertura)."<br>";
		fseek($apertura,10);
		echo ftell($apertura)."<br>";
		fseek($apertura,1000);
		echo ftell($apertura)."<br>";
		fseek($apertura,0,SEEK_END);
		echo ftell($apertura)."<br>";
		fseek($apertura,-5, SEEK_CUR)."<br>";
		echo ftell($apertura)."<br>";
	}

		function verInformacion(){
			$archivos=new Archivos();
			$archivo="eyes.sh";
			$parametro="r";
			$apertura=$archivos->abrirArchivo($archivo,$parametro);

			
			$cierre=$archivos->cerrarArchivo($apertura);	
		}

		/*

		
		//function leerResultados($arg_nombre_dispositivo){
			/*Funcion que lee el archivo archivo GXDX del dispositivo pasado por paramentro 
			y se trae las variables necesarias para graficar 
			(pasar esta funcionalidad a un archivo aparte y agregar al cron despues de la ejecusion del eyes)*/


			//$arg_nombre_dispositivo="localhost";
			function grafico($arg_nombre_dispositivo){ 
			$archivos=new Archivos();
			$consultas=new Consultas();
			$dispositivos=$consultas->buscarDispositivo($arg_nombre_dispositivo);
			$parametro="r";
			$activo="<td bgcolor='green'>Activo</td>";
			$inactivo="<td bgcolor='red'>Inactivo</td>";
			foreach ($dispositivos as $fila) {
				
				//$archivo="shells/G1"/*.$fila['ID_GRUPO']*/."D".$fila['ID_DISPOSITIVO'];
				$archivo="C:\Users\FRANCI~1\AppData\Local\Temp\shells\G".$fila['ID_GRUPO']."D".$fila['ID_DISPOSITIVO'];
				//echo "<h1> Resultados de ".$fila['NOMBRE_DISPOSITIVO']."</h1><br>";
				$apertura=$archivos->abrirArchivo($archivo,$parametro);
				//$lineas=$archivos->leerLineas($apertura,$archivo);
				
				while(!feof($apertura)) {
					
					$linea=fgets($apertura);
					//echo $linea."<br>";
					$ms=substr($linea,7,3);
					$tm=substr($linea,14,5);


					/*if( isset($ms) ){ // Mejorar la validacion ya que no detecta la caida
						/*echo "<b>Milisegundos</b> ".$ms." Tiempo ".$tm;*/
						//return $activo;
					//}

					if(ctype_space($linea)){
						return $inactivo;
						//echo "<h4>Alerta servicio caido<h4>";
					} else {
						return $activo;
					}

					/*realizar el segmentado de la cadena de caracteres y lo guarde en variables 
					luego realizar el condicional que detecte la caida del servicio y haga el 
					llamado a la funcion de generar alerta y guarde el registro en BD 
					finalmente por cada ciclo la funcion retorna las variables necesarias para el grafico*/

					/*https://www.aprenderaprogramar.com/index.php?option=com_content&view=article&id=598:fwrite-php-lectura-y-escritura-fichero-txt-modo-acceso-phpeol-salto-de-linea-ejercicio-ejemplo-cu00837b&catid=70&Itemid=193*/
				}	
          	}

          	}


			

				
//			$cierre=$archivos->cerrarArchivo($apertura);	
		//}




//		function cargarConfiguracion(){
//			
//			/*Funcion que consulta los dispositivos de la tabla dispositivos y
//			se crea el archivo eyes con el ping a los dispositivos guardando los 
//			resultados en diferentes archivos para cada dispositivo llamados DXGX 
//			ejemplo: G [ numero del grupo ] D[ numero del dispositivo] = G1D1*/
//
//			$archivos=new Archivos();
//			$consultas=new Consultas();
//			$dispositivos=$consultas->cargarDispositivos();
//          $archivo="C:\Users\FRANCI~1\AppData\Local\Temp\shells\shells\eyes"; //Ruta en windows
//			//$archivo="../shells/eyes";// Ruta en linux
//			$parametro="w";
//			umask(002);
//			$apertura=$archivos->abrirArchivo($archivo,$parametro);
//			foreach ($dispositivos as $fila) {
//				$texto="echo `ping -c1 ".$fila['IP']."|grep '64 bytes'` `date`|awk '{print $7 \" \" $12}' > G1D".$fila['ID_DISPOSITIVO'];
//				$archivos->escribirLineas($apertura,$texto);
  //       	}
	//		$cierre=$archivos->cerrarArchivo($apertura);

	

//		}
	
 ?>