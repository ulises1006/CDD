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
     <!--Import materialize.css-->
     <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/side_bar.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="navbar-fixed">
        <nav id="nav_bar" class="navbar navbar-expand-md navbar-light navbar-laravel blue darken-4">
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
        <main class="py-4">
            <div class="row">
                @guest
                
                @else
                <div style="border: 0;" class="col-md-2 pull-left white">
                        
                </div>
                @endguest
                <div class="col-md-9" id="contenido_principal">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
    @yield('foot')
    
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
            
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
            
            var elems = document.querySelectorAll('.datepicker');
            var options = {
                format: 'dd/mm/yyyy',
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
                    formatSubmit: 'dd/mm/yyyy'
                }
            };
            var instances = M.Datepicker.init(elems,options);


            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems);
            
         
            });
           
            // $(document).ready(function(){
            //     $('.datepicker').datepicker({
            //         monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            //         monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            //         weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            //         weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'],
            //         selectMonths: true,
            //         selectYears: 100, // Puedes cambiarlo para mostrar más o menos años
            //         today: 'Hoy',
            //         clear: 'Limpiar',
            //         close: 'Ok',
            //         labelMonthNext: 'Siguiente mes',
            //         labelMonthPrev: 'Mes anterior',
            //         labelMonthSelect: 'Selecciona un mes',
            //         labelYearSelect: 'Selecciona un año',
            //         formatSubmit: 'yyyy/mm/dd'
            //     });
       
            // });
            
            // $('.datepicker').pickadate({
            //     monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            //     monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            //     weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            //     weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'],
            //     selectMonths: true,
            //     selectYears: 100, // Puedes cambiarlo para mostrar más o menos años
            //     today: 'Hoy',
            //     clear: 'Limpiar',
            //     close: 'Ok',
            //     labelMonthNext: 'Siguiente mes',
            //     labelMonthPrev: 'Mes anterior',
            //     labelMonthSelect: 'Selecciona un mes',
            //     labelYearSelect: 'Selecciona un año',
            //     formatSubmit: 'yyyy/mm/dd'
            // });
       
    </script>  

</body>
</html>
