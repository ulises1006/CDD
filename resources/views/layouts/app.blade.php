<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Centro Dental Durango</title>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- Import fullcalendar --}}
    {{-- <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.print.min.css"  media="screen,projection"/> --}}


     <!--Import materialize.css-->
     <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
    
      {{-- Import fullcalendar --}}
     <link rel="stylesheet" href="{{ asset('css/fullcalendar.min.css') }}"  media="screen,projection"/>
     {{-- <link rel="stylesheet" href="{{ asset('css/fullcalendar.print.min.css') }}"  media="screen,projection"/> --}}
    
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  --}}
    <script type="text/javascript" src="http://momentjs.com/downloads/moment.min.js" defer></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js" defer></script>
        

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/side_bar.css') }}" rel="stylesheet">
</head>
<body style="background-color:#f6efdf">
    <div id="app">
        <div class="navbar-fixed">
        <nav id="nav_bar" style="background-color:#00618c" class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a id="titulo_principal" class="navbar-brand" href="{{ url('/') }}">
                    Centro Dental Durango
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div  class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a style="font-size:18px; color:#fff;" class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                            </li>
                           
                        @else
                            <li class="nav-item dropdown">
                            
                                <a id="navbarDropdown" style="font-size: 20px; color:#fff" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a style="font-size: 20px;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
        @guest
                
        @else
        @include('layouts.side_menu')
        
        @endguest
        <main style="background-color:#f6efdf" class="py-4">
            <div style="background-color:#f6efdf" class="row">
                @guest
                
                @else
                <div style="background-color:#f6efdf;border: 0;" class="col-md-2 pull-left">
                    <ul style="background-color:#00618c;width:25%;" id="slide-out" class="sidenav">
                        <li><div class="user-view center">
                          <div class="background center">
                            <img id="imagen_fondo_sidenav" src="../../images/f3.jpg">
                          </div>
                          <a><img id="user_imagen" class="circle" src="../../images/doc.png"></a>
                          <a><span style="font-size:19px; font-weight:900;" class="black-text name">{{ Auth::user()->name }}</span></a>
                        </div></li>
                        <li><div id="titulo_sidenav" class="container"></div></li>
                        <li><a style="color:white;" class="waves-effect" href="/"><i id="icon" class="small material-icons">home</i>Inicio</a></li>
                        <li><a style="color:white;" class="waves-effect" href="{{ Route('appointment.index') }}"><i id="icon" class="small material-icons">event</i>Calendario de citas</a></li>
                        <li><a style="color:white;" class="waves-effect" href="{{ Route('patient.index') }}"><i id="icon" class="small material-icons">assignment_ind</i>Pacientes</a></li>
                        <li><a style="color:white;" class="waves-effect" href="{{ Route('payment.index') }}"><i id="icon" class="small material-icons">credit_card</i>Pagos</a></li>
                        <li><a style="color:white;" class="waves-effect" href="{{ Route('recipe.index') }}"><i id="icon" class="small material-icons">list</i>Recetas</a></li>
                      </ul>
                      <a href="#" style="position: fixed;margin-top:0;margin-bottom:0;margin-right:20px;right:0;" id="menu_toggle" data-target="slide-out" class="right sidenav-trigger show-on-medium-and-up"><i  style="margin-top:0;margin-bottom:0;" id="icono_menu" class="large material-icons">menu</i></a>
                              
                </div>
                @endguest
                <div class="col-md-9" id="contenido_principal">
                        
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
    @yield('foot')
    
    {{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    
    
    <script>
       
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('#slide-out');
            var instances = M.Sidenav.init(elems,{edge: 'right',draggable: 'false', inDuration: 250});

            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems,{edge: 'left'});

            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
            
            var elems = document.querySelectorAll('.datepicker');
            var options = {
                format: 'yyyy-mm-dd',
                yearRange: 20,
                i18n: {
                    months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                    weekdays: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                    weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'],
                    weekdaysAbbrev: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
                    selectMonths: true,
                    selectYears: 100, // Puedes cambiarlo para mostrar más o menos años
                    today: 'Hoy',
                    clear: 'Limpiar',
                    cancel: 'Cancelar',
                    done: 'Aceptar',
                    previousMonth: '<',
                    nextMonth: '>',
                    formatSubmit: 'yyyy-mm-dd'
                }
            };
            var instances = M.Datepicker.init(elems,options);
            
            var elems = document.querySelectorAll('.timepicker');
            var optionTime = {
                twelveHour : false
            }
            var instances = M.Timepicker.init(elems,optionTime);

            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems);
                        
           
        });

        // $(document).ready(function(){
        //     $('.sidenav').sidenav();
	    //     $('#slide-out').sidenav({ edge: 'right' });
        // });
       
    </script>  

</body>
</html>
