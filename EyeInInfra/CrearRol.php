<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>CrearRol</title>
          <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" href="css/style.css">

     </head>
     <body>

          <h1>Crear Rol</h1>

          <div class="container well" id="sha">
          <form class="" action="controlador/InsertarRol.php" method="post">
               <table align="center" border="1px">
                    <tr>
                         <td>
                              Numero <input type="text" name="">
                         </td>
                         <td>
                              Nombre <input type="text" name="nombre_rol">
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

          <!--<script src="js/jquery-1.11.1.min.js"></script>-->
          <script src="bootstrap/js/bootstrap.js"></script>
     </body>
</html>
