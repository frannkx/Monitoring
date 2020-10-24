<?php 

  function menu(){
    echo '
        <div id="header">
          <ul class="nav">
              <li><a href="...">Roles</a>
                  <ul>
                      <li><a href="CrearRol.php">Crear Rol</a></li>
                      <li><a href="VerRoles.php">Ver Roles</a></li>
                  </ul>
              </li>

              <li><a href="...">Departamentos</a>
                  <ul>
                      <li><a href="CrearDepartamento.php">Crear Departamento</a></li>
                      <li><a href="VerDepartamentos.php">Ver Departamentos</a></li>
                  </ul>
              </li>

              <li><a href="...">Usuarios</a>
                  <ul>
                      <li><a href="CrearUsuario.php">Crear Usuario</a></li>
                      <li><a href="VerUsuarios.php">Ver Usuarios</a></li>
                  </ul>
              </li>

              <li><a href="...">Dispositivos</a>
                  <ul>
                      <li><a href="CrearDispositivo.php">Crear Dispositivo</a></li>
                      <li><a href="VerDispositivos.php">Ver Dispositivos</a></li>
                  </ul>
              </li>
          </ul>
        </div>
        <br>
        <br>
        <br>
    ';
  }
  
 ?>
