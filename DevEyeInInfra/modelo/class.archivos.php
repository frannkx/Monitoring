<?php 


	/* 

	//////////////Modos de apertura de archivos ////////////////

	r 	Apertura para lectura. Puntero al principio del archivo
	r+ 	Apertura para lectura y escritura. Puntero al principio del archivo
	w 	Apertura para escritura. Puntero al principio del archivo y lo sobreescribe. Si no existe se intenta crear.
	w+ 	Apertura para lectura y escritura. Puntero al principio del archivo y lo sobreescribe. Si no existe se intenta crear.
	a 	Apertura para escritura. Puntero al final del archivo. Si no existe se intenta crear.
	a+ 	Apertura para lectura y escritura. Puntero al final del archivo. Si no existe se intenta crear.
	x 	Creación y apertura para sólo escritura. Puntero al principio del archivo. Si el archivo ya existe dará error E_WARNING. Si no existe se intenta crear.
	x+ 	Creación y apertura para lectura y escritura. Mismo comportamiento que x.
	c 	Apertura para escritura. Si no existe se crea. Si existe no se sobreescribe ni da ningún error. Puntero al principio del archivo.
	c+ 	Apertura para lectura y escritura. Mismo comportamiento que C.

	
	////////////// Notas ////////////////


    Si el archivo no es escribible, abrirlo con r+ fallará, incluso cuando sólo se intenta leer.
    
    w y w+ eliminarán el contenido de cualquier archivo. Para sólo añadir y no borrar, se usa a y a+.
    
    Si quieres crear nuevos archivos y evitar sobreescribir sin querer un archivo existente, utiliza x o x+.
    
    Cuando se trabaja con archivos binarios, como imágenes, hay que añadir 'b' después del modo. Como rb o r+b

	https://diego.com.es/manejo-de-archivos-en-php
	*/
    class Archivos{

	    public function abrirArchivo($arg_archivo,$arg_modo){

			if (!$fp=fopen($arg_archivo,$arg_modo)) {
			echo "No se ha podido abrir el archivo";
			}else{
				return $fp;
			}


		}

		public function leerArchivo($arg_apertura,$arg_archivo){

			$contents=fread($arg_apertura,filesize($arg_archivo));
			return $contents;
		}

		public function leerLineas($arg_apertura,$arg_archivo){

			$contents=fread($arg_apertura,filesize($arg_archivo));
			return $contents;
		}

		public function escribirArchivo($arg_apertura,$arg_texto){

			fwrite($arg_apertura,$arg_texto);
		}

		public function escribirLineas($arg_apertura,$arg_texto){

			fwrite($arg_apertura,$arg_texto.PHP_EOL);
		}

		public function cerrarArchivo($arg_archivo){
			fclose($arg_archivo);
		}/*Cierre de funcion cerrarArchivo()*/	

    }/*Cierre de clase*/

	

 ?>