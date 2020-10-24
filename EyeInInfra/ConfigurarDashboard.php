<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>ConfigurarDashboard</title>
          <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
          <link rel="stylesheet" href="...">

     </head>
     <body>

          <style>

               body {
                 background-color:#ff8000 ;
                 padding-top: 40px;
                 padding-bottom: 40px;

               }

               .login {
                 max-width: 330px;
                 padding: 15px;
                 margin: 0 auto;

               }

               #sha{
                 max-width: 340px;
                   -webkit-box-shadow: 0px 0px 18px 0px rgba(48, 50, 50, 0.48);
                   -moz-box-shadow:    0px 0px 18px 0px rgba(48, 50, 50, 0.48);
                   box-shadow:         0px 0px 18px 0px rgba(48, 50, 50, 0.48);
                   border-radius: 6%;
                 }
                #avatar{
               width: 96px;
               height: 96px;
               margin: 0px auto 10px;
               display: block;
               border-radius: 50%;
                }

          </style>

          <h1>Configurar Dashboard</h1>

          <div class="container well" id="sha">
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
     </div>
          <script src="js/jquery-1.11.1.min.js"></script>
          <script src="js/bootstrap.js"></script>
     </body>
</html>
