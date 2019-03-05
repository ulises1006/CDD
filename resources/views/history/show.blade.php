@extends('layouts.app') @section('content')
<div style="margin-left:25px;" class="container">
    <div style="position:relative;margin-top:30px;" class="row justify-content-center">
        <div style="text-align:center;" class="justify-content-center">
            <div class="row">
                <div class="col-3">
                <a style="right: 345px;position:absolute;" class="btn-floating btn-large waves-effect blue darken-3 black-text" href="{{ Route('patient.show',$patient) }}">
                        <i class="material-icons left">arrow_back</i>
                </a>  
                </div>
                <div class="col9">
                 <h1 style="font-weight:900;">Historia clínica</h1>
                </div> 
           
            
            </div>
                <h4>{{ $patient->name }}</h4>
        </div>
        
    </div>
    <div class="row justify-content-center">
        <div style="position:relative;" class="right-align">
            <a href="{{ Route('history.edit',$history) }}" class="waves-effect blue darken-4 btn-large right-align white-text"><i class="material-icons right">edit</i>Editar</a>
            <a href="{{ Route('imprimir_historia',array($history, $patient)) }}" class="waves-effect orange darken-4 btn-large right-align white-text"><i class="material-icons right">print</i>Imprimir</a>
        </div>
    </div>
    <div style="margin-left:19px;" class="row">
        <div style="padding:0;margin-top:20px;" class="row col-12">
            <div class="col-3">
                <h4 style="font-weight:600;">Motivo de la consulta:</h4>
            </div>
            <div style="border-bottom: 0.5px solid black;" class="col-9">
                <h4>{{ $history->motivo }}</h4>
            </div>
        </div>
        <div style="text-align:center;margin-top:25px;margin-bottom:15px;" class="col-12 justify-content-center">
            <h3 style="text-align:center;font-weight:900;">En caso de emergencia, comunicarse con:</h3>
        </div>
        <div style="margin-bottom:0;padding:0;" class="row col-12">
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <h4 style="font-weight:600;">Nombre de contacto:</h4>
                    </div>
                    <div style="border-bottom: 0.5px solid black;" class="col-6">
                        <h4>{{ $history->nombre_emergencia }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <h4 style="font-weight:600;">Número de teléfono:</h4>
                    </div>
                    <div style="border-bottom: 0.5px solid black;" class="col-6">
                        <h4>{{ $history->telefono }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-bottom:0;padding:0;" class="row col-12">
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <h4 style="font-weight:600;">Parentesco con el paciente:</h4>
                    </div>
                    <div style="border-bottom: 0.5px solid black;margin-top:18px;" class="col-6">
                        <h4>{{ $history->parentesco }}</h4>
                    </div>
                </div>
            </div>
            <div style="margin-top:20px;" class="col-6">
                <div class="row">
                    <div class="col-6">
                        <h4 style="font-weight:600;">Ocupación:</h4>
                    </div>
                    <div style="border-bottom: 0.5px solid black;" class="col-6">
                        <h4>{{ $history->ocupacion }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top:10px;border: 0.5px solid black;" class="col-12">
            <div style="text-align:center;margin-top:25px;" class="col-12 justify-content-center">
                <h3 style="text-align:center;font-weight:900;">Antecedentes personales patológicos:</h3>
            </div>


            <table class="striped centered responsive-table">
                <tbody>
                    <tr class="center-align">
                        <th style="width:25%;font-size:21px;">Enfermedad</th>
                        <th style="width:25%;font-size:21px;">Respuesta</th>
                        <th style="width:25%;font-size:21px;">Enfermedad</th>
                        <th style="width:25%;font-size:21px;">Respuesta</th>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="center-align">
                        <th style="width:25%;font-size:19px;">
                            <h4>Anemia</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->anemia }}</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>Infartos previos</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->infartos }}</h4>
                        </th>
                    </tr>
                    <tr class="center-align">
                        <th style="width:25%;font-size:19px;">
                            <h4>Asma</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->asma }}</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>Marcapasos</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->marcapasos }}</h4>
                        </th>
                    </tr>
                    <tr class="center-align">
                        <th style="width:25%;font-size:19px;">
                            <h4>Cáncer</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->cancer }}</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>Migrañas</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->migrañas }}</h4>
                        </th>
                    </tr>
                    <tr class="center-align">
                        <th style="width:25%;font-size:19px;">
                            <h4>Colesterol</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->colesterol }}</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>Presión arterial alta</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->presion_alta }}</h4>
                        </th>
                    </tr>
                    <tr class="center-align">
                        <th style="width:25%;font-size:19px;">
                            <h4>Convulsiones</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->convulsiones }}</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>Presión arterial baja</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->presion_baja }}</h4>
                        </th>
                    </tr>
                    <tr class="center-align">
                        <th style="width:25%;font-size:19px;">
                            <h4>Diabetes</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->diabetes }}</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>Problemas de riñones</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->prob_riñones }}</h4>
                        </th>
                    </tr>
                    <tr class="center-align">
                        <th style="width:25%;font-size:19px;">
                            <h4>Enfermedades cardiacas</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->enf_cardiacas }}</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>Quimioterapias</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->quimioterapias }}</h4>
                        </th>
                    </tr>
                    <tr class="center-align">
                        <th style="width:25%;font-size:19px;">
                            <h4>Epilepsias o desmayos</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->epilepsia }}</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>Sangrados excesivos</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->sangrado }}</h4>
                        </th>
                    </tr>
                    <tr class="center-align">
                        <th style="width:25%;font-size:19px;">
                            <h4>Hemofilia</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->homofilia }}</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>Taquicardias</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->taquicardias }}</h4>
                        </th>
                    </tr>
                    <tr class="center-align">
                        <th style="width:25%;font-size:19px;">
                            <h4>Hepátitis</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->hepatitis }}</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>Tuberculosis</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->tuberculosis }}</h4>
                        </th>
                    </tr>
                    <tr class="center-align">
                        <th style="width:25%;font-size:19px;">
                            <h4>Hipertiroidismo</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->hipertiroidismo }}</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>Úlceras gástricas</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->ulceras_gastricas }}</h4>
                        </th>
                    </tr>
                    <tr class="center-align">
                        <th style="width:25%;font-size:19px;">
                            <h4>Hipotiroidismo</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->hipotiroidismo }}</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>VIH</h4>
                        </th>
                        <th style="width:25%;font-size:19px;">
                            <h4>{{ $history->vih }}</h4>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div style="margin-top:30px;border: 0.5px solid black;margin-left:19px;width:99.5%;" class="col-12">
        <div style="text-align:center;margin-top:25px;" class="col-12 justify-content-center">
            <h3 style="text-align:center;font-weight:900;">Información médica</h3>
        </div>


        <table class="striped centered responsive-table">
            <tbody>
                <tr class="center-align">
                    <th style="width:25%;font-size:21px;">Información</th>
                    <th style="width:25%;font-size:21px;">Respuesta</th>
                    <th style="width:25%;font-size:21px;">Información(mujeres)</th>
                    <th style="width:25%;font-size:21px;">Respuesta</th>
                </tr>
            </tbody>
            <tbody>
                <tr class="center-align">
                    <th style="width:25%;font-size:19px;">
                        <h4>Medicamentos que esta tomando:</h4>
                    </th>
                    <th style="width:25%;font-size:19px;">
                        <h4>{{ $history->medicamentos }}</h4>
                    </th>
                    <th style="width:25%;font-size:19px;">
                        <h4>Embarazo</h4>
                    </th>
                    <th style="width:25%;font-size:19px;">
                        <h4>{{ $history->embarazo }}</h4>
                    </th>
                </tr>
                <tr class="center-align">
                    <th style="width:25%;font-size:19px;">
                        <h4>Alergias</h4>
                    </th>
                    <th style="width:25%;font-size:19px;">
                        <h4>{{ $history->alergias }}</h4>
                    </th>
                    <th style="width:25%;font-size:19px;">
                        <h4>Amamantando</h4>
                    </th>
                    <th style="width:25%;font-size:19px;">
                        <h4>{{ $history->amamantando }}</h4>
                    </th>
                </tr>
                <tr style="height:60px; !important" class="center-align">
                    <th style="width:25%;font-size:19px;">
                        <h4>Problema dental previo</h4>
                    </th>
                    <th style="width:25%;font-size:19px;">
                        <h4>{{ $history->prob_dental_previo }}</h4>
                    </th>
                    <th style="width:25%;font-size:19px;">
                        <h4>Anticonceptivos</h4>
                    </th>
                    <th style="width:25%;font-size:19px;">
                        <h4>{{ $history->anticonceptivo }}</h4>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="margin-top:30px;border: 0.5px solid black;margin-left:19px;width:99.5%;" class="col-12">
        <div style="text-align:center;margin-top:25px;" class="col-12 justify-content-center">
            <h3 style="text-align:center;font-weight:900;">Información médica</h3>
        </div>


        <table class="striped centered responsive-table">
            <tbody>
                <tr class="center-align">
                    <th style="width:16%;font-size:21px;">Información</th>
                    <th style="width:16%;font-size:21px;border-right:0.5px solid black;">Respuesta</th>
                    <th style="width:16%;font-size:21px;">Información</th>
                    <th style="width:16%;font-size:21px;border-right:0.5px solid black;">Respuesta</th>
                    <th style="width:16%;font-size:21px;">Información</th>
                    <th style="width:16%;font-size:21px;">Respuesta</th>
                </tr>
            </tbody>
            <tbody>
                <tr class="center-align">
                    <th style="width:16%;font-size:19px;">
                        <h4>Tabaquismo</h4>
                    </th>
                    <th style="width:16%;font-size:19px;border-right:0.5px solid black;">
                        <h4>{{ $history->tabaquismo }}</h4>
                    </th>
                    <th style="width:16%;font-size:19px;">
                        <h4>Alcoholismo</h4>
                    </th>
                    <th style="width:16%;font-size:19px;border-right:0.5px solid black;">
                        <h4>{{ $history->alcoholismo }}</h4>
                    </th>
                    <th style="width:16%;font-size:19px;">
                        <h4>Drogas</h4>
                    </th>
                    <th style="width:16%;font-size:19px;">
                        <h4>{{ $history->drogas }}</h4>
                    </th>
                </tr>
            </tbody>
        </table>
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
