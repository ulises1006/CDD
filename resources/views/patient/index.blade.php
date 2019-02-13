@extends('layouts.app')

@section('content')
<div class="container">
    <div style="margin-top:55px;margin-right:0px;" class="row justify-content-center">
        <div class="col-md-11">
            <div class="right-align">
                <a href="{{ Route('patient.create') }}" class="waves-effect blue btn-large right-align white-text"><i class="material-icons right">add_circle</i>Registrar paciente</a>
            </div>
            <table style="margin-top:30px;" class="striped centered responsive-table">
                <thead style="font-size:17px;font-weight:600;">
                    <tr>
                        <th style="width:14%">Nombre completo</th>
                        <th style="width:14%">Edad</th>
                        <th style="width:14%">Dirección</th>
                        <th style="width:14%">Fecha de nacimiento</th>
                        <th style="width:14%">Sexo</th>
                        <th style="width:14%">Ocupación</th>
                        <th style="width:14%">Información</th>
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
                        <th><a href="{{ Route('patient.show',$patient) }}" class="waves-effect blue btn-small white-text"><i class="material-icons right">visibility</i>Ver</a></th>
                    </tr>
                    @endforeach
                </tbody>
            </table>   
            <div style="text-align:center" class="center-align">
                {{ $patients->links()}}
            </div>         
            
        </div>
    </div>
</div>
@endsection