<?php

     require_once('../modelo/class.conexion.php');
     require_once('../modelo/class.consultas.php');

     $mensaje=null;

     $nombre_dispositivo = isset($_POST['nombre_dispositivo']) ? $_POST['nombre_dispositivo'] : NULL;
     $ip = isset($_POST['ip']) ? $_POST['ip'] : NULL;

     if (strlen($nombre_dispositivo) > 0 && strlen($ip) > 0) {
          $consultas=new Consultas();
          $mensaje=$consultas->insertarDispositivo($nombre_dispositivo, $ip);
          echo "<script type='text/javascript'>
               alert('Dispositivo creado correctamente');
          </script>
          <a href='../CrearDispositivo.php'>Crear otro dispositivo</a>
          <br>
          <a href='../index.php'>Ir al home</a>
          ";

     }else{
          echo "Por favor completa los campos
          <a href='../CrearDispositivo.php'>Crear dispositivo</a>";

     }
 ?>
