<?php

     /*Hacer funcion que verifique la contrase;a*/

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Monitor Vivir Seguros .:EyeinInfra:.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">-->
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

  <div class="login">
    <div>
            <img src="img/avatar.png" id="avatar">
    </div>

    <div class="datos">
       <form  action="check.php" method="POST">
        <div>
          <h1>Monitor</h1>
          <br>
          <br><input type="email" class="form-control" placeholder="Correo electrónico" name="email" required autofocus>
        </div>
        <br>

        <div>
          <br><input type="password" class="form-control" placeholder="Contraseña" name="pass" required>
        </div>
        <br>

        <button class="btn btn-lg btn-primary btn-block" type="submit">iniciar sesión</button>

        <div class="checkbox">

          <label class="checkbox">
                <!--<input type="checkbox" value="1" name="remember"> No cerrar sesión-->
            </label>
               <!--<p class="help-block"><a href="#">¿No puedes acceder a tu cuenta?</a></p>-->
        </div>

      </form>
    </div>

  </div>


</body>
</html>
