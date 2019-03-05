@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div style="margin-top:34px;" class="col-md-12">
            
            @if(count($tratamientos) >= 1)
            
            <div style="margin:0 34px;" class="row">
                <div class="col-6">        
                   <a class="waves-effect blue darken-3 btn-large left-align white-text" onclick="window.history.back();">
                        <i class="material-icons left">arrow_back</i>Regresar
                    </a>
                </div>
                <div class="col-6 right-align">  
                    <a class="waves-effect blue darken-3 btn-large right-align white-text" data-toggle="modal" data-target="#modal1">
                        <i class="material-icons right">add_circle</i>Registrar pago
                    </a>
                </div>   
            </div>
            @else
            <div class="row justify-content-center">
                <h3>No se tiene registrado ningún tratamiento</h3>
            </div>
            <div class="row justify-content-center">
                    <a style="margin-right:45px;" class="waves-effect blue darken-3 btn-large left-align white-text" onclick="window.history.back();">
                            <i class="material-icons left">arrow_back</i>Regresar
                        </a>
                    <a href="{{ route('treatment.index') }}" class="waves-effect blue darken-3 btn-large right-align white-text" >
                            <i class="material-icons right">add_circle</i>Registrar tratamiento</a>
                           
            </div>
            @endif

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
            <script>
                    setTimeout(function () {
                        $('#mydiv').fadeOut('fast');
                    }, 3000);
            </script>
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
                                        <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                                        <input id="patient" type="text" name="patient" value="{{ $patient->name }}" disabled>
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
                                    <div class="input-field col s4">
                                        <select id="tratamiento_id" name="tratamiento_id">
                                                <option value="" disabled selected>Tratamiento</option>
                                                @foreach ($tratamientos as $tratamiento)
                                                @if($tratamiento->status == 'En proceso')
                                                <option value="{{ $tratamiento->id }}">{{ $tratamiento->name }}</option>
                                                
                                                @endif
                                                @endforeach
                                            </select>
                                        @if ($errors->has('tratamiento_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tratamiento_id') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="input-field col s4">
                                        <label id="label-form" for="tratamiento">{{ __('Descripción') }}</label>
                                        <input id="tratamiento" type="text" class="form-control{{ $errors->has('tratamiento') ? ' is-invalid' : '' }}" name="tratamiento"
                                            value="{{ old('tratamiento') }}"> 
                                        @if ($errors->has('tratamiento'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('tratamiento') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                    @if( Auth::user()->role == 'secretaria')
                                        <div class="input-field col s4">
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
            @foreach ($tratamientos as $tratamiento)
            <div class="row">
                <div class="col-md-6">
                <div style="margin-left:45px;" class="card hoverable">
                        <div style="padding-bottom: 0;padding-top:0;" class="card-content black-text">
                            <div id="titulo_card" class="card-header">Información de tratamiento</div>
                            <div class="row">
                                
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 id="info_h5">Nombre del tratamiento: </h5>
                                        </div>
                                        <div id="info_p" class="col-6">{{ $tratamiento->name }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 id="info_h5">Estado del tratamiento: </h5>
                                        </div>
                                        <div id="info_p" class="col-6">{{ $tratamiento->status }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 id="info_h5">Precio total: </h5>
                                        </div>
                                        <div id="info_p" class="col-6">{{ $tratamiento->price }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 id="info_h5">Total Pagado: </h5>
                                        </div>
                                        <?php $totalParcial = 0; ?>
                                        @foreach ($payments as $payment)
                                        @if($payment->treatment_id == $tratamiento->id)
                                        <?php 
                                            $totalParcial+=$payment->monto;
                                        ?>
                                        @endif
                                        @endforeach
                                        <div id="info_p" class="col-6">$ {{ $totalParcial }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 id="info_h5">Restante: </h5>
                                        </div>
                                        <?php $totalParcial = 0; $restante = 0; $total=$tratamiento->price; ?>
                                        @foreach ($payments as $payment)
                                        @if($payment->treatment_id == $tratamiento->id)
                                        <?php 
                                            $totalParcial+=$payment->monto;
                                            $restante = $total - $totalParcial;
                                        ?>
                                        @endif
                                        @endforeach
                                            <div id="info_p" class="col-6"> $ {{ $restante }}</div>
                                    
                                    </div>
                                    
                                </div>
                            </div>
        
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="max-height:355px;height:355px;overflow-x: scroll;" class="card">
                            <div style="margin-bottom:0;" id="titulo_card" class="card-header">Pagos</div>
                        <table class="striped centered responsive-table">
                            <thead style="font-size:17px;font-weight:600;">
                            <tr>
                                <th>Fecha</th>
                                <th>Cantidad</th>
                                <th>Descripción</th>
                            </tr>
                            </thead>
                            <tbody>
                                    <?php $pagos = array(); ?>
                                    @foreach ($payments as $payment)
                                        @if($payment->treatment_id == $tratamiento->id)
                                            <?php 
                                                array_push($pagos,$payment);
                                            ?>
                                        @endif
                                    @endforeach
                                 @foreach ($pagos as $pago)
                                 <tr>
                                    <th style="text-align:center;">{{ $pago->fecha }}</th>
                                    <th style="text-align:center;">$ {{ $pago->monto }}</th>
                                    <th style="text-align:center;">{{ $pago->tratamiento }}</th>
                                </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                @endforeach
            
            
        </div>
    </div>
    
</div>

@endsection
@section('foot')

@endsection
