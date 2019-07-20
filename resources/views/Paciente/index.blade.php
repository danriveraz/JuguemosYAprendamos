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
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          @if($nombrePaciente != "")
          <h5 class="centered">Trabajando con:</h5>
          <h5 class="centered">{{$nombrePaciente}}</h5>
          @endif
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
          @if($idPaciente != 0)
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-rocket"></i>
              <span>Nivel 1 (Letra P)</span>
              </a>
            <ul class="sub">
              <li><a href="{{route('paciente.postura', ['id' => $idPaciente, 'level' => 1])}}" >Postura</a></li>
              <li><a href="{{route('paciente.cara', ['id' => $idPaciente, 'level' => 1])}}">Cara</a></li>
              <li><a href="{{route('paciente.sonido', ['id' => $idPaciente, 'level' => 1])}}">Sonido</a></li>
              <li><a href="{{route('paciente.palabra', ['id' => $idPaciente, 'level' => 1])}}">Palabras</a></li>
              <li><a href="{{route('paciente.estadisticas', ['id' => $idPaciente, 'level' => 1])}}">Estadisticas</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
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
            <a href="javascript:;">
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
          @endif
        </ul>
      </div>
    </aside>
    <section id="main-content">
      <section class="wrapper">
        <div>
          <div class="row mc" style="padding-top: 15px">
          @include('flash::message')
            <div class="col-xs-12 col-sm-6 col-md-8">
              <h3><i class="fa fa-user"></i> Pacientes Registrados</h3>
            </div>
            <div class="col-xs-6 col-md-4" align="center">
              <br>
              <button type="button" class="btn btn-theme" data-toggle="modal" data-target="#modalPaciente"  title="Crear Paciente"><i class="fa fa-plus"></i> Nuevo</button>
              <div class="modal fade" id="modalPaciente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" align="left">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Nuevo paciente</h4>
                    </div>
                    <div class="modal-body">
                      <form class="form-horizontal tasi-form" method="GET"  action="{{ route('paciente.create') }}">
                        <h4> Datos del Paciente</h4>
                        <div class="form-group">  
                          <label class="col-sm-1 control-label">Nombre</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" name="nombrePaciente">
                          </div>
                          <label class="col-sm-1 control-label">TI</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="idPaciente">
                          </div>
                          <label class="col-sm-1 control-label">Edad</label>
                          <div class="col-sm-2">
                            <input type="text" class="form-control" name="edad">
                          </div>
                        </div>
                        <h4> Datos del Acudiente</h4>
                        <div class="form-group">
                          <label class="col-sm-1 control-label">Nombre</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" name="nombreAcudiente">
                          </div>
                          <label class="col-sm-1 control-label">CC</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="idAcudiente">
                          </div>
                          <label class="col-sm-1 control-label">Relación</label>
                          <div class="col-sm-2">
                            <input type="text" class="form-control" name="parentezco">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-1 control-label">Teléfono</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="telefono">
                          </div>
                          <label class="col-sm-1 control-label">Dirección</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" name="direccion">
                          </div>
                          <label class="col-sm-1 control-label">Ciudad</label>
                          <div class="col-sm-2">
                            <input type="text" class="form-control" name="ciudad">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Valoración médica</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="evaluacionMedica">
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
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th></th>
                    <th>Nombre</th>
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
                        <td>
                          <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalInfoPaciente{{$paciente->id}}"><i class="fa fa-plus" title="Ver detalles"></i></button>
                          <div class="modal fade" id="modalInfoPaciente{{$paciente->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" align="left">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" id="myModalLabel">Detalles paciente: {{$paciente->nombrePaciente}}</h4>
                                </div>
                                <div class="modal-body">
                                  <div style="display: inline-table; width: 49%;">
                                    <h5><b>Datos del Paciente</b></h5>
                                  Nombre: {{$paciente->nombrePaciente}}<br>
                                  Identificación: {{$paciente->idPaciente}}<br>
                                  Edad: {{$paciente->edad}}
                                  </div>
                                  <div style="display: inline-table; width: 49%;">
                                    <h5><b>Datos del Acudiente</b></h5>
                                  Nombre: {{$paciente->nombreAcudiente}}<br>
                                  Cédula: {{$paciente->idAcudiente}}<br>
                                  Parentesco:{{$paciente->parentezco}}<br>
                                  Teléfono: {{$paciente->telefono}}<br>
                                  Dirección:{{$paciente->direccion}}<br>
                                  Ciudad:{{$paciente->ciudad}}<br>
                                  </div>
                                  <h5><b>Valoración Médica</b></h5>
                                  {{$paciente->evaluacionMedica}}
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>{{$paciente->nombrePaciente}}</td>
                        <td class="center hidden-phone">{{$paciente->edad}}</td>
                        <td class="hidden-phone">{{$paciente->nombreAcudiente}}</td>
                        <td class="hidden-phone">{{$paciente->parentezco}}</td>
                        <td class="center hidden-phone">{{$paciente->telefono}}</td>
                        <td class="center hidden-phone">{{$paciente->direccion}}</td>
                        <td>
                          <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editModal{{$paciente->id}}"><i class="fa fa-pencil" title="Editar Paciente"></i></button>
                          <div class="modal fade" id="editModal{{$paciente->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" id="myModalLabel">Paciente {{$paciente->nombrePaciente}}</h4>
                                </div>
                                <div class="modal-body">
                                  <form class="form-horizontal tasi-form" method="GET"  action="{{ route('paciente.update', $paciente->id) }}">
                                    <div>
                                      <h4> Datos del Paciente</h4>  
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">Nombre</label>
                                      <div class="col-sm-4">
                                        <input type="text" class="form-control" name="nombrePaciente" value="{{$paciente->nombrePaciente}}">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">TI</label>
                                      <div class="col-sm-4">
                                        <input type="text" class="form-control" name="idPaciente" value="{{$paciente->idPaciente}}">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">Edad</label>
                                      <div class="col-sm-4">
                                        <input type="text" class="form-control" name="edad" value="{{$paciente->edad}}">
                                      </div>
                                    </div>
                                    <div>
                                      <h4> Datos del Acudiente</h4>  
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">Nombre</label>
                                      <div class="col-sm-4">
                                        <input type="text" class="form-control" name="nombreAcudiente" value="{{$paciente->nombreAcudiente}}">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">CC</label>
                                      <div class="col-sm-4">
                                        <input type="text" class="form-control" name="idAcudiente" value="{{$paciente->idAcudiente}}">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">Relación</label>
                                      <div class="col-sm-4">
                                        <input type="text" class="form-control" name="parentezco" value="{{$paciente->parentezco}}">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">Teléfono</label>
                                      <div class="col-sm-4">
                                        <input type="text" class="form-control" name="telefono" value="{{$paciente->telefono}}">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">Dirección</label>
                                      <div class="col-sm-4">
                                        <input type="text" class="form-control" name="direccion" value="{{$paciente->direccion}}">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">Ciudad</label>
                                      <div class="col-sm-4">
                                        <input type="text" class="form-control" name="ciudad" value="{{$paciente->ciudad}}">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-5 control-label">Valoracón médica</label>
                                      <div class="col-sm-3">
                                        <input type="text" class="form-control" name="evaluacionMedica" value="{{$paciente->evaluacionMedica}}">
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
                          <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal{{$paciente->id}}"><i class="fa fa-trash-o" title="Eliminar Paciente"></i></button>
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
                          <a class="btn btn-info btn-xs" href="{{ route('paciente.select', $paciente->id) }}"><i class="fa fa-check " title="Seleccionar Paciente"></i></a>
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
        <a href="advanced_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
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
    $(document).ready(function() {
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });
    });
  </script>
</body>

</html>
