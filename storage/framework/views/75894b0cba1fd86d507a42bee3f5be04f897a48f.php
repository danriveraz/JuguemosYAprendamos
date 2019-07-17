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
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
      <!--<form class="form-login" id="formLogin" autocomplete="on" method="post" action="<?php echo e(route('login')); ?>">
        <?php echo e(csrf_field()); ?>-->
        <form class="form-login" method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <h2 class="form-login-heading">Ingeresa ahora</h2>

        <div class="login-wrap">
            <div>
                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Correo electronico" autofocus>
                <div class="text-center">
                    <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>
            <br>
            <div>
                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password" placeholder="Contraseña">
                <div class="text-center">
                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>
            <label class="checkbox" align="center">
                <span>
                    <a data-toggle="modal" href="#recuperarPassword"> ¿Olvidaste tu contraseña?</a>
                </span>
                </label>
            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Entrar</button>
          <!-- 
          <div class="login-social-link centered">
            <p>or you can sign in via your social network</p>
            <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
            <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
          </div>
          -->
            <div class="registration">
                ¿Todavía no tienes una cuenta?<br/>
                <a data-toggle="modal" href="#registro">
                    Crear cuenta
                </a>
            </div>
            </div>
        </form>

        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="recuperarPassword" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Recuperar contraseña</h4>
                    </div>
                    <div class="modal-body">
                        <p>Ingresa tu correo electronico abajo para recuperar contraseña</p>
                        <input type="text" name="emailRecuperar" placeholder="Correo" autocomplete="off" class="form-control placeholder-no-fix">
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                        <button class="btn btn-theme" type="button">Enviar</button>
                    </div>
                </div>
            </div>
        </div>


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
            <div class="modal-footer">
              <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
              <button id="buttonRegistrarse" class="btn btn-theme" name="buttonRegistrarse" value="Registrarse">Registrarse</button>
            </div>
            </form>
             
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
<!--
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Login')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password">

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Login')); ?>

                                </button>

                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<?php /**PATH C:\xampp\htdocs\JuguemosYAprendamos\resources\views/auth/login.blade.php ENDPATH**/ ?>