<?php

     require_once('../modelo/class.conexion.php');
     require_once('../modelo/class.consultas.php');

     if (isset($_GET['id_usuario'])) {

          $id_usuario=$_GET['id_usuario'];
          $consultas=new Consultas();
          $mensaje=$consultas->eliminarUsuario($id_usuario);
          echo $mensaje;
          echo "<div><a href='../VerUsuarios.php'>Ver Usuarios </a></div>";
     }
 ?>
