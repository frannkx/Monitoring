<?php

     require_once('../modelo/class.conexion.php');
     require_once('../modelo/class.consultas.php');

     $mensaje=null;

/*
     $nombre=$_POST['nombre'];
     $apellido=$_POST['apellido'];
     $email=$_POST['email'];
*/
     $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
     $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : NULL;
     $email = isset($_POST['email']) ? $_POST['email'] : NULL;

     if (strlen($nombre) > 0 && strlen($apellido) > 0 && strlen($email) > 0) {
          $consultas=new Consultas();
          $mensaje=$consultas->insertarUsuario($nombre, $apellido, $email);
          echo "<script type='text/javascript'>
               alert('Usuario creado correctamente');
          </script>
          <a href='../CrearUsuario.php'>Crear otro usuario</a>
          <br>
          <a href='../index.php'>Ir al home</a>";
     }else{
          echo "
          <script type='text/javascript'>
               alert('Por favor completa los campos');
          </script>
          <a href='../CrearUsuario.php'>Crear otro usuario</a>";
     }
 ?>
