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

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg" style="text-align: center;">
      <!--
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
    -->
      <!--logo start-->
      <a href="index.html" class="logo" ><b>JUGUEMOS &<span> APRENDAMOS</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <!--
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          
          </li>
          -->
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <!--
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          -->
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <!--
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
        -->
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
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
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          @if($nombrePaciente != "")
          <h5 class="centered">Trabajando con:</h5>
          <h5 class="centered">{{$nombrePaciente}}</h5>
          @endif
        
        <!--
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>UI Elements</span>
              </a>
            <ul class="sub">
              <li><a href="general.html">General</a></li>
              <li><a href="buttons.html">Buttons</a></li>
              <li><a href="panels.html">Panels</a></li>
              <li><a href="font_awesome.html">Font Awesome</a></li>
            </ul>
          </li>
        -->
        <!--
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li><a href="grids.html">Grids</a></li>
              <li><a href="calendar.html">Calendar</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="todo_list.html">Todo List</a></li>
              <li><a href="dropzone.html">Dropzone File Upload</a></li>
              <li><a href="inline_editor.html">Inline Editor</a></li>
              <li><a href="file_upload.html">Multiple File Upload</a></li>
            </ul>
          </li>
         --> 
         <!--
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
              </a>
            <ul class="sub">
              <li><a href="blank.html">Blank Page</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="lock_screen.html">Lock Screen</a></li>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="invoice.html">Invoice</a></li>
              <li><a href="pricing_table.html">Pricing Table</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="404.html">404 Error</a></li>
              <li><a href="500.html">500 Error</a></li>
            </ul>
          </li>
         --> 
         <!--
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              <li><a href="form_component.html">Form Components</a></li>
              <li><a href="advanced_form_components.html">Advanced Components</a></li>
              <li><a href="form_validation.html">Form Validation</a></li>
              <li><a href="contactform.html">Contact Form</a></li>
            </ul>
          </li>
        -->  
          <li class="sub-menu">
            <a class="active">
              <i class="fa fa-th"></i>
              <span>Pacientes</span>
              </a>
            <ul class="sub">
              <li class="active"><a>Seleccionar paciente</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-rocket"></i>
              <span>Nivel 1 (Letra P)</span>
              </a>
            <ul class="sub">
              <li><a href="morris.html">Postura</a></li>
              <li><a href="chartjs.html">Cara</a></li>
              <li><a href="flot_chart.html">Sonido</a></li>
              <li><a href="xchart.html">Palabras</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-rocket"></i>
              <span>Nivel (Letra B)</span>
              </a>
            <ul class="sub">
              <li><a href="morris.html">Postura</a></li>
              <li><a href="chartjs.html">Cara</a></li>
              <li><a href="flot_chart.html">Sonido</a></li>
              <li><a href="xchart.html">Palabras</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-rocket"></i>
              <span>Nivel (Letra M)</span>
              </a>
            <ul class="sub">
              <li><a href="morris.html">Postura</a></li>
              <li><a href="chartjs.html">Cara</a></li>
              <li><a href="flot_chart.html">Sonido</a></li>
              <li><a href="xchart.html">Palabras</a></li>
            </ul>
          </li>
<!--      
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
              <li><a href="morris.html">Morris</a></li>
              <li><a href="chartjs.html">Chartjs</a></li>
              <li><a href="flot_chart.html">Flot Charts</a></li>
              <li><a href="xchart.html">xChart</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
         --> 
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div>
          <div class="row mc">
            <div class="col-xs-12 col-sm-6 col-md-8">
              <h3><i class="fa fa-user"></i> Pacientes Registrados</h3>
            </div>
            <div class="col-xs-6 col-md-4" align="center">
              <br>
              <button type="button" class="btn btn-theme" data-toggle="modal" data-target="#modalPaciente"><i class="fa fa-plus"></i> Nuevo</button>

              <div class="modal fade" id="modalPaciente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Nuevo paciente</h4>
                    </div>
                    <div class="modal-body">

                      <form class="form-horizontal tasi-form" method="GET"  action="{{ route('paciente.create') }}">
                        <div class="form-group">
                          <h4> Datos del Paciente</h4>
                          <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="nombrePaciente">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Edad</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="edad">
                          </div>
                        </div>
                        <div class="form-group">
                          <h4> Datos del Acudiente</h4>
                          <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="nombreAcudiente">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Parentezco</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="parentezco">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Teléfono</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="telefono">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Dirección</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="direccion">
                          </div>
                        </div>
                        <div class="modal-footer">
                      <button type="reset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary" >Registrar</button>
                    </div>
                      </form>

                    </div>
                    
                  </div>
                </div>
              </div>

            </div>
          </div>
          <br>
        </div>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th class="hidden-phone">Nombre</th>
                    <th class="hidden-phone">Edad</th>
                    <th class="hidden-phone">Nombre acudiente</th>
                    <th class="hidden-phone">Parentezco</th>
                    <th class="hidden-phone">Teléfono</th>
                    <th class="hidden-phone">Dirección</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @if(!empty($pacientes))
                    @foreach($pacientes as $paciente)
                      <tr class="gradeA">
                        <td class="hidden-phone">{{$paciente->nombrePaciente}}</td>
                        <td class="center hidden-phone">{{$paciente->edad}}</td>
                        <td class="hidden-phone">{{$paciente->nombreAcudiente}}</td>
                        <td class="hidden-phone">{{$paciente->parentezco}}</td>
                        <td class="center hidden-phone">{{$paciente->telefono}}</td>
                        <td class="center hidden-phone">{{$paciente->direccion}}</td>
                        <td>
                          <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editModal{{$paciente->id}}"><i class="fa fa-pencil"></i></button>

                          <div class="modal fade" id="editModal{{$paciente->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" id="myModalLabel">Paciente {{$paciente->nombrePaciente}}</h4>
                                </div>
                                <div class="modal-body">

                                  <form class="form-horizontal tasi-form" method="GET"  action="{{ route('paciente.update', $paciente->id) }}">
                                    <div class="form-group">
                                      <h4> Datos del Paciente</h4>
                                      <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nombrePaciente" value="{{$paciente->nombrePaciente}}">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Edad</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" name="edad" value="{{$paciente->edad}}">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <h4> Datos del Acudiente</h4>
                                      <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nombreAcudiente" value="{{$paciente->nombreAcudiente}}">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Parentezco</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" name="parentezco" value="{{$paciente->parentezco}}">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Teléfono</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" name="telefono" value="{{$paciente->telefono}}">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Dirección</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" name="direccion" value="{{$paciente->direccion}}">
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="reset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                      <button type="submit" class="btn btn-primary" >Actualizar</button>
                                    </div>
                                  </form>

                                </div>
                                
                              </div>
                            </div>
                          </div>

                          <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal{{$paciente->id}}"><i class="fa fa-trash-o "></i></button>

                          <div class="modal fade" id="deleteModal{{$paciente->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" id="myModalLabel">Paciente {{$paciente->nombrePaciente}}</h4>
                                </div>
                                <div class="modal-body">

                                    <h5>¿Está seguro de eliminar el paciente seleccionado?</h5>
                                    <div class="modal-footer">
                                      <button type="reset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                      <a href="{{ route('paciente.destroy', $paciente->id) }}" class="btn btn-primary">Confirmar</a>
                                    </div>

                                </div>
                                
                              </div>
                            </div>
                          </div>

                          <a class="btn btn-primary btn-xs" href="{{ route('paciente.select', $paciente->id) }}"><i class="fa fa-check " title="Seleccionar Paciente"></i></a>


                        </td>
                      </tr>
                    @endforeach
                  @else
                  <tr>
                    <td colspan="8">No hay registros !!</td>
                  </tr>
                  @endif
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
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
        <a href="advanced_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>

  <script type="text/javascript">
    function eliminar(id) {

      var url = "127.0.0.1:8000/paciente/eliminar";

      $.ajax({
        url: url,
        type: 'GET',
        data:{
          id: id
        },
        success: function(){
            //$("#"+id).remove();
            alert("Insumo eliminado exitosamente.");
        },
        error: function(data){
          alert('Ooops disculpanos, hemos tenido un error al eliminar tu insumo. Error: ' + data);
        }
      });
    }
  </script>

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
  <!--script for this page-->
  <script type="text/javascript">
    /* Formating function for row details */
    /*function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }*/

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      /*var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      /*nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      /*$('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          // This row is already open - close it 
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          // Open this row 
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });*/
    });
  </script>
</body>

</html>
