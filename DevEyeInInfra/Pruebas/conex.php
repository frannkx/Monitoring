<?php

     $usuario="root";
     $password="";

	try{
	    $conn = new PDO('mysql:host=localhost;dbname=deveyeininfra', $usuario, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         echo "Conectado exitosamente";
	}catch(PDOException $e){
	    echo "ERROR: " . $e->getMessage();
	}

?>
