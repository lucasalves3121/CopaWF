
<!DOCTYPE html>
<html lang="PT-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="/../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="/../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/../build/css/custom.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
  <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
  <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
  <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="admin" class="site_title"><i class="fa fa-futbol-o"></i> <span>Copa WF</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../img/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bem Vindo,</span>
                <h2>{{ auth()->user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Cadastro<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('cadmodal') }}">Cadastrar Time</a></li>
                            <li><a href="{{ route('cadjog') }}">Cadastrar Jogadores</a></li>
                        </ul>
                    </li>

                    @foreach(getAllModalities() as $modality)
                        <li>
                            <a>
                                <i class="fa fa-home"></i> {{ $modality->name }}<span class="fa fa-chevron-down"></span>
                            </a>

                            <ul class="nav child_menu">
                                <li><a href="{{ route('modality.groups', encrypt($modality->id)) }}">Grupos</a></li>
                                <li><a href="{{ route('modality.sortitions', encrypt($modality->id)) }}">Sorteio de Jogos</a></li>
                                <li><a href="{{ route('modality.results', encrypt($modality->id)) }}">Resultados dos Jogos</a></li>
                            </ul>
                        </li>
                    @endforeach

                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" href="{{ route('settings') }}" data-placement="top" title="Configura????es">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="../img/img.jpg" alt="">{{ auth()->user()->name }}
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                  <form action="{{ route('logout') }}" method="post">
                  @csrf
                  <button type="submit"><i class="fa fa-sign-out pull-right"></i> Sair do Sistema</button>
                </form>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->
        <!-- /top navigation -->
        @yield('content')
  

@yield('modals')
    <!-- jQuery -->
    <script src="/../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/../vendors/skycons/skycons.js"></script>

  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <!-- Flot -->
    <script src="/../vendors/Flot/jquery.flot.js"></script>
    <script src="/../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/../vendors/Flot/jquery.flot.time.js"></script>
    <script src="/../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/../vendors/moment/min/moment.min.js"></script>
    <script src="/../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
      <script src="../vendors/pnotify/dist/pnotify.js"></script>
      <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
      <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="/../build/js/custom.min.js"></script>
	<script src="/../js/time.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    @if(Session::exists('success'))
        <script>
            $(document).ready(function (){
                new PNotify({
                    title: 'Sucesso!',
                    text: '{{ Session::get('success') }}!',
                    type: 'success',
                    styling: 'bootstrap3'
                })
            });
        </script>
    @endif

    @yield('javascript')
  </body>
</html>
