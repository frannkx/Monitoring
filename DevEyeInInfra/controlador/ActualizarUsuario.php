<?php

     function seleccionar(){
          if (isset($_GET['id_usuario'])) {
               $consultas=new Consultas();
               $id_usuario=$_GET['id_usuario'];
               $filas=$consultas->cargarUsuario($id_usuario);
               echo "Se cargo la variable id_usuario";
               foreach ($filas as $fila) {
                    echo '
                         <form action="" method="post">
                         <table align="center" border="1px">
                              <tr>
                                   <td>Nombre: <input type="text" name="nombre" value="'.$fila['nombre'].'"></input></td>
                                   <td>Apellido: <input type="text" name="apellido" value="'.$fila['apellido'].'"></input></td>
                                   <td>Email: <input type="text" name="email" value="'.$fila['email'].'"></input></td>
                              </tr>

                              <tr>
                                   <td>
                                        Contraseña: <input type="password" name="password" value=""></input>
                                   </td>
                                   <td>
                                        Confirmacion: <input type="conf_password" name="" value=""></input>
                                   </td>
                              </tr>

                              <tr>
                                   <td>
                                        <?php consultarRoles(); ?>
                                   </td>

                                   <td>
                                        <?php cosultarDepartamentos(); ?>
                                   </td>
                              </tr>

                              <tr>
                                   <td>
                                        <input type="submit" name="Enviar" value="Modificar">
                                        <input type="reset" name="Borrar" value="Borrar">
                                   </td>
                              </tr>
                         </table>
                         </form>
                    ';
               }

          }else {
               return "No se puede cargar el formulario, no se logro obtener la variable id_usuario";
          }

     }

 ?>
