<?php

     require_once('../modelo/class.conexion.php');
     require_once('../modelo/class.consultas.php');
     //require_once('../Pruebas/archivos.php');

     $mensaje=null;

     $nombre_dispositivo = isset($_POST['nombre_dispositivo']) ? $_POST['nombre_dispositivo'] : NULL;
     $ip = isset($_POST['ip']) ? $_POST['ip'] : NULL;
     $descripcion_dispositivo=isset($_POST['descripcion_dispositivo']) ? $_POST['descripcion_dispositivo'] : NULL;
     $id_grupo=isset($_POST['id_grupo'])? $_POST['id_grupo'] : NULL;

     if (strlen($nombre_dispositivo) > 0 && strlen($ip) > 0 && strlen($descripcion_dispositivo) > 0 && strlen($id_grupo) > 0) {
          $consultas=new Consultas();
          $mensaje=$consultas->insertarDispositivo($nombre_dispositivo, $ip, $descripcion_dispositivo, $id_grupo);

          echo "<script type='text/javascript'>
               alert('Dispositivo creado correctamente');
          </script>
          <a href='../CrearDispositivo.php'>Crear otro dispositivo</a>
          <br>
          <a href='../index.php'>Ir al home</a>
          ";
          /*cargarConfiguracion();//metodo que genera el archivo eyes*/

     }else{
          echo "Por favor completa los campos
          <a href='../CrearDispositivo.php'>Crear dispositivo</a>";

     }
 ?>
