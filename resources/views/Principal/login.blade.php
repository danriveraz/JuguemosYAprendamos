<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="index.html">
        <h2 class="form-login-heading">Ingeresa ahora</h2>
        <div class="login-wrap">
          <input id="logUsuario" type="text" class="form-control" placeholder="Usuario" autofocus>
          <br>
          <input id="logPassword" type="password" class="form-control" placeholder="Contraseña">
          <label class="checkbox" align="center">
            <a data-toggle="modal" href="login.html#recuperarPassword"> ¿Olvidaste tu contraseña?</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> Entrar</button>
          <hr>
          <!-- 
          <div class="login-social-link centered">
            <p>or you can sign in via your social network</p>
            <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
            <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
          </div>
          -->
          <div class="registration">
            ¿Todavía no tienes una cuenta?<br/>
            <a data-toggle="modal" href="login.html#registro">
              Crear cuenta
              </a>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="recuperarPassword" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Recuperar contraseña</h4>
              </div>
              <div class="modal-body">
                <p>Ingresa tu correo electronico abajo para recuperar contraseña</p>
                <input type="text" name="email" placeholder="Correo" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                <button class="btn btn-theme" type="button">Enviar</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
        <!-- MODAL REGISTRO -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="registro" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" align="center">Registro</h4>
              </div>
              <div class="modal-body">
                <input id="regUsuario" type="text" class="form-control" placeholder="Usuario" autofocus>
                <br>
                <input id="regPassword" type="password" class="form-control" placeholder="Contraseña">
                <br>
                <input id="regConfPass" type="password" class="form-control" placeholder="Confirmar contraseña">
                <br>
                <input id="regEmail" type="text" name="email" placeholder="Correo" autocomplete="off" class="form-control placeholder-no-fix">
                <br>
                <select id="selectTipoUsuario" name="selectTipoUsuario" class="form-control">
                  <option>Tipo de usuario</option>
                  <option id="regTerapeuta">Terapeuta</option>
                  <option id="regTerapiaCasa">Terapia en casa</option>
                </select>
                <br>
                <input id="regCode" type="text" class="form-control" placeholder="Codigo acceso terapeuta" style="display: none;">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                <button class="btn btn-theme" type="button">Registrarse</button>
              </div>
            </div>
          </div>
        </div>
        <!-- FIN MODAL-->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
  <script type="text/javascript">
    $( document ).ready(function() {
        console.log( "ready!" );
        $("#selectTipoUsuario").change(function(){
            if($("#selectTipoUsuario option:selected").text() == "Terapeuta"){
              $("#regCode").css("display", "block");
            }else if($("#selectTipoUsuario option:selected").text() == "Terapia en casa"){
              $("#regCode").css("display", "none");
            }
        });
    });
  </script>
</body>

</html>
