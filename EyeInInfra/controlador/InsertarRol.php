<?php

     require_once('../modelo/class.conexion.php');
     require_once('../modelo/class.consultas.php');

     $mensaje=null;

     $nombre_rol = isset($_POST['nombre_rol']) ? $_POST['nombre_rol'] : NULL;

     if (strlen($nombre_rol) > 0) {
          $consultas=new Consultas();
          $mensaje=$consultas->insertarRol($nombre_rol);
          echo "
          <script type='text/javascript'>
               alert('Rol creado correctamente');
          </script>
          <a href='../CrearRol.php'>Crear otro Rol</a>
          <br>
          <a href='../index.php'>Ir al home</a>";
     }else{
          echo "
          <script type='text/javascript'>
               alert('Por favor completa los campos');
          </script>
          <a href='../CrearRol.php'>Crear rol</a>";
     }
 ?>
