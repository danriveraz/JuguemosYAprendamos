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
      <link href="../img/favicon.png" rel="icon">
      <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
      <!-- Bootstrap core CSS -->
      <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!--external css-->
      <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="../css/style.css" rel="stylesheet">
      <link href="../css/style-responsive.css" rel="stylesheet">
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    </head>
    <body>
      <div id="login-page">
        <div class="container">                    <!--<div class="card-header"><?php echo e(__('Reset Password')); ?></div>-->
            <form class="form-login" method="POST" action="<?php echo e(route('password.email')); ?>">
                <?php echo csrf_field(); ?>
                <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <h2 class="form-login-heading">Ingresa tu correo</h2>
                <div class="login-wrap">
                    <!--<label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>-->
                    <div>
                        <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Correo">
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
                <br>
                <button class="btn btn-theme btn-block" type="submit">
                    <?php echo e(__('Enviar')); ?>

                </button>
                <br>
                <div class="registration">
                   Se te enviará un correo con los pasos a seguir.
                </div>
                </div>
            </form>
      </div>
      <!-- js placed at the end of the document so the pages load faster -->
      <script src="../lib/jquery/jquery.min.js"></script>
      <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
      <!--BACKSTRETCH-->
      <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
      <script type="text/javascript" src="../lib/jquery.backstretch.min.js"></script>
      <script>
        $.backstretch("../img/login-bg.jpg", {
          speed: 500
        });
      </script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\JuguemosYAprendamos\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>