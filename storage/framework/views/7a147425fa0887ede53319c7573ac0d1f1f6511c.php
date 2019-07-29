<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Pacientes</title>
  <!-- Favicons -->
  <link href="../../../img/favicon.png" rel="icon">
  <link href="../../../img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Bootstrap core CSS -->
  <link href="../../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../../../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="../../../lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="../../../lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../../lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="../../../css/style.css" rel="stylesheet">
  <link href="../../../css/style-responsive.css" rel="stylesheet">
</head>
  <body>
    <section id="container">
      <header class="header black-bg" style="text-align: center;">
        <a href="index.html" class="logo" ><b>JUGUEMOS &<span> APRENDAMOS</span></b></a>
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <li><a class="logout" href="<?php echo e(route('logout')); ?>"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?>

              </a>
              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
              </form>
            </li>
          </ul>
        </div>
      </header>
      <aside>
        <div id="sidebar" class="nav-collapse ">
          <ul class="sidebar-menu" id="nav-accordion">
            <?php if($nombrePaciente != ""): ?>
            <h5 class="centered">Trabajando con:</h5>
            <h5 class="centered"><?php echo e($nombrePaciente); ?></h5>
            <?php endif; ?>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-th"></i>
                <span>Pacientes</span>
                </a>
              <ul class="sub">
                <li><a href="<?php echo e(url('/paciente')); ?>">Seleccionar paciente</a>
                </li>
              </ul>
            </li>
            <li class="sub-menu">
              <?php if($level == 1): ?>
                <a class="active">
              <?php else: ?>
                <a href="javascript:;">
              <?php endif; ?>
                <i class="fa fa-rocket"></i>
                <span>Nivel 1 (Letra P)</span>
                </a>
              <ul class="sub">
                <li><a href="<?php echo e(route('paciente.postura', ['id' => $idPaciente, 'level' => 1])); ?>" >Postura</a></li>
                <li><a href="<?php echo e(route('paciente.cara', ['id' => $idPaciente, 'level' => 1])); ?>">Cara</a></li>
                <li><a href="<?php echo e(route('paciente.sonido', ['id' => $idPaciente, 'level' => 1])); ?>">Sonido</a></li>
                <li class="active"><a href="<?php echo e(route('paciente.palabra', ['id' => $idPaciente, 'level' => 1])); ?>">Palabras</a></li>
                <li><a href="<?php echo e(route('paciente.estadisticas', ['id' => $idPaciente, 'level' => 1])); ?>">Estadisticas</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <?php if($level == 2): ?>
                <a class="active">
              <?php else: ?>
                <a href="javascript:;">
              <?php endif; ?>
                <i class=" fa fa-rocket"></i>
                <span>Nivel (Letra M)</span>
                </a>
              <ul class="sub">
                <li><a href="<?php echo e(route('paciente.postura', ['id' => $idPaciente, 'level' => 2])); ?>" >Postura</a></li>
                <li><a href="<?php echo e(route('paciente.cara', ['id' => $idPaciente, 'level' => 2])); ?>">Cara</a></li>
                <li><a href="<?php echo e(route('paciente.sonido', ['id' => $idPaciente, 'level' => 2])); ?>">Sonido</a></li>
                <li><a href="<?php echo e(route('paciente.palabra', ['id' => $idPaciente, 'level' => 2])); ?>">Palabras</a></li>
                <li><a href="<?php echo e(route('paciente.estadisticas', ['id' => $idPaciente, 'level' => 2])); ?>">Estadisticas</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <?php if($level == 3): ?>
                <a class="active">
              <?php else: ?>
                <a href="javascript:;">
              <?php endif; ?>
                <i class=" fa fa-rocket"></i>
                <span>Nivel (Letra B)</span>
                </a>
              <ul class="sub">
                <li><a href="<?php echo e(route('paciente.postura', ['id' => $idPaciente, 'level' => 3])); ?>" >Postura</a></li>
                <li><a href="<?php echo e(route('paciente.cara', ['id' => $idPaciente, 'level' => 3])); ?>">Cara</a></li>
                <li><a href="<?php echo e(route('paciente.sonido', ['id' => $idPaciente, 'level' => 3])); ?>">Sonido</a></li>
                <li><a href="<?php echo e(route('paciente.palabra', ['id' => $idPaciente, 'level' => 3])); ?>">Palabras</a></li>
                <li><a href="<?php echo e(route('paciente.estadisticas', ['id' => $idPaciente, 'level' => 3])); ?>">Estadisticas</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </aside>
      <section id="main-content" class="therapy">
        <section class="wrapper">
          <form  id="formPalabras"  method="GET"  action="<?php echo e(route('paciente.createstics', ['id' => $idPaciente, 'level' => 1])); ?>">
            <br><br>
            <div id="img1" class="text-center" style="display: block;" >
              <a>
                <img src="<?php echo e($palabras[0]['ruta']); ?>" alt="Imagen <?php echo e($palabras[0]['palabra']); ?>" width="300" height="300" style="border: 2px solid;">
              </a>
              <h3 class="text-center"><?php echo e($palabras[0]["palabra"]); ?></h3>
            </div>
            <div id="img2" class="text-center" style="display: none;" >
              <a>
                <img src="<?php echo e($palabras[1]['ruta']); ?>" alt="Imagen <?php echo e($palabras[1]['palabra']); ?>" width="300" height="300" style="border: 2px solid;">
              </a>
              <h3 class="text-center"><?php echo e($palabras[1]["palabra"]); ?></h3>
            </div>
            <div id="img3" class="text-center" style="display: none;" >
              <a>
                <img src="<?php echo e($palabras[2]['ruta']); ?>" alt="Imagen <?php echo e($palabras[2]['palabra']); ?>" width="300" height="300" style="border: 2px solid;">
              </a>
              <h3 class="text-center"><?php echo e($palabras[2]["palabra"]); ?></h3>
            </div>
            <div id="img4" class="text-center" style="display: none;" >
              <a>
                <img src="<?php echo e($palabras[3]['ruta']); ?>" alt="Imagen <?php echo e($palabras[3]['palabra']); ?>" width="300" height="300" style="border: 2px solid;">
              </a>
              <h3 class="text-center"><?php echo e($palabras[3]["palabra"]); ?></h3>
            </div>
            <div id="img5" class="text-center" style="display: none;" >
              <a>
                <img src="<?php echo e($palabras[4]['ruta']); ?>" alt="Imagen <?php echo e($palabras[4]['palabra']); ?>" width="300" height="300" style="border: 2px solid;">
              </a>
              <h3 class="text-center"><?php echo e($palabras[4]["palabra"]); ?></h3>
            </div>
            <div id="img6" class="text-center" style="display: none;" >
              <a>
                <img src="<?php echo e($palabras[5]['ruta']); ?>" alt="Imagen <?php echo e($palabras[5]['palabra']); ?>" width="300" height="300" style="border: 2px solid;">
              </a>
              <h3 class="text-center"><?php echo e($palabras[5]["palabra"]); ?></h3>
            </div>
            <br>

            <div class="text-center" >
              <a >
                <img src="../../../img/sound.png" alt="sonido" width="70" height="70">
                <input id="speak" type="text" value="<?php echo e($palabras[0]['palabra']); ?>" hidden="true">
              </a>
            </div>

            <br><br>
            <div class="text-center">
              <button id="btnAcierto" type="button" class="btn btn-theme" title="Siguiente"> ¡Muy bien! </button>
              <button id="btnFallo" type="button" class="btn btn-theme" title="Siguiente"> Intenta de nuevo </button>
              <button id="btnSiguiente" type="button" class="btn btn-theme" title="Siguiente"> Siguiente </button>
              <button id="btnFinalizar" type="submit" class="btn btn-theme" title="Siguiente"> Finalizar </button>
              <input id="nAciertos" name="nAciertos" type="number" value="0" hidden="true">
              <input id="nFallos" name="nFallos" type="number" value="0" hidden="true">
            </div>
          </form>
        </section>
      </section>

      <footer class="site-footer">
        <div class="text-center">
          <p>
            &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
          </p>
          <div class="credits">
            Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
          </div>
        </div>
      </footer>
    </section>

    <script src="../../../lib/jquery/jquery.min.js"></script>
    <script src="../../../lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../lib/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <!--script for this page-->
    <script type="text/javascript" src="../../../lib/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../../../lib/gritter-conf.js"></script>

    <!-- js placed at the end of the document so the pages load faster -->
    <script type="text/javascript" language="javascript" src="../../../lib/advanced-datatable/js/jquery.js"></script>
    <script class="include" type="text/javascript" src="../../../lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../../../lib/jquery.scrollTo.min.js"></script>
    <script src="../../../lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="../../../lib/advanced-datatable/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="../../../lib/advanced-datatable/js/DT_bootstrap.js"></script>
    <!--common script for all pages-->
    <script src="../../../lib/common-scripts.js"></script>
    <!--script for this page-->

    <script src="https://code.responsivevoice.org/responsivevoice.js?key=JTvb3fBh"></script>

   
    
    <script type="text/javascript">
      $( "#btnSiguiente" ).click(function() {
        if($("#img1").val() == 0){
          $("#img1").css("display", "none");
          $("#img2").css("display", "block");
          $("#img3").css("display", "none");
          $("#img4").css("display", "none");
          $("#img5").css("display", "none");
          $("#img6").css("display", "none");
          $("#img1").val(1);
        }else if($("#img1").val() == 1){
          $("#img1").css("display", "none");
          $("#img2").css("display", "none");
          $("#img3").css("display", "block");
          $("#img4").css("display", "none");
          $("#img5").css("display", "none");
          $("#img6").css("display", "none");
          $("#img1").val(2);
        }else if($("#img1").val() == 2){
          $("#img1").css("display", "none");
          $("#img2").css("display", "none");
          $("#img3").css("display", "none");
          $("#img4").css("display", "block");
          $("#img5").css("display", "none");
          $("#img6").css("display", "none");
          $("#img1").val(3);
        }else if($("#img1").val() == 3){
          $("#img1").css("display", "none");
          $("#img2").css("display", "none");
          $("#img3").css("display", "none");
          $("#img4").css("display", "none");
          $("#img5").css("display", "block");
          $("#img6").css("display", "none");
          $("#img1").val(4);
        }else if($("#img1").val() == 4){
          $("#img1").css("display", "none");
          $("#img2").css("display", "none");
          $("#img3").css("display", "none");
          $("#img4").css("display", "none");
          $("#img5").css("display", "none");
          $("#img6").css("display", "block");
          $("#img1").val(5);
        }else {
          $("#img1").css("display", "block");
          $("#img2").css("display", "none");
          $("#img3").css("display", "none");
          $("#img4").css("display", "none");
          $("#img5").css("display", "none");
          $("#img6").css("display", "none");
          $("#img1").val(0);
        }
      });

      $( "#btnAcierto" ).click(function() {
        $("#nAciertos").get(0).value++;
      });

      $( "#btnFallo" ).click(function() {
        $("#nFallos").get(0).value++;
      });
    </script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\JuguemosYAprendamos\resources\views/paciente/palabra.blade.php ENDPATH**/ ?>