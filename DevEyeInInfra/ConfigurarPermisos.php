<?php 
     
     require_once('modelo/class.conexion.php');
     require_once('modelo/class.consultas.php');
     require_once('menu.php');


 ?>

<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>ConfigurarPermisos</title>
          <link rel="stylesheet" href="css/style.css">
          <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

     </head>
     <body>

          <h1>Configurar Permisos</h1>

               <div class="container well" id="sha">
               <h2>Permisos</h2>

               
               <form class="" action="GuardarPermisos.php" method="post">
                    <table>
                         <tr>
                              <td>
                                   <select class="" name="Rol">
                                        <option value="Rol">
                                             <option value="Adminstrador">Adminstrador</option>
                                             <option value="Analista">Analista</option>
                                        </option>
                                   </select>
                              </td>
                         </tr>
                         <tr>

                              <td>
                                   <input type="checkbox" name="Consultar" value="Consultar"> Consultar
                              </td>
                              <td>
                                   <input type="checkbox" name="Insertar" value="Insertar"> Insertar
                              </td>
                              <td>
                                   <input type="checkbox" name="Eliminar" value="Eliminar"> Eliminar
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <input type="checkbox" name="Roles" value="Roles"> Roles
                              </td>
                              <td>
                                   <input type="checkbox" name="Roles" value="Roles"> Roles
                              </td>
                              <td>
                                   <input type="checkbox" name="Roles" value="Roles"> Roles
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <input type="checkbox" name="Permisos" value="Permisos"> Permisos
                              </td>
                              <td>
                                   <input type="checkbox" name="Permisos" value="Permisos"> Permisos
                              </td>
                              <td>
                                   <input type="checkbox" name="Usuarios" value="Usuarios"> Usuarios
                              </td>
                         </tr>

                         <tr>
                              <td>
                                   <input type="checkbox" name="Usuarios" value="Usuarios"> Usuarios
                              </td>
                              <td>
                                   <input type="checkbox" name="Usuarios" value="Usuarios"> Usuarios
                              </td>
                              <td>
                                   <input type="checkbox" name="Servidores" value="Servidores"> Servidores
                              </td>
                         </tr>

                         <tr>
                              <td>
                                   <input type="checkbox" name="Servidores" value="Servidores"> Servidores
                              </td>
                              <td>
                                   <input type="checkbox" name="Servidores" value="Servidores"> Servidores
                              </td>
                         </tr>
                    </table>

                    <h2>Grupos</h2>
                    <table>
                         <tr>
                              <td>
                                   <input type="checkbox" name="" value="Servidores"> Servidores
                              </td>
                              <td>
                                   <input type="checkbox" name="" value="Redes"> Redes
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <input type="checkbox" name="" value="Srv-1"> Srv-1
                              </td>
                              <td>
                                   <input type="checkbox" name="" value="Red-1"> Red-1
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <input type="checkbox" name="" value="Srv-2"> Srv-2
                              </td>
                              <td>
                                   <input type="checkbox" name="" value="Red-2"> Red-2
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <input type="checkbox" name="" value="Srv-3"> Srv-3
                              </td>
                              <td>
                                   <input type="checkbox" name="" value="Red-3"> Red-3
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
          <script src="js/jquery-1.11.1.min.js"></script>
          <script src="js/bootstrap.js"></script>
     </body>
</html>
