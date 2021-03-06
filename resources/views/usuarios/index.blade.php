<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Administrador</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{asset('css/login/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/login/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/login/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/login/pages/dashboard.css')}}">
        <link rel="stylesheet" href="{{asset('css/login/lity.css')}}">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
                rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
    </head>
    <body>
    {{-- nuevo --}}
        <div id="app"></div>
        <nav class="navbar navbar-fixed-top" style="background-color: red;">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header"> 
                    <button 
                        type          = "button" 
                        class         = "navbar-toggle collapsed" 
                        data-toggle   = "collapse" 
                        data-target   = "#bs-example-navbar-collapse-1" 
                        aria-expanded = "false"
                    >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="color: white;">Sistema de administracion de Alumnos</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name}} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>               
                                <a 
                                    href        = "#" 
                                    class       = "shortcut" 
                                    data-toggle = "modal" 
                                    data-target = "#ChangeUser" 
                                    onclick     = "fun_ChangeUser('{{ Auth::user()->id}}')" 
                                    id          = "editaUser" 
                                    value       = "{{route('users.changeU')}}"
                                >
                                <span class="shortcut-label">Cambio Usuario</span> 
                                </a>
                            </li>            
                            <li>
                                <a 
                                    href="{{ url('/logout') }}" 
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                >
                                <span class="icon-bar"></span>Salir</a>
                                <form 
                                    id     = "logout-form" 
                                    action = "{{ url('/logout') }}" 
                                    method = "POST"
                                    style  = "display: none;"
                                >
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            @include('usuarios.modals.CambioUser')
        </nav>
    {{-- <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container"> 
        <div class="nav-collapse">
            <ul class="nav pull-right">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                class="icon-user"></i> {{ Auth::user()->name}} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();    document.getElementById('logout-form').submit();"><span class="icon-bar"></span>Salir</a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    </form>
                </li>
                </ul>
            </li>
            </ul>
        </div>
        <!--/.nav-collapse --> 
        </div>
        <!-- /container --> 
    </div>
    <!-- /navbar-inner --> 
    </div> --}}
    <!-- /navbar -->

    <!-- /subnavbar -->
        <div class="main">
            <div class="main-inner">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <div class="widget">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- /main-inner --> 

    <!-- /footer --> 

    <!-- Le javascript
    ================================================== --> 
    <!-- Placed at the end of the document so the pages load faster --> 

        <script src="{{ URL::asset('js/login/jquery-3.4.0.min.js')}}"></script>
        <script src="{{ URL::asset('js/login/bootstrap.js')}}"></script>
        {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
        <script src="{{ URL::asset('js/metodos.js')}}"></script>
        <script src="{{ URL::asset('js/login/excanvas.min.js')}}"></script>
        <script src="{{ URL::asset('js/login/full-calendar/fullcalendar.min.js')}}"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script> --}}
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="{{ URL::asset('js/lity.js')}}"></script> 
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
        <script src="{{ URL::asset('js/login/base.js')}}"></script>
        <script src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
        <script>
        $(document).ready( function () {
            $('#tablaasignaturas').DataTable();

            $('#tablapagoalumnos').DataTable();            
        });            
        </script>
    </body>
</html>
