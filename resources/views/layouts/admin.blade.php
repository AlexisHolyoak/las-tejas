<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Las Tejas</title>

    <!---Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <!-- Gritter -->
    <link href="{{ asset('js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element" align="center"> <span>
                            <img alt="image" class="img-circle" src="{{ asset('images/man.svg') }}" height="100" width="100" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->nameUser.' '.Auth::user()->firstSurNameUser }}</strong>
                             </span> <span class="text-muted text-xs block">{{Auth::user()->email}}<b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="#">Perfil</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesión</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li>
                        <a href="{{url('bienvenida')}}"><i class="fa fa-home"></i> <span class="nav-label">Pagina Principal</span>  </a>
                    </li>
                    @if(auth()->user()->hasRole(['Administrador']))
                    <li>
                        <a href="{{ url('branch') }}"><i class="fa fa-map-marker"></i><span class="nav-label">Sucursales</span></a>
                    </li>
                    @endif
                    <li>
                        <a href="{{ route('mozo',Auth::user()->idUser) }}"><i class="fa fa-child"></i><span class="nav-label">Atender Mesas</span></a>
                    </li>
                    <li>
                        <a href="{{ route('table.index')}}"><i class="fa fa-cube"></i><span class="nav-label">Mesas</span></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('images/add-comida.svg')}}" height="20" width="20"></i> <span class="nav-label"> Cocinero </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ url('platillos') }}">Platillos</a></li>
                            <li><a href="#">Ordenes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-file"></i> <span class="nav-label">Reportes </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{ url('reports') }}">Reportes Generales</a></li>
                        </ul>
                    </li>
                    <li id="acceso">
                        <a href="#"><i class="fa fa-user-circle"></i> <span class="nav-label">Acceso</span>  <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a id="Usuarios" href="{{ url('auth') }}">Usuarios</a></li>
                            <li><a id="Roles" href="{{ url('role') }}">Roles</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-default " href="#"><i class="fa fa-bars"></i></a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">Bienvenido al Sistema de Las Tejas</span>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i> Cerrar Sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>

        </nav>
        </div>
        <div class="row dashboard-header">
            @yield('content')
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer">
                    <div class="pull-right">
                        Sistema <strong>Gestion de Restaurante.</strong>
                    </div>
                    <div>
                        <strong>Copyright</strong> Las Tejas &copy; v1.0 - 2017
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Flot -->
    <script src="{{ asset('js/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.pie.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- Toastr -->
    <script src="{{ asset('js/plugins/toastr/toastr.min.js') }}"></script>

    @stack('script')
</body>
</html>
