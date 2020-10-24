<!DOCTYPE html>
<html lang="es">
     <head>
          <meta charset="utf-8">
          <title>CrearDispositivo</title>
          <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
          <link rel="stylesheet" href="css/style.css">

     </head>
     <body>

          <h1>Crear Dispositivo</h1>

          <div class="container well" id="sha">
          <form class="" action="controlador/InsertarDispositivo.php" method="post">

               <table align="center" border="1px">
                    <tr>
                         <td>
                              Nombre de Equipo <input type="text" name="nombre_dispositivo">
                         </td>

                         <td>
                              <!--Grupo <select class="" name="Grupo">
                                   <option value="Servidores">Servidores</option>
                                   <option value="Redes">Redes</option>
                                   <option value="Soporte Tecnico">Soporte Tecnico</option>
                                   <option value="Bases de Datos">Bases de Datos</option>
                              </select>-->
                         </td>

                         <td>
                              Ip <input type="ip" name="ip">
                         </td>
                    </tr>
                    <tr>
                         <td>
                              <input type="submit" name="" value="Guardar">
                              <input type="reset" name="" value="Borrar">
                         </td>
                    </tr>
               </table>

          </form>
          </div>

          <a href="index.php">Ir al home</a>

          <script src="js/jquery-1.11.1.min.js"></script>
          <script src="bootstrap/js/bootstrap.js"></script>
     </body>
</html>
