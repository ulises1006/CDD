@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card indigo darken-1">
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
        <div class="col-12">
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
                    {{-- @foreach($apointments as $appointment) --}}
                    <tr class="center-align">
                        <th>10:30</th>
                        <th>Ulises Mireles Cruz</th>
                        <th>Cambio de ligas</th>
                        <th>
                            <a href="http://localhost/Odontograma/odontograma.php" class="waves-effect blue darken-3 btn-small white-text">
                                <i class="material-icons ">assignment_turned_in</i></a>
                        </th>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
