@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div style="background-color:111;" class="card orange darken-4">
                <div id="contenedor_fecha" class="card-content white-text">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row justify-content-center">
                        <div id="contenedor_dia" class="col-md-6">
                            <p class="dia-label">{{$dia}}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mes-label">{{$mes}}</p>
                            <p class="anio-label">{{$anio}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div style="margin-top:30px;" class="col-12">
            @if(Auth::user()->role == "doctor")
            <table style="margin-top:30px;margin-left:30px;" class="striped centered responsive-table">
                <thead style="font-size:17px;font-weight:600;">
                    <tr>
                        <th style="width:14%">Hora</th>
                        <th style="width:26%">Paciente</th>
                        <th style="width:30%">Descripción</th>
                        <th style="width:30%">Desarrollo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $appointment)
                    <tr class="center-align">
                        <th>{{ $appointment->hour }}</th>
                        <th>{{ $appointment->patient }}</th>
                        <th>{{ $appointment->description }}</th>
                        <th>
                            <a href="" class="btn-floating btn-large waves-effect waves-light blue darken-3 white-text">
                                <i class="material-icons ">assignment_turned_in</i>
                            </a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="row">
                <div class="col-6">
                    <div style="margin-left:45px;margin-bottom:0;text-align:center;" class="row center-align">
                        <h3>Dr. Alberto García Arellano</h3>
                    </div>
                    <table style="margin-top:0px;margin-left:30px;" class="striped centered responsive-table">
                        <thead style="font-size:17px;font-weight:600;">
                            <tr>
                                <th style="width:14%">Hora</th>
                                <th style="width:26%">Paciente</th>
                                <th style="width:30%">Descripción</th>
                                <th style="width:30%">Desarrollo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointmentsB as $appointment)
                            <tr class="center-align">
                                <th>{{ $appointment->hour }}</th>
                                <th>{{ $appointment->patient }}</th>
                                <th>{{ $appointment->description }}</th>
                                <th>
                                    <a href="" class="btn-floating btn-large waves-effect waves-light blue darken-3 white-text">
                                        <i class="material-icons ">assignment_turned_in</i>
                                    </a>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-6">
                        <div style="margin-left:45px;margin-bottom:0;text-align:center;" class="row center-align">
                                <h3>Dr. Sergio León Díaz Arellano</h3>
                            </div>
                    <table style="margin-top:0px;margin-left:30px;" class="striped centered responsive-table">
                        <thead style="font-size:17px;font-weight:600;">
                            <tr>
                                <th style="width:14%">Hora</th>
                                <th style="width:26%">Paciente</th>
                                <th style="width:30%">Descripción</th>
                                <th style="width:30%">Desarrollo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointmentsS as $appointment)
                            <tr class="center-align">
                                <th>{{ $appointment->hour }}</th>
                                <th>{{ $appointment->patient }}</th>
                                <th>{{ $appointment->description }}</th>
                                <th>
                                    <a href="" class="btn-floating btn-large waves-effect waves-light blue darken-3 white-text">
                                        <i class="material-icons ">assignment_turned_in</i>
                                    </a>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection
