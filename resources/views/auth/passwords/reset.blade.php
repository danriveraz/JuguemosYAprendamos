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
      <link href="../../img/favicon.png" rel="icon">
      <link href="../../img/apple-touch-icon.png" rel="apple-touch-icon">
      <!-- Bootstrap core CSS -->
      <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!--external css-->
      <link href="../../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="../../css/style.css" rel="stylesheet">
      <link href="../../css/style-responsive.css" rel="stylesheet">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
      <div id="login-page">
        <div class="container">                 <!--<div class="card-header">{{ __('Reset Password') }}</div>-->
            <form class="form-login" method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">
                <h2 class="form-login-heading">Restablecer contraseña</h2>
                <div class="login-wrap">
                        <!--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->
                    <div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" placeholder="Correo" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br>
                        <!--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>-->
                    <div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br>
                        <!--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>-->
                    <div>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required autocomplete="new-password" >
                    </div>
                    <br>
                    <div class="registration">
                        <button type="submit" class="btn btn-theme btn-block">
                            {{ __('Restablecer contraseña') }}
                        </button>
                    </div>
                    <br>
                </div>
            </form>
      </div>
      <!-- js placed at the end of the document so the pages load faster -->
      <script src="../../lib/jquery/jquery.min.js"></script>
      <script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
      <!--BACKSTRETCH-->
      <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
      <script type="text/javascript" src="../../lib/jquery.backstretch.min.js"></script>
      <script>
        $.backstretch("../../img/login-bg.jpg", {
          speed: 500
        });
      </script>
    </body>
</html>

