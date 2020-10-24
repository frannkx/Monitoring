<?php

     require_once('../modelo/class.conexion.php');
     require_once('../modelo/class.consultas.php');

     if (isset($_GET['id_dispositivo'])) {
           $id_dispositivo=$_GET['id_dispositivo'];
           $consultas=new Consultas();
           $mensaje=$consultas->eliminarDispositivo($id_dispositivo);
           echo $mensaje;
     }

 ?>
