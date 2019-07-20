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
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>
  <section id="container">
    <!--header start-->
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
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
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
            <a href="javascript:;">
              <i class="fa fa-rocket"></i>
              <span>Nivel 1 (Letra P)</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo e(route('paciente.postura', ['id' => $idPaciente, 'level' => 1])); ?>" >Postura</a></li>
              <li><a href="<?php echo e(route('paciente.cara', ['id' => $idPaciente, 'level' => 1])); ?>">Cara</a></li>
              <li><a href="<?php echo e(route('paciente.sonido', ['id' => $idPaciente, 'level' => 1])); ?>">Sonido</a></li>
              <li><a href="<?php echo e(route('paciente.palabra', ['id' => $idPaciente, 'level' => 1])); ?>">Palabras</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-rocket"></i>
              <span>Nivel (Letra M)</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo e(route('paciente.postura', ['id' => $idPaciente, 'level' => 2])); ?>" >Postura</a></li>
              <li><a href="<?php echo e(route('paciente.cara', ['id' => $idPaciente, 'level' => 2])); ?>">Cara</a></li>
              <li><a href="<?php echo e(route('paciente.sonido', ['id' => $idPaciente, 'level' => 2])); ?>">Sonido</a></li>
              <li><a href="<?php echo e(route('paciente.palabra', ['id' => $idPaciente, 'level' => 2])); ?>">Palabras</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-rocket"></i>
              <span>Nivel (Letra B)</span>
              </a>
            <ul class="sub">
              <li><a href=" href="<?php echo e(route('paciente.postura', ['id' => $idPaciente, 'level' => 3])); ?>" >Postura</a></li>
              <li><a href="<?php echo e(route('paciente.cara', ['id' => $idPaciente, 'level' => 3])); ?>">Cara</a></li>
              <li><a href="<?php echo e(route('paciente.sonido', ['id' => $idPaciente, 'level' => 3])); ?>">Sonido</a></li>
              <li><a href="<?php echo e(route('paciente.palabra', ['id' => $idPaciente, 'level' => 3])); ?>">Palabras</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a class="active" href="<?php echo e(route('estadisticas.index')); ?>">
              <i class=" fa fa-pie-chart"></i>
              <span>Estadisticas</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div id="primerIntento" style=" display: inline-block; width: 550px; height: 500px;"></div>
        <div id="penultimoIntento" style=" display: inline-block; width: 550px; height: 500px;"></div>
        <div id="ultimoIntento" style=" display: inline-block; width: 550px; height: 500px;"></div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
      </div>
    </footer>
    <!--footer end-->
  </section>



  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>

  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <!--script for this page-->
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>

  <!-- js placed at the end of the document so the pages load faster -->
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <!--script for this page-->

  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);
      google.charts.setOnLoadCallback(drawChart3);


      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Denominación', '# Intentos'],
          ['Aciertos',     11],
          ['Fallos',      2]
        ]);

        var options = {
          title: 'Primer intento',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('primerIntento'));

        chart.draw(data, options);
      }

      function drawChart2() {

        var data2 = google.visualization.arrayToDataTable([
          ['Denominación', '# Intentos'],
          ['Aciertos',     11],
          ['Fallos',      2]
        ]);

        var options2 = {
          title: 'Intento anterior',
          is3D: true,
        };

        var chart2 = new google.visualization.PieChart(document.getElementById('penultimoIntento'));

        chart2.draw(data2, options2);
      }
      
      function drawChart3() {

        var data3 = google.visualization.arrayToDataTable([
          ['Denominación', '# Intentos'],
          ['Aciertos',     11],
          ['Fallos',      2]
        ]);

        var options3 = {
          title: 'Intento mas reciente',
          is3D: true,
        };

        var chart3 = new google.visualization.PieChart(document.getElementById('ultimoIntento'));

        chart3.draw(data3, options3);
      }

    </script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\JuguemosYAprendamos\resources\views/Estadisticas/index.blade.php ENDPATH**/ ?>