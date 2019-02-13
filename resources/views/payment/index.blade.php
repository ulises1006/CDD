@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div style="margin-top:34px;" class="col-md-12">
            <div style="margin-right:34px;" class="right-align">
                <a class="waves-effect blue btn-large right-align white-text" data-toggle="modal" data-target="#modal1">
                    <i class="material-icons right">add_circle</i>Registrar pago</a>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger" style="magin-top:140px;">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row col-12">
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
            <div style="width: 700px;height:400px;padding-right:0px !important;padding-bottom:0;" class="modal modal_box" id="modal1"
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
                                        <select id="sex" name="paciente">
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
                        <th style="width:25%">{{ $payment->patient_id}}</th>
                        <th style="width:15%">{{ $payment->monto}}</th>
                        <th style="width:15%">{{ $payment->fecha}}</th>
                        <th style="width:25%">{{ $payment->tratamiento}}</th>

                        <th style="width:10%">
                            <a class="btn-floating btn-large waves-effect waves-light red white-text">
                                <i class="material-icons right" style="text-align:center;">delete</i></a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $payments->links()}}

            <div style="width:600px;height:297px;padding-right:0px !important;" class="modal modal_box" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        
                <div class="modal-content">
                    <div class="modal-header" style="text-align:center;">
                        <h3 class="center-align" >Eliminar registro</h3>
                        <button type="button" class="close align-right" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        
                    </div>

                    <div class="modal-body">
                        <h4 class="center-align">Si aceptas los terminos el registro del paciente sera eliminado definitivamente</h4>
                        <h4 class="center-align">¿Realmente deseas eliminarlo?</h4>
                    </div>
                    <div class="modal-footer">
                        <button style="color:black;margin-right:5px;" type="button" class="waves-effect grey lighten-4 btn" data-dismiss="modal">Cancelar</button>
                        <a style="color:white;" onclick="enviar_formulario()" class="waves-effect red darken-3 btn" data-target="modal1">Eliminar</a>


                    </div>
                </div>
        </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('#mydiv').fadeOut('fast');
            }, 3000);
            // page is now ready, initialize the calendar...
        });

    </script>
</div>
@endsection
