@extends('layouts.app') @section('content')
<div style="margin-left:35px;" class="container">
    <div class="row col-12">
            @if(session('success'))
                <div id="mydiv" class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('alert'))
            <div id="mydiv" class="alert alert-danger">
                {{ session('alert') }}
            </div>
        @endif
        @if ($errors->any())
            <div id="mydiv" class="alert alert-danger" style="magin-top:140px;">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="row col-12">
        <div style="margin:auto;margin-bottom:30px;" class="row col-12">
            <div class="col-6">
                <div style="margin-bottom:0;margin-top:15px;" class="row">
                        <a style="margin-top: 0px;" class="btn-floating btn-large waves-effect blue darken-3 black-text" href="{{ Route('appointment.index') }}">
                                <i class="material-icons left">cached</i>
                            </a>
                            <h1 style="margin:auto;" class="center-align">Calendario de citas</h1>
                </div>
                
            </div>
            
            <div class="col-6">
                    <form class="form-inline" action="{{ Route('appointment.index') }}" method="GET">
                        <label for="nombre">Buscar por nombre</label>
                        <input style="width:80%;margin-right:10px;" type="text" name="nombre" id="nombre">
                        <button type="submit" class="waves-effect blue darken-3 btn right-align white-text">Buscar</button>
                    </form>
                </div>
        </div>
        <br>
        <div style="margin-top:19px;" class="panel-body">
            {{-- {!! $calendar->calendar() !!}
            {!! $calendar->script() !!} --}}
            <script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.js" defer></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js" defer></script>
            <script type="text/javascript" src="{{ asset('js/fullcalendar/locale/es.js') }}" defer></script>
            
            @if( $rol == 'secretaria')
            <ul style="background-color:transparent;margin-bottom:20px;" class="tabs center-align">
                    <li class="tab">
                      <a style="color:#00618c;font-weight:900;" href="#test1" class="active">Dr. Alberto García Arellano</a>
                    </li>
                    <li class="tab">
                      <a style="color:#00618c;font-weight:900;" class="" href="#test2">Dr. Sergio León Díaz Arellano</a>
                    </li>
                  <li class="indicator" style="left: 0px; right: 429px;"></li></ul>

                  <div id="test1" class="col s12" >
                        <div id="calendar1"></div>
                  </div>
                  <div id="test2" class="col s12" >
                        <div id="calendar2"></div>
                  </div>
            @else
            <div id="calendar"></div> 
            @endif
           
            <script>
                    $(document).ready(function() {
                        setTimeout(function() { 
                            $('#mydiv').fadeOut('fast'); 
                        }  , 3000);

                        // page is now ready, initialize the calendar...
                        $('#calendar').fullCalendar({
                            timeFormat: 'H(:mm)',
                            header: {
                                left: 'prev,next today',
                                center: 'title',
                                right: 'month,agendaWeek,agendaDay,listMonth'
                            },
                            events : [
                                @foreach($appointments as $appointment)
                                
                                {
                                    id : '{{ $appointment->id }}',
                                    title : '{{ $appointment->patient }}',
                                    allDay : false,
                                    start : '{{ $appointment->date. 'T' .$appointment->hour }}',
                                    end : '{{ $appointment->date. 'T' .$appointment->hour_end }}',
                                    editable : true,
                                    descripcion : '{{ $appointment->description }}'
                                },
                                @endforeach
                            ],
                            dayClick: function(date, jsEvent, view, resourceObj) {
                                $('#modal1').modal('show',date.format());
                                $('#fecha').val(date.format());
                                
                            },
                            eventClick: function(calEvent, jsEvent, view) {
                                const id = calEvent.id;                               
                                @foreach($appointments as $appointment)
                                    if({{ $appointment->id }} == id){
                                        $('#modal2').modal('show');
                                        $('#id2').val('{{ $appointment->id }}');
                                        $('#paciente2').val('{{ $appointment->patient }}');
                                        $('#fecha2').val('{{ $appointment->date }}');
                                        $('#hora2').val('{{ $appointment->hour }}');
                                        $('#descripcion2').val('{{ $appointment->description }}');
                                        if({{ $appointment->doctor_id }} == 1){
                                            $('#doctor2').val('Dr. Alberto Garcia Arellano');
                                        }else{
                                            $('#doctor2').val('Dr. Sergio León Díaz Arellano');
                                        }
                                        
                                        $(this).css('border-color', 'red');
                                    }
                                @endforeach
                            }
                        });

                        //Calendario de doctor sergio
                        $('#calendar2').fullCalendar({
                            timeFormat: 'H(:mm)',
                            header: {
                                left: 'prev,next today',
                                center: 'title',
                                right: 'month,agendaWeek,agendaDay,listMonth'
                            },
                            events : [
                                @foreach($appointmentsS as $appointment)
                                
                                {   
                                    id : '{{ $appointment->id }}',
                                    title : '{{ $appointment->patient }}',
                                    allDay : false,
                                    start : '{{ $appointment->date. 'T' .$appointment->hour }}',
                                    end : '{{ $appointment->date. 'T' .$appointment->hour_end }}',
                                    editable : true,
                                    descripcion : '{{ $appointment->description }}'
                               },
                                @endforeach
                            ],
                            dayClick: function(date, jsEvent, view, resourceObj) {
                                $('#modal1').modal('show',date.format());
                                $('#fecha').val(date.format());
                                
                            },
                            eventClick: function(calEvent, jsEvent, view) {
                                const id = calEvent.id;                               
                                @foreach($appointmentsS as $appointment)
                                    if({{ $appointment->id }} == id){
                                        $('#modal2').modal('show');
                                        $('#id2').val('{{ $appointment->id }}');
                                        $('#paciente2').val('{{ $appointment->patient }}');
                                        $('#fecha2').val('{{ $appointment->date }}');
                                        $('#hora2').val('{{ $appointment->hour }}');
                                        $('#descripcion2').val('{{ $appointment->description }}');
                                        if({{ $appointment->doctor_id }} == 1){
                                            $('#doctor2').val('Dr. Alberto Garcia Arellano');
                                        }else{
                                            $('#doctor2').val('Dr. Sergio León Díaz Arellano');
                                        }
                                        
                                        $(this).css('border-color', 'red');
                                    }
                                @endforeach
                            }
                        });

                        //Calendario de doctor beto
                        $('#calendar1').fullCalendar({
                            timeFormat: 'H(:mm)',
                            header: {
                                left: 'prev,next today',
                                center: 'title',
                                right: 'month,agendaWeek,agendaDay,listMonth'
                            },
                            events : [
                                @foreach($appointmentsB as $appointment)
                                
                                {   
                                    id : '{{ $appointment->id }}',
                                    title : '{{ $appointment->patient }}',
                                    allDay : false,
                                    start : '{{ $appointment->date. 'T' .$appointment->hour }}',
                                    end : '{{ $appointment->date. 'T' .$appointment->hour_end }}',
                                    editable : true,
                                    descripcion : '{{ $appointment->description }}'
                               },
                                @endforeach
                            ],
                            dayClick: function(date, jsEvent, view, resourceObj) {
                                $('#modal1').modal('show',date.format());
                                $('#fecha').val(date.format());
                                
                            },
                            eventClick: function(calEvent, jsEvent, view) {
                                const id = calEvent.id;                               
                                @foreach($appointmentsB as $appointment)
                                    if({{ $appointment->id }} == id){
                                        $('#modal2').modal('show');
                                        $('#id2').val('{{ $appointment->id }}');
                                        $('#paciente2').val('{{ $appointment->patient }}');
                                        $('#fecha2').val('{{ $appointment->date }}');
                                        $('#hora2').val('{{ $appointment->hour }}');
                                        $('#descripcion2').val('{{ $appointment->description }}');
                                        if({{ $appointment->doctor_id }} == 1){
                                            $('#doctor2').val('Dr. Alberto Garcia Arellano');
                                        }else{
                                            $('#doctor2').val('Dr. Sergio León Díaz Arellano');
                                        }
                                        
                                        $(this).css('border-color', 'red');
                                    }
                                @endforeach
                            }
                        });
                    });
            </script>

<div style="width: 700px;height:400px;padding-right:0px !important;padding-bottom:0;" class="modal modal_box" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        
    <div style="width: 700px;height:400px;padding-bottom:0;" class="modal-content">
        <div class="modal-header"  style="padding-top:0px;padding-bottom:5px;height:45px;">
            <h3 class="center-align" >Registrar cita</h3>
            <button type="button" class="close align-right" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            
        </div>

        <div style="padding-bottom:0;padding-top:29px;" class="modal-body">
            <form method="POST" action="{{ route('appointment.store') }}">
                @csrf
                <div style="margin-bottom:0;" class="row">

                    <div style="margin-bottom:0;" class="row col-12">
                        <div class="input-field col s6">
                            <label id="label-form" for="paciente">{{ __('Nombre del paciente') }}</label>
                            <input id="paciente" type="text" class="form-control{{ $errors->has('paciente') ? ' is-invalid' : '' }}" name="paciente"
                                value="{{ old('paciente') }}"> @if ($errors->has('paciente'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('paciente') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div style="margin-top:0;" class="input-field col s6">
                            <div class="input-field col s6">
                                <label id="label-form" for="fecha">{{ __('Fecha') }}</label>
                                <input id="fecha" type="text" readonly="readonly" name="fecha" autofocus>
                                
                                @if ($errors->has('fecha'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('fecha') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                    <label id="label-form" for="hora">{{ __('Hora') }}</label>
                                    <input id="hora" type="text" name="hora" class="timepicker"> @if ($errors->has('hora'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hora') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="input-field col s6">
                            <label id="label-form" for="descripcion">{{ __('Descripcion') }}</label>
                            <input id="descripcion" type="text" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" value="{{ old('descripcion') }}"> @if ($errors->has('descripcion'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('descripcion') }}</strong>
                            </span>
                            @endif
                        </div>
                        @if( $rol == 'secretaria')
                        <div class="input-field col s6">
                            <select id="doctor" name="doctor">
                                <option value="" disabled selected>Doctor</option>
                                <option value="1">Dr. Alberto Garcia Arellano</option>
                                <option value="2">Dr. Sergio León Diaz Arellano</option>
                            </select>
                        </div>
                        @endif
                    </div>
                    
                   
                   
                    <div style="margin-bottom:0; margin-top:15px;" class="row col-12 justify-content-center">
                        <button style="color:black;margin-right:25px;text-align:left;width:100px;height:50px;" type="button" class="waves-effect grey lighten-4 btn" data-dismiss="modal">Cancelar</button>
                        <button type="submit" style="width:60%; height:50px;" class="btn btn-primary blue darken-3">
                            {{ __('Registrar cita') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</div>


<div style="width: 700px;height:400px;padding-right:0px !important;padding-bottom:0;" class="modal modal_box" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        
    <div style="width: 700px;height:400px;padding-bottom:0;" class="modal-content">
        <div class="modal-header"  style="padding-top:0px;padding-bottom:5px;height:45px;">
            <h3 class="center-align" >Ver y modificar cita</h3>
            <button type="button" class="close align-right" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            
        </div>

        <div style="padding-bottom:0;padding-top:29px;" class="modal-body">
            <form method="POST" action="{{ route('appointment.editar') }}">
                @csrf
                {{ method_field('PUT') }}
                <div style="margin-bottom:0;" class="row">

                    <div style="margin-bottom:0;" class="row col-12">
                        <div class="input-field col s6">
                            <label id="label-form" for="paciente">{{ __('Nombre del paciente') }}</label>
                            <input type="hidden" id="id2" name="id">
                            <input id="paciente2" type="text" name="paciente" autofocus> @if ($errors->has('paciente'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('paciente') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div style="margin-top:0;" class="input-field col s6">
                            <div class="input-field col s6">
                                <label id="label-form" for="fecha">{{ __('Fecha') }}</label>
                                <input id="fecha2" type="text" name="fecha" class="datepicker" autofocus>
                                
                                @if ($errors->has('fecha'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('fecha') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="input-field col s6">
                                    <label id="label-form" for="hora">{{ __('Hora') }}</label>
                                    <input id="hora2" type="text" name="hora" class="timepicker" autofocus> @if ($errors->has('hora'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hora') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="input-field col s6">
                            <label id="label-form" for="descripcion">{{ __('Descripcion') }}</label>
                            <input id="descripcion2" type="text" name="descripcion" autofocus> 
                            @if ($errors->has('descripcion'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('descripcion') }}</strong>
                            </span>
                            @endif
                        </div>
                        @if( $rol == 'secretaria')
                        <div class="input-field col s6">
                                <label id="label-form" for="descripcion">{{ __('Doctor') }}</label>
                            
                                <input id="doctor2" type="text" name="doctor" autofocus disabled> 
                        </div>
                        @endif
                    </div>
                    
                   
                   
                    <div style="margin-bottom:0; margin-top:15px;" class="row col-12 justify-content-center">
                        <button style="color:black;margin-right:25px;text-align:left;width:100px;height:50px;" type="button" class="waves-effect grey lighten-4 btn" data-dismiss="modal">Cancelar</button>
                        <button type="submit" style="width:60%; height:50px;" class="btn btn-primary blue darken-3">
                            {{ __('Modificar cita') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</div>


        </div>
    </div>
 
</div>

@endsection
@section('foot')
     {{-- {!! $calendar->script() !!} --}}
   
@endsection
