<?php 

     require_once('../modelo/class.conexion.php');
     require_once('../modelo/class.consultas.php');

     if (isset($_GET['id_grupo'])) {
           $id_grupo=$_GET['id_grupo'];
           $consultas=new Consultas();
           $mensaje=$consultas->eliminarGrupo($id_grupo);
           echo $mensaje;
     }

 ?>