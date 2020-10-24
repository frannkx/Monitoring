<?php

     require_once('../modelo/class.conexion.php');
     require_once('../modelo/class.consultas.php');

     if (isset($_GET['id_departamento'])) {
          $id_departamento=$_GET['id_departamento'];
          $consulta=new Consultas();
          $mensaje=$consulta->eliminarDepartamento($id_departamento);
          echo $mensaje;
          echo "<div><a href='../VerDepartamentos.php'>Ver Departamentos</a></div>";
     }


 ?>
