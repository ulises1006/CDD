@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div style="margin-top:34px;" class="col-md-12">
            <div style="margin-right:34px;" class="right-align">
                <a class="waves-effect blue darken-3 btn-large right-align white-text" data-toggle="modal" data-target="#modal1">
                    <i class="material-icons right">add_circle</i>Registrar pago</a>
                    <a class="waves-effect yellow darken-3 btn-large right-align white-text" data-toggle="modal" data-target="#modal2">
                        <i class="material-icons right">add_circle</i>Pago extra</a>
            </div>
            @if ($errors->any())
            <div id="mydiv" class="alert alert-danger" style="margin-top:25px;margin-left: 20px;">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div style="margin-left: 25px;" class="row col-12">
                @if(session('success'))
                <div id="mydiv" class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif @if(session('alert'))
                <div id="mydiv" class="alert alert-danger">
                    {{ session('alert') }}
                </div>
                @endif
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script>
                    setTimeout(function () {
                        $('#mydiv').fadeOut('fast');
                    }, 3000);

                    $(document).ready(function() {
                        $('#paciente').change(function(){
                            var selected = $(':selected',this);
                            $('#patient_id').val(selected.val());
                        });    
                    });                
            </script>
            <div style="width: 700px;height:330px;padding-right:0px !important;padding-bottom:0;" class="modal modal_box" id="modal1"
                tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                <div style="width: 700px;height:400px;padding-bottom:0;" class="modal-content">
                    <div class="modal-header" style="padding-top:0px;padding-bottom:5px;height:45px;">
                        <h3 class="center-align">Registrar pago</h3>
                        <button type="button" class="close align-right" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <div style="padding-bottom:0;padding-top:29px;" class="modal-body">
                            <form method="POST" action="{{ route('payment.mandar') }}">
                            @csrf
                            <div style="margin-bottom:0;" class="row justify-content-center">
                                    <div  style="margin-bottom:0;"  class="row">
                                            <h4>Elija el paciente al cual le quiera registrar un pago</h4>
                                        </div>
                                <div style="margin-bottom:0;" class="row col-12">
                                   
                                    <div class="input-field col s6">
                                            <input type="hidden" id="patient_id" name="patient_id">
                                        <select id="paciente" name="paciente">
                                            <option value="" disabled selected>Nombre del paciente</option>
                                            @foreach ($patients as $patient)
                                            <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('patient'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('patient') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    {{-- <div style="margin-top:0;" class="input-field col s6">
                                        <div class="input-field col s6">
                                            <label id="label-form" for="fecha">{{ __('Fecha') }}</label>
                                            <input id="fecha" type="text" name="fecha" class="datepicker"> @if ($errors->has('fecha'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('fecha') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="input-field col s6">
                                            <label id="label-form" for="monto">{{ __('Monto') }}</label>
                                            <input id="monto" type="number" name="monto"> @if($errors->has('monto'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('monto') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div> 
                                <div class="row col-12">
                                    <div class="input-field col s6">
                                        <label id="label-form" for="tratamiento">{{ __('Tratamiento') }}</label>
                                        <input id="tratamiento" type="text" class="form-control{{ $errors->has('tratamiento') ? ' is-invalid' : '' }}" name="tratamiento"
                                            value="{{ old('tratamiento') }}"> @if ($errors->has('tratamiento'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tratamiento') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="input-field col s6">
                                            <select id="doctor" name="doctor">
                                                <option value="" disabled selected>Doctor</option>
                                                <option value="1">Dr. Alberto Garcia Arellano</option>
                                                <option value="2">Dr. Sergio León Diaz Arellano</option>
                                            </select>
                                        </div>
                                </div>
--}}
                            </div>


                                <div style="margin-bottom:0; margin-top:15px;" class="row col-12 justify-content-center">
                                    <button style="color:black;margin-right:25px;text-align:left;width:100px;height:50px;" type="button" class="waves-effect grey lighten-4 btn"
                                        data-dismiss="modal">Cancelar</button>
                                    <button type="submit" style="width:60%; height:50px;" class="btn btn-primary blue darken-3">
                                        {{ __('Registrar pago') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div style="width: 700px;height:400px;padding-right:0px !important;padding-bottom:0;" class="modal modal_box" id="modal2"
                tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                <div style="width: 700px;height:400px;padding-bottom:0;" class="modal-content">
                    <div class="modal-header" style="padding-top:0px;padding-bottom:5px;height:45px;">
                        <h3 class="center-align">Registrar pago</h3>
                        <button type="button" class="close align-right" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <div style="padding-bottom:0;padding-top:29px;" class="modal-body">
                            <form method="POST" action="{{ route('payment.store') }}">
                            @csrf
                            <div style="margin-bottom:0;" class="row">

                                <div style="margin-bottom:0;" class="row col-12">
                                    <div class="input-field col s6">
                                        <label id="label-form" for="paciente">{{ __('Nombre del paciente') }}</label>
                                        <input id="paciente" type="text" name="pacienteSR"> 
                                         
                                        @if ($errors->has('patient'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('patient') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div style="margin-top:0;" class="input-field col s6">
                                        <div class="input-field col s6">
                                            <label id="label-form" for="fecha">{{ __('Fecha') }}</label>
                                            <input id="fecha" type="text" name="fecha" class="datepicker"> @if ($errors->has('fecha'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('fecha') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="input-field col s6">
                                            <label id="label-form" for="monto">{{ __('Monto') }}</label>
                                            <input id="monto" type="number" name="monto"> @if($errors->has('monto'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('monto') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row col-12">
                                    <div class="input-field col s6">
                                        <label id="label-form" for="tratamiento">{{ __('Tratamiento') }}</label>
                                        <input id="tratamiento" type="text" class="form-control{{ $errors->has('tratamiento') ? ' is-invalid' : '' }}" name="tratamiento"
                                            value="{{ old('tratamiento') }}"> @if ($errors->has('tratamiento'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tratamiento') }}</strong>
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
                                    <button style="color:black;margin-right:25px;text-align:left;width:100px;height:50px;" type="button" class="waves-effect grey lighten-4 btn"
                                        data-dismiss="modal">Cancelar</button>
                                    <button type="submit" style="width:60%; height:50px;" class="btn btn-primary blue darken-3">
                                        {{ __('Registrar pago') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>


            <table style="margin-top:30px;margin-left:15px;" class="striped centered responsive-table">
                @if($rol == 'doctor')
                <thead style="font-size:17px;font-weight:600;">
                    <tr>
                        <th style="width:10%;">Código</th>
                        <th style="width:25%;">Nombre del paciente</th>
                        <th style="width:15%;">Cantidad</th>
                        <th style="width:15%;">Fecha</th>
                        <th style="width:25%;">Tratamiento</th>
                        <th style="width:10%"> Eliminar</th>
                    </tr>
                </thead>
                <tbody class="centered">
                    @foreach($payments as $payment)
                    
                    <tr class="center-align">
                        <th style="width:10%">{{ $payment->id }}</th>
                        @if($payment->paciente_no_registrado == null)
                        <th style="width:25%">{{ $payment->patient->name}}</th>
                        @else
                        <th style="width:25%;">*    {{ $payment->paciente_no_registrado}}</th>
                        @endif
                        <th style="width:15%">{{ $payment->monto}}</th>
                        <th style="width:15%">{{ $payment->fecha}}</th>
                        <th style="width:25%">{{ $payment->tratamiento}}</th>

                        <th style="width:10%">
                                {!! Form::open(['route'=> ['payment.destroy',$payment],'method'=>'DELETE']) !!}
                                <button class="btn-floating btn-large waves-effect waves-light red white-text" type="submit" >
                                        <i class="material-icons right" style="text-align:center;">delete</i></button>
                                {!! Form::close() !!}
                            
                        </th>
                    </tr>
                    @endforeach
                </tbody>
                @else
                <thead style="font-size:17px;font-weight:600;">
                        <tr>
                            <th style="width:10%;">Código</th>
                            <th style="width:20%;">Nombre del paciente</th>
                            <th style="width:10%;">Cantidad</th>
                            <th style="width:10%;">Fecha</th>
                            <th style="width:20%;">Tratamiento</th>
                            <th style="width:20%;">Doctor</th>
                            <th style="width:10%"> Eliminar</th>
                        </tr>
                    </thead>
                    <tbody class="centered">
                        @foreach($payments as $payment)
                        
                        <tr class="center-align">
                            <th style="width:10%">{{ $payment->id }}</th>
                            @if($payment->paciente_no_registrado == null)
                            <th style="width:20%">{{ $payment->patient->name}}</th>
                            @else
                            <th style="width:20%;">*    {{ $payment->paciente_no_registrado}}</th>
                            @endif
                            <th style="width:10%">{{ $payment->monto}}</th>
                            <th style="width:10%">{{ $payment->fecha}}</th>
                            <th style="width:20%">{{ $payment->tratamiento}}</th>
                            <th style="width:20%">{{ $payment->doctor->name}}</th>
                            <th style="width:10%">
                                    {!! Form::open(['route'=> ['payment.destroy',$payment],'method'=>'DELETE']) !!}
                                    <button class="btn-floating btn-large waves-effect waves-light red white-text" type="submit" >
                                            <i class="material-icons right" style="text-align:center;">delete</i></button>
                                    {!! Form::close() !!}
                                
                            </th>
                        </tr>
                        @endforeach
                    </tbody>    
                @endif
            </table>
            {{ $payments->links()}}

            
        </div>
    </div>
    
</div>

@endsection
@section('foot')

@endsection
