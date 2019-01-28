@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
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
                        <th>
                            <a href="{{ Route('patient.show',$patient) }}" class="waves-effect blue btn-small white-text">
                                <i class="material-icons right">visibility</i>Ver</a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</div>
{{--
<form method="POST" action="{{ route('patient.destroy', $patient) }}" name="delete_form">
    {{ csrf_field() }} {{ method_field('DELETE')}}
</form> --}} @endsection @section('foot')
<script>
    function enviar_formulario() {
        document.delete_form.submit();
    }

</script>
@endsection
