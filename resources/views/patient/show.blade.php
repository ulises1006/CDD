@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card hoverable">
                <div style="padding-bottom: 0;padding-top:0;" class="card-content black-text">
                    <div id="titulo_card" class="card-header">Información del paciente</div>
                    <div class="row">
                        <div style="text-align:center;" class="col-4 center-align valign-wrapper">
                            <div style="text-align:center;margin:auto;" class="center-align">
                                <img style="width:200px;height:250;border-radius:50%;" src="../../images/user.jpg">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="row">
                                <div class="col-6">
                                    <h5 id="info_h5">Nombre del paciente: </h5>
                                </div>
                                <div id="info_p" class="col-6">{{ $patient->name }}</div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h5 id="info_h5">Dirección: </h5>
                                </div>
                                <div id="info_p" class="col-6">{{ $patient->address }}, {{ $patient->state }}, {{ $patient->code }}</div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h5 id="info_h5">Teléfono: </h5>
                                </div>
                                <div id="info_p" class="col-6">{{ $patient->phone }}</div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h5 id="info_h5">Fecha de nacimiento: </h5>
                                </div>
                                <div id="info_p" class="col-6">{{ $patient->birthday }}</div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h5 id="info_h5">Edad: </h5>
                                </div>
                                <div id="info_p" class="col-6">{{ $patient->age }}</div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h5 id="info_h5">Ocupación: </h5>
                                </div>
                                <div id="info_p" class="col-6">{{ $patient->occupation }}</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-action">
                    <a class="waves-effect blue darken-3 btn" href="{{ route('patient.edit',$patient->id) }}">Editar</a>
                    <a style="color:white;"  onclick="enviar_formulario()" class="waves-effect red darken-3 btn" data-target="modal1">Eliminar</a>

                    
                    <a style="color:white;" class="waves-effect red darken-3 btn modal-trigger" data-target="modal1">Eliminar</a> 

                    <!-- Modal Structure -->
                     {{-- <div id="modal1" class="modal">
                        <div class="modal-content">
                            <h4>Modal Header</h4>
                            <p>A bunch of text</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#" onclick="enviar_formulario()" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
                        </div>
                    </div>  --}}
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top:50px; margin-left:40px;" class="row">
        <div class="col-4">
            <div class="card hoverable">
                <div class="card-image">
                    <img style="height:240px;" src="../../images/registro.jpg">
                </div>
                <div style="text-align:center;" class="card-content">
                    <span style="text-align:center;" class="card-title black-text">Historia clínica</span>
                    <p style="font-size:16px;">Agregar una historia clínica para tomar en cuenta tratamientos pasados, enfermedades, alergias o si se
                        encuentra tomando medicamento actualmente</p>
                </div>
                <div style="text-align:center;margin-bottom:18px;margin-top:18px;">
                    <a class="waves-effect blue darken-3 btn" href="{{ Route('history.show',$patient->id) }}">Rgistrar</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card hoverable">
                <div class="card-image">
                    <img style="height:240px;" src="../../images/diagnostico.jpg">
                </div>
                <div style="padding-top:10px;text-align:center;" class="card-content">
                    <span style="margin-bottom:12px;text-align:center;" class="card-title black-text">Diagnóstico y tratamientos</span>
                    <p style="font-size:16px;">Diagnóstico de la situación actual del paciente, incluyela evaluación de los dientes existentes, el registro
                        del odontograma y el registro de un nuevo tratamiento</p>
                </div>
                <div style="text-align:center;margin-bottom:18px;margin-top:18px;">
                    <a class="waves-effect blue darken-3 btn" href="{{ Route('treatment.index') }}">Registrar</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card hoverable">
                <div class="card-image">
                    <img style="height:240px;" src="../../images/pagos2.jpg">

                </div>
                <div style="text-align:center;" class="card-content">
                    <span style="text-align:center;" class="card-title black-text">Pagos</span>
                    <p style="font-size:16px;">En esta sección es para revisar los pagos y anticipos que ha realizado el paciente de los diferentes
                        tratamientos así como la posibilidad de agregar un pago nuevo </p>
                </div>
                <div style="text-align:center; margin-bottom:18px;margin-top:18px;">
                    <a class="waves-effect blue darken-3 btn" href="{{ Route('payment.index') }}">Registrar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<form method="POST" action="{{ route('patient.destroy', $patient) }}" name="delete_form">
    {{ csrf_field() }} {{ method_field('DELETE')}}
</form>
@endsection 
@section('foot')
<script>
    function enviar_formulario() {
        document.delete_form.submit();
    }

</script>
@endsection
