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
<body style="background-image:url('../../images/login.jpg');background-size: cover;background-repeat: no-repeat;background-position: center center;background-attachment: fixed;">
    

<div  class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card" style="height: 90%;margin-top:22%;background-color:rgba(0, 0, 0, 0.7)">
                <div class="card-header" style="text-align: center; font-size: 26px; font-family: 'Nunito', sans-serif; color:#fff">{{ __('Iniciar sesión') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label style="margin-top: 15px; padding:auto; color:white; font-size: 16px;" for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input style="color:white; font-size: 16px;" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="margin-top: 15px; padding:auto; color:white; font-size: 16px;" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input style="color:white; font-size: 16px;" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div id="boton_contenedor" class="form-group row mb-0">
                            <div class="col-md-12 center">
                                <button type="submit" style="width:80%; height:40px; margin-bottom:20px;" class="blue darken-3 btn btn-primary">
                                    {{ __('Iniciar sesión') }}
                                </button>
                                {{-- @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif --}}
                              
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
