<?php

     require_once('../modelo/class.conexion.php');
     require_once('../modelo/class.consultas.php');

     if (isset($_GET['id_rol'])) {
          $id_rol=$_GET['id_rol'];
          $consultas=new Consultas();
          $mensaje=$consultas->eliminarRol($id_rol);
          echo $mensaje;
          echo "<div><a href='../VerRoles.php'>Ver Roles</a></div>";
     }
 ?>
