<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Juguemos y Aprendamos</title>

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
  <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" id="formLogin" autocomplete="on" method="post" action="<?php echo e(route('login')); ?>">
        <?php echo e(csrf_field()); ?>

        <h2 class="form-login-heading">Ingeresa ahora</h2>
        <div class="login-wrap">
          <input id="email" name="email" type="email" class="form-control" placeholder="Correo electronico" autofocus required>
          <br>
          <input id="password" name="password" type="password" class="form-control" placeholder="Contraseña" required>
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
      </form>
      <!-- MODAL REGISTRO -->
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="registro" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" align="center">Registro</h4>
            </div>
            <form  id="formRegistro" autocomplete="on" method="post" action="<?php echo e(url('Auth/register')); ?>">
            <?php echo e(csrf_field()); ?>

            <div class="modal-body">
              <input name="regUsuario" id="regUsuario"  type="text" class="form-control" placeholder="Usuario" required="true" autofocus >
              <br>
              <input name="regPassword" id="regPassword" type="password" class="form-control" placeholder="Contraseña" required="true">
              <br>
              <input name="regConfPass" id="regConfPass" type="password" class="form-control" placeholder="Confirmar contraseña" required="true">
              <br>
              <input name="regEmail" id="regEmail" type="text" placeholder="Correo" autocomplete="off" class="form-control" required="true">
              <br>
              <select id="selectTipoUsuario" name="selectTipoUsuario" class="form-control" required="true" required="true">
                <option>Tipo de usuario</option>
                <option id="regTerapeuta">Terapeuta</option>
                <option id="regTerapiaCasa">Terapia en casa</option>
              </select>
              <br>
              <input name="regCode" id="regCode" type="text" class="form-control" placeholder="Codigo acceso terapeuta" style="display: none;">
              <input name="code" id="code" type="hidden" class="form-control" value="t3r4p3ut4">
            </div>
            </form>
             <div class="modal-footer">
              <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
              <button id="buttonRegistrarse" class="btn btn-theme" name="buttonRegistrarse" value="Registrarse">Registrarse</button>
            </div>
            <input type="hidden" name="validarUsuario" id="validarUsuario" value="false">
            <input type="hidden" name="validarEmail" id="validarEmail" value="false">
          </div>
        </div>
      </div>
      <!-- FIN MODAL-->
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

    var verificarEmail = "http://localhost/JuguemosYAprendamos/public/email";
    var verificarUser = "http://localhost/JuguemosYAprendamos/public/username";

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

    $("#buttonRegistrarse").click(function() {

      if($("#regUsuario").val().length > 0 && $("#regPassword").val().length > 0 &&
        $("#regEmail").val().length > 0 && $("#selectTipoUsuario option:selected").text() != "Tipo de usuario"){

        if($("#regPassword").val().length > 5){
          if($("#regPassword").val() == $("#regConfPass").val()){
            if($("#validarUsuario").val() == "true" && $("#validarEmail").val() == "true"){
              if($("#selectTipoUsuario option:selected").text() == "Terapia en casa"){
                alert("terapia en casa");
                $("#formRegistro").submit();
              }else if($("#selectTipoUsuario option:selected").text() == "Terapeuta"){
                if($("#regCode").val() == $("#code").val()){
                  if (confirm('¿Estas seguro de enviar este formulario?')){ 
                     $("#formRegistro").submit();
                  } 
                }else{
                  alert("El codigo acceso terapeuta es invalido");
                }
              }
            }
          }else{
            alert("Las contraseñas no coinciden");
          }
        }else{
          alert("El tamaño de la contraseña debe ser superior a 6 caracteres.");
        }
      }else{
        alert("Por favor llene todos los campos.");
      }
        
    });

    $('#regConfPass').bind('input', function(){
      if($("#regPassword").val() == $("#regConfPass").val()){
        $("#regConfPass").css("border-color", "green");
        $("#regPassword").css("border-color", "green");
      }else{
        $("#regConfPass").css("border-color", "red");
      }
    });

    $('#regUsuario').bind('input', function(){
      var user = $("#regUsuario").val(); 
      $.ajax({
        url: verificarUser,
        type: 'get',
        dataType: 'json',
        data:{user:user},
        success: function(data){
          var size = data.mensaje;
          if(size == 1){
            $("#regUsuario").css("border-color", "red");
            $("#validarUsuario").val("false");
          }else if(user.length < 5){
            $("#regUsuario").css("border-color", "red");
            $("#validarUsuario").val("false");
          }
          else if(user.length > 5 && size != 1){
            $("#regUsuario").css("border-color", "green");
            $("#validarUsuario").val("true");
          }
        }
      });
    });
    

    $('#regEmail').bind('input', function(){
      var regemail = $("#regEmail").val(); 
      $.ajax({
        url: verificarEmail,
        type: 'get',
        dataType: 'json',
        data:{regemail:regemail},
        success: function(data){
          var size = data.mensaje;
          if(size == 1){
            $("#regEmail").css("border-color", "red");
            $("#validarEmail").val("false");
          }else{
            $("#regEmail").css("border-color", "green");
            $("#validarEmail").val("true");
          }
        }
      });
    });

  </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\JuguemosYAprendamos\resources\views/Principal/login.blade.php ENDPATH**/ ?>