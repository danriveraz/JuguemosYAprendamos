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
  <link href="../../../css/carousel.css" rel="stylesheet">
</head>
  <body>
    <section id="container">
      <header class="header black-bg" style="text-align: center;">
        <a href="index.html" class="logo" ><b>JUGUEMOS &<span> APRENDAMOS</span></b></a>
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <li><a class="logout" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
          </ul>
        </div>
      </header>
      <aside>
        <div id="sidebar" class="nav-collapse ">
          <ul class="sidebar-menu" id="nav-accordion">
            @if($nombrePaciente != "")
            <h5 class="centered">Trabajando con:</h5>
            <h5 class="centered">{{$nombrePaciente}}</h5>
            @endif
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-th"></i>
                <span>Pacientes</span>
                </a>
              <ul class="sub">
                <li><a href="{{url('/paciente')}}">Seleccionar paciente</a>
                </li>
              </ul>
            </li>
            <li class="sub-menu">
              @if($level == 1)
                <a class="active">
              @else
                <a href="javascript:;">
              @endif
                <i class="fa fa-rocket"></i>
                <span>Nivel 1 (Letra P)</span>
                </a>
              <ul class="sub">
                <li><a href="{{route('paciente.postura', ['id' => $idPaciente, 'level' => 1])}}" >Postura</a></li>
                <li><a href="{{route('paciente.cara', ['id' => $idPaciente, 'level' => 1])}}">Cara</a></li>
                <li><a href="{{route('paciente.sonido', ['id' => $idPaciente, 'level' => 1])}}">Sonido</a></li>
                <li class="active"><a href="{{route('paciente.palabra', ['id' => $idPaciente, 'level' => 1])}}">Palabras</a></li>
                <li><a href="{{route('paciente.estadisticas', ['id' => $idPaciente, 'level' => 1])}}">Estadisticas</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              @if($level == 2)
                <a class="active">
              @else
                <a href="javascript:;">
              @endif
                <i class=" fa fa-rocket"></i>
                <span>Nivel (Letra M)</span>
                </a>
              <ul class="sub">
                <li><a href="{{route('paciente.postura', ['id' => $idPaciente, 'level' => 2])}}" >Postura</a></li>
                <li><a href="{{route('paciente.cara', ['id' => $idPaciente, 'level' => 2])}}">Cara</a></li>
                <li><a href="{{route('paciente.sonido', ['id' => $idPaciente, 'level' => 2])}}">Sonido</a></li>
                <li><a href="{{route('paciente.palabra', ['id' => $idPaciente, 'level' => 2])}}">Palabras</a></li>
                <li><a href="{{route('paciente.estadisticas', ['id' => $idPaciente, 'level' => 2])}}">Estadisticas</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              @if($level == 3)
                <a class="active">
              @else
                <a href="javascript:;">
              @endif
                <i class=" fa fa-rocket"></i>
                <span>Nivel (Letra B)</span>
                </a>
              <ul class="sub">
                <li><a href="{{route('paciente.postura', ['id' => $idPaciente, 'level' => 3])}}" >Postura</a></li>
                <li><a href="{{route('paciente.cara', ['id' => $idPaciente, 'level' => 3])}}">Cara</a></li>
                <li><a href="{{route('paciente.sonido', ['id' => $idPaciente, 'level' => 3])}}">Sonido</a></li>
                <li><a href="{{route('paciente.palabra', ['id' => $idPaciente, 'level' => 3])}}">Palabras</a></li>
                <li><a href="{{route('paciente.estadisticas', ['id' => $idPaciente, 'level' => 3])}}">Estadisticas</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </aside>
      <section id="main-content">
        <section class="wrapper">
          
  <h2>Acomodemos nuestra postura</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="../../../img/slide/postura1.png" alt="Postura incorrecta 1">
      </div>

      <div class="item">
        <img src="../../../img/slide/postura2.png" alt="Postura incorrecta 2">
      </div>
    
      <div class="item">
        <img src="../../../img/slide/postura3.png" alt="Postura correcta">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


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
    
  </body>
</html>
