<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>CrearDepartamento</title>
          <link rel="stylesheet" href="css/style.css">
     </head>
     <body>

          <h1>Crear Departamento</h1>

          <form class="" action="controlador/InsertarDepartamento.php" method="post" align="center">
               <table border="1px" align="center">
                    <tr>
                         <td>
                               Numero: <input type="text" name="numero_departamento" value="">
                         </td>
                         <td>
                              Nombre:<input type="text" name="nombre_departamento" value="">
                         </td>
                         <tr>
                              <td colspan="2" align="center">
                                   <input type="submit" name="guardar" value="Guardar">
                                   <input type="reset" name="" value="Borrar">
                              </td>
                         </tr>

                    </tr>

               </table>
          </form>
          <a href="index.php">Ir al home</a>
     </body>
</html>
