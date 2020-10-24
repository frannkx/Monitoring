<?php

     require_once('../modelo/class.conexion.php');
     require_once('../modelo/class.consultas.php');

     $mensaje=null;

     $nombre_rol = isset($_POST['nombre_rol']) ? $_POST['nombre_rol'] : NULL;
     $descripcion_rol = isset($_POST['descripcion_rol']) ? $_POST['descripcion_rol'] : NULL;
     $consultar_roles = isset($_POST['consultar_roles']) ? $_POST['consultar_roles'] : NULL;
     $crear_roles = isset($_POST['crear_roles']) ? $_POST['crear_roles'] : NULL;
     $modificar_roles = isset($_POST['modificar_roles']) ? $_POST['modificar_roles'] : NULL;
     $eliminar_roles = isset($_POST['eliminar_roles']) ? $_POST['eliminar_roles'] : NULL;  
     $consultar_usuarios = isset($_POST['consultar_usuarios']) ? $_POST['consultar_usuarios'] : NULL;  
     $crear_usuarios = isset($_POST['crear_usuarios']) ? $_POST['crear_usuarios'] : NULL;
     $modificar_usuarios = isset($_POST['modificar_usuarios']) ? $_POST['modificar_usuarios'] : NULL;                     
     $eliminar_usuarios = isset($_POST['eliminar_usuarios']) ? $_POST['eliminar_usuarios'] : NULL;                    
     $consultar_paneles = isset($_POST['consultar_paneles']) ? $_POST['consultar_paneles'] : NULL;                     
     $crear_paneles = isset($_POST['crear_paneles']) ? $_POST['crear_paneles'] : NULL;
     $modificar_paneles = isset($_POST['modificar_paneles']) ? $_POST['modificar_paneles'] : NULL;
     $eliminar_paneles = isset($_POST['eliminar_paneles']) ? $_POST['eliminar_paneles'] : NULL;
     $consultar_grupos = isset($_POST['consultar_grupos']) ? $_POST['consultar_grupos'] : NULL;
     $crear_grupos = isset($_POST['crear_grupos']) ? $_POST['crear_grupos'] : NULL;
     $modificar_grupos = isset($_POST['modificar_grupos']) ? $_POST['modificar_grupos'] : NULL;
     $eliminar_grupos = isset($_POST['eliminar_grupos']) ? $_POST['eliminar_grupos'] : NULL;
     $consultar_dispositivos = isset($_POST['consultar_dispositivos']) ? $_POST['consultar_dispositivos'] : NULL;
     $consultar_dispositivos = isset($_POST['consultar_dispositivos']) ? $_POST['consultar_dispositivos'] : NULL;
     $crear_dispositivos = isset($_POST['crear_dispositivos']) ? $_POST['crear_dispositivos'] : NULL;
     $modificar_dispositivos = isset($_POST['modificar_dispositivos']) ? $_POST['modificar_dispositivos'] : NULL;
     $eliminar_dispositivos = isset($_POST['eliminar_dispositivos']) ? $_POST['eliminar_dispositivos'] : NULL;


                         <td>Eliminar Dispositivos <input type="checkbox" name="eliminar_dispositivos"></td>
<td>Consultar Alertas <input type="checkbox" name="consultar_alertas"></td>

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
