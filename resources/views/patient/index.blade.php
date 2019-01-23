@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="right-align">
                <a href="{{ Route('patient.create') }}" class="waves-effect blue btn-large right-align white-text"><i class="material-icons right">add_circle</i>Registrar paciente</a>
            </div>
            <table style="margin-top:30px;" class="striped responsive-table">
                <thead style="font-size:17px;font-weight:600;">
                    <tr>
                        <th>Nombre completo</th>
                        <th>Edad</th>
                        <th>Dirección</th>
                        <th>Código postal</th>
                        <th>Fecha de nacimiento</th>
                        <th>Sexo</th>
                        <th>Ocupación</th>
                        <th>Información</th>
                    </tr>
                </thead>
                <tbody class="centered">
                    @foreach($patients as $patient)
                    <tr>
                        <th>{{ $patient->name }}</th>
                        <th>{{ $patient->age }}</th>
                        <th>{{ $patient->address}}, {{ $patient->state }}</th>
                        <th>{{ $patient->code }}</th>
                        <th>{{ $patient->birthday }}</th>
                        <th>{{ $patient->sex }}</th>
                        <th>{{ $patient->occupation }}</th>
                        <th><a href="{{ Route('patient.show',$patient) }}" class="waves-effect blue btn-small white-text"><i class="material-icons right">visibility</i>Ver</a></th>
                    </tr>
                    @endforeach
                </tbody>
            </table>            
            {{ $patients->links()}}
        </div>
    </div>
</div>
@endsection