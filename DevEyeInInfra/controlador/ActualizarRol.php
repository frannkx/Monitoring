<?php

     require_once('../modelo/class.conexion.php');
     require_once('../modelo/class.consultas.php');

     $mensaje=null;

     $id_rol=$_POST['id_rol'] ? $_POST['id_rol'] : NULL ;
     $nombre_rol=$_POST['nombre_rol'] ? $_POST['nombre_rol'] : NULL ;

     if (strlen($nombre_rol) > 0) {
          $consultas=new Consultas();
          $mensaje=$consultas->actualizarRol($id_rol, $nombre_rol);
          echo "
          <script type='text/javascript'>
               alert('Rol actualizado correctamente');
          </script>
          <a href='../VerRoles.php'>Ver Roles</a>
          <br>
          <a href='../index.php'>Ir al home</a>";
     }else{
          echo "
          <script type='text/javascript'>
               alert('Por favor completa los campos');
          </script>
     }

 ?>
