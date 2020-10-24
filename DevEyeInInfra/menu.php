<?php 

  function menu(){
    echo '
        
        <div id="menu">
          <ul class="nav">
              <li><a href=".">Roles</a>
                  <ul>
                      <li><a href="CrearRol.php">Crear Rol</a></li>
                      <li><a href="VerRoles.php">Ver Roles</a></li>
                  </ul>
              </li>

              

              <li><a href=".">Usuarios</a>
                  <ul>
                      <li><a href="CrearUsuario.php">Crear Usuario</a></li>
                      <li><a href="VerUsuarios.php">Ver Usuarios</a></li>
                  </ul>
              </li>

              <li><a href=".">Grupos</a>
                <ul>
                    <li>
                        <a href="CrearGrupo.php">Crear Grupo de Dispositivos</a>
                    </li>
                    <li>
                        <a href="VerGrupos.php">Ver Grupos de Dispositivos</a>
                    </li>
                </ul>
              </li>
              <li><a href=".">Dispositivos</a>
                  <ul>
                      <li><a href="CrearDispositivo.php">Crear Dispositivo</a></li>
                      <li><a href="VerDispositivos.php">Ver Dispositivos</a></li>
                  </ul>
              </li>

              <li><a href=".">Configurar Paneles</a>
                  <ul>
                      <li><a href="ConfigurarPanel.php">Configurar Nuevo Panel </a></li>
                      <li><a href="ModificarPanel.php">Modificar Paneles</a></li>
                  </ul>
              </li>

              <li>
                <a href="ConsultarReporte.php">Consultar Reportes</a>
              </li>
          </ul>
        </div>

    ';
  }

  function avatar(){
    echo '
      <div>
        <div>
              <div>
                <img src="img/avatar.png" id="avatar">
                <h1>Sistema de monitoreo en red de Vivir Seguros</h1>
              </div>
              
        </div>
      </div>
    ';
  }
  
 ?>
