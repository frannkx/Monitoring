<?php

     require_once('../modelo/class.conexion.php');
     require_once('../modelo/class.consultas.php');

     $mensaje=null;

     $nombre_departamento = isset($_POST['nombre_departamento']) ? $_POST['nombre_departamento'] : NULL;

     if (strlen($nombre_departamento) > 0 ) {
          $consultas=new Consultas();
          $mensaje=$consultas->insertarDepartamento($nombre_departamento);
          echo "<script type='text/javascript'>
               alert('Departamento creado correctamente');
          </script>
          <a href='../CrearDepartamento.php'>Crear otro departamento</a>
          <br>
          <a href='../index.php'>Ir al home</a>";
     }else{
          echo "
          <script type='text/javascript'>
               alert('Por favor completa los campos');
          </script>
          <a href='../CrearDepartamento.php'>Crear Departamento</a>";
     }
 ?>
