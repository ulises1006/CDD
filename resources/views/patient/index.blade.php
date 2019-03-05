@extends('layouts.app')

@section('content')
<div class="container">
    <div style="margin-top:55px;margin-right:0px;margin-left:40px;" class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-6">
                    <form class="form-inline" action="{{ Route('patient.index') }}" method="GET">
                        <label for="nombre">Buscar por nombre</label>
                        <input style="width:80%;margin-right:10px;" type="text" name="nombre" id="nombre">
                        <button type="submit" class="waves-effect blue darken-3 btn right-align white-text">Buscar</button>
                    </form>
                </div>
                <div class="col-6 right-align">
                    <a style="margin-top:10px;" href="{{ Route('patient.create') }}" class="waves-effect blue darken-4 btn-large right-align white-text"><i class="material-icons right">add_circle</i>Registrar paciente</a>
                </div>
            </div>
            
            <table style="margin-top:30px;" class="striped centered responsive-table">

                @if($rol == 'doctor')
                <thead style="font-size:17px;font-weight:600;">
                    <tr>
                        <th style="width:14%">Nombre completo</th>
                        <th style="width:14%">Edad</th>
                        <th style="width:14%">Dirección</th>
                        <th style="width:14%">Fecha de nacimiento</th>
                        <th style="width:14%">Sexo</th>
                        <th style="width:14%">Ocupación</th>
                        <th style="width:14%">Ver</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $patient)
                    <tr class="center-align">
                        <th>{{ $patient->name }}</th>
                        <th>{{ $patient->age }}</th>
                        <th>{{ $patient->address}}, {{ $patient->state }}</th>
                        <th>{{ $patient->birthday }}</th>
                        <th>{{ $patient->sex }}</th>
                        <th>{{ $patient->occupation }}</th>
                        <th><a href="{{ Route('patient.show',$patient) }}" class="btn-floating btn-large waves-effect orange darken-4 white-text">
                            <i class="material-icons right">visibility</i></a>
                        </th>
                        
                    </tr>
                    @endforeach
                </tbody>
                @else
                    <thead style="font-size:17px;font-weight:600;">
                        <tr>
                            <th style="width:14%">Nombre completo</th>
                            <th style="width:14%">Edad</th>
                            <th style="width:14%">Dirección</th>
                            <th style="width:14%">Fecha de nacimiento</th>
                            <th style="width:14%">Sexo</th>
                            <th style="width:14%">Doctor</th>
                            <th style="width:14%">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($patients as $patient)
                        <tr class="center-align">
                            <th>{{ $patient->name }}</th>
                            <th>{{ $patient->age }}</th>
                            <th>{{ $patient->address}}, {{ $patient->state }}</th>
                            <th>{{ $patient->birthday }}</th>
                            <th>{{ $patient->sex }}</th>
                            <th>{{ $patient->doctor->name }}</th>
                            <th><a href="{{ Route('patient.show',$patient) }}" class="btn-floating btn-large waves-effect orange darken-4 white-text">
                                <i class="material-icons right">visibility</i></a>
                            </th>
                        </tr>
                    @endforeach
                @endif
            </table>   
            <div style="text-align:center" class="center-align">
                {{ $patients->links()}}
            </div>         
            
        </div>
    </div>
</div>
@endsection